@extends('layouts.main')

@section('title', 'Categorias')

@section('content')
    <div class="col-md-8 offset-md-1 posts-container">
        @foreach($categories as $category)
            <a href="/categorias/{{ $category->id }}" class="category-link">
                <div class="card card-posts category-cards">
                    <div class="card-body">
                        <h2 class="card-title">{{ $category->name}}</h2>
                        <div class="d-flex justify-content-between card-desciption">
                            <p class="card-date">Criada em: {{ $category->group }}</p>              
                            <p class="card-author">Criado por: {{ $category->author }}</p>
                        </div>
                        <p class="card-text">{{ $category->description }}</p>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
@endsection