<?php

namespace App\Http\Controllers\Library;

use App\Http\Controllers\Controller;
use App\Models\Library\Composition;
use App\Models\Library\Library;
use App\Services\Library\OpenLibrariesService;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /** @todo build user configuration for default(s) library */
        $defaultlibrary = null;
        $service = new OpenLibrariesService();

        return view('library.index',
        [
            'breadcrumbs' => $this->breadcrumbs,
            'compositions' => Composition::all(),
            'libraries' => $service->libraries(),
            'library' => $defaultlibrary,
        ]);
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
     * @param  \App\Models\Library\Library  $library
     * @return \Illuminate\Http\Response
     */
    public function show(Library $library)
    {
        $service = new OpenLibrariesService();

        return view('library.index',
            [
                'breadcrumbs' => $this->breadcrumbs,
                'compositions' => $library->compositions,
                'libraries' => $service->libraries(),
                'library' => $library,
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Library\Library  $library
     * @return \Illuminate\Http\Response
     */
    public function edit(Library $library)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Library\Library  $library
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Library $library)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Library\Library  $library
     * @return \Illuminate\Http\Response
     */
    public function destroy(Library $library)
    {
        //
    }
}
