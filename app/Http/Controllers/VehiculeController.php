<?php

namespace App\Http\Controllers;

use App\Vehicule;
use Illuminate\Http\Request;

class VehiculeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicules = Vehicule::all();
        return view('index',['variables'=>$vehicules]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'marque' => 'bail|required|between:3,20|alpha',
            'prix' => 'bail|required|numeric',
            'modele' => 'bail|required|max:10',
            'couleur' => 'bail|required|max:10'
        ]);

        $vehicule = new Vehicule;
        $vehicule->marque = $request->marque;
        $vehicule->prix = $request->prix;
        $vehicule->description = $request->description;
        $vehicule->modele = $request->modele;
        $vehicule->couleur = $request->couleur;
        $vehicule->save();
        return $this->show($vehicule->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vehicule  $vehicule
     * @return \Illuminate\Http\Response
     */
    public function show(Vehicule $vehicule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vehicule  $vehicule
     * @return \Illuminate\Http\Response
     */
    public function edit(Vehicule $vehicule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vehicule  $vehicule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vehicule $vehicule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vehicule  $vehicule
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehicule $vehicule)
    {
        //
    }
}
