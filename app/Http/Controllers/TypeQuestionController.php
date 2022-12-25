<?php

namespace App\Http\Controllers;

use App\Models\TypeQuestion;
use App\Http\Requests\StoreTypeQuestionRequest;
use App\Http\Requests\UpdateTypeQuestionRequest;
use Inertia\Inertia;

class TypeQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render("TypeQuestion/Index",[]);
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
     * @param  \App\Http\Requests\StoreTypeQuestionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTypeQuestionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TypeQuestion  $typeQuestion
     * @return \Illuminate\Http\Response
     */
    public function show(TypeQuestion $typeQuestion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TypeQuestion  $typeQuestion
     * @return \Illuminate\Http\Response
     */
    public function edit(TypeQuestion $typeQuestion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTypeQuestionRequest  $request
     * @param  \App\Models\TypeQuestion  $typeQuestion
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTypeQuestionRequest $request, TypeQuestion $typeQuestion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TypeQuestion  $typeQuestion
     * @return \Illuminate\Http\Response
     */
    public function destroy(TypeQuestion $typeQuestion)
    {
        //
    }
}
