@include('layout.head')

<body class="goto-here">
    @if ($mesg = Session::get('success'))
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-right',
                iconColor: 'white',
                customClass: {
                    popup: 'colored-toast',
                },
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
            })
            Toast.fire({
                icon: 'success',
                title: '{{ $mesg }}',
            })
        </script>
    @endif

    @include('layout.navbar')

    <div class="hero-wrap hero-bread" style="background-image: url({{ asset('miamdiet/images/category-13.jpg') }});">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('shop') }}">Accueil</a></span></p>
                    <h1 class="mb-0 bread">Les services de consultation Miamdiet</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 ftco-animate">

                    <form action="{{ route('rdv.store') }}" class="billing-form" method="post">
                        @csrf
                        @method('POST')
                        <div class="row align-items-end">
                            <div class="col-md-6">
                            </div>
                            <div class="w-100"></div>
                            <div class="col-md-12">
                                <input type="hidden" name="creneau_id" value="{{ $creneau_id }}">
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="firstname">Nom</label>
                                            <input type="text" class="form-control"
                                                placeholder="Veuillez renseigner votre nom" value="{{ $user->nom }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="lastname">Prénom</label>
                                            <input type="text" class="form-control"
                                                placeholder="Veuillez renseigner votre prénom"
                                                value="{{ $user->prenom }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="ville">ville</label>
                                    <input type="text" class="form-control" placeholder="Entrer votre ville actulle"
                                        id="ville" name="ville">

                                </div>
                                <div class="form-group">
                                    <label for="heure">Choisir une heure</label>
                                    <div class="select-wrap">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select name="heure" id="heure" class="form-control">
                                            <option value="">Selectionner une heure</option>
                                            <option value="09:00">09:00</option>
                                            <option value="10:00">10:00</option>
                                            <option value="11:00">11:00</option>
                                            <option value="12:00">12:00</option>
                                            <option value="13:00">13:00</option>
                                            <option value="14:00">14:00</option>
                                            <option value="15:00">15:00</option>
                                            <option value="16:00">16:00</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="adress">Adress</label>
                                    <input id="adress" name="adress" type="text" class="form-control"
                                        placeholder="Votre adresse d'habitation ou quartier de residence">
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">Numéro de téléphone</label>
                                    <input id="phone" name="phone" type="text" class="form-control"
                                        placeholder="xxxxxxxxxxxx" value="{{ $user->numero }}">
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" placeholder="commentaire" id="description" name="description" style="height: 100px"></textarea>
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-md-12">
                                <div class="form-group mt-4">
                                    <button type="submit" class="btn btn-primary">Envoyer</button>
                                </div>
                            </div>
                        </div>
                    </form><!-- END -->
                </div>
                <div class="col-xl-5">
                    <div class="row mt-5 pt-3">
                        <div class="col-md-12">
                            <div class="cart-detail p-3 p-md-4">
                                <h3 class="billing-heading mb-4">
                                    <strong> choisir un mode de paiment</strong>
                                </h3>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div class="radio">
                                            <label><input type="radio" name="om" id="om"
                                                    class="mr-2">
                                                Orange Money</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div class="radio">
                                            <label><input type="radio" name="mm" id="mm"
                                                    class="mr-2">
                                                Moov Money</label>
                                        </div>
                                    </div>
                                </div>
                                <p><a href="#"class="btn btn-primary py-3 px-4">Effectuer le payment</a></p>
                            </div>
                        </div>
                    </div>
                </div> <!-- .col-md-8 -->
            </div>
        </div>
    </section> <!-- .section -->

    {{-- <section>
        <p>{{$user->nom}}</p>
        <p>{{$user->email}}</p>
        <p>{{$user->nom}}</p>
    </section> --}}

    @include('layout.inscription')

    @include('layout.footer')


    @include('layout.loader')


    @include('layout.script')

</body>

</html>
