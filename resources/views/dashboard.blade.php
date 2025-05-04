<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
</head>

<body>
    {{ $user = Auth::user()->load('role') }}
    <h2>Welcome, {{ auth()->user()->name }}</h2>
    <p>Your email: {{ auth()->user()->email }}</p>
    <p>Your ID: {{ auth()->user()->id }}</p>
    <p>Your are admin: {{ Auth::check() && (Auth::user()->role->name == 'admin') == 'admin' ? 'True' : 'False' }}</p>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>

</html>
