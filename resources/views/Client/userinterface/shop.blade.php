@include('layout.head')

<body class="goto-here">

    @include('layout.navbar')

    <div class="hero-wrap hero-bread" style="background-image: url({{ asset('miamdiet/images/category-12.jpg') }});">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('accueil') }}">Accueil</a></span></p>
                    <h1 class="mb-0 bread">Produits</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 mb-5 text-center">
                    <ul class="product-category">
                        <li><a href="#" class="active mb-3">Tous</a></li>
                        @foreach ($categories as $categorie)
                            <li><a href="{{ route('produitparcategorie', $categorie->id) }}"
                                    class=" mb-">{{ $categorie->libelle }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="row">
                @foreach ($produits as $produit)
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="product">
                            <a href="{{ route('singleproduit', $produit->id) }}" class="img-prod"><img class="img-fluid"
                                    src="{{ asset('storage' . $produit->photo) }}" alt="Image du produit">
                                <div class="overlay"></div>
                            </a>
                            <div class="text py-3 pb-4 px-3 text-center">
                                <h3><a href="#"><strong>{{ $produit->nom }}</strong></a></h3>
                                <div class="d-flex">
                                    <div class="pricing">
                                        <p class="price"><span>{{ $produit->prix }} <small> fcfa</small></span></p>
                                    </div>
                                </div>
                                <div class="bottom-area d-flex px-3">
                                    <div class="m-auto d-flex">

                                        <a href="{{ route('singleproduit', $produit->id) }}"
                                            class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                            <span><i class="ion-ios-menu"></i></span>
                                        </a>

                                        <a href="#"
                                            class="heart d-flex justify-content-center align-items-center ">
                                            <span><i class="ion-ios-heart"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <form action="{{ route('cart.add') }}" method="post">
                                @csrf
                                <div class="row ">
                                    <input type="hidden" name="id" value="{{ $produit->id }}">
                                    <input type="hidden" name="nom" value="{{ $produit->nom }}">
                                    <input type="hidden" name="prix" value="{{ $produit->prix }}">
                                    <input type="hidden" name="quantity" value="1" min="1"
                                        class="form-label ml-4" id="qty">
                                </div>
                                <div>
                                    <input type="submit" class="btn btn-primary py-3 px-5 m-2"
                                        value="Ajouter au panier"></input>
                                </div>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        </div>
    </section>

    @include('layout.inscription')

    @include('layout.footer')




    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>


    @include('layout.script')

</body>

</html>
