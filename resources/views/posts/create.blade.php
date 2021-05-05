@extends('layouts.main')

@section('title', 'Crie seu post')

@section('content')

    <div class="col-md-6 create-container">
        <h1>Crie seu Post</h1>
        <form action="/posts" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Título:</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Escreva o título do post">
            </div>
            <div class="row">
                <div class="col form-group">
                    <label for="category">Categoria:</label>
                    <select name="category" id="category" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{ $category->name }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col form-group">
                    <label for="author">Autor:</label>
                    <input type="text" class="form-control" name="author" placeholder="Seu nome aqui">
                </div>
            </div>
            <div class="form-group">
                <label for="content">Conteúdo:</label>
                <textarea name="content" id="content" cols="30" rows="15" class="form-control"></textarea>
            </div>
            <div class="d-flex flex-row-reverse">
                <button type="submit" class="btn btn-primary">Criar post</button>
            </div>
        </form>
    </div>
@endsection
