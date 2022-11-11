<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TECHIQUEVEST</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300&display=swap" rel="stylesheet">
    {{-- <link rel="stylesheet" href="../public/Styles/styles.css"> --}}
</head>
<body>
<form method="{{'submit'}}" action="/rewiew/check">
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
@csrf
<input type="email" name="email" id="email" placeholder="Введите email" class="form-control"><br>
<input type="text" name="subject" id="subject" placeholder="Введите отзыв" class="form-control"><br>
<textarea name="message" id="message" class="form-control" placeholder="Введите сообщение"></textarea><br>
<button type="submit" class="btn btn-success">Отправить</button>
</form>
</body>
</html>
