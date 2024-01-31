<?php

namespace App\Http\Controllers;

use App\Models\Adventure;
use Illuminate\Http\Request;

class AdventureController extends Controller
{
    public function getAdventures($id){
        $adventures= Adventure::where('destination_id',$id)->with('image','user')->get();
        return view ('adventures',['adventures'=>$adventures]);
    }
}
