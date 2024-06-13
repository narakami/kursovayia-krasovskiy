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

    <div class="conteiner">
        <div class="profile1 flex plow">
            <div class="card profile-banner">
                <div class="card-head">
                    <img src="img/Rectangle.png">
                </div>
                <div class="card-body">
                    <div class="profile-edit-panel flex justify-content-between plow align-items-center">
                        <div class="profile3">
                            <img src="/avatars/{{ auth()->user()->avatar }}">
                        </div>
                        <div class="row row-cols-3 card-info">
                            <div class="col card-info1"><p class="card-info2">цифра</p><p class="card-info3">обозначение</p></div>
                            <div class="col card-info1"><p class="card-info2">цифра</p><p class="card-info3">обозначение</p></div>
                            <div class="col card-info1"><p class="card-info2">цифра</p><p class="card-info3">обозначение</p></div>
                        </div>
                        <div class=""><button class="edit-btn " id="myButton"><img src="img/Vector (1).svg" alt=""> edit</button></div>

                    </div>
                    <div id="anotherDiv" class="marg">
                        <div class="blockst1">
                            <div class="card-name">
                                <p class="name">{{ auth()->user()->name }}</p>
                                <p class="id-name "><span>@</span>{{ auth()->user()->name }}</p>
                            </div>
                            <div class="card-bio">
                                <p><b class="text-primary">Bio</b>:{{ auth()->user()->bio }}</p>
                                <p><b text-primary>Phone</b>:{{ auth()->user()->phone }}</p>
                                <p><b text-primary>Mail</b>:{{ auth()->user()->email }}</p>
                                <p><img src="img/Group (4).svg" alt="">{{ auth()->user()->city }}</p>
                            </div>
                            <div class="card-abaou">
                                <p><b>About</b></p>
                                <p><b class="text-primary">Age</b>: {{ auth()->user()->age }}</p>
                                <p><b class="text-primary">Gender</b>: {{ auth()->user()->gender }}</p>
                            </div>
                        </div>
                        <div class="blockst2">
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">{{ __('Profile') }}</div>
                            
                                        <div class="card-body">
                                            <form method="POST" action="{{ route('user.profile.store') }}" enctype="multipart/form-data">
                                                @csrf
                            
                                                @if (session('success'))
                                                    <div class="alert alert-success" role="alert" class="text-danger">
                                                        {{ session('success') }}
                                                    </div>
                                                @endif
                          
                                                <div class="row">
                                                    <div class="mb-3 col-md-6">
                                                        <label for="name" class="form-label">Avatar: </label>
                                                        <input id="avatar" type="file" class="form-control @error('avatar') is-invalid @enderror" name="avatar" value="{{ old('avatar') }}"  autocomplete="avatar">
                          
                                                        @error('avatar')
                                                            <span role="alert" class="text-danger">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                          
                                                    <div class="mb-3 col-md-6">
                                                        <img src="/avatars/{{ auth()->user()->avatar }}" style="width:80px;margin-top: 10px;">
                                                    </div>
                          
                                                </div>
                          
                                                <div class="row">
                                                    <div class="mb-3 col-md-6">
                                                        <label for="name" class="form-label">Name: </label>
                                                        <input class="form-control" type="text" id="name" name="name" value="{{ auth()->user()->name }}" autofocus="" >
                                                        @error('name')
                                                            <span role="alert" class="text-danger">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                           
                                                    <div class="mb-3 col-md-6">
                                                        <label for="email" class="form-label">Email: </label>
                                                        <input class="form-control" type="text" id="email" name="email" value="{{ auth()->user()->email }}" autofocus="" >
                                                        @error('email')
                                                            <span role="alert" class="text-danger">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                           
                                                <div class="row">
                                                    <div class="mb-3 col-md-6">
                                                        <label for="password" class="form-label">Password: </label>
                                                        <input class="form-control" type="password" id="password" name="password" autofocus="" >
                                                        @error('password')
                                                            <span role="alert" class="text-danger">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                           
                                                    <div class="mb-3 col-md-6">
                                                        <label for="confirm_password" class="form-label">Confirm Password: </label>
                                                        <input class="form-control" type="password" id="confirm_password" name="confirm_password" autofocus="" >
                                                        @error('confirm_password')
                                                            <span role="alert" class="text-danger">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                           
                                                <div class="row">
                                                    <div class="mb-3 col-md-6">
                                                        <label for="bio" class="form-label">Bio: </label>
                                                        <input class="form-control" type="text" id="bio" name="bio" value="{{ auth()->user()->bio }}" autofocus="" >
                                                        @error('bio')
                                                            <span role="alert" class="text-danger">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                           
                                                    <div class="mb-3 col-md-6">
                                                        <label for="age" class="form-label">Age: </label>
                                                        <input class="form-control" type="text" id="age" name="age" value="{{ auth()->user()->age }}" autofocus="" >
                                                        @error('age')
                                                            <span role="alert" class="text-danger">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="mb-3 col-md-6">
                                                        <label for="gender" class="form-label">Gender: </label>
                                                        <input class="form-control" type="text" id="gender" name="gender" value="{{ auth()->user()->gender }}" autofocus="" >
                                                        @error('gender')
                                                            <span role="alert" class="text-danger">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <label for="phone" class="form-label">Phone: </label>
                                                        <input class="form-control" type="text" id="phone" name="phone" value="{{ auth()->user()->phone }}" autofocus="" >
                                                        @error('phone')
                                                            <span role="alert" class="text-danger">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                           
                                                </div>
                                                <div class="row">
                                                    <div class="mb-3 col-md-6">
                                                        <label for="city" class="form-label">City: </label>
                                                        <input class="form-control" type="text" id="city" name="city" value="{{ auth()->user()->city }}" autofocus="" >
                                                        @error('city')
                                                            <span role="alert" class="text-danger">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                            
                                                <div class="row mb-0">
                                                    <div class="col-md-12 offset-md-5">
                                                        <button type="submit" class="btn btn-primary">
                                                            {{ __('Upload Profile') }}
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
      <script>
        const myButton = document.querySelector('#myButton');
// Находим другой div элемент
        const anotherDiv = document.querySelector('#anotherDiv');
        myButton.addEventListener('click', function() {
    if (anotherDiv.classList.contains('newClass')) {
        anotherDiv.classList.remove('newClass');
    } else {
        anotherDiv.classList.add('newClass');
    }
});
    </script>
</html>