<div class="conteiner">
    <div class="profile1 flex plow">
        <div class="card profile-banner">
            <div class="card-head">
                <img src="../img/Rectangle.png">
            </div>
            <div class="card-body">
                <div class="profile-edit-panel flex justify-content-between plow align-items-center">
                    <div class="profile3">
                        <img src="/avatars/{{ $user->avatar }}">
                    </div>
                    <div class="row row-cols-3 card-info">
                        <div class="col card-info1"><p class="card-info2">цифра</p><p class="card-info3">обозначение</p></div>
                        <div class="col card-info1"><p class="card-info2">цифра</p><p class="card-info3">обозначение</p></div>
                        <div class="col card-info1"><p class="card-info2">цифра</p><p class="card-info3">обозначение</p></div>
                    </div>

                </div>
                <div id="anotherDiv" class="marg">
                    <div class="blockst1">
                        <div class="card-name">
                            <p class="name">{{ $user->name }}</p>
                            <p class="id-name "><span>@</span>{{ $user->name }}</p>
                        </div>
                        <div class="card-bio">
                            <p><b class="text-primary">Bio</b>:Lorem ipsum dolor sit amet.</p>
                            <p><b text-primary>Phone</b>:{{ $user->phone }}</p>
                            <p><b text-primary>Mail</b>:{{ $user->email }}</p>
                            <p><img src="img/Group (4).svg" alt="">{{ $user->city }}</p>
                        </div>
                        <div class="card-abaou">
                            <p><b>About</b></p>
                            <p><b class="text-primary">Age</b>: 24</p>
                            <p><b class="text-primary">Gender</b>: Male</p>
                        </div>
                    </div>
                </div>
                @if(Auth::user()->hasfriendrequestspending($user) )
                <p>в ожидании подтверждения запроса в друзья</p>
            @elseif(Auth::user()->hasfriendrequestrecived($user))
                <a href="{{ route('friend.accept',['username'=>$user->name]) }}"><button class="btn btn-primary mt-2">подтвердить дружбу</button></a>
            @elseif(Auth::user()->isfriendwith($user))
                 В друзьях
                <form action="{{ route('friend.delete',['username'=>$user->name]) }}" method="POST">
                    @csrf
                        <input type="submit" value="удалить из друзей" class="btn btn-primary my-2">
                </form>
            @elseif(Auth::user()->id !== $user->id )
                <a href="{{ route('friend.add',['username'=>$user->name]) }}">
                    <button class="btn btn-primary mt-2">добавить в друзья</button></a>
            @endif

            </div>
        </div>
    </div>
</div>