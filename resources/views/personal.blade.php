<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Al Izza Tegar Pangestu | Personal Website</title>
    @vite('resources/sass/app.scss')
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg bg-purple" data-bs-theme="dark">
        <div class="container py-2 px-4">
            <a href="#home" class="navbar-brand mb-0 h1 fw-semibold d-flex align-items-center">
                <img src="{{ Vite::asset('resources/images/logo-w.jpeg') }}" alt="Logo Tegar" style="width: 36px;" class="me-2">Tegar<span class="text-warning">.</span>
            </a>

            <button type="button" class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="offcanvas offcanvas-end bg-purple" id="offcanvasNavbar">
                <div class="offcanvas-header pb-0 px-4">
                    <h5 class="offcanvas-title text-white" id="offcanvasNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body pt-0 px-4">
                    <hr class="d-lg-none text-white-50">
                    <ul class="navbar-nav ms-lg-auto">
                        <li class="nav-item"><a href="#home" class="nav-link active" data-bs-dismiss="offcanvas">Home</a></li>
                        <li class="nav-item"><a href="#about" class="nav-link" data-bs-dismiss="offcanvas">Tentang</a></li>
                        <li class="nav-item"><a href="#skills" class="nav-link" data-bs-dismiss="offcanvas">Keahlian</a></li>
                        <li class="nav-item"><a href="#projects" class="nav-link" data-bs-dismiss="offcanvas">Project</a></li>
                        <li class="nav-item"><a href="#contact" class="nav-link" data-bs-dismiss="offcanvas">Kontak</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- Home -->
    <section id="home" class="bg-light pt-5 mt-5">
        <div class="container py-5 px-4">
            <div class="row align-items-center">
                <div class="col-md-5 order-md-2 text-center mb-5 mb-md-0">
                    <img src="{{ Vite::asset('resources/images/los.jpeg') }}" alt="Foto profil Al Izza Tegar Pangestu" class="img-fluid profile-img">
                </div>
                <div class="col-md-7 order-md-1">
                    <p class="text-purple fw-semibold mb-2">Halo, saya</p>
                    <h1 class="display-4 fw-bold">Al Izza Tegar Pangestu</h1>
                    <p class="fs-5 mt-3 text-muted">Mahasiswa S1 Sistem Informasi, Telkom University Surabaya, yang sedang belajar pengembangan aplikasi web dengan HTML, CSS, Bootstrap, dan Laravel.</p>
                    <div class="d-flex flex-column flex-sm-row mt-4">
                        <a href="#projects" class="btn bg-purple text-white btn-lg mb-3 me-sm-3 px-4">Lihat Project</a>
                        <a href="#contact" class="btn btn-outline-dark btn-lg mb-3 px-4">Hubungi Saya</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tentang -->
    <section id="about">
        <div class="container py-5 px-4">
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="mb-3">
                        <i class="bi bi-person-fill fs-2 bg-warning py-2 px-3 rounded-3 text-white"></i>
                    </div>
                    <h2 class="display-6 mb-3">Tentang Saya</h2>
                    <p class="fs-5">Saya tertarik membangun aplikasi web yang rapi, responsif, dan mudah digunakan. Saat ini saya mempelajari dasar-dasar pengembangan web, mulai dari struktur HTML, framework CSS Bootstrap, hingga framework PHP Laravel.</p>
                </div>
                <div class="col-lg-6">
                    <ul class="list-group list-group-flush fs-5">
                        <li class="list-group-item"><i class="bi bi-mortarboard-fill text-purple me-3"></i>S1 Sistem Informasi</li>
                        <li class="list-group-item"><i class="bi bi-building text-purple me-3"></i>Telkom University Surabaya</li>
                        <li class="list-group-item"><i class="bi bi-geo-alt-fill text-purple me-3"></i>Surabaya, Jawa Timur</li>
                        <li class="list-group-item"><i class="bi bi-code-slash text-purple me-3"></i>Pengembangan Aplikasi Web</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Keahlian -->
    <section id="skills" class="bg-light">
        <div class="container py-5 px-4">
            <div class="mb-3">
                <i class="bi bi-stars fs-2 bg-info py-2 px-3 rounded-3 text-white"></i>
            </div>
            <h2 class="display-6 mb-4">Keahlian</h2>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm card-hover">
                        <div class="card-body">
                            <i class="bi bi-filetype-html fs-1 text-purple"></i>
                            <h5 class="card-title mt-2">HTML &amp; CSS</h5>
                            <p class="card-text text-muted">Menyusun struktur dan tampilan halaman web.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm card-hover">
                        <div class="card-body">
                            <i class="bi bi-bootstrap-fill fs-1 text-purple"></i>
                            <h5 class="card-title mt-2">Bootstrap</h5>
                            <p class="card-text text-muted">Grid responsif, komponen, dan kelas utilitas.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm card-hover">
                        <div class="card-body">
                            <i class="bi bi-filetype-php fs-1 text-purple"></i>
                            <h5 class="card-title mt-2">PHP &amp; Laravel</h5>
                            <p class="card-text text-muted">Konfigurasi awal project, .env, dan migrasi database.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm card-hover">
                        <div class="card-body">
                            <i class="bi bi-database-fill fs-1 text-purple"></i>
                            <h5 class="card-title mt-2">MySQL</h5>
                            <p class="card-text text-muted">Mengelola database melalui phpMyAdmin.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Project -->
    <section id="projects">
        <div class="container py-5 px-4">
            <div class="mb-3">
                <i class="bi bi-folder-fill fs-2 bg-success py-2 px-3 rounded-3 text-white"></i>
            </div>
            <h2 class="display-6 mb-4">Project</h2>
            <div class="row row-cols-1 row-cols-lg-3 g-4">
                <div class="col">
                    <div class="card h-100 shadow-sm card-hover">
                        <img src="{{ Vite::asset('resources/images/ea.jpeg') }}" class="card-img-top" alt="Tampilan project Bootstrap Clone">
                        <div class="card-body">
                            <span class="badge bg-purple mb-2">Modul 7</span>
                            <h5 class="card-title">Bootstrap Clone</h5>
                            <p class="card-text text-muted">Meniru halaman utama website Bootstrap lengkap dengan navbar offcanvas, section, dan footer.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow-sm card-hover">
                        <img src="{{ Vite::asset('resources/images/losdol.jpeg') }}" class="card-img-top" alt="Tampilan project Laravel Example App">
                        <div class="card-body">
                            <span class="badge bg-purple mb-2">Modul 8</span>
                            <h5 class="card-title">Laravel Example App</h5>
                            <p class="card-text text-muted">Instalasi Laravel 13, konfigurasi .env, koneksi MySQL, dan migrasi database.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow-sm card-hover">
                        <img src="{{ Vite::asset('resources/images/loss.jpeg') }}" class="card-img-top" alt="Tampilan project Personal Website">
                        <div class="card-body">
                            <span class="badge bg-purple mb-2">Tugas</span>
                            <h5 class="card-title">Personal Website</h5>
                            <p class="card-text text-muted">Halaman profil responsif ini, dibangun dengan HTML, CSS, dan Bootstrap.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Kontak -->
    <section id="contact" class="bg-light">
        <div class="container py-5 px-4">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8">
                    <div class="mb-3">
                        <i class="bi bi-envelope-fill fs-2 bg-danger py-2 px-3 rounded-3 text-white"></i>
                    </div>
                    <h2 class="display-6 mb-3">Hubungi Saya</h2>
                    <p class="fs-5 text-muted">Tertarik berdiskusi atau berkolaborasi? Silakan hubungi saya melalui kontak berikut.</p>
                    <!-- GANTI alamat email dan tautan sosial media dengan milik Anda -->
                    <a href="mailto:alizzategar890@gmail.com" class="btn bg-purple text-white btn-lg px-4 mb-3">
                        <i class="bi bi-envelope me-2"></i>Kirim Email
                    </a>
                    <div class="fs-3">
                        <a href="https://github.com/alizzategar890" class="social-link me-3" aria-label="GitHub"><i class="bi bi-github"></i></a>
                        <a href="https://linkedin.com/in/alizzategar" class="social-link me-3" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                        <a href="https://instagram.com/alizzategar" class="social-link" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="footer" class="bg-dark text-white-50 py-4">
        <div class="container px-4 d-flex flex-column flex-md-row justify-content-between">
            <small class="d-flex align-items-center mb-2 mb-md-0">
                <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="Logo" style="width: 24px;" class="me-2">
                &copy; 2026 Al Izza Tegar Pangestu. Sistem Informasi, Telkom University Surabaya.
            </small>
            <small>Dibuat dengan <a href="https://getbootstrap.com" class="text-white">Bootstrap 5</a></small>
        </div>
    </footer>

    @vite('resources/js/app.js')
</body>
</html>
