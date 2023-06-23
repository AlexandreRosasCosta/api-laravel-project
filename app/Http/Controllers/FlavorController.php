<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Flavor;
use Exception;
use Illuminate\Http\Request;

class FlavorController extends Controller
{

    public function getFlavor()
    {
        return Flavor::all();
    }

    public function postFlavor(Request $request)
    {
        try {
            $request->validate([
                'flavors' => 'required',
                'info' => 'required',
                'type' => 'required',
                'price' => 'required',
                'image' => 'required',
            ]);

            $flavor = new Flavor();
            $flavor->flavors = $request->input('flavors');
            $flavor->type = $request->input('type');
            $flavor->info = $request->input('info');
            $flavor->price = $request->input('price');
            $flavor->image = $request->input('image');

            $flavor->save();

            return "Sabor {$request->input('flavors')} cadastrado com sucesso";
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function deleteFlavor(Request $request)
    {
        try {
            $request->validate([
                'id' => 'required',
            ]);

            $f = Flavor::find($request->input('id'));

            Flavor::destroy($request->input('id'));

            return "Sabor {$f->flavors} removido com sucesso";
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
