<?php

namespace App\Http\Controllers;

use App\Exports\SchoolsExport;
use App\Models\School;
use App\Models\Studio;
use App\Models\Tenure;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

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

        auth()->user()->refresh();

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
     * Remove the specified resource from storage.
     *
     * @param Tenure $tenure
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tenure $tenure)
    {
        $tenure->delete();

        return redirect()->back();
    }

    /**
     * Download xls file of schools table
     */
    public function export()
    {
        return Excel::download(new SchoolsExport,'schools.xlsx');
    }
}
