<?php

namespace App\Http\Controllers\P_fonctionnel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = http::GET('https://generateur.cloudsteroids.com/public/api/users');
        $users = $users->json(); //mettre le fichier recupéré en json ensuite le convertir en tableau
        return view('/P_fonctionnel/user_management/index',compact("users"));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('P_fonctionnel.user_management.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = http::POST('https://generateur.cloudsteroids.com/public/api/users',

        [
           "name" => $request->name,
           "email" => $request->email,
           "sexe" => $request->sexe,
           "function"=> $request->fonction,
           "password" => Hash::make($request->password),
           ]);
           //dd($user);
           return view("P_fonctionnel.user_management.create");

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
        $user = Http::GET('https://generateur.cloudsteroids.com/public/api/users/'.$id);
        //dd($user);
        $user = $user->json(); //mettre le fichier recupéré en json ensuite le convertir en tableau
        //dd($user);
        return view('P_fonctionnel.user_management.show',compact("user"));
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
