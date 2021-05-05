@extends('layouts.main')

@section('title', 'Dev Blog')

@section('content')
    <div class="col-md-8 offset-md-1 posts-container">
        @foreach($posts as $post)
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
                    <p class="card-text">{{ $post->content_preview }}...</p>
                    <div class="d-flex flex-row-reverse">
                        <a href="/posts/{{ $post->id }}" class="btn btn-primary">
                            Ver mais
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection