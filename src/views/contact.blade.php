<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Contact us any time</h1>
    <form action="{{route('contact')}}" method="post">
        @csrf
        <input type="text" name="name" placeholder="F.I.O">
        <input type="email" name="email" placeholder="Email">
        <textarea name="message" cols="30" rows="10" placeholder="Xabar"></textarea>
        <input type="submit" value="Yuborish">
    </form>
</body>
</html>
