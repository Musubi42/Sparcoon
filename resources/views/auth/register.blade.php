<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <input type="text" name="name" id="name" placeholder="Pseudo" />
        <input type="email" name="email" id="email" placeholder="Email">
        <input type="password" name="password" id="password">
        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="pass conf">

        <button type="submit">
            Envoyer
        </button>
    </form>
</body>
</html>