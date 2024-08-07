<!-- resources/views/auth/register.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

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
                    <p class="mt-5 text-center" style="font-size: 2rem;">REGISTARSE</p>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="mb-4 mt-4">
                                <input type="text" class="inputc" id="name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nombre">
                            </div>

                            <div class="mb-4">
                                <input type="email" class="inputc" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                                @if ($errors->has('email'))
                                    <div class="text-danger">{{ $errors->first('email') }}</div>
                                @endif
                            </div>

                            <div class="mb-4">
                                <input type="password" class="inputc" id="password" name="password" required autocomplete="new-password" placeholder="Password">
                                @if ($errors->has('password'))
                                    <div class="text-danger">{{ $errors->first('password') }}</div>
                                @endif
                            </div>

                            <div class="mb-5">
                            <input type="password" class="inputc" id="password_confirmation" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmar password">
                            @if ($errors->has('password_confirmation'))
                                    <div class="text-danger">{{ $errors->first('password_confirmation') }}</div>
                                @endif
                            </div>

                            <div class="mb-4 text-center">
                                <button type="submit" class="custombtn">REGISTRARSE</button>
                            </div>

                            <div  class="mb-4 text-center">
                                <a href="{{ route('login') }}" style="color: white; text-decoration: none;">
                                    ¿Ya tienes una cuenta?
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