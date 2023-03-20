<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     $book=   Book::all();
     return view('trip.book_view',['book'=>$book]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|email', 
            'pay' => 'required', 
            // 'start_data' => 'required',
            // 'end_data' => 'required',
            
        ],[
            'name.required' =>'يرجي ادخال اسمك',
            'phone.required' =>'يرجي ادخال رقم الهاتف',
            'email' => 'يرجي ادخال البريد الاكتروني', 

            

        ]);  
        $trip_dates = $request->session()->get('trip_dates');

        $data = array_merge($trip_dates, $validatedData);

        $trip = new Book(); 
        $trip->name = $data['name']; 
        $trip->phone = $data['phone']; 
        $trip->email = $data['email']; 
        $trip->start_data = $data['start_data']; 
        $trip->end_data = $data['end_data']; 
        $trip->trip_id = $data['trip_id']; 
        // $trip->description = $data->description; 
     
        $trip->save();
        Alert::success('تمت العملية بنجاح!');
      
        // session()->flash('Add', 'تم اضافة القسم بنجاح ');
        return back();


    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        $sections = Book::findorFail($id);
        $file_path = public_path($sections->image);
     
        $sections->delete();

      
        session()->flash('delete','تم حذف الحجز بنجاح');
        return back();
    }
}
