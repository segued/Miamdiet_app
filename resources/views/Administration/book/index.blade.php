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
{{--
    <div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert">
        <div class="inner">
            <div class="app-card-body p-3 p-lg-4">
                <h2 class="mb-3">Liste des Livres</h2>
                <div class="row gx-5 gy-3">
                    <div class="col-12 col-lg-9">
                        <div>
                            Portal is a free Bootstrap 5 admin dashboard template. The
                            design is simple, clean and modular so it's a great base
                            for building any modern web app.
                        </div>
                    </div>
                    <!--//col-->
                    <div class="col-12 col-lg-3">
                        <a class="btn app-btn-primary"  href="{{ route('book.create') }}"
                            href="https://themes.3rdwavemedia.com/bootstrap-templates/admin-dashboard/portal-free-bootstrap-admin-dashboard-template-for-developers/">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                            class="bi bi-plus" viewBox="0 0 16 16">
                            <path
                                d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                        </svg>Ajouter un livre</a>
                    </div>
                    <!--//col-->
                </div>
                <!--//row-->
            </div>
            <!--//app-card-body-->
        </div>
        <!--//inner-->
    </div> --}}

    <!--//app-card-->



    <div class="container mb-4" style="background-color: #28a745; padding: 20px; border-radius: 5px;">
        <div class="row">
            <div class="col-6">
                <h1 class="mb-2 page-title" style="color: white;">Liste des Livres</h1>
            </div>
            <div class="col-6 text-end">
                <a class="btn btn-primary text-white mb-3" href="{{ route('book.create') }}"
                    style="margin-top: 10px; background-color: transparent;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                        class="bi bi-plus" viewBox="0 0 16 16">
                        <path
                            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                    </svg> Ajouter un livre
                </a>
            </div>
        </div>
    </div>




    <div class="tab-content" id="orders-table-tab-content">
        <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
            <div class="app-card app-card-orders-table shadow-sm mb-5">
                <div class="app-card-body">
                    <div class="table-responsive">
                        <table class="table datatables" id="dataTable-1">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>#</th>
                                    <th>Titre</th>
                                    <th>Description</th>
                                    <th>Prix</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (!empty($livres))
                                    @foreach ($livres as $livre)
                                        <tr>
                                            <td></td>
                                            <td>{{ $livre->id }}</td>
                                            <td>{{ $livre->titre }}</td>
                                            <td>{{ $livre->description }}</td>
                                            <td>{{ $livre->prix }}</td>
                                            <td class="cell">
                                                <div class="d-flex justify-content-start ">
                                                    <a href="{{ route('book.edit', $livre->id) }}" title="Modifier le livre"
                                                        class="mx-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor"
                                                            class="bi bi-pencil-square text-warning" viewBox="0 0 16 16">
                                                            <path
                                                                d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                            <path fill-rule="evenodd"
                                                                d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                                        </svg>
                                                    </a>
                                                    <span title="Supprimer le livre" style="cursor:pointer ;">
                                                        <form action="{{ route('book.destroy', $livre->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('delete')
                                                            <a id="confirmation" class="mx-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" fill="currentColor"
                                                                    class="bi bi-trash-fill text-danger"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0" />
                                                                </svg>
                                                            </a>
                                                        </form>
                                                    </span>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        document.querySelectorAll("#confirmation").forEach((button) => {
            button.addEventListener("click", function(e) {
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
