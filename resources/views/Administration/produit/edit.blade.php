@extends('dashboard.index')

@section('content')

<div class="col-12">
    <h2 class="page-title">Modifier un produit</h2>
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header">
                    <strong class="card-title">Informations</strong>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('produit.update', $produit->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row m-6" >
                            <div class="col-md-6">

                                <input type="hidden" value="$produit->id" name="id" class="d-none">

                                <label for="categorie">Categorie</label>
                                <select class="form-select" aria-label="Default select example" name="categorie_id">
                                    <option value="">Sélectionnez une catégorie</option>

                                    @foreach($categories as $categorie)
                                        <option value="{{ $categorie->id }}">{{ $categorie->libelle }}</option>
                                    @endforeach
                                </select>

                                <label for="nom" class="form-label">Nom du Produit</label>
                                <input type="text" class="form-control" id="nom" placeholder="Entrer le nom du produit" name="nom" value="{{ old('nom', $produit->nom) }}">
                                @error('nom')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                              <div class="col-md-6">
                                <label for="prix" class="form-label">Prix</label>
                                <input type="text" class="form-control" id="prix" placeholder="Entrer le prix du produit" name="prix" value="{{old('prix', $produit->prix)}}">
                                @error('nom')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="description" class="form-label">Description</label>
                                    <input type="text" class="form-control" id="description" placeholder="Entrer la description du produit"  aria-describedby="inputGroupPrepend2" name="description" value="{{old('description', $produit->description)}}">
                                @error('nom')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="photo" class="form-label">Photo</label>
                                <input type="file" class="form-control" id="photo" placeholder="Entrer la photo du produit" name="photo" value="{{ old('photo', $produit->photo) }}">                                @error('nom')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3 ">Modifier</button>
                        <a href="{{route('produit.index')}}" class="btn btn-danger mt-3">Retour</a>

                    </form>
                </div> <!-- /. card-body -->
            </div> <!-- /. card -->
        </div> <!-- /. col -->
    </div> <!-- /. end-section -->
</div> <!-- .col-12 -->



@endsection
