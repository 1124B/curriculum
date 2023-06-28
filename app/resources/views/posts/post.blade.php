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
                <button type="button" class="btn btn-primary">検索</button>
            </a>
            <a href="" class="ml-5">
                <button type="button" class="btn btn-secondary">条件削除</button>
            </a>
        </div>
        <div id="page_top" class="show text-right mr-5">
            <a href="#">ページ上部へ</a>
        </div>
    </main>
@endsection