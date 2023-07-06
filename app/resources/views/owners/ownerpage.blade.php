@extends('layouts.layout')
@section('content')
    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="card mt-3">
                    <div class="card-header text-center">管理者ページ</div>
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center">
                            <a href="">
                                <button type="submit" class="btn btn-secondary mt-3">ユーザー検索</button>
                            </a>
                            <a href="">
                                <button type="submit" class="btn btn-secondary mt-5">投稿検索</button>
                            </a>
                            <a href="">
                                <button type="submit" class="btn btn-secondary mt-5">メーカー/シューズ追加</button>
                            </a>
                            <a href="">
                                <button type="submit" class="btn btn-secondary mt-5">使用用途追加</button>
                            </a>
                        </div>
                    </div>
                </div>       
            </div>
        </div>
    </main>
@endsection