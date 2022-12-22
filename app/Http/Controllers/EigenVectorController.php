<?php

namespace App\Http\Controllers;

use App\Models\EigenVector;
use App\Http\Requests\StoreEigenVectorRequest;
use App\Http\Requests\UpdateEigenVectorRequest;

class EigenVectorController extends Controller
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
     * @param  \App\Http\Requests\StoreEigenVectorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEigenVectorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EigenVector  $eigenVector
     * @return \Illuminate\Http\Response
     */
    public function show(EigenVector $eigenVector)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EigenVector  $eigenVector
     * @return \Illuminate\Http\Response
     */
    public function edit(EigenVector $eigenVector)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEigenVectorRequest  $request
     * @param  \App\Models\EigenVector  $eigenVector
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEigenVectorRequest $request, EigenVector $eigenVector)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EigenVector  $eigenVector
     * @return \Illuminate\Http\Response
     */
    public function destroy(EigenVector $eigenVector)
    {
        //
    }
}
