<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>ini adalah register page</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="/register" method="POST">
        <label>Name:
            <input type="text" name="name">
        </label>
        <label>Email:
            <input type="text" name="email">
        </label>
        <label>Password:
            <input type="password" name="password">
        </label>
        <label>Password Confirmation:
            <input type="password" name="password_confirmation">
        </label>

        <input type="submit" value="register!">
        @csrf
    </form>
</body>
</html>
