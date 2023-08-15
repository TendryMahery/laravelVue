<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;


class ProduitController extends Controller
{
    //

    public function index(Request $request)
    {
        $produit = Produit::all()->toArray();

        return array_replace($produit);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nom' => 'required|max:100',
            'description' => 'required',
            'prix' => 'required'
        ]);

        $produit = new Produit([
            'nom' => $request->input('nom'),
            'description' => $request->input('description'),
            'prix' => $request->input('prix')
        ]);


        $produit->save();

        return response()->json([
            'status' => 200,
            'message' => "creation avec succes"
        ]);
    }

    public function show($id, Request $request)
    {
        $produit = Produit::find($id);

        return response()->json($produit);
    }

    public function update(Request $request, $id)
    {

        $produit = Produit::find($id);
        $produit->update($request->all());

        return response()->json("update avec succes");
    }

    public function delete($id)
    {
        $produit = Produit::find($id);
        $produit->delete();

        return response()->json("suppression avec success");
    }
}
