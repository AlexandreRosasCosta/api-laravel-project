<?php

namespace App\Http\Controllers;

use App\Models\Edge;
use Illuminate\Http\Request;

class EdgeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Edge::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'price' => 'required',
            'edges' => 'required',
        ]);

        return Edge::create($request->all());

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Edge::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $edge = Edge::findOrFail($id);

        $edge->update($request->all());

        return $edge;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $edge = Edge::findOrFail($id);
        //$dough->id->destroy();
        Edge::destroy($edge->id);
        return "Borda {$edge->edges} deletada com sucesso";
    }
}
