@include('layout.head')


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

@if (Session::has('success_message'))
    <div class="alert alert-success">
        <strong>Success | {{ Session::get('success-message') }}</strong>
    </div>
@endif

<body class="goto-here">

    @include('layout.navbar')

    <div class="hero-wrap hero-bread" style="background-image: url({{ asset('miamdiet/images/bg_1.jpg') }});">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('shop') }}">Accueil</a></span></p>
                    <h1 class="mb-0 bread">Mes achats</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section ftco-cart">
        <div class="container">
            @if ($paniers->Count() > 0)
                @foreach ($paniers as $panier)
                    <div class="row mb-4">
                        <div class="col-md-12 ftco-animate">
                            <div class="cart-list">
                                <table class="table">
                                    <thead class="thead-primary">
                                        <tr class="text-center">
                                            <th>&nbsp;</th>
                                            <th>Nom du produit</th>
                                            <th>Prix</th>
                                            <th>Quantité</th>
                                            <th>Total</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $sommeTotal = 0;
                                            $noms = json_decode($panier->nom, true);
                                            $prix = json_decode($panier->prix, true);
                                            $quantite = json_decode($panier->quantite, true);
                                        @endphp

                                        @foreach ($noms as $index => $nom)
                                            <tr>
                                                <td></td>
                                                <td>{{ $nom }}</td>
                                                <td>{{ $prix[$index] }}</td>
                                                <td>{{ $quantite[$index] }}</td>
                                                <td>
                                                    @php
                                                        $total = $prix[$index] * $quantite[$index];
                                                        $sommeTotal += $total;
                                                        echo $total;
                                                    @endphp
                                                </td>
                                                <td></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="top-details d-flex align-items-center justify-content-between">
                                    <div>
                                        <h3>Total des achats</h3>
                                        <h6>Somme Totale
                                            <span id="achat">{{ $sommeTotal }}</span>
                                        </h6>
                                    </div>
                                    <div>
                                        <a href="{{ route('checkout.index', $panier->id) }}">
                                            <button type="button" class="btn btn-primary py-3 px-5 m-2" >Passer au
                                                paiement</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2><strong>Vous n'avez pas de commande </strong></h2>
                    <h5 class="mt-3"> Ajouter Maintenant</h5>
                    <a href="{{ route('shop') }}" class="btn btn-primary py-3 px-5 mt-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-shop mb-1" viewBox="0 0 16 16">
                            <path
                                d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.37 2.37 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0M1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5M4 15h3v-5H4zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1zm3 0h-2v3h2z" />
                        </svg>
                        Voir la boutique</a>
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
{{--
<script>
    // Fonction pour mettre à jour la quantité et le prix total d'un produit
    function updateQuantity(input) {
        var productId = input.id.replace('quantity_', ''); // Extraire l'ID du produit
        var quantite = parseInt(input.value); // Récupérer la nouvelle quantité
        var prix = parseFloat(document.getElementById('prix_' + productId).textContent.replace(/[^\d.-]/g,
            '')); // Récupérer le prix
        var montant = quantite * prix; // Calculer le nouveau montant total

        // Mettre à jour le montant total dans la vue
        document.getElementById('montantTotal_' + productId).textContent = montant.toFixed(2) + " fcfa";

        // Mettre à jour la somme totale
        updateTotal();
    }

    // Fonction pour mettre à jour la somme totale
    function updateTotal() {
        var total = 0;
        var montants = document.querySelectorAll('.total');

        for (var i = 0; i < montants.length; i++) {
            total += parseFloat(montants[i].textContent.replace(/[^\d.-]/g, ''));
        }

        document.getElementById('achat').textContent = total.toFixed(2) + " fcfa";
    }

    // Initialiser la somme totale au chargement de la page
    updateTotal();


    function removeItemFromCart(rowId) {
        // Empêcher le comportement par défaut du lien
        event.preventDefault();

        // Envoyer une requête AJAX pour supprimer le produit du panier
        $.ajax({
            url: "{{ route('cart.remove') }}",
            type: 'POST',
            data: {
                _token: "{{ csrf_token() }}",
                rowId: rowId // Envoyer l'ID de la ligne du panier
            },
            success: function(response) {
                // Mettre à jour le panier après la suppression du produit
                // Par exemple, recharger la page ou mettre à jour le contenu du panier dynamiquement
                location.reload(); // Recharger la page
            },
            error: function(error) {
                console.log(error);
            }
        });
    }
</script> --}}
