@extends('layouts.app')  <!-- Gunakan layout utama -->

@section('content')  <!-- Isi konten utama -->
@extends('layouts.app') <!-- Pastikan ini sesuai dengan layout utama yang kamu pakai -->

@section('content')
<!-- Beranda Section -->
<div id="beranda-section" class="position-relative overflow-hidden">
    <div class="carousel-background">
        <div id="carousel-beranda" class="carousel slide" data-ride="carousel" data-interval="1500">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('img/dpn/1.jpg') }}" class="d-block w-100" alt="Foto 1" />
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/dpn/3.jpg') }}" class="d-block w-100" alt="Foto 3" />
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/dpn/4.jpg') }}" class="d-block w-100" alt="Foto 4" />
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/dpn/5.jpg') }}" class="d-block w-100" alt="Foto 5" />
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/dpn/6.jpg') }}" class="d-block w-100" alt="Foto 6" />
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/dpn/7.jpg') }}" class="d-block w-100" alt="Foto 7" />
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/dpn/8.jpg') }}" class="d-block w-100" alt="Foto 8" />
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/dpn/9.jpg') }}" class="d-block w-100" alt="Foto 9" />
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/dpn/10.jpg') }}" class="d-block w-100" alt="Foto 10" />
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/dpn/11.jpg') }}" class="d-block w-100" alt="Foto 11" />
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

<!-- Sejarah Section -->
<section id="sejarah" class="section-sejarah">
    <div class="container text-center">
        <h2 class="mb-5">Sejarah Kami</h2>
        <div class="row align-items-center">
            <div class="col-md-6 mb-4 mb-md-0">
                <img src="{{ asset('img/sejarah.png') }}" alt="Sejarah" class="img-fluid rounded shadow" />
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

<!-- Video Profil Kami -->
<section class="section-video" id="profile" style="scroll-margin-top: 32px;">
    <h2>Video Profil Kami</h2>
    <p>Saksikan sekilas tentang kehidupan kami.</p>
    <div class="video-container">
        <div class="video-embed">
            <video autoplay muted loop controls>
                <source src="{{ asset('img/ppm.mp4') }}" type="video/mp4">
                Browser Anda tidak mendukung tag video.
            </video>
        </div>
    </div>
</section>

<!-- Visi Misi -->
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

<!-- Struktur Kepengurusan Pondok -->
<section id="struktur">
    <h2><b>Struktur Kepengurusan Pondok</b></h2>
    <div class="wrapper">
        <div class="box struktur-box">
            Kepala Pondok
            <div class="struktur-overlay">
                <img src="{{ asset('img/kepala.png') }}" alt="Kepala Pondok">
                <span>Bp. Rudi</span>
            </div>
        </div>
        <div class="line-vertical"></div>
        <div class="box struktur-box">
            Wakil Kepala Pondok
            <div class="struktur-overlay">
                <img src="{{ asset('img/wakil.png') }}" alt="Wakil Kepala">
                <span>Bp. Muaz</span>
            </div>
        </div>
        <!-- Struktur lainnya di sini... -->
    </div>
</section>

<!-- Statistik Pondok -->
<section id="statistik" style="scroll-margin-top: 10px;">
    <h2>Data Statistik Pondok</h2>
    <div class="stat-container">
        <div class="stat-box">
            <div class="icon"><i class="fas fa-chalkboard-teacher"></i></div>
            <h3 class="counter" data-target="35">7</h3>
            <p>Tenaga Kependidikan</p>
            <a href="{{ route('tendik.index2') }}" class="btn-stat">Lihat Profil</a>
        </div>
        <!-- Statistik lainnya di sini... -->
    </div>
</section>

<!-- Testimoni -->
<section id="testimoni" style="scroll-margin-top: 10px;">
    <h2>BOX ULASAN PPM AL KAUTSAR</h2>
    <div class="google-review">
        @foreach($ulasan as $item)
        <div class="review-item">
            <img src="{{ asset('img/Fotouser.jpg') }}" alt="{{ $item->nama }}">
            <div class="review-content">
                <h4>{{ $item->nama }}</h4>
                <div class="stars">{{ str_repeat("⭐", $item->rating) }}</div>
                <p>{{ $item->ulasan }}</p>
            </div>
        </div>
        @endforeach
    </div>
    <div class="text-center mt-4">
        <a href="{{ route('ulasan.create') }}" class="btn-keren">Tambahkan Ulasanmu</a>
    </div>
