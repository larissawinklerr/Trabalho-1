<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
    public function index()
    {
        $tarefas = Tarefa::all(); // Busca todas as tarefas do banco de dados

        return view('tarefas', compact('tarefas')); // Passa a lista de tarefas para a view
    }
}