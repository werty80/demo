<?php

namespace App\Http\Controllers;

use App\Models\People;
use Dflydev\DotAccessData\Data;

class PeoplesController extends Controller
{
    public function index()
    {
        return view('peoples.index');
    }

    public function create(People $people)
    {
        return view('peoples.create', ['people' => $people]);
    }

    public function store(Data $data)
    {
        $data = request()->validate([
            'name' => 'required',
            'house_id' => 'required',
            'id_number' => 'required',
            'email' => 'required|email',
            'phone' => 'required|min:10',
            'gender' => 'required|in:male,female',
            'date_of_birth' => 'required|date',
            'address' => 'required',
            'nationality' => 'required',
            'status' => 'required|in:single,married,divorced'
        ]);

        People::create($data);

        return redirect('/peoples');
    }

    public function show(People $people)
    {
        return view('peoples.show', ['people' => $people]);
    }

    public function edit(People $people)
    {
        return view('peoples.edit', ['people' => $people]);
    }

    public function update(People $people)
    {
        $data = request()->validate([
            'name' => 'required',
            'house_id' => 'required',
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
            'house_id' => $data['house_id'],
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

    public function destroy(People $people)
    {
        $people->delete();

        return back();
    }
}
