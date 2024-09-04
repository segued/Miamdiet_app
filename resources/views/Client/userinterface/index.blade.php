@include('layout.head')

<body class="goto-here">
    @if ($mesg = Session::get('success'))
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-right',
                iconColor: 'white',
                customClass: {
                    popup: 'colored-toast',
                },
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
            })
            Toast.fire({
                icon: 'success',
                title: '{{ $mesg }}',
            })
        </script>
    @endif

    @include('layout.navbar')

    {{-- <section id="home-section" class="hero">
        <div class="home-slider owl-carousel">
        <div class="slider-item" style="background-image: url({{ asset('miamdiet/images/bg.jpg') }});">
            <div class="overlay"></div>
          <div class="container">
            <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

              <div class="col-md-12 ftco-animate text-center">
                <h1 class="mb-2">We serve Fresh Vegestables &amp; Fruits</h1>
                <h2 class="subheading mb-4">We deliver organic vegetables &amp; fruits</h2>
                <p><a href="#" class="btn btn-primary">View Details</a></p>
              </div>

            </div>
          </div>
        </div>

        <div class="slider-item" style="background-image: url({{ asset('miamdiet/images/bg_1.jpg') }});">
            <div class="overlay"></div>
          <div class="container">
            <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

              <div class="col-sm-12 ftco-animate text-center">
                <h1 class="mb-2">100% Fresh &amp; Organic Foods</h1>
                <h2 class="subheading mb-4">We deliver organic vegetables &amp; fruits</h2>
                <p><a href="#" class="btn btn-primary">View Details</a></p>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section> --}}

    <div class="container-fluid p-0 position-relative">
        <img src="{{ asset('miamdiet/images/bg.jpg') }}" class="img-fluid mx-auto d-block" alt="Description de l'image" style="max-width: 100%;">
    </div>
{{--
    <section id="home-section" class="hero">
        <div class="home-slider owl-carousel">
            <div class="slider-item" style="background-image: url({{ asset('miamdiet/images/bg.jpg') }});">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
                    </div>
                </div>
            </div>

            <div class="slider-item" style="background-image: url({{ asset('miamdiet/images/bg_1.jpg') }});">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
                        <div class="col-md-12 ftco-animate text-center">
                            <h1 class="mb-2">Obtenez des conseils sur votre alimentation</h1>
                            <h2 class="subheading mb-4">Planifiez votre consultation nutritionnelle dès aujourd'hui</h2>
                            <p><a href="#" class="btn btn-primary">Voir les Détails</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slider-item" style="background-image: url({{ asset('miamdiet/images/bg_2.jpg') }});">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
                        <div class="col-md-12 ftco-animate text-center">
                            <h1 class="mb-2">Profitez d'une alimentation riche et savoureuse</h1>
                            <h2 class="subheading mb-4">tout en restant en forme avec nos packs de restauration
                                personnalisés</h2>
                            <p><a href="#" class="btn btn-primary">Voir les Détails</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}




    <section class="ftco-section img mt-3" style="background-image: url({{ asset('miamdiet/images/bg_3.jpg') }})">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-md-6 heading-section ftco-animate deal-of-the-day ftco-animate">
                    <span class="subheading">Trouver votre equilibre alimentaire</span>
                    <h2 class="mb-4">Avec <strong>Miamdiet</strong></h2>
                    <p>Une bonne alimentation est la clé d'une santé durable et d'un bien-être optimal</p>
                    <h3><a href="#">Prenez soins de vous</a></h3>
                    <span class="price"> Choisissez la santé, chaque bouchée compte ! <br> <a
                            href="{{ route('shop') }}"> Voir notre boutique</a></span>
                    <div id="timer" class="d-flex mt-5">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pb ftco-no-pt mt-3">
        <div class="container">
            <div class="row">
                <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center"
                    style="border-radius: 50%; overflow: hidden;">
                    <div style="width: 400px; height: 400px; overflow: hidden; border-radius: 50%;">
                        <img src="{{ asset('miamdiet/images/daniel.jpg') }}" alt="Daniel"
                            style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <a href="https://youtu.be/22wETA57O4M?si=uss0izqRJFFN2DS9"
                        class="icon popup-vimeo d-flex justify-content-center align-items-center"
                        style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                        <span class="icon-play"></span>
                    </a>
                </div>
                <div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
                    <div class="heading-section-bold mb-4 mt-md-5">
                        <div class="ml-md-0">
                            <h1 class="mb-4">Bienvenue sur Miamdiet <br></h1>
                        </div>
                    </div>
                    <div class="pb-md-5">
                        <h5>votre guichet unique pour une alimentation saine et délicieuse!</h5>
                        <p> Miamdiet est plus qu'un simple site de commerce électronique de restauration. Nous sommes
                            une équipe passionnée par la nutrition et le bien-être, et nous nous engageons à vous
                            fournir des repas délicieux et nutritifs qui correspondent à vos besoins et à vos
                            préférences</p>
                        <p>Nous proposons également des options de personnalisation pour répondre à vos besoins
                            alimentaires spécifiques, tels que les régimes végétariens, végétaliens, sans gluten ou sans
                            produits laitiers.</p>
                        <p><a href="shop" class="btn btn-primary"> voir maintenant</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section testimony-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <span class="subheading">Equipe</span>
                    <h2 class="mb-4">Savourer l'excellence, déguster l'exceptionnel : notre équipe à votre service
                    </h2>
                    <p>Notre équipe de restauration est composée de professionnels passionnés, travaillant main dans la
                        main pour offrir une expérience culinaire exceptionnelle à nos clients. Chacun apporte ses
                        compétences et son expertise au sein de nos différents services </p>
                </div>
            </div>
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel">
                    <div class="item">
                        <div class="testimony-wrap p-4 pb-5">
                            <div class="user-img mb-5"
                                style="background-image: url({{ asset('miamdiet/images/team.jpg') }}); width: 200px; height: 200px; border-radius: 50%; background-size: cover; background-position: center; position: relative; overflow: hidden; margin: 0 auto;">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                            </div>
                            <div class="text text-center">
                                <p class="mb-5 pl-4 line">Ensemble, nous formons une équipe soudée, animée par une même
                                    passion pour l'excellence du service et la satisfaction de notre clientèle. </p>
                                <p class="name">TEAM Miamdiet</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="ftco-section testimony-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <span class="subheading">Temoignage</span>
                    <h2 class="mb-4">Ce qu'ils pensent de nous</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts. Separated they live in</p>
                </div>
            </div>

        </div>
    </section> --}}

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row no-gutters ftco-services">
                <div class="col-lg-3 text-center d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services mb-md-0 mb-4">
                        <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
                            <span class="flaticon-shipped"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Livraison à l'heure</h3>
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 text-center d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services mb-md-0 mb-4">
                        <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
                            <span class="flaticon-diet"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Toujours Bon</h3>
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 text-center d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services mb-md-0 mb-4">
                        <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
                            <span class="flaticon-award"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">Qualité Superieur</h3>
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 text-center d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services mb-md-0 mb-4">
                        <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
                            <span class="flaticon-customer-service"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading">A votre service</h3>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-partner">
        <div class="container">
            <div class="row">
                <div class="col-sm ftco-animate">
                    <a href="https://www.facebook.com/ODCBurkinaFaso?mibextid=ZbWKwL" class="partner"><img
                            src="{{ asset('miamdiet/images/partner-1.png') }}" class="img-fluid"
                            alt="Colorlib Template"></a>
                </div>
                <div class="col-sm ftco-animate">
                    <a href="https://www.facebook.com/EdenVitalite?mibextid=ZbWKwL" class="partner"><img
                            src="{{ asset('miamdiet/images/partner-3.png') }}" class="img-fluid"
                            alt="Colorlib Template"></a>
                </div>
                <div class="col-sm ftco-animate">
                    <a href="https://www.facebook.com/kossoxfit?mibextid=ZbWKwL" class="partner"><img
                            src="{{ asset('miamdiet/images/partner-5.png') }}" class="img-fluid"
                            alt="Colorlib Template"></a>
                </div>
            </div>
        </div>
    </section>


    @include('layout.inscription')

    @include('layout.footer')

    @include('layout.loader')

    @include('layout.script')

</body>

</html>
