<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transacoes;
class dashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       

        $transacoes = Transacoes::all();
   
        return view('dashboard',['transacoes' => $transacoes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('transacoes/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
     
        // Validação dos dados do formulário
         $validatedData = $request->validate([
            'descricao' => 'required|string|max:255',
            'valor' => 'required|numeric',
            'tipo' => 'required|in:entrada,saida',
            'categorias' => 'required|string|max:255',
        ]);

        // Criação de uma nova transação
        $transacoes = new Transacoes();
        $transacoes->descricao = $request->input('descricao');
        $transacoes->valor = $request->input('valor');
        $transacoes->tipo = $request->input('tipo');
        $transacoes->categorias = $request->input('categorias');
        $transacoes->data = now();
        $transacoes->save();

        return redirect('/dashboard');

     
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $transacao = Transacoes::find($id);
       
            return view('transacoes/edit', compact('transacao'));
      
        
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'descricao' => 'required|string|max:255',
            'valor' => 'required|numeric',
            'tipo' => 'required|in:entrada,saida',
            'categorias' => 'required|string|max:255',
        ]);

        $transacao = Transacoes::find($id);
        if ($transacao) {
            $transacao->descricao = $request->descricao;
            $transacao->valor = $request->valor;
            $transacao->tipo = $request->tipo;
            $transacao->categorias = $request->categorias;
            $transacao->save();

            return redirect('/dashboard')->with('success', 'Transação alterada com sucesso!');
        }
        return redirect('/dashboard')->with('error', 'Erro ao alterar transação.');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( Request $request)
    {
       //dd($request->id);
       Transacoes::destroy($request->id);
       return redirect('/dashboard');
    }
}
