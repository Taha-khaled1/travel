<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;


class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $catogerys = Event::all();
        return view("trip.catogery_view",['catogerys' => $catogerys]);
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
            'name' => 'required|unique:events|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ],[

            'name.required' =>'يرجي ادخال اسم القسم',
            'image.required' =>'يرجي ادخال الصوره',
            'name.unique' =>'اسم القسم مسجل مسبقا',


        ]);
        $inpout = $request->all();
        $b_exist=Event::where('name','=',$inpout['name'])->exists();

        if($b_exist){

            session()->flash('Erorr', 'اسم القسم موجود بالفعل');
            return back();

        }else{
                $image = $request->file('image');
                $filename = time().'.'.$image->getClientOriginalExtension();
                $path = $image->storeAs('catogeryimage', $filename,'Taha');

                $product = new Event(); 
                $product->name = $request->name; 
                $product->image = 'catogeryimage/'.$filename;
                $product->save();
                session()->flash('Add', 'تم اضافة القسم بنجاح ');
                return back();
              
            }






    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $id = $request->id;

        $request->validate([
            'name' => 'required|unique:events|max:255',
          //  'image' => 'required',
        ],[

            'name.required' =>'يرجي ادخال اسم القسم',
          //  'image.required' =>'يرجي ادخال الصوره',
            'name.unique' =>'اسم القسم مسجل مسبقا',


        ]);

        $sections = Event::findOrFail($id);
    
        $file_path = public_path($sections->image);

        if(file_exists($file_path)) {
            unlink($file_path);
        }
       

        // Upload the new image file to the server 
        $image = $request->file('image');
        $filename = time().'.'.$image->getClientOriginalExtension();
        $path = $image->storeAs('catogeryimage', $filename,'Taha');
        
        $sections->update([
            'name' => $request->name,
            'image' => 'catogeryimage/'.$filename,
        ]);

        session()->flash('edit','تم تعديل القسم بنجاج');
        return back();
    }

    
    public function destroy(Request $request)
    {
        $id = $request->id;
        $sections = Event::findorFail($id);
        $file_path = public_path($sections->image);
        if(file_exists($file_path)) {
            unlink($file_path);
        }
        $sections->delete();

      
        session()->flash('delete','تم حذف القسم بنجاح');
        return back();
    }
}
