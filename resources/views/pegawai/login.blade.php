<!DOCTYPE html>
<html>
<head>
    <title>Login Pegawai</title>
</head>
<body>
    <h2>Login Pegawai</h2>

    @if($errors->any())
        <div style="color: red;">{{ $errors->first() }}</div>
    @endif

    <form method="POST" action="{{ url('/login') }}">
        @csrf
        <label for="nip">NIP:</label><br>
        <input type="text" name="nip" required><br><br>

        <label for="password">Password:</label><br>
        <input type="password" name="password" required><br><br>

        <button type="submit">Login</button>
    </form>
</body>
</html>
