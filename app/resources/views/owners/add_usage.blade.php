@extends('layouts.layout')
@section('content')
    <main class="py-4">
    <div class="row justify-content-center mt-3">
        <div class="card">
            <div class="card-header">
                <div class='text-center'>使用用途追加</div>
            </div>
            <div class="card-body">
                <div class="card-deck">
                    <form action="" method="GET">
                        <div class="d-flex flex-column align-items-center justify-content-center" style="width: 500px;">
                                <input type="text" class="form-control mt-4" id="usage" name="usage" value="">
                                <button type="submit" class='btn btn-primary w-10 mt-5'>登録</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection