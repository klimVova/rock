var slider = document.querySelector(".slider");
var images = document.querySelectorAll(".slider img");
var currentImage = 0;
var interval = 3000; // Интервал смены слайдов в миллисекундах

function nextImage() {
    images[currentImage].style.opacity = 0;

    currentImage = (currentImage + 1) % images.length;

    images[currentImage].style.opacity = 1;
}

setInterval(nextImage, interval);