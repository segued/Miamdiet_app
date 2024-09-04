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
                                <form action="{{ route('creneau.store') }}" method="post">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="date">Date</label>
                                            <input type="date"
                                                class="form-control @error('date')  is-invalid @enderror"
                                                id="date" name="date" value="{{ old('date') }}">
                                            @error('date')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="statut">Statut</label>
                                            <select id="statut" name="statut"
                                                class="form-control @error('statut') is-invalid @enderror">
                                                <option value=" ">Choisir un statut</option>
                                                <option {{ old('statut') == 'oui' ? 'selected' : '' }} value="oui">Oui
                                                </option>
                                                <option {{ old('statut') == 'non' ? 'selected' : '' }} value="non">Non
                                                </option>
                                            </select>
                                            @error('statut')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <input type="submit" class="btn btn-primary mt-3" value="Enregistrer">
                                </form>
                            </div> <!-- /. card-body -->
                        </div> <!-- /. card -->
                    </div> <!-- /. col -->
                </div> <!-- /. end-section -->
            </div> <!-- /. card -->
        </div> <!-- /. col -->
    </div> <!-- /. end-section -->
</div> <!-- .col-12 -->
@endsection
