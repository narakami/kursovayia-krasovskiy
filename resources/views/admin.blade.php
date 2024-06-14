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
    
    <div class="row ms-5">
        <h1>All Users</h1>
        <ul>
            <div class="flex flex-wrap">
                @foreach($users as $user)
                <div class="blockst1 ms-3 ">
                    <div class="row justify-content-center">
                        <div class="col-md-12 ">
                            <div class="card">
                                <div class="card-header">{{ __('Profile') }} : {{ $user->name }}</div>
                    
                                <div class="card-body">
                                    <form method="POST" action="{{ route('admin.profile.update',['userId' =>$user->id]) }}" enctype="multipart/form-data">
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
                                                <img src="/avatars/{{ $user->avatar }}" style="width:80px;margin-top: 10px;">
                                            </div>
                  
                                        </div>
                  
                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label for="name" class="form-label">Name: </label>
                                                <input class="form-control" type="text" id="name" name="name" value="{{ $user->name }}" autofocus="" >
                                                @error('name')
                                                    <span role="alert" class="text-danger">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                   
                                            <div class="mb-3 col-md-6">
                                                <label for="email" class="form-label">Email: </label>
                                                <input class="form-control" type="text" id="email" name="email" value="{{ $user->email }}" autofocus="" >
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
                                                <input class="form-control" type="text" id="bio" name="bio" value="{{ $user->bio }}" autofocus="" >
                                                @error('bio')
                                                    <span role="alert" class="text-danger">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                   
                                            <div class="mb-3 col-md-6">
                                                <label for="age" class="form-label">Age: </label>
                                                <input class="form-control" type="text" id="age" name="age" value="{{ $user->age }}" autofocus="" >
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
                                                <input class="form-control" type="text" id="gender" name="gender" value="{{ $user->gender }}" autofocus="" >
                                                @error('gender')
                                                    <span role="alert" class="text-danger">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="phone" class="form-label">Phone: </label>
                                                <input class="form-control" type="text" id="phone" name="phone" value="{{ $user->phone }}" autofocus="" >
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
                                                <input class="form-control" type="text" id="city" name="city" value="{{ $user->city }}" autofocus="" >
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
                    <form action="{{ route('admin.profile.banned', ['userId' => $user->id]) }}" method="POST">
                        @csrf
                        <button type="submit">Забанить пользователя</button>
                    </form>
                    <form action="{{ route('admin.profile.unbanned', ['userId' => $user->id]) }}" method="POST">
                        @csrf
                        <button type="submit">Разбанить пользователя</button>
                    </form>
                    
                </div>
            @endforeach
            </div>
        </ul>
    </div>



</body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>