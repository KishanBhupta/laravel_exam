<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Registration</h1>
    <form action="{{ route('register') }}" method="post">
        @csrf
        name <input type="text" name="name" /><br />
        email <input type="email" name="email" /><br />
        password <input type="text" name="password" /><br />
        <input type="submit" value="registration" />
    </form>
    <a href="/login">Login</a>

</body>

</html>
