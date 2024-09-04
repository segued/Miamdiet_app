@extends('dashboard.index')

@section('content')

<div class="container mb-4" style="background-color: #28a745; padding: 20px; border-radius: 5px;">
    <div class="row">
        <div class="col-6">
            <h1 class="mb-2 page-title" style="color: white;">Liste des rendez-vous </h1>
        </div>
    </div>
</div>

{{-- <nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">
    <a class="flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab" href="#orders-all" role="tab" aria-controls="orders-all" aria-selected="true">Toutes</a>
    <a class="flex-sm-fill text-sm-center nav-link"  id="orders-paid-tab" data-bs-toggle="tab" href="#orders-paid" role="tab" aria-controls="orders-paid" aria-selected="false">Payées</a>
    <a class="flex-sm-fill text-sm-center nav-link" id="orders-pending-tab" data-bs-toggle="tab" href="#orders-pending" role="tab" aria-controls="orders-pending" aria-selected="false">En attente</a>
    <a class="flex-sm-fill text-sm-center nav-link text-danger" id="orders-cancelled-tab" data-bs-toggle="tab" href="#orders-cancelled" role="tab" aria-controls="orders-cancelled" aria-selected="false">Annulée</a>
</nav> --}}





<div class="tab-content" id="orders-table-tab-content">
    <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
        <div class="app-card app-card-orders-table shadow-sm mb-5">
            <div class="app-card-body">
                <div class="table-responsive">
                    <table class="table app-table-hover mb-0 text-left">
                        <thead>
                            <tr>
                                <th class="cell"></th>
                                <th class="cell"></th>
                                <th class="cell">#</th>
                                <th class="cell">Nom </th>
                                <th class="cell">Prenom</th>
                                <th class="cell">Email</th>
                                <th class="cell">Date</th>
                                <th class="cell">Heure de rendez-vous</th>
                                <th class="cell">Ville</th>
                                <th class="cell">Adresse</th>
                                <th class="cell">Numero</th>
                                <th class="cell">Transaction</th>
                                <th class="cell">Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($rendezvous as $rendezvous)
                                <td></td>
                                <td></td>
                                <td class="cell">{{ $rendezvous->id}}</td>
                                <td class="cell">{{ $rendezvous->user->nom }}</td>
                                <td class="cell">{{ $rendezvous->user->prenom }}</td>
                                <td class="cell">{{ $rendezvous->user->email }}</td>
                                <td class="cell">{{ $rendezvous->date}}</td>
                                <td class="cell">{{ $rendezvous->heure}}</td>
                                <td class="cell">{{ $rendezvous->ville }}</td>
                                <td class="cell">{{ $rendezvous->adress }}</td>
                                <td class="cell">{{ $rendezvous->numero_depot }}</td>
                                <td class="cell">{{ $rendezvous->numero_transaction }}</td>
                                <td class="cell">{{ $rendezvous->description }}</td>

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
