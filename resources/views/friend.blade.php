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
    <?$user = Auth::user();?>
    @include('nav.navbar')
    
    <div><h3>Ваши друзья</h3></div>
        @if(!$friends->count(0))
            <p>У вас нет друзей</p>
        @else
            @foreach($user->friends() as $userr)
                <? $a = auth()->user()->name;
                    $b = $userr->name;
                    $s = $a.$b
                ?>

                <p>{{ $userr->name }}</p>
                <a href="{{route ('privatechat',['chatroom'=>$s])}}">приватный чат</a>
            @endforeach
        @endif


        <div><h3>Запросы в друзья</h3></div>
    @if(!$requests->count(0))
            <p>У вас нет запросов в друзья</p>
    @else
            @foreach($requests as $userr)
                <a href="user/{{ $userr->name }}"><p>{{ $userr->name }}</p></a>
            @endforeach
    @endif
            @if(Auth::user()->hasfriendrequestspending($user) )
            <p>в ожидании {{$user->name}} подтверждения запроса в друзья</p>
            @elseif(Auth::user()->hasfriendrequestrecived($user))
            <a href="#"><button>подтвердить дружбу</button></a>
            @endif
</body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>