<!-- resources/views/auth/login.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Montserrat:ital@0;1&family=Reddit+Sans:ital,wght@0,200..900;1,200..900&family=Source+Sans+3&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Styles -->
    <style>
        body {
            background-color: #0D102D;
            color: white;
            font-family: 'DM Sans', sans-serif;
        }
    </style>
    
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div style="color: white;">

                    <p class="mt-5 text-center" style="font-size: 2rem;">INICIAR SESION</p>

                    <div class="">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif

                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-4 mt-4">
                                <input type="email" class="inputc" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                                @if ($errors->has('email'))
                                    <div class="text-danger">{{ $errors->first('email') }}</div>
                                @endif
                            </div>

                            <div class="mb-5">
                                <input type="password" class="inputc" id="password" name="password" required autocomplete="current-password" placeholder="Password">
                            </div>

                            <div class="mb-3 text-center">
                                <button type="submit" class="custombtn">INICIAR SESION</button>
                            </div>

                            <div class="mb-3 text-center">
                                <p>O</p>
                            </div>

                            <div class="mb-4 text-center">
                                <button type="submit" class="custombtn" style="background-color: #31344C;">INGRESAR COMO INVITADO</button>
                            </div>

                            <div  class="mb-4 text-center">
                                <a href="{{ route('register') }}" style="color: white; text-decoration: none;">
                                    ¿No tiene una cuenta?
                                </a>
                            </div>

                            <div class="footer">
                                <p>&copy; 2024 Banca app.</p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>