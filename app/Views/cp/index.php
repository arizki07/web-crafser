<?= $this->extend('layouts/landing/main.php') ?>
<?= $this->section('content') ?>

<div class="container-xxl py-5 bg-primary hero-header mb-5" id="home">
    <div class="container my-5 py-5 px-lg-5">
        <div class="row g-5 py-5">
            <div class="col-lg-6 text-center text-lg-start">
                <h1 class="text-white mb-4 animated zoomIn">Web Crafter Service</h1>
                <p class="text-white pb-3 animated zoomIn">Web Crafter Service adalah sebuah bisnis owner yang bergerak dalam bidang teknologi informasi di Indonesia. Berdiri pada tahun 2022 di Cirebon Jawa Barat.</p>
                <a href="https://wa.me/6281312211348" class="btn btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft" target="_blank">Konsultasi</a>
                <a href="#contact" class="btn btn-outline-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Contact Us</a>
            </div>
            <!-- <div class="col-lg-6 text-center text-lg-start"> -->
            <!-- <img class="img-fluid" src="<?= base_url() ?>assets/img/logo/logo-single.png" alt=""> -->
            <!-- </div> -->
        </div>
    </div>
</div>

<!-- About Start -->
<div class="container-xxl py-5" id="about">
    <div class="container px-lg-5">
        <div class="row g-5">
            <div class="col-lg-6">
                <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="<?= base_url() ?>assets/img/logo/logo-height.png">
            </div>
            <div class="col-lg-6 wow" data-wow-delay="0.1s">
                <div class="section-title position-relative mb-4 pb-2">
                    <h6 class="position-relative text-primary ps-4">Tentang Kami</h6>
                    <h2 class="mt-2">Solusi pembuatan aplikasi terbaik dengan pengalaman 2 tahun</h2>
                </div>
                <p class="mb-4" style="text-align: justify;">
                    Web Crafter Service adalah sebuah <i>bisnis owner</i> yang bergerak dalam bidang teknologi informasi di Indonesia. Berdiri pada tahun 2022 di Cirebon Jawa Barat. Web Crafter Service tidak hanya menyediakan produk aplikasi yang sudah jadi, tetapi juga menawarkan jasa konsultasi IT. Dalam konsultasi IT, Web Crafter Service akan membimbing Anda dalam merancang aplikasi dan teknologi inovatif yang diperlukan untuk mengatasi permasalahan di lembaga Anda. Dengan bekerja sama dengan Web Crafter Service, Anda akan mengalami proses desain, produksi, dan pemanfaatan teknologi yang sesuai dengan kebutuhan Anda, membawa Anda pada pengalaman yang luar biasa. Teknologi ini akan mempermudah pekerjaan Anda dan menjanjikan peningkatan profitabilitas. Kepercayaan dari pelanggan setia terus berlanjut, mencirikan hubungan positif yang telah terjalin selama bertahun-tahun.
                </p>
                <div class="row g-3">
                    <div class="col-sm-6">
                        <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Website/Android</h6>
                        <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Professional Staff</h6>
                    </div>
                    <div class="col-sm-6">
                        <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>24/7 Support</h6>
                        <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Fair Prices</h6>
                    </div>
                </div>
                <div class="d-flex align-items-center mt-4">
                    <a class="btn btn-primary rounded-pill px-4 me-3" href="<?= base_url('error-page') ?>">Read More</a>
                    <a class="btn btn-outline-primary btn-square me-3" href="<?= current_url() ?>"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-primary btn-square me-3" href="<?= current_url() ?>"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-primary btn-square me-3" href="https://instagram.com/web-crafser" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-outline-primary btn-square" href="<?= current_url() ?>"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Newsletter Start -->
