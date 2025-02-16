<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Transacoes;
class TransacoesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Transacoes::insert([
            [
                "descricao" => "Comprei uma placa de vídeo",
                "valor" => 800,
                "data" => "2024-12-18",
                "tipo" => "Saída",
                "categorias" => "Pessoal",
            
            ],
            [
                "descricao" => "Comprei um monitor novo",
                "valor" => 1200,
                "data" => "2024-12-18",
                "tipo" => "Saída",
                "categorias" => "Trabalho",
             
            ],
            [
                "descricao" => "Recebimento de salário",
                "valor" => 5000,
                "data" => "2024-12-18",
                "tipo" => "Entrada",
                "categorias" => "Salário",
            
            ],
            [
                "descricao" => "Pagamento da conta de luz",
                "valor" => 250,
                "data" => "2024-12-18",
                "tipo" => "Saída",
                "categorias" => "Casa",
               
            ],
            [
                "descricao" => "Compra de supermercado",
                "valor" => 450,
                "data" => "20/12/2024",
                "tipo" => "Saída",
                "categorias" => "Alimentação",
            ]
        ]);
    }
}
