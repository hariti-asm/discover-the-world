<?php

namespace App\Http\Controllers;

use App\Models\Adventure;
use Illuminate\Http\Request;

class AdventureController extends Controller
{
    public function getAdventures($id){
        $adventures= Adventure::where('destination_id',$id)->with('image','user')->get();
        // dd($adventures);
        return view ('adventures',['adventures'=>$adventures]);
    }
}
