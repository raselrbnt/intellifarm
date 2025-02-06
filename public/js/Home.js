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
goBackBtn.addEventListener("click", function () {
    window.scrollTo({ top: 0, behavior: "smooth" });
});
