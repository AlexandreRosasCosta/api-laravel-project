<?php

namespace App\Http\Controllers;

use App\Models\Edge;
use Illuminate\Http\Request;
use Exception;

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
        try {
            $request->validate([
                'price' => 'required',
                'edge' => 'required',
            ]);

            Edge::create($request->all());

            return response("Borda {$request->input('edge')} cadastrada com sucesso", 200)
                ->header('Content-Type', 'application/json');
        } catch (Exception $e) {
            return response($e->getMessage(), 400)
                ->header('Content-Type', 'application/json');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        if (Edge::find($id) != null) {
            return Edge::find($id);
        } else {
            return response("ID não encontrado", 400)
                ->header('Content-Type', 'application/json');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        if (Edge::find($id) != null) {

            $edge = Edge::find($id);
        } else {
            return response("ID não encontrado", 400)
                ->header('Content-Type', 'application/json');
        }

        try {

            $edge->update($request->all());

            return response("Borda {$edge->edge} atualizada com sucesso", 200)
                ->header('Content-Type', 'application/json');
        } catch (Exception $e) {
            return response($e->getMessage(), 400)
                ->header('Content-Type', 'application/json');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        try {

            if (Edge::find($id) != null) {
                $edge = Edge::find($id);
            } else {
                return response("ID não encontrado", 400)
                    ->header('Content-Type', 'application/json');
            }

            Edge::destroy($edge->id);

            return response("Borda {$edge->edge} removida com sucesso", 200)
                ->header('Content-Type', 'application/json');
        } catch (Exception $e) {
            return response($e->getMessage(), 400)
                ->header('Content-Type', 'application/json');
        }
    }
}
