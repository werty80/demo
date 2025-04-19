<?php

namespace App\Http\Controllers;

use App\Models\Island;
use App\Models\Village;
use Dflydev\DotAccessData\Data;

class VillageController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        $islands = Island::all();
        $selectedIsland = request('island');
        return view('village.create', compact('islands', 'selectedIsland'));
    }

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

    public function show(Island $island, Village $village)
    {
        $village->load('houses');

        return view('village.show', [
            'island' => $island,
            'village' => $village,
        ]);

    }

    public function edit(Village $village)
    {
        return view('village.edit', ['village' => $village]);
    }

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

    public function destroy(Village $village)
    {
        $village->delete();

        return redirect ('/islands');
    }
}
