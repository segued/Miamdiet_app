@extends('dashboard.index')

@section('content')
    <div class="col-12">
        <h2 class="page-title">Creation d'un temoignage</h2>
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <strong class="card-title">Informations</strong>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('temoignage.store') }}" enctype="multipart/form-data">
                            @csrf
                            @method('POST')

                            <div class="col-md-4 mb-4" >
                                    <label for="image" class="form-label">Image</label>
                                    <input type="file" class="form-control" id="image"
                                        placeholder="Entrer la image du temoignage" name="image">
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
