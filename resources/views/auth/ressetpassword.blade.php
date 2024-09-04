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

<body class="app app-reset-password p-0">
    <div class="row g-0 app-auth-wrapper">
        <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
            <div class="d-flex flex-column align-content-end">
                <div class="app-auth-body mx-auto">
                    <div class="app-auth-branding mb-4"><a class="app-logo"><img class="logo-icon me-2"
                                src="{{ asset('miamdiet/images/logo.svg') }}" alt="logo"></a></div>
                    <h2 class="auth-heading text-center mb-4">Reuinitialiser le mot de passe</h2>

                    <div class="auth-intro mb-4 text-center">Saisissez votre adresse e-mail ci-dessous. Nous vous
                        enverrons par courriel un lien vers une page où vous pourrez facilement créer un nouveau mot de
                        passe.</div>

                    <div class="auth-form-container text-left">

                        <form class="auth-form resetpass-form" action="{{route('update')}}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="email mb-3">
                                <label class="sr-only" for="reg-email">votre Email</label>
                                <input id="reg-email" type="email" class="form-control login-email"
                                    placeholder="votre adresse Email" name="email">
                            </div><!--//form-group-->

                            <div class="email mb-3">
                                <label class="sr-only" for="reg-email">Nouveau mot de passe</label>
                                <input id="reg-email" type="text" class="form-control login-email"
                                    placeholder="Nouveau mot de passe" name="password">
                            </div><!--//form-group-->

                            <div class="email mb-3">
                                <label class="sr-only" for="reg-email"> confirmer le mot de passe</label>
                                <input id="reg-email" type="text" class="form-control login-email"
                                    placeholder="Confirmer le mot de passe" name="confirmationpassword">
                            </div><!--//form-group-->
                            <div class="text-center">
                                <button type="submit"
                                    class="btn app-btn-primary btn-block theme-btn mx-auto">Reunitialiser</button>
                            </div>
                        </form>

                        <div class="auth-option text-center pt-5"><a class="app-link"
                                href="{{ route('register') }}">M'inscrire</a> <span class="px-2">-</span> <a
                                class="app-link" href="{{ route('login') }}">S'identifier</a></div>
                    </div><!--//auth-form-container-->


                </div><!--//auth-body-->

                <footer class="app-auth-footer">
                    <div class="container text-center py-3">
                        <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->

                    </div>
                </footer><!--//app-auth-footer-->
            </div><!--//flex-column-->
        </div><!--//auth-main-col-->
        <div class="col-12 col-md-5 col-lg-6 h-100 auth-background-col">
            <div class="auth-background-holder">
            </div>
            <div class="auth-background-mask"></div>
            <div class="auth-background-overlay p-3 p-lg-5">
                <div class="d-flex flex-column align-content-end h-100">
                    <div class="h-100"></div>
                    {{-- <div class="overlay-content p-3 p-lg-4 rounded">
					    <h5 class="mb-3 overlay-title">Explore Portal Admin Template</h5>
					    <div>Portal is a free Bootstrap 5 admin dashboard template. You can download and view the template license <a href="https://themes.3rdwavemedia.com/bootstrap-templates/admin-dashboard/portal-free-bootstrap-admin-dashboard-template-for-developers/">here</a>.</div>
				    </div> --}}
                </div>
            </div><!--//auth-background-overlay-->
        </div><!--//auth-background-col-->

    </div><!--//row-->


</body>

</html>
