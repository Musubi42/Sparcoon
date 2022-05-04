<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <input type="email" name="email" id="email" placeholder="Mail" />
        <input type="password" name="password" id="password">

        <button type="submit">
            Envoyer
        </button>
    </form>
    
</body>
</html>