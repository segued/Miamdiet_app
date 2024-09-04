@extends('dashboard.index')

@section('content')
    <div class="col-12">
        <h2 class="page-title">Creation d'un livre</h2>
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <strong class="card-title">Informations</strong>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('book.store') }}" method="post"  enctype="multipart/form-data">
                            @csrf
                            @method('POST')

                            <div class="row m-6">
                                <div class="col-md-4">
                                    <label for="titre" class="form-label"> Titre</label>
                                    <input type="text" class="form-control" id="titre"
                                        placeholder="Entrer le titre du produit" name="titre">
                                    @error('titre')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-4">
                                    <label for="prix" class="form-label">Prix</label>
                                    <input type="text" class="form-control" id="prix"
                                        placeholder="Entrer le prix du produit" name="prix">
                                    @error('prix')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-4 mb-4">
                                    <label for="image" class="form-label">Image</label>
                                    <input type="file" class="form-control" id="image"
                                        placeholder="Entrer la image du produit" name="image">
                                    @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="description du livre" id="description" name="description"
                                        style="height: 100px"></textarea>
                                    <label for="description">Description</label>
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
