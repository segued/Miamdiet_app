@include('layout.head')

@include('layout.navbar')

<div class="hero-wrap hero-bread" style="background-image: url({{ asset('miamdiet/images/category-13.jpg') }});">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('accueil') }}">Accueil</a></span></p>
                <h1 class="mb-0 bread">Les consultations Miamdiet</h1>
            </div>
        </div>
    </div>
</div>
{{--
<section class="ftco-section ftco-cart">
    <div class="container">
        @if ($creneaux->Count() > 0)
            <div class="row">
                <div class="col-md-12 ftco-animate">
                    <div class="cart-list">
                        <table class="table">
                            <thead class="thead-primary">
                                <tr class="text-center">
                                    <th>Date</th>
                                    <th>Heure de début</th>
                                    <th>Heure de fin</th>
                                    <th>Prix</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($creneaux as $creneau)
                                    <tr class="text-center">
                                        <td class="product-remove">{{$creneau->date}}</td>
                                        <td class="nom">{{$creneau->debut}}</td>
                                        <td class="nom">{{$creneau->fin}}</td>
                                        <td class="nom">{{$creneau->prix}} <small>cfa</small></td>
                                        <td class="nom">{{$creneau->action}}
                                            <a href="{{ url('planifierRdv', $creneau->id) }}"  class="btn btn-primary">Prendre un Rendez-vous</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @else
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3><strong>Aucun creneau disponible pour un rendez-vous</strong></h3>
                    <h5 class="mt-3"> Voir d'autres onglets </h5>
                    <a href="{{ route('shop') }}" class="btn btn-black py-3 px-5 mt-3"> Boutique</a>
                    <a href="{{ route('book.index') }}" class="btn btn-black py-3 px-5 mt-3"> Livres</a>
                </div>
            </div>
        @endif
    </div>
</section> --}}
<div class="container my-5">
    <div class="row align-items-center">
        <div class="col-md-6">
            <h2 class="display-4">Transformez Votre Santé!</h2>
            <p class="lead">
                Découvrez comment une consultation nutritionnelle peut vous aider à atteindre vos objectifs de santé. Que vous souhaitiez perdre du poids, gagner en énergie ou simplement mieux manger, nous sommes là pour vous accompagner.
            </p>
            <a href="{{ url('planifierRdv') }}" class="btn btn-primary btn-lg mb-2" >Prenez Rendez-vous</a>
        </div>
        <div class="col-md-6">
            <img src="{{asset('miamdiet/images/rendez_vous.jpg')}}" alt="Consultation Nutritionnelle" class="img-fluid rounded shadow">
        </div>
    </div>
</div>

@include('layout.inscription')

@include('layout.footer')


@include('layout.loader')


@include('layout.script')

</body>

</html>
