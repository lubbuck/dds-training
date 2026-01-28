@extends('layout.app')

@section('app')
    <div class="task-container">
        <h1>Nova Task</h1>
        <form action="{{ route('tasks.store') }}" method="POST"class="form-container">
            @csrf
            <div class="form-group">
                <label for="titulo">Título:</label>
                <input type="text" name="title" id="titulo" required>
            </div>

            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <textarea name="description" id="descricao"></textarea>
            </div>

            <div class="form-group">
                <label for="due_date">Data Limite:</label>
                <input type="date" name="due_date" id="due_date">
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-success">Salvar</button>
                <a href="{{ route('tasks.index') }}" class="btn">Cancelar</a>
            </div>
        </form>
    </div>
@endsection
