<section class="contactUsSection">
    <!-- This section contains contact information and links to various company categories. -->
    <div class="content-Box1">
        <!-- Container for content and visual elements. -->
        <hr class="dividerLine" size="1" />
        <div class="flexColumn1">
            <div class="flexRow">
                <div class="flexColumn11">
                    <p class="followContactText">
                        <!-- Text for following and contacting the company. -->
                        Follow &amp; Contact Us
                    </p>
                    <div class="flex-Row1">
                        <!-- Row for containing images. -->
                        <a href="#" class="text-decoration-none"><img class="companyImage1" src="{{ asset('assets/155bd93fa984ed3a383e63be7bad347e.png') }}"
                            alt="alt text" /></a>
                        <a href="#" class="text-decoration-none"><img class="companyImage2" src="{{ asset('assets/72dc44cac0dffdc22e6e0de8a5752d0b.png') }}"
                            alt="alt text" /></a>
                        <a href="#" class="text-decoration-none"><img class="companyImage3" src="{{ asset('assets/aeb5aa60ade29595c63a901b2deb3572.png') }}"
                            alt="alt text" /></a>
                        <a href="#" class="text-decoration-none"><img class="companyImage4" src="{{ asset('assets/8ee3c1cbaf22d387f3241067cb8118b6.png') }}"
                            alt="alt text" /></a>
                        <a href="#" class="text-decoration-none"><img class="companyImage5" src="{{ asset('assets/7650ee1dcc2bdf1e27be2ba3c78df8d9.png') }}"
                            alt="alt text" /></a>
                    </div>
                </div>
                <div class="flexRow2">
                    <!-- Row for displaying company categories and links. -->
                    <div class="flexColumn2">
                        <p class="categoryTitle">
                            <!-- Title for the category section. -->
                            Category
                        </p>
                        <a href="#" class="text-decoration-none"><p class="footerCategory">
                            Agriculture
                        </p></a>
                        <a href="#" class="text-decoration-none"><p class="footerCategory">
                            infrastructure
                        </p></a>
                        <a href="#" class="text-decoration-none"><p class="footerCategory">Technology</p></a>
                        <a href="#" class="text-decoration-none"><p class="footerCategory">Education</p></a>
                    </div>
                    <div class="flexColumn3">
                        <p class="companyText">
                            <!-- Title for the company-related links. -->
                            Company
                        </p>
                        <a href="{{ route('home') }}" class="text-decoration-none"><p class="footerCompany">About</p></a>
                        <a href="#" class="text-decoration-none"><p class="footerCompany">Product</p></a>
                        <a href="{{ route('sustainability') }}" class="text-decoration-none"><p class="footerCompany">
                            Sustainability
                        </p></a>
                        <a href="{{ route('career') }}" class="text-decoration-none"><p class="footerCompany">Career</p></a>
                    </div>
                    <div class="flexColumn4">
                        <p class="supportLink">Support</p>
                        <a href="{{ route ('contact') }}" class="text-decoration-none"><p class="footerSupport">Contact Us</p></a>
                        <a href="#" class="text-decoration-none"><p class="footerSupport">
                            Support Center
                        </p></a>
                    </div>
                    <div class="flexColumn5">
                        <p class="legalsLink">Legals</p>
                        <a href="#" class="text-decoration-none"><p class="footerLegal">FAQ</p></a>
                        <a href="#" class="text-decoration-none"><p class="footerLegal">
                            Privacy Police
                        </p></a>
                        <a href="#" class="text-decoration-none"><p class="footerLegal">
                            Term &amp; Condition
                        </p></a>
                    </div>
                </div>
            </div>
            <p class="copyrightNotice">
                <!-- Copyright information for the site. -->
                © 2024 FarmHUB. All rights reserved.
            </p>
        </div>
    </div>
    <div class="contentBox11">
        <!-- Container for the cookie consent message and action buttons. -->
        <div class="flex-Row3">
            <!-- Row for the cookie consent message. -->
            <p class="cookieConsentMessage">
                <!-- Message informing users about cookies. -->
                We use cookies to improve website performance and
                ensure you get the best experience.
            </p>
            <div class="flex-Row4">
                <!-- Container for action buttons related to cookie consent. -->
                <a href="#" class="text-decoration-none">
                    <button class="customizeButton">
                        <!-- TODO -->
                        CUSTOMIZE
                    </button>
                </a>
                <a href="#" class="text-decoration-none">
                    <button class="acceptButton">
                        <!-- TODO -->
                        ACCEPT
                    </button>
                </a>
            </div>
        </div>
    </div>
</section>

@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/footer.css') }}" />
@endpush
