<?php

namespace App\Http\Controllers;

use App\Models\House;
use App\Models\Village;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('houses.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $villages = Village::all();
        return view('houses.create',
         compact('villages'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'village_id' => 'required|exists:villages,id',
            'name' => 'required|string|max:255',
        ]);

        House::create([
            'name' => $request->name,
            'village_id' => $request->village_id,
        ]);

        return redirect()->route('houses.index')->with('success', 'House added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(House $house)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(House $house)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, House $house)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(House $house)
    {
        //
    }
}
