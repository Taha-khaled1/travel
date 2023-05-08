<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
        public function index()
        {
            $setting = Setting::first();
            return view('trip.setting', ['setting' => $setting]);
        }//
    

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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
    $setting= Setting::first();
    $setting->company_name =$request->username;
    $setting->email =$request->email;
    $setting->website_link =$request->Website;
    $setting->company_phone =$request->phone;
    $setting->company_address =$request->address;
    $setting->twitter =$request->twitter;
    $setting->facebook =$request->facebook;
    $setting->google =$request->google;
    $setting->linkedin =$request->linkedin;
    $setting->github =$request->github;
    $setting->biographical_information = $request->aboutcompany;
    $setting->save();
   return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
