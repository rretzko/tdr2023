<?php

namespace App\Http\Controllers;

use App\Models\School;
use App\Models\Studio;
use App\Models\Tenure;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //create a Studio school if none exists
        if(! auth()->user()->tenures->count()){

            Studio::create();
        }

        return view('schools.index',
        [
           'breadcrumbs' => $this->breadcrumbs,
            'tenures' => auth()->user()->tenures,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('schools.create',
            [
                'breadcrumbs' => $this->breadcrumbs,
                'tenure' => new Tenure,
            ]);
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
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function show(School $school)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Tenure $tenure
     * @return \Illuminate\Http\Response
     */
    public function edit(Tenure $tenure)
    {
        return view('schools.edit',
            [
                'breadcrumbs' => $this->breadcrumbs,
                'tenure' => $tenure,
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, School $school)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function destroy(School $school)
    {
        //
    }
}
