<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Destination;
class destinationController extends Controller
{
public function getDestinationsWithImages()
{
    $destinations = Destination::all();
    $destinations = Destination::with('image')->get();

    return view('welcome', ['destinations'=>$destinations]);
}

}
