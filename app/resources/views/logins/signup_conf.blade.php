@extends('layouts.layout')
@section('content')
    <main class="py-4">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="mt-5">
                    <h6 class="card-title">新規登録内容確認</h6>
                    <form action="{{ route('logins.signup_comp') }}" method="POST">
                        <div class="form-group mt-5">
                        @csrf
                            <label for="user">ユーザーID</label>
                            <p>{{ $id }}</p>
                        </div>
                        <div class="form-group mt-5">
                            <label for="name">ユーザー名</label>
                            <p>{{ $name }}</p>
                        </div>
                        <div class="form-group mt-5">
                            <label for="email">メールアドレス</label>
                            <p>{{ $email }}</p>
                        </div>
                        <div class="form-group mt-5">
                            <label for="password">パスワード</label>
                            <p>{{ $password }}</p>
                        </div>
                        <div class="text-center mt-5">
                            <button type="submit" class="btn btn-primary">登録</button>                        
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection