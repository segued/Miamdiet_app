<!DOCTYPE html>
<html lang="en">

@include('layout.head')


<body class="goto-here">

    @include('layout.navbar')

    <div class="hero-wrap hero-bread" style="background-image: url({{ asset('miamdiet/images/category-6.jpg') }});">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('accueil') }}">Accueil</a></span></p>
                    <h1 class="mb-0 bread">Contactez-nous</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section contact-section bg-light">
        <div class="container">
            <div class="row d-flex mb-5 contact-info">
                <div class="w-100"></div>
                <div class="col-md-3 d-flex">
                    <div class="info bg-white p-4">
                        <p><span>Adresse:</span> <br>
                            Ouagadougou Patte D'oie</p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="info bg-white p-4">
                        <p><span>Téléphone:</span><br>
                            <a href="tel://1234567920"> +226 75 23 67 19 <br> +226 52 95 35 42 </a>
                        </p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="info bg-white p-4">
                        <p><span>Email:</span> <br>
                            <a href="mailto:contact@miamdiet.com">contact@miamdiet.com</a>
                        </p>
                    </div>
                </div>
                <div class="col-md-3 d-flex">
                    <div class="info bg-white p-4">
                        <p><span>site web: <br>
                            </span> <a href="">miamdiet.com</a></p>
                    </div>
                </div>
            </div>

            <div class="row block-9">
                <div class="col-md-6 order-md-last d-flex">
                    <form action="#" class="bg-white p-5 contact-form">
                        <div class="form-group">
                            <h5 class="text-center">Ecrivez ou contactez nous</h5>
                            <input type="text" class="form-control" placeholder="Votre Nom">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Votre Preom">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Envoyer le  Message" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>

                </div>

                <div class="col-md-6 d-flex">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3897.791540042529!2d-1.5319669254627832!3d12.32981332862503!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xe2ebd70e822b489%3A0x5e1517ef7a89a693!2sMiam%20Diet!5e0!3m2!1sfr!2sbf!4v1722360929723!5m2!1sfr!2sbf"
                        width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </section>

    @include('layout.footer')

    @include('layout.loader')

    @include('layout.script')


</body>

</html>
