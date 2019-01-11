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
        <h4>Registrarse</h4>
        <br>
        <form method="POST" action="{{ route('register') }}" class="col s12">
        @csrf
            <div class="row">
                <div class="input-field col m4 s9 push-m4 push-s1">
                    <input type="text" name="email" id="mail" class="validate">
                    <label for="mail">Correo Electronico</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col m4 s9 push-m4 push-s1">
                    <input type="password" name="pass" id="pass" class="validate">
                    <label for="pass">Contraseña</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col m4 s9 push-m4 push-s1">
                    <input type="text" name="name" id="name" class="validate">
                    <label for="name">Nombre</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col m4 s9 push-m4 push-s1">
                    <input type="text" name="telefono" id="telefono" class="validate">
                    <label for="telefono">CEL/TEL</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col m4 s9 push-m4 push-s1">
                    <input type="text" name="direccion" id="direccion" class="validate">
                    <label for="direccion">Dirección</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col m4 s9 push-m4 push-s1">
                    <input type="text" name="cuil" id="cuil" class="validate">
                    <label for="cuil">CUIL</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col m4 s9 push-m4 push-s1">
                    <input type="text" name="cliente" id="cliente" class="validate">
                    <label for="cliente">N° de Cliente</label>
                </div>
            </div>
            <div class="row center">
                <div class="col s12 m4 push-m4">
                    <button class="btn waves-effect green" type="submit">Registrarse</button>
                </div>
            </div>
        </form>
    </div>

    <script src="{{asset('/js/app.js')}}"></script>
    <script>
		M.AutoInit();
	</script>
</body>
</html>
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->