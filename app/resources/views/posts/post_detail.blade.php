@extends('layouts.layout')
@section('content')
    <main class="py-4">            
            <div class="row justify-content-center">
                <div class="card mt-3">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="email">タイトル</label>
                        </div>
                        <div class="justify-content-start mt-3">                        
                            <label for="brand">メーカー/シューズ</label>
                        </div>
                        <div class="justify-content-start mt-3">                        
                            <label for="usage">使用用途</label>
                        </div>
                        <div class="form-group mt-3">
                            <label for="photo">登録画像</label>
                        </div>
                        <div class="row justify-content-around mt-3">
                            <div class="form-group col-xs-1">
                                <label for="distance">使用距離</label>
                                <div class="d-flex flex-row align-items-end">
                                    <>
                                    <span>km</span>
                                </div>   
                            </div>  
                            <div class="form-group col-xs-1">
                                <label for="size">使用サイズ</label>
                                <div class="d-flex flex-row align-items-end">
                                    <>
                                    <span>cm</span>
                                </div> 
                            </div>  
                            <div class="form-group col-xs-1">
                                <label for="weight">重量</label>
                                <div class="d-flex flex-row align-items-end">
                                    <>
                                    <span>g</span>
                                </div> 
                            </div>
                        </div>  
                        <div class="form-group">
                            <label for="review">レビュー</label>
                        </div>
                    </div>
                </div>       
            </div>
    </main>
@endsection