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

</head>

<body class="app app-signup p-0">
    <div class="row g-0 app-auth-wrapper">
        <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
            <div class="d-flex flex-column align-content-end">
                <div class="app-auth-body mx-auto">
                    <div class="app-auth-branding mb-4"><a class="app-logo"><img class="logo-icon me-2"
                                src="{{ asset('miamdiet/images/logo.svg') }}" alt="logo"></a></div>
                    <h2 class="auth-heading text-center mb-4">Création de compte</h2>

                    <div class="auth-form-container text-start mx-auto">
                        <form class="auth-form auth-signup-form" method="PoST" action="{{ route('create') }}">
                            @csrf

                            <div class="email mb-3">
                                <label class="sr-only" for="signup-email"> Nom</label>
                                <input id="nom" type="text" class="form-control signup-name"
                                    placeholder=" Veuillez renseigner votre nom" name="nom">
                            </div>

                            <div class="email mb-3">
                                <label class="sr-only" for="signup-email"> Prenom</label>
                                <input id="prenom" type="text" class="form-control signup-name"
                                    placeholder=" Veuillez renseigner votre prenom" name="prenom">
                            </div>
                            <div class="email mb-3">
                                <label class="sr-only" for="signup-email"> Email</label>
                                <input id="email" type="email" class="form-control signup-email"
                                    placeholder="  Veuillez renseigner votre Email" name="email">
                            </div>
                            <div class="email mb-3">
                                <label class="sr-only" for="signup-email"> Numero de téléphone</label>
                                <input id="numero" type="test" class="form-control signup-email"
                                    placeholder="  Veuillez renseigner votre Numero de téléphone" name="numero">
                            </div>
                            <div class="password mb-3">
                                <label class="sr-only" for="signup-password">Mot de passe</label>
                                <input id="password" type="password" class="form-control signup-password"
                                    placeholder="Veuillez renseigner un mot de passe" name="password">
                            </div>
                            <div class="password mb-3">
                                <label class="sr-only" for="signup-password">confirmer le mot de passe</label>
                                <input id="confirmationpassword" type="password" class="form-control signup-password"
                                    placeholder="Veuillez confirmer votre mot de passe" name="confirmationpassword">
                            </div>
                            <div class="extra mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="RememberPassword">
                                    <label class="form-check-label" for="RememberPassword">
                                        I agree to Portal's <a href="#" class="app-link">Terms of Service</a> and
                                        <a href="#" class="app-link">Privacy Policy</a>.
                                    </label>
                                </div>
                            </div><!--//extra-->

                            <div class="text-center">
                                <button type="submit"
                                    class="btn app-btn-primary w-100 theme-btn mx-auto">Inscrire</button>
                            </div>
                        </form>

                        <div class="auth-option text-center pt-5">J'ai déjà un compte <a class="text-link"
                                href="{{ route('login') }}"> s'identifier </a></div>
                    </div>
                </div>


            </div>
        </div>
        <div class="col-12 col-md-5 col-lg-6 h-100 auth-background-col">
            <div class="auth-background-holder">
            </div>
            <div class="auth-background-mask"></div>
            <div class="auth-background-overlay p-3 p-lg-5">
                <div class="d-flex flex-column align-content-end h-100">
                    <div class="h-100"></div>

                </div>
            </div>
        </div>
    </div>


</body>

</html>
