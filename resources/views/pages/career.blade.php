@extends('layouts.app')

@section('title', 'Careers')

@section('content')
    @include('partials.navbar')

    <section class="joinUsSection">
        <!-- Section that encourages users to join the organization -->
        <div class="flexColumnLayout">
            <!-- Flexible column layout for the main content -->
            <div class="contentGroup">
                <!-- Group containing visual elements and titles -->
                <img class="rectangleShape" src="{{ asset('assets/1b7bd5c816aff8bfd86437e5a46f57b6.png') }}" alt="alt text" />
                <img class="additionalRectangle" src="{{ asset('assets/1b7bd5c816aff8bfd86437e5a46f57b6.png') }}"
                    alt="alt text" />
                <img class="heroImage" src="{{ asset('assets/bfae5ba73837261be40b2d000bf70173.png') }}" alt="alt text" />
                <!-- Image that represents the content visually -->
                <h1 class="joinNowTitle">
                    <!-- Main title highlighting the call to action -->
                    Join Now
                </h1>
                <h1 class="lookingForTitle">
                    <!-- Secondary title indicating recruitment focus -->
                    We’re Looking
                    <br />
                    For New
                    <br />
                    Employee
                </h1>
            </div>
            <div class="flexColumnLayout1">
                <!-- Another flexible column layout for additional content -->
                <button class="benefitsButton">
                    <!-- Button to learn more about the benefits -->
                    Benefits
                </button>
                <h2 class="whyJoinTitle">
                    <!-- Title explaining the advantages of joining Intellifarm -->
                    Why Join Intellifarm
                </h2>
            </div>
        </div>
    </section>

    <section class="aboutUs-Section">
        <!-- This section highlights the various aspects of the company and its culture, aimed at informing potential candidates. -->
        <div class="flexRowContainer1">
            <!-- Container for the main content organized in a flexible row layout. -->
            <div class="contentColumnContainer">
                <!-- First column in the flex layout containing key details about the company. -->
                <div class="leftColumn">
                    <!-- Left column that includes featured attributes of the company. -->
                    <div class="rowInnerContainer">
                        <!-- Inner container for the title, image, and description. -->
                        <h2 class="leadingTechnologyTitle">
                            Leading Technology
                        </h2>
                        <img class="leadingTechnologyImage" src="{{ asset('assets/af7d99ec3255ae6fb19826563a38b19e.png') }}"
                            alt="alt text" />
                        <!-- Image representing the company’s advancements in technology. -->
                    </div>
                    <p class="leadingTechnologyDescription">
                        Joining Intellifarm means being part of a team that
                        implements advanced technologies like IoT and AI
                        in agriculture. You will work with the latest
                        innovations that are transforming farming
                        practices.
                    </p>
                </div>
                <div class="rightColumn">
                    <!-- Right column that includes additional featured attributes. -->
                    <div class="rowEnvironmentalMission">
                        <!-- Inner container for the environmental mission title, image, and description. -->
                        <h2 class="environmentalMissionTitle">
                            Environmental Mission
                        </h2>
                        <img class="environmentalMissionImage"
                            src="{{ asset('assets/af7d99ec3255ae6fb19826563a38b19e.png') }}" alt="alt text" />
                        <!-- Image representing the company’s environmental initiatives. -->
                    </div>
                    <p class="environmentalMissionDescription">
                        We are committed to supporting sustainable and
                        environmentally friendly farming practices.
                        Joining us means working for a company that
                        cares about the environment and strives to
                        reduce its carbon footprint.
                    </p>
                </div>
            </div>
            <div class="flexColumnContainer">
                <!-- Container for additional columns in the layout. -->
                <div class="dynamicWorkEnvColumn">
                    <!-- Column showcasing the dynamic work environment. -->
                    <div class="rowDynamicWorkEnvironment">
                        <!-- Inner container for the dynamic work environment title, image, and description. -->
                        <h2 class="dynamicWorkEnvTitle">
                            Dynamic Work Environment
                        </h2>
                        <img class="dynamicWorkEnvImage" src="{{ asset('assets/af7d99ec3255ae6fb19826563a38b19e.png') }}"
                            alt="alt text" />
                        <!-- Image showcasing the collaborative workplace. -->
                    </div>
                    <p class="dynamicWorkEnvDescription">
                        Intellifarm offers a dynamic and collaborative work
                        environment. You will work with passionate and
                        dedicated professionals who are creating
                        efficient and sustainable farming solutions.
                    </p>
                </div>
                <div class="globalOpportunitiesColumn">
                    <!-- Column highlighting global work opportunities. -->
                    <div class="rowGlobalOpportunities">
                        <!-- Inner container for the global opportunities title, image, and description. -->
                        <h2 class="globalOpportunitiesTitle">
                            Global Opportunities
                        </h2>
                        <img class="globalOpportunitiesImage"
                            src="{{ asset('assets/af7d99ec3255ae6fb19826563a38b19e.png') }}" alt="alt text" />
                        <!-- Image showcasing global project opportunities. -->
                    </div>
                    <p class="globalOpportunitiesDescription">
                        Intellifarm operates in various regions and offers
                        opportunities to work on international projects.
                        You will have the chance to contribute on a
                        global scale and expand your professional
                        network.
                    </p>
                </div>
            </div>
            <div class="cultureAndCollaborationColumn">
                <!-- Container for the innovation culture and collaboration aspects. -->
                <div class="cultureOfInnovationColumn">
                    <!-- Column for the culture of innovation. -->
                    <div class="rowCultureOfInnovation">
                        <!-- Inner container for the culture of innovation title, image, and description. -->
                        <h2 class="cultureOfInnovationTitle">
                            Culture of Innovation
                        </h2>
                        <img class="cultureOfInnovationImage"
                            src="{{ asset('assets/af7d99ec3255ae6fb19826563a38b19e.png') }}" alt="alt text" />
                        <!-- Image representing the culture of innovation. -->
                    </div>
                    <p class="cultureOfInnovationDescription">
                        Intellifarm fosters a culture of innovation where
                        new and creative ideas are highly valued. You
                        will have the opportunity to contribute to
                        innovative projects that bring real change to
                        the agriculture sector.
                    </p>
                </div>
                <div class="collaborationAndCommunityColumn">
                    <!-- Column highlighting collaboration and community aspects. -->
                    <div class="rowCollaborationAndCommunity">
                        <!-- Inner container for the collaboration and community title, image, and description. -->
                        <h2 class="collaborationAndCommunityTitle">
                            Collaboration and Community
                        </h2>
                        <img class="collaborationAndCommunityImage"
                            src="{{ asset('assets/af7d99ec3255ae6fb19826563a38b19e.png') }}" alt="alt text" />
                        <!-- Image representing teamwork and community spirit. -->
                    </div>
                    <p class="collaborationAndCommunityDescription">
                        You will be part of a close-knit and
                        collaborative community where everyone works
                        together to achieve common goals. Team
                        interaction and cross-functional projects are
                        part of our daily routine.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="careerOpportunitiesSection">
        <!-- Section displaying career opportunities and team invitation. -->
        <div class="flexContainer">
            <!-- Container for flexible layout elements. -->
            <div class="content-Box"
                style="
                            --src:url('{{ asset('assets/f5b8a3357c0ada178237b1a9a89b64b2.png') }}'); ">
                <!-- Box containing subordinate text elements. -->
                <h3 class="callToActionTitle">
                    <!-- Subtitle prompting the user to take a look. -->
                    Take a look
                </h3>
            </div>
            <div class="flexColumnLayout2">
                <!-- Column layout for buttons and titles. -->
                <button class="openPositionButton">
                    <!-- Button for opening job positions. -->
                    Open Position
                </button>
                <h2 class="joinTeamTitle">
                    <!-- Title inviting the user to join the team. -->
                    Want To Join Team?
                </h2>
            </div>
        </div>
    </section>

    <section class="careerOpportunitiesSection">
        <!-- This section lists available job positions in the company. -->
        <div class="flexContainer1">
            <!-- Container for job categories and positions. -->
            <div class="jobCategoryContainer">
                <!-- Container for job categories such as Developer, Marketing, etc. -->
                <div class="jobCategoryList">
                    <!-- Lists the job categories available. -->
                    <div class="jobTitleContainer">
                        <!-- Container for individual job titles. -->
                        <h2 class="developerJobTitle">Developer</h2>
                        <hr class="dividerLine2" size="1" />
                        <!-- Horizontal line separator. -->
                    </div>
                    <h2 class="marketingJobTitle">Marketing</h2>
                    <h2 class="designerJobTitle">Designer</h2>
                    <h2 class="researcherJobTitle">Researcher</h2>
                </div>
                <div class="jobOpeningsContainer">
                    <!-- Container for job openings under each category. -->
                    <div class="jobOpeningBlock">
                        <!-- Block for a specific job opening. -->
                        <div class="frontEndDeveloperBlock">
                            <!-- Block for Front-end Developer job role details. -->
                            <h3 class="frontEndDeveloperSubtitle">
                                Front-end Developer
                            </h3>
                            <p class="frontEndDeveloperDescription_box">
                                <!-- Description of Front-end Developer role, responsibilities and qualifications. -->
                                <span class="frontEndDeveloperDescription">
                                    <span class="frontEndDeveloperDescription_span0">Responsibilities</span>
                                    <span class="frontEndDeveloperDescription_span1">
                                        :
                                        <br />
                                        Develop and maintain the Intellifarm
                                        web and mobile application
                                        interfaces.
                                        <br />
                                        <br />
                                    </span>
                                    <span class="frontEndDeveloperDescription_span2">Qualifications
                                    </span>
                                    <span class="frontEndDeveloperDescription_span3">
                                        :
                                        <br />
                                        Experience with HTML, CSS,
                                        JavaScript, and frameworks like
                                        React or Angular
                                    </span>
                                </span>
                            </p>
                        </div>
                        <div class="frontEndApplyGroup">
                            <!-- Group for the apply button and associated images. -->
                            <button class="frontEndApplyButton">
                                <!-- TODO -->
                                Apply Now
                            </button>
                            <img class="frontEndImage" src="{{ asset('assets/1773846b0f1294531cbb071420e66054.png') }}"
                                alt="alt text" />
                        </div>
                    </div>
                    <div class="backEndDeveloperBlock">
                        <!-- Block for Back-end Developer job role details. -->
                        <div class="backEndDeveloperInnerBlock">
                            <!-- Inner block specific to Back-end Developer. -->
                            <h3 class="backEndDeveloperSubtitle">
                                Back-end Developer
                            </h3>
                            <p class="backEndDeveloperDescription_box">
                                <!-- Description of Back-end Developer role, responsibilities and qualifications. -->
                                <span class="backEndDeveloperDescription">
                                    <span class="backEndDeveloperDescription_span0">Responsibilities</span>
                                    <span class="backEndDeveloperDescription_span1">
                                        :
                                        <br />
                                        Build and manage servers,
                                        databases, and backend
                                        application systems.
                                        <br />
                                        <br />
                                    </span>
                                    <span class="backEndDeveloperDescription_span2">Qualifications
                                    </span>
                                    <span class="backEndDeveloperDescription_span3">
                                        :
                                        <br />
                                        Experience with programming
                                        languages such as Python, Java,
                                        or Node.js, and database
                                        management (SQL/NoSQL).
                                    </span>
                                </span>
                            </p>
                        </div>
                        <div class="group">
                            <button class="backEndApplyButton">
                                <!-- TODO -->
                                Apply Now
                            </button>
                            <img class="backEndImage" src="{{ asset('assets/1773846b0f1294531cbb071420e66054.png') }}"
                                alt="alt text" />
                        </div>
                    </div>
                    <div class="ioTDeveloperBlock">
                        <!-- Block for IoT Engineer job role details. -->
                        <div class="ioTDeveloperInnerBlock">
                            <!-- Inner block specific to IoT Engineer. -->
                            <h3 class="ioTDeveloperSubtitle">
                                IoT Engineer
                            </h3>
                            <p class="ioTDeveloperDescription_box">
                                <!-- Description of IoT Engineer role, responsibilities and qualifications. -->
                                <span class="ioTDeveloperDescription">
                                    <span class="ioTDeveloperDescription_span0">Responsibilities</span>
                                    <span class="ioTDeveloperDescription_span1">
                                        :
                                        <br />
                                        Develop and maintain IoT
                                        hardware and software solutions
                                        for agriculture.
                                        <br />
                                        <br />
                                    </span>
                                    <span class="ioTDeveloperDescription_span2">Qualifications
                                    </span>
                                    <span class="ioTDeveloperDescription_span3">
                                        :
                                        <br />
                                        Experience with IoT technology,
                                        sensors, and communication
                                        protocols such as MQTT.
                                    </span>
                                </span>
                            </p>
                        </div>
                        <div class="group">
                            <button class="ioTApplyButton">
                                <!-- TODO -->
                                Apply Now
                            </button>
                            <img class="ioTImage" src="{{ asset('assets/1773846b0f1294531cbb071420e66054.png') }}"
                                alt="alt text" />
                        </div>
                    </div>
                </div>
            </div>
            <p class="revolutionTagline_box">
                <!-- Tagline for the agricultural revolution message. -->
                <span class="revolutionTagline">
                    <span class="revolutionTagline_span0">Be Part of the
                    </span>
                    <span class="revolutionTagline_span1">AGRICULTURAL REVOLUTION.</span>
                </span>
            </p>
        </div>
    </section>

    @include('partials.footer')
@endsection

@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/career.css') }}" />
@endpush
