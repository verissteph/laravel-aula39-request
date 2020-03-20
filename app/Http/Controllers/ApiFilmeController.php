<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class ApiFilmeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Movie::paginate();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $novoFilme = new Movie();
        $novoFilme->release_date = "$request->ano-$request->mes-$request->dia 00:00:00";
        $novoFilme->fill($data);
        $novoFilme->save();
        // $novoFilme = "FILME GRAVADO COM SUCESSO!";
        return $novoFilme;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $movie = Movie::findOrFail($id);
        return $movie;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Movie $movie
     * @return Array
     */
    public function update(Request $request, $id)
    {
        //Trazendo os dados do banco.
        $movie = Movie::find($id);

        //Preencho a model com os valores do request;
        $movie->fill($request->all());

        //Persistindo o novo model no banco.
        $movie->save();

        //Retorna para o navegador o movie em formato JSON
        return $movie;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Busquei o registro no banco.
        $movie = Movie::findOrFail($id);

        //Removi o registro no banco
        $movie->delete();

        //O destroy não tem retorno.x
    }
}
