@extends('layouts.layout')
@section('content')
    <main class="py-4">
        <div class="d-flex flex-column justify-content-center mt-5">
            <span class="text-center">不正なアクセスです。</span>
            <div class="text-center">
                <button id="btn--back" class="rounded-md bg-gray-800 text-black px-4 py-2 mt-5" style="width: 200px;">
                    元のページに戻る
                </button>
                <script>
                    const back = document.getElementById('btn--back');
                    back.addEventListener('click', (e) => { 
                        history.back();
                        return false;
                    });
                </script>
            </div>
        </div>
    </main>
@endsection