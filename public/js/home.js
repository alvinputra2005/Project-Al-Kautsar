window.addEventListener("scroll", function () {
  const navbar = document.querySelector(".custom-navbar");
  if (window.scrollY > 50) {
    navbar.classList.add("scrolled");
  } else {
    navbar.classList.remove("scrolled");
  }
});

const scrollTopBtn = document.getElementById("scrollTopBtn");
scrollTopBtn.addEventListener("click", function (e) {
  e.preventDefault();
  window.scrollTo({
    top: 0,
    behavior: "smooth"
  });
});

function syncSectionHeight() {
  const section = document.getElementById('beranda-section');
  const carousel = document.querySelector('.carousel-background');

  if (section && carousel) {
    section.style.height = carousel.offsetHeight + 'px';
  }
}

// Jalankan saat halaman dimuat
window.addEventListener('load', syncSectionHeight);

// Jalankan saat jendela diubah ukurannya
window.addEventListener('resize', syncSectionHeight);

