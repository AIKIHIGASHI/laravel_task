<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
</head>
<body>
    <header>
        <div>
            Laravel
        </div>
        <div>
            @if (Session::exists('currentUserName'))
            <div>{{Session::get('currentUserName')}}▼</div>
            <div class="user-menu">
                <a href="">logout</a>
            </div>
            @else
            <a href="{{ route('login.index') }}">Login</a>
            <a href="{{ route('register.create') }}">Register</a>
            @endif
        </div>
    </header>
    {{ $slot }}
</body>
</html>
