<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Features;
use App\Models\Trip;
use App\Models\TripDetalis;
use Illuminate\Http\Request;

class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
          $events=  Event::all();
        
          return view('trip.insert_trip',['events'=>$events]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function viewTrip()
    {    $trips= Trip::all();
        $events=  Event::all();
        return view('trip.trip_view',['trips'=>$trips,'events'=>$events]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   return $request;
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'city' => 'required|string|max:255', 
            'season' => 'required|string|max:255',
            'working_days' => 'required',
            'price' => 'required|numeric',
            'description' => 'required|string',
           
            'start_time' => 'required|string',
            'end_time' => 'required|string',
            'event_id' => 'required',
            'addrees' =>'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ],[
            'name.required' =>'يرجي ادخال اسم العقار',
            'image.required' =>'يرجي ادخال الصوره',
            'country' => 'يرجي ادخال الدوله', 
            'city' => 'يرجي ادخال المدينه', 
            'season' => 'يرجي ادخال الموسم الملائمه',
            'event_id' => 'يرجي ادخال نوع العقار',
            'price' => 'يرجي ادخال السعر',
            'addrees' => 'يرجي ادخال العنوان',
            'description' => 'يرجي ادخال الوصف',
            'address' =>'يرجي ادخال العنوان',
            'start_time' =>'يرجي ادخال تاريخ البدايه',
            'end_time' =>'يرجي ادخال تاريخ النهايه',
            'working_days' =>'يرجي ادخال ايام العمل',
            'price.numeric' =>'يرجي ادخال السعر عدد وليس اي شئ اخر',

        ]);   
      
      
        $filename = time().'.'.$request->image->getClientOriginalExtension();
        $path = $request->image->storeAs('catogeryimage', $filename,'Taha');//اسم الفولدر /اسم الملف /disksال 
        ///
        $trip = new Trip(); 
        $trip->name = $request->name; 
        $trip->city = $request->city; 
        $trip->country = $request->country; 
        $trip->event_id = $request->event_id; 
        $trip->price = $request->price; 
        $trip->user_id = Getuserid();  
        $trip->image =$path;
        $trip->status =1; 
        $trip->save();


        $tripDetalis = new TripDetalis(); 
        $tripDetalis->description = $request->description; 
       // $tripDetalis->bank = 'حساب بنكي'; 
        $tripDetalis->working_days = $request->working_days; 
        $tripDetalis->start_time = $request->start_time; 
        $tripDetalis->end_time = $request->end_time; 
        $tripDetalis->longitude = "35.89999"; 
        $tripDetalis->latitude = "37.8888"; 

        $tripDetalis->city = $request->city;
        $tripDetalis->price_day = $request->price_day;
        $tripDetalis->price_hour = $request->price_hour;
        $tripDetalis->trip_id = $trip->id;
        $tripDetalis->addrees = $request->addrees; 
        $tripDetalis->season = $request->season; 
        $tripDetalis->save();



        foreach ($request->future as $fut) {
            $model = new Features();
            $model->name = $fut;
            $model->trip_id = $trip->id;
            $model->save();
        }

        session()->flash('Add', 'تم اضافة القسم بنجاح ');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {   $events=  Event::all();
        $trip = Trip::findOrFail($id);
       
        return view('trip.detalis_view',['trip'=>$trip,'events'=>$events]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Trip $trip)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Trip $trip)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $trip = Trip::findOrFail($request->pro_id);
        $file_path = public_path($trip->image);
        if(file_exists($file_path)) {
            unlink($file_path);
        }
        $trip->delete();
        session()->flash('delete', 'تم حذف الحدث بنجاح');
        return back();
    }
}
