@extends('public.layouts.main')
@section('title', 'Добавление поста')
@section('content')
    <div class="row">
        <div class="col">
            <form action="{{ route('post-store') }}" class="form-control">
                <label>Название</label>
                <input type="text" class="form-control mt-1" value="{{ old('title') }}" name="title" />
                <label>Описание</label>
                <textarea rows="5" class="form-control mt-1" name="description">{{ old('description') }}</textarea>
                <button type="submit" class="btn btn-secondary mt-1">Добавить пост</button>
            </form>
        </div>
    </div>

@endsection
