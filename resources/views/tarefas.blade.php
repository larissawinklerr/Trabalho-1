<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Descrição</th>
            </tr>
    </thead>
    <body>
        @foreach ($tarefas as $tarefa)
            <tr>
                <td>{{ $tarefa->id }}</td>
                <td>{{ $tarefa->titulo }}</td>
                <td>{{ $tarefa->descricao }}</td>
                </tr>
        @endforeach
    </body>
</table>
