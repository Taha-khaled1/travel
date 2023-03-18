<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Trip;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class WebController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
          $tripAdvun=Trip::where('event_id','1')->get();
          $tripship=Trip::where('event_id','3')->get();
          $tripcar=Trip::where('event_id','2')->get();
          $event   =   Event::all();
          return view('trip.home',['tripAdvun'=>$tripAdvun,'event'=>$event,'tripship'=>$tripship,'tripcar'=>$tripcar]);
      
    }
    public function checkout(Request $request)
    {

          $event   =   Event::all();
          $validated = $request->validate([
            'start_data' => 'required',
            'end_data' => 'required',
            'trip_id' => '',
             ],[           
           'start_data' => 'يرجي ادخال تاريخ البدايه', 
           'end_data' => 'يرجي ادخال تاريخ النهايه',
             ]);

         $request->session()->put('trip_dates', $validated);

        return redirect()->route('showDetailsForm',['event'=>$event]);
        
      
    }


    public function showDetailsForm()
    {  $event   =   Event::all();
        return view('trip.check_out',['event'=>$event]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {  
         $event   =   Event::all();
        return view('trip.conact_us',['event'=>$event]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $event   =   Event::all();
        return view('trip.about',['event'=>$event]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $event   =   Event::all();
        $trip   =    Trip::paginate(12);
        return view('trip.more_trip',['event'=>$event,'trip'=>$trip]);
    }
    public function moreType($id)
    {
        $event   =   Event::all();
        $trip   =    Trip::where('event_id',$id)->paginate(12);
        return view('trip.more_trip',['event'=>$event,'trip'=>$trip]);
    }



    public function detalisTrip($id)
    {
        $event   =   Event::all();
        $trip = Trip::findOrFail($id);
        $smillerProduct = Trip::where('event_id','1')->take(3)->get();
        return view('trip.detalis_trip',['event'=>$event,'trip'=>$trip,'smillerProduct'=>$smillerProduct]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
