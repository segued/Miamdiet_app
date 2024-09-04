@extends('dashboard.index')

@section('content')

<div class="col-12">
    <h2 class="page-title">Creation d'un Gestionnaire</h2>
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header">
                    <strong class="card-title">Informations</strong>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('gestionnaire.store') }}">
                        @csrf

                        <div class="row m-6">
                                <div class=" col-md-6">
                                    <label for="nom">Nom</label>
                                    <input type="text" class="form-control @error('nom')  is-invalid @enderror" id="nom" name="nom" value="{{ old('nom') }}" placeholder="Entrez le nom du gestionnaire">
                                    @error('nom')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="prenom">Prenom</label>
                                    <input type="text" class="form-control @error('prenom')  is-invalid @enderror" id="prenom" name="prenom" value="{{ old('prenom') }}" placeholder="Entrez le prenom du gestionnaire">
                                    @error('prenom')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control @error('email')  is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="Entrez le email du gestionniare">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="numero">Numero de téléphone</label>
                                    <input type="text" class="form-control @error('numero')  is-invalid @enderror" id="numero" name="numero" value="{{ old('numero') }}" placeholder="Entrez le numero du gestionnaire">
                                    @error('numero')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        <button type="submit" class="btn btn-primary mt-3">Enregistrer</button>
                        
                    </form>
                </div> <!-- /. card-body -->
            </div> <!-- /. card -->
        </div> <!-- /. col -->
    </div> <!-- /. end-section -->
</div> <!-- .col-12 -->
@endsection
