@include('layout.head')

<body class="goto-here">

    @include('layout.navbar')

    <div class="hero-wrap hero-bread" style="background-image: url({{ asset('miamdiet/images/category-17.jpg') }});">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('accueil') }}">Accueil</a></span></p>
                    <h1 class="mb-0 bread">Tableau de bord</h1>
                    <h3 class="mb-0 text-white ">Bienvenue {{ $user->prenom }} {{ $user->nom }}</h3>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="row mt-5 pt-3">
                        <div class="col-md-12 d-flex mb-5">
                            <div class="cart-detail cart-total p-3 p-md-4">
                                <h3 class="billing-heading mb-4">Mes informations</h3>
                                <p class="d-flex">
                                    <span><strong>Nom</strong></span>
                                    <span>{{ $user->nom }}</span>
                                </p>
                                <p class="d-flex">
                                    <span><strong>Prénom</strong></span>
                                    <span>{{ $user->prenom }}</span>
                                </p>
                                <p class="d-flex">
                                    <span><strong>Email</strong></span>
                                    <span>{{ $user->email }}</span>
                                </p>
                                <p class="d-flex">
                                    <span><strong>Numéro</strong></span>
                                    <span>{{ $user->numero }}</span>
                                </p>

                            </div>
                        </div>
                    </div>
                </div> <!-- .col-md-8 -->
                <div class="container my-5">
                    <h2 class="text-center mb-4">Informations de Facturation</h2>
                    <table class="table table-bordered table-striped">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Champ</th>
                                <th scope="col">Détails</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Prénom</td>
                                <td>Votre prénom ici</td>
                            </tr>
                            <tr>
                                <td>Nom de Famille</td>
                                <td>Votre nom ici</td>
                            </tr>
                            <tr>
                                <td>État / Pays</td>
                                <td>Votre pays ici</td>
                            </tr>
                            <tr>
                                <td>Adresse</td>
                                <td>Numéro et nom de la rue ici</td>
                            </tr>
                            <tr>
                                <td>Ville</td>
                                <td>Votre ville ici</td>
                            </tr>
                            <tr>
                                <td>Code Postal</td>
                                <td>Votre code postal ici</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section> <!-- .section -->



    @include('layout.inscription')

    @include('layout.footer')

    @include('layout.loader')

    @include('layout.script')

</body>

</html>
