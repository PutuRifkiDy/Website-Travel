const togglePassword = document.querySelector('#togglePassword');
const password = document.querySelector('#password');
const eyeIcon = document.querySelector('#eyeIcon');
const eyeSlashIcon = document.querySelector('#eyeSlashIcon');

togglePassword.addEventListener('click', function () {
    // Toggle tipe input antara password dan text
    password.setAttribute('type', 'text');

    // Tampilkan icon mata terbuka dan sembunyikan mata tersilang
    eyeIcon.classList.remove('hidden');
    eyeSlashIcon.classList.add('hidden');

    // Atur timeout 3 detik untuk kembali ke mode password
    setTimeout(() => {
        password.setAttribute('type', 'password');
        eyeIcon.classList.add('hidden');
        eyeSlashIcon.classList.remove('hidden');
    }, 2000); // Waktu 3 detik
});