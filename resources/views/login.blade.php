<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS PWEB - Login</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="login-body">
    <div class="login-container">
        <h1>Silakan Login</h1>
        <form action="{{ route('login.process') }}" method="POST" class="login-form">
            @csrf
            <div>
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
