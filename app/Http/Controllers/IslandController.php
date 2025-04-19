<?php

namespace App\Http\Controllers;

use App\Models\Island;
use Dflydev\DotAccessData\Data;

class IslandController extends controller
{
    public function index()
    {
        return view('island.index', [
            'islands' => Island::withCount('villages')->paginate(),
        ]);

    }
    public function show(Island $island)
    {
        $island->load('villages');

        return view('island.show', [
            'breadcrumb' => [
                ['label' => 'Home', 'url' => '/'],
                ['label' => 'Islands', 'url' => route('islands.index')],
                ['label' => $island->name, 'url' => route('islands.show', $island->id)],
            ],
            'island' => $island]);
    }
    public function create()
    {
        return view('island.create');
    }
    public function store(Data $data)
    {
        $data = request()->validate([
            'name' => ['required'],
            'code' => ['required'],
            'country' => ['required'],
        ]);

        Island::create($data);

        return redirect('/islands');
    }

    public function edit(Island $island)
    {
        return view('island.edit', ['island' => $island]);
    }

    public function update(Island $island)
    {
        $data = request()->validate([
            'name' => 'required',
            'code' => 'required',
            'country' => 'required',
        ]);

        $island->update([
            'name' => $data['name'],
            'code' => $data['code'],
            'country' => $data['country'],
        ]);

        return redirect('/islands');
    }

    public function destroy(Island $island)
    {

        $island->loadCount('villages');

        if ($island->villages_count > 0) {
            return redirect()->back()->withErrors('Island has villages');
        }
        $island->delete();

        return redirect('/islands');
    }
}
