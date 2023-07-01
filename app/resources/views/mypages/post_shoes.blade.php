@extends('layouts.layout')
@section('content')
    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="card mt-5">
                    <div class="card-header text-center">シューズレビュー投稿</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="email">タイトル</label>
                            <input type="text" class="form-control" id="title" name="title" value="">
                        </div>
                        <div class="justify-content-start mt-3">                        
                            <div class="dropdown">
                                <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    メーカー/シューズ選択
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li></li>
                                </ul>
                            </div>
                        </div>
                        <div class="justify-content-start mt-3">                        
                            <div class="dropdown">        
                                <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                    使用用途選択
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                    <li></li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <label for="photo">写真選択（5枚まで）</label>
                            <input type="file" id="file" class="form-control-file">
                        </div>
                        <div class="row justify-content-around mt-3">
                            <div class="form-group col-xs-2">
                                <label for="email">使用距離</label>
                                <input type="text" class="form-control" id="distance" name="distance" value="" size="3">  
                            </div>  
                            <div class="form-group col-xs-2">
                                <label for="email">使用サイズ</label>
                                <input type="text" class="form-control" id="size" name="size" value="" size="3">
                            </div>  
                            <div class="form-group col-xs-2">
                                <label for="email">重量</label>
                                <input type="text" class="form-control" id="weight" name="weight" value="" size="3">
                            </div>
                        </div>  
                        <div class="form-group">
                            <label for="email">レビュー</label>
                            <textarea id="textarea1" class="form-control" name="review" value=""></textarea>
                        </div>  
                        <div class="row justify-content-center mt-3">
                            <a href="">
                                <button type="submit" class="btn btn-primary">マイページに戻る</button>
                            </a>
                            <a href="" class="ml-5">
                                <button type="submit" class="btn btn-primary">確認する</button>
                            </a>
                        </div>
                    </div>
                </div>       
            </div>
        </div>
    </main>
@endsection