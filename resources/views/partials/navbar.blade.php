<section class="aboutUsSection">
    <!-- This section provides an overview of the company, its products, sustainability efforts, and career opportunities. -->
    <div class="flexRowContainer">
        <!-- Container for the main flex rows in the about us section. -->
        <div class="flexRowTop">
            <!-- Top row containing image and navigation options. -->
            <img class="companyLogoImg" src="{{ asset('assets/43fa406488b93e476db137757b3e31be.png') }}" alt="alt text"
                onclick="window.open('{{ url('/') }}', '_self')" />
            <div class="flexRowNav">
                <!-- Navigation items related to the company. -->
                <p class="aboutText" onclick="window.open('{{ url('/') }}', '_self')">
                    <!-- Text indicating the &#x27;About&#x27; section. -->
                    ABOUT
                </p>
                <p class="productText" onclick="window.open('{{ url('/product') }}', '_self')">
                    <!-- Text indicating the &#x27;Product&#x27; section. -->
                    PRODUCT
                </p>
                <p class="sustainabilityText" onclick="window.open('{{ url('/sustainability') }}', '_self')">
                    <!-- Button to learn more about sustainability efforts. -->
                    SUSTAINBILITY
                </p>
                <p class="careerText" onclick="window.open('{{ url('/career') }}', '_self')">
                    <!-- Text indicating the &#x27;Career&#x27; section. -->
                    CAREER
                </p>
            </div>
        </div>
        <div class="flexRowBottom">
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
        </div>
    </div>
</section>
