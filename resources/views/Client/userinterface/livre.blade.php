@include('layout.head')

<body class="goto-here">

    @include('layout.navbar')

    <div class="hero-wrap hero-bread" style="background-image: url({{ asset('miamdiet/images/category-16.jpg') }});">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('accueil') }}">Accueil</a></span></p>
                    <h1 class="mb-0 bread">Livre de cuisine de Miamdiet</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="ftco-section">
        <div class="container">
            @if ($livre->Count() > 0)
                <div class="row">
                    @foreach ($livre as $livre)
                        <div class="col-md-6 col-lg-3 ftco-animate">
                            <div class="product">
                                <a href="#" class="img-prod"><img class="img-fluid"
                                        src="{{ asset('storage' . $livre->image) }}" alt="Image du livre">
                                    <div class="overlay"></div>
                                </a>
                                <div class="text py-3 pb-4 px-3 text-center">
                                    <h3><a href="#"><strong>{{ $livre->titre }}</strong></a></h3>
                                    <div class="d-flex">
                                        <div class="pricing">
                                            <p class="price"><span>{{ $livre->prix }} <small> fcfa</small></span></p>
                                        </div>
                                    </div>
                                    <div class="bottom-area d-flex px-3">
                                        <div class="m-auto d-flex">
                                            <a href="#"
                                                class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                                <span><i class="ion-ios-menu"></i></span>
                                            </a>
                                            <a href=""
                                                wire:click.prevent="store({{ $livre->id }}, '{{ $livre->titre }}', '{{ $livre->prix }}')"
                                                class="buy-now d-flex justify-content-center align-items-center mx-1">
                                                <span><i class="ion-ios-cart"></i></span>
                                            </a>
                                            <a href="#"
                                                class="heart d-flex justify-content-center align-items-center ">
                                                <span><i class="ion-ios-heart"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <form action="{{route('cart.book')}}" method="post">
                                    @csrf
                                    <div class="row ">
                                        <input type="hidden" name="id" value="{{ $livre->id }}">
                                        <input type="hidden" name="quantity" value="1" min="1" class="form-label ml-4" id="qty">
                                    </div>
                                    <div >
                                        <input type="submit" class="btn btn-black py-3 px-5 m-2" value="Ajouter au panier"></input>
                                    </div>
                                </form>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h3><strong>Aucun livre disponible</strong></h3>
                            <h5 class="mt-3"> Voir d'autres rubriques </h5>
                            <a href="{{ route('service') }}" class="btn btn-black py-3 px-5 mt-3"> Service</a>
                            <a href="{{ route('shop') }}" class="btn btn-black py-3 px-5 mt-3"> Boutique</a>
                        </div>
                    </div>
            @endif
        </div>
    </section>

    @include('layout.inscription')

    @include('layout.footer')

    @include('layout.loader')

    @include('layout.script')

</body>

</html>
