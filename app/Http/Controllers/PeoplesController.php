<?php

namespace App\Http\Controllers;

use App\Models\Peoples;
use Dflydev\DotAccessData\Data;

class PeoplesController extends Controller
{
    public function index()
    {
        return view('peoples.index');
    }

    public function create()
    {
        $selectedPeople = request('people');
        $people = Peoples::all();
        return view('peoples.create', compact('people', 'selectedPeople'));
    }

    public function store(Data $data)
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|min:10',
            'gender' => 'required|in:male,female',
            'date_of_birth' => 'required|date',
            'address' => 'required',
            'nationality' => 'required',
            'status' => 'required|in:single,married,divorced'
        ]);

        Peoples::create($data);

        return redirect('/peoples');
    }
    public function show(Peoples $people)
    {
        return view('peoples.show', ['people' => $people]);
    }
    public function edit(Peoples $people)
    {
        return view('peoples.edit', ['people' => $people]);
    }
    public function update(Peoples $people)
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|min:10',
            'gender' => 'required|in:male,female',
            'date_of_birth' => 'required|date',
            'address' => 'required',
            'nationality' => 'required',
            'status' => 'required|in:single,married,divorced'
        ]);

        $people->update([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'gender' => $data['gender'],
            'date_of_birth' => $data['date_of_birth'],
            'address' => $data['address'],
            'nationality' => $data['nationality'],
            'status' => $data['status'],
        ]);

        return redirect('/peoples');
    }
    public function destroy(Peoples $people)
    {
        $people->delete();

        return back();
    }
}
