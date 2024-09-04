@include('layout.script')
<section class="google-maps">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3527.2983337624437!2d-1.5319669254627577!3d12.32981332862503!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xe2ebd70e822b489%3A0x5e1517ef7a89a693!2sMiam%20Diet!5e1!3m2!1sfr!2sbf!4v1722594563148!5m2!1sfr!2sbf"
        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

<footer class="ftco-footer ftco-section">
    <div class="container">
        <div class="row">
            <div class="mouse">
                <a href="#" class="mouse-icon">
                    <div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
                </a>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2"><strong>Miamdiet</strong></h2>
                    <p>Pour les sportifs soucieux de leur performance,<br>
                        nos packs de restauration fournissent <br>
                        une alimentation optimale pour la récupération et la croissance musculaire.</p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                        <li class="ftco-animate">
                            <a href="https://www.facebook.com/MiamDiet.bf?mibextid=ZbWKwL">
                                <span class="icon-facebook">
                                </span>
                            </a>
                        </li>
                        <li class="ftco-animate">
                            <a href="https://www.tiktok.com/@miamdietbf?_t=8o5zh0yBZ3O&_r=1">
                                <span class="icon-tiktok">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">
                                        <path
                                            d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z" />
                                    </svg>
                                </span>
                            </a>
                        </li>
                        <li class="ftco-animate"><a
                                href="https://www.instagram.com/miamdiet.bf?igsh=MWRlN2V5YWYzcnp3bg=="><span
                                    class="icon-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4 ml-md-5">
                    <h2 class="ftco-heading-2"><strong>Menu</strong></h2>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('shop') }}" class="py-2 d-block">Boutique</a></li>
                        <li><a href="{{ route('blog') }}" class="py-2 d-block">Blog</a></li>
                        <li><a href="{{ route('contact') }}" class="py-2 d-block">Contactez-nous</a></li>
                    </ul>
                </div>
            </div>

            {{-- <div class="col-md-4">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2"><strong>Aide</strong></h2>
                    <div class="d-flex">
                        <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
                            <li><a href="#" class="py-2 d-block">Shipping Information</a></li>
                            <li><a href="#" class="py-2 d-block">Returns &amp; Exchange</a></li>
                            <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
                            <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div> --}}

            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2"><strong>Contacts</strong></h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon icon-map-marker"></span><span class="text">Ouagadougou, Patte
                                    D'oie</span></li>
                            <li><a href="tel:+22675236718"><span class="icon icon-phone"></span><span
                                        class="text">+226 75 23 67 18</span></a></li>
                            <li><a href="tel:+22652953542"><span class="icon icon-phone"></span><span
                                        class="text">+226 52 95 35 42</span></a></li>
                            <li><a href="mailto:contact@miamdiet.com"><span class="icon icon-envelope"></span><span
                                        class="text">contact@miamdiet.com</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

        </div>
    </div>
</footer>
