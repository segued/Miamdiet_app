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
            @if ($items->Count() > 0)
                <div class="row">
                    <div class="col-md-12 ftco-animate">
                        <div class="cart-list">
                            <form id="monFormulaire" action="{{ route('ValiderCommande') }}" method="POST">
                                @csrf
                                <table class="table" id="votreIdDeTableau">
                                    <thead class="thead-primary">
                                        <tr class="text-center">
                                            <th>&nbsp;</th>
                                            <th>Nom du produit</th>
                                            <th>Prix</th>
                                            <th>Quantité</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($items as $cle => $item)
                                            <tr class="text-center" id="row_{{ $item->rowId }}">
                                                <td class="product-remove">
                                                    <a href="javascript:void(0)" class="remove-cart"
                                                        onclick="removeItemFromCart('{{ $item->rowId }}')">
                                                        <span class="ion-ios-close"></span>
                                                    </a>
                                                </td>
                                                <td class="nom">
                                                    <h3>{{ $item->model->nom }}</h3>
                                                    <input type="hidden" name="produit_id[]"
                                                        value="{{ $item->model->id }}">
                                                    <input type="hidden" name="noms[]"
                                                        value="{{ $item->model->nom }}">
                                                </td>
                                                <td class="prix" id="prix_{{ $item->model->id }}">
                                                    {{ $item->model->prix }} <small>fcfa</small>
                                                    <input type="hidden" name="prix[]"
                                                        value="{{ $item->model->prix }}">
                                                </td>
                                                <td>
                                                    <div class="qty-control position-relative">
                                                        <input type="number" id="quantity_{{ $item->model->id }}"
                                                            name="quantities[]" min="1"
                                                            class="qty-control_number text-center input-number"
                                                            value="{{ $item->qty }}"
                                                            onchange="updateQuantity(this)">
                                                    </div>
                                                </td>
                                                <td id="montantTotal_{{ $item->model->id }}" class="total">
                                                    {{ $item->subtotal }}
                                                    <input type="hidden" name="totals[]"
                                                        value="{{ $item->subtotal }}">
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="top-details d-flex align-items-center justify-content-between">
                                    <div>
                                        <h3>Total des achats</h3>
                                        <h6>Somme Totale <span id="achat">fca</span></h6>
                                    </div>
                                    <div class="left-side-button text-end d-block">
                                        <a href="javascript:void(0)" onclick="clearCart()"
                                            class="text-decoration-underline theme-color d-block text-capitalize">vider
                                            le panier
                                        </a>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary py-3 px-5 m-2 ">Valider la
                                            commande</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </div>
        </div>

        <div class="container">
            <div class="bottom-details mt-3 d-flex justify-content-between">
                <a href="{{ route('shop') }}" class="btn btn-primary py-3 px-5 mt-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                        class="bi bi-arrow-left mr-3" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8" />
                    </svg>
                    Revenir à la boutique
                </a>

                <a href="{{ route('afficherPanier') }}" class="btn btn-primary py-3 px-5 mt-3">
                    Mes paniers
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-cart3" viewBox="0 0 16 16">
                        <path
                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l.84 4.479 9.144-.459L13.89 4zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                    </svg>
                </a>
            </div>
        </div>
        </div>
    @else
        <div class="row">
            <div class="col-md-12 text-center">
                <h2><strong>Votre panier est vide</strong></h2>
                <h5 class="mt-3"> Ajouter Maintenant</h5>
                <a href="{{ route('shop') }}" class="btn btn-primary py-3 px-5 mt-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="bi bi-shop mb-1" viewBox="0 0 16 16">
                        <path
                            d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.37 2.37 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0M1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5M4 15h3v-5H4zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1zm3 0h-2v3h2z" />
                    </svg>
                    Voir la boutique</a>
                <a href="{{ route('afficherPanier') }}" class="btn btn-primary py-3 px-5 mt-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="bi bi-cart3 mb-2" viewBox="0 0 16 16">
                        <path
                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l.84 4.479 9.144-.459L13.89 4zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                    </svg>
                    Mes achat</a>
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




<script>
    function removeItemFromCart(rowId) {
        if (confirm("Êtes-vous sûr de vouloir supprimer cet article du panier?")) {
            // Sélectionne la ligne à supprimer en utilisant rowId comme partie de l'ID
            var row = document.getElementById('row_' + rowId);
            if (row) {
                row.remove();
                updateTotal();
            } else {
                console.error("Ligne non trouvée pour l'ID : ", rowId);
            }
        }
    }


    function clearCart() {
    if (confirm("Êtes-vous sûr de vouloir vider le panier ?")) {
        // Sélectionne toutes les lignes du tableau du panier (sauf l'en-tête)
        var rows = document.querySelectorAll('#votreIdDeTableau tbody tr');

        // Supprime chaque ligne
        rows.forEach(function(row) {
            row.remove();
        });

        // Met à jour le total du panier à 0
        updateTotal();
    }
}


    function updateQuantity(input) {
        var productId = input.id.replace('quantity_', '');
        var quantite = parseInt(input.value);
        var prix = parseFloat(document.getElementById('prix_' + productId).textContent.replace(/[^\d.-]/g, ''));
        var montant = quantite * prix;

        document.getElementById('montantTotal_' + productId).textContent = montant.toFixed(2);
        updateTotal();
    }

    function updateTotal() {
        var total = 0;
        var montants = document.querySelectorAll('.total');
        for (var i = 0; i < montants.length; i++) {
            total += parseFloat(montants[i].textContent.replace(/[^\d.-]/g, ''));
        }
        document.getElementById('achat').textContent = total.toFixed(2) + " fcfa";
    }

    updateTotal(); // Initialiser le total au chargement
</script>
