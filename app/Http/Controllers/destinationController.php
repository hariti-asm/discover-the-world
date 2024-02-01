<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Destination;
use App\Models\Adventure;
class destinationController extends Controller
{
    public function getDestinationsWithImages()
    {
        $destinations = Destination::with('image')->get();
        $usersNumber = User::count();
        $destinationsNumber=Destination::count();
        $adventuresNumber=Adventure::count();
        return view('welcome', compact('destinations', 'usersNumber','destinationsNumber','adventuresNumber'));
    }
    

}
