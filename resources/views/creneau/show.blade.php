@extends('dashboard.index')

@section('content')

<div class="col-12">
    <h2 class="page-title">voir une categorie</h2>
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header">
                    <strong class="card-title">Informations</strong>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('category.store') }}">
                        @csrf

                        <div class="row">
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
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
