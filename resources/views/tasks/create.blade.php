@extends('layout.app')

@section('app')
    <h1>Nova Task</h1>

    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <div>
            <label>Título:</label>
            <input type="text" name="title" required>
        </div>

        <div>
            <label>Descrição:</label>
            <textarea name="description"></textarea>
        </div>

        <div>
            <label>Data Limite:</label>
            <input type="date" name="due_date">
        </div>

        <button type="submit">Salvar</button>
        <a href="{{ route('tasks.index') }}">Cancelar</a>
    </form>
@endsection
