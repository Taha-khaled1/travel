<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Event;
use App\Models\Trip;
use Illuminate\Http\Request;

class FlutterAppController extends Controller
{
    
    public function adve()
        {
            $tripAdvun=Trip::where('event_id','1')->limit(10)->get();
          
            return  response()->json([
                'status_code' => 200,
                'message' => 'Success',
                
                
                'trip'=>$tripAdvun],200); 
        }//
    
        public function shep()
        {
            $tripAdvun=Trip::where('event_id','2')->limit(10)->get();
           
          
            return  response()->json(
            
                [
                    'status_code' => 200,
                    'message' => 'Success', 
                    
                    'trip'=>$tripAdvun
                ],200); 
        }//

        public function trip()
        {
            $tripAdvun=Trip::where('event_id','3')->limit(10)->get();
           
          
            return  response()->json([
                'status_code' => 200,
                'message' => 'Success',
                'trip'=>$tripAdvun
            ],200); 
        }

        public function catogery()
        {
            $catogery=Event::all();
           
          
            return  response()->json([
                'status_code' => 200,
                'message' => 'Success',
                
                'catogery'=>$catogery
            ],200); 
        }


        public function showdetalis($id)
        {
            $trip = Trip::with(
            ['trip_details', 'features'=> function ($query) {
             $query->select('name', 'trip_id');
            }, 
            ]
            
            )->find($id);
        
            if (!$trip) {
                return response()->json(['error' => 'trip not found'], 404);
            }
        
       
            $features = $trip->features->pluck('name')->toArray();

            return response()->json([
                'status_code' => 200,
                'message' => 'Success',
                'trip' => array_merge($trip->toArray(),['features' => $features]),
            ], 200);
        }


        public function search(Request $request)
        {
            $searchTerm = $request->input('search');

            $trips = Trip::where('name', 'LIKE', '%'.$searchTerm.'%')
                                ->orWhere('country', 'LIKE', '%'.$searchTerm.'%')
                                ->orWhere('event_id', 'LIKE', '%'.$searchTerm.'%')
                                ->paginate(10);
        
            return response()->json([ 
                'status_code' => 200,
                'message' => 'Success',
                'trip' => $trips, 
               
        ]);
        }



        public function booktrip(Request $request)
        {
            $book = new Book(); 
            $book->trip_id = $request->trip_id; 
            $book->name = $request->name;
            $book->phone = $request->phone;
            $book->description = $request->description;
            $book->email = $request->email;
            $book->start_data = $request->start_data;
            $book->end_data = $request->end_data;
            $book->pay = $request->pay;
            $book->save();




            return response()->json(['message' => 'success']);
        }

}
