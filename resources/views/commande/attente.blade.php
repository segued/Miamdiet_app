@extends('dashboard.index')

@section('content')

<nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">
    <a class="flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab" href="#orders-all" role="tab" aria-controls="orders-all" aria-selected="true">Toutes</a>
    <a class="flex-sm-fill text-sm-center nav-link"  id="orders-paid-tab" data-bs-toggle="tab" href="#orders-paid" role="tab" aria-controls="orders-paid" aria-selected="false">Payées</a>
    <a class="flex-sm-fill text-sm-center nav-link" id="orders-pending-tab" data-bs-toggle="tab" href="#orders-pending" role="tab" aria-controls="orders-pending" aria-selected="false">En attente</a>
    <a class="flex-sm-fill text-sm-center nav-link text-danger" id="orders-cancelled-tab" data-bs-toggle="tab" href="#orders-cancelled" role="tab" aria-controls="orders-cancelled" aria-selected="false">Annulée</a>
</nav>


<div class="tab-content" id="orders-table-tab-content">
    <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
        <div class="app-card app-card-orders-table shadow-sm mb-5">
            <div class="app-card-body">
                <div class="table-responsive">
                    <table class="table app-table-hover mb-0 text-left">
                        <thead>
                            <tr>
                                <th class="cell">#</th>
                                <th class="cell">Produit</th>
                                <th class="cell">Clien</th>
                                <th class="cell">Prix unitaire</th>
                                <th class="cell">Quantité</th>
                                <th class="cell">Montant</th>
                                <th class="cell">Adresse Livraison</th>
                                <th class="cell">Methode de paiement</th>
                                <th class="cell">Statut paiment</th>
                                <th class="cell"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($commandes as $commande)
                                <td class="cell">{{ $commande->id }}</td>
                                <td class="cell">{{ $commande->produit->nom }}</td>
                                <td class="cell">{{ $commande->user->nom }}</td>
                                <td class="cell">{{ $commande->produit->prix }}</td>
                                <td class="cell">{{ $commande->quantite }}</td>
                                <td class="cell">{{ $commande->montant }}</td>
                                <td class="cell">{{ $commande->adresse_livraison }}</td>
                                <td class="cell">{{ $commande->methode_paiement }}</td>
                                <td class="cell">{{ $commande->statut_paiement }}</td>
                                <td class="cell">
                                    <a href="{{ route('commande.show', $commande->id) }}" class="btn btn-primary btn-sm">Voir</a>
                                </td>
                            </tr>
                                @endforeach
                        </tbody>
                    </table>
                </div><!--//table-responsive-->


@endsection
