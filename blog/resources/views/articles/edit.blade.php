
@extends('layouts.article')

@section('main')
    <h1 class="font-thin text-4x1">公告 > 編輯文章</h1>

    @if($errors->any())
        <div class="error p-3 bg-red-500 text-red-100 font-thin rounded">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('articles.update',$article) }}" method="post">
        @csrf
        @method('patch')
        
        <div class="field my-2">
            <label for="">標題</label>
            <input type="text" value="{{ $article->title }}" name="title" class="border border-grey-300 p-2">
        </div>

        <div class="field my-2">
            <label for="">內文</label>
            <textarea name="content" cols="30" rows="10" class="border border-grey-300 p-2">{{ $article->content }}</textarea>
        </div>

        <div class="actions">
            <button type="submit" class="px-3 py-1 rounded bg-grey-200 hober:bg-gray-300">更新文章</button>
        </div>  
    </form>
@endsection