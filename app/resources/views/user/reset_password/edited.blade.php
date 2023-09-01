@extends('layouts.layout')
@section('content')
    <main class="py-4">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="mt-5">
                        <h6 class="text-center">パスワードリセット完了</h6>
                        <div class="mt-5">
                            <h5>パスワードリセットが完了しました。</h5>
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