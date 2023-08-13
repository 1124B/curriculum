@extends('layouts.layout')
@section('content')
    <main class="py-4">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="mt-5">
                        <h6 class="text-center">パスワードリセットメール送信完了</h6>
                        <div>
                            <h3>パスワードリセットメールを送信しました。</h3>
                        </div>
                        <div class="text-center mt-5">
                            <a href="{{ route('user.getlogin') }}">
                                <button type="button" class="btn btn-primary">ログイン画面へ</button>
                            </a>
                        </div>
                </div>
            </div>
        </div>
    </main>
@endsection