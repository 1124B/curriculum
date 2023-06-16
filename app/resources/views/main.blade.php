@extends('layouts.layout')
@section('content')
    <main class="py-4">
        <div class="row justify-content-around mt-3">
            <a href="{{ route('posts.post') }}">
                <button type="button" class="btn btn-primary">検索</button>
            </a>
            <a href="{{ route('') }}">
                <button type="button" class="btn btn-secondary">条件削除</button>
            </a>
        </div>
    </main>
    <div id="page_top" class="show">
        <a href="#">ページ上部へ</a>
    </div>
@endsection