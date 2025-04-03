<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use Dflydev\DotAccessData\Data;


class EmployerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('employer.index', [
            'employers' => Employer::withCount('jobs')->paginate(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Data $data)
    {
        $data = request()->validate([
            'name' => ['required'],
        ]);

        Employer::create($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Employer $employer)
    {
        return view('employer.show', [
            'employer' => $employer,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employer $employer)
    {
        return view('employer.edit', ['employer' => $employer]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update( Employer $employer)
    {
       $data = request()->validate([
           'name' => ['required'],

       ]);

       $employer->update([
           'name' => $data['name'],
       ]);

       return redirect('/employers');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employer $employer)
    {

        $employer->loadCount('jobs');

        if ($employer->jobs_count > 0) {
            return redirect()->back()->withErrors('Employer has jobs');
        }

        $employer->delete();

        return redirect('/employers');
    }
}
