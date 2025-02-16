<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transacoes;;
use PDF;
use Illuminate\Support\Facades\DB;
class RelatorioController extends Controller
{
    public function gerarRelatorio()
    {
        $transacoes = DB::table('transacoes')
        ->where('descricao','LIKE','%%')
        ->get();

        $pdf = PDF::loadView('relatorios.relatorio-pdf',['transacoes' => $transacoes]);

        return $pdf->stream('relatorio.pdf');
    }
}
