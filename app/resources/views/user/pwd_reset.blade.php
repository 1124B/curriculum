@extends('layouts.layout')
@section('content')
    <main class="py-4">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col col-md-offset-3 col-md-4">
                    <div class="mt-5">
                            <h6 class="text-center">パスワード再設定</h6>
                                <form method="POST" action="{{ route('password_reset.email.send') }}">
                                @csrf
                                <div class="form-group mt-5">
                                    <label for="email">メールアドレス入力</label>
                                    <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}">
                                    @error('email')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            <div class="row justify-content-center mt-5">
                                <a href="">
                                    <button type="button" class="btn btn-primary">メール送信</button>
                                </a>
                                </form>
                                <a href="{{ route('user.getlogin') }}" class="ml-5">
                                    <button type="button" class="btn btn-secondary">戻る</button>
                                </a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection