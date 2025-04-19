<?php

namespace App\Http\Controllers;

use App\Models\House;
use App\Models\Island;
use App\Models\Village;
use Dflydev\DotAccessData\Data;

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
        $selectedVillage = request('village');
        $villages = Village::all();
        return view('houses.create',
         compact('villages', 'selectedVillage'));
    }

    public function store(Data $data)
    {
        $data = request()->validate([
            'name' => 'required',
            'village_id' => 'required|exists:villages,id',
        ]);

        House::create($data);

        return redirect()->route('villages.show', $data['village_id'])->with('success', 'House created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Island $island, Village $village, House $house )
    {
        $house->load('peoples');

        return view('houses.show', [
            'island' => $island,
            'village' => $village,
            'house' => $house,
        ]);
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
            'village_id' => 'required',

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

        return back();
    }
}
