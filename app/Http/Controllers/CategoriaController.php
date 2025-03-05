<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::orderBy('nome')->paginate(10);
        return view('categorias.index', compact('categorias'));
    }

    public function create()
    {
        return view('categorias.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|max:100|unique:categorias', //unico em catrgorias
            'slug' => 'nullable|max:100|unique:categorias',
            'descricao' => 'nullable|max:255',
            'cor' => 'required|max:20',
            'ativo' => 'boolean'
        ]);

        if (empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['nome']); //método gera um "slug" amigável à URL a partir da string fornecida: ou seja taca - no lugar do espaço
        }

        Categoria::create($validated); //o mesmo que salvar objeto

        return redirect()->route('categorias.index')
            ->with('success', 'Categoria criada com sucesso!');
    }

    public function edit(Categoria $categoria)
    {
        return view('categorias.edit', compact('categoria'));
    }

    public function update(Request $request, Categoria $categoria)
    {
        $validated = $request->validate([
            'nome' => 'required|max:100|unique:categorias,nome,' . $categoria->id, //nao entendi
            'slug' => 'nullable|max:100|unique:categorias,slug,' . $categoria->id,
            'descricao' => 'nullable|max:255',
            'cor' => 'required|max:20',
            'ativo' => 'boolean'
        ]);

        if (empty($validated['slug'])) {
            $validated['slug'] = Str::slug($validated['nome']);
        }

        $categoria->update($validated);

        return redirect()->route('categorias.index')
            ->with('success', 'Categoria atualizada com sucesso!');
    }

    public function destroy(Categoria $categoria)
    {
        if ($categoria->noticias()->exists()) {
            return redirect()->route('categorias.index')
                ->with('error', 'Não é possível excluir uma categoria que possui notícias!');
        }

        $categoria->delete(); // estranhamente é so isso

        return redirect()->route('categorias.index')
            ->with('success', 'Categoria excluída com sucesso!');
    }
}
