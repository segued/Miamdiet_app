@extends('dashboard.index')

@section('content')
    <div class="col-12">
        <h2 class="page-title">Modifier un livre</h2>
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <strong class="card-title">Informations</strong>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('book.update', $livre->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="row m-6">
                                <div class="col-md-4">

                                    <input type="hidden" value="$livre->id" name="id" class="d-none">


                                    <label for="titre" class="form-label"> Titre</label>
                                    <input type="text" class="form-control" id="titre"
                                        placeholder="Entrer le titre du produit" name="titre"  value="{{ old('titre', $livre->titre) }}">
                                    @error('titre')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-4">
                                    <label for="prix" class="form-label">Prix</label>
                                    <input type="text" class="form-control" id="prix"
                                        placeholder="Entrer le prix du produit" name="prix" value="{{ old('prix', $livre->prix) }}" >
                                    @error('prix')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>


                                <div class="col-md-4 mb-4">
                                    <label for="image" class="form-label">Image</label>
                                    <input type="file" class="form-control" id="image"
                                        placeholder="Entrer la image du produit" name="image" value="{{ old('image', $livre->image) }}">
                                    @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-floating">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" placeholder="Leave a comment here" id="description" name="description"
                                        style="height: 100px"></textarea value="{{ old('description', $livre->description) }}">
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
