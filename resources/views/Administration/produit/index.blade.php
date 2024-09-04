@extends('dashboard.index')

@section('content')

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





<div class="row">



    <div class="container mb-4" style="background-color: #28a745; padding: 20px; border-radius: 5px;">
        <div class="row">
            <div class="col-6">
                <h1 class="mb-2 page-title" style="color: white;">Liste des produits</h1>
            </div>
            <div class="col-6 text-end">
                <a class="btn btn-primary text-white mb-3" href="{{ route('produit.create') }}" style="margin-top: 10px; background-color: transparent;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                    </svg> Ajouter un produit
                </a>
            </div>
        </div>
    </div>


    <div class="tab-content" id="orders-table-tab-content">
        <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
            <div class="app-card app-card-orders-table shadow-sm mb-5">
                <div class="app-card-body">
                    <div class="table-responsive" >
                        <table class="table app-table-hover mb-0 text-left">
                            <thead>
                                <tr>
                                    <th class="cell"></th>
                                    <th class="cell"></th>
                                    <th class="cell">#</th>
                                    <th class="cell">Catrgorie</th>
                                    <th class="cell">Nom</th>
                                    <th class="cell">Description</th>
                                    <th class="cell">Prix</th>
                                    <th class="cell">Action</th>
                                    <th class="cell"></th>
                                </tr>
                            </thead>
                            <tbody style="height: 100%; overflow-y: scroll;">
                                @foreach ($produits as $produit)
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>{{ $produit->id}}</td>
                                        <td>{{ $produit->categorie->libelle }}</td>
                                        <td>{{ $produit->nom }}</td>
                                        <td>{{ $produit->description }}</td>
                                        <td>{{ $produit->prix }}</td>
                                        <td class="cell">
                                            <div class="d-flex justify-content-start ">
                                            <a href="{{ route('produit.show', $produit->id) }}" title="Visualiser le produit" class="mx-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill text-info" viewBox="0 0 16 16">
                                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0" />
                                                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7" />
                                                </svg>
                                            </a>
                                            <a href="{{ route('produit.edit', $produit->id) }}" title="Modifier le produit" class="mx-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square text-warning" viewBox="0 0 16 16">
                                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                                </svg>
                                            </a>
                                            <span   title="Supprimer le produit" style="cursor:pointer ;" >
                                                <form action="{{route('produit.destroy', $produit->id)}}" method="POST" >
                                                    @csrf
                                                    @method('delete')
                                                    <a  id="confirmation" class="mx-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill text-danger" viewBox="0 0 16 16">
                                                            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0" />
                                                        </svg>
                                                    </a>
                                                </form>
                                            </span>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


<script>
    document.querySelectorAll("#confirmation").forEach((button) => {
    button.addEventListener("click", function (e) {
        e.preventDefault();
        Swal.fire({
            title: "Êtes-vous sûr ?",
            text: "De vouloir supprimer?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Oui,Supprimer!",
            cancelButtonText: "Non",
        }).then((result) => {
            if (result.isConfirmed) {
                this.closest("form").submit();
            }
        });
    });
    });
</script>

@endsection
