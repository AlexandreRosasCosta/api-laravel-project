<?php

namespace App\Http\Controllers;

use App\Models\Dough;
use Illuminate\Http\Request;

class DoughController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Dough::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'price' => 'required',
            'info' => 'required',
            'dough' => 'required'
        ]);

        return Dough::create($request->all());

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Dough::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dough = Dough::findOrFail($id);

        $dough->update($request->all());

        return $dough;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dough = Dough::findOrFail($id);
        //$dough->id->destroy();
        Dough::destroy($dough->id);
        return "Massa {$dough->dough} deletada com sucesso";
    }
}
