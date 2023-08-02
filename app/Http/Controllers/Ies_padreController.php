<?php

namespace App\Http\Controllers;

use App\Models\Ies_padre;
use Illuminate\Http\Request;

class Ies_padreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $instituciones = Ies_padre::orderBy('codigo_institucion', 'ASC')->get();
        return view('ies_padre.index', ['instituciones' => $instituciones]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Ies_padre $ies_padre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ies_padre $ies_padre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ies_padre $ies_padre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ies_padre $ies_padre)
    {
        //
    }
}
