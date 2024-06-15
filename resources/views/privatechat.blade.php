<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
    @include('nav.navbar')
<div class="d-flex justify-content-center  ">
    <div class="card py-2 px-2">
        <p class="text-primary">Общий чат всех пользователей</p>
        @foreach($messages as $message)
        <div class="">
            <p><small>{{ $message->created_at }}</small>
                
                <strong><a class="text-decoration-none" href="{{ route('profile.index',['username' =>$message->user->name])}}">{{ $message->user->name }}</a>:</strong>
                 {{ $message->content }}
            </p>
            <hr>
        </div>
    @endforeach
    <form method="post" action="{{ route('privatesend-message',['chatroom' =>$chatroom]) }}">
        @csrf
        <input type="text" name="content">
        <button type="submit">Отправить</button>
    </form>
    </div>
</div>


</body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>