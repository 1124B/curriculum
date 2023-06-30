@extends('layouts.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-ms-6">
                <div class="row">
                    <div class="col">
                        <label for="user">ユーザー名</label>
                    </div>
                    <div class="col">
                        <img src="{{ asset('image/logo.png') }}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">投稿数</label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">平均星獲得数</label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">フォロー</label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">フォロワー</label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">bio</label>
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