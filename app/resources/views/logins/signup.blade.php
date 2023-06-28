@extends('layouts.layout')
@section('content')
    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col col-md-offset-3 col-md-6">
                    <nav class="card mt-5">
                        <div class="card-header text-center">新規登録</div>
                        <div class="card-body">
                            <form action="" method="">
                                <div class="form-group">
                                    <label for="user">ユーザー名</label>
                                    <input type="text" class="form-control" id="user" name="user" value="">
                                </div>
                                <div class="form-group">
                                    <label for="email">メールアドレス</label>
                                    <input type="text" class="form-control" id="email" name="email" value="">
                                </div>
                                <div class="form-group">
                                    <label for="password">パスワード</label>
                                    <input type="text" class="form-control" id="password" name="password" value="">
                                </div>
                                <div class="form-group">
                                    <label for="cfm">パスワード確認</label>
                                    <input type="text" class="form-control" id="cfm" name="cfm" value="">
                                </div>
                                <div class="text-center mt-5">
                                    <a href="">
                                        <button type="submit" class="btn btn-primary">入力確認</button>
                                    </a>
                                </div>
                            </form>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </main>
@endsection