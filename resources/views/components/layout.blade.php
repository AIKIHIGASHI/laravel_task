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
            <a href="{{ route('login.index') }}">Login</a>
            <a href="{{ route('register.create') }}">Register</a>
        </div>
    </header>
    {{ $slot }}
</body>
</html>
