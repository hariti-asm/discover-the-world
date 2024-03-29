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
    public function getDetails($id)
    {
        $adventures = Adventure::where('id', $id)->with('images', 'user')->get();
        return view('getDetails', ['adventures' => $adventures]);
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
    public function allAdventuresdate()
{
    $adventures = Adventure::orderBy('created_at', 'desc')->get();
    return view('allAdventuresdate', ['adventures' => $adventures]);
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
            // Get the original file name
            $originalName = $image->getClientOriginalName();

            // Specify your target directory
            $targetDirectory = public_path('adventure_images/');

            // Move the adventure_imagesed file to the target directory
            $image->move($targetDirectory, $originalName);

            // Construct the image path
            $path = 'adventure_images/' . $originalName;

            $imagePaths[] = $path;

            // Create Image record for each image path
            $newImage = new Image([
                'path' => $path,
                'adventure_id' => $result->id,
            ]);
            $newImage->save();
        }
    }

    return redirect()->route('adventures', ['id' => $incomingData['destination_id']])->with('success', 'Adventure saved successfully!');
}


}
