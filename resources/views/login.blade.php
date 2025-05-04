<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
</head>

<body>
    <h2>Login</h2>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <label>Email: <input type="email" name="email" value="{{ old('email') }}"></label><br>
        @error('email')
            <p>{{ $message }}</p>
        @enderror

        <label>Password: <input type="password" name="password"></label><br>
        @error('password')
            <p>{{ $message }}</p>
        @enderror

        <button type="submit">Login</button>
    </form>
    <p><a href="{{ route('register') }}">Don't have an account?</a></p>
</body>

</html>
