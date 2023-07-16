<?php

namespace App\Http\Controllers\P_fonctionnel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Hash;

class PackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packs = http::GET('https://generateur.cloudsteroids.com/public/api/packs');
        $packs = $packs->json(); //mettre le fichier recupéré en json ensuite le convertir en tableau
        return view('/P_fonctionnel/pack_management/index',compact("packs"));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('P_fonctionnel.pack_management.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $packs = http::POST('https://generateur.cloudsteroids.com/public/api/packs',

        [
           "libelle" => $request->libelle,
           ]);
           //dd($user);
           return view("P_fonctionnel.pack_management.create");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //dd($id);
        $packs = Http::GET('https://generateur.cloudsteroids.com/public/api/packs/'.$id);
        //dd($rules);
        $packs = $packs->json(); //mettre le fichier recupéré en json ensuite le convertir en tableau
        //dd($rules);
        return view('P_fonctionnel.pack_management.show',compact("packs"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
