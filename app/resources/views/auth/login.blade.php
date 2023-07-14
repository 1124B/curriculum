@extends('layouts.layout')
@section('content')
    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col col-md-offset-3 col-md-6">
                    <nav class="card mt-5">
                        <div class="card-header text-center">ログイン</div>
                        <div class="card-body">
                            <form action="" method="POST">
                            @csrf
                                <div class="form-group">
                                    <label for="email">メールアドレス</label>
                                    <input type="text" class="form-control" id="email" name="email" value="">
                                </div>
                                <div class="form-group">
                                    <label for="password">パスワード</label>
                                    <input type="text" class="form-control" id="password" name="password" value="">
                                </div>
                                <div class="text-right">
                                    <a href="{{ route('passwords.pwd_reset') }}">※パスワードをお忘れの方はこちら</a>
                                </div>
                                <div class="text-center mt-5">
                                    <button type="submit" class="btn btn-primary">ログイン</button>
                                </div>
                            </form>
                        </div>
                    </nav>
                    <div class="d-flex flex-column text-center mt-5">
                        <label for="email">新規会員登録</label>
                        <a href="{{ route('logins.signup') }}">
                            <button type="submit" class="btn btn-secondary">新規会員登録</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection