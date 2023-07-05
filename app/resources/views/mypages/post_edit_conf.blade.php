@extends('layouts.layout')
@section('content')
    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="card mt-3">
                    <div class="card-header text-center">編集内容確認</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">タイトル</label>
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
                            <label for="photo">登録画像</label>
                        </div>
                        <div class="col-xs-1 d-flex flex-row justify-content-around mt-3">
                            <div class="form-group">
                                <label for="distance">使用距離</label>
                                <div class="d-flex flex-row align-items-end">
                                    <>
                                    <span>km</span>
                                </div> 
                            </div>  
                            <div class="form-group">
                                <label for="size">使用サイズ</label>
                                <div class="d-flex flex-row align-items-end">
                                    <>
                                    <span>cm</span>
                                </div> 
                            </div>  
                            <div class="form-group">
                                <label for="weight">重量</label>
                                <div class="d-flex flex-row align-items-end">
                                    <>
                                    <span>g</span>
                                </div> 
                            </div>
                        </div>  
                        <div class="form-group">
                            <label for="review">レビュー</label>
                            <textarea id="textarea1" class="form-control" name="review" value=""></textarea>
                        </div>  
                        <div class="row justify-content-center mt-3">
                            <a href="">
                                <button type="submit" class="btn btn-secondary">編集画面に戻る</button>
                            </a>
                            <a href="" class="ml-5">
                                <button type="submit" class="btn btn-primary">投稿する</button>
                            </a>
                        </div>
                    </div>
                </div>       
            </div>
        </div>
    </main>
@endsection