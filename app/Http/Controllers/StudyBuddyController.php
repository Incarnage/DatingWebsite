<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\StudyBuddy;
use Illuminate\Http\Request;

class StudyBuddyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profiles = Profile::all();
        return view('studybuddy',['profile' => $profiles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * Display the specified resource.
     *
     * @param  \App\Models\StudyBuddy  $studyBuddy
     * @return \Illuminate\Http\Response
     */
    public function show(StudyBuddy $studyBuddy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StudyBuddy  $studyBuddy
     * @return \Illuminate\Http\Response
     */
    public function edit(StudyBuddy $studyBuddy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StudyBuddy  $studyBuddy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StudyBuddy $studyBuddy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StudyBuddy  $studyBuddy
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudyBuddy $studyBuddy)
    {
        //
    }
}
