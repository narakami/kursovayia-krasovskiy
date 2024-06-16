<?$user = Auth::user();?>
<header>
    <div class="container">
      <div class="row">
        <div class="col ">
            <a href="{{ url('osn') }}" class="link-primary text-center"><img src="../img/home-icon-silhouette.svg" alt="">Home</a>
        </div>
        <div class="col ">
            <a href="{{ url('friend') }}" class="link-primary"><img src="../img/Vector.svg" alt="">Friends</a>
        </div>
        <div class="col ">
            <a href="#" class="link-primary"><img src="../img/Group.svg" alt="">Notifications</a>
        </div>
        <div class="col ">
            <a href="{{ url('chat') }}" class="link-primary"><img src="../img/Group (1).svg" alt="">Messages</a>
        </div>
        <div class="col-3 text-center">
          @if(auth()->user()->admin == 1)
            <a href="{{ url('admin') }}"><img src="../img/logo.png" alt=""></a>
          @elseif(auth()->user()->admin == null)
            <img src="../img/logo.png" alt="">
          
          @endif
          
        </div>
        <div class="col-2">
            <form class="d-flex" role="search" method="Get" action="{{route('search.results')}}">
                <input name="query" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
        </div>
        <div class="col">
          Create Event
        </div>
        <div class="col">
            <div class="dropdown text-end">
                <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle " data-bs-toggle="dropdown" aria-expanded="false">
                    <img class="dimga" src="../avatars/{{ auth()->user()->avatar }}">
                </a>
                <ul class="dropdown-menu text-small">
                  <li><a class="dropdown-item" href="#"><?echo  $user->name;?></a></li>
                  <li><a class="dropdown-item" href="{{ url('profile') }}">Profile</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="{{ route('logout') }}">Sign out</a></li>
                </ul>
              </div>
        </div>
      </div>
  </div>
</header>