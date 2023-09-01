@extends('layouts.layout')
@section('content')
    <main class="py-4">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="mt-5">
                    <h6 class="text-center">新しいパスワード設定</h6>
                    <form method="POST" action="{{ route('password_reset.update') }}">
                        @csrf
                        <input type="hidden" name="reset_token" value="{{ $userToken->token }}">
                        <div class="input-group d-flex justify-content-between mt-3">
                            <label for="password" class="label">パスワード</label>
                            <input type="password" name="password" class="input {{ $errors->has('password') ? 'incorrect' : '' }} ml-3">
                            @error('password')
                                <div class="error">{{ $message }}</div>
                            @enderror
                            @error('token')
                                <div class="error">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="input-group d-flex justify-content-between mt-3">
                            <label for="password_confirmation" class="label">パスワード再入力</label>
                            <input type="password" name="password_confirmation" class="input {{ $errors->has('password_confirmation') ? 'incorrect' : '' }} ml-3">
                        </div>
                        <div class="text-center mt-3">
                            <button type="submit" class="btn btn-primary">パスワード再設定</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection