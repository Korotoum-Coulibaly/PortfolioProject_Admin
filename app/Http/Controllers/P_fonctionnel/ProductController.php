<?php

namespace App\Http\Controllers\P_fonctionnel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Hash;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = http::GET('https://generateur.cloudsteroids.com/public/api/products');
        $products = $products->json(); //mettre le fichier recupéré en json ensuite le convertir en tableau
        return view('/P_fonctionnel/product_management/index',compact("products"));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('P_fonctionnel.product_management.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $products = http::POST('https://generateur.cloudsteroids.com/public/api/products',

        [
           "libelle" => $request->libelle,
           "plan" => $request->plan,
           "price" => $request->price,

           ]);
           //dd($user);
           return view("P_fonctionnel.product_management.create");

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
        $products = Http::GET('https://generateur.cloudsteroids.com/public/api/products/'.$id);
        //dd($rules);
        $products = $products->json(); //mettre le fichier recupéré en json ensuite le convertir en tableau
        //dd($rules);
        return view('P_fonctionnel.product_management.show',compact("products"));
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
