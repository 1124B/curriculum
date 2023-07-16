@extends('layouts.layout')
@section('content')
    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col col-md-offset-3 col-md-6">
                    <nav class="card mt-5">
                        <div class="card-header text-center">新規登録</div>
                        <div class="card-body">
                            <form action="{{ route('user.register_confirm') }}" method="POST">
                                <div class="form-group">
                                @csrf
                                    <label for="id">ユーザーID</label>
                                    <input type="text" class="form-control" id="id" name="id" value="{{ old('id') }}">
                                </div>
                                <div class="form-group">
                                    <label for="name">ユーザー名</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                                </div>
                                <div class="form-group">
                                    <label for="email">メールアドレス</label>
                                    <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}">
                                </div>
                                <div class="form-group">
                                    <label for="password">パスワード</label>
                                    <input type="password" class="form-control" id="password" name="password" value="{{ old('password') }}">
                                </div>
                                <div class="form-group">
                                    <label for="cfm">パスワード確認</label>
                                    <input type="password" class="form-control" id="cfm" name="cfm" value="{{ old('cfm') }}">
                                </div>
                                <div class="text-center mt-5">
                                    <button type="submit" class="btn btn-primary">入力確認</button>
                                </div>
                            </form>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </main>
@endsection