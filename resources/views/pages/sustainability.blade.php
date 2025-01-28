@extends('layouts.app')

@section('title', 'Sustainabillity')

@section('content')
    @include('partials.navbar')

    <section class="environmentalSustainabilitySection">
        <!-- Main section highlighting the company&#x27;s commitment to environmental sustainability. -->
        <div class="flexColumn">
            <!-- Flexbox container for the layout of the content. -->
            <div class="contentBoxPrimary" style="--src: url('{{ asset('assets/5f29fe4a122b21f34183e53b2012c781.png') }}');">
                <!-- Primary content box containing sustainability commitment information. -->
                <div class="rect15" style="--src: url('{{ asset('assets/a065da1de18f5a8a990fb39609f1b0f8.png') }}');"></div>
                <div class="flex_row">
                    <div class="content_box5"
                        style="--src: url('{{ asset('assets/7add88e324abc182081adcd81befdb80.png') }}');">
                        <div class="content_box4">
                            <div class="flex_col">
                                <div class="flexColumnTwo">
                                    <!-- Second flexible column for layout. -->
                                    <div class="flexColumnThree">
                                        <!-- Third flexible column for layout. -->
                                        <h1 class="environmentalCommitmentTitle">
                                            <!-- Main title introducing the commitment to environmental sustainability. -->
                                            Commitment to Environmental
                                            Sustainability
                                        </h1>
                                        <p class="commitmentHighlightText">
                                            <!-- Supporting text highlighting the sustainability efforts. -->
                                            We continuously measure and
                                            manage the environmental
                                            impact of our activities.
                                            This sustainability report
                                            is part of our effort to be
                                            transparent in disclosing
                                            the changes and progress we
                                            have achieved in
                                            implementing sustainable
                                            business practices.
                                        </p>
                                    </div>
                                    <button class="readMoreButton">
                                        <!-- Button for reading more details on sustainability. -->
                                        READ MORE
                                    </button>
                                </div>
                                <div class="content_box">
                                    <h3 class="reportSubtitle">
                                        <!-- Subtitle related to reports on sustainability. -->
                                        #REPORT
                                    </h3>
                                </div>
                            </div>
                            <div class="group">
                                <div class="flex_row1">
                                    <div class="flex_col1">
                                        <div class="flex_col2">
                                            <h1 class="sustainabilityStatsTitle">
                                                <!-- Title showing a sustainability metric, such as &#x27;1k+&#x27;. -->
                                                1k+
                                            </h1>
                                            <img class="sustainabilityImageOne"
                                                src="{{ asset('assets/de434093b4c3ebf82860935cdeb32efc.png') }}"
                                                alt="alt text" />
                                            <!-- Image related to sustainability. -->
                                        </div>
                                        <div class="flex_col3">
                                            <h1 class="sustainabilityImpactTitle">
                                                <!-- Title showing a sustainability impact metric, such as &#x27;25%&#x27;. -->
                                                25%
                                            </h1>
                                            <img class="sustainabilityPercentImage"
                                                src="{{ asset('assets/a56da99d18c09fcb2817da9c43993496.png') }}"
                                                alt="alt text" />
                                            <!-- Image displaying a percentage related to sustainability. -->
                                        </div>
                                    </div>
                                    <div class="flex_col4">
                                        <div class="flex_col5">
                                            <h1 class="hero_title2">
                                                30%
                                            </h1>
                                            <img class="sustainabilityImageDetail"
                                                src="{{ asset('assets/a56da99d18c09fcb2817da9c43993496.png') }}"
                                                alt="alt text" />
                                            <!-- Image depicting details on sustainability. -->
                                        </div>
                                        <img class="image1" src="{{ asset('assets/ca2f5da24167cf8062f651d0886f8ffa.png') }}"
                                            alt="alt text" />
                                    </div>
                                </div>
                                <img class="coverImage" src="{{ asset('assets/4a50a5b39bbc0c1ae337deb5bcb46e9d.png') }}"
                                    alt="alt text" />
                                <!-- Cover image related to the sustainability section. -->
                            </div>
                        </div>
                    </div>
                    <div class="flexRowTwo">
                        <!-- Second flex row for additional content layout. -->
                        <div class="flex_col6">
                            <div class="contentBoxSecondary">
                                <!-- Secondary content box sharing sustainability insights. -->
                                <div class="flex_col7">
                                    <div class="contentBoxHighlight"
                                        style="--src: url('{{ asset('assets/942f72f0f480e682ee592e899a1bab40.png') }}')">
                                        <!-- Highlight box for significant information about sustainability. -->
                                        <img class="image29"
                                            src="{{ asset('assets/b75f70d69e65aae4d4837bb4b8ea2b4d.png') }}"
                                            alt="alt text" />
                                    </div>
                                    <p class="natureFutureHighlightText">
                                        <!-- Supporting text about nature and future prospects. -->
                                        Nature &amp; Future
                                    </p>
                                </div>
                            </div>
                            <div class="content_box1"
                                style="--src: url('{{ asset('assets/3158a9b971bfc8637d4493c21df73c25.png') }}');">
                                <h1 class="futureOfFarmingTitle">
                                    <!-- Title discussing the future of farming. -->
                                    Towards the Future of Farming
                                </h1>
                                <div class="rect12"></div>
                            </div>
                        </div>
                        <div class="flex_row2">
                            <div class="group1">
                                <h1 class="hero_title21">30  C</h1>
                                <div class="rect10"></div>
                            </div>
                            <div class="flex_col8">
                                <img class="image26" src="{{ asset('assets/7a7f99df1f506cca6236deb6434aefb3.png') }}"
                                    alt="alt text" />
                                <img class="image25" src="{{ asset('assets/3a14bffd72d1443f136fc3d33273f4b2.png') }}"
                                    alt="alt text" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex_row3">
                <h1 class="sustainabilityAchievementTitle">
                    <!-- Main title summarizing achievements in sustainability. -->
                    Achievement of Sustainability
                </h1>
                <p class="yearHighlightText">
                    <!-- Supporting text highlighting the year 2024. -->
                    2024
                </p>
            </div>
        </div>
    </section>

    <section class="sustainabilityImpactSection">
        <!-- This section highlights the impact of sustainability efforts. -->
        <div class="flexRowDiv">
            <!-- Flex container for aligning content in a row layout. -->
            <img class="waterUsageImage" src="{{ asset('assets/1c123d2a887eeea3610c8a84972c321d.png') }}" alt="alt text" />
            <div class="flexColDiv">
                <!-- Flex container for arranging content in a column layout. -->
                <div class="waterUsageGroup">
                    <!-- Group container for water usage information. -->
                    <h2 class="waterUsageTitle_box">
                        <!-- Title for the water usage reduction section. -->
                        <span class="waterUsageTitle">
                            <span class="waterUsageTitle_span0">
                                Water Usage Reduction
                                <br />
                            </span>
                            <span class="waterUsageTitle_span1"><br /></span>
                            <span class="waterUsageTitle_span2">Our irrigation technology has reduced
                                water usage by up to
                            </span>
                            <span class="waterUsageTitle_span3">30%</span>
                            <span class="waterUsageTitle_span4">
                                on some farms.</span>
                        </span>
                    </h2>
                    <img class="image36" src="{{ asset('assets/bacfc4d1c6cf66b7b8234c0f1ca07a9c.png') }}" alt="alt text" />
                </div>
                <div class="fertilizerEfficiencyGroup">
                    <!-- Group container for fertilizer efficiency information. -->
                    <h2 class="fertilizerEfficiencyTitle_box">
                        <!-- Title for the fertilizer efficiency section. -->
                        <span class="fertilizerEfficiencyTitle">
                            <span class="fertilizerEfficiencyTitle_span0">
                                Fertilizer Efficiency
                                <br />
                            </span>
                            <span class="fertilizerEfficiencyTitle_span1"><br /></span>
                            <span class="fertilizerEfficiencyTitle_span2">Targeted fertilizer use through data
                                analysis has reduced fertilizer usage by
                                up to
                            </span>
                            <span class="fertilizerEfficiencyTitle_span3">25%.</span>
                        </span>
                    </h2>
                    <img class="image38" src="{{ asset('assets/e41e2d1adb90d3b1047fc61969b6e1c4.png') }}" alt="alt text" />
                </div>
                <div class="trainingGroup">
                    <!-- Group container for farmer training information. -->
                    <h2 class="farmerTrainingTitle_box">
                        <!-- Title for the farmer training section. -->
                        <span class="farmerTrainingTitle">
                            <span class="farmerTrainingTitle_span0">
                                Farmer Training
                                <br />
                            </span>
                            <span class="farmerTrainingTitle_span1"><br /></span>
                            <span class="farmerTrainingTitle_span2">Over
                            </span>
                            <span class="farmerTrainingTitle_span3">1,000</span>
                            <span class="farmerTrainingTitle_span4">
                                farmers have participated in the Green+
                                Academy training program, enhancing
                                their knowledge of sustainable
                                agriculture.</span>
                        </span>
                    </h2>
                    <img class="image37" src="{{ asset('assets/3520f780246f5bc23b8038bb025ededa.png') }}"
                        alt="alt text" />
                </div>
            </div>
        </div>
    </section>

    <section class="howItWorksSection">
        <!-- Main section that explains how the technology works in agriculture. -->
        <div class="flexRowPrimary">
            <!-- Primary container for flexbox layout to display multiple columns. -->
            <div class="flexColPrimary">
                <!-- Primary column that holds the main content for the how it works section. -->
                <h1 class="heroTitle">
                    <!-- Main title for the how it works section. -->
                    How It works ?
                </h1>
                <div class="flexRowSecondary">
                    <!-- Container for the secondary flexbox layout for content boxes. -->
                    <div class="flexColFirstContentBox">
                        <!-- First column used to display content boxes for key features. -->
                        <div class="flexColSecondary">
                            <!-- Secondary column holding additional content boxes. -->
                            <div class="contentBoxIoT">
                                <!-- Content box featuring IoT technology information. -->
                                <p class="highlightIoT">
                                    <!-- Highlighting the IoT technology benefit in agriculture. -->
                                    IoT Technology for Agricultural
                                    Efficiency
                                </p>
                            </div>
                            <p class="descriptionIoT">
                                <!-- Description of how IoT technology is used for agricultural efficiency. -->
                                FarmHUB utilizes Internet of Things
                                (IoT) technology to connect various
                                tools and sensors in the field. This
                                allows farmers to obtain real-time data
                                on soil moisture, temperature, and
                                irrigation status. With this
                                information, farmers can make more
                                accurate and efficient decisions,
                                significantly reducing water and
                                fertilizer usage.
                            </p>
                        </div>
                        <div class="flexColDataAnalysis">
                            <!-- Column focused on data analysis for sustainable agriculture. -->
                            <div class="contentBoxDataAnalysis">
                                <!-- Content box explaining data analysis benefits. -->
                                <p class="highlightDataAnalysis">
                                    <!-- Highlighting the data analysis benefit for sustainable farming. -->
                                    Data Analysis for Sustainable
                                    Agriculture
                                </p>
                            </div>
                            <p class="descriptionDataAnalysis">
                                <!-- Description of data analysis in agriculture. -->
                                Our technology collects and analyzes
                                data from farms to provide specific,
                                data-driven recommendations. This helps
                                farmers manage resources optimally,
                                reduce waste, and improve crop yields in
                                a more sustainable manner.
                            </p>
                        </div>
                    </div>
                    <div class="flexColEmissionReduction">
                        <!-- Column dedicated to carbon emission reduction practices. -->
                        <div class="flexColEducation">
                            <!-- Column dedicated to education and training for farmers. -->
                            <div class="contentBoxEmissionReduction">
                                <!-- Content box highlighting carbon emission reduction methods. -->
                                <p class="highlightEmissionReduction">
                                    <!-- Highlighting the carbon emission reduction efforts. -->
                                    Carbon Emission Reduction
                                </p>
                            </div>
                            <p class="descriptionEmissionReduction">
                                <!-- Description of how the technology helps reduce carbon emissions. -->
                                With automated irrigation systems and
                                smart monitoring, FarmHUB helps reduce
                                carbon emissions in the agricultural
                                sector. Efficient resource use means
                                less wasted energy and an overall
                                reduction in carbon footprint.
                            </p>
                        </div>
                        <div class="flex_col9">
                            <div class="contentBoxFarmerEducation">
                                <!-- Content box focused on farmer education and training programs. -->
                                <p class="highlightFarmerEducation">
                                    <!-- Highlighting the farmer education and training programs offered. -->
                                    Farmer Education and Training
                                </p>
                            </div>
                            <p class="descriptionFarmerEducation">
                                <!-- Description of the training programs for sustainable agricultural practices. -->
                                Through Green+ Academy, we offer
                                educational programs and training for
                                farmers on sustainable agricultural
                                practices. This includes the use of
                                technology, resource management, and
                                modern, environmentally friendly farming
                                techniques.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flexRowImageContent">
                <!-- Row for displaying research image and content. -->
                <div class="imageGroup">
                    <!-- Group container for displaying research-related images. -->
                    <img class="researchImage2024" src="{{ asset('assets/e551142b73876f8d0a2d16ab4ad78afe.png') }}"
                        alt="alt text" />
                    <!-- Image representing research for 2024. -->
                    <div class="contentBoxResearch2024"
                        style="--src: url('{{ asset('assets/0569e020235412686331c1af4236b5cd.png') }}');">
                        <!-- Content box providing details about research for 2024. -->
                        <p class="highlightResearch2024">
                            <!-- Highlight text for research focused initiatives for 2024. -->
                            Reasearch 2024
                        </p>
                    </div>
                </div>
                <img class="additionalResearchImage" src="{{ asset('assets/63e54440b760ce731cf02d62d7a83c75.png') }}"
                    alt="alt text" />
                <!-- Additional image related to the research. -->
            </div>
        </div>
    </section>

    <section class="achievementsSection">
        <!-- Section highlighting significant achievements in sustainable agriculture. -->
        <div class="achievementHighlightDiv"
            style="--src:url('{{ asset('assets/11748b1589425e49f864badf5fdd9f98.png') }}');">
            <!-- Container for highlighting key achievements. -->
            <div class="flexColumnDiv">
                <!-- Flexible column layout for content organization. -->
                <h3 class="achievementsSubtitle">
                    <!-- Subtitle that emphasizes the achievements and impact. -->
                    We are proud of these achievements and continue to
                    strive for a positive impact on agriculture and the
                    environment. Thank you for supporting FarmHUB on our
                    journey towards more sustainable farming.
                </h3>
                <button class="supportButton">
                    <!-- Button for users to support the initiative. -->
                    Support
                </button>
            </div>
        </div>
    </section>

    @include('partials.footer')
@endsection

@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pages/sustainability.css') }}" />
@endpush
