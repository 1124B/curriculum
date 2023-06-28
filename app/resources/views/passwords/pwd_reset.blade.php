@extends('layouts.layout')
@section('content')
    <main class="py-4">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="mt-5">
                        <h6 class="text-center">パスワード再設定</h6>
                        <div class="form-group mt-5">
                            <label for="email">メールアドレス入力</label>
                            <input type="text" class="form-control" id="email" name="email" value="">
                        </div>
                        <div class="text-center mt-5">
                            <a href="">
                                <button type="button" class="btn btn-primary">メール送信</button>
                            </a>
                        </div>
                </div>
            </div>
        </div>
    </main>
@endsection