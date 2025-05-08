86% penyimpanan digunakan … Jika ruang penyimpanan sudah penuh, Anda tidak akan dapat membuat, mengedit, dan mengupload file.
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PPM Malang Raya - Pondok Pesantren Mahasiswa Al Kautsar</title>

<!-- Bootstrap -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" />

<!-- Custom Styles -->
<link href="styles.css" rel="stylesheet" />

<!-- Font Awesome Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

<!-- Google Font: Playfair Display -->
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet" />

<!-- jQuery (latest) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Popper.js (required for Bootstrap JS) -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- AOS Animation CSS -->
<link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />

</head>
<body data-spy="scroll" data-target="#navbarNav" data-offset="120">
  <a href="#" class="scroll-top" id="scrollTopBtn" aria-label="Scroll to Top">
    <img src="img/panah.png" alt="Scroll to Top">
  </a>
  <a href="https://wa.me/6281234567890?text=Assalamu'alaikum%20Wr.Wb.%2C%20saya%20ingin%20bertanya%20tentang%20PPM%20Al%20Kautsar" class="wa-float" target="_blank" aria-label="Chat via WhatsApp">
    <img src="img/favicon-64x64.ico" alt="WhatsApp">
  </a>

  <nav class="navbar navbar-expand-lg navbar-dark fixed-top custom-navbar">
    <img src="img/logoppm.jpeg" alt="Logo PPM"  style="width: 40px; height: 40px; margin-right: 10px; border-radius: 6px;" />
    <a class="navbar-brand" href="#beranda-section">PPM Al Kautsar</a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a class="nav-link" href="#beranda-section">Beranda</a></li>
        <li class="nav-item"><a class="nav-link" href="#profile">Profil</a></li>
        <li class="nav-item"><a class="nav-link" href="#testimoni">Ulasan</a></li>
        <li class="nav-item"><a class="nav-link" href="#kegiatan">Kegiatan</a></li>
        <li class="nav-item"><a class="nav-link" href="#prestasi">Prestasi</a></li>
        <li class="nav-item"><a class="nav-link" href="#footer">Tentang</a></li>
      </ul>
    </div>
  
    <form action="login/login.php" method="get">
  <button class="sign-in-btn" id="signInBtn" type="submit">
    <div class="sign-in-content">
      <i class="fas fa-right-to-bracket sign-in-icon"></i>
      <img src="img/running-man.png" alt="Running" class="running-icon">
      <span>Sign In</span>
    </div>
  </button>
