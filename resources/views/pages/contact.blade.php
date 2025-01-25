<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>FarmHUB-Contact</title>

    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/common.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fonts.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Contact.css') }}" />
</head>

<body class="flex-column">
    <main class="contact main">
        <section class="aboutUsSection">
            <!-- This section provides an overview of the company and its values. -->
            <div class="flexRowContainer">
                <!-- A flex container for aligning elements in a row. -->
                <div class="flexRowImageContainer">
                    <!-- Container holding the main image of the company. -->
                    <img class="mainImage" src="{{ asset('assets/43fa406488b93e476db137757b3e31be.png') }}"
                        alt="alt text" onclick="window.open('{{ url('/') }}', '_self')" />
                    <div class="flexRowTextContainer">
                        <!-- Container for navigation or highlighted text items. -->
                        <p class="aboutText" onclick="window.open('{{ url('/') }}', '_self')">
                            <!-- Text link to learn more about the company. -->
                            ABOUT
                        </p>
                        <p class="productText" onclick="window.open('{{ url('/product') }}', '_self')">
                            <!-- Text link to learn more about the products offered. -->
                            PRODUCT
                        </p>
                        <p class="sustainabilityText" onclick="window.open('{{ url('/sustainability') }}', '_self')">
                            <!-- Text link pertaining to sustainability efforts. -->
                            SUSTAINBILITY
                        </p>
                        <p class="careerText" onclick="window.open('{{ url('/career') }}', '_self')">
                            <!-- Text link to available career opportunities. -->
                            CAREER
                        </p>
                    </div>
                </div>
                <img class="secondaryImage" src="{{ asset('assets/302958ef4a6811348969a2badbfad7ac.svg') }}"
                    alt="alt text" />
            </div>
        </section>

        <section class="contactUsSection">
            <!-- This section provides a contact form for users to get in touch with FarmHUB. -->
            <div class="flexRowContainer1">
                <!-- This container arranges its children in a horizontal row. -->
                <div class="contactInfoGroup">
                    <div class="contentColumnPrimary">
                        <!-- This column contains the primary content including images and text. -->
                        <div class="heroGroup">
                            <!-- Group for the hero image and title. -->
                            <img class="contactHeroImage"
                                src="{{ asset('assets/b5510b7b3074b63cad04b957e9b75dc7.png') }}" alt="alt text" />
                            <h1 class="contactHeroTitle">
                                <!-- Main title to attract user&#x27;s attention. -->
                                LET’S TALK
                            </h1>
                        </div>
                        <p class="contactDescription">
                            <!-- Description text providing additional information about the service. -->
                            We’re here to help you transform your farming
                            experience with FarmHUB’s innovative technology.
                            Whether you have questions about our products,
                            need support, or just want to learn more, we’d
                            love to hear from you!
                        </p>
                    </div>
                    <div class="flexColumnSecondary">
                        <!-- This column contains the contact information and office hours. -->
                        <hr class="dividerLine" size="1" />
                        <h2 class="contactInfoTitle_box">
                            <!-- Title for the contact information section. -->
                            <span class="contactInfoTitle">
                                <span class="contactInfoTitle_span0">
                                    Contact Information:
                                    <br />
                                </span>
                                <span class="contactInfoTitle_span1">
                                    Phone         : +1 (123) 456-7890
                                    <br />
                                    Email          : farmhubidn@gmail.com
                                    <br />
                                    Address       : 123 Greenfield Lane,
                                    AgriCity, Jakarta
                                    <br />
                                    <br />
                                    Office Hours :
                                    <br />
                                    Monday to Friday : 9 AM - 5 PM (WIB)
                                </span>
                            </span>
                        </h2>
                    </div>
                </div>
                <div class="content_box4"
                    style="
                            --src: url('{{ asset('assets/6453bd894582a42b3fe18abf7ce2fbaf.png') }}');">
                    <div class="flexColumnTertiary">
                        <div class="fullNameLabel">
                            <!-- Label for the full name input field. -->
                            <p class="fullNameRequiredIndicator_box">
                                <!-- Indicates that this field is required. -->
                                <span class="fullNameRequiredIndicator">
                                    <span class="fullNameRequiredIndicator_span0">Full name
                                    </span>
                                    <span class="fullNameRequiredIndicator_span1">*</span>
                                </span>
                            </p>
                            <div class="content_box2">
                                <p class="highlight1_box">
                                    <input type="text" class="highlight1" placeholder="Type" />
                                </p>
                            </div>
                        </div>
                        <div class="flex_col">
                            <p class="highlight2_box">
                                <span class="highlight2">
                                    <span class="highlight2_span0">Email
                                    </span>
                                    <span class="highlight2_span1">*</span>
                                </span>
                            </p>
                            <div class="content_box2">
                                <p class="highlight1_box1">
                                    <input type="text" class="highlight1" placeholder="Type" />
                                </p>
                            </div>
                        </div>
                        <div class="messageSection">
                            <!-- This section contains the message input field. -->
                            <div class="flex_col1">
                                <p class="highlight3_box">
                                    <textarea type="text" class="highlight3" placeholder="Massage"></textarea>
                                </p>
                                <div class="messageInputContainer">
                                    <!-- Container for the message input area. -->
                                    <img class="messageImage"
                                        src="{{ asset('assets/9d1bb41a3efa6a598702318b8c8a5122.png') }}"
                                        alt="alt text" />
                                </div>
                            </div>
                        </div>
                        <div class="confirmationContainer">
                            <!-- Container for the confirmation message and submit button. -->
                            <p class="privacyPolicyConfirmation_box">
                                <!-- Confirmation message indicating acceptance of privacy policy. -->
                                <span class="privacyPolicyConfirmation">
                                    <span class="privacyPolicyConfirmation_span0">By sending this form I confirm that
                                        I have read and accept the </span>
                                    <span class="privacyPolicyConfirmation_span1">Privacy Police</span>
                                </span>
                            </p>
                            <button class="sendButton">
                                <!-- Button to submit the contact form. -->
                                <p class="sendButtonText">Send</p>
                                <img class="sendButtonIcon"
                                    src="{{ asset('assets/149d36970e5f8552b7208c34c343da28.png') }}"
                                    alt="alt text" />
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="clientReviewsSection">
            <!-- Section displaying client reviews and social media connections. -->
            <div class="socialMediaContainer"
                style="
                        --src: url('{{ asset('assets/1ecc9adf771740aba69e33c021a4cb7a.png') }}');">
                <!-- Container for social media connectivity information. -->
                <div class="flexRowContainer2">
                    <!-- Flex row layout for client reviews and social media content. -->
                    <div class="flexColumnForReviews">
                        <div class="flexRowForClientReview">
                            <!-- Row layout for client title and support information. -->
                            <h2 class="clientReviewTitle">
                                Clients Review
                            </h2>
                            <p class="supportUsText">Support us</p>
                        </div>
                        <div class="clientReviewContentBox"
                            style="
                                    --src: url('{{ asset('assets/f350cb88e8a3fad958b3ecef0f661e50.png') }}');">
                            <div class="flexColumnForDetails">
                                <div class="flexRowForClientDetails"
                                    style="
                                            --src: url('{{ asset('assets/9ee71b1a214c6f6bb94eee838976c47a.png') }}');">
                                    <!-- Row layout for client name and review date. -->
                                    <h2 class="clientName">James Ronald</h2>
                                    <p class="reviewDate">01/06/24</p>
                                </div>
                                <div class="flexRowForReviewText">
                                    <!-- Row layout for client review text and images. -->
                                    <div class="reviewTextContainer">
                                        <p class="clientReviewText">
                                            The smart farming technology
                                            from FarmHUB is a game-changer.
                                            It helps me make informed
                                            decisions and boosts crop yields
                                            significantly.
                                        </p>
                                    </div>
                                    <div class="imageGalleryForClient">
                                        <div class="flexRowForClientImagesTop">
                                            <!-- Row layout for displaying the top set of client images. -->
                                            <img class="clientImage1"
                                                src="{{ asset('assets/a2360db8d653204d867a9ddfc48530c3.png') }}"
                                                alt="alt text" />
                                            <img class="clientImage2"
                                                src="{{ asset('assets/a62562016e6163fedd9a4a1c3a3c23fa.png') }}"
                                                alt="alt text" />
                                        </div>
                                        <div class="flexRowForClientImagesBottom">
                                            <!-- Row layout for displaying the bottom set of client images. -->
                                            <img class="clientImage3"
                                                src="{{ asset('assets/e74fa79dd6268e5628fb2819b1f054e4.png') }}"
                                                src="/assets/e74fa79dd6268e5628fb2819b1f054e4.png" alt="alt text" />
                                            <img class="clientImage4"
                                                src="{{ asset('assets/e74fa79dd6268e5628fb2819b1f054e4.png') }}"
                                                alt="alt text" />
                                            <img class="clientImage5"
                                                src="{{ asset('assets/e74fa79dd6268e5628fb2819b1f054e4.png') }}"
                                                alt="alt text" />
                                            <img class="clientImage6"
                                                src="{{ asset('assets/e74fa79dd6268e5628fb2819b1f054e4.png') }}"
                                                alt="alt text" />
                                            <img class="clientImage7"
                                                src="{{ asset('assets/3a4eb4213dfc74410ebb84ff5b10ac47.png') }}"
                                                alt="alt text" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flexColumnForSocialMedia">
                        <div class="flexRowForSocialMedia">
                            <!-- Row layout for social media connections. -->
                            <h2 class="socialMediaTitle">
                                Connect With Us On Social Media
                                <!-- <h2 class="medium_title">
                                        
                                    </h2> -->
                                <div class="linkedInImageLink">
                                    <img class="linkedInLogo"
                                        src="{{ asset('assets/eb4d26631a1303e52e7befd177ca9d15.png') }}"
                                        alt="alt text" />
                                    <p class="linkedInProfileText">
                                        linkedin.com/company/farmhub-indonesia
                                    </p>
                                </div>
                                <div class="instagramImageLink">
                                    <img class="instagramLogo"
                                        src="{{ asset('assets/92ccb8107fe76f09399b82f8e33d05b6.png') }}"
                                        alt="alt text" />
                                    <p class="instagramProfileText">
                                        @farmhubindonesia
                                    </p>
                                </div>
                                <div class="facebookImageLink">
                                    <img class="facebookLogo"
                                        src="{{ asset('assets/e13c85156e49abcc56c7d03c11eaa7e9.png') }}"
                                        alt="alt text" />
                                    <p class="facebookProfileText">
                                        FarmHUB Indonesia
                                    </p>
                                </div>
                            </h2>
                            <div class="flexColumnForAudienceStats"
                                style="
                                        --src: url('{{ asset('assets/ade8ebebd0719a96fcce35dd454eb377.png') }}');">
                                <div class="flexColumnForAudienceCount">
                                    <div class="flexRowForAudienceCount">
                                        <!-- Row displaying total audience statistics. -->
                                        <div class="totalAudienceStatsContainer">
                                            <div class="audienceCountContainer"
                                                style="
                                                        --src: url('{{ asset('assets/132f29eb4ad785f0283004464c3649f1.png') }}');">
                                                <p class="audienceCount">
                                                    10k+
                                                </p>
                                            </div>
                                            <img class="audienceImage1"
                                                src="{{ asset('assets/e8251d6a4da3b3b6352cddf8985a7bc8.png') }}"
                                                alt="alt text" />
                                            <img class="audienceImage2"
                                                src="{{ asset('assets/522f5459b21e552bcc64545d281178cc.png') }}"
                                                alt="alt text" />
                                        </div>
                                        <h2 class="totalAudienceTitle">
                                            Total Audience
                                        </h2>
                                    </div>
                                    <h2 class="followUsTitle">Follow Us</h2>
                                </div>
                            </div>
                        </div>
                        <div class="flexColumnForVisitInfo">
                            <div class="flexColumnForVisitDetails">
                                <h2 class="visitUsTitle">Visit Us</h2>
                                <p class="visitUsDescription">
                                    If you’re in the area, feel free to
                                    visit our office. We’d love to meet you
                                    and show you how FarmHUB can make a
                                    difference in your farming operations.
                                </p>
                            </div>
                            <img class="visitUsImage"
                                src="{{ asset('assets/4442d12085cbd647149517aaae1aea15.png') }}" alt="alt text" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="cookieConsentSection">
            <!-- This section handles cookie consent notifications and related user actions. -->
            <div class="cookieConsentContainer"
                style="
                        --src: url('{{ asset('assets/6fc2d215a5c74ef91f24b15d6c4a16bd.png') }}');">
                <!-- Container for cookie consent information. -->
                <div class="flexRowContainer3">
                    <!-- Flex container for aligning cookie consent text and buttons in a row. -->
                    <p class="cookieConsentMessage">
                        <!-- Message informing users about cookie usage. -->
                        We use cookies to improve website performance and
                        ensure you get the best experience.
                    </p>
                    <div class="buttonContainer">
                        <!-- Container for the cookie consent action buttons. -->
                        <button class="customizeBtn">
                            <!-- Button for users to customize their cookie preferences. -->
                            CUSTOMIZE
                        </button>
                        <button class="acceptBtn">
                            <!-- Button for users to accept cookie usage. -->
                            ACCEPT
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
