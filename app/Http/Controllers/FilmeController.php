<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\filmeRequest;
use App\Actor;
use App\Movie;

class FilmeController extends Controller
{
    public function procurarFilmeId($id)
    {
        $filmes = [
            1 => "Toy Story",
            2 => "Procurando Nemo",
            3 => "Avatar",
            4 => "Star Wars: Episódio V",
            5 => "Up",
            6 => "Mary e Max"
        ];
        //code here
        //return "O filme escolhido foi: $filmes[$id]";

    }

    public function procurarFilmeNome($nome)
    {
        $f = Movie::query()->where('title', $nome)->first();
        return $f->title;
    }

    public function listar()
    {
        // $filmes = [
        //     1 => "Toy Story",
        //     2 => "Procurando Nemo",
        //     3 => "Avatar",
        //     4 => "Star Wars: Episódio V",
        //     5 => "Up",
        //     6 => "Mary e Max"
        // ];
        //return view('filmes', ['filmes' => $filmes]);
        $filmes = Movie::query()->paginate();
        return view('filmes', ['filmes' => $filmes]);
    }

    public function adicionarFilme()
    {
        return view('adicionar_filme');

    }

    public function adicionarFilmePost(filmeRequest $request)
    {
        //request()->input('mensagem');
        //dd($request->toArray());
        //return redirect('/filmes')->with('mensagem', 'Formulario salvo!');
        $novoFilme = new FilmeController();
        $novoFilme->titulo = $request->titulo;
        $novoFilme->classificacao = $request->classificacao;
        $novoFilme->premios = $request->premios;
        $novoFilme->duracao = $request->duracao;
        $novoFilme->dia = $request->dia;
        $novoFilme->mes = $request->dia;
        $novoFilme->ano = $request->ano;

        return redirect('adicionar_filme')->with('mensagem', 'Usuario adicionado com sucesso');
    }
    public function exibirTabela()
    {
        return Actor::all();
        //dd($->toArray());
    }
    public function procurarFilmes($id)
    {
        $filmes = Movie::find($id);
        return "o filme é: $filmes[title]";
    }
}
