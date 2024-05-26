
@extends('layouts.article')

@section('main')
    <h1 class="font-thin text-4x1">布告欄CRUD演示</h1>
    <a href="{{  route('articles.create')  }}">新增文章(C)</a>

    @foreach($articles as $article)
        <div class="border-t border-gray-300 my-1 p-2">
            <h2 class="font-bold text-lg">
                <a href="{{ route('articles.show', $article) }}">
                    {{ $article->title }}(R)
                </a>
            </h2>
            <p>
                張貼時間:{{ $article->created_at }} 
            </p>
            <div class="flex">
                <a class="mr-2" href="{{ route('articles.edit',['article' => $article->id]) }}">編輯(U)</a>
                <form action="{{ route('articles.destroy', $article) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="px-2 bg-red-500 text-red-100">刪除(D)</button>
                </form>
            </div>
        </div>
    @endforeach
    {{ $articles->links() }}
@endsection