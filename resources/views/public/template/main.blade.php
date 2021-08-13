@extends('public.layouts.main')
@section('title', 'Главная')
@section('content')
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @foreach($posts as $post)
        <div class="col">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h3>{{ $post->title }}</h3>
                    <p class="card-text">{{ $post->description }}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="{{ route('author-show', $post->author->name) }}" class="btn btn-sm btn-outline-secondary">Автор: {{ $post->author->name }}</a>
                        </div>
                        <small class="text-muted">{{ $post->created_at->format('Y-m-d H:i:s') }}</small>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="row mt-3">
        {{ $posts->links('public.inc.paginate') }}
    </div>
@endsection
