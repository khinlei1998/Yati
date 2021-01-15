<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function home(){
        return Inertia::render('Home');

    }

    public function teamshow(){
        return Inertia::render('Teamshow');
    }

    public function finaleshow(){
        return Inertia::render('Finaleshow');

    }
}
