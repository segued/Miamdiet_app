@extends('dashboard.index')

@section('content')

{{-- <div class="container mb-4" style="background-color: #28a745; padding: 20px; border-radius: 5px;">
    <div class="row">
        <div class="col-6">
            <h1 class="mb-2 page-title" style="color: white;">Liste des Clients </h1>
        </div>
        <div class="col-6 text-end">
            <a class="btn btn-primary text-white mb-3" href="#" style="margin-top: 10px; background-color: transparent;">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5"/>
                    <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0z"/>
                  </svg> Exporter
            </a>
        </div>
    </div>
</div> --}}


<div class="row g-3 mb-4 align-items-center justify-content-between">
    <div class="col-auto">
        <h1 class="app-page-title mb-0">UTILISATEUR</h1>
    </div>
    <div class="col-auto">
        <div class="page-utilities">
            <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                <div class="col-auto">
                    <form class="table-search-form row gx-1 align-items-center">
                        <div class="col-auto">
                            <input type="text" id="search-orders" name="searchorders"
                                class="form-control search-orders" placeholder="Rechercher" />
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn app-btn-secondary">
                                Rechercher
                            </button>
                        </div>
                    </form>
                </div>
                <!--//col-->
                <div class="col-auto">
                    <select class="form-select w-auto">
                        <option selected value="option-1">tous</option>
                        <option value="option-2">Cette Semaine</option>
                        <option value="option-3">Ce mois</option>
                        <option value="option-4">3 derniers mois</option>
                    </select>
                </div>
                <div class="col-auto">
                    <a class="btn app-btn-secondary" href="#">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-download me-1"
                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                            <path fill-rule="evenodd"
                                d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                        </svg>
                        Download CSV
                    </a>
                </div>
            </div>
            <!--//row-->
        </div>
        <!--//table-utilities-->
    </div>
    <!--//col-auto-->
</div>
<!--//row-->

<nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">
    <a class="flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab"
         role="tab" aria-controls="orders-all" aria-selected="true">Tous</a>
    <a class="flex-sm-fill text-sm-center nav-link" id="orders-paid-tab" data-bs-toggle="tab"
        href="{{route('client')}}" role="tab" aria-controls="orders-paid" aria-selected="false">Client</a>
    <a class="flex-sm-fill text-sm-center nav-link" id="orders-pending-tab" data-bs-toggle="tab"
        href="#orders-pending" role="tab" aria-controls="orders-pending"
        aria-selected="false">Gestionnaire</a>
    <a class="flex-sm-fill text-sm-center nav-link" id="orders-cancelled-tab" data-bs-toggle="tab"
        href="#orders-cancelled" role="tab" aria-controls="orders-cancelled"
        aria-selected="false">Administrateur</a>
</nav>

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
                                <th class="cell">Nom</th>
                                <th class="cell">Prenom</th>
                                <th class="cell">Profil</th>
                                <th class="cell">Email</th>
                                <th class="cell">Numero</th>
                                {{-- <th class="cell">Action</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @if (!empty($users))
                            @foreach ($users as $user)
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->nom }}</td>
                                        <td>{{ $user->prenom }}</td>
                                        <td>{{ $user->profil }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->numero }}</td>
                                        {{-- <td class="cell">
                                            <div class="d-flex justify-content-start ">
                                                <span title="Voir le gestionnaire" style="cursor:pointer ;">
                                                    <a href="{{ route('gestionnaire.show', $gestionnaire->id) }}"
                                                        title="Visualiser la gestionnaire" class="mx-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor"
                                                            class="bi bi-eye-fill text-info" viewBox="0 0 16 16">
                                                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0" />
                                                            <path
                                                                d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7" />
                                                        </svg>
                                                    </a>
                                                </span>

                                                <span title="Modifier le gestionnaire" style="cursor:pointer ;">
                                                    <a href="{{ route('gestionnaire.edit', $gestionnaire->id) }}"
                                                        title="Modifier la gestionnaire" class="mx-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor"
                                                            class="bi bi-pencil-square text-warning"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                            <path fill-rule="evenodd"
                                                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                                        </svg>
                                                    </a>
                                                </span>

                                                <span title="Supprimer le gestionnaire" style="cursor:pointer ;">
                                                    <form
                                                        action="{{ route('gestionnaire.destroy', $gestionnaire->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <a id="confirmation" class="mx-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor"
                                                                class="bi bi-trash text-danger" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                                                <path
                                                                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                                            </svg>
                                                        </a>
                                                    </form>
                                                </span>
                                            </div>
                                        </td> --}}
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
                <!--//table-responsive-->
            </div>
            <!--//app-card-body-->
        </div>
        <!--//app-card-->
        {{-- <nav class="app-pagination">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav> --}}
        <!--//app-pagination-->
    </div>
    <!--//tab-pane-->

</div>
<!--//tab-content-->

{{-- <div class="tab-content" id="orders-table-tab-content">
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
                                <th class="cell">Nom</th>
                                <th class="cell">Prenom</th>
                                <th class="cell">Email</th>
                                <th class="cell">Profile</th>
                                <th class="cell">Actions</th>
                                <th class="cell"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($users as $user)
                                <td class="cell"></td>
                                <td class="cell"></td>
                                <td class="cell">{{ $user->id }}</td>
                                <td class="cell">{{ $user->nom }}</td>
                                <td class="cell">{{ $user->prenom }}</td>
                                <td class="cell">{{ $user->email }}</td>
                                <td class="cell">{{ $user->profil }}</td>
                                <td class="cell">
                                    <a href="#" class="btn btn-primary btn-sm" style="color: white;">Voir</a>
                                </td>
                            </tr>
                                @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div> --}}


@endsection
