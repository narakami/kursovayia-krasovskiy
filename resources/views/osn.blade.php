<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">
    <title>Document</title>
</head>
<body>
    <header>
        @isset($users)
        @foreach($users as $user)
            <p>{{ $user->name }}</p>
        @endforeach
    @endisset
        <div class="container">
          <div class="row">
            <div class="col ">
                <a href="#" class="link-primary text-center"><img src="img/home-icon-silhouette.svg" alt="">   Home</a>
            </div>
            <div class="col ">
                <a href="#" class="link-primary"><img src="img/Vector.svg" alt=""> Discover</a>
            </div>
            <div class="col ">
                <a href="#" class="link-primary"><img src="img/Group.svg" alt="">Notifications</a>
            </div>
            <div class="col ">
                <a href="#" class="link-primary"><img src="img/Group (1).svg" alt="">Messages</a>
            </div>
            <div class="col-3 text-center">
              <img src="img/logo.png" alt="">
            </div>
            <div class="col-2">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                  </form>
            </div>
            <div class="col">
              Create Event
            </div>
            <div class="col">
                <div class="dropdown text-end">
                    <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                      <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                    </a>
                    <ul class="dropdown-menu text-small">
                      <li><a class="dropdown-item" href="#">Settings</a></li>
                      <li><a class="dropdown-item" href="#">Profile</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="{{ route('logout') }}">Sign out</a></li>
                    </ul>
                  </div>
            </div>
          </div>
      </div>
    </header>
    
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card profile-banner">
                    <div class="card-head">
                        <a href="profile.html"><img src="img/Rectangle.png"></a>
                    </div>
                    <div class="card-body">
                        <div class="profile-2">
                            <a href="profile.html">
                                <img src="img/Ellipse.png" alt=""></a>
                        </div>
                        <div class="profile-edit-panel">
                            <button class="edit-btn "><img src="img/Vector (1).svg" alt=""> Settings</button>
                            <img src="img/more.svg" alt="">
                        </div>
                        <div class="card-name">
                            <p class="name">Назар</p>
                            <p class="id-name">nazar</p>
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
                        <div class="people-n align-items-center">
                            <div class="people-img"><img src="img/Group 6.6.png" alt=""></div>
                        <div class="people2">
                            <div class="follow-people">
                                <div class="people-id"><p class="name">Назар</p><p class="id-name">nazar</p></div>
                            </div>
                            <button type="button" class="btn btn-success ">Follow</button>
                        </div>
                        </div>
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
    
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>