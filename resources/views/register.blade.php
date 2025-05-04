<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
</head>

<body>
    <h2>Register</h2>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <label>Name: <input type="text" name="name" value="{{ old('name') }}"></label><br>
        @error('name')
            <p>{{ $message }}</p>
        @enderror

        <label>Email: <input type="email" name="email" value="{{ old('email') }}"></label><br>
        @error('email')
            <p>{{ $message }}</p>
        @enderror

        <label>Password: <input type="password" name="password"></label><br>
        @error('password')
            <p>{{ $message }}</p>
        @enderror

        <label>Confirm Password: <input type="password" name="password_confirmation"></label><br>

        <button type="submit">Register</button>
    </form>
    <p><a href="{{ route('login') }}">Already have an account?</a></p>
</body>

</html>
