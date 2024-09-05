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
                <h1 class="mb-2 page-title" style="color: white;">Les Messages des utilisateurs</h1>
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
                                    <th class="cell">Nom</th>
                                    <th class="cell">Prenom</th>
                                    <th class="cell">Objet</th>
                                    <th class="cell">Message</th>
                                    <th class="cell">Action</th>
                                    <th class="cell"></th>
                                </tr>
                            </thead>
                            <tbody style="height: 100%; overflow-y: scroll;">
                                @foreach ($messages as $message)
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>{{ $message->id}}</td>
                                        <td>{{ $message->nom }}</td>
                                        <td>{{ $message->prenom }}</td>
                                        <td>{{ $message->objet }}</td>
                                        <td>{{ $message->message }}</td>
                                        <td class="cell">
                                            <div class="d-flex justify-content-start ">
                                            <span   title="Supprimer le produit" style="cursor:pointer ;" >
                                                <form action="{{route('message.destroy', $message->id)}}" method="POST" >
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
