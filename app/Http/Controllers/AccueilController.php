<?php

namespace App\Http\Controllers;

use App\Models\accueil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class AccueilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $value = $request->session()->get('key');
        return view('index', compact('value'));
        //dd(Session::all());
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
     * @param  \App\Models\accueil  $accueil
     * @return \Illuminate\Http\Response
     */
    public function show(accueil $accueil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\accueil  $accueil
     * @return \Illuminate\Http\Response
     */
    public function edit(accueil $accueil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\accueil  $accueil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, accueil $accueil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\accueil  $accueil
     * @return \Illuminate\Http\Response
     */
    public function destroy(accueil $accueil)
    {
        //
    }
}
