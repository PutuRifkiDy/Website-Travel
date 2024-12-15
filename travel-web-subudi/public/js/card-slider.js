// fitur scroll kesamping
// Ambil elemen tombol dan container card
const geserKeKanan = document.querySelector('.geserKeKanan');
const geserKeKiri = document.querySelector('.geserKeKiri');
const cardWrapper = document.querySelector('.card-wrapper');

let currentIndex = 0;
const cardWidth = 340 // Sesuaikan dengan lebar card kamu
const totalCards = document.querySelectorAll('.card-wrapper > div').length;
console.log(totalCards);

// Fungsi untuk menggeser ke kanan
geserKeKanan.addEventListener('click', function() {
    if (currentIndex < totalCards - 2) {
        currentIndex++;
        cardWrapper.style.transform = `translateX(-${currentIndex * cardWidth}px)`;
    }
});

// Fungsi untuk menggeser ke kiri
geserKeKiri.addEventListener('click', function() {
    if (currentIndex > 0) {
        currentIndex--;
        cardWrapper.style.transform = `translateX(-${currentIndex * cardWidth}px)`;
    }
});