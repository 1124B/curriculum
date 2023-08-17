@extends('layouts.layout')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-ms-6">
                <div class="row">
                    <div class="col">
                        <label for="user">ユーザー名</label>
                        <span class=""></span>
                    </div>
                    <div class="w-100">
                        <div class="col-6 col-md-6">
                            <img src="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-6 col-md-6">
                            <label for="">投稿数</label>
                        </div>
                        <div class="col-6 col-md-6">
                            <label for="">平均星獲得数</label>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-6 col-md-6">
                            <label for="">フォロー</label>
                        </div>
                        <div class="col-6 col-md-6">
                            <label for="">フォロワー</label>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-6 col-md-6">
                            <label for="">bio</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-ms-6">
                <div class="row">
                    <div class="col">
                        <a href="">post</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <a href="">edit</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <a href="">star</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="page_top" class="show text-right mr-5">
        <a href="#">ページ上部へ</a>
    </div>
@endsection