<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>auth</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
    <div class="back"></div>
    <div class="container">
        <div class="register">
            <div class="card">
                <div class="card-head-r">
                    <img src="img/Group 30.png" alt="">
                </div>
                <div class="card-body">
                    <p class="Peapods">Peapods</p>
                    <div class="auth">
                        <p class="reg link-primary ath">авторизация</p>
                        <form action="{{ route('login')}}"method='post'>
                        @csrf
                            <input class="forma" type="email" name="email" id="email" placeholder="email">
                            <input class="forma" type="password" name="password" id="password" placeholder="password">
                            <button class="btn btn-primary btn-center mt-2"  type="submit">sign up</button>
                        </form>
                    </div>
                    <div class="dropdowna flex">
                        <div class="dropup-center dropup">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              регистрация
                            </button>
                            <ul class="dropdown-menu">
                              <form action="{{ route('register')}}" method="post">
                                @csrf
                              <li class="sub"><input class="dropdown-item" type="text" name="name" id="name" placeholder="name"></li>
                              <li><input class="dropdown-item" type="email" name="email" id="email" placeholder="email"></li>
                              <li><input class="dropdown-item" type="password" name="password" id="password" placeholder="password"></li>
                              <li><input class="dropdown-item" type="password" name="password_confirmation" id="password_confirmation" placeholder="password_confirmation"></li>
                              <li><button class="btn btn-primary btn-center " type="submit">sign up</button></li>
                              </form>
                            </ul>
                          </div>
                    </div>
                </div>
                <div>
                @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                </div>
            </div>
        </div>
    </div>
</body>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>