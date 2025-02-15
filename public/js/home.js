// BAGIAN MEET TEAM //
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

// Button GoBack scroll to top
let goBackBtn = document.getElementById("goBackBtn");
if (goBackBtn) {
    goBackBtn.addEventListener("click", function () {
        window.scrollTo({ top: 0, behavior: "smooth" });
    });
}

let downloadBtn = document.getElementById('downloadButton');
if (downloadBtn) {
    downloadBtn.addEventListener('click', function() {
        var userAgent = navigator.userAgent || navigator.vendor || window.opera;

        if (/iPad|iPhone|iPod/.test(userAgent) && !window.MSStream) {
            window.location.href = '{{ route("redirect.store", ["platform" => "ios"]) }}';
        } else if (/android/i.test(userAgent)) {
            window.location.href = '{{ route("redirect.store", ["platform" => "android"]) }}';
        } else if (/Macintosh|Mac OS X/.test(userAgent)) {
            window.location.href = '{{ route("redirect.store", ["platform" => "ios"]) }}';
        } else if (/Windows NT/.test(userAgent)) {
            window.location.href = '{{ route("redirect.store", ["platform" => "android"]) }}';
        } else {
            window.location.href = '{{ route("redirect.store", ["platform" => "web"]) }}';
        }
    });
}
