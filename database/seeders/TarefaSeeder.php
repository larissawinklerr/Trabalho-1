<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tarefa; // Corrigido para "App\Models\Tarefa"
use Faker\Factory as Faker;

class TarefaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $tarefas = [
            'Ler um livro',
            'Treinar',
            'Fazer comida',
            'cuidar dos gatos',
            'Limpar a casa'
        ];

        foreach ($tarefas as $tarefa) {
            Tarefa::create([
                'titulo' => $tarefa, 
                'descricao' => $faker->sentence, 
            ]);
        }
    }
}
