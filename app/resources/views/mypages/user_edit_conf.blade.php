@extends('layouts.layout')
@section('content')
    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="card mt-3">
                    <div class="card-header text-center">編集内容確認</div>
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
                        <div class="row justify-content-center mt-3">
                            <a href="">
                                <button type="submit" class="btn btn-secondary">編集画面に戻る</button>
                            </a>
                            <a href="" class="ml-5">
                                <button type="submit" class="btn btn-primary">登録する</button>
                            </a>
                        </div>
                    </div>
                </div>       
            </div>
        </div>
    </main>
@endsection