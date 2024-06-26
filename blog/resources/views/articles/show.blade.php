
@extends('layouts.article')

@section('main')
    <h1 class="font-thin text-4x1">{{ $article->title }}</h1>
    <p class="text-lg text-gray-700 p-2">
        {{ $article->content }}
    </p>
    <a href="{{ route('articles.index') }}">回布告欄</a>
@endsection