</section>

<!-- Kegiatan Section -->
<section id="kegiatan" style="scroll-margin-top: 22px;">
    <h2>Kegiatan Pondok</h2>
    <div class="kegiatan-utama">
        <img src="{{ asset('img/ac1.jpg') }}" alt="Pesantren Ramadhan">
        <div class="overlay-text">
            <h3>Silaturahim Syawal 1446H</h3>
            <p>Bersalam salaman antar santri, saling memaafkan dan mempererat persaudaraan.</p>
            <a href="{{ route('kegiatan') }}" class="btn-kegiatan"><i class="fas fa-users"></i>Kegiatan lainnya</a>
        </div>
    </div>

    <div class="grid-kegiatan">
        <div class="card-kegiatan">
            <img src="{{ asset('img/ac2.jpg') }}" alt="Kajian Akbar">
            <h4>Mini Soccer</h4>
        </div>
        <div class="card-kegiatan">
            <img src="{{ asset('img/ac3.jpg') }}" alt="Pelatihan Tahsin">
            <h4>PENA Bersama</h4>
        </div>
        <div class="card-kegiatan">
            <img src="{{ asset('img/ac4.jpg') }}" alt="Bakti Sosial">
            <h4>AOV (Al Kautsar On Vacation)</h4>
        </div>
        <div class="card-kegiatan">
            <img src="{{ asset('img/ac5.jpg') }}" alt="Rihlah Santri">
            <h4>Festival Santri Sholeh</h4>
        </div>
    </div>
</section>

<!-- Prestasi Section -->
<section class="container my-5" id="prestasi" style="scroll-margin-top: 1px;">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Prestasi</h2>
        <a href="{{ route('prestasi') }}" class="btn btn-outline-primary"><i class="fas fa-medal"></i>Prestasi Selengkapnya</a>
    </div>

    <div class="row">
        <!-- Prestasi 1 -->
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('img/prestasi1.jpg') }}" class="card-img-top" alt="Prestasi 1">
                <div class="card-body">
                    <p class="card-text"><b>Hasan Argadinata, S.Pd, M.Pd, MCE, CRA, CRMPA.</b><br>(S2 Maxima Cumlaude di Umur 23 Tahun)<br>
                        "Berprestasi tak mengenal batas usia! Di usia 23 tahun, perjalanan akademikku membawaku ke tingkat selanjutnya. Dari pondok pesantren hingga kuliah S2, setiap langkahku ditenun oleh semangat fisabilillah dan ketekunan. Terimakasih kepada semua yang telah mendukungku!."<br> - Hasan Argadinata</p>
                </div>
            </div>
        </div>

        <!-- Prestasi 2 -->
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('img/prestasi2.jpg') }}" class="card-img-top" alt="Prestasi 2">
                <div class="card-body">
                    <p class="card-text"><b>Ayu Auliya Rahman S.Pd</b><br>(Lulusan UM S1 Pendidikan Biologi)<br>
                        "Jarak jauh dari rumah merupakan bukan penghambat bagi kita untuk menimba ilmu, saya membuktikan bahwa semangat kuliah juga tidak akan terhambat dengan kegiatan dalam aktivitas di pondok. Orang tua mu akan bangga dengan kedua pencapaianmu." <br> - Ayu Aulya Rahman</p>
                </div>
            </div>
        </div>

        <!-- Prestasi 3 -->
        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset('img/prestasi3.jpg') }}" class="card-img-top" alt="Prestasi 3">
                <div class="card-body">
                    <p class="card-text"><b>Syefa Dou Abirama</b><br>(Peraih Golden Ticket UM Jalur Prestasi)<br>
                        "Menjadi seorang atlet bukan sekadar berlatih untuk menang. Ini adalah perjalanan panjang, penuh jatuh bangun, rasa lelah, rasa sakit, dan ragu yang tak terhitung jumlahnya. Namun justru di sanalah makna sesungguhnya ditemukan: tentang keberanian untuk terus melangkah, tentang semangat yang tidak pernah padam, dan tentang keyakinan bahwa setiap tetes keringat adalah investasi untuk impian yang lebih besar. Menjadi atlet adalah memilih untuk tidak menyerah, bahkan ketika dunia berkata itu mustahil." <br> - Abika</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@endsection

@push('styles')
<link href="{{ asset('css/home.css') }}" rel="stylesheet">
@endpush

@push('scripts')
<script src="{{ asset('js/home.js') }}"></script>
@endpush
