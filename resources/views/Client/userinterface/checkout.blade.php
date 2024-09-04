<!DOCTYPE html>
<html lang="en">

@include('layout.head')


<body class="goto-here">

    @include('layout.navbar')

    <div class="hero-wrap hero-bread" style="background-image: url({{ asset('miamdiet/images/bg_1.jpg') }});">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('accueil') }}">Accueil</a></span></p>
                    <h1 class="mb-0 bread">Commande</h1>
                </div>
            </div>
        </div>
    </div>

    @php
    $sommeTotal = 0;
@endphp

@foreach ($noms as $index => $nom)
        <td>
            @php
                $total = $prix[$index] * $quantite[$index];
                $sommeTotal += $total;
                echo $total;
            @endphp
        </td>
@endforeach


    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 ftco-animate">
                    <h3 class="mb-4 billing-heading text-center"><strong>Détails de la Commande</strong></h3>
                    <form action="{{ route('commande.store') }}" class="billing-form" method='post'>
                        @csrf
                        @method('POST')
                        <div class="row align-items-end">
                            <div class="col-md-6">
                                <input type="hidden" name="panier_id" value="{{ $id }}">
                                <input type="hidden" name="montant" value="{{ $sommeTotal }}">
                                <div class="form-group">
                                    <label for="firstname">Nom</label>
                                    <input type="text" class="form-control"
                                        placeholder="veuillez renseigner votre nom" value="{{ Auth::user()->nom }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="lastname">Prénom</label>
                                    <input type="text" class="form-control"
                                        placeholder="veuillez renseigner votre prénom"
                                        value="{{ Auth::user()->prenom }}">
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="ville">ville</label>
                                    <input type="text" class="form-control"
                                        placeholder="veuillez renseigner votre ville" value="" id="ville"
                                        name="ville">

                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="streetaddress">Adress</label>
                                    <input type="text" class="form-control"
                                        placeholder="veuillez renseigner votre adresse" name="adresse" id="adresse">
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">Numéro de téléphone</label>
                                    <input type="text" class="form-control"
                                        placeholder="veuillez renseigner votre numéro de téléphone"
                                        value="{{ Auth::user()->numero }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="emailaddress"> Adress Email</label>
                                    <input type="text" class="form-control"
                                        placeholder="veuillez renseigner votre email" value="{{ Auth::user()->email }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="firstname">Numéro de dépot</label>
                                    <input type="text" class="form-control"
                                        placeholder="veuillez renseigner le numéro du dépot" id="numero_depot"
                                        name="numero_depot">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="lastname">Numéro de transaction</label>
                                    <input type="text" class="form-control"
                                        placeholder = "veuillez renseigner numéro de transaction"
                                        id="numero_transaction" name="numero_transaction">
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-md-12">
                                <div class="form-group mt-4">
                                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                                </div>
                            </div>
                        </div>
                    </form><!-- END -->
                </div>
                <div class="col-xl-5">
                    <div class="row mt-5 pt-3">
                        <div class="col-md-12 d-flex mb-5">
                            <div class="cart-detail cart-total p-3 p-md-4">
                                <h3 class="billing-heading mb-4 text-center"><strong>Total des Achats</strong></h3>
                                <p class="d-flex">
                                    <span>Somme Totale</span>
                                    <span>
                                        @php
                                            echo $sommeTotal;
                                        @endphp
                                        <small>fcfa</small>
                                    </span>
                                </p>
                                <p class="d-flex">
                                    <span></span>
                                    <span></span>
                                </p>
                                <p class="d-flex">
                                    <span></span>
                                    <span></span>
                                </p>
                                <hr>
                                <p class="d-flex total-price">
                                    <span>Total</span>
                                    <span>
                                        @php
                                            echo $sommeTotal;
                                        @endphp
                                        <small>fcfa</small>
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="cart-detail p-3 p-md-4">
                                <h3 class="billing-heading mb-4 text-center"><strong>Mode de paiment</strong></h3>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div class="text-center">
                                            <h5>Orange Money</h5>
                                            <p>Numéro de transaction : <strong>+226 75 23 67 19</strong></p>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layout.inscription')


    @include('layout.footer')

    @include('layout.loader')

    @include('layout.script')


    <script>
        $(document).ready(function() {

            var quantitiy = 0;
            $('.quantity-right-plus').click(function(e) {

                // Stop acting like a button
                e.preventDefault();
                // Get the field name
                var quantity = parseInt($('#quantity').val());

                // If is not undefined

                $('#quantity').val(quantity + 1);


                // Increment

            });

            $('.quantity-left-minus').click(function(e) {
                // Stop acting like a button
                e.preventDefault();
                // Get the field name
                var quantity = parseInt($('#quantity').val());

                // If is not undefined

                // Increment
                if (quantity > 0) {
                    $('#quantity').val(quantity - 1);
                }
            });

        });
    </script>

</body>

</html>
