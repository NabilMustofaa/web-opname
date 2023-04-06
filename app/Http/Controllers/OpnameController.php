<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OpnameController extends Controller
{
    public function create()
    {
        return view('desktop.opname.create');
    }

    public function users()
    {
        return view('desktop.opname.users');
    }

}
