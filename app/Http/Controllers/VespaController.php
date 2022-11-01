<?php

namespace App\Http\Controllers;

use App\Models\vespa;
use Illuminate\Http\Request;

class VespaController extends Controller
{
    public function index(){
         $vespas = vespa::all();

        return view('vespa', compact('vespas'));
    }
}