<div class="container-xxl bg-primary newsletter my-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container px-lg-5">
        <div class="row align-items-center" style="height: 250px;">
            <div class="col-12 col-md-6">
                <h3 class="text-white">Ingin Punya Website Sendiri?</h3>
                <small class="text-white">Web Crafter Service Siap Untuk Memenuhi Kebutuhan Anda.</small>
                <!-- <a type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2 text-white" href="https://wa.me/6281312211348" target="_blank"><i class="fa fa-paper-plane text-primary fs-4"></i></a> -->
                <div class="position-relative w-50 mt-3">
                    <!-- <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Enter Your Email" style="height: 48px;" disabled> -->
                    <a type="button" class="btn btn-secondary shadow-none text-white" href="https://wa.me/6281312211348" target="_blank"><i class="fa fa-paper-plane me-2"></i> Hubungi Kami</a>
                </div>
            </div>
            <div class="col-md-6 text-center mb-n5 d-none d-md-block">
                <img class="img-fluid mt-5" style="height: 250px;" src="<?= base_url() ?>assets/img/newsletter.png">
            </div>
        </div>
    </div>
</div>
<!-- Newsletter End -->


<!-- Service Start -->
<div class="container-xxl py-5" id="service">
    <div class="container px-lg-5">
        <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="position-relative d-inline text-primary ps-4">Our Services</h6>
            <h2 class="mt-2">What Solutions We Provide</h2>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <i class="fa fa-chart-line fa-2x"></i>
                    </div>
                    <h5 class="mb-3">SEO Optimization</h5>
                    <p>Ciptakan aplikasimu dengan presentase SEO terbaik.</p>
                    <!-- <a class="btn px-3 mt-auto mx-auto" href="">Read More</a> -->
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <i class="fa fa-tint fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Web Design</h5>
                    <p>Design aplikasi responsive yang bisa anda akses melalui website ataupun mobile.</p>
                    <!-- <a class="btn px-3 mt-auto mx-auto" href="">Read More</a> -->
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <i class="fa fa-globe fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Web Development</h5>
                    <p>Kami menyediakan layanan Pengelolaan dan pengembangan sistem aplikasi berbasis web, client-server, Dumb Terminal, maupun mobile.</p>
                    <!-- <a class="btn px-3 mt-auto mx-auto" href="">Read More</a> -->
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <i class="fa fa-code fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Programming</h5>
                    <p>Kami memakai bahasa program sesuai dengan request anda.</p>
                    <!-- <a class="btn px-3 mt-auto mx-auto" href="">Read More</a> -->
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <i class="fa fa-pen-nib fa-2x"></i>
                    </div>
                    <h5 class="mb-3">UI/UX Design</h5>
                    <p>Kami melayani Upgrade atau buat user interface website menjadi lebih menarik.</p>
                    <!-- <a class="btn px-3 mt-auto mx-auto" href="">Read More</a> -->
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                    <div class="service-icon flex-shrink-0">
                        <i class="fab fa-android fa-2x"></i>
                    </div>
                    <h5 class="mb-3">Mobile Apps</h5>
                    <p>Kami melayani pembuatan aplikasi android sesuai dengan keinginan anda.</p>
                    <!-- <a class="btn px-3 mt-auto mx-auto" href="">Read More</a> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->


