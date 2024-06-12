<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">
    <title>Document</title>
</head>
<body>
    <?$user = Auth::user();?>
@include('nav.navbar')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card profile-banner">
                    <div class="card-head">
                        <a href="{{ url('profile') }}"><img src="img/Rectangle.png"></a>
                    </div>
                    <div class="card-body">
                        <div class="profile-2">
                            <a href="{{ url('profile') }}">
                                <img src="img/Ellipse.png" alt=""></a>
                        </div>
                        <div class="profile-edit-panel">
                            <button class="edit-btn "><img src="img/Vector (1).svg" alt=""> Settings</button>
                            <img src="img/more.svg" alt="">
                        </div>
                        <div class="card-name">
                            <p class="name"><?echo  $user->name;?></p>
                            <p class="id-name"><?echo  $user->name;?></p>
                        </div>
                        <div class="row row-cols-3 card-info">
                            <div class="col card-info1"><p class="card-info2">цифра</p><p class="card-info3">обозначение</p></div>
                            <div class="col card-info1"><p class="card-info2">цифра</p><p class="card-info3">обозначение</p></div>
                            <div class="col card-info1"><p class="card-info2">цифра</p><p class="card-info3">обозначение</p></div>
                        </div>
                        
                    </div>
                </div>
                <div class="card trending">
                    <p class="trending-top">trending-title</p>
                    <div class="trending-body">
                        <div class="trending-flex">
                            <div class="trending-icon">
                                <a href="#">
                                        <img src="img/Music_Entertainment_filming_board_film_sign-1024.webp" alt="profile picture">
                                </a>
                            </div>
                            <div class="trending-title">
                                <p class="trending-nazv">#Название</p>
                                <p class="trending-vetki">3 ветки</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-5">
                @include('post.post')
            </div>
            <div class="col">
                <div class="card people">
                        <div class="follow justify-content-between align-items-center">
                            <p class="follow1">People to follow</p>
                            <p class="follow2">See All</p>
                        </div>
                        <?
                        $i = 0;
                        ?>
                        @foreach($users as $user)
                        <?
                        $i++;
                        if($i > 3) {
		                break; // При достижении i > 3 останавливаем выборку
	                    }
                        ?>
                        
                        <div class="people-n align-items-center">
                            <div class="people-img"><img class="dimga" src="/avatars/{{ $user->avatar }}"></div>
                        <div class="people2">
                            <div class="follow-people">
                                <div class="people-id"><p class="name">{{ $user->name }}</p><p class="id-name">{{ $user->name }}</p></div>
                            </div>
                            <button type="button" class="btn btn-success ">Follow</button>
                        </div>
                        </div>
                        @endforeach
                </div>
                <div class="card events">
                    <p class="event-title">Recommended events</p>
                    <div class="events-body">
                        <img src="img/Rectangle 3.4.png" alt="">
                        <div class="event-location flex justify-content-between align-items-center">
                            <div class=""><img src="img/Group 2.4.svg" alt=""></div>
                            <div class=""><p>4.6 miles</p></div>
                        </div>
                        <p class="event-name">Carnival Night Festival</p>
                        <div class="flex justify-content-between event-data ">
                            <img src="img/Group (2).svg" alt="">
                            <p>Thu, Jan 10th, 4:00 am</p>
                        </div>
                        <div class="event-friend flex justify-content-between align-items-center">
                            <div class="event-friend1"><img src="img/Group (3).svg" alt=""></div>
                            <div class="event-friend2"><img src="img/Group 6.6.png" alt=""></div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <h1>All Users</h1>
<ul>
    <div>
        @foreach($users as $user)
        <li>{{ $user->name }}</li>
    @endforeach
    </div>
    <div>
        <div>
            @if(Auth::user()->hasfriendrequestspending($user) )
            <p>в ожидании {{$user->name}} подтверждения запроса в друзья</p>
            @elseif(Auth::user()->hasfriendrequestrecived($user))
            <a href="#" class="btn btn-primary">подтвердить дружбу</a>
            @endif
        </div>


        <h4>
            {{ auth()->user()->name }}
            друзья:
        </h4>
        @if(!auth()->user()->friends()->count())
            <p>нет друзей {{ auth()->user()->name }}</p>
        @else
            @foreach($user->friends() as $user)
            <p>{{ $user->name }}</p>
            @endforeach
        @endif
    </div>
</ul>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>