<?php

namespace App\Http\Controllers\Library;

use App\Http\Controllers\Controller;
use App\Http\Requests\Library\MedleyRequest;
use App\Models\Library\ArrangementType;
use App\Models\Library\Composition;
use App\Models\Library\Medley;
use Illuminate\Http\Request;

class MedleyController extends Controller
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
    public function store(MedleyRequest $request)
    {
        $medley = Medley::create(
            [
                'title' => $request['title'],
                'subtitle' => (strlen($request['subtitle']) ? $request['subtitle'] : null),
                'arrangement_type_id' => $request['arrangement_type_id'],
            ]
        );

        $this->storeComposition($request, $medley);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Library\Medley  $medley
     * @return \Illuminate\Http\Response
     */
    public function show(Medley $medley)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Library\Medley  $medley
     * @return \Illuminate\Http\Response
     */
    public function edit(Medley $medley)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Library\Medley  $medley
     * @return \Illuminate\Http\Response
     */
    public function update(MedleyRequest $request, Medley $medley)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Library\Medley  $medley
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medley $medley)
    {
        //
    }

    /**
     * If user has also submitted a composition with the medley, enter that
     */
    private function storeComposition(MedleyRequest $request, Medley $medley): void
    {
        if(strlen($request['item-title']) && ArrangementType::find($request['item-arrangement_type_id'])){

            Composition::create(
                [
                    'title' => $request['item-title'],
                    'subtitle' => (strlen($request['item-subtitle']) ? $request['item-subtitle'] : null),
                    'arrangement_type_id' => $request['item-arrangement_type_id'],
                    'medley_id' => $medley->id,
                ]
            );
        }
    }
}
