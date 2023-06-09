<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //gets the id of the authenticated user
        $user = Auth::user();
        // get all the products
        $profiles = Profile::all();
        // if there is an authenticated user, check if admin
        // if yes, get only the products with his id
        
            
                
                $profiles = Profile::where('user_id', '!=', $user->id)->get();
            
        
        //pass the data to the view
        return view('profile', ['profile' => $profiles,]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        // get all the products
        $profiles = Profile::all();
        // if there is an authenticated user, check if admin
        // if yes, get only the products with his id
        
            
                
                $profiles = Profile::where('user_id', '=', $user->id)->get();
            
        
        //pass the data to the view
        return view('profile', ['profile' => $profiles]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $profile = Profile::create([
            'nickname' => $request['nickname'],
            'user_id' => Auth::id()
        ]);
        return redirect('profile');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
