<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"/>

</head>

<body>
    <div class="container">
        
        
        <form action="{{ route("login.created") }}" method="post">
            @csrf
            <p class="h4 fw-bold text-center pt-4 mb-5">
                Bize Katıl
            </p>

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                <div class="alert alert-danger">
                    {{ $error }}
                    {{ $success }}
                </div>
                    
                @endforeach
            @endif
            
           
            <div class="row">
                <div class="col-12 mb-4">
                    <input type="email" placeholder="Email address" class="form-control" name="email" value="{{ old('email') }}">
                </div>
            </div>
            <div class="row">
                <div class="col-12 mb-4">
                    <input type="password" placeholder="Password" class="form-control" name="password">
                </div>
            </div>
            
            <div class="row">
                <div class="col-12 mb-4">
                    <a href="{{ route('register') }}">
                        <div class="btn btn-dark btn-block"> HESABIM YOK </div>
                    </a>

                </div>
            
                <div class="col-12 mb-4">
                    <button type="submit" class="btn btn-dark btn-block">Giriş</button>
                </div>

                <a href="{{ route('home') }}">
                    <div class="btn btn-dark btn-block">AnaSayfa </div>
                </a>

                
            
            </div>

    </div>
    </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>