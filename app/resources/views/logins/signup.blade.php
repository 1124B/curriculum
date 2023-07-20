@extends('layouts.layout')
@section('content')
    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col col-md-offset-3 col-md-6">
                    <nav class="card mt-5">
                        <div class="card-header text-center">新規登録</div>
                        <div class="card-body">
                            <form action="{{ route('user.register_post') }}" method="POST">
                                @csrf
                                <div class="form-group">                                
                                    <label for="user_id">ユーザーID</label>
                                    <input type="text" class="form-control" id="user_id" name="user_id" required value="{{ old('user_id') }}">
                                </div>
                                <div class="form-group">
                                    <label for="name">ユーザー名</label>
                                    <input type="text" class="form-control" id="name" name="name" required value="{{ old('name') }}">
                                </div>
                                <div class="form-group">
                                    <label for="email">メールアドレス</label>
                                    <input type="text" class="form-control" id="email" name="email" required value="{{ old('email') }}">
                                </div>
                                <div class="form-group">
                                    <label for="password">パスワード</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                                <div class="form-group">
                                    <label for="cfm">パスワード確認</label>
                                    <input type="password" class="form-control" id="cfm" name="cfm">
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