@extends('layouts.layout')
@section('content')
    <main class="py-4">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="mt-5">
                    <h6 class="card-title">新規登録内容確認</h6>
                    <form action="{{ route('user.register_confirm') }}" method="POST">
                        @csrf
                        <div class="form-group mt-5">                        
                            <label for="user">ユーザーID：</label>
                            {{ $input['user_id'] }}
                            <input class="form-control" type="hidden" id="user_id" name="user_id" required value="{{ $input['user_id'] }}">
                        </div>
                        <div class="form-group mt-5">
                            <label for="name">ユーザー名：</label>
                            {{ $input['name'] }}
                            <input class="form-control" type="hidden" id="name" name="name" required value="{{ $input['name'] }}">
                        </div>
                        <div class="form-group mt-5">
                            <label for="email">メールアドレス：</label>
                            {{ $input['email'] }}
                            <input class="form-control" type="hidden" id="email" name="email" required value="{{ $input['email'] }}">
                        </div>
                        <div class="form-group mt-5">
                            <label for="password">パスワード：</label>
                            ****
                            <input class="form-control" type="hidden" id="password" name="password" required value="{{ $input['password'] }}">
                        </div>
                        <div class="row justify-content-center mt-5">
                            <div class="text-center">
                                <button type="submit" name="edit" value="edit" class="btn btn-secondary">変更</button>                        
                            </div>
                            <div class="text-center ml-5">
                                <button type="submit" class="btn btn-primary">登録</button>                        
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection