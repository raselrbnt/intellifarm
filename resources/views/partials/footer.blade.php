<section class="contactUsSection">
    <!-- This section contains contact information and links to various company categories. -->
    <div class="content-Box1 mb-4">
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
                        @foreach ($socialMediaAccounts as $account)
                            <a href="{{ $account->url }}" class="text-decoration-none" target="_blank">
                                <img class="companyImage1" src="{{ asset($account->icon) }}"
                                    alt="{{ $account->name }}" />
                            </a>
                        @endforeach
                    </div>
                </div>
                <div class="flexRow2">
                    <!-- Row for displaying company categories and links. -->
                    <div class="flexColumn2">
                        <p class="categoryTitle">
                            <!-- Title for the category section. -->
                            Category
                        </p>
                        <a href="#" class="text-decoration-none">
                            <p class="footerCategory">
                                Agriculture
                            </p>
                        </a>
                        <a href="#" class="text-decoration-none">
                            <p class="footerCategory">
                                infrastructure
                            </p>
                        </a>
                        <a href="#" class="text-decoration-none">
                            <p class="footerCategory">Technology</p>
                        </a>
                        <a href="#" class="text-decoration-none">
                            <p class="footerCategory">Education</p>
                        </a>
                    </div>
                    <div class="flexColumn3">
                        <p class="companyText">
                            <!-- Title for the company-related links. -->
                            Company
                        </p>
                        <a href="{{ route('home') }}" class="text-decoration-none">
                            <p class="footerCompany">About</p>
                        </a>
                        <a href="#" class="text-decoration-none">
                            <p class="footerCompany">Product</p>
                        </a>
                        <a href="{{ route('sustainability') }}" class="text-decoration-none">
                            <p class="footerCompany">
                                Sustainability
                            </p>
                        </a>
                        <a href="{{ route('career') }}" class="text-decoration-none">
                            <p class="footerCompany">Career</p>
                        </a>
                    </div>
                    <div class="flexColumn4">
                        <p class="supportLink">Support</p>
                        <a href="{{ route('contact') }}" class="text-decoration-none">
                            <p class="footerSupport">Contact Us</p>
                        </a>
                        <a href="#" class="text-decoration-none">
                            <p class="footerSupport">
                                Support Center
                            </p>
                        </a>
                    </div>
                    <div class="flexColumn5">
                        <p class="legalsLink">Legals</p>
                        <a href="#" class="text-decoration-none">
                            <p class="footerLegal">FAQ</p>
                        </a>
                        <a href="#" class="text-decoration-none">
                            <p class="footerLegal">
                                Privacy Police
                            </p>
                        </a>
                        <a href="#" class="text-decoration-none">
                            <p class="footerLegal">
                                Term &amp; Condition
                            </p>
                        </a>
                    </div>
                </div>
            </div>
            <p class="copyrightNotice">
                <!-- Copyright information for the site. -->
                © {{ date('Y') }} Intellifarm. All rights reserved.
            </p>
        </div>
    </div>
</section>

@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/partials/footer.css') }}" />
@endpush
