<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPM AL KAUTSAR</title>
    
    <!-- Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Custom Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    <!-- Google Font: Playfair Display -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet" />

    <!-- AOS Animation CSS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
</head>

<body>
<body>
    <!-- Tempatkan gambar di dalam body -->
    <img src="{{ asset('img/ppm.png') }}" alt="Logo PPM" class="logoNav"/>

    <!-- jQuery (latest) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Popper.js (required for Bootstrap JS) -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <a href="https://wa.me/6285646322300?text=Assalamu'alaikum%20Wr.Wb.%2C%20saya%20ingin%20bertanya%20tentang%20PPM%20Al%20Kautsar" class="wa-float" target="_blank" aria-label="Chat Via Whatsapp">
        <img src="{{ asset('img/wa.ico') }}" alt="Whatsapp" />
    </a>

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top custom-navbar">
        <img src="{{ asset('img/ppm.png') }}" alt="Logo PPM" class = "logoNav"/>
        </a>
        <a href="#beranda" class="navbar-brand">PPM Al Kautsar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#NavbarNav" aria-Controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="#beranda" class="nav-link">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="#sejarah">Sejarah</a></li>
                <li class="nav-item"><a class="nav-link" href="#misiku">Visi-Misi</a></li>
                <li class="nav-item"><a class="nav-link" href="#struktur">Struktur</a></li>
                <li class="nav-item"><a class="nav-link" href="#testimoni">Testimoni</a></li>
                <li class="nav-item"><a class="nav-link" href="#statistik">Data</a></li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="biodataDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Biodata</a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="biodataDropdown">
                    <a class="dropdown-item" href="biodata/data-tendik.html">Data TENDIK</a>
                    <a class="dropdown-item" href="biodata/data-santri.html">Data Santri</a>
                    <a class="dropdown-item" href="biodata/data-alumni.html">Data Alumni</a>
                </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="#kegiatan">Kegiatan</a></li>
                <li class="nav-item"><a class="nav-link" href="#prestasi">Prestasi</a></li>
                <li class="nav-item"><a class="nav-link" href="#footer">Tentang</a></li>
                <li class="nav-item"><a class="nav-link" href="https://forms.gle/X4HXBBtRUnuCBTZz6" target="_blank">PPDB</a></li>
            </ul>
        </div>
    </nav>
    <script>
        window.addEventListener("scroll", function () {
          const navbar = document.querySelector(".custom-navbar");
          if (window.scrollY > 50) {
            navbar.classList.add("scrolled");
          } else {
            navbar.classList.remove("scrolled");
          }
        });
    </script>

    <section id="beranda-section" class="position-relative overflow-hidden">
        <div class="carousel-background">
            <div id="carousel-beranda" class="carousel slide" data-ride="carousel" data-interval="2000">
                <div class="carousel-inner">
                    <!-- carousel items -->
                    <div class="carousel-item active">
                        <img src="img/dpn/1.jpg" class="d-block w-100" alt="Foto 1" />
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="beranda-content">
            <div class="text-center">
                <h1>Selamat Datang di PPM Malang Raya</h1>
                <p><b>Pondok Pesantren Mahasiswa Al Kautsar</b><br>"Sarjana yang Mubalight - Mubalight yang Sarjana"<br><i>Kuliah Nomor 1, Mondok Nomor 1</i></p>
                <a href="https://forms.gle/X4HXBBtRUnuCBTZz6" class="button-pelayanan" target="_blank">Daftar Disini</a>
                <button onclick="openModal()" class="button-pelayanan btn-profil-ppm">
                    <i class="fa-solid fa-play"></i> Profil PPM
                </button>
            </div>
        </div>

        <div id="youtubeModal" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content" style="background-color: #007bff; border-radius: 20px;">
                    <div class="modal-header border-0">
                        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close" onclick="closeModal()">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body p-0">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe id="youtubeFrame" class="embed-responsive-item" style="border-radius: 0 0 20px 20px;" src="" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
    function openModal() {
      $('#youtubeModal').modal('show');
      document.getElementById('youtubeFrame').src = "https://www.youtube.com/embed/Un_0y_10vB8?autoplay=1";
    }
  
    function closeModal() {
      $('#youtubeModal').modal('hide');
      document.getElementById('youtubeFrame').src = "";
    }
    </script>
    
</body>
</html>