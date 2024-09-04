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
                        <img src="{{ asset('miamdiet/images/daniel.jpg') }}" alt="Daniel"
                            style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    {{-- <a href="https://youtu.be/22wETA57O4M?si=uss0izqRJFFN2DS9"
                        class="icon popup-vimeo d-flex justify-content-center align-items-center"
                        style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                        <span class="icon-play"></span>
                    </a> --}}
                </div>
                <div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
                    <div class="heading-section-bold mb-4 mt-md-5">
                        <div class="ml-md-0">
                            <h1 class="mb-4">Cabinet de Nutrition & Diététique
                                <br></h1>
                        </div>
                    </div>
                    <div class="pb-md-5">
                        <h5>votre guichet unique pour une alimentation saine et délicieuse!</h5>
                        <p> - Services de consultation & Suivi Nutritionnel🗓 <br>
                            - Rééquilibrage alimentaire personnalisé🍊<br>
                            - Livret de recettes saines, locales & diététiques 📖 <br>
                            - Services de Livraison de Repas & produits diététiques📭🧋🥙🥘🍜 <br>
                            - Jus minceurs et énergétiques 🍉🍏🍍🥭🍋🥕🥒<br> </p>
                        <p>Nous livrons 7jrs/7 et jours fériés avec une possibilité d'abonnement hebdomadaire, mensuel ou achat ponctuel de petit déjeuner, déjeuner, dîner, salades ou salades de fruits
                            . <br>
                            Nos offres et services sont adaptés aux personnes diabétiques, hypertendus et tout autres maladies chroniques liées à la mauvaise alimentation
                            </p>
                            <h5> <strong>Valeurs : </strong> le sourire, le Bien être mental & physique de la population</h5>
                            <h5> <strong>Vision :</strong>Changer la vie des Burkinabè à travers une Alimentation Saine, Equilibrée et qui valorise les produits du terroir.</h5>
                        {{-- <p><a href="shop" class="btn btn-primary"> voir maintenant</a></p> --}}
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
