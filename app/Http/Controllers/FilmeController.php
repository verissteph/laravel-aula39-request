<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Actor;
use App\Movie;

class FilmeController extends Controller
{
    public function procurarFilmeId($id) {
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

    public function procurarFilmeNome($nome) {
        $f = Movie::query()->where('title', $nome)->first();
        return $f->title;
    }

    public function listar() {
        // $filmes = [
        //     1 => "Toy Story",
        //     2 => "Procurando Nemo",
        //     3 => "Avatar",
        //     4 => "Star Wars: Episódio V",
        //     5 => "Up",
        //     6 => "Mary e Max"
        // ];
        //return view('filmes', ['filmes' => $filmes]);
        $filmes =Movie::query()->paginate();
        return view('filmes',['filmes'=>$filmes]);

    }

    public function adicionarFilme() {
        return view('adicionar_filme');
    }

    public function adicionarFilmePost(Request $request) {
        request()->input('mensagem');
        dd($request->toArray());
        //return redirect('/filmes')->with('mensagem', 'Formulario salvo!');
    }
    public function exibirTabela(){
        return Actor::all();
        //dd($->toArray());
    }
    public function procurarFilmes($id){
        $filmes =Movie::find($id);
        return "o filme é: $filmes[title]";
    }

}
