@extends('layouts.main')

@section('title', 'Criar categoria')

@section('content')
    <div class="col-md-6 create-container">
        <form action="/categorias" method="POST" enctype="multipart/form-data">
            @csrf
            <h1>Nova categoria</h1>
            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="group">Grupo:</label>
                        <select name="group" id="group" class="form-control">
                            <option value="programacao">Programação</option>
                            <option value="data-science">Ciência de Dados</option>
                            <option value="design">Design</option>
                            <option value="devops">DevOps</option>
                            <option value="software">Software</option>
                            <option value="hardware">Hardware</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="author">Autor:</label>
                        <input type="text" class="form-control" name="author" id="author">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="description">Descrição:</label>
                <textarea name="description" id="description" cols="30" rows="8" class="form-control"></textarea>
            </div>
            <div class="d-flex flex-row-reverse">
                <button type="submit" class="btn btn-primary">Criar</button>
            </div>
        </form>
    </div>
@endsection