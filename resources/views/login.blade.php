<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Ini adalah form</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="/login" method="POST">
        <label>Staff Id:
            <input type="text" name="staff_id">
        </label>
        <label>Password:
            <input type="password" name="password">
        </label>

        <input type="submit" value="GO!">
        @csrf
    </form>
</body>

</html>
