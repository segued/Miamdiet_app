@extends('dashboard.index')

@section('content')
    <div class="container mb-4" style="background-color: #28a745; padding: 20px; border-radius: 5px;">
        <div class="row">
            <div class="col-6">
                <h1 class="mb-2 page-title" style="color: white;">Liste des paniers </h1>
            </div>
        </div>
    </div>
{{--
    <nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">
        <a class="flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab" href="#orders-all"
            role="tab" aria-controls="orders-all" aria-selected="true">Toutes</a>
        <a class="flex-sm-fill text-sm-center nav-link" id="orders-paid-tab" data-bs-toggle="tab" href="#orders-paid"
            role="tab" aria-controls="orders-paid" aria-selected="false">Payées</a>
        <a class="flex-sm-fill text-sm-center nav-link" id="orders-pending-tab" data-bs-toggle="tab" href="#orders-pending"
            role="tab" aria-controls="orders-pending" aria-selected="false">En attente</a>
        <a class="flex-sm-fill text-sm-center nav-link text-danger" id="orders-cancelled-tab" data-bs-toggle="tab"
            href="#orders-cancelled" role="tab" aria-controls="orders-cancelled" aria-selected="false">Annulée</a>
    </nav> --}}




    <div class="tab-content" id="orders-table-tab-content">
        <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
            <div class="app-card app-card-orders-table shadow-sm mb-5">
                <div class="app-card-body">
                    <div class="table-responsive">
                        <table class="table app-table-hover mb-0 text-left">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>ID Client</th>
                                    <th>Nom</th>
                                    <th>Prénom</th>
                                    <th>Email</th>
                                    <th>Téléphone</th>
                                    <th>Statut</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($panier as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->user->id }}</td>
                                        <td>{{ $item->user->nom }}</td>
                                        <td>{{ $item->user->prenom }}</td>
                                        <td>{{ $item->user->email }}</td>
                                        <td>{{ $item->user->numero }}</td>
                                        <td>{{ $item->statut }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
