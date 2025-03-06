<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\QueryException;
use Illuminate\Validation\ValidationException;

class CategoriaController extends Controller
{
    public function index()
    {
        try {
            $categorias = Categoria::orderBy('nome')->paginate(10);
            return view('categorias.index', compact('categorias'));
        } catch (Exception $e) {
            Log::error('Erro ao listar categorias: ' . $e->getMessage());
            return redirect()->back()
                ->with('error', 'Ocorreu um erro ao carregar as categorias. Tente novamente mais tarde.');
        }
    }

    public function create()
    {
        try {
            return view('categorias.create');
        } catch (Exception $e) {
            Log::error('Erro ao carregar formulário de criação: ' . $e->getMessage());
            return redirect()->route('categorias.index')
                ->with('error', 'Não foi possível carregar o formulário. Tente novamente.');
        }
    }

    public function store(Request $request)
    {
        try {
            $messages = [
                'nome.required' => 'O nome da categoria é obrigatório.',
                'nome.max' => 'O nome não pode ter mais que 100 caracteres.',
                'nome.unique' => 'Já existe uma categoria com este nome.',
                'slug.unique' => 'Este slug já está em uso.',
                'descricao.required' => 'A descrição é obrigatória.',
                'descricao.max' => 'A descrição não pode ter mais que 500 caracteres.',
                'cor.required' => 'A cor é obrigatória.',
            ];

            $validated = $request->validate([
                'nome' => 'required|max:100|unique:categorias',
                'slug' => 'nullable|max:100|unique:categorias',
                'descricao' => 'required|max:500',
                'cor' => 'required|max:20',
                'ativo' => 'boolean'
            ], $messages);

            if (empty($validated['slug'])) {
                $validated['slug'] = Str::slug($validated['nome']);
            }

            Categoria::create($validated);

            return redirect()->route('categorias.index')
                ->with('success', 'Categoria criada com sucesso!');

        } catch (ValidationException $e) {
            return redirect()->back()
                ->withErrors($e->validator)
                ->withInput();

        } catch (QueryException $e) {
            Log::error('Erro de banco de dados ao criar categoria: ' . $e->getMessage());
            return redirect()->back()
                ->with('error', 'Erro ao salvar no banco de dados. Verifique os dados e tente novamente.')
                ->withInput();

        } catch (Exception $e) {
            Log::error('Erro ao criar categoria: ' . $e->getMessage());
            return redirect()->back()
                ->with('error', 'Ocorreu um erro inesperado. Tente novamente mais tarde.')
                ->withInput();
        }
    }

    public function edit(Categoria $categoria)
    {
        try {
            return view('categorias.edit', compact('categoria'));
        } catch (Exception $e) {
            Log::error('Erro ao carregar edição da categoria: ' . $e->getMessage());
            return redirect()->route('categorias.index')
                ->with('error', 'Não foi possível carregar o formulário de edição.');
        }
    }

    public function update(Request $request, Categoria $categoria)
    {
        try {
            $messages = [
                'nome.required' => 'O nome da categoria é obrigatório.',
                'nome.max' => 'O nome não pode ter mais que 100 caracteres.',
                'nome.unique' => 'Já existe uma categoria com este nome.',
                'slug.unique' => 'Este slug já está em uso.',
                'descricao.required' => 'A descrição é obrigatória.',
                'descricao.max' => 'A descrição não pode ter mais que 500 caracteres.',
                'cor.required' => 'A cor é obrigatória.',
            ];

            $validated = $request->validate([
                'nome' => 'required|max:100|unique:categorias,nome,' . $categoria->id,
                'slug' => 'nullable|max:100|unique:categorias,slug,' . $categoria->id,
                'descricao' => 'required|max:500',
                'cor' => 'required|max:20',
                'ativo' => 'boolean'
            ], $messages);

            if (empty($validated['slug'])) {
                $validated['slug'] = Str::slug($validated['nome']);
            }

            $categoria->update($validated);

            return redirect()->route('categorias.index')
                ->with('success', 'Categoria atualizada com sucesso!');

        } catch (ValidationException $e) {
            return redirect()->back()
                ->withErrors($e->validator)
                ->withInput();

        } catch (QueryException $e) {
            Log::error('Erro de banco de dados ao atualizar categoria: ' . $e->getMessage());
            return redirect()->back()
                ->with('error', 'Erro ao atualizar no banco de dados. Verifique os dados e tente novamente.')
                ->withInput();

        } catch (Exception $e) {
            Log::error('Erro ao atualizar categoria: ' . $e->getMessage());
            return redirect()->back()
                ->with('error', 'Ocorreu um erro inesperado. Tente novamente mais tarde.')
                ->withInput();
        }
    }

    public function destroy(Categoria $categoria)
    {
        try {
            if ($categoria->noticias()->exists()) {
                return redirect()->route('categorias.index')
                    ->with('error', 'Não é possível excluir uma categoria que possui notícias associadas.');
            }

            $categoria->delete();

            return redirect()->route('categorias.index')
                ->with('success', 'Categoria excluída com sucesso!');

        } catch (QueryException $e) {
            Log::error('Erro de banco de dados ao excluir categoria: ' . $e->getMessage());
            return redirect()->route('categorias.index')
                ->with('error', 'Erro ao excluir categoria do banco de dados.');

        } catch (Exception $e) {
            Log::error('Erro ao excluir categoria: ' . $e->getMessage());
            return redirect()->route('categorias.index')
                ->with('error', 'Ocorreu um erro inesperado ao tentar excluir a categoria.');
        }
    }
}
