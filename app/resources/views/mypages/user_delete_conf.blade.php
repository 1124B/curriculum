@extends('layouts.layout')
@section('content')
    <main class="py-4">
        <div class="container">
            <div class="d-flex flex-row align-items-center justify-content-center mt-3">
                <span class="text-danger mr-5">アカウントを削除しますか？</span>
                <a href="">
                    <button type="submit" class="btn btn-danger">削除する</button>
                </a>
                <a href="" class="ml-5">
                    <button type="submit" class="btn btn-secondary">編集画面に戻る</button>
                </a>
            </div>
            <div class="row justify-content-center">                
                <div class="card mt-3">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="id">ユーザーID</label>
                        </div>
                        <div class="form-group">
                            <label for="email">メールアドレス</label>
                        </div>
                        <div class="form-group">
                            <label for="password">パスワード</label>
                        </div>
                        <div class="form-group mt-3">
                            <label for="photo">アイコン画像</label>
                        </div>                        
                        <div class="form-group">
                            <label for="bio">bio</label>
                        </div>                          
                    </div>
                </div>       
            </div>
        </div>
    </main>
@endsection