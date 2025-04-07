<?php

namespace App\Http\Controllers;

use App\Models\House;
use App\Models\Village;
use Dflydev\DotAccessData\Data;
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

    public function store(Data $data)
    {
        $data = request()->validate([
            'name' => 'required',
            'village_id' => 'required',
        ]);

        House::create($data);

        return redirect()->route('/islands');
    }

    /**
     * Display the specified resource.
     */
    public function show(House $house)
    {
        return view('houses.show', ['house' => $house]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(House $house)
    {
        return view('houses.edit', ['house' => $house]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update( House $house)
    {
        $data = request()->validate([
            'name' => 'required',
            'village_id' => 'required|exists:villages,id',

        ]);

        $house->update([
            'name' => $data['name'],
            'village_id' => $data['village_id'],
        ]);

        return redirect()->route('/houses');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(House $house)
    {
        $house->delete();

        return redirect()->route('houses.index');
    }
}
