<?php

namespace App\Http\Controllers\Encuentros;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EncuentrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createPost()
    {
        dd('aaaa');die;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Encuentros  $encuentros
     * @return \Illuminate\Http\Response
     */
    public function show(Encuentros $encuentros)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Encuentros  $encuentros
     * @return \Illuminate\Http\Response
     */
    public function edit(Encuentros $encuentros)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Encuentros  $encuentros
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Encuentros $encuentros)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Encuentros  $encuentros
     * @return \Illuminate\Http\Response
     */
    public function destroy(Encuentros $encuentros)
    {
        //
    }
}
