<?php

namespace App\Http\Controllers;

use App\Noticia;
use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    public function index() {
        $noticias = Noticia::all();
        return view('listar-noticias', compact('noticias'));
    }

    public function create() {
        return view('incluir-noticia');
    }

    public function store(Request $request) {
        $noticia = new Noticia;
        $noticia->titulo = $request->titulo;
        $noticia->conteudo = $request->conteudo;
        $noticia->categoria = $request->categoria;
        $noticia->autor = $request->autor;
        $noticia->keywords = $request->keywords;
        $noticia->save();
        return redirect()->route('noticia.index')->with('message', 'Notícia publicada!');
    }

    public function show($id) {
        $noticia = Noticia::findOrFail($id);
        return view('ver-noticia', compact('noticia'));
    }

    public function edit($id) {
        $noticia = Noticia::findOrFail($id);
        return view('alterar-noticia', compact('noticia'));
    }

    public function update(Request $request, $id) {
        $noticia = Noticia::findOrFail($id); 
        $noticia->titulo = $request->titulo;
        $noticia->conteudo = $request->conteudo;
        $noticia->categoria = $request->categoria;
        $noticia->autor = $request->autor;
        $noticia->keywords = $request->keywords;
        $noticia->save();
        return redirect()->route('noticia.index')->with('message', 'Alteração publicada!');
    }

    public function destroy($id) {
        $noticia = Noticia::findOrFail($id);
        $noticia->delete();
        return redirect()->route('noticia.index')->with('message', 'Notícia excluída!');
    }

}
