@extends('layouts.main')

@section('title', $post->title)

@section('content')
<div class="col-md-8 offset-md-1 posts-container">
        <div class="card card-posts">
            <div class="card-body">
                <a href="#">
                    <p class="card-category">{{ $post->category }}</p>                    
                </a>
                <h2 class="card-title">{{ $post->title }}</h2>
                <div class="d-flex justify-content-between card-desciption">
                    <p class="card-author">Criado por: {{ $post->author }}</p>
                    <p class="card-date">Postado em: {{ $post->created_at }}</p>              
                </div>
                <p class="card-text">{{ $post->content}}</p>
                <div class="d-flex flex-row-reverse">
                    <form action="/posts/{{ $post->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection