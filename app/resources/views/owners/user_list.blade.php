@extends('layouts.layout')
@section('content')
    <main class="py-4">
        <div class="row justify-content-center mt-3">
            <div class="card">
                <div class="card-header">
                    <div class='text-center'>管理ユーザー専用画面</div>
                </div>
                <div class="card-body">
                    <div class="card-deck">
                        <form action="" method="GET">
                            <div class="d-flex align-items-center justify-content-center" style="width: 500px;">
                                <div class="form-inline">
                                    <label for="username">ユーザー名</label>
                                    <input type="text" class="form-control" id="username" name="username" value="">
                                    <button type="submit" class='btn btn-primary w-10'>検索</button>
                                    <div class="dropdown ml-5">
                                        <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                            並び替え
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <li><a class="dropdon-item" href="#">ユーザーID</a></li>
                                            <li><a class="dropdon-item" href="#">ユーザー名</a></li>
                                            <li><a class="dropdon-item" href="#">星獲得数</a></li>
                                            <li><a class="dropdon-item" href="#">投稿数</a></li>
                                            <li><a class="dropdon-item" href="#">評価数</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- ユーザー一覧 -->
        <div class="d-flex justify-content-center mt-3">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </main>
@endsection