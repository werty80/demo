<?php

namespace App\Http\Controllers;

use App\Models\Island;
use App\Models\Village;
use Dflydev\DotAccessData\Data;

class VillageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $islands = Island::all();
        $selectedIsland = request('island');
        return view('village.create', compact('islands', 'selectedIsland'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Data $data)
    {
        $data = request()->validate([
            'name' => ['required'],
            'code' => ['required', 'unique:villages,code'],
            'island_id' => ['required'],
        ]);
        Village::create($data);

        return redirect()->route('islands.show', $data['island_id']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Village $village)
    {
        return view('village.show', ['village' => $village]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Village $village)
    {
        return view('village.edit', ['village' => $village]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Village $village)
    {
        $data = request()->validate([
            'name' => ['required'],
            'code' => ['required'],
        ]);
        $village->update([
            'name' => $data['name'],
            'code' => $data['code'],
        ]);

        return redirect()->route('islands.show', $data['island_id']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Village $village)
    {
        $village->delete();

        return redirect ('/islands');
    }
}
