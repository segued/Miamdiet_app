    @include('layout.head')

    @include('layout.navbar')

    <div class="hero-wrap hero-bread" style="background-image: url({{ asset('miamdiet/images/category-11.jpg') }});">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('shop') }}">Boutique</a></span> <span
                            class="mr-2"><a href="index.html">Accueil</a></span></span>
                    </p>
                    <h1 class="mb-0 bread">Details du produit</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section">
        <div class="container">

            <div class="row">
                <div class="col-lg-6 mb-5 ftco-animate">
                    <a href="#" class="img-prod"><img class="img-fluid" src="{{ asset($produit->image) }}" alt="Colorlib Template"></a>
                </div>
                <div class="col-lg-6 product-details pl-md-5 ftco-animate">
                    <h1><strong>{{ $produit->nom }}</strong></h1>
                    <div class="rating d-flex">
                        <p class="text-left mr-4">
                            <a href="#" class="mr-2">5.0</a>
                            <a href="#"><span class="ion-ios-star-outline"></span></a>
                            <a href="#"><span class="ion-ios-star-outline"></span></a>
                            <a href="#"><span class="ion-ios-star-outline"></span></a>
                            <a href="#"><span class="ion-ios-star-outline"></span></a>
                            <a href="#"><span class="ion-ios-star-outline"></span></a>
                        </p>
                        <p class="text-left mr-4">
                            <a href="#" class="mr-2" style="color: #000;">100 <span
                                    style="color: #bbb;">Rating</span></a>
                        </p>
                        <p class="text-left">
                            <a href="#" class="mr-2" style="color: #000;">500 <span
                                    style="color: #bbb;">Sold</span></a>
                        </p>
                    </div>

                    <p class="price"><span>{{ $produit->prix }} <small>fcfa</small></span></p>
                    <p>{{ $produit->description }}</p>
                    @if (Cart::instance('cart')->content()->where('id', $produit->id)->count()>0)
                        <a href="{{route('cart.index')}}" class="btn btn-warning mb-3 ">Voir le Panier</a>
                    @else
                    <form action="{{route('cart.add')}}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ $produit->id }}">
                        <input type="hidden" name="nom" value="{{ $produit->nom }}">
                        <input type="hidden" name="prix" value="{{ $produit->prix }}">
                        <div class="qty-control position-relative ">
                            <input type="number" name="quantity" value="1" min="1" class="qty-control_number text-center" id="qty">
                        </div>
                        <div >
                            <input type="submit" class="btn btn-primary py-3 px-5 m-2" value="Ajouter au panier"></input>
                        </div>
                    </form>
                    @endif
                </div>
            </div>
        </div>
    </section>

     <div id="ftco-loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg>
    </div>

    @include('layout.inscription')

    @include('layout.footer')

    @include('layout.script')

    </body>

    </html>
