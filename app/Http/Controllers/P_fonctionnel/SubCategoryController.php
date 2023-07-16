<?php

namespace App\Http\Controllers\P_fonctionnel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Hash;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategories = http::GET('https://generateur.cloudsteroids.com/public/api/sub_categories');
          //dd($subcategories);
          $categories = http::GET('https://generateur.cloudsteroids.com/public/api/categories');
        //dd($categories);faire une jointure dans l'API
        $subcategories = $subcategories->json(); //mettre le fichier recupéré en json ensuite le convertir en tableau

        return view('/P_fonctionnel/subcategory_management/index',compact("subcategories",));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('P_fonctionnel.subcategory_management.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subcategories = http::POST('https://generateur.cloudsteroids.com/public/api/sub_categories',

        [
           "libelle" => $request->libelle,
           ]);
           //dd($user);
           return view("P_fonctionnel.subcategory_management.create");

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
        $subcategories = Http::GET('https://generateur.cloudsteroids.com/public/api/sub_categories/'.$id);
        //dd($rules);
        $subcategories = $subcategories->json(); //mettre le fichier recupéré en json ensuite le convertir en tableau
        //dd($rules);
        return view('P_fonctionnel.subcategory_management.show',compact("subcategories"));
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
