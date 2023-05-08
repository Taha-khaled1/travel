<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use App\Models\Trip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userFavorites = auth()->user()->favorites()->with('trip')->get();

         return view('user.favorites', compact('userFavorites'));
    }

    public function addFavorite($tripId)
    {
        $user = Auth::user();
        $trip = Trip::findOrFail($tripId);
    
        // Check if the trip already exists in the wishlist
        $favorite = Favorite::where('user_id', $user->id)
                            ->where('trip_id', $trip->id)
                            ->first();
    
        if ($favorite) {
            // If the trip already exists in the wishlist, remove it
            $favorite->delete();
            return redirect()->back()->with('success', 'Removed from favorites');
        } else {
            // If the trip does not exist in the wishlist, add it
            $favorite = new Favorite();
            $favorite->user_id = $user->id;
            $favorite->trip_id = $trip->id;
            $favorite->save();
            return redirect()->back()->with('success', 'Added to favorites');
        }
    }
    
    public function removeFavorite($tripId)
    {
        $user = Auth::user();
        $trip = trip::findOrFail($tripId);
    
        $favorite = Favorite::where('user_id', $user->id)->where('trip_id', $trip->id)->firstOrFail();
        $favorite->delete();
    
        return back();
    }


 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

   
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
