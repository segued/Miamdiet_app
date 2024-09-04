@extends('dashboard.index')

@section('content')

<div class="col-12">
    <h2 class="page-title">Information sur un gestionnaire</h2>
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header">
                    <strong class="card-title">Informations</strong>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('category.store') }}">
                        @csrf

                        {{-- <div class="row">
                            <div class="form-row col-lg-6">
                                <div class="form-group col-md-12">
                                    <label for="libelle">Libelle</label>
                                    <input type="text" class="form-control @error('libelle')  is-invalid @enderror" id="libelle" name="libelle" value="{{ old('nom', $categorie->libelle) }}" placeholder="Entrez le libelle de la categorie" readonly>
                                    @error('libelle')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <a href="{{route('category.index')}}" class="btn btn-danger mt-2">Retour</a>
                                </div>
                            </div>
                        </div> --}}


                        <div class="row m-6">
                            <div class=" col-md-6">
                                <label for="nom">Nom</label>
                                <input type="text" class="form-control @error('nom')  is-invalid @enderror" id="nom" name="nom" value="{{ old('nom', $gestionnaire->nom) }}" placeholder="Entrez le nom du gestionnaire">
                                @error('nom')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="prenom">Prenom</label>
                                <input type="text" class="form-control @error('prenom')  is-invalid @enderror" id="prenom" name="prenom" value="{{ old('prenom', $gestionnaire->prenom) }}" placeholder="Entrez le prenom du gestionnaire">
                                @error('prenom')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="email">Email</label>
                                <input type="email" class="form-control @error('email')  is-invalid @enderror" id="email" name="email" value="{{ old('email', $gestionnaire->email) }}" placeholder="Entrez le email du gestionniare">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="numero">Numero de téléphone</label>
                                <input type="text" class="form-control @error('numero')  is-invalid @enderror" id="numero" name="numero" value="{{ old('numero', $gestionnaire->numero) }}" placeholder="Entrez le numero du gestionnaire">
                                @error('numero')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                            <a href="{{route('gestionnaire.index')}}" class="btn btn-primary mt-3">Retour</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