<!-- Portfolio Start -->
<div class="container-xxl py-5" id="project">
    <div class="container px-lg-5">
        <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="position-relative d-inline text-primary ps-4">Our Projects</h6>
            <h2 class="mt-2">Project Completed</h2>
        </div>
        <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.1s">
            <div class="col-12 text-center">
                <ul class="list-inline mb-5" id="portfolio-flters">
                    <li class="btn px-3 pe-4 active" data-filter="*">All</li>
                    <li class="btn px-3 pe-4" data-filter=".education">Education</li>
                    <li class="btn px-3 pe-4" data-filter=".gis">GIS</li>
                    <li class="btn px-3 pe-4" data-filter=".ecommerce">E-Commerce</li>
                </ul>
            </div>
        </div>
        <div class="row portfolio-container">
            <div class="col-lg-4 col-md-6 portfolio-item education wow zoomIn mt-3" data-wow-delay="0.1s">
                <div class="position-relative rounded overflow-hidden">
                    <img class="img-fluid w-100" src="<?= base_url() ?>assets/img/project/akademik.png" alt="">
                    <div class="portfolio-overlay">
                        <a class="btn btn-light" href="<?= base_url() ?>assets/img/project/akademik.png" data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-primary"></i></a>
                        <div class="mt-auto">
                            <small class="text-white"><i class="fa fa-folder me-2"></i>Education</small>
                            <a class="h5 d-block text-white mt-1 mb-0" href="#">English Academy</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item education wow zoomIn mt-3" data-wow-delay="0.3s">
                <div class="position-relative rounded overflow-hidden">
                    <img class="img-fluid w-100" src="<?= base_url() ?>assets/img/project/monitoring.png" alt="">
                    <div class="portfolio-overlay">
                        <a class="btn btn-light" href="<?= base_url() ?>assets/img/project/monitoring.png" data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-primary"></i></a>
                        <div class="mt-auto">
                            <small class="text-white"><i class="fa fa-folder me-2"></i>Education</small>
                            <a class="h5 d-block text-white mt-1 mb-0" href="https://demo-smpn12sumber.000webhostapp.com/login" target="_blank">Student Monitoring System</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item ecommerce wow zoomIn mt-3" data-wow-delay="0.6s">
                <div class="position-relative rounded overflow-hidden">
                    <img class="img-fluid w-100" src="<?= base_url() ?>assets/img/project/cv ridho.png" alt="">
                    <div class="portfolio-overlay">
                        <a class="btn btn-light" href="<?= base_url() ?>assets/img/project/cv ridho.png" data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-primary"></i></a>
                        <div class="mt-auto">
                            <small class="text-white"><i class="fa fa-folder me-2"></i>E-Commerce</small>
                            <a class="h5 d-block text-white mt-1 mb-0" href="https://ridhorattan.com" target="_blank">CV Ridho Rottan Plumbon</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item education wow zoomIn mt-3" data-wow-delay="0.1s">
                <div class="position-relative rounded overflow-hidden">
                    <img class="img-fluid w-100" src="<?= base_url() ?>assets/img/project/raport.png" alt="">
                    <div class="portfolio-overlay">
                        <a class="btn btn-light" href="<?= base_url() ?>assets/img/project/raport.png" data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-primary"></i></a>
                        <div class="mt-auto">
                            <small class="text-white"><i class="fa fa-folder me-2"></i>Education</small>
                            <a class="h5 d-block text-white mt-1 mb-0" href="#">Eduraport</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item gis wow zoomIn mt-3" data-wow-delay="0.3s">
                <div class="position-relative rounded overflow-hidden">
                    <img class="img-fluid w-100" src="<?= base_url() ?>assets/img/project/gis.png" alt="">
                    <div class="portfolio-overlay">
                        <a class="btn btn-light" href="<?= base_url() ?>assets/img/project/gis.png" data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-primary"></i></a>
                        <div class="mt-auto">
                            <small class="text-white"><i class="fa fa-folder me-2"></i>GIS</small>
                            <a class="h5 d-block text-white mt-1 mb-0" href="#">GIS School</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio End -->


