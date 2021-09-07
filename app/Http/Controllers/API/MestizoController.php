<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Mestizo;
use Illuminate\Http\Request;


class MestizoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return Mestizo::all();
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
        $mestizo = new Mestizo();
        $mestizo->palabra = $request->palabra;
        $mestizo->descripcion = $request->descripcion;
        
        $mestizo->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mestizo  $mestizo
     * @return \Illuminate\Http\Response
     */
    public function show(Mestizo $mestizo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mestizo  $mestizo
     * @return \Illuminate\Http\Response
     */
    public function edit(Mestizo $mestizo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mestizo  $mestizo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $mestizo = Mestizo::findOrFail($request->id);
        $mestizo->palabra = $request->palabra;
        $mestizo->descripcion = $request->descripcion;

        $mestizo->save();

        return $mestizo;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mestizo  $mestizo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $mestizo = Mestizo::destroy($request->id);
        return $mestizo;
    }
}
