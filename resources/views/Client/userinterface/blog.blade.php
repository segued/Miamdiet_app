<!DOCTYPE html>
<html lang="en">

@include('layout.head')


  <body class="goto-here">
		@include('layout.navbar')


    <div class="hero-wrap hero-bread" style="background-image: url({{asset('miamdiet/images/bg_1.jpg')}});">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="{{route('accueil')}}">Accueil</a></p>
            <h1 class="mb-0 bread">Blog</h1>
          </div>
        </div>
      </div>
    </div>


    <section class="ftco-section ftco-no-pb ftco-no-pt mt-3">
        <div class="container">
            <div class="row">
                <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center"
                    style="border-radius: 50%; overflow: hidden;">
                    <div style="width: 400px; height: 400px; overflow: hidden; border-radius: 50%;">
                        <img src="{{ asset('miamdiet/images/blog.jpg') }}" alt="Daniel"
                            style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                </div>
                <div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
                    <div class="heading-section-bold mb-4 mt-md-5 text-center">
                        <h1 class="mb-4 font-weight-bold" style="font-size: 2.5rem; color: #2c3e50;">Cabinet de Nutrition & Diététique</h1>
                    </div>
                    <div class="pb-md-5">
                        <h5 class="text-center font-weight-light mb-4">Votre guichet unique pour une alimentation saine et délicieuse!</h5>

                        <div class="services-list mt-4">
                            <h6 class="font-weight-bold"><strong>Nos Services :</strong></h6>
                            <ul class="list-unstyled text-left">
                                <li>🗓 Consultation & Suivi Nutritionnel</li>
                                <li>🍊 Rééquilibrage alimentaire personnalisé</li>
                                <li>📖 Livret de recettes saines, locales & diététiques</li>
                                <li>📭 Livraison de repas & produits diététiques</li>
                                <li>🍉🍏🍍🥭🥕 Jus minceurs et énergétiques</li>
                            </ul>
                        </div>

                        <p class="mt-4">
                            Nous livrons 7j/7, même les jours fériés, avec des options d'abonnement hebdomadaire ou mensuel. Commandez à la carte pour le petit déjeuner, déjeuner, dîner, salades ou salades de fruits.
                        </p>
                        <p>
                            Nos offres sont adaptées aux personnes diabétiques, hypertendues et à toute autre maladie chronique liée à une mauvaise alimentation.
                        </p>

                        {{-- <div class="values-vision mt-4">
                            <h5 class=""><strong>Valeurs :</strong> Le sourire, le bien-être mental & physique de la population.</h5>
                            <h5 class=""><strong>Vision :</strong> Changer la vie des Burkinabè grâce à une alimentation saine, équilibrée et qui valorise les produits du terroir.</h5>
                        </div> --}}

                        {{-- <p class="text-center mt-4"><a href="shop" class="btn btn-primary">Voir maintenant</a></p> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layout.inscription')


    @include('layout.footer')

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  @include('layout.script')

  </body>
</html>
