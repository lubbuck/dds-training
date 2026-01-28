@extends('layout.app')

@section('app')
    <h1>Editar Task #{{ $task->id }}</h1>

    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label>Título:</label>
            <input type="text" name="title" value="{{ $task->title }}" required>
        </div>

        <div>
            <label>Descrição:</label>
            <textarea name="description">{{ $task->description }}</textarea>
        </div>

        <div>
            <label>Data Limite:</label>
            <input type="date" name="due_date" value="{{ $task->due_date }}">
        </div>

        <div>
            <label>
                <input type="checkbox" name="is_completed" value="1" {{ $task->is_completed ? 'checked' : '' }}>
                Concluída
            </label>
        </div>

        <button type="submit">Atualizar</button>
        <a href="{{ route('tasks.index') }}">Cancelar</a>
    </form>
@endsection
