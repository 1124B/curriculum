@extends('layouts.layout')
@section('content')
    <main class="py-4">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="mt-5">
                        <h6 class="card-title">新規登録内容確認</h6>
                        <div class="form-group mt-5">
                            <label for="user">ユーザー名</label>
                        </div>
                        <div class="form-group mt-5">
                            <label for="email">メールアドレス</label>
                        </div>
                        <div class="form-group mt-5">
                            <label for="password">パスワード</label>
                        </div>
                        <div class="text-center mt-5">
                            <a href="">
                                <button type="button" class="btn btn-primary">登録</button>
                            </a>
                        </div>
                </div>
            </div>
        </div>
    </main>
@endsection