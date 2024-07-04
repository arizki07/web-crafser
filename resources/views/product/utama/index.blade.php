@extends('layouts.main')
@section('webcrafser')
    <div id="home" class="relative overflow-hidden bg-primary pt-[120px] md:pt-[130px] lg:pt-[160px]">
        <div class="container">
            <div class="-mx-4 flex flex-wrap items-center">
                <div class="w-full px-4">
                    <div class="hero-content wow fadeInUp mx-auto max-w-[780px] text-center" data-wow-delay=".2s">
                        <h1
                            class="mb-6 text-3xl font-bold leading-snug text-white sm:text-4xl sm:leading-snug lg:text-5xl lg:leading-[1.2]">
                            Web Crafser, IT Services & Consultants.
                        </h1>
                        <p class="mx-auto mb-9 max-w-[600px] text-base font-medium text-white sm:text-lg sm:leading-[1.44]">
                            Membantu bisnis Anda meraih keunggulan digital melalui solusi IT inovatif dan konsultasi
                            terpercaya.
                        </p>
                        <ul class="mb-10 flex flex-wrap items-center justify-center gap-5">
                            <li>
                                <a href="<?= base_url('web-crafter-service/hubungi-kami') ?>"
                                    class="inline-flex items-center justify-center rounded-md bg-white px-7 py-[14px] text-center text-base font-medium text-dark shadow-1 transition duration-300 ease-in-out hover:bg-gray-2 hover:text-body-color relative z-10">
                                    Hubungi
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('web-crafter-service/tentang-kami') ?>"
                                    class="flex items-center gap-4 rounded-md bg-white/[0.12] px-6 py-[14px] text-base font-medium text-white transition duration-300 ease-in-out hover:bg-white hover:text-dark relative z-10">
                                    <i class="fas fa-user-tie"></i>
                                    Tentang Kami
                                </a>
                            </li>
                        </ul>
                        <div class="mb-12 relative z-10" style="margin-top: 80px;">
                            <p class="mb-4 text-center text-base font-medium text-white">
                                Teknologi Yang Kami Gunakan
                            </p>
                            <div class="wow fadeInUp flex items-center justify-center gap-4 text-center"
                                data-wow-delay=".3s">

                                <div class="text-white/60 duration-300 ease-in-out hover:text-white">
                                    <i class="devicon-codeigniter-plain" style="font-size: 30px;"></i>
                                </div>

                                <div class="text-white/60 duration-300 ease-in-out hover:text-white">
                                    <i class="devicon-laravel-plain" style="font-size: 30px;"></i>
                                </div>

                                <div class="text-white/60 duration-300 ease-in-out hover:text-white">
                                    <i class="devicon-bootstrap-plain" style="font-size: 30px;"></i>
                                </div>

                                <div class="text-white/60 duration-300 ease-in-out hover:text-white">
                                    <i class="devicon-tailwindcss-plain" style="font-size: 30px;"></i>
                                </div>

                                <div class="text-white/60 duration-300 ease-in-out hover:text-white">
                                    <i class="devicon-react-original" style="font-size: 30px;"></i>
                                </div>

                                <div class="text-white/60 duration-300 ease-in-out hover:text-white">
                                    <i class="devicon-javascript-plain" style="font-size: 30px;"></i>
                                </div>

                                <div class="text-white/60 duration-300 ease-in-out hover:text-white">
                                    <i class="devicon-java-plain" style="font-size: 30px;"></i>
                                </div>

                                <div class="text-white/60 duration-300 ease-in-out hover:text-white">
                                    <i class="devicon-flutter-plain" style="font-size: 30px;"></i>
                                </div>

                            </div>
                        </div>

                        <div class="w-full px-4">
                            <div class="wow fadeInUp relative z-10 mx-auto max-w-[845px]" data-wow-delay=".25s">
                                <!-- <div class="mt-16">
                      <img
                        src="assets/images/hero/hero-image.jpg"
                        alt="hero"
                        class="mx-auto max-w-full rounded-t-xl rounded-tr-xl"
                      />
                    </div> -->
                                <div class="absolute -left-9 bottom-0 z-[-1]">
                                    <img src="<?= base_url() ?>landing/assets/images/aksesoris/aksesoris-1.svg"
                                        alt="Web Crafser">
                                </div>
                                <div class="absolute -right-6 -top-6 z-[-1]">
                                    <img src="<?= base_url() ?>landing/assets/images/aksesoris/aksesoris-2.svg"
                                        alt="Web Crafser">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="about" class="bg-gray-1 pb-8 pt-20 dark:bg-dark-2 lg:pb-[70px] lg:pt-[120px]">
        <div class="container">
            <div class="wow fadeInUp" data-wow-delay=".2s">
                <div class="-mx-4 flex flex-wrap items-center">
                    <div class="w-full px-4 lg:w-1/2">
                        <div class="mb-12 max-w-[540px] lg:mb-0">
                            <h2
                                class="mb-5 text-3xl font-bold leading-tight text-dark dark:text-white sm:text-[40px] sm:leading-[1.2]">
                                Tentang Kami
                            </h2>
                            <p class="mb-10 text-base leading-relaxed text-body-color dark:text-dark-6"
                                style="text-align: justify;">
                                Web Crafter Service adalah sebuah bisnis owner yang bergerak dalam bidang teknologi
                                informasi di Indonesia. Berdiri pada tahun 2022 di Cirebon Jawa Barat. Web Crafter Service
                                tidak hanya menyediakan produk aplikasi yang sudah jadi, tetapi juga menawarkan jasa
                                konsultasi IT. Dalam konsultasi IT, Web Crafter Service akan membimbing Anda dalam merancang
                                aplikasi dan teknologi inovatif yang diperlukan untuk mengatasi permasalahan di lembaga
                                Anda. <a href="<?= base_url('web-crafter-service/tentang-kami') ?>"
                                    style="color: #3758F9;">Selengkapnya...</a>
                            </p>

                            <a href="<?= base_url('web-crafter-service/tentang-kami') ?>"
                                class="inline-flex items-center justify-center rounded-md border border-primary bg-primary px-7 py-3 text-center text-base font-medium text-white hover:border-blue-dark hover:bg-blue-dark">
                                Selengkapnya
                            </a>
                        </div>
                    </div>

                    <div class="w-full px-4 lg:w-1/2">
                        <div class="-mx-2 flex flex-wrap sm:-mx-4 lg:-mx-2 xl:-mx-4">
                            <div class="w-full px-2 sm:w-1/2 sm:px-4 lg:px-2 xl:px-4">
                                <div class="mb-4 sm:mb-8 sm:h-[400px] md:h-[540px] lg:h-[400px] xl:h-[500px]">
                                    <img data-src="<?= base_url() ?>landing/assets/images/banner/banner-4.jpg"
                                        alt="Web Crafser - Web Crafter Service" title="Web Crafser - Web Crafter Service"
                                        class="h-full w-full object-cover object-center lazy" />
                                </div>
                            </div>

                            <div class="w-full px-2 sm:w-1/2 sm:px-4 lg:px-2 xl:px-4">
                                <div
                                    class="mb-4 sm:mb-8 sm:h-[220px] md:h-[346px] lg:mb-4 lg:h-[225px] xl:mb-8 xl:h-[310px]">
                                    <img data-src="<?= base_url() ?>landing/assets/images/banner/banner-5.jpg"
                                        alt="Web Crafser - Web Crafter Service" title="Web Crafser - Web Crafter Service"
                                        class="h-full w-full object-cover object-center lazy" />
                                </div>

                                <div
                                    class="relative z-10 mb-4 flex items-center justify-center overflow-hidden bg-primary px-6 py-12 sm:mb-8 sm:h-[160px] sm:p-5 lg:mb-4 xl:mb-8">
                                    <div>
                                        <span class="block text-4xl font-extrabold text-white">
                                            Web Crafser
                                        </span>
                                        <span class="block text-base font-semibold text-white">
                                            Beroperasi sejak tahun
                                        </span>
                                        <span class="block text-base font-medium text-white text-opacity-70">
                                            2022 - Sekarang
                                        </span>
                                    </div>
                                    <div>
                                        <span class="absolute left-0 top-0 -z-10">
                                            <!--Aksesoris-6-->
                                            <svg width="106" height="144" viewBox="0 0 106 144" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.1" x="-67" y="47.127" width="113.378" height="131.304"
                                                    transform="rotate(-42.8643 -67 47.127)"
                                                    fill="url(#paint0_linear_1416_214)" />
                                                <defs>
                                                    <linearGradient id="paint0_linear_1416_214" x1="-10.3111"
                                                        y1="47.127" x2="-10.3111" y2="178.431"
                                                        gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="white" />
                                                        <stop offset="1" stop-color="white" stop-opacity="0" />
                                                    </linearGradient>
                                                </defs>
                                            </svg>
                                        </span>
                                        <span class="absolute right-0 top-0 -z-10">
                                            <!--Aksesoris-7-->
                                            <svg width="130" height="97" viewBox="0 0 130 97" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.1" x="0.86792" y="-6.67725" width="155.563"
                                                    height="140.614" transform="rotate(-42.8643 0.86792 -6.67725)"
                                                    fill="url(#paint0_linear_1416_215)" />
                                                <defs>
                                                    <linearGradient id="paint0_linear_1416_215" x1="78.6495"
                                                        y1="-6.67725" x2="78.6495" y2="133.937"
                                                        gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="white" />
                                                        <stop offset="1" stop-color="white" stop-opacity="0" />
                                                    </linearGradient>
                                                </defs>
                                            </svg>
                                        </span>
                                        <span class="absolute bottom-0 right-0 -z-10">
                                            <!--aksesoris-8-->
                                            <svg width="175" height="104" viewBox="0 0 175 104" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.1" x="175.011" y="108.611" width="101.246"
                                                    height="148.179" transform="rotate(137.136 175.011 108.611)"
                                                    fill="url(#paint0_linear_1416_216)" />
                                                <defs>
                                                    <linearGradient id="paint0_linear_1416_216" x1="225.634"
                                                        y1="108.611" x2="225.634" y2="256.79"
                                                        gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="white" />
                                                        <stop offset="1" stop-color="white" stop-opacity="0" />
                                                    </linearGradient>
                                                </defs>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="testimonials" class="overflow-hidden bg-[#F4F7FF] py-14 lg:py-[90px] dark:bg-dark md:py-[120px]">
        <div class="container mx-auto">
            <div class="-mx-4 flex flex-wrap justify-center">
                <div class="w-full px-4">
                    <div class="mx-auto mb-[60px] text-center" style="max-width: 750px;">
                        <span class="mb-2 block text-lg font-semibold text-primary">
                            Pelayanan
                        </span>
                        <h2
                            class="mb-3 text-3xl font-bold leading-[1.2] text-dark dark:text-white sm:text-4xl md:text-[40px]">
                            Pelayanan Web Crafser
                        </h2>
                        <p class="text-base text-body-color dark:text-dark-6">
                            Kami menyediakan layanan pengelolaan dan pengembangan sistem aplikasi berbasis website maupun
                            mobile. Tim kami terdiri dari profesional yang berkomitmen untuk memberikan solusi berkualitas
                            tinggi sesuai dengan kebutuhan Anda.
                        </p>
                    </div>
                </div>
            </div>

            <div class="-m-5">
                <div class="swiper testimonial-carousel common-carousel p-5">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide" style="text-align: center;">
                            <div class="rounded-xl bg-white px-4 py-[30px] shadow-testimonial dark:bg-dark sm:px-[30px]">
                                <div
                                    class="relative z-10 mb-10 flex h-[70px] w-[70px] items-center justify-center rounded-[14px] bg-primary mx-auto">
                                    <span
                                        class="absolute left-0 top-0 -z-[1] mb-8 flex h-[70px] w-[70px] rotate-[25deg] items-center justify-center rounded-[14px] bg-primary bg-opacity-20 duration-300 group-hover:rotate-45"></span>
                                    <i class="fas fa-laptop-code" style="font-size: 35px; color: white;"></i>
                                </div>
                                <h4 class="mb-3 text-xl font-bold text-dark dark:text-white">
                                    Jasa Pembuatan Website
                                </h4>
                                <p class="mb-6 text-base text-body-color dark:text-dark-6">
                                    “Kami menawarkan jasa pembuatan aplikasi berbasis web dan software custom sesuai
                                    kebutuhan bisnis dan transformasi digital anda.’’
                                </p>
                                <p class="text-base text-body-secondary">
                                    <a href="<?= base_url('web-crafter-service/layanan/jasa-website') ?>"
                                        class="text-primary hover:underline">
                                        Selengkapnya <i class="fas fa-arrow-right"></i>
                                    </a>
                                </p>
                            </div>
                        </div>

                        <div class="swiper-slide" style="text-align: center;">
                            <div class="rounded-xl bg-white px-4 py-[30px] shadow-testimonial dark:bg-dark sm:px-[30px]">
                                <div
                                    class="relative z-10 mb-10 flex h-[70px] w-[70px] items-center justify-center rounded-[14px] bg-primary mx-auto">
                                    <span
                                        class="absolute left-0 top-0 -z-[1] mb-8 flex h-[70px] w-[70px] rotate-[25deg] items-center justify-center rounded-[14px] bg-primary bg-opacity-20 duration-300 group-hover:rotate-45"></span>
                                    <i class="fas fa-search" style="font-size: 35px; color: white;"></i>
                                </div>
                                <h4 class="mb-3 text-xl font-bold text-dark dark:text-white">
                                    Search Engine Optimization SEO
                                </h4>
                                <p class="mb-6 text-base text-body-color dark:text-dark-6">
                                    “Ciptakan websitemu dengan SEO terbaik dan Jadikan websitemu menjadi tayangan website #1
                                    di pencarian google.’’
                                </p>
                                <p class="text-base text-body-secondary">
                                    <a href="<?= base_url('web-crafter-service/layanan/jasa-seo') ?>"
                                        class="text-primary hover:underline">
                                        Selengkapnya <i class="fas fa-arrow-right"></i>
                                    </a>
                                </p>
                            </div>
                        </div>

                        <div class="swiper-slide" style="text-align: center;">
                            <div class="rounded-xl bg-white px-4 py-[30px] shadow-testimonial dark:bg-dark sm:px-[30px]">
                                <div
                                    class="relative z-10 mb-10 flex h-[70px] w-[70px] items-center justify-center rounded-[14px] bg-primary mx-auto">
                                    <span
                                        class="absolute left-0 top-0 -z-[1] mb-8 flex h-[70px] w-[70px] rotate-[25deg] items-center justify-center rounded-[14px] bg-primary bg-opacity-20 duration-300 group-hover:rotate-45"></span>
                                    <i class="fa-brands fa-figma" style="font-size: 35px; color: white;"></i>
                                </div>
                                <h4 class="mb-3 text-xl font-bold text-dark dark:text-white">
                                    UI/UX Design
                                </h4>
                                <p class="mb-6 text-base text-body-color dark:text-dark-6">
                                    “Menghadirkan desain aplikasi yang responsif, memberikan pengalaman pengguna yang
                                    optimal baik melalui website maupun perangkat mobile.’’
                                </p>
                                <p class="text-base text-body-secondary">
                                    <a href="<?= base_url('web-crafter-service/layanan/jasa-ui-ux') ?>"
                                        class="text-primary hover:underline">
                                        Selengkapnya <i class="fas fa-arrow-right"></i>
                                    </a>
                                </p>
                            </div>
                        </div>

                        <div class="swiper-slide" style="text-align: center;">
                            <div class="rounded-xl bg-white px-4 py-[30px] shadow-testimonial dark:bg-dark sm:px-[30px]">
                                <div
                                    class="relative z-10 mb-10 flex h-[70px] w-[70px] items-center justify-center rounded-[14px] bg-primary mx-auto">
                                    <span
                                        class="absolute left-0 top-0 -z-[1] mb-8 flex h-[70px] w-[70px] rotate-[25deg] items-center justify-center rounded-[14px] bg-primary bg-opacity-20 duration-300 group-hover:rotate-45"></span>
                                    <i class="fas fa-code" style="font-size: 35px; color: white;"></i>
                                </div>
                                <h4 class="mb-3 text-xl font-bold text-dark dark:text-white">
                                    Programming
                                </h4>
                                <p class="mb-6 text-base text-body-color dark:text-dark-6">
                                    “Dengan keahlian dalam berbagai bahasa pemrograman, kami menyediakan solusi pengembangan
                                    perangkat lunak menggunakan teknologi yang sesuai dengan kebutuhan proyek Anda.’’
                                </p>
                                <p class="text-base text-body-secondary">
                                    <a href="<?= base_url('web-crafter-service/layanan/jasa-website') ?>"
                                        class="text-primary hover:underline">
                                        Selengkapnya <i class="fas fa-arrow-right"></i>
                                    </a>
                                </p>
                            </div>
                        </div>

                        <div class="swiper-slide" style="text-align: center;">
                            <div class="rounded-xl bg-white px-4 py-[30px] shadow-testimonial dark:bg-dark sm:px-[30px]">
                                <div
                                    class="relative z-10 mb-10 flex h-[70px] w-[70px] items-center justify-center rounded-[14px] bg-primary mx-auto">
                                    <span
                                        class="absolute left-0 top-0 -z-[1] mb-8 flex h-[70px] w-[70px] rotate-[25deg] items-center justify-center rounded-[14px] bg-primary bg-opacity-20 duration-300 group-hover:rotate-45"></span>
                                    <i class="fas fa-gears" style="font-size: 35px; color: white;"></i>
                                </div>
                                <h4 class="mb-3 text-xl font-bold text-dark dark:text-white">
                                    Jasa Maintanance IT
                                </h4>
                                <p class="mb-6 text-base text-body-color dark:text-dark-6">
                                    “Anda mempunyai webiste dan tidak sempat untuk mengurusnya? Kami siap membantu agar
                                    website anda dikelola kembali dengan baik.’’
                                </p>
                                <p class="text-base text-body-secondary">
                                    <a href="<?= base_url('web-crafter-service/layanan/jasa-maintanance-it') ?>"
                                        class="text-primary hover:underline">
                                        Selengkapnya <i class="fas fa-arrow-right"></i>
                                    </a>
                                </p>
                            </div>
                        </div>

                        <div class="swiper-slide" style="text-align: center;">
                            <div class="rounded-xl bg-white px-4 py-[30px] shadow-testimonial dark:bg-dark sm:px-[30px]">
                                <div
                                    class="relative z-10 mb-10 flex h-[70px] w-[70px] items-center justify-center rounded-[14px] bg-primary mx-auto">
                                    <span
                                        class="absolute left-0 top-0 -z-[1] mb-8 flex h-[70px] w-[70px] rotate-[25deg] items-center justify-center rounded-[14px] bg-primary bg-opacity-20 duration-300 group-hover:rotate-45"></span>
                                    <i class="fas fa-pen-nib" style="font-size: 35px; color: white;"></i>
                                </div>
                                <h4 class="mb-3 text-xl font-bold text-dark dark:text-white">
                                    Jasa Design Grafis
                                </h4>
                                <p class="mb-6 text-base text-body-color dark:text-dark-6">
                                    “Kami menyediakan layanan pembuatan design seperti poster, logo, kartu nama, banner dan
                                    lain-lain. Jangan ragu untuk menghubungi kami.’’
                                </p>
                                <p class="text-base text-body-secondary">
                                    <a href="<?= base_url('web-crafter-service/layanan/jasa-design-grafis') ?>"
                                        class="text-primary hover:underline">
                                        Selengkapnya <i class="fas fa-arrow-right"></i>
                                    </a>
                                </p>
                            </div>
                        </div>

                        <div class="swiper-slide" style="text-align: center;">
                            <div class="rounded-xl bg-white px-4 py-[30px] shadow-testimonial dark:bg-dark sm:px-[30px]">
                                <div
                                    class="relative z-10 mb-10 flex h-[70px] w-[70px] items-center justify-center rounded-[14px] bg-primary mx-auto">
                                    <span
                                        class="absolute left-0 top-0 -z-[1] mb-8 flex h-[70px] w-[70px] rotate-[25deg] items-center justify-center rounded-[14px] bg-primary bg-opacity-20 duration-300 group-hover:rotate-45"></span>
                                    <i class="fas fa-graduation-cap" style="font-size: 35px; color: white;"></i>
                                </div>
                                <h4 class="mb-3 text-xl font-bold text-dark dark:text-white">
                                    Jasa Konsultasi & Pembuatan Skripsi
                                </h4>
                                <p class="mb-6 text-base text-body-color dark:text-dark-6">
                                    “Kami menyediakan layanan konsultasi terkait SKRIPSI anda di bidang Informatika. Selain
                                    konsultasi, kami juga menyediakan jasa joki skripsi full sampai lulus.’’
                                </p>
                                <p class="text-base text-body-secondary">
                                    <a href="<?= base_url('web-crafter-service/layanan/jasa-skripsi') ?>"
                                        class="text-primary hover:underline">
                                        Selengkapnya <i class="fas fa-arrow-right"></i>
                                    </a>
                                </p>
                            </div>
                        </div>

                    </div>

                    <div class="mt-[60px] flex items-center justify-center gap-1">
                        <div class="swiper-button-prev">
                            <!--aksesoris-9-->
                            <svg class="fill-current" width="22" height="22" viewBox="0 0 22 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19.25 10.2437H4.57187L10.4156 4.29687C10.725 3.9875 10.725 3.50625 10.4156 3.19687C10.1062 2.8875 9.625 2.8875 9.31562 3.19687L2.2 10.4156C1.89062 10.725 1.89062 11.2063 2.2 11.5156L9.31562 18.7344C9.45312 18.8719 9.65937 18.975 9.86562 18.975C10.0719 18.975 10.2437 18.9062 10.4156 18.7687C10.725 18.4594 10.725 17.9781 10.4156 17.6688L4.60625 11.7906H19.25C19.6625 11.7906 20.0063 11.4469 20.0063 11.0344C20.0063 10.5875 19.6625 10.2437 19.25 10.2437Z" />
                            </svg>
                        </div>

                        <div class="swiper-button-next">
                            <!--aksesoris 10-->
                            <svg class="fill-current" width="22" height="22" viewBox="0 0 22 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19.8 10.45L12.6844 3.2313C12.375 2.92192 11.8938 2.92192 11.5844 3.2313C11.275 3.54067 11.275 4.02192 11.5844 4.3313L17.3594 10.2094H2.75C2.3375 10.2094 1.99375 10.5532 1.99375 10.9657C1.99375 11.3782 2.3375 11.7563 2.75 11.7563H17.4281L11.5844 17.7032C11.275 18.0126 11.275 18.4938 11.5844 18.8032C11.7219 18.9407 11.9281 19.0094 12.1344 19.0094C12.3406 19.0094 12.5469 18.9407 12.6844 18.7688L19.8 11.55C20.1094 11.2407 20.1094 10.7594 19.8 10.45Z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="overflow-hidden bg-primary py-20 lg:py-[115px]">
        <div class="container mx-auto">
            <div class="overflow-hidden">
                <div class="flex flex-wrap items-stretch -mx-4">
                    <div class="w-full px-4 wow fadeInUp" data-wow-delay=".15s">
                        <div class="mx-auto max-w-[570px] text-center">
                            <h2 class="mb-2.5 text-3xl font-bold text-white md:text-[38px] md:leading-[1.44]">
                                <span>Ingin Punya Website Sendiri?</span>
                                <span class="text-3xl font-normal md:text-[40px]">
                                    Mari Bekerja Sama
                                </span>
                            </h2>
                            <p class="mx-auto mb-6 max-w-[515px] text-base leading-[1.5] text-white">
                                Rancang Website Anda Sekarang dan Web Crafter Service Siap Untuk Membantu Memenuhi Kebutuhan
                                Anda.
                            </p>
                            <a href="https://api.whatsapp.com/send?phone=6282129967454&text=Saya%20ingin%20konsultasi%2C%20apakah%20ini%20dengan%20Web%20Crafser%20Cirebon%3F"
                                target="_blank"
                                class="inline-block rounded-md border border-transparent bg-secondary px-7 py-3 text-base font-medium text-white transition hover:bg-[#0BB489]">
                                Hubungi
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <span class="absolute top-0 left-0">
                <svg width="495" height="470" viewBox="0 0 495 470" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <circle cx="55" cy="442" r="138" stroke="white" stroke-opacity="0.04"
                        stroke-width="50" />
                    <circle cx="446" r="39" stroke="white" stroke-opacity="0.04" stroke-width="20" />
                    <path d="M245.406 137.609L233.985 94.9852L276.609 106.406L245.406 137.609Z" stroke="white"
                        stroke-opacity="0.08" stroke-width="12" />
                </svg>
            </span>
            <span class="absolute bottom-0 right-0">
                <svg width="493" height="470" viewBox="0 0 493 470" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <circle cx="462" cy="5" r="138" stroke="white" stroke-opacity="0.04"
                        stroke-width="50" />
                    <circle cx="49" cy="470" r="39" stroke="white" stroke-opacity="0.04"
                        stroke-width="20" />
                    <path d="M222.393 226.701L272.808 213.192L259.299 263.607L222.393 226.701Z" stroke="white"
                        stroke-opacity="0.06" stroke-width="13" />
                </svg>
            </span>
        </div>
    </section>


    <section id="testimonials" class="overflow-hidden bg-[#F4F7FF] py-20 dark:bg-dark md:py-[120px]">
        <div class="container mx-auto">
            <div class="-mx-4 flex flex-wrap justify-center">
                <div class="w-full px-4">
                    <div class="mx-auto mb-[60px] max-w-[485px] text-center">
                        <span class="mb-2 block text-lg font-semibold text-primary">
                            Ulasan
                        </span>
                        <h2
                            class="mb-3 text-3xl font-bold leading-[1.2] text-dark dark:text-white sm:text-4xl md:text-[40px]">
                            Ulasan Klien Kami
                        </h2>
                        <p class="text-base text-body-color dark:text-dark-6">
                            Ini adalah ulasan dari klien kami tentang produk atau layanan kami.
                        </p>
                    </div>
                </div>
            </div>

            <div class="-m-5">
                <div class="swiper klien-webcrafser common-carousel p-5">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="rounded-xl bg-white px-4 py-[30px] shadow-testimonial dark:bg-dark sm:px-[30px]">
                                <div class="mb-[18px] flex items-center gap-[2px]">
                                    <img class="lazy"
                                        data-src="<?= base_url() ?>landing/assets/images/testimonials/icon-star.svg"
                                        alt="Web Crafser - Web Crafter Service"
                                        title="Web Crafser - Web Crafter Service" />
                                    <img class="lazy"
                                        data-src="<?= base_url() ?>landing/assets/images/testimonials/icon-star.svg"
                                        alt="Web Crafser - Web Crafter Service"
                                        title="Web Crafser - Web Crafter Service" />
                                    <img class="lazy"
                                        data-src="<?= base_url() ?>landing/assets/images/testimonials/icon-star.svg"
                                        alt="Web Crafser - Web Crafter Service"
                                        title="Web Crafser - Web Crafter Service" />
                                    <img class="lazy"
                                        data-src="<?= base_url() ?>landing/assets/images/testimonials/icon-star.svg"
                                        alt="Web Crafser - Web Crafter Service"
                                        title="Web Crafser - Web Crafter Service" />
                                    <img class="lazy"
                                        data-src="<?= base_url() ?>landing/assets/images/testimonials/icon-star.svg"
                                        alt="Web Crafser - Web Crafter Service"
                                        title="Web Crafser - Web Crafter Service" />
                                </div>

                                <p class="mb-6 text-base text-body-color dark:text-dark-6">
                                    “Bisnis ini selalu memberikan solusi yang kreatif dan inovatif. Mereka tidak hanya
                                    memberikan solusi standar, tapi juga punya ide-ide segar yang sesuai dengan kebutuhan.’’
                                </p>

                                <a href="<?= current_url() ?>" class="flex items-center gap-4">
                                    <!-- <div class="h-[50px] w-[50px] overflow-hidden rounded-full">
                  <img src="https://ridhorattan.com/Source/dist/images/rotan.png" alt="author" class="h-[50px] w-[50px] overflow-hidden rounded-full" />
                </div> -->
                                    <div>
                                        <h3 class="text-sm font-semibold text-dark dark:text-white">
                                            Jasa Website E-Commerce Produk Rotan
                                        </h3>
                                        <p class="text-xs text-body-secondary">CV Ridho Rattan Plumbon Cirebon</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="rounded-xl bg-white px-4 py-[30px] shadow-testimonial dark:bg-dark sm:px-[30px]">
                                <div class="mb-[18px] flex items-center gap-[2px]">
                                    <img class="lazy"
                                        data-src="<?= base_url() ?>landing/assets/images/testimonials/icon-star.svg"
                                        alt="Web Crafser - Web Crafter Service"
                                        title="Web Crafser - Web Crafter Service" />
                                    <img class="lazy"
                                        data-src="<?= base_url() ?>landing/assets/images/testimonials/icon-star.svg"
                                        alt="Web Crafser - Web Crafter Service"
                                        title="Web Crafser - Web Crafter Service" />
                                    <img class="lazy"
                                        data-src="<?= base_url() ?>landing/assets/images/testimonials/icon-star.svg"
                                        alt="Web Crafser - Web Crafter Service"
                                        title="Web Crafser - Web Crafter Service" />
                                    <img class="lazy"
                                        data-src="<?= base_url() ?>landing/assets/images/testimonials/icon-star.svg"
                                        alt="Web Crafser - Web Crafter Service"
                                        title="Web Crafser - Web Crafter Service" />
                                    <img class="lazy"
                                        data-src="<?= base_url() ?>landing/assets/images/testimonials/icon-star.svg"
                                        alt="Web Crafser - Web Crafter Service"
                                        title="Web Crafser - Web Crafter Service" />
                                </div>

                                <p class="mb-6 text-base text-body-color dark:text-dark-6">
                                    “Web Crafter Service dapat diandalkan. Mereka selalu tepat waktu dan tanggap terhadap
                                    setiap kebutuhan atau pertanyaan yang kita miliki.’’
                                </p>

                                <a href="<?= current_url() ?>" class="flex items-center gap-4">
                                    <!-- <div class="h-[50px] w-[50px] overflow-hidden rounded-full">
                  <img src="https://ridhorattan.com/Source/dist/images/rotan.png" alt="author" class="h-[50px] w-[50px] overflow-hidden rounded-full" />
                </div> -->
                                    <div>
                                        <h3 class="text-sm font-semibold text-dark dark:text-white">
                                            Geografis Infomation System
                                        </h3>
                                        <p class="text-xs text-body-secondary">Mr. Dewa Hanggara</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="rounded-xl bg-white px-4 py-[30px] shadow-testimonial dark:bg-dark sm:px-[30px]">
                                <div class="mb-[18px] flex items-center gap-[2px]">
                                    <img class="lazy"
                                        data-src="<?= base_url() ?>landing/assets/images/testimonials/icon-star.svg"
                                        alt="Web Crafser - Web Crafter Service"
                                        title="Web Crafser - Web Crafter Service" />
                                    <img class="lazy"
                                        data-src="<?= base_url() ?>landing/assets/images/testimonials/icon-star.svg"
                                        alt="Web Crafser - Web Crafter Service"
                                        title="Web Crafser - Web Crafter Service" />
                                    <img class="lazy"
                                        data-src="<?= base_url() ?>landing/assets/images/testimonials/icon-star.svg"
                                        alt="Web Crafser - Web Crafter Service"
                                        title="Web Crafser - Web Crafter Service" />
                                    <img class="lazy"
                                        data-src="<?= base_url() ?>landing/assets/images/testimonials/icon-star.svg"
                                        alt="Web Crafser - Web Crafter Service"
                                        title="Web Crafser - Web Crafter Service" />
                                    <img class="lazy"
                                        data-src="<?= base_url() ?>landing/assets/images/testimonials/icon-star.svg"
                                        alt="Web Crafser - Web Crafter Service"
                                        title="Web Crafser - Web Crafter Service" />
                                </div>

                                <p class="mb-6 text-base text-body-color dark:text-dark-6">
                                    “Tim Web Crafter ramah dan responsif. Mereka selalu siap membantu dan memberikan solusi
                                    jika kita mengalami kendala atau butuh bantuan.’’
                                </p>

                                <a href="<?= current_url() ?>" class="flex items-center gap-4">
                                    <!-- <div class="h-[50px] w-[50px] overflow-hidden rounded-full">
                  <img src="https://ridhorattan.com/Source/dist/images/rotan.png" alt="author" class="h-[50px] w-[50px] overflow-hidden rounded-full" />
                </div> -->
                                    <div>
                                        <h3 class="text-sm font-semibold text-dark dark:text-white">
                                            Sistem Monitoring Siswa SMPN 2 Sumber
                                        </h3>
                                        <p class="text-xs text-body-secondary">Ny. Susilawati</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="rounded-xl bg-white px-4 py-[30px] shadow-testimonial dark:bg-dark sm:px-[30px]">
                                <div class="mb-[18px] flex items-center gap-[2px]">
                                    <img class="lazy"
                                        data-src="<?= base_url() ?>landing/assets/images/testimonials/icon-star.svg"
                                        alt="Web Crafser - Web Crafter Service"
                                        title="Web Crafser - Web Crafter Service" />
                                    <img class="lazy"
                                        data-src="<?= base_url() ?>landing/assets/images/testimonials/icon-star.svg"
                                        alt="Web Crafser - Web Crafter Service"
                                        title="Web Crafser - Web Crafter Service" />
                                    <img class="lazy"
                                        data-src="<?= base_url() ?>landing/assets/images/testimonials/icon-star.svg"
                                        alt="Web Crafser - Web Crafter Service"
                                        title="Web Crafser - Web Crafter Service" />
                                    <img class="lazy"
                                        data-src="<?= base_url() ?>landing/assets/images/testimonials/icon-star.svg"
                                        alt="Web Crafser - Web Crafter Service"
                                        title="Web Crafser - Web Crafter Service" />
                                    <img class="lazy"
                                        data-src="<?= base_url() ?>landing/assets/images/testimonials/icon-star.svg"
                                        alt="Web Crafser - Web Crafter Service"
                                        title="Web Crafser - Web Crafter Service" />
                                </div>

                                <p class="mb-6 text-base text-body-color dark:text-dark-6">
                                    “Dengan kualitas yang mereka tawarkan, harga dari Web Crafter Service sangat bersaing.
                                    Kami merasa nilainya sebanding dengan investasi yang kami lakukan untuk layanan IT
                                    mereka.’’
                                </p>

                                <a href="<?= current_url() ?>" class="flex items-center gap-4">
                                    <!-- <div class="h-[50px] w-[50px] overflow-hidden rounded-full">
                  <img src="https://ridhorattan.com/Source/dist/images/rotan.png" alt="author" class="h-[50px] w-[50px] overflow-hidden rounded-full" />
                </div> -->
                                    <div>
                                        <h3 class="text-sm font-semibold text-dark dark:text-white">
                                            SI Pembelajaran B.INggris SDN Pejambon
                                        </h3>
                                        <p class="text-xs text-body-secondary">Mr. Firman Hidayat</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </div>

                    <div class="mt-[60px] flex items-center justify-center gap-1">
                        <div class="swiper-button-prev">
                            <svg class="fill-current" width="22" height="22" viewBox="0 0 22 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19.25 10.2437H4.57187L10.4156 4.29687C10.725 3.9875 10.725 3.50625 10.4156 3.19687C10.1062 2.8875 9.625 2.8875 9.31562 3.19687L2.2 10.4156C1.89062 10.725 1.89062 11.2063 2.2 11.5156L9.31562 18.7344C9.45312 18.8719 9.65937 18.975 9.86562 18.975C10.0719 18.975 10.2437 18.9062 10.4156 18.7687C10.725 18.4594 10.725 17.9781 10.4156 17.6688L4.60625 11.7906H19.25C19.6625 11.7906 20.0063 11.4469 20.0063 11.0344C20.0063 10.5875 19.6625 10.2437 19.25 10.2437Z" />
                            </svg>
                        </div>

                        <div class="swiper-button-next">
                            <svg class="fill-current" width="22" height="22" viewBox="0 0 22 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19.8 10.45L12.6844 3.2313C12.375 2.92192 11.8938 2.92192 11.5844 3.2313C11.275 3.54067 11.275 4.02192 11.5844 4.3313L17.3594 10.2094H2.75C2.3375 10.2094 1.99375 10.5532 1.99375 10.9657C1.99375 11.3782 2.3375 11.7563 2.75 11.7563H17.4281L11.5844 17.7032C11.275 18.0126 11.275 18.4938 11.5844 18.8032C11.7219 18.9407 11.9281 19.0094 12.1344 19.0094C12.3406 19.0094 12.5469 18.9407 12.6844 18.7688L19.8 11.55C20.1094 11.2407 20.1094 10.7594 19.8 10.45Z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="pt-20 pb-10 lg:pt-[120px] lg:pb-20 bg-gray-1 dark:bg-dark-2">
        <div class="container">
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4">
                    <div class="mx-auto mb-[60px] max-w-[485px] text-center">
                        <span class="mb-2 block text-lg font-semibold text-primary">
                            Project
                        </span>
                        <h2
                            class="mb-3 text-3xl font-bold leading-[1.2] text-dark dark:text-white sm:text-4xl md:text-[40px]">
                            Proyek Terselesaikan
                        </h2>
                        <p class="text-base text-body-color dark:text-dark-6">
                            Selama 2 tahun terakhir, Web Crafser sudah berhasil menyelesaikan beberapa project pengembangan
                            dari berbagai jenis project aplikasi.
                        </p>
                    </div>
                </div>

                <div class="w-full px-4 md:w-1/2 lg:w-1/3 mb-8">
                    <div class="relative mx-auto max-w-[525px] overflow-hidden rounded-xl shadow-lg bg-white dark:bg-dark py-10 px-8 sm:px-12 md:px-[60px] wow fadeInUp dark:shadow-none"
                        data-wow-delay=".15s">
                        <div class="wow fadeInUp group" data-wow-delay=".1s">
                            <div class="mb-8 overflow-hidden rounded-[10px]">
                                <a href="https://ridhorattan.com" target="_blank" class="block">
                                    <img data-src="<?= base_url() ?>landing/assets/images/project/cv ridho.png"
                                        alt="Web Crafser - Web Crafter Service" title="Web Crafser - Web Crafter Service"
                                        class="w-full transition group-hover:rotate-6 group-hover:scale-125 lazy" />
                                </a>
                            </div>
                            <div>
                                <span
                                    class="inline-block px-4 py-0.5 mb-6 text-xs font-medium leading-loose text-center text-white rounded-[5px] bg-primary">
                                    Date : -
                                </span>
                                <h3>
                                    <a href="https://ridhorattan.com" target="_blank"
                                        class="inline-block mb-4 text-xl font-semibold text-dark dark:text-white hover:text-primary dark:hover:text-primary sm:text-2xl lg:text-xl xl:text-2xl">
                                        E-Commerce CV Ridho Rattan Cirebon
                                    </a>
                                </h3>
                                <p class="max-w-[370px] text-base text-body-color dark:text-dark-6">
                                    Aplikasi E-Commerce CV Ridho Rotan Plumbon Cirebon Berbasis Website.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full px-4 md:w-1/2 lg:w-1/3 mb-8">
                    <div class="relative mx-auto max-w-[525px] overflow-hidden rounded-xl shadow-lg bg-white dark:bg-dark py-10 px-8 sm:px-12 md:px-[60px] wow fadeInUp dark:shadow-none"
                        data-wow-delay=".15s">
                        <div class="wow fadeInUp group" data-wow-delay=".15s">
                            <div class="mb-8 overflow-hidden rounded-[10px]">
                                <a href="<?= base_url('error') ?>" class="block">
                                    <img data-src="<?= base_url() ?>landing/assets/images/project/raport.png"
                                        alt="Web Crafser - Web Crafter Service" title="Web Crafser - Web Crafter Service"
                                        class="w-full transition group-hover:rotate-6 group-hover:scale-125 lazy" />
                                </a>
                            </div>
                            <div>
                                <span
                                    class="inline-block px-4 py-0.5 mb-6 text-xs font-medium leading-loose text-center text-white rounded-[5px] bg-primary">
                                    Date : -
                                </span>
                                <h3>
                                    <a href="<?= base_url('error') ?>"
                                        class="inline-block mb-4 text-xl font-semibold text-dark dark:text-white hover:text-primary dark:hover:text-primary sm:text-2xl lg:text-xl xl:text-2xl">
                                        Edu-Raport
                                    </a>
                                </h3>
                                <p class="max-w-[370px] text-base text-body-color dark:text-dark-6">
                                    Sistem Informasi Rapor Siswa Berbasis Website di SMK Siliwangi Kedawung Cirebon.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full px-4 md:w-1/2 lg:w-1/3 mb-8">
                    <div class="relative mx-auto max-w-[525px] overflow-hidden rounded-xl shadow-lg bg-white dark:bg-dark py-10 px-8 sm:px-12 md:px-[60px] wow fadeInUp dark:shadow-none"
                        data-wow-delay=".15s">
                        <div class="wow fadeInUp group" data-wow-delay=".15s">
                            <div class="mb-8 overflow-hidden rounded-[10px]">
                                <a href="https://demo-smpn12sumber.000webhostapp.com/login" target="_blank"
                                    class="block">
                                    <img data-src="<?= base_url() ?>landing/assets/images/project/monitoring.png"
                                        alt="Web Crafser - Web Crafter Service" title="Web Crafser - Web Crafter Service"
                                        class="w-full transition group-hover:rotate-6 group-hover:scale-125 lazy" />
                                </a>
                            </div>
                            <div>
                                <span
                                    class="inline-block px-4 py-0.5 mb-6 text-xs font-medium leading-loose text-center text-white rounded-[5px] bg-primary">
                                    Date : -
                                </span>
                                <h3>
                                    <a href="https://demo-monitoring.webcrafser.com/" target="_blank"
                                        class="inline-block mb-4 text-xl font-semibold text-dark dark:text-white hover:text-primary dark:hover:text-primary sm:text-2xl lg:text-xl xl:text-2xl">
                                        Student Monitoring System
                                    </a>
                                </h3>
                                <p class="max-w-[370px] text-base text-body-color dark:text-dark-6">
                                    Sistem Informasi Pengawasan Siswa SMPN 2 Sumber berbasis website.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-10 mt-12 wow fadeInUp group mx-auto flex flex-wrap" data-wow-delay=".15s">
                    <a href="<?= base_url('web-crafter-service/proyek-kami') ?>"
                        class="inline-flex items-center justify-center rounded-md border border-primary bg-primary px-6 py-2 text-center text-base font-medium text-white hover:border-blue-dark hover:bg-blue-dark">
                        Selengkapnya
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-8 pt-20 bg-[#F4F7FF] py-14 lg:py-[90px] dark:bg-dark lg:pb-[70px] lg:pt-[120px]">
        <div class="container">
            <div class="wow fadeInUp" data-wow-delay=".2s">
                <h2
                    class="mb-12 text-center text-3xl font-bold leading-[1.2] text-dark dark:text-white sm:text-4xl md:text-[40px]">
                    Teknologi Yang Kami Gunakan
                </h2>
                <div class="mb-12">
                    <div class="swiper teknologi-digunakan common-carousel">
                        <div class="swiper-wrapper" style="margin-top: 30px;">

                            <div class="swiper-slide" style="text-align: center;">
                                <div class="text-white/60 duration-300 ease-in-out hover:text-white">
                                    <i class="devicon-codeigniter-plain colored" style="font-size: 90px"></i>
                                </div>
                            </div>

                            <div class="swiper-slide" style="text-align: center;">
                                <div class="text-white/60 duration-300 ease-in-out hover:text-white">
                                    <i class="devicon-laravel-plain colored" style="font-size: 90px"></i>
                                </div>
                            </div>

                            <div class="swiper-slide" style="text-align: center;">
                                <div class="text-white/60 duration-300 ease-in-out hover:text-white">
                                    <i class="devicon-php-plain colored" style="font-size: 90px"></i>
                                </div>
                            </div>

                            <div class="swiper-slide" style="text-align: center;">
                                <div class="text-white/60 duration-300 ease-in-out hover:text-white">
                                    <i class="devicon-react-original colored" style="font-size: 90px"></i>
                                </div>
                            </div>

                            <div class="swiper-slide" style="text-align: center;">
                                <div class="text-white/60 duration-300 ease-in-out hover:text-white">
                                    <i class="devicon-wordpress-plain colored" style="font-size: 90px"></i>
                                </div>
                            </div>

                            <div class="swiper-slide" style="text-align: center;">
                                <div class="text-white/60 duration-300 ease-in-out hover:text-white">
                                    <i class="devicon-nodejs-plain colored" style="font-size: 90px"></i>
                                </div>
                            </div>

                            <div class="swiper-slide" style="text-align: center;">
                                <div class="text-white/60 duration-300 ease-in-out hover:text-white">
                                    <i class="devicon-woocommerce-plain colored" style="font-size: 90px"></i>
                                </div>
                            </div>

                            <div class="swiper-slide" style="text-align: center;">
                                <div class="text-white/60 duration-300 ease-in-out hover:text-white">
                                    <i class="devicon-mysql-plain colored" style="font-size: 90px"></i>
                                </div>
                            </div>

                            <div class="swiper-slide" style="text-align: center;">
                                <div class="text-white/60 duration-300 ease-in-out hover:text-white">
                                    <i class="devicon-bootstrap-plain colored" style="font-size: 90px"></i>
                                </div>
                            </div>

                            <div class="swiper-slide" style="text-align: center;">
                                <div class="text-white/60 duration-300 ease-in-out hover:text-white">
                                    <i class="devicon-tailwindcss-plain colored" style="font-size: 90px"></i>
                                </div>
                            </div>

                            <div class="swiper-slide" style="text-align: center;">
                                <div class="text-white/60 duration-300 ease-in-out hover:text-white">
                                    <i class="devicon-angularjs-plain colored" style="font-size: 90px"></i>
                                </div>
                            </div>

                            <div class="swiper-slide" style="text-align: center;">
                                <div class="text-white/60 duration-300 ease-in-out hover:text-white">
                                    <i class="devicon-javascript-plain colored" style="font-size: 90px"></i>
                                </div>
                            </div>

                            <div class="swiper-slide" style="text-align: center;">
                                <div class="text-white/60 duration-300 ease-in-out hover:text-white">
                                    <i class="devicon-html5-plain colored" style="font-size: 90px"></i>
                                </div>
                            </div>

                            <div class="swiper-slide" style="text-align: center;">
                                <div class="text-white/60 duration-300 ease-in-out hover:text-white">
                                    <i class="devicon-css3-plain colored" style="font-size: 90px"></i>
                                </div>
                            </div>

                            <div class="swiper-slide" style="text-align: center;">
                                <div class="text-white/60 duration-300 ease-in-out hover:text-white">
                                    <i class="devicon-figma-plain colored" style="font-size: 90px"></i>
                                </div>
                            </div>

                            <div class="swiper-slide" style="text-align: center;">
                                <div class="text-white/60 duration-300 ease-in-out hover:text-white">
                                    <i class="devicon-photoshop-line colored" style="font-size: 90px"></i>
                                </div>
                            </div>

                            <div class="swiper-slide" style="text-align: center;">
                                <div class="text-white/60 duration-300 ease-in-out hover:text-white">
                                    <i class="devicon-android-plain colored" style="font-size: 90px"></i>
                                </div>
                            </div>

                            <div class="swiper-slide" style="text-align: center;">
                                <div class="text-white/60 duration-300 ease-in-out hover:text-white">
                                    <i class="devicon-java-plain colored" style="font-size: 90px"></i>
                                </div>
                            </div>

                            <div class="swiper-slide" style="text-align: center;">
                                <div class="text-white/60 duration-300 ease-in-out hover:text-white">
                                    <i class="devicon-flutter-plain colored" style="font-size: 90px"></i>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="team" class="overflow-hidden bg-gray-1 pb-12 pt-20 dark:bg-dark-2 lg:pb-[90px] lg:pt-[120px]">
        <div class="container mx-auto">
            <div class="-mx-4 flex flex-wrap">
                <div class="w-full px-4">
                    <div class="mx-auto mb-[60px] max-w-[485px] text-center">
                        <span class="mb-2 block text-lg font-semibold text-primary">
                            Our Team Members
                        </span>
                        <h2
                            class="mb-3 text-3xl font-bold leading-[1.2] text-dark dark:text-white sm:text-4xl md:text-[40px]">
                            Team Developers
                        </h2>
                        <p class="text-base text-body-color dark:text-dark-6">
                            Team developer web crafter service.
                        </p>
                    </div>
                </div>
            </div>
            <div class="-mx-4 flex flex-wrap justify-center">
                <div class="w-full px-4 sm:w-1/2 lg:w-1/4 xl:w-1/4 wow fadeInUp" data-wow-delay=".15s">
                    <div
                        class="group mb-8 rounded-xl bg-white px-5 pb-10 pt-12 shadow-testimonial dark:bg-dark dark:shadow-none">
                        <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]">
                            <img data-src="<?= base_url('landing/assets/images/developers/syarif.png') ?>"
                                alt="Web Crafser - Web Crafter Service" title="Web Crafser - Web Crafter Service"
                                class="h-[120px] w-[120px] rounded-full lazy" />
                            <span
                                class="absolute bottom-0 left-0 -z-10 h-10 w-10 rounded-full bg-secondary opacity-0 transition-all group-hover:opacity-100"></span>
                            <span class="absolute right-0 top-0 -z-10 opacity-0 transition-all group-hover:opacity-100">
                                <!--Aksesoris-3-->
                                <img src="<?= base_url('landing/assets/images/aksesoris/aksesoris-3.svg') ?>"
                                    alt="Web Crafser">
                            </span>
                        </div>
                        <div class="text-center">
                            <h4 class="mb-1 text-lg font-semibold text-dark dark:text-white">
                                Moch Syarif Hidayat, S.T
                            </h4>
                            <p class="mb-5 text-sm text-body-color dark:text-dark-6">
                                Web Development
                            </p>
                            <div class="flex items-center justify-center gap-5">
                                <a href="https://facebook.com/syarif.208" target="_blank"
                                    class="text-dark-6 hover:text-primary">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                                <a href="https://github.com/mosyahi" target="_blank"
                                    class="text-dark-6 hover:text-primary">
                                    <i class="fa-brands fa-github"></i>
                                </a>
                                <a href="https://instagram.com/mochsyarifhidayat13" target="_blank"
                                    class="text-dark-6 hover:text-primary">
                                    <!--Aksesoris 5-->
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                        <path
                                            d="M9.02429 11.8066C10.5742 11.8066 11.8307 10.5501 11.8307 9.00018C11.8307 7.45022 10.5742 6.19373 9.02429 6.19373C7.47433 6.19373 6.21783 7.45022 6.21783 9.00018C6.21783 10.5501 7.47433 11.8066 9.02429 11.8066Z"
                                            fill="" />
                                        <path
                                            d="M12.0726 1.5H5.92742C3.48387 1.5 1.5 3.48387 1.5 5.92742V12.0242C1.5 14.5161 3.48387 16.5 5.92742 16.5H12.0242C14.5161 16.5 16.5 14.5161 16.5 12.0726V5.92742C16.5 3.48387 14.5161 1.5 12.0726 1.5ZM9.02419 12.6774C6.96774 12.6774 5.34677 11.0081 5.34677 9C5.34677 6.99194 6.99194 5.32258 9.02419 5.32258C11.0323 5.32258 12.6774 6.99194 12.6774 9C12.6774 11.0081 11.0565 12.6774 9.02419 12.6774ZM14.1048 5.66129C13.8629 5.92742 13.5 6.07258 13.0887 6.07258C12.7258 6.07258 12.3629 5.92742 12.0726 5.66129C11.8065 5.39516 11.6613 5.05645 11.6613 4.64516C11.6613 4.23387 11.8065 3.91935 12.0726 3.62903C12.3387 3.33871 12.6774 3.19355 13.0887 3.19355C13.4516 3.19355 13.8387 3.33871 14.1048 3.60484C14.3468 3.91935 14.5161 4.28226 14.5161 4.66935C14.4919 5.05645 14.3468 5.39516 14.1048 5.66129Z"
                                            fill="" />
                                        <path
                                            d="M13.1135 4.06433C12.799 4.06433 12.5329 4.33046 12.5329 4.64498C12.5329 4.95949 12.799 5.22562 13.1135 5.22562C13.428 5.22562 13.6942 4.95949 13.6942 4.64498C13.6942 4.33046 13.4522 4.06433 13.1135 4.06433Z"
                                            fill="" />
                                    </svg>
                                </a>
                                <a href="https://linkedin.com/in/mochsyarifhidayat13" target="_blank"
                                    class="text-dark-6 hover:text-primary">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </a>
                                <a href="https://mosyahizuku.site" target="_blank"
                                    class="text-dark-6 hover:text-primary">
                                    <i class="fas fa-globe"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 sm:w-1/2 lg:w-1/4 xl:w-1/4 wow fadeInUp" data-wow-delay=".15s">
                    <div
                        class="group mb-8 rounded-xl bg-white px-5 pb-10 pt-12 shadow-testimonial dark:bg-dark dark:shadow-none">
                        <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]">
                            <img data-src="<?= base_url('landing/assets/images/developers/rizki.jpg') ?>"
                                alt="Web Crafser - Web Crafter Service" title="Web Crafser - Web Crafter Service"
                                class="h-[120px] w-[120px] rounded-full lazy" />
                            <span
                                class="absolute bottom-0 left-0 -z-10 h-10 w-10 rounded-full bg-secondary opacity-0 transition-all group-hover:opacity-100"></span>
                            <span class="absolute right-0 top-0 -z-10 opacity-0 transition-all group-hover:opacity-100">
                                <!--Aksesoris 3-->
                                <img src="<?= base_url('landing/assets/images/aksesoris/aksesoris-3.svg') ?>"
                                    alt="Web Crafser">
                            </span>
                        </div>
                        <div class="text-center">
                            <h4 class="mb-1 text-lg font-semibold text-dark dark:text-white">
                                Ahmad Rizki, S.T
                            </h4>
                            <p class="mb-5 text-sm text-body-color dark:text-dark-6">
                                Web Development
                            </p>
                            <div class="flex items-center justify-center gap-5">
                                <a href="https://www.facebook.com/rizki.redriver/" target="_blank"
                                    class="text-dark-6 hover:text-primary">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                                <a href="https://www.github.com/" target="_blank" class="text-dark-6 hover:text-primary">
                                    <i class="fa-brands fa-github"></i>
                                </a>
                                <a href="https://www.instagram.com/ahmdrrizki/" target="_blank"
                                    class="text-dark-6 hover:text-primary">
                                    <!--Aksesoris-5-->
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                        <path
                                            d="M9.02429 11.8066C10.5742 11.8066 11.8307 10.5501 11.8307 9.00018C11.8307 7.45022 10.5742 6.19373 9.02429 6.19373C7.47433 6.19373 6.21783 7.45022 6.21783 9.00018C6.21783 10.5501 7.47433 11.8066 9.02429 11.8066Z"
                                            fill="" />
                                        <path
                                            d="M12.0726 1.5H5.92742C3.48387 1.5 1.5 3.48387 1.5 5.92742V12.0242C1.5 14.5161 3.48387 16.5 5.92742 16.5H12.0242C14.5161 16.5 16.5 14.5161 16.5 12.0726V5.92742C16.5 3.48387 14.5161 1.5 12.0726 1.5ZM9.02419 12.6774C6.96774 12.6774 5.34677 11.0081 5.34677 9C5.34677 6.99194 6.99194 5.32258 9.02419 5.32258C11.0323 5.32258 12.6774 6.99194 12.6774 9C12.6774 11.0081 11.0565 12.6774 9.02419 12.6774ZM14.1048 5.66129C13.8629 5.92742 13.5 6.07258 13.0887 6.07258C12.7258 6.07258 12.3629 5.92742 12.0726 5.66129C11.8065 5.39516 11.6613 5.05645 11.6613 4.64516C11.6613 4.23387 11.8065 3.91935 12.0726 3.62903C12.3387 3.33871 12.6774 3.19355 13.0887 3.19355C13.4516 3.19355 13.8387 3.33871 14.1048 3.60484C14.3468 3.91935 14.5161 4.28226 14.5161 4.66935C14.4919 5.05645 14.3468 5.39516 14.1048 5.66129Z"
                                            fill="" />
                                        <path
                                            d="M13.1135 4.06433C12.799 4.06433 12.5329 4.33046 12.5329 4.64498C12.5329 4.95949 12.799 5.22562 13.1135 5.22562C13.428 5.22562 13.6942 4.95949 13.6942 4.64498C13.6942 4.33046 13.4522 4.06433 13.1135 4.06433Z"
                                            fill="" />
                                    </svg>
                                </a>
                                <a href="<?= current_url() ?>" class="text-dark-6 hover:text-primary">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </a>
                                <a href="<?= current_url() ?>" class="text-dark-6 hover:text-primary">
                                    <i class="fas fa-globe"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 sm:w-1/2 lg:w-1/4 xl:w-1/4 wow fadeInUp" data-wow-delay=".15s">
                    <div
                        class="group mb-8 rounded-xl bg-white px-5 pb-10 pt-12 shadow-testimonial dark:bg-dark dark:shadow-none">
                        <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]">
                            <img data-src="<?= base_url('landing/assets/images/developers/dimas.png') ?>"
                                alt="Web Crafser - Web Crafter Service" title="Web Crafser - Web Crafter Service"
                                class="h-[120px] w-[120px] rounded-full lazy" />
                            <span
                                class="absolute bottom-0 left-0 -z-10 h-10 w-10 rounded-full bg-secondary opacity-0 transition-all group-hover:opacity-100"></span>
                            <!--Aksesoris-3-->
                            <span class="absolute right-0 top-0 -z-10 opacity-0 transition-all group-hover:opacity-100">
                                <img src="<?= base_url('landing/assets/images/aksesoris/aksesoris-3.svg') ?>"
                                    alt="Web Crafser">
                            </span>
                        </div>
                        <div class="text-center">
                            <h4 class="mb-1 text-lg font-semibold text-dark dark:text-white">
                                Dimas Pangestu, S.T
                            </h4>
                            <p class="mb-5 text-sm text-body-color dark:text-dark-6">
                                Web Development
                            </p>
                            <div class="flex items-center justify-center gap-5">
                                <a href="<?= current_url() ?>" class="text-dark-6 hover:text-primary">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                                <a href="<?= current_url() ?>" class="text-dark-6 hover:text-primary">
                                    <i class="fa-brands fa-github"></i>
                                </a>
                                <a href="https://www.instagram.com/dp_pangestu_dimas" target="_blank"
                                    class="text-dark-6 hover:text-primary">
                                    <!--Aksesoris 5-->
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                        <path
                                            d="M9.02429 11.8066C10.5742 11.8066 11.8307 10.5501 11.8307 9.00018C11.8307 7.45022 10.5742 6.19373 9.02429 6.19373C7.47433 6.19373 6.21783 7.45022 6.21783 9.00018C6.21783 10.5501 7.47433 11.8066 9.02429 11.8066Z"
                                            fill="" />
                                        <path
                                            d="M12.0726 1.5H5.92742C3.48387 1.5 1.5 3.48387 1.5 5.92742V12.0242C1.5 14.5161 3.48387 16.5 5.92742 16.5H12.0242C14.5161 16.5 16.5 14.5161 16.5 12.0726V5.92742C16.5 3.48387 14.5161 1.5 12.0726 1.5ZM9.02419 12.6774C6.96774 12.6774 5.34677 11.0081 5.34677 9C5.34677 6.99194 6.99194 5.32258 9.02419 5.32258C11.0323 5.32258 12.6774 6.99194 12.6774 9C12.6774 11.0081 11.0565 12.6774 9.02419 12.6774ZM14.1048 5.66129C13.8629 5.92742 13.5 6.07258 13.0887 6.07258C12.7258 6.07258 12.3629 5.92742 12.0726 5.66129C11.8065 5.39516 11.6613 5.05645 11.6613 4.64516C11.6613 4.23387 11.8065 3.91935 12.0726 3.62903C12.3387 3.33871 12.6774 3.19355 13.0887 3.19355C13.4516 3.19355 13.8387 3.33871 14.1048 3.60484C14.3468 3.91935 14.5161 4.28226 14.5161 4.66935C14.4919 5.05645 14.3468 5.39516 14.1048 5.66129Z"
                                            fill="" />
                                        <path
                                            d="M13.1135 4.06433C12.799 4.06433 12.5329 4.33046 12.5329 4.64498C12.5329 4.95949 12.799 5.22562 13.1135 5.22562C13.428 5.22562 13.6942 4.95949 13.6942 4.64498C13.6942 4.33046 13.4522 4.06433 13.1135 4.06433Z"
                                            fill="" />
                                    </svg>
                                </a>
                                <a href="https://www.linkedin.com/in/dpangestu" target="_blank"
                                    class="text-dark-6 hover:text-primary">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </a>
                                <a href="<?= current_url() ?>" class="text-dark-6 hover:text-primary">
                                    <i class="fas fa-globe"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
