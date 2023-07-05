@extends('layouts.layout')
@section('content')
    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="card mt-3">
                    <div class="card-header text-center">登録情報変更</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="id">ユーザーID</label>
                            <input type="text" class="form-control" id="id" name="id" value="">
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
                        <div class="form-group mt-3">
                            <label for="photo">アイコン画像</label>
                            <input type="file" id="file" class="form-control-file">
                        </div>                        
                        <div class="form-group">
                            <label for="bio">bio</label>
                            <textarea id="textarea1" class="form-control" name="bio" value=""></textarea>
                        </div>  
                        <div class="row justify-content-center mt-3">
                            <a href="">
                                <button type="submit" class="btn btn-primary">編集内容確認</button>
                            </a>
                            <a href="" class="ml-5">
                                <button type="submit" class="btn btn-danger">アカウントを削除する</button>
                            </a>
                        </div>
                    </div>
                </div>       
            </div>
        </div>
    </main>
@endsection