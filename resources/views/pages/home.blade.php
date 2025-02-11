@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <section class="smartAgricultureSection">
        <!-- Section showcasing smart agriculture technology. -->
        <div class="showcaseBannerDiv"
            style="
                        --src: url('{{ asset('assets/182d876d972de1a3e8c05fd7f1ca0120.png') }}');
                    ">
            <!-- Banner displaying the main showcase image and content. -->
            <img class="showcaseImageFig" src="{{ asset('assets/ccad6907c434c714f0ed0cb116db9c0f.svg') }}" alt="alt text" />
            <!-- Image representing the main showcase. -->
            <div class="showcaseFlexContainerDiv">
                <!-- Flex container for the showcase elements. -->
                <div class="showcaseRowContainerDiv">
                    <!-- Row container for showcasing different elements. -->
                    <div class="showcaseSubRowDiv">
                        @include('partials/navbar-items')
                    </div>

                    {{-- TODO: Next feature --}}
                    {{-- <div class="flexRowBottom">
                        <!-- Bottom row containing additional content and images. -->
                        <div class="contentBoxContainer">
                            <!-- Container for content boxes in the bottom row. -->
                            <div class="contentBox">
                                <!-- Inner content box for displaying an image. -->
                                <img class="searchIconImg" src="{{ asset('assets/65ef51ababa7d8ec637a5ee78663d61c.png') }}"
                                    alt="alt text" />
                            </div>
                            <p class="searchText_box">
                                <!-- Text prompting the search functionality. -->
                                <input type="text" class="searchText" placeholder="Search" />
                            </p>
                        </div>
                        <img class="additionalImage" src="{{ asset('assets/1e3e16227d24975d44b22e341c50035e.svg') }}"
                            alt="alt text" />
                    </div> --}}
                </div>

                <div class="showcaseRowHeaderDiv">
                    <!-- Header row for the showcase section. -->
                    <div class="heroTitleContainerDiv">
                        <!-- Container for the hero title and rating. -->
                        <h1 class="heroTitleH1_box">
                            <!-- Main title for the showcase. -->
                            <span class="heroTitleH1">
                                <span class="heroTitleH1_span0">SMART AGRICULTURE
                                </span>
                                <span class="heroTitleH1_span1">TECHNOLOGY</span>
                            </span>
                        </h1>
                        <div class="ratingContainerDiv">
                            <!-- Container for displaying ratings. -->
                            <div class="flexRowDiv">
                                <!-- Flex row container for rating scores. -->
                                <h2 class="ratingScoreH2">
                                    <!-- Rating score displayed for the showcase. -->
                                    {{ $report->best_review ?? 0 }}
                                </h2>
                                <div class="ratingCommentDiv">
                                    <!-- Container for the rating comment. -->
                                    <p class="bestReviewLabelP">
                                        <!-- Label for best review. -->
                                        Best Review
                                    </p>
                                </div>
                                <h2 class="additionalRatingScoreH2">
                                    With
                                </h2>
                            </div>
                            <div class="clientsContainerDiv">
                                <!-- Container for displaying clients and contact button. -->
                                <div class="clientsCountContainerDiv">
                                    <!-- Container showing the number of clients. -->
                                    <h1 class="clientsTitleH1_box">
                                        <!-- Title for the client count section. -->
                                        <span class="clientsTitleH1">
                                            <span class="clientsTitleH1_span0">OUR
                                            </span>
                                            <span class="clientsTitleH1_span1">
                                                {{ $report->total_clients ?? 0 }}
                                                <br />
                                            </span>
                                            <span class="clientsTitleH1_span2">Clients</span>
                                        </span>
                                    </h1>
                                    <hr class="separatorLineHR" size="1" />
                                    <a href="{{ route('contact') }}" class="text-decoration-none">
                                        <button class="contactUsBtn">
                                            <!-- Button to contact for more information. -->
                                            <div class="contactUsBtnTextDiv">
                                                Contact Us
                                            </div>
                                            <img class="contactUsBtnIconImg"
                                                src="{{ asset('assets/9e2f256a748bb3e9be50c1dae6c41687.png') }}"
                                                alt="alt text" />
                                            <!-- Icon for the contact us button. -->
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="upcomingEventsContainerDiv">
                        <!-- Container for upcoming events. -->
                        <div class="eventImageContainerDiv">
                            <!-- Container for displaying event image and title. -->
                            <img class="eventImageFig" src="{{ asset('assets/0605094ec1cc8446922062c12e4023df.png') }}"
                                alt="alt text" />
                            <!-- Image related to the event. -->
                            <h1 class="yearTitleH1">
                                <!-- Title displaying the year of the event. -->
                                {{ date('Y') }}
                            </h1>
                        </div>
                        <div class="farmHubInfoContainerDiv">
                            <!-- Container for displaying farm hub information. -->
                            <h1 class="farmHubTitleH1">
                                <!-- Title for the Intellifarm section. -->
                                Intellifarm Indonesia
                            </h1>
                            <p class="farmHubDescriptionP">
                                <!-- Description of Intellifarm. -->
                                Committed to creating an advanced,
                                efficient, and sustainable agricultural
                                ecosystem through technology and
                                innovation. We provide innovative
                                farming solutions for the benefit of
                                farmers, consumers, and the environment,
                                building a greener future.
                            </p>
                            <button class="getTheAppBtn" id="downloadButton">
                                <!-- Button to download the app. -->
                                <p class="getTheAppBtnTextP">
                                    <!-- Text label for the download app button. -->
                                    Get The App
                                </p>
                                <img class="getTheAppBtnIconImg"
                                    src="{{ asset('assets/506480ea8306935f112181e1dcc5e4a6.png') }}" alt="alt text" />
                                <!-- Icon for the get the app button. -->
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="farmIntroductionSection mb-5">
        <!-- Section introducing the Intellifarm application and its benefits for farmers. -->
        <div class="flex_row">
            <div class="flex-row1">
                <h3 class="featuresSubtitle">
                    <!-- Subtitle indicating the section for Intellifarm features. -->
                    01
                </h3>
                <div class="flex_col">
                    <h1 class="introductionTitle">
                        <!-- Main title for the introduction of the Intellifarm application. -->
                        Let Us Introduce
                    </h1>
                    <p class="applicationOverview">
                        <!-- Paragraph describing the Intellifarm application and its key features. -->
                        Intellifarm is an innovative application that
                        utilizes the latest Internet of Things (IoT)
                        technology to transform farm management,
                        designed specifically for modern farmers. With
                        Intellifarm, farmers can easily manage all their
                        farming operations, such as monitoring soil
                        moisture, temperature, and weather conditions,
                        all from the app. Intellifarm makes farms more
                        efficient and productive! This application is
                        also very helpful for eco-friendly farming by
                        conserving water and fertilizers.
                    </p>
                    <p class="iotContribution">
                        <!-- Paragraph outlining how IoT technology contributes to farming efficiency. -->
                        Through its IoT technology, Intellifarm contributes
                        to improving crop quality and operational
                        efficiency, making it an essential tool for
                        today&#x27;s farmers. The Intellifarm application
                        aims to explore smart farming technology to make
                        farming and plantations in Indonesia more
                        efficient and productive. This smart farming
                        technology uses sensors, IoT devices, data
                        analysis, and artificial intelligence (AI) to
                        help manage all aspects of farming more
                        intelligently and modernly.
                    </p>
                    <p class="dataDrivenFarming">
                        <!-- Paragraph explaining how data analysis improves farming decisions. -->
                        Intellifarm&#x27;s smart farming technology also
                        helps farmers make informed decisions based on
                        data. With advanced data analysis, farmers can
                        better understand plant growth trends, water
                        needs, and soil conditions. The result? Resource
                        savings, reduced waste, and more sustainable
                        farming practices.
                    </p>
                </div>
            </div>
            <div class="flex_col1">
                <div class="flex_row2">
                    <h1 class="featuresTitle">
                        <!-- Title for the features section of the Intellifarm application. -->
                        Features
                    </h1>
                    <div class="flex_row3">
                        <img class="featureImage1" src="{{ asset('assets/7a117eef5954fd299d6bfa8577532d92.png') }}"
                            alt="alt text" />
                        <img class="featureImage2" src="{{ asset('assets/7ee116cf54c081cb51056d7be3588e8e.png') }}"
                            alt="alt text" />
                    </div>
                </div>
                <div class="flex_row4">
                    <div class="flex_col2">
                        <button class="iotButton">
                            <!-- Button to learn more about Internet of Things features. -->
                            Internet Of Things
                        </button>
                        <button class="aiButton">
                            <!-- Button to learn more about Artificial Intelligence features. -->
                            Artificial intelligence
                        </button>
                        <button class="sensorTechnologyButton">
                            <!-- Button to learn more about Sensor Technology features. -->
                            Sensor Technology
                        </button>
                        <button class="irrigationButton">
                            <!-- Button to learn more about Irrigation System. -->
                            Irrigation System
                        </button>
                        <button class="dataAnalysisButton">
                            <!-- Button to learn more about Data Analysis features. -->
                            Data Analysis
                        </button>
                    </div>
                    <div class="flex_row5">
                        <figure class="featureHighlightImage"></figure>
                        <div class="content_box2" style="--src: url('{{ asset('assets/Union.svg') }}')">
                            <div class="content_box1">
                                <div class="group">
                                    <div class="featureHighlightNum"></div>
                                    <!-- Highlight number for the feature display. -->
                                    <div class="flex_row6">
                                        <img class="image14"
                                            src="{{ asset('assets/39dcec430208737b79ac2a969cccb44a.png') }}"
                                            alt="alt text" />
                                        <img class="image11"
                                            src="{{ asset('assets/b3a83ec9d98a942ece96b0e2eeeb9d2e.png') }}"
                                            alt="alt text" />
                                        <img class="image141"
                                            src="{{ asset('assets/39dcec430208737b79ac2a969cccb44a.png') }}"
                                            alt="alt text" />
                                    </div>
                                </div>
                                <div class="flex_col3">
                                    <div class="flex_row7">
                                        <img class="image30"
                                            src="{{ asset('assets/c3971b7ab0af529ff4fb25989ae49331.png') }}"
                                            alt="alt text" />
                                        <div class="info">02</div>
                                    </div>
                                    <hr class="sectionDivider" size="1" />
                                    <!-- Horizontal line to separate content segments. -->
                                </div>
                                <p class="aiOptimizationDescription">
                                    <!-- Description of how AI optimizes farming practices. -->
                                    Intellifarm leverages AI to predict crop
                                    needs based on collected data. AI
                                    helps in optimizing resource use,
                                    increasing crop yields and ensuring
                                    sustainable farming practices.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if (count($teams))
        <section class="meetTheTeamSection">
            <!-- Main section to introduce team members and provide a contact form. -->
            <div class="flexContainer">
                <!-- Flex container for arranging team content. -->
                <div class="teamOverviewColumn">
                    <!-- Column for the main team overview. -->
                    <div class="teamHeaderRow">
                        <!-- Row containing the &#x27;Meet The Team&#x27; main heading and subtitle. -->
                        <div class="heroContentRow">
                            <!-- Row for hero title and images. -->
                            <img class="teamImage" src="{{ asset('assets/43233b275bb5d90bccc0d14a9813ed42.png') }}"
                                alt="alt text" />
                            <h1 class="heroTitle">
                                <!-- Main title for the team section. -->
                                Our  Team
                            </h1>
                        </div>
                        <h3 class="sectionSubtitle">
                            <!-- Subtitle for the team section. -->
                            02
                        </h3>
                    </div>
                    <div class="teamMemberRow">
                        <!-- Row containing team members and their details. -->
                        <div class="teamImagesColumn">
                            <!-- Column containing team images. -->
                            <div class="imageGalleryRow">
                                <!-- Row for displaying images of team members. -->
                                <img class="memberImage1"
                                    src="{{ asset('assets/cb4e08cee3d1794afe3b6b267380dfee.png') }}" alt="member-img1"
                                    onclick="selectImage(this, '{{ asset('assets/cb4e08cee3d1794afe3b6b267380dfee.png') }}', 'Orang 1', 'Leader')" />
                                <img class="memberImage2"
                                    src="{{ asset('assets/3a8b79939f00c09c608dc39296a19b20.png') }}" alt="alt text"
                                    onclick="selectImage(this, '{{ asset('assets/3a8b79939f00c09c608dc39296a19b20.png') }}', 'Orang 2', 'Co-Leader')" />
                                <img class="memberImage3"
                                    src="{{ asset('assets/fbcf7565f85696cc569636a81786c61f.png') }}" alt="alt text"
                                    onclick="selectImage(this, '{{ asset('assets/fbcf7565f85696cc569636a81786c61f.png') }}', 'Orang 2', 'Assistant')" />
                                <img class="memberImage4"
                                    src="{{ asset('assets/6ee876c665651b2a8f2489cf75a21d4f.png') }}" alt="alt text"
                                    onclick="selectImage(this, '{{ asset('assets/6ee876c665651b2a8f2489cf75a21d4f.png') }}', 'Orang 2', 'Co-Assistant')" />
                            </div>

                            <div class="contactFormBox"
                                style="
                                        --src: url('{{ asset('assets/cb26cb916d47bd0a57ddeda8d6a0c941.png') }}');
                                        ">
                                <!-- Box containing the contact form for sending messages. -->
                                <div class="contactFormRow">
                                    <!-- Row for the contact form elements. -->
                                    <h3 class="contactFormTitle">
                                        <!-- Title for the contact form. -->
                                        send massage
                                    </h3>
                                    <div class="contactInputBox">
                                        <!-- Box for the contact form input and button. -->
                                        <p class="contactInputLabel_box">
                                            <!-- Label for input field in the contact form. -->
                                            <input type="text" class="contactInputLabel" placeholder="Type" />
                                        </p>
                                        <button class="sendButton">
                                            <!-- Button to send the message from the contact form. -->
                                            Send
                                        </button>
                                    </div>
                                </div>
                                <div class="teamMembersColumn">
                                    <!-- Column containing individual team member details. -->
                                    <div class="individualMemberImageColumn">
                                        <!-- Column for a team member&#x27;s image. -->
                                        <img id="mainImage" class="individualMemberImage"
                                            src="{{ asset('assets/434bd661506628de1d7108a43c7945c3.png') }}"
                                            alt="alt text" />
                                        <div class="memberDetailsColumn">
                                            <!-- Column for displaying team member details. -->
                                            <h3 id="mainTitle" class="memberName">
                                                <!-- Name of the team member. -->
                                                Richard Sean
                                            </h3>
                                            <p id="mainPosition" class="memberPosition">
                                                <!-- Position of the team member. -->
                                                ( President Commissioner )
                                            </p>
                                        </div>
                                    </div>
                                    <div class="additionalImagesContainer">
                                        <!-- Container for additional images of team members. -->
                                        <div class="additionalImagesRow">
                                            <!-- Row for displaying additional team member images. -->
                                            <img class="additionalImage1"
                                                src="{{ asset('assets/9219bb42433fb7b3e1cb1f9e89d64dcc.png') }}"
                                                alt="alt text" />
                                            <img class="additionalImage2"
                                                src="{{ asset('assets/61f864c946f7d38125947b8b8daccad6.png') }}"
                                                alt="alt text" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="teamQuoteRow">
                            <!-- Row containing the motivational quote and join button. -->
                            <div class="quoteColumn">
                                <!-- Column containing the quote content. -->
                                <img class="quoteImage" src="{{ asset('assets/8308732b423b578053460bbdd052c506.png') }}"
                                    alt="alt text" />
                                <p class="quoteText">
                                    <!-- Inspirational quote about sustainability. -->
                                    “ We are not only working for today but
                                    for a better future. Sustainability is
                                    our commitment to the Earth and future
                                    generations. “
                                </p>
                                <div class="joinButtonContainer" onclick="window.open('{{ url('/Career') }}', `_self`)">
                                    <!-- Container for join button element. -->
                                    <button class="joinTeamButton"
                                        onclick="window.open('{{ url('/Career') }}', `_self`)">
                                        <!-- Button to join the team. -->
                                        Join Our Team
                                    </button>
                                    <img class="joinButtonImage"
                                        src="{{ asset('assets/a1abb782cb16e447ba9ce7954fea1b2a.png') }}" alt="alt text"
                                        onclick="window.open('{{ url('/Career') }}', `_self`)" />
                                </div>
                            </div>
                            <div class="teamStatisticsContainer">
                                <!-- Container for displaying team statistics. -->
                                <div class="statisticsColumn">
                                    <!-- Column containing various team statistics. -->
                                    <div class="consultationTeamStatsRow">
                                        <!-- Row for consultation team statistics. -->
                                        <h3 class="consultationTeamCount">
                                            <!-- Number of consultation team members. -->
                                            2+
                                        </h3>
                                        <h3 class="consultationTeamTitle">
                                            <!-- Title for consultation team. -->
                                            Consultation Team
                                        </h3>
                                    </div>
                                    <div class="marketingTeamStatsRow">
                                        <!-- Row for marketing team statistics. -->
                                        <h3 class="marketingTeamCount">
                                            <!-- Number of marketing team members. -->
                                            7+
                                        </h3>
                                        <h3 class="marketingTeamTitle">
                                            <!-- Title for marketing team. -->
                                            Marketing Team
                                        </h3>
                                    </div>
                                    <div class="managementTeamStatsRow">
                                        <!-- Row for management team statistics. -->
                                        <h3 class="managementTeamCount">
                                            <!-- Number of management team members. -->
                                            4+
                                        </h3>
                                        <h3 class="managementTeamTitle">
                                            <!-- Title for management team. -->
                                            Management and Administration
                                        </h3>
                                    </div>
                                    <div class="fieldTechniciansStatsRow">
                                        <!-- Row for field technicians team statistics. -->
                                        <h3 class="fieldTechniciansCount">
                                            <!-- Number of field technicians. -->
                                            6+
                                        </h3>
                                        <h3 class="fieldTechniciansTitle">
                                            <!-- Title for field technicians. -->
                                            Field Technicians
                                        </h3>
                                    </div>
                                    <div class="iotSpecialistsStatsRow">
                                        <!-- Row for IoT specialists team statistics. -->
                                        <h3 class="iotSpecialistsCount">
                                            <!-- Number of IoT specialists. -->
                                            4+
                                        </h3>
                                        <h3 class="iotSpecialistsTitle">
                                            <!-- Title for IoT specialists. -->
                                            IoT Specialist Team
                                        </h3>
                                    </div>
                                    <div class="customerSupportStatsRow">
                                        <!-- Row for customer support team statistics. -->
                                        <h3 class="customerSupportCount">
                                            <!-- Number of customer support members. -->
                                            8+
                                        </h3>
                                        <h3 class="customerSupportTitle">
                                            <!-- Title for customer support team. -->
                                            Customer Support
                                        </h3>
                                    </div>
                                    <div class="logisticsOperationsStatsRow">
                                        <!-- Row for logistics and operations team statistics. -->
                                        <h3 class="logisticsOperationsCount">
                                            <!-- Number of logistics and operations team members. -->
                                            4+
                                        </h3>
                                        <h3 class="logisticsOperationsTitle">
                                            <!-- Title for logistics and operations team. -->
                                            Logistics and Operations Team
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="decorativeGroup"
                    style="
                            --src: url('{{ asset('assets/0a380a417543988e9eb63fc474442010.png') }}');">
                    <!-- Group for decorative elements. -->
                    <img class="decorativeImage" src="{{ asset('assets/a565f3cffdb5eded4c6775846a5e36c9.svg') }}"
                        alt="alt text" />
                </div>
            </div>
        </section>
    @endif

    @if (count($products))
        <section class="productOverviewSection">
            <!-- Main section showcasing the product offerings. -->
            <div class="flexRow1">
                <!-- First horizontal flex container for product highlights. -->
                <div class="flexCol1">
                    <!-- First vertical flex container within the product section. -->
                    <h1 class="productHeroTitle_box">
                        <!-- Main title for the products showcased. -->
                        <span class="productHeroTitle">
                            <span class="productHeroTitle_span0">OUR</span>
                            <span class="productHeroTitle_span1"> </span>
                            <span class="productHeroTitle_span2" style="font-size: 60px"><strong>PRODUCT</strong></span>
                        </span>
                    </h1>
                    <div class="flex-row">
                        @foreach ($products as $product)
                            <div class="rect22"></div>
                        @endforeach
                    </div>
                </div>
                <div class="flex_row1">
                    @if (count($products))
                        <img class="productImage1" src="{{ asset('assets/eec8b7add76f850595e494037df7f050.png') }}"
                            alt="alt text" />
                        <!-- Image representing the first product. -->
                        <img class="productImage2" src="{{ asset('assets/80bff0aecf7412c69fd52bd875ef5e31.png') }}"
                            alt="alt text" />
                        <!-- Image representing the second product. -->
                    @endif
                </div>
            </div>
            <div class="contentBox2"
                style="
                        --src: url('{{ asset('assets/872ea7074f98b71c60e44801189526e3.png') }}');">
                <!-- Container for buttons and additional product details. -->
                <div class="flex-col">
                    <div class="flexRow3">
                        <!-- Flex container for buttons related to products. -->
                        <div class="flexRow4">
                            @foreach ($products as $product)
                                <!-- Flex container for action buttons. -->
                                <button class="ioTTechnologyButton">
                                    <!-- Button to learn more about IoT Technology. -->
                                    {{ $product->name }}
                                </button>
                            @endforeach
                        </div>
                        <div class="flexRow5">
                            <!-- Flex container for viewing more products. -->
                            <h3 class="viewMoreSubtitle">
                                <!-- Subtitle for additional product view action. -->
                                View More
                            </h3>
                            <img class="image28" src="{{ asset('assets/d8c3ab07ca06eb446f4c4e6f1a99ffda.png') }}"
                                alt="alt text" />
                        </div>
                    </div>
                    <div class="flexRow6">
                        <!-- Flex container for displaying technology overview. -->
                        <div class="flexCol2">
                            <!-- Vertical flex container for IoT product details. -->
                            <h1 class="ioTTechnologyTitle">
                                <!-- Title for the IoT Technology section. -->
                                @if (count($products))
                                    {{ $products[0]->name ?? null }}
                                @endif
                            </h1>
                            <p class="ioTTechnologyDescription">
                                @if (count($products))
                                    {{ $products[0]->description ?? null }}
                                @endif
                            </p>
                        </div>
                        <div class="contentBox1">
                            <!-- Container for additional resources and images. -->
                            <div class="flexRow7">
                                @if (count($products))
                                    {{ $products[0]->image ?? null }}
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flexRow8">
                <!-- Flex container for product offerings description. -->
                <p class="productRangeDescription">
                    <!-- Description of the range of products offered. -->
                    At Intellifarm, we offer a range of innovative products
                    designed to enhance and simplify modern farming
                    practices. Our solutions integrate the latest in IoT
                    technology, data analytics, and AI to provide farmers
                    with the tools they need to succeed.
                </p>
                <h3 class="productAgeSubtitle">
                    <!-- Subtitle for product age indicator. -->
                    03
                </h3>
            </div>
            <div class="additionalInfoRect"></div>
            <!-- Rectangular section for additional information. -->
        </section>
    @endif

    @if (count($companies))
        <section class="trustedCompaniesSection">
            <!-- Section displaying trusted companies and related information. -->
            <div class="flexContainerCol">
                <div class="flexContainerCol1">
                    <div class="flexContainerCol2">
                        <hr class="horizontalRule5" size="1" />
                        <div class="flexContainerCol3">
                            <div class="flexContainerCol4">
                                <h3 class="sectionSubtitle04">04</h3>
                                <h1 class="trustedByCompaniesTitle">
                                    TRUSTED BY MANY COMPANY
                                </h1>
                            </div>
                            <div class="flexContainerRow">
                                @foreach ($companies as $company)
                                    <img class="trustedCompanyLogo1" src="{{ asset($company->logo) }}" alt="alt text" />
                                @endforeach
                            </div>
                        </div>
                        <hr class="horizontalRule51" size="1" />
                    </div>
                    <button class="goBackButton" id="goBackBtn">
                        Go Back
                    </button>
                </div>
                <h3 class="assistanceSubtitle_box">
                    <span class="assistanceSubtitle">
                        <span class="assistanceSubtitle_span0">Got questions or need assistance?
                        </span>
                        <a href="{{ route('contact') }}" class="text-decoration-none">
                            <span class="assistanceSubtitle_span1">Contact us</span>
                        </a>
                        <span class="assistanceSubtitle_span2">
                            anytime and we’ll get back to you as soon as
                            possible.</span>
                    </span>
                </h3>
            </div>
        </section>
    @endif

    @include('partials.footer')
@endsection

@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/home.css') }}" />
@endpush

@push('scripts')
    <script src="{{ asset('js/home.js') }}"></script>
@endpush
