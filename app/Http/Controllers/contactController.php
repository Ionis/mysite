<?php

namespace App\Http\Controllers;

use App\Models\Contact;
//use Illuminate\Http\Request;
use App\Http\Requests\contactRequest;

class contactController extends Controller
{
    public function submit(contactRequest $request): \Illuminate\Http\RedirectResponse
    {
        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->theme = $request->input('theme');
        $contact->message = $request->input('message');

        $contact->save();
        return redirect()->route('contact')->with('success', 'Обращение было отправлено!');
    }

    public function showUserMessages(): \Illuminate\Contracts\View\View
    {
        $contact = new Contact();

        return view('userMessages', ['data' => $contact->all()]);
    }

    public function showOneMessage($id)
    {
        $contact = new Contact();
        return view('oneMessage', ['data' => $contact->find($id)]);
    }

    public function showUpdateForm($id)
    {
        $contact = new Contact();
        return view('updateForm', ['data' => $contact->find($id)]);
    }

    public function update(contactRequest $request, $id)
    {
        $contact = Contact::find($id);
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->theme = $request->input('theme');
        $contact->message = $request->input('message');

        $contact->save();
        return redirect()->route('contact-oneMessage', $id)->with('success', 'Изменения были сохранены!');
    }

    public function delete($id)
    {
        Contact::find('id')->delete();
        return redirect()->route('contact-userMessages', $id)->with('success', 'Обращение было удалено');
    }
}
