<!DOCTYPE html>
<html lang="en">
<head>
	<title>Connexion</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{ asset('Login_v3/images/icons/favicon.ico') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('Login_v3/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('Login_v3/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('Login_v3/fonts/iconic/css/material-design-iconic-font.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('Login_v3/vendor/animate/animate.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('Login_v3/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('Login_v3/vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('Login_v3/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('Login_v3/vendor/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('Login_v3/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('Login_v3/css/main.css') }}">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter divRegister">
		<div class="container-login100" style="background-image: url('images/background.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}

					<span class="login100-form-logo">
						<!--i class="zmdi zmdi-landscape"></i-->
						<img src="images/logo.png">
					</span>

					<span class="login100-form-title p-b-10 p-t-10">
						Enregistrement
					</span>

                    <div class="wrap-input100 validate-input {{ $errors->has('name') ? ' has-error' : '' }}" data-validate = "Entrer Votre Nom">
						<input id="name" type="name" class="input100" name="name" placeholder="Nom" value="{{ old('name') }}" required autofocus>
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
					</div>

					<div class="wrap-input100 validate-input {{ $errors->has('email') ? ' has-error' : '' }}" data-validate = "Entrer Votre Address E-Mail">
						<input id="email" type="email" class="input100" name="email" placeholder="E-Mail" value="{{ old('email') }}" required autofocus>
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
					</div>

					<div class="wrap-input100 validate-input {{ $errors->has('password') ? ' has-error' : '' }}" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
					</div>

					<div class="wrap-input100 validate-input" data-validate="Confirm Password">
						<input id="password-confirm" class="input100" type="password" name="password_confirmation" placeholder="Confirm Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Enregistrer
						</button>
					</div>

					<div class="text-center p-t-20">
						<!--a class="txt1" href="{{ route('password.request') }}">
							Mot de Pass Oublier?
						</a><br-->
						<a class="txt1" id="aLogin" href="{{ route('login') }}">
							J'ai déjà un Compte!!!
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="{{ asset('Login_v3/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('Login_v3/vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('Login_v3/vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset('Login_v3/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('Login_v3/vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('Login_v3/vendor/daterangepicker/moment.min.js') }}"></script>
	<script src="{{ asset('Login_v3/vendor/daterangepicker/daterangepicker.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('Login_v3/vendor/countdowntime/countdowntime.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('Login_v3/js/main.js') }}"></script>
	<script src="{{ asset('js/login.js') }}"></script>

</body>
</html>