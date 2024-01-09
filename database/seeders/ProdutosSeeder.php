<?php

namespace Database\Seeders;

use App\Models\Produto;
use Illuminate\Database\Seeder;

class ProdutosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produto::create([
            'nome' => 'Produto 1',
            'preco' => 10.00,
            'imagem' => 'https://via.placeholder.com/150',
            'descricao' => 'Descrição do produto 1',
        ]);

        Produto::create([
            'nome' => 'Produto 2',
            'preco' => 20.00,
            'imagem' => 'https://via.placeholder.com/150',
            'descricao' => 'Descrição do produto 2',
        ]);

        Produto::create([
            'nome' => 'Produto 3',
            'preco' => 30.00,
            'imagem' => 'https://via.placeholder.com/150',
            'descricao' => 'Descrição do produto 3',
        ]);

        Produto::create([
            'nome' => 'Produto 4',
            'preco' => 40.00,
            'imagem' => 'https://via.placeholder.com/150',
            'descricao' => 'Descrição do produto 4',
        ]);

        Produto::create([
            'nome' => 'Produto 5',
            'preco' => 50.00,
            'imagem' => 'https://via.placeholder.com/150',
            'descricao' => 'Descrição do produto 5',
        ]);

        Produto::create([
            'nome' => 'Produto 6',
            'preco' => 60.00,
            'imagem' => 'https://via.placeholder.com/150',
            'descricao' => 'Descrição do produto 6',
        ]);
    }
}
