<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{
    public function index()
    {
        $series = Serie::query()->orderBy("nome")->get();

        return view("series.index")->with("series", $series);
    }
    public function create()
    {
        return view("series.create");
    }

    public function edit(Request $id)
    {
        $serie = Serie::find($id);
        return view("series.edit")->with("serie", $serie[0]);
        ;
    }
    public function store(Request $request)
    {
        $nomeSerie = $request->input("nome");
        $serie = new Serie();
        $serie->nome = $nomeSerie;
        $serie->save();
        return redirect("/series");
    }
    public function destroy(Request $id)
    {
        $serie = Serie::find($id);
        $serie->each->delete();
        return redirect("/series");
    }

    public function update(Request $request)
    {
        $serie = Serie::find(intval($request->input("id")));
        $serie->nome = $request->input("nome");
        $serie->save();
        return redirect("/series");
    }
}
