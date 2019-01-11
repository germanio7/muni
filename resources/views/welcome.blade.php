<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Villa Ángela || Atención al Vecino</title>
  <link rel="stylesheet" href="{{asset('/css/app.css')}}">
</head>
<body>

        <div class="row center">
            <img src="{{'/img/logovertical.png'}}" alt="Ayuda al Vecino" class="responsive-img villa-logo">
        </div>

        <form method="POST" action="{{ route('login') }}">
        @csrf
            <div class="row">
                <div class="input-field col s9 m4 push-s1 push-m4">
                    <input class="validate" id="mail" type="email" name="email" value="{{ old('email') }}" require>
                    <label for="mail">Correo Electronico</label>
                </div>
            </div>

            <div class="row">
                <div class="input-field col s9 m4 push-s1 push-m4">
                    <input class="validate" id="pass" type="password" name="password" required>
                    <label for="pass">Contraseña</label>
                </div>
            </div>

            <div class="row center">
                <div class="col s12 m4 push-m4">
                    <button class="btn waves-effect green" type="submit">Iniciar Sesión</button>
                    <a class="btn waves-effect blue" href="{{ route('register') }}">Registrarse</a>
                </div>
            </div>
        </form>
    
    <script src="{{asset('/js/app.js')}}"></script>
    <script>
		M.AutoInit();
	</script>
</body>
</html>


<!-- 
@if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif -->
