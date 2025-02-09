<section class="aboutUsSection">
    <!-- This section provides an overview of the company, its products, sustainability efforts, and career opportunities. -->
    <div class="flexRowContainer">
        <!-- Container for the main flex rows in the about us section. -->
        <div class="flexRowTop">
            @include('partials/navbar-items')
        </div>

        {{-- <div class="flexRowBottom">
            <!-- Bottom row containing additional content and images. -->
            <div class="contentBoxContainer">
                <!-- Container for content boxes in the bottom row. -->
                <div class="contentBox">
                    <!-- Inner content box for displaying an image. -->
                    <img class="searchIconImg" src="{{ asset('assets/6b38b525dbbc2d0e3c79a02e480e2e96.png') }}"
                        alt="alt text" />
                </div>
                <p class="searchText_box">
                    <!-- Text prompting the search functionality. -->
                    <input type="text" class="searchText" placeholder="Search" />
                </p>
            </div>
            <img class="additionalImage" src="{{ asset('assets/302958ef4a6811348969a2badbfad7ac.svg') }}"
                alt="alt text" />
        </div> --}}
    </div>
</section>

@push('styles')
    <link rel="stylesheet" type="text/css " href="{{ asset('css/navbar.css') }}" />
@endpush
