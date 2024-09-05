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
        <img src="{{ asset('miamdiet/images/bg.jpg') }}" class="img-fluid mx-auto d-block" alt="Description de l'image"
            style="max-width: 100%;">
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
                    <span class="subheading">Trouver votre équilibre alimentaire.</span>
                    <h2 class="mb-4">Avec <strong>Miamdiet</strong></h2>
                    <p>Une bonne alimentation est la clé d'une santé durable et d'un bien-être optimal.</p>
                    <h3><a href="#">Prenez soin de vous.</a></h3>
                    <span class="price"> Choisissez la santé, chaque bouchée compte !<br>
                        <a href="{{ route('shop') }}" class="btn btn-primary">Découvrez notre boutique.</a></span>
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
                        <h5>Votre guichet unique pour une alimentation saine et délicieuse !</h5>
                        <p> Miamdiet est plus qu'un simple site de commerce électronique de restauration. Nous sommes
                            une équipe passionnée par la nutrition et le bien-être, et nous nous engageons à vous
                            fournir des repas délicieux et nutritifs qui correspondent à vos besoins et à vos
                            préférences.</p>
                        <p>Nous proposons également des options de personnalisation pour répondre à vos besoins
                            alimentaires spécifiques, tels que les régimes végétariens, végétaliens, sans gluten ou sans
                            produits laitiers.</p>
                        <p><a href="shop" class="btn btn-primary">Voir maintenant !</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section testimony-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-8 heading-section ftco-animate text-center">
                    <span class="subheading">Rencontrez Notre Équipe</span>
                    <h2 class="mb-4">Savourez l'Excellence, Dégustez l'Exceptionnel</h2>
                    <p>Notre équipe passionnée travaille de concert pour vous offrir une expérience culinaire inégalée.
                        Chaque membre apporte son savoir-faire et son expertise, garantissant une qualité exceptionnelle
                        à chaque service.</p>
                </div>
            </div>
            <div class="row">
                <!-- Item 1 -->
                <div class="col-md-4">
                    <div class="testimony-wrap p-4 pb-5">
                        <div class="user-img mb-4"
                            style="background-image: url({{ asset('miamdiet/images/team.jpg') }}); width: 100%; height: 250px; border-radius: 50%; background-size: cover; background-position: center;">
                            <span class="quote d-flex align-items-center justify-content-center">
                                <i class="icon-quote-left"></i>
                            </span>
                        </div>
                        <div class="text text-center">
                            <p class="mb-4">"Ensemble, nous formons une équipe soudée, animée par une passion commune
                                pour l'excellence du service."</p>
                        </div>
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="col-md-4">
                    <div class="testimony-wrap p-4 pb-5">
                        <div class="user-img mb-4"
                            style="background-image: url({{ asset('miamdiet/images/team.jpg') }}); width: 100%; height: 250px; border-radius: 50%; background-size: cover; background-position: center;">
                            <span class="quote d-flex align-items-center justify-content-center">
                                <i class="icon-quote-left"></i>
                            </span>
                        </div>
                        <div class="text text-center">
                            <p class="mb-4">"Notre engagement envers la qualité et l'innovation nous distingue dans
                                l'industrie culinaire."</p>
                        </div>
                    </div>
                </div>
                <!-- Item 3 -->
                <div class="col-md-4">
                    <div class="testimony-wrap p-4 pb-5">
                        <div class="user-img mb-4"
                            style="background-image: url({{ asset('miamdiet/images/team.jpg') }}); width: 100%; height: 250px; border-radius: 50%; background-size: cover; background-position: center;">
                            <span class="quote d-flex align-items-center justify-content-center">
                                <i class="icon-quote-left"></i>
                            </span>
                        </div>
                        <div class="text text-center">
                            <p class="mb-4">"Nous croyons fermement que la passion pour la cuisine se traduit par une
                                expérience inoubliable."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section testimony-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <span class="subheading">Témoignages</span>
                    <h2 class="mb-4">Ce que nos clients en pensent</h2>
                </div>
            </div>
            <div class="row">
                @foreach ($temoignages as $temoignage)
                    <div class="col-md-3 ftco-animate">
                        <div class="product shadow">
                            <img class="img-fluid" src="{{ asset('storage' . $temoignage->image) }}" alt="Image du produit">
                            <div class="overlay"></div>
                        </div>
                        <div class="text-center">
                            <h6>"{{ $temoignage->description }}"</h6>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <style>
        .testimony-section {
            background-color: #f8f9fa; /* Couleur de fond douce */
            padding: 60px 0; /* Espacement supérieur et inférieur */
        }

        .product {
            margin-bottom: 30px;
            position: relative;
        }

        .img-fluid {
            transition: transform 0.3s; /* Effet de transition pour l'animation */
        }

        .img-fluid:hover {
            transform: scale(1.05); /* Agrandissement au survol */
        }
    </style>


    <section class="ftco-section values-vision-mission-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h2 class="mb-4">Nos Valeurs, Vision et Mission</h2>
                    <p>Nous croyons fermement en l'importance de la santé et du bien-être pour tous.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 ftco-animate">
                    <div class="card text-center shadow-sm">
                        <div class="card-body">
                            <div class="icon mb-3 ">
                                <i class="fas fa-eye" style="font-size: 40px; color: #28a745;"></i>
                            </div>
                            <h3>Vision</h3>
                            <p>Changer la vie des Burkinabè à travers une alimentation saine, équilibrée et valorisant
                                les produits du terroir.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="card text-center shadow-sm">
                        <div class="card-body">
                            <div class="icon mb-3">
                                <i class="fas fa-smile" style="font-size: 40px; color: #007bff;"></i>
                            </div>
                            <h3>Valeurs</h3>
                            <p><strong>Le Sourire</strong><br>Chaque sourire est le reflet d'une vie saine.</p>
                            <p><strong>Bien-être Mental & Physique</strong><br>Promotion de la santé intégrale de la
                                population.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="card text-center shadow-sm">
                        <div class="card-body">
                            <div class="icon mb-3">
                                <i class="fas fa-check-circle" style="font-size: 40px; color: #dc3545;"></i>
                            </div>
                            <h3>Mission</h3>
                            <p>Fournir des solutions complètes pour une vie saine avec une gamme diversifiée de services
                                et de produits axés sur la nutrition et le bien-être.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        .values-vision-mission-section {
            padding: 60px 0;
            /* Espacement supérieur et inférieur */
        }

        .card {
            border: none;
            /* Pas de bordure par défaut */
            border-radius: 10px;
            /* Coins arrondis */
            transition: transform 0.3s, box-shadow 0.3s;
            /* Effet de transition */
        }

        .card:hover {
            transform: translateY(-5px);
            /* Légère élévation au survol */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            /* Ombre au survol */
        }

        h3 {
            margin-bottom: 15px;
            /* Espacement sous les titres */
        }
    </style>






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
