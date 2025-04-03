<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Dflydev\DotAccessData\Data;
use Illuminate\Validation\Rule;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::latest()->paginate(7);

        return view('contact.index', [
            'contacts' => $contacts,
        ]);
    }

    public function create()
    {
        return view('contact.create');
    }

    public function store(Data $data)
    {

        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|unique:contacts,email',
            'phone' => 'sometimes',
            'address' => 'sometimes',
            'city' => 'sometimes',
            'state' => 'sometimes',
            'zipcode' => 'sometimes',
            'country' => 'sometimes',
            'notes' => 'sometimes'

        ]);

        Contact::create($data);


        return redirect()->to('/contacts');

    }

    public function show(Contact $contact)
    {
        return view('contact.show', ['contact' => $contact]);
    }

    public function edit(Contact $contact)
    {
        return view('contact.edit', ['contact' => $contact]);
    }

    public function update(Contact $contact)
    {

        $data = request()->validate([
            'name' => 'required',
            'email' => [
                'required',
                Rule::unique('contacts')->ignore($contact->id),
            ],
            'phone' => 'sometimes',
            'address' => 'sometimes',
            'city' => 'sometimes',
            'state' => 'sometimes',
            'zipcode' => 'sometimes',
            'country' => 'sometimes',
            'notes' => 'sometimes'
        ]);

        $contact->update([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'address' => $data['address'],
            'city' => $data['city'],
            'state' => $data['state'],
            'zipcode' => $data['zipcode'],
            'country' => $data['country'],
            'notes' => $data['notes'],
        ]);

        return redirect()->to('/contacts');
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect('/contacts');
    }
}
