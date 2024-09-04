<!DOCTYPE html>
<html lang="en">

<head>
    <title>Miamdiet</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- FontAwesome JS-->
    <script defer src="assets/plugins/fontawesome/js/all.min.js"></script>

    <!-- App CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/portal.css">
    <link rel="stylesheet" href="assets/css/swette.css">

</head>

<body class="app app-login p-0">
    <div class="row g-0 app-auth-wrapper">
        <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
            <div class="d-flex flex-column align-content-end">
                <div class="app-auth-body mx-auto">
                    <div class="app-auth-branding mb-4"><a class="app-logo"><img class="logo-icon me-2"
                                src="{{ asset('miamdiet/images/logo.svg') }}" alt="logo"></a></div>
                    <h2 class="auth-heading text-center mb-5">Espace de connexion</h2>
                    <div class="auth-form-container text-start">

                        @if (Session::has('error_msg'))
                            <div class="alert alert-danger" role="alert">
                                {{ Session::get('error_msg') }}
                            </div>
                        @endif

                        <form class="row g-3 needs-validation" action="{{ route('traitementlogin') }}" method="POST">
                            @csrf
                            @method('POST')

                            <div class="email mb-3">
                                <label class="sr-only" for="signin-email">Email</label>
                                <input id="signin-email" type="email" class="form-control signin-email"
                                    placeholder="Adresse email " name="email">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="password mb-3">
                                <label class="sr-only" for="signin-password">Mot de passe</label>
                                <input id="signin-password" type="password" class="form-control signin-password"
                                    placeholder="Mot de passe" name="password">
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror

                                <div class="extra mt-3 row justify-content-between">
                                    <div class="col-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="RememberPassword">
                                            <label class="form-check-label" for="RememberPassword">
                                                Remember me
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="forgot-password text-end">
                                            <a href="{{ route('resset') }}">Mot de passe oublier ?</a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto"> Connexion
                                </button>
                            </div>

                        </form>

                        <div class="auth-option text-center pt-5"> Pas de compte ? <a class="text-link"
                                href="{{ route('register') }}">Créer Ici</a></div>
                    </div>

                </div>

                <footer class="app-auth-footer">
                    <div class="container text-center py-3">

                    </div>
                </footer>

            </div>
        </div>
        <div class="col-12 col-md-5 col-lg-6 h-100 auth-background-col">
            <div class="auth-background-holder">
                <div class="auth-background-mask bg-premium-dark"></div>
        </div>

    </div>

    @include('layout.script')
</body>

</html>
