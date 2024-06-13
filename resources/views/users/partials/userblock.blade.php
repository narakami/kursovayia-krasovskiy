<div class="d-flex">
    <div class="flex-shrink-0">
      <a href="{{ route('profile.index',['username' =>$user->name])}}">
        <img class="dimga" src="/avatars/{{$user->avatar }}" alt="{{$user->name}}">
      </a>
    </div>
    <div class="flex-grow-1 ms-3">
        <a href="{{ route('profile.index',['username' =>$user->name])}}">{{$user->name}}</a>
    </div>
    
</div>
            @if(Auth::user()->hasfriendrequestspending($user) )
                <p>в ожидании {{$user->name}} подтверждения запроса в друзья</p>
            @elseif(Auth::user()->hasfriendrequestrecived($user))
                <a href="{{ route('friend.accept',['username'=>$user->name]) }}"><button class="btn btn-primary mt-2">подтвердить дружбу</button></a>
            @elseif(Auth::user()->isfriendwith($user))
                {{$user->name}} у вас в друзьях
                <form action="{{ route('friend.delete',['username'=>$user->name]) }}" method="POST">
                    @csrf
                        <input type="submit" value="удалить из друзей" class="btn btn-primary my-2">
                </form>
            @elseif(Auth::user()->id !== $user->id )
                <a href="{{ route('friend.add',['username'=>$user->name]) }}">
                    <button class="btn btn-primary mt-2">добавить в друзья</button></a>
            @endif