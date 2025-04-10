<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeopleController extends Controller
{
    public function index()
    {
        return view('people.index');
    }
    public function create()
    {


    }

}
