@extends('layouts.layout')
@section('content')
    <main class="py-4">
        <!-- エラーメッセージ -->
        @if (isset($login_error))
            <div id="error_explanation" class="text-danger text-center">
                <ul>
                    <li>メールアドレスまたはパスワードが一致しません。</li>
                </ul>
            </div>
        @endif
        <div class="container">
            <div class="row justify-content-center">
                <div class="col col-md-offset-3 col-md-6">
                    <nav class="card mt-3">
                        <div class="card-header text-center">ログイン</div>
                        <div class="card-body">
                            <form action="{{ route('user.login') }}" method="POST">
                            @csrf
                                <div class="form-group">
                                    <label for="user_email">{{ trans('validation.attributes.email') }}</label>
                                    <input type="text" class="form-control" id="user_email" name="email" value="{{ old('email') }}">
                                </div>
                                <div class="form-group">
                                    <label for="user_password">{{ trans('validation.attributes.password') }}</label>
                                    <input type="password" class="form-control" id="user_password" name="password" value="{{ old('password') }}">
                                </div>
                                <div class="text-right">
                                    <a href="{{ route('password_reset.email.form') }}">※パスワードをお忘れの方はこちら</a>
                                </div>
                                <div class="text-center mt-5">
                                    <button type="submit" value="ログインする" class="btn btn-primary">ログイン</button>
                                </div>
                            </form>
                        </div>
                    </nav>
                    <div class="d-flex flex-column text-center mt-5">
                        <label for="email">新規会員登録</label>
                        <a href="{{ route('user.register_show') }}">
                            <button type="submit" class="btn btn-secondary">新規会員登録</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection