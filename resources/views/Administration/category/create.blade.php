@extends('dashboard.index')

@section('content')

<div class="col-12">
    <h2 class="page-title">Creation d'une categorie</h2>
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
                                    <input type="text" class="form-control @error('libelle')  is-invalid @enderror" id="libelle" name="libelle" value="{{ old('libelle') }}" placeholder="Entrez le libelle de la categorie">
                                    @error('libelle')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
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
