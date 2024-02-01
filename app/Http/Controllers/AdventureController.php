<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

use App\Models\Adventure;
use App\Models\Image;

use Illuminate\Http\Request;

class AdventureController extends Controller
{
    public function getAdventures($id)
    {
        $adventures = Adventure::where('destination_id', $id)->with('images', 'user')->get();
        return view('adventures', ['adventures' => $adventures]);
    }
    public function getMyAdventures() {
        $id = auth()->id();
        $adventures = Adventure::where('user_id', $id)->with('images', 'user')->get();
        return view('MyAdventures', ['adventures' => $adventures]);
    }
    public function allAdventures(){

        $adventures=Adventure::all();
        return view('allAdventures', ['adventures' => $adventures]);

    }
    
    public function saveAdventure(Request $request)
    {
        $incomingData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'country' => 'required|string|max:255',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'user_id' => 'required',
             'destination_id' => 'required|exists:destinations,id',
        ]);

        

        $result = Adventure::create($incomingData);
       

        $imagePaths = [];

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('adventure_images', 'public');
                $imagePaths[] = $path;

                // Create Image record for each image path
                $newImage = new Image([
                    'path' => $path,
                    'adventure_id' => $result->id, // Set the adventure_id for the image
                ]);
                $newImage->save();
            }
        }

return redirect()->route('adventures', ['id' => $incomingData['destination_id']])->with('success', 'Adventure saved successfully!');
    }
}