</form>

    <div class="menu-toggle" id="menuToggle">
      <span class="bar"></span>
      <span class="bar"></span>
      <span class="bar"></span>
    </div>

    <div class="nav-sidebar" id="sidebar"> 
      <a href="#beranda-section" class="nav-link">Beranda</a> 
      <a href="#profile" class="nav-link">Profil</a> 
      <a href="#testimoni" class="nav-link">Ulasan</a> 
      <a href="#kegiatan" class="nav-link">Kegiatan</a> 
      <a href="#prestasi" class="nav-link">Prestasi</a> 
      <a href="#footer" class="nav-link">Tentang</a> 
    </div> 
    <div class="sidebar-overlay" id="sidebar-overlay"></div> 
  </nav>
  <script src="navbar.js"></script>

  <div id="beranda-section" class="position-relative overflow-hidden">
    <div class="carousel-background">
      <div id="carousel-beranda" class="carousel slide" data-ride="carousel" data-interval="1500">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/dpn/1.jpg" class="d-block w-100" alt="Foto 1" />
          </div>
          <div class="carousel-item">
            <img src="img/dpn/3.jpg" class="d-block w-100" alt="Foto 3" />
          </div>
          <div class="carousel-item">
            <img src="img/dpn/4.jpg" class="d-block w-100" alt="Foto 4" />
          </div>
          <div class="carousel-item">
            <img src="img/dpn/5.jpg" class="d-block w-100" alt="Foto 5" />
          </div>
          <div class="carousel-item">
            <img src="img/dpn/6.jpg" class="d-block w-100" alt="Foto 6" />
          </div>
          <div class="carousel-item">
            <img src="img/dpn/7.jpg" class="d-block w-100" alt="Foto 7" />
          </div>
          <div class="carousel-item">
            <img src="img/dpn/8.jpg" class="d-block w-100" alt="Foto 8" />
          </div>
          <div class="carousel-item">
            <img src="img/dpn/9.jpg" class="d-block w-100" alt="Foto 9" />
          </div>
          <div class="carousel-item">
            <img src="img/dpn/10.jpg" class="d-block w-100" alt="Foto 10" />
          </div>
          <div class="carousel-item">
            <img src="img/dpn/11.jpg" class="d-block w-100" alt="Foto 11" />
          </div>
        </div>
      </div>
    </div>

    <div class="beranda-content">
      <div class="text-center">
        <h1>Selamat Datang di PPM Malang Raya</h1>
        <p><b>Pondok Pesantren Mahasiswa Al Kautsar</b> <br>"Sarjana yang Mubalight - Mubalight yang Sarjana"
        <br><i>Kuliah Nomor 1, Mondok Nomor 1</i></p>
        <a href="https://forms.gle/X4HXBBtRUnuCBTZz6" class="button-pelayanan" target="_blank">Daftar Disini</a>
      </div>
    </div>
  </div>

  <section id="sejarah" class="section-sejarah">
    <div class="container text-center">
        <h2 class="mb-5">Sejarah Kami</h2>
      <div class="row align-items-center">
        <div class="col-md-6 mb-4 mb-md-0">
          <img src="img/sejarah.png" alt="Sejarah" class="img-fluid rounded shadow" />
        </div>
        <div class="col-md-6 text-start">
          <div class="timeline">
            <div class="sejarah-item">
              <div class="timeline-dot"></div>
              <div class="sejarah-deskripsi">
                <h5>2008 - PPM Baitul Jannah</h5>
                <p>Awal adanya PPM di Malang Raya ini adalah pada PPM Baitul Jannah yang menjadi batu loncatan berkembangnya PPM di daerah Malang</p>
              </div>
            </div>
            <div class="sejarah-item">
              <div class="timeline-dot"></div>
              <div class="sejarah-deskripsi">
                <h5>2012 - PPM Al Kautsar</h5>
                <p>Setelah berjalannya PPM Baitul Jannah selama 4 tahun, kami mulai mendirikan PPM baru bernama PPM Al Kautsar yang berbeda lokasi.</p>
              </div>
            </div>
            <div class="sejarah-item">
              <div class="timeline-dot"></div>
              <div class="sejarah-deskripsi">
                <h5>2013 - PPM Malang Raya</h5>
                <p>Setelah dibentuknya kedua PPM tadi, maka kami mendirikan sebuah organisasi pengelola yang berguna mengelola PPM dalam satu struktur bernama PPM Malang Raya</p>
              </div>
            </div>
            <div class="sejarah-item">
              <div class="timeline-dot"></div>
              <div class="sejarah-deskripsi">
                <h5>2016 - Yayasan Bina Insani Sukses Malang</h5>
                <p>Agar adanya PPM ini resmi dan diakui oleh pemerintah setempat atau kementrian agama terkait maka PPM ini di bawahi oleh Yayasan Bina Insani Sukses Malang yang terdaftar resmi di Negara</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="gradiasi-putih-biru"></div>
  <section class="section-video" id="profile" style="scroll-margin-top: 32px;">
    <h2>Video Profil Kami</h2>
    <p>Saksikan sekilas tentang kehidupan kami.</p>
    <div class="video-container">
      <div class="video-embed">
          <video autoplay muted loop controls>
          <source src="img/ppm.mp4" type="video/mp4">
          Browser Anda tidak mendukung tag video.
        </video>
      </div>
    </div>
  </section>
  <div></div>
  
  <section id="misiku" class="misiku-section">
    <div class="container">
      <h2 class="section-title text-center">VISI MISI PPM</h2>
      <div class="row">
        <div class="col-md-6">
          <div class="visi-box">
            <h3>Visi</h3>
            <ol>
              <li>Menjadi lembaga unggulan dalam pembinaan karakter Islami dan akademik.</li>
              <li>Mencetak generasi yang siap bersaing di era global dengan dasar iman dan ilmu.</li>
              <li>Mewujudkan lingkungan yang berorientasi pada pembentukan akhlak dan intelektual.</li>
            </ol>
          </div>
        </div>
        <div class="col-md-6">
          <div class="misi-box">
            <h3>Misi</h3>
            <ol>
              <li>Menyelenggarakan pendidikan berbasis nilai-nilai keislaman dan keilmuan.</li>
              <li>Mengembangkan potensi santri/mahasiswa dalam bidang akademik dan non-akademik.</li>
              <li>Menciptakan lingkungan yang kondusif untuk belajar dan berorganisasi.</li>
              <li>Menanamkan nilai integritas, tanggung jawab, dan kepemimpinan.</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="struktur">
    <h2><b>Struktur Kepengurusan Pondok</b></h2>
    <div class="wrapper">
  
      <div class="box struktur-box">
        Kepala Pondok
        <div class="struktur-overlay">
          <img src="img/kepala.png" alt="Kepala Pondok">
          <span>Bp. Rudi</span>
        </div>
      </div>
      <div class="line-vertical"></div>
  
      <div class="box struktur-box">
        Wakil Kepala Pondok
        <div class="struktur-overlay">
          <img src="img/wakil.png" alt="Wakil Kepala">
          <span>Bp. Muaz</span>
        </div>
      </div>
      <div class="line-vertical"></div>
  
      <div class="box struktur-box">
        Pendamping Kepala
        <div class="struktur-overlay">
          <img src="img/pendamping.png" alt="Pendamping">
          <span>Bp. Ubayd</span>
          <img src="img/dg1.png" alt="Dewan Guru">
          <span>Ust. Arif</span>
          <img src="img/dg5.png" alt="Dewan Guru">
          <span>Ust. Tegar</span>
        </div>
      </div>
      <div class="line-vertical"></div>
  
      <div class="horizontal-line"><span></span></div>
  
      <div class="level">
        <div class="box struktur-box">
          Dewan Guru
          <div class="struktur-overlay">
            <img src="img/dg2.png" alt="Dewan Guru">
            <span>Ust. Fandy</span>
            <img src="img/dg3.png" alt="Dewan Guru">
            <span>Ust. Rio</span>
            <img src="img/dg4.png" alt="Dewan Guru">
            <span>Ust. Sindung</span>
          </div>
        </div>
        <div class="box struktur-box">
          Pengurus Keuangan
          <div class="struktur-overlay">
            <img src="img/ku1.png" alt="Keuangan">
            <span>Bp. Kholis</span>
            <img src="img/ku2.png" alt="Keuangan">
            <span>Sdr. Roma</span>
            <img src="img/ku3.png" alt="Keuangan">
            <span>Sdr. Fadhil</span>
          </div>
        </div>
      </div>
  
      <div class="line-vertical"></div>
  
      <div class="level">
        <div class="box struktur-box">
          Tim 7
          <div class="struktur-overlay">
            <img src="img/dg6.png" alt="Tim 7">
            <span>Ust. Irvan</span>
            <img src="img/dg7.png" alt="Tim 7">
            <span>Ust. Catur</span>
          </div>
        </div>
        <div class="box struktur-box">
          Penerobos
          <div class="struktur-overlay">
            <img src="img/pb1.png" alt="Penerobos">
            <span>Sdr. Raihan</span>
            <img src="img/pb2.png" alt="Penerobos">
            <span>Sdr. Sulthon</span>
            <img src="img/pb3.png" alt="Penerobos">
            <span>Sdr. Wira</span>
            <img src="img/pb4.png" alt="Penerobos">
            <span>Sdr. Ryant</span>
          </div>
        </div>
        <div class="box struktur-box">
          Kesiswaan
          <div class="struktur-overlay">
            <img src="img/ksw1.png" alt="Kesiswaan">
            <span>Sdr. Arbi</span>
            <img src="img/ksw2.png" alt="Kesiswaan">
            <span>Sdr. Panca</span>
          </div>
        </div>
      </div>
  
      <div class="line-vertical"></div>
  
      <div class="box struktur-box">
        Santri
        <div class="struktur-overlay">
          <img src="img/sw1.png" alt="Santri">
          <span>Santri Teladan</span>
          <img src="img/sw2.png" alt="Santri">
        </div>
      </div>
  
    </div>
  </section>  

  <section id="statistik" style="scroll-margin-top: 10px;">
    <h2>Data Statistik Pondok</h2>
    <div class="stat-container">
      <div class="stat-box">
        <div class="icon"><i class="fas fa-chalkboard-teacher"></i></div>
        <h3 class="counter" data-target="35">7</h3>
        <p>Tenaga Kependidikan</p>
        <a href="tendik/tendik.php" class="btn-stat">Lihat Profil</a>
      </div>
      <div class="stat-box">
        <div class="icon"><i class="fas fa-user-graduate"></i></div>
        <h3 class="counter" data-target="500">65</h3>
        <p>Santri Aktif</p><br>
        <a href="santri-katalog/index.php" class="btn-stat">Data Santri</a>
      </div>
      <div class="stat-box">
        <div class="icon"><i class="fas fa-users"></i></div>
        <h3 class="counter" data-target="1200">800++</h3>
        <p>Alumni</p><br>
        <a href="alumni/index.php" class="btn-stat">Info Alumni</a>
      </div>
      <div class="stat-box">
      <div class="icon"><i class="fas fa-building"></i></div>
      <h3 class="counter" data-target="50">10+</h3>
      <p>Sarana Prasarana</p><br>
      <a href="fasilitas/index.php" class="btn-stat">Lihat Fasilitas</a>
    </div>
    </div>
  </section>

  <section id="testimoni" style="scroll-margin-top: 10px;">
    <h2>BOX ULASAN PPM AL KAUTSAR</h2>
    <div class="google-review">
      <div class="review-item">
        <img src="img/te1.jpg" alt="Ahmad">
        <div class="review-content">
          <h4>Ahmad Fauzan</h4>
          <div class="stars">⭐⭐⭐⭐⭐</div>
          <p>Belajar di sini bukan hanya menambah ilmu, tapi juga membentuk akhlak yang baik.</p>
        </div>
      </div>
      <div class="review-item">
        <img src="img/te2.jpg" alt="Aisyah">
        <div class="review-content">
          <h4>Siti Aisyah</h4>
          <div class="stars">⭐⭐⭐⭐</div>
          <p>Lingkungan sangat mendukung untuk belajar. Saya merasa nyaman dan tenang di sini.</p>
        </div>
      </div>
      <div class="review-item">
        <img src="img/te3.jpg" alt="Hafidz">
        <div class="review-content">
          <h4>Hafidz Rahman</h4>
          <div class="stars">⭐⭐⭐⭐⭐</div>
          <p>Tempat terbaik untuk menghafal dan memperbaiki akhlak. Sangat direkomendasikan.</p>
        </div>
      </div>
    </div>
    <div class="text-center mt-4" >
      <a href="testimoni/testimoni.php" class="btn-keren">Tambahkan Ulasanmu</a>
    </div>
  </section>
  
  <section id="kegiatan" style="scroll-margin-top: 22px;">
    <h2>Kegiatan Pondok</h2>
  
    <div class="kegiatan-utama">
      <img src="img/ac1.jpg" alt="Pesantren Ramadhan">
      <div class="overlay-text">
        <h3>Silaturahim Syawal 1446H</h3>
        <p>Bersalam salaman antar santri, saling memaafkan dan mempererat persaudaraan.</p>
        <a href="kegiatan/kegiatan.php" class="btn-kegiatan"><i class="fas fa-users"></i>Kegiatan lainnya</a>
      </div>
    </div>
  
    <div class="grid-kegiatan">
      <div class="card-kegiatan">
        <img src="img/ac2.jpg" alt="Kajian Akbar">
        <h4>Mini Soccer</h4>
      </div>
      <div class="card-kegiatan">
        <img src="img/ac3.jpg" alt="Pelatihan Tahsin">
        <h4>PENA Bersama</h4>
      </div>
      <div class="card-kegiatan">
        <img src="img/ac4.jpg" alt="Bakti Sosial">
        <h4>AOV (Al Kautsar On Vacation)</h4>
      </div>
      <div class="card-kegiatan">
        <img src="img/ac5.jpg" alt="Rihlah Santri">
        <h4>Festival Santri Sholeh</h4>
      </div>
    </div>
    <!-- <a class="lihat-semua" href="kegiatan.php">Lihat Semua Kegiatan <i class="fas fa-arrow-right"></i></a> -->
  </section>
  
  <section  class="container my-5" id="prestasi" style="scroll-margin-top: 1px;">
    <div class="d-flex justify-content-between align-items-center mb-4" >
      <h2>Prestasi</h2>
      <a href="prestasi/prestasi.php" class="btn btn-outline-primary"><i class="fas fa-medal"></i>Prestasi Selengkapnya</a>
    </div>
  
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <img src="img/prestasi1.jpg" class="card-img-top" alt="Prestasi 1">
          <div class="card-body">
            <p class="card-text"><b>Hasan Argadinata, S.Pd, M.Pd, MCE, CRA, CRMPA.</b><br>(S2 Maxima Cumlaude di Umur 23 Tahun)<br> "Berprestasi tak mengenal batas usia! Di usia 23 tahun, perjalanan akademikku membawaku ke tingkat selanjutnya. Dari pondok pesantren hingga kuliah S2, setiap langkahku ditenun oleh semangat fisabilillah dan ketekunan. Terimakasih kepada semua yang telah mendukungku!." <br> - Hasan Argadinata</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="img/prestasi2.jpg" class="card-img-top" alt="Prestasi 2">
          <div class="card-body">
            <p class="card-text"><b>Ayu Auliya Rahman S.Pd</b><br>(Lulusan UM S1 Pendidikan Biologi)<br>"Jarak jauh dari rumah merupakan bukan penghambat bagi kita untuk menimba ilmu, saya ,membuktikan bahwa semangat kuliah juga tidak akan terhambat dengan kegiatan dalam aktivitas di pondok. Orang tua mu akan bangga dengan kedua pencapaianmu." <br> - Ayu Aulya Rahman</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="img/prestasi3.jpg" class="card-img-top" alt="Prestasi 3">
          <div class="card-body">
            <p class="card-text"><b>Syefa Dou Abirama</b><br>(Peraih Golden Ticket UM Jalur Prestasi)<br>"Menjadi seorang atlet bukan sekadar berlatih untuk menang. Ini adalah perjalanan panjang, penuh jatuh bangun, rasa lelah, rasa sakit, dan ragu yang tak terhitung jumlahnya. Namun justru di sanalah makna sesungguhnya ditemukan: tentang keberanian untuk terus melangkah, tentang semangat yang tidak pernah padam, dan tentang keyakinan bahwa setiap tetes keringat adalah investasi untuk impian yang lebih besar. Menjadi atlet adalah memilih untuk tidak menyerah, bahkan ketika dunia berkata itu mustahil." <br> - Abika</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <footer class="footer" id="footer">
    <div class="footer-container">
      <div class="footer-top">
        <div class="footer-about">
          <h2>PPM AL KAUTSAR</h2>
          <p>
            Pondok Pesantren Mahasiswa: Mewujudkan generasi sarjana berilmu fiqih, sesuai slogan 'Sarjana yang Mubaligh, Mubaligh yang Sarjana'.
          </p><br><p>Hubungi Kami</p>
          <div class="footer-socials">
            <a href="https://www.facebook.com/share/1J1Po2TLNa/" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/ppm_alkautsar?igsh=ZG4wbG5lMTFreWdl" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://youtube.com/@ppmal-kautsar6141?si=yK28UWqUGL0L-CIU" target="_blank"><i class="fab fa-youtube"></i></a>
            <a href="https://wa.me/+6285646322300" target="_blank"><i class="fab fa-whatsapp"></i></a>
            <a href="mailto:ppmalkautsar@gmail.com" target="_blank"><i class="fas fa-envelope"></i></a>
          </div>
        </div>
  
        <div class="footer-links-container">
          <div class="footer-links">
            <h3>Link Terkait</h3>
            <ul>
              <li><a href="https://www.ldii.or.id/" target="_blank">LDII</a></li>
              <li><a href="https://kemenag.go.id/" target="_blank">Kemenag RI</a></li>
              <li><a href="https://vervalyayasan.data.kemdikbud.go.id/index.php/Chome/profil?yayasan_id=379D3532-D82D-40E9-ABD2-4A86C14EFE0C" target="_blank">Yayasan</a></li>
            </ul>
          </div>

          <div class="footer-links-container">
            <div class="footer-links-group">
              <div class="footer-links">
                <h3>Selengkapnya</h3>
                <ul>
                  <li><a href="tendik/tendik.php">Biodata TENDIK</a></li>
                  <li><a href="santri-katalog/index.php">Biodata Santri</a></li>
                  <li><a href="alumni/index.php">Biodata Alumni</a></li>
                  <li><a href="kegiatan/kegiatan.php">Kegiatan Tahunan</a></li>
                  <li><a href="uks/uks.php">Unit Kegiatan Santri</a></li> 
                </ul>
              </div>
              <div class="footer-links">
                <ul>
                  <br>
                  <li><a href="jadwal/jadwal.php">Jadwal Harian</a></li>
                  <li><a href="fasilitas/index.php">Fasilitas</a></li>
                  <li><a href="prestasi/prestasi.php">Prestasi</a></li>
                  <li><a href="peraturan/peraturan.php">Peraturan & Biaya</a></li>
                  <li><a href="credit/credit.php">Credit/Creator</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
  
      <div class="footer-map-box">
        <iframe 
          src="https://maps.google.com/maps?q=PPM+Al Kautsar+Malang&output=embed"
          allowfullscreen
          loading="lazy">
        </iframe>
      </div>
    </div>
    
    <div class="footer-bottom">
      <p>&copy; 2025 PPM Al Kautsar. All rights reserved. | Developed by Meownyala Team</p>
    </div>    
  </footer>
  
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

  <script>
    const scrollTopBtn = document.getElementById("scrollTopBtn");
    scrollTopBtn.addEventListener("click", function (e) {
      e.preventDefault();
      window.scrollTo({
        top: 0,
        behavior: "smooth"
      });
    });
  </script>

  <script>
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
  </script>
  
</body>
</html>