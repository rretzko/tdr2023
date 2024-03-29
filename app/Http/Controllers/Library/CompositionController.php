<?php

namespace App\Http\Controllers\Library;

use App\Http\Controllers\Controller;
use App\Http\Requests\Library\CompositionRequest;
use App\Models\Library\ArrangementType;
use App\Models\Library\Composition;
use App\Models\Library\Library;
use App\Services\BreadcrumbsService;
use App\Services\Library\OpenLibrariesService;
use Illuminate\Http\Request;

class CompositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Library $library
     * @return \Illuminate\Http\Response
     */
    public function create(Library $library)
    {
        //libraries in schools of which auth()->user() currently teaches
        $service = new OpenLibrariesService();

        return view('library.composition',
            [
                'arrangementtypes' => ArrangementType::orderBy('descr')->get(),
                'breadcrumbs' => $this->breadcrumbs,
                'library' => $library,
                'openlibraries' => $service->libraries(),
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompositionRequest $request)
    {
        Composition::create(
            [
                'title' => $request['title'],
                'subtitle' => $request['subtitle'],
                'arrangement_type_id' => ArrangementType::firstOrCreate(
                    [
                        'id' => $request['arrangement_type']
                    ],
                    [
                        'descr' => $request['arrangement_type'],
                    ]
                )->id,
            ]
        );

        $mssg = '"'.$request['title'].'" has been added to your library.';

        session()->flash('saved', $mssg);

        return redirect()->route('library.composition');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Library\Composition  $composition
     * @return \Illuminate\Http\Response
     */
    public function show(Composition $composition)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Library\Composition  $composition
     * @return \Illuminate\Http\Response
     */
    public function edit(Library $library, Composition $composition)
    {
        //libraries in schools of which auth()->user() currently teaches
        $service = new OpenLibrariesService();

        return view('library.compositions.edit',
            [
                'arrangementtypes' => ArrangementType::orderBy('descr')->get(),
                'breadcrumbs' => $this->breadcrumbs,
                'composition' => $composition,
                'library' => $library,
                'openlibraries' => $service->libraries(),
            ]
        );
        dd($composition);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Library\Composition  $composition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Composition $composition)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Library\Composition  $composition
     * @return \Illuminate\Http\Response
     */
    public function destroy(Composition $composition)
    {
        //
    }
}
