<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use App\Models\Categoria;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage; //permite guardar arquivos e claro as funçoes pra isso

class NoticiaController extends Controller
{
    public function index()
    {
        $noticias = Noticia::with(['categorias', 'user'])
            ->orderBy('published_at', 'desc')
            ->paginate(10); 
        return view('admin.noticias.index', compact('noticias'));
    }

    public function create()
    {
        $categorias = Categoria::all();
        return view('admin.noticias.create', compact('categorias'));
    }

    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'titulo' => 'required|max:255',
                'resumo' => 'required|max:500',
                'conteudo' => 'required',
                'linkImg' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'categorias' => 'required|array',
                'categorias.*' => 'exists:categorias,id'
            ]);

            $noticia = new Noticia();
            $noticia->titulo = $validated['titulo'];
            $noticia->conteudo = $validated['conteudo'];
            $noticia->resumo = $validated['resumo'];
            $noticia->user_id = auth()->id();

            if ($request->hasFile('linkImg')) {
                $path = $request->file('linkImg')->store('noticias', 'public');
                $noticia->linkImg = $path;
            }


            $noticia->save();
            
            // Anexa as categorias selecionadas
            $noticia->categorias()
                ->attach($request->categorias); //adiciona as categorias

            return redirect()->route('profile.edit')
                ->with('success', 'Notícia criada com sucesso!');

        } catch (Exception $e) {
            Log::error('Erro ao criar notícia: ' . $e->getMessage());
            return back()
                ->with('error', 'Erro ao criar notícia. Tente novamente.')
                ->withInput();
        }
    }

    public function show(Noticia $noticia)
    {
        if( isset($noticia)){
            return view('topicos.noticias', compact('noticia'));
        }else{
            return view('topicos.todasNoticias', compact('noticia'));
        }
    }

    public function all()
    {
        
        $noticias = Noticia::orderBy('nome')->get();
        return view('topicos.todasNoticias', compact('noticia'));
    }

    public function edit(Noticia $noticia)
    {
        
        $categorias = Categoria::where('ativo', true)
            ->orderBy('nome')
            ->get();
        return view('admin.noticias.edit', compact('noticia', 'categorias'));
    }

    public function update(Request $request, Noticia $noticia)
    {
        $validated = $request->validate([
            'titulo' => 'required|max:255',
            'conteudo' => 'required',
            'resumo' => 'required|max:500',
            'linkImg' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'categorias' => 'required|array',
            'categorias.*' => 'exists:categorias,id'
        ]);

        try {
            $noticia->titulo = $validated['titulo'];
            $noticia->conteudo = $validated['conteudo'];
            $noticia->resumo = $validated['resumo'];

            if ($request->hasFile('linkImg')) {
                if ($noticia->linkImg) {
                    Storage::disk('public')->delete($noticia->linkImg);
                }
                $path = $request->file('linkImg')->store('noticias', 'public');
                $noticia->linkImg = $path;
            }

            if ($noticia->status === 'publicado' && empty($noticia->published_at)) {
                $noticia->published_at = now();
            }

            $noticia->save();

            // Sincroniza as categorias (remove as antigas e adiciona as novas)
            $noticia->categorias()->sync($request->categorias);

            return redirect()->route('profile.edit')
                ->with('success', 'Notícia atualizada com sucesso!');

        } catch (Exception $e) {
            Log::error('Erro ao atualizar notícia: ' . $e->getMessage());
            return back()->with('error', 'Erro ao atualizar notícia. Tente novamente.')
                ->withInput();
        }
    }

    public function destroy(Noticia $noticia)
    {

        if ($noticia->linkImg) {
            Storage::disk('public')->delete($noticia->linkImg); //
        }

        $noticia->delete();

        return redirect()->route('profile.edit')
            ->with('success', 'Notícia excluída com sucesso!');
    }


    


}