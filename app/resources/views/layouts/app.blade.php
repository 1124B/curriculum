<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('image/logo.png') }}" alt="">
                </a>
            </div>
            <div class="mr-3">
                @if(isset($email))
                    <span class="my-navbar-item"><a href="{{ route('user.mypage') }}">{{ $name }}</a></span>
                    /
                    <a href="#" id="logout" class="my-navbar-item">ログアウト</a>
                    <form id="logout-form" action="{{ route('user.getlogout') }}" method="GET" style="display: none;">
                    @csrf
                    </form>
                    <script>
                        document.getElementById('logout').addEventListener('click', function(event){
                        event.preventDefault();
                        document.getElementById('logout-form').submit();
                        });
                    </script>
                @else
                    <a href="{{ route('login') }}">
                        ログイン/新規登録
                    </a>
                @endif
            </div>
        </nav>
        @yield('content')
    </div>
</body>
</html>
