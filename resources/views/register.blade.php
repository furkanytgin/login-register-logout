<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"/>

</head>

<body>
    <div class="container">
        <form action={{ route('register.created') }} method="post">
            @csrf 

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                <div class="alert alert-danger">
                    {{ $error }}
                </div>
                    
                @endforeach
            @endif
            <p class="h4 fw-bold text-center pt-4 mb-5">
                Kayıt Sayfası
            </p>
            <div class="row">
                <div class="col-md-12 mb-4 ">
                    <input class="form-control" type="text" placeholder="Name" name="name" value="{{ old('name') }}">
                </div>
                
            </div>
            <div class="row">
                <div class="col-12 mb-4">
                    <input type="email" placeholder="Email address" class="form-control" name="email" value = "{{ old('email') }}">
                </div>
            </div>
            <div class="row">
                <div class="col-12 mb-4">
                    <input type="password" placeholder="Password" class="form-control" name="password">
                </div>
            </div>
           
            <div class="row">
                <div class="col-12 mb-4">
                    <button type="submit" class="btn btn-dark btn-block">Kayıt ol</button>

                </div>
            </div>

    </div>
    </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>