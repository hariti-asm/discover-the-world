<?php

namespace App\Http\Controllers;
use App\Models\Adventure;
use App\Models\Destination;

use Illuminate\Http\Request;

class AddAdventureController extends Controller
{
    public function showAdventureForm(){
        $destinations = Destination::all();
        // $destinations = Destination::with('image')->get();
        return view('addAdventure',["destinations"=>$destinations]);
    }
}
