
function setupLinks() {
    const links = document.querySelectorAll('.link-dns');

    function removeActiveClass() {
        links.forEach(link => {
            link.classList.remove('active');
        });
    }

    links.forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault(); // Mencegah behavior default
            removeActiveClass(); // Menghapus kelas aktif dari semua link
            this.classList.add('active'); // Menambahkan kelas aktif ke link yang diklik
        });
    });
}
// Panggil fungsi setupLinks setelah DOM sepenuhnya dimuat
document.addEventListener('DOMContentLoaded', setupLinks);


// fitur scroll kesamping
// Ambil elemen tombol dan container card
const geserKeKanan = document.querySelector('.geserKeKanan');
const geserKeKiri = document.querySelector('.geserKeKiri');
const cardWrapper = document.querySelector('.card-wrapper');

let currentIndex = 0;
const cardWidth = 389 // Sesuaikan dengan lebar card kamu
const totalCards = document.querySelectorAll('.card-wrapper > div').length;
console.log(totalCards);

// Fungsi untuk menggeser ke kanan
geserKeKanan.addEventListener('click', function() {
    if (currentIndex < totalCards - 1) {
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







