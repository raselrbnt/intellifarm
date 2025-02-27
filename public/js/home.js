$(document).ready(function () {
    // MEET TEAM //
    function selectImage(element, imageSrc, title, position) {
        // Reset the active state for all images
        const images = document.querySelectorAll(".imageGalleryRow img");
        images.forEach((img) => img.classList.remove("active"));

        // Set the clicked image as active
        element.classList.add("active");

        // Update the main image and text
        document.getElementById("mainImage").src = imageSrc;
        document.getElementById("mainTitle").textContent = title;
        document.getElementById("mainPosition").textContent = position;
    }

    // Carousel Companies
    document.addEventListener("DOMContentLoaded", function () {
        const sliderItems = document.querySelectorAll(".slider .item");

        sliderItems.forEach((item, index) => {
            item.style.animationDelay = "${(10 / sliderItems.length) * index}s";
        });
    });

    // Carousel Produk
    let currentProduct = 0;
    const products = document.querySelectorAll(".carousel-item");

    function changeProduct(direction) {
        products[currentProduct].classList.remove("active");
        currentProduct =
            (currentProduct + direction + products.length) % products.length;
        products[currentProduct].classList.add("active");
    }

    // Button GoBack scroll to top
    let goBackBtn = document.getElementById("goBackBtn");
    if (goBackBtn) {
        goBackBtn.addEventListener("click", function () {
            window.scrollTo({ top: 0, behavior: "smooth" });
        });
    }

    let downloadBtn = document.getElementById("downloadButton");
    if (downloadBtn) {
        downloadBtn.addEventListener("click", function () {
            var userAgent = navigator.userAgent || navigator.vendor || window.opera;

            if (/iPad|iPhone|iPod/.test(userAgent) && !window.MSStream) {
                window.location.href =
                    '{{ route("redirect.store", ["platform" => "ios"]) }}';
            } else if (/android/i.test(userAgent)) {
                window.location.href =
                    '{{ route("redirect.store", ["platform" => "android"]) }}';
            } else if (/Macintosh|Mac OS X/.test(userAgent)) {
                window.location.href =
                    '{{ route("redirect.store", ["platform" => "ios"]) }}';
            } else if (/Windows NT/.test(userAgent)) {
                window.location.href =
                    '{{ route("redirect.store", ["platform" => "android"]) }}';
            } else {
                window.location.href =
                    '{{ route("redirect.store", ["platform" => "web"]) }}';
            }
        });
    }

    const descriptions = [
        "Internet of Things (IoT) enables smart farming by connecting devices to monitor and automate processes.",
        "Intellifarm leverages AI to predict crop needs based on collected data. AI helps in optimizing resource use, increasing crop yields, and ensuring sustainable farming practices.",
        "Sensor Technology helps in real-time monitoring of soil moisture, temperature, and other environmental factors.",
        "Automated Irrigation Systems ensure optimal water usage, reducing waste and improving crop health.",
        "Data Analysis provides insights for better decision-making in agriculture, maximizing efficiency and productivity."
    ];

    let currentIndex = 1;

    function updateFeature() {
        $(".feature-button").removeClass("filled").eq(currentIndex).addClass("filled");
        $(".feature-description").text(descriptions[currentIndex]);
    }

    $(".feature-prev-button").click(function () {
        if (currentIndex > 0) {
            currentIndex--;
            updateFeature();
        }
    });

    $(".feature-next-button").click(function () {
        if (currentIndex < descriptions.length - 1) {
            currentIndex++;
            updateFeature();
        }
    });

    $(".feature-button").click(function () {
        currentIndex = $(this).index();
        updateFeature();
    });
});
