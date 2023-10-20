@extends('layouts.layout')
@section('content')
    <main class="py-4">
        <div class="row justify-content-center mt-3">
            <div class="row justify-content-center dropdown">
                <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    メーカー/シューズ選択
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li></li>
                </ul>
                <button class="btn btn-info dropdown-toggle ml-5" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                    使用用途選択
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                    <li></li>
                </ul>
            </div>
        </div>
        <div class="row justify-content-center mt-3">
            <a href="">
                <button type="submit" class="btn btn-primary">検索</button>
            </a>
            <a href="" class="ml-5">
                <button type="submit" class="btn btn-secondary">条件削除</button>
            </a>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    @foreach ($posts as $post)
                        <div class="card">
                            <div class="card-header p-3 w-100 d-flex">
                                <img src="" width="50" height="50">
                                <div class="ml-2 d-flex flex-colummn">
                                    <p class="mb-0">{{ $post->title }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="my-4 d-flex justify-content-center">
                {{ $posts->links() }}
            </div>
        </div>
        <div id="page_top" class="show text-right mr-5">
            <a href="#">ページ上部へ</a>
        </div>
    </main>
@endsection