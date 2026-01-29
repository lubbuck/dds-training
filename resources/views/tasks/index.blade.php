@extends('layout.app')

@section('app')
    <h1>Minhas Tasks</h1>

    <a href="{{ route('tasks.create') }}" class="btn btn-primary">Nova Task</a>

    <table class="task-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Data Limite</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody id="task-list">
            @foreach ($tasks as $task)
                <tr>
                    <td>{{ $task->id }}</td>
                    <td title="{{ $task->description }}">{{ $task->title }}</td>
                    <td>{{ $task->date() }}</td>
                    <td class="text-center">{{ $task->is_completed ? 'OK' : '' }}</td>
                    <td>
                        <a href="{{ route('tasks.edit', ['task' => $task->id]) }}" class="btn btn-edit">Editar</a>
                        <button type="submit" class="btn btn-delete"
                            onclick="document.getElementById('form-delete').submit()">Deletar</button>
                        <form id='form-delete' action="{{ route('tasks.destroy', ['task' => $task->id]) }}" method="POST"
                            style="display:inline">
                            @csrf
                            @method('DELETE')
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