<!-- Testimonial Start -->
<div class="container-xxl bg-primary testimonial py-5 my-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5 px-lg-5">
        <div class="owl-carousel testimonial-carousel">
            <div class="testimonial-item bg-transparent border rounded text-white p-4">
                <i class="fa fa-quote-left fa-2x mb-3"></i>
                <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="<?= base_url() ?>assets/img/testimonial-1.jpg" style="width: 50px; height: 50px;">
                    <div class="ps-3">
                        <h6 class="text-white mb-1">Client Name</h6>
                        <small>Profession</small>
                    </div>
                </div>
            </div>
            <div class="testimonial-item bg-transparent border rounded text-white p-4">
                <i class="fa fa-quote-left fa-2x mb-3"></i>
                <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="<?= base_url() ?>assets/img/testimonial-2.jpg" style="width: 50px; height: 50px;">
                    <div class="ps-3">
                        <h6 class="text-white mb-1">Client Name</h6>
                        <small>Profession</small>
                    </div>
                </div>
            </div>
            <div class="testimonial-item bg-transparent border rounded text-white p-4">
                <i class="fa fa-quote-left fa-2x mb-3"></i>
                <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="<?= base_url() ?>img/testimonial-3.jpg" style="width: 50px; height: 50px;">
                    <div class="ps-3">
                        <h6 class="text-white mb-1">Client Name</h6>
                        <small>Profession</small>
                    </div>
                </div>
            </div>
            <div class="testimonial-item bg-transparent border rounded text-white p-4">
                <i class="fa fa-quote-left fa-2x mb-3"></i>
                <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded-circle" src="<?= base_url() ?>img/testimonial-4.jpg" style="width: 50px; height: 50px;">
                    <div class="ps-3">
                        <h6 class="text-white mb-1">Client Name</h6>
                        <small>Profession</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->


<!-- Team Start -->
<div class="container-xxl py-5" id="developers">
    <div class="container px-lg-5">
        <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="position-relative d-inline text-primary ps-4">Our Team</h6>
            <h2 class="mt-2">Team Developers</h2>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item">
                    <div class="d-flex">
                        <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5" style="width: 75px;">
                            <a class="btn btn-square text-primary bg-white my-1" href="https://www.facebook.com/rizki.redriver/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square text-primary bg-white my-1" href="https://www.twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square text-primary bg-white my-1" href="https://www.instagram.com/ahmdrrizki/" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-square text-primary bg-white my-1" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <img class="img-fluid rounded w-100" src="<?= base_url() ?>assets/img/developers/ahmadrizki.jpg" alt="ahmad rizki" title="ahmadrizki" loading="lazy">
                    </div>
                    <div class="px-4 py-3">
                        <h5 class="fw-bold m-0">Jhon Doe</h5>
                        <small>CEO</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item">
                    <div class="d-flex">
                        <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5" style="width: 75px;">
                            <a class="btn btn-square text-primary bg-white my-1" href="https://www.facebook.com/syarif.208/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square text-primary bg-white my-1" href="https://www.twitter.com/mosyahizuku/" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square text-primary bg-white my-1" href="https://www.instagram.com/mochsyarifhidayat13/" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-square text-primary bg-white my-1" href="https://www.linkedin.com/in/mochsyarifhidayat13/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <img class="img-fluid rounded w-100" src="<?= base_url() ?>assets/img/developers/mochsyarifhidayat.jpg" alt="ahmad rizki" title="ahmadrizki" loading="lazy">
                    </div>
                    <div class="px-4 py-3">
                        <h5 class="fw-bold m-0">Emma William</h5>
                        <small>Manager</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                <div class="team-item">
                    <div class="d-flex">
                        <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5" style="width: 75px;">
                            <a class="btn btn-square text-primary bg-white my-1" href="https://www.facebook.com/dimaspangestu/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square text-primary bg-white my-1" href="https://www.twitter.com/dpangestu" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square text-primary bg-white my-1" href="https://www.instagram.com/dp_pangestu_dimas/" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-square text-primary bg-white my-1" href="https://www.linkedin.com/in/dpangestu" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <img class="img-fluid rounded w-100" src="<?= base_url() ?>assets/img/developers/dimaspangestu.jpg" alt="ahmad rizki" title="ahmadrizki" loading="lazy">
                    </div>
                    <div class="px-4 py-3">
                        <h5 class="fw-bold m-0">Noah Michael</h5>
                        <small>Designer</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->

<?= $this->endSection() ?>