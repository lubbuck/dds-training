@extends('layout.app')

@section('app')
    <div class="task-container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <b>Erros</b>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <h1>Editar Task #{{ $task->id }}</h1>
        <form action="{{ route('tasks.update', $task->id) }}" method="POST" class="form-container">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Título:</label>
                <input type="text" name="title" value="{{ $task->title }}" required>
            </div>

            <div class="form-group">
                <label>Descrição:</label>
                <textarea name="description">{{ $task->description }}</textarea>
            </div>

            <div class="form-group">
                <label>Data Limite:</label>
                <input type="date" name="due_date" value="{{ $task->due_date }}">
            </div>

            <div class="form-group">
                <label for="concluida">Está Concluída</label>
                <div class="checkbox-group">
                    <input type="checkbox" name="is_completed" value="1" {{ $task->is_completed ? 'checked' : '' }}
                        id="concluida">
                    <label for="concluida">Concluída!</label>
                </div>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-success">Atualizar</button>
                <a href="{{ route('tasks.index') }}" class="btn">Cancelar</a>
            </div>
        </form>
    </div>
@endsection
