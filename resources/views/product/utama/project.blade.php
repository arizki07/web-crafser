@extends('layouts.main')
@section('webcrafser')
    <div class="relative z-10 overflow-hidden pb-[60px] pt-[120px] dark:bg-dark md:pt-[130px] lg:pt-[160px] bg-[#090E34]">
        <div
            class="absolute bottom-0 left-0 w-full h-px bg-gradient-to-r from-stroke/0 via-stroke to-stroke/0 dark:via-dark-3">
        </div>
        <div class="container">
            <div class="flex flex-wrap items-center -mx-4">
                <div class="w-full px-4">
                    <div class="text-center">
                        <h1
                            class="mb-4 text-3xl font-bold text-white dark:text-white sm:text-4xl md:text-[40px] md:leading-[1.2]">
                            {{ $judul }}
                        </h1>
                        <p class="mb-5 text-base text-body-color dark:text-dark-6">
                            Proyek Web Crafter Service IT Service dan Consultans.
                        </p>

                        <ul class="flex items-center justify-center gap-[10px]">
                            <li>
                                <a href="/"
                                    class="flex items-center gap-[10px] text-base font-medium text-white dark:text-white">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="flex items-center gap-[10px] text-base font-medium text-body-color dark:text-dark-6">
                                    <span class="text-body-color dark:text-dark-6"> / </span>
                                    <?= $judul ?>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                                <a href="https://english-academy.webcrafser.com" target="_blank" class="block">
                                    <img src="{{ asset('landing/assets/images/project/akademik.png') }} " alt="image"
                                        class="w-full transition group-hover:rotate-6 group-hover:scale-125" />
                                </a>
                            </div>
                            <div>
                                <span
                                    class="inline-block px-4 py-0.5 mb-6 text-xs font-medium leading-loose text-center text-white rounded-[5px] bg-primary">
                                    Finished
                                </span>
                                <h3>
                                    <a href="https://english-academy.webcrafser.com" target="_blank"
                                        class="inline-block mb-4 text-xl font-semibold text-dark dark:text-white hover:text-primary dark:hover:text-primary sm:text-2xl lg:text-xl xl:text-2xl">
                                        English Academy
                                    </a>
                                </h3>
                                <p class="max-w-[370px] text-base text-body-color dark:text-dark-6">
                                    Sistem Informasi Pembelajaran Bahasa Inggris Tingkat Sekolah Dasar Berbasis Website
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full px-4 md:w-1/2 lg:w-1/3 mb-8">
                    <div class="relative mx-auto max-w-[525px] overflow-hidden rounded-xl shadow-lg bg-white dark:bg-dark py-10 px-8 sm:px-12 md:px-[60px] wow fadeInUp dark:shadow-none"
                        data-wow-delay=".15s">
                        <div class="wow fadeInUp group" data-wow-delay=".1s">
                            <div class="mb-8 overflow-hidden rounded-[10px]">
                                <a href="https://gis-demo.webcrafser.com" target="_blank" class="block">
                                    <img src="{{ asset('landing/assets/images/project/gis.png') }}" alt="image"
                                        class="w-full transition group-hover:rotate-6 group-hover:scale-125" />
                                </a>
                            </div>
                            <div>
                                <span
                                    class="inline-block px-4 py-0.5 mb-6 text-xs font-medium leading-loose text-center text-white rounded-[5px] bg-primary">
                                    Finished
                                </span>
                                <h3>
                                    <a href="https://gis-demo.webcrafser.com" target="_blank"
                                        class="inline-block mb-4 text-xl font-semibold text-dark dark:text-white hover:text-primary dark:hover:text-primary sm:text-2xl lg:text-xl xl:text-2xl">
                                        GIS School
                                    </a>
                                </h3>
                                <p class="max-w-[370px] text-base text-body-color dark:text-dark-6">
                                    Sistem Informasi Geografis Sekolah Menengah Pertama dan Akhir di Kabupaten Kuningan.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full px-4 md:w-1/2 lg:w-1/3 mb-8">
                    <div class="relative mx-auto max-w-[525px] overflow-hidden rounded-xl shadow-lg bg-white dark:bg-dark py-10 px-8 sm:px-12 md:px-[60px] wow fadeInUp dark:shadow-none"
                        data-wow-delay=".15s">
                        <div class="wow fadeInUp group" data-wow-delay=".1s">
                            <div class="mb-8 overflow-hidden rounded-[10px]">
                                <a href="https://ridhorattan.com" target="_blank" class="block">
                                    <img src="{{ asset('landing/assets/images/project/cv ridho.png') }}" alt="image"
                                        class="w-full transition group-hover:rotate-6 group-hover:scale-125" />
                                </a>
                            </div>
                            <div>
                                <span
                                    class="inline-block px-4 py-0.5 mb-6 text-xs font-medium leading-loose text-center text-white rounded-[5px] bg-primary">
                                    Finished
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
                                <a href="blog-details.html" class="block">
                                    <img src="{{ asset('landing/assets/images/project/raport.png') }}" alt="image"
                                        class="w-full transition group-hover:rotate-6 group-hover:scale-125" />
                                </a>
                            </div>
                            <div>
                                <span
                                    class="inline-block px-4 py-0.5 mb-6 text-xs font-medium leading-loose text-center text-white rounded-[5px] bg-primary">
                                    Finished
                                </span>
                                <h3>
                                    <a href="blog-details.html"
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
                                <a href="https://demo-smpn12sumber.000webhostapp.com/login" target="_blank" class="block">
                                    <img src="{{ asset('landing/assets/images/project/monitoring.png') }}" alt="image"
                                        class="w-full transition group-hover:rotate-6 group-hover:scale-125" />
                                </a>
                            </div>
                            <div>
                                <span
                                    class="inline-block px-4 py-0.5 mb-6 text-xs font-medium leading-loose text-center text-white rounded-[5px] bg-primary">
                                    Finished
                                </span>
                                <span
                                    class="inline-block px-4 py-0.5 mb-6 text-xs font-medium leading-loose text-center text-dark rounded-[5px]"
                                    style="background: linear-gradient(45deg, #3498db, #3b3b3b, #ff69b4); color: #fff; backdrop-filter: blur(5px);">
                                    Laravel
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

                <div class="w-full px-4 md:w-1/2 lg:w-1/3 mb-8">
                    <div class="relative mx-auto max-w-[525px] overflow-hidden rounded-xl shadow-lg bg-white dark:bg-dark py-10 px-8 sm:px-12 md:px-[60px] wow fadeInUp dark:shadow-none"
                        data-wow-delay=".15s">
                        <div class="wow fadeInUp group" data-wow-delay=".15s">
                            <div class="mb-8 overflow-hidden rounded-[10px]">
                                <a href="https://demo-smpn12sumber.000webhostapp.com/login" target="_blank"
                                    class="block">
                                    <img src="{{ asset('landing/assets/images/project/e-arsip.png') }}" alt="image"
                                        class="w-full transition group-hover:rotate-6 group-hover:scale-125" />
                                </a>
                            </div>
                            <div>
                                <span
                                    class="inline-block px-4 py-0.5 mb-6 text-xs font-medium leading-loose text-center text-white rounded-[5px] bg-primary">
                                    Project In Progress
                                </span>
                                <h3>
                                    <a href="https://demo-monitoring.webcrafser.com/" target="_blank"
                                        class="inline-block mb-4 text-xl font-semibold text-dark dark:text-white hover:text-primary dark:hover:text-primary sm:text-2xl lg:text-xl xl:text-2xl">
                                        E-Arsip Dokumen Satpol PP Cirebon
                                    </a>
                                </h3>
                                <p class="max-w-[370px] text-base text-body-color dark:text-dark-6">
                                    Sistem Informasi Arsip Dokumen Polisi Pamong Praja Kota Cirebon.
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
                                    <img src="{{ asset('landing/assets/images/project/marketplace-fotografi.png') }}"
                                        alt="image"
                                        class="w-full transition group-hover:rotate-6 group-hover:scale-125" />
                                </a>
                            </div>
                            <div>
                                <span
                                    class="inline-block px-4 py-0.5 mb-6 text-xs font-medium leading-loose text-center text-white rounded-[5px] bg-primary">
                                    Project In Progress
                                </span>
                                <h3>
                                    <a href="https://demo-monitoring.webcrafser.com/" target="_blank"
                                        class="inline-block mb-4 text-xl font-semibold text-dark dark:text-white hover:text-primary dark:hover:text-primary sm:text-2xl lg:text-xl xl:text-2xl">
                                        Marketplace Pemesanan Fotografi
                                    </a>
                                </h3>
                                <p class="max-w-[370px] text-base text-body-color dark:text-dark-6">
                                    Sistem Informasi Marketplace Manajemen Pemesanan Fotografi Dan Videografi Berbasis
                                    Website.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="mt-8 text-center wow fadeInUp" data-wow-delay=".2s">
                <div
                    class="inline-flex p-3 bg-white dark:bg-dark-2 border rounded-[10px] border-stroke dark:border-dark-3">
                    <ul class="flex items-center -mx-1">
                        <li class="px-1">
                            <a href="javascript:void(0)"
                                class="flex items-center justify-center text-base bg-transparent border rounded-md hover:border-primary hover:bg-primary h-[34px] w-[34px] border-stroke dark:border-dark-3 text-body-color dark:text-dark-6 hover:text-white dark:hover:border-primary dark:hover:text-white">
                                <span>
                                    <svg width="8" height="15" viewBox="0 0 8 15"
                                        class="fill-current stroke-current">
                                        <path
                                            d="M7.12979 1.91389L7.1299 1.914L7.1344 1.90875C7.31476 1.69833 7.31528 1.36878 7.1047 1.15819C7.01062 1.06412 6.86296 1.00488 6.73613 1.00488C6.57736 1.00488 6.4537 1.07206 6.34569 1.18007L6.34564 1.18001L6.34229 1.18358L0.830207 7.06752C0.830152 7.06757 0.830098 7.06763 0.830043 7.06769C0.402311 7.52078 0.406126 8.26524 0.827473 8.73615L0.827439 8.73618L0.829982 8.73889L6.34248 14.6014L6.34243 14.6014L6.34569 14.6047C6.546 14.805 6.88221 14.8491 7.1047 14.6266C7.30447 14.4268 7.34883 14.0918 7.12833 13.8693L1.62078 8.01209C1.55579 7.93114 1.56859 7.82519 1.61408 7.7797L1.61413 7.77975L1.61729 7.77639L7.12979 1.91389Z"
                                            stroke-width="0.3" />
                                    </svg>
                                </span>
                            </a>
                        </li>
                        <li class="px-1">
                            <a href="javascript:void(0)"
                                class="flex items-center justify-center text-base bg-transparent border rounded-md hover:border-primary hover:bg-primary h-[34px] w-[34px] border-stroke dark:border-dark-3 text-body-color dark:text-dark-6 hover:text-white dark:hover:border-primary dark:hover:text-white">
                                1
                            </a>
                        </li>
                        <li class="px-1">
                            <a href="javascript:void(0)"
                                class="flex items-center justify-center text-base bg-transparent border rounded-md hover:border-primary hover:bg-primary h-[34px] w-[34px] border-stroke dark:border-dark-3 text-body-color dark:text-dark-6 hover:text-white dark:hover:border-primary dark:hover:text-white">
                                <span>
                                    <svg width="8" height="15" viewBox="0 0 8 15"
                                        class="fill-current stroke-current">
                                        <path
                                            d="M0.870212 13.0861L0.870097 13.086L0.865602 13.0912C0.685237 13.3017 0.684716 13.6312 0.895299 13.8418C0.989374 13.9359 1.13704 13.9951 1.26387 13.9951C1.42264 13.9951 1.5463 13.9279 1.65431 13.8199L1.65436 13.82L1.65771 13.8164L7.16979 7.93248C7.16985 7.93243 7.1699 7.93237 7.16996 7.93231C7.59769 7.47923 7.59387 6.73477 7.17253 6.26385L7.17256 6.26382L7.17002 6.26111L1.65752 0.398611L1.65757 0.398563L1.65431 0.395299C1.454 0.194997 1.11779 0.150934 0.895299 0.373424C0.695526 0.573197 0.651169 0.908167 0.871667 1.13067L6.37922 6.98791C6.4442 7.06886 6.43141 7.17481 6.38592 7.2203L6.38587 7.22025L6.38271 7.22361L0.870212 13.0861Z"
                                            stroke-width="0.3" />
                                    </svg>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
    </section>


    <section class="relative z-10 overflow-hidden bg-primary py-20 lg:py-[115px]">
        <div class="container mx-auto">
            <div class="relative overflow-hidden">
                <div class="flex flex-wrap items-stretch -mx-4">
                    <div class="w-full px-4">
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
                                class="inline-block rounded-md border border-transparent bg-secondary px-7 py-3 text-base font-medium text-white transition hover:bg-[#0BB489] relative z-10">
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
        <div class="wow fadeInUp" data-wow-delay=".2s">
            <div class="mt-12">
                <div class="swiper team-developer common-carousel">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide" style="text-align: center;">
                            <div class="text-white/60 duration-300 ease-in-out hover:text-white">
                                <i class="devicon-codeigniter-plain" style="font-size: 30px"></i>
                            </div>
                        </div>

                        <div class="swiper-slide" style="text-align: center;">
                            <div class="text-white/60 duration-300 ease-in-out hover:text-white">
                                <i class="devicon-laravel-plain" style="font-size: 30px"></i>
                            </div>
                        </div>

                        <div class="swiper-slide" style="text-align: center;">
                            <div class="text-white/60 duration-300 ease-in-out hover:text-white">
                                <i class="devicon-php-plain" style="font-size: 30px"></i>
                            </div>
                        </div>

                        <div class="swiper-slide" style="text-align: center;">
                            <div class="text-white/60 duration-300 ease-in-out hover:text-white">
                                <i class="devicon-react-original" style="font-size: 30px"></i>
                            </div>
                        </div>

                        <div class="swiper-slide" style="text-align: center;">
                            <div class="text-white/60 duration-300 ease-in-out hover:text-white">
                                <i class="devicon-wordpress-plain" style="font-size: 30px"></i>
                            </div>
                        </div>

                        <div class="swiper-slide" style="text-align: center;">
                            <div class="text-white/60 duration-300 ease-in-out hover:text-white">
                                <i class="devicon-nodejs-plain" style="font-size: 30px"></i>
                            </div>
                        </div>

                        <div class="swiper-slide" style="text-align: center;">
                            <div class="text-white/60 duration-300 ease-in-out hover:text-white">
                                <i class="devicon-woocommerce-plain" style="font-size: 30px"></i>
                            </div>
                        </div>

                        <div class="swiper-slide" style="text-align: center;">
                            <div class="text-white/60 duration-300 ease-in-out hover:text-white">
                                <i class="devicon-mysql-plain" style="font-size: 30px"></i>
                            </div>
                        </div>

                        <div class="swiper-slide" style="text-align: center;">
                            <div class="text-white/60 duration-300 ease-in-out hover:text-white">
                                <i class="devicon-bootstrap-plain" style="font-size: 30px"></i>
                            </div>
                        </div>

                        <div class="swiper-slide" style="text-align: center;">
                            <div class="text-white/60 duration-300 ease-in-out hover:text-white">
                                <i class="devicon-tailwindcss-plain" style="font-size: 30px"></i>
                            </div>
                        </div>

                        <div class="swiper-slide" style="text-align: center;">
                            <div class="text-white/60 duration-300 ease-in-out hover:text-white">
                                <i class="devicon-angularjs-plain" style="font-size: 30px"></i>
                            </div>
                        </div>

                        <div class="swiper-slide" style="text-align: center;">
                            <div class="text-white/60 duration-300 ease-in-out hover:text-white">
                                <i class="devicon-javascript-plain" style="font-size: 30px"></i>
                            </div>
                        </div>

                        <div class="swiper-slide" style="text-align: center;">
                            <div class="text-white/60 duration-300 ease-in-out hover:text-white">
                                <i class="devicon-html5-plain" style="font-size: 30px"></i>
                            </div>
                        </div>

                        <div class="swiper-slide" style="text-align: center;">
                            <div class="text-white/60 duration-300 ease-in-out hover:text-white">
                                <i class="devicon-css3-plain" style="font-size: 30px"></i>
                            </div>
                        </div>

                        <div class="swiper-slide" style="text-align: center;">
                            <div class="text-white/60 duration-300 ease-in-out hover:text-white">
                                <i class="devicon-figma-plain" style="font-size: 30px"></i>
                            </div>
                        </div>

                        <div class="swiper-slide" style="text-align: center;">
                            <div class="text-white/60 duration-300 ease-in-out hover:text-white">
                                <i class="devicon-photoshop-plain" style="font-size: 30px"></i>
                            </div>
                        </div>

                        <div class="swiper-slide" style="text-align: center;">
                            <div class="text-white/60 duration-300 ease-in-out hover:text-white">
                                <i class="devicon-androidstudio-plain" style="font-size: 30px"></i>
                            </div>
                        </div>

                        <div class="swiper-slide" style="text-align: center;">
                            <div class="text-white/60 duration-300 ease-in-out hover:text-white">
                                <i class="devicon-java-plain" style="font-size: 30px"></i>
                            </div>
                        </div>

                        <div class="swiper-slide" style="text-align: center;">
                            <div class="text-white/60 duration-300 ease-in-out hover:text-white">
                                <i class="devicon-flutter-plain" style="font-size: 30px"></i>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
