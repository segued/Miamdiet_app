@extends('dashboard.index')

@section('content')
    <div class="col-12">
        <h2 class="page-title">Creation d'un produit</h2>
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <strong class="card-title">Informations</strong>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('produit.store') }}" enctype="multipart/form-data">
                            @csrf
                            @method('POST')

                            <div class="row m-6">
                                <div class="col-md-12">
                                    <label for="categorie">Categorie</label>
                                    <select class="form-select" aria-label="Default select example" name="categorie_id">
                                        <option value="">Sélectionnez une catégorie</option>
                                        @foreach ($categories as $categorie)
                                            <option value="{{ $categorie->id }}">{{ $categorie->libelle }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                    <div class="col-md-4">
                                    <label for="nom" class="form-label"> Nom du Produit</label>
                                    <input type="text" class="form-control" id="nom"
                                        placeholder="Entrer le nom du produit" name="nom">
                                    @error('nom')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label for="prix" class="form-label">Prix</label>
                                    <input type="text" class="form-control" id="prix"
                                        placeholder="Entrer le prix du produit" name="prix">
                                    @error('nom')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>


                                <div class="col-md-4 mb-4" >
                                    <label for="image" class="form-label">Photo</label>
                                    <input type="file" class="form-control" id="image"
                                        placeholder="Entrer l'image du produit" name="image">
                                    @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a comment here" id="description" name="description"
                                        style="height: 100px"></textarea>
                                    <label for="description">Description</label>
                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary mt-3 ">Enregistrer</button>
                        </form>
                    </div> <!-- /. card-body -->
                </div> <!-- /. card -->
            </div> <!-- /. col -->
        </div> <!-- /. end-section -->
    </div> <!-- .col-12 -->
@endsection
