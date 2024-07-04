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
                            Tentang Kami
                        </h1>
                        <p class="mb-5 text-base text-body-color dark:text-dark-6">
                            Profil Web Crafter Service IT Service dan Consultans.
                        </p>

                        <ul class="flex items-center justify-center gap-[10px]">
                            <li>
                                <a href="/"
                                    class="flex items-center gap-[10px] text-base font-medium text-white dark:text-white">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('about') }}"
                                    class="flex items-center gap-[10px] text-base font-medium text-body-color dark:text-dark-6">
                                    <span class="text-body-color dark:text-dark-6"> / </span>
                                    Tentang Kami
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="pb-10 pt-20 dark:bg-dark lg:pb-20 lg:pt-[120px]" style="padding-left: 25px; padding-right: 25px;">
        <div class="container">
            <div class="flex flex-wrap justify-center -mx-4">

                <div class="flex flex-wrap -mx-4">
                    <div class="w-full px-4 h-full">
                        <div>
                            <h2 class="wow fadeInUp mb-8 text-2xl font-bold text-dark dark:text-white sm:text-3xl md:text-[35px] md:leading-[1.28]"
                                data-wow-delay=".1s
                            ">
                                Selamat datang di Web Crafser - Solusi Terdepan dalam Layanan IT dan Konsultansi
                            </h2>
                            <p class="mb-6 text-base wow fadeInUp text-body-color dark:text-dark-6" data-wow-delay=".1s">
                                Kami adalah tim profesional di dunia teknologi informasi yang berkomitmen untuk memberikan
                                layanan IT terbaik dan solusi konsultansi yang inovatif. Di Web Crafser, kami memahami
                                betapa pentingnya teknologi bagi pertumbuhan dan keberhasilan bisnis Anda.
                                Web Crafser didirikan dengan visi untuk menjadi mitra pilihan Anda dalam menghadapi
                                tantangan teknologi. Kami menghadirkan kombinasi unik dari keahlian teknis, pengalaman
                                industri, dan dedikasi untuk membantu Anda mencapai tujuan bisnis Anda.
                            </p>
                            <h3 class="wow fadeInUp mb-6 text-2xl font-bold text-dark dark:text-white sm:text-[28px] sm:leading-[40px]"
                                data-wow-delay=".1s">
                                Apa yang kami tawarkan?
                            </h3>
                            <ul class="mb-6 text-base wow fadeInUp text-body-color dark:text-dark-6" data-wow-delay=".1s">
                                <li><strong><i class="fas fa-circle-chevron-right text-primary"></i> Layanan IT
                                        Terkini:</strong> Dari pengembangan situs web hingga manajemen jaringan, kami
                                    menyediakan layanan IT terdepan untuk menjaga bisnis Anda tetap berjalan lancar.</li>
                                <li><strong><i class="fas fa-circle-chevron-right text-primary"></i> Konsultansi
                                        Profesional:</strong> Dengan tim konsultan ahli kami, kami memberikan pandangan
                                    mendalam dan solusi yang dioptimalkan sesuai dengan kebutuhan unik perusahaan Anda.</li>
                                <li><strong><i class="fas fa-circle-chevron-right text-primary"></i> Inovasi Berbasis
                                        Teknologi:</strong> Kami selalu mengikuti perkembangan terbaru dalam dunia teknologi
                                    untuk memastikan bisnis Anda tetap relevan dan kompetitif.</li>
                            </ul>
                            <h3 class="wow fadeInUp mb-6 text-2xl font-bold text-dark dark:text-white sm:text-[28px] sm:leading-[40px]"
                                data-wow-delay=".1s">
                                Mengapa Memilih Web Crafser?
                            </h3>
                            <ul class="mb-6 text-base wow fadeInUp text-body-color dark:text-dark-6" data-wow-delay=".1s">
                                <li><strong><i class="fas fa-circle-chevron-right text-primary"></i> Komitmen Terhadap
                                        Kualitas:</strong> Kami berkomitmen untuk memberikan layanan berkualitas tinggi yang
                                    memenuhi dan melampaui harapan klien kami.</li>
                                <li><strong><i class="fas fa-circle-chevron-right text-primary"></i> Tim
                                        Profesional:</strong> Dibantu oleh tim yang berpengalaman dan berkualifikasi, kami
                                    siap membantu Anda mencapai kesuksesan.</li>
                                <li><strong><i class="fas fa-circle-chevron-right text-primary"></i> Sesuaikan dengan
                                        Kebutuhan Anda:</strong> Setiap bisnis memiliki kebutuhan yang berbeda, dan kami
                                    berusaha untuk menyediakan solusi yang sesuai dengan kebutuhan unik Anda.</li>
                            </ul>
                            <div class="wow fadeInUp relative z-10 mb-10 overflow-hidden rounded-[5px] bg-primary/5 px-6 py-8 text-center sm:p-10 md:px-[60px]"
                                data-wow-delay=".1s
                        ">
                                <div class="mx-auto max-w-[530px]">
                                    <span class="mb-[14px] flex justify-center text-primary">
                                        <svg width="46" height="46" viewBox="0 0 46 46" fill="none"
                                            xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                            <path
                                                d="M13.7995 35.5781C12.937 35.5781 12.1464 35.075 11.8589 34.2844L9.48702 28.5344C6.82765 28.1031 4.45577 26.7375 2.9464 24.6531C1.36515 22.5687 0.862021 19.9812 1.5089 17.4656C2.51515 13.3687 6.75577 10.2781 11.4276 10.35C14.7339 10.4219 17.4651 11.7875 19.262 14.2312C20.987 16.675 21.4183 19.9812 20.412 23C19.4776 25.7312 18.2558 28.4625 17.1058 31.1219C16.6745 32.2 16.1714 33.2781 15.7401 34.2844C15.4526 35.075 14.662 35.5781 13.7995 35.5781ZM11.2839 13.5844C8.1214 13.5844 5.2464 15.5969 4.59952 18.2562C4.24015 19.8375 4.52765 21.4187 5.5339 22.7125C6.6839 24.2937 8.62452 25.3 10.7089 25.4437L11.7151 25.5156L13.7995 30.5469C13.8714 30.3312 14.0151 30.0437 14.087 29.8281C15.237 27.2406 16.387 24.5812 17.2495 21.9219C17.9683 19.9094 17.6808 17.6812 16.5308 16.1C15.3808 14.5187 13.5839 13.6562 11.3558 13.5844C11.3558 13.5844 11.3558 13.5844 11.2839 13.5844Z" />
                                            <path
                                                d="M37.5905 35.65C36.728 35.65 35.9374 35.1469 35.6499 34.3563L33.278 28.6063C30.6187 28.175 28.2468 26.8094 26.7374 24.725C25.1562 22.6406 24.653 20.0531 25.2999 17.5375C26.3062 13.4406 30.5468 10.35 35.2187 10.4219C38.5249 10.4938 41.2562 11.8594 42.9812 14.3031C44.7062 16.7469 45.1374 20.0531 44.1312 23.0719C43.1968 25.8031 41.9749 28.5344 40.8249 31.1938C40.3937 32.2719 39.8905 33.35 39.4593 34.3563C39.2437 35.1469 38.453 35.65 37.5905 35.65ZM35.0749 13.5844C31.9124 13.5844 29.0374 15.5969 28.3905 18.2563C28.0312 19.8375 28.3187 21.4188 29.3249 22.7844C30.4749 24.3656 32.4155 25.3719 34.4999 25.5156L35.5062 25.5875L37.5905 30.6188C37.6624 30.4031 37.8062 30.1156 37.878 29.9C39.028 27.3125 40.178 24.6531 41.0405 21.9938C41.7593 19.9813 41.4718 17.7531 40.3218 16.1C39.1718 14.5188 37.3749 13.6563 35.1468 13.5844C35.1468 13.5844 35.1468 13.5844 35.0749 13.5844Z" />
                                        </svg>
                                    </span>
                                    <p class="mb-[18px] text-base italic leading-[28px] text-dark dark:text-white">
                                        "Inovasi adalah kunci untuk membuka pintu kesuksesan. Di Web Crafser, kami
                                        berkomitmen untuk membawa inovasi dan kualitas ke dunia bisnis Anda."
                                    </p>
                                    <span class="text-xs italic text-body-color dark:text-dark-6">
                                        “Web Crafser”
                                    </span>
                                </div>
                                <div>
                                    <span class="absolute top-0 left-0">
                                        <svg width="103" height="109" viewBox="0 0 103 109" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <ellipse cx="0.483916" cy="3.5" rx="102.075" ry="105.5"
                                                transform="rotate(180 0.483916 3.5)" fill="url(#paint0_linear_2014_9016)" />
                                            <defs>
                                                <linearGradient id="paint0_linear_2014_9016" x1="-101.591" y1="-50.4346"
                                                    x2="49.1618" y2="-49.6518" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#3056D3" stop-opacity="0.15" />
                                                    <stop offset="1" stop-color="white" stop-opacity="0" />
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </span>
                                    <span class="absolute bottom-0 right-0">
                                        <svg width="102" height="106" viewBox="0 0 102 106" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <ellipse cx="102.484" cy="105.5" rx="102.075" ry="105.5"
                                                fill="url(#paint0_linear_2014_9017)" />
                                            <defs>
                                                <linearGradient id="paint0_linear_2014_9017" x1="0.409163" y1="51.5654"
                                                    x2="151.162" y2="52.3482" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#3056D3" stop-opacity="0.15" />
                                                    <stop offset="1" stop-color="white" stop-opacity="0" />
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </span>
                                </div>
                            </div>

                            <h3 class="wow fadeInUp mb-6 text-2xl font-semibold text-dark dark:text-white sm:text-[28px] sm:leading-[40px]"
                                data-wow-delay=".1s">
                                Hubungi Kami
                            </h3>

                            <p class="mb-6 text-base wow fadeInUp text-body-color dark:text-dark-6" data-wow-delay=".1s">
                                Jika Anda mencari mitra yang dapat diandalkan untuk semua kebutuhan IT dan konsultansi Anda,
                                Web Crafser adalah pilihan yang tepat. Hubungi kami hari ini untuk mendiskusikan bagaimana
                                kami dapat membantu meningkatkan performa dan pertumbuhan bisnis Anda.
                            </p>

                            <div class="flex flex-wrap items-center mb-12 -mx-4">
                                <div class="w-full px-4 md:w-1/2">
                                    <div class="flex flex-wrap items-center gap-3 mb-8 wow fadeInUp md:mb-0"
                                        data-wow-delay=".1s">
                                        <a href="https://api.whatsapp.com/send?phone=6282129967454&text=Saya%20ingin%20konsultasi%2C%20apakah%20ini%20dengan%20Web%20Crafser%20Cirebon%3F"
                                            target="_blank"
                                            class="block rounded-md bg-primary/[0.08] px-[14px] py-[5px] text-base text-dark hover:bg-primary hover:text-white dark:text-white">
                                            <i class="fa-brands fa-whatsapp"></i>
                                        </a>
                                        <a href="https://instagram.com/web.crafser" target="_blank"
                                            class="block rounded-md bg-primary/[0.08] px-[14px] py-[5px] text-base text-dark hover:bg-primary hover:text-white dark:text-white">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                        <a href="https://linkedin.com/company/webcrafser" target="_blank"
                                            class="block rounded-md bg-primary/[0.08] px-[14px] py-[5px] text-base text-dark hover:bg-primary hover:text-white dark:text-white">
                                            <i class="fa-brands fa-linkedin-in"></i>
                                        </a>
                                        <a href="https://maps.app.goo.gl/YHDnVUHySNRgQk5A7" target="_blank"
                                            class="block rounded-md bg-primary/[0.08] px-[14px] py-[5px] text-base text-dark hover:bg-primary hover:text-white dark:text-white">
                                            <i class="fas fa-location-dot"></i>
                                        </a>
                                        <a href="https://g.co/kgs/YUAefei" target="_blank"
                                            class="block rounded-md bg-primary/[0.08] px-[14px] py-[5px] text-base text-dark hover:bg-primary hover:text-white dark:text-white">
                                            <i class="fa-brands fa-google"></i>
                                        </a>
                                        <a href="mailto:cp@webcrafser.com" target="_blank"
                                            class="block rounded-md bg-primary/[0.08] px-[14px] py-[5px] text-base text-dark hover:bg-primary hover:text-white dark:text-white">
                                            <i class="fas fa-envelope"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="w-full px-4 md:w-1/2">
                                    <div class="flex items-center wow fadeInUp md:justify-end" data-wow-delay=".1s">
                                        <span class="mr-5 text-sm font-medium text-body-color dark:text-dark-6">
                                            Share Postingan :
                                        </span>
                                        <div class="flex items-center gap-[10px]">
                                            <a id="shareButton">
                                                <i class="fas fa-share-nodes"
                                                    style="font-size: 25px; background: linear-gradient(135deg, #3498db, #ff8c00, #9b59b6); -webkit-background-clip: text; color: transparent;"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                <div class="w-full px-4 sm:w-1/2 lg:w-1/4 xl:w-1/4">
                    <div
                        class="group mb-8 rounded-xl bg-white px-5 pb-10 pt-12 shadow-testimonial dark:bg-dark dark:shadow-none">
                        <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]">
                            <img src="{{ asset('landing/assets/images/developers/syarif.png') }}" alt="team image"
                                class="h-[120px] w-[120px] rounded-full" />
                            <span
                                class="absolute bottom-0 left-0 -z-10 h-10 w-10 rounded-full bg-secondary opacity-0 transition-all group-hover:opacity-100"></span>
                            <span class="absolute right-0 top-0 -z-10 opacity-0 transition-all group-hover:opacity-100">
                                <svg width="55" height="53" viewBox="0 0 55 53" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12.5118 3.1009C13.3681 3.1009 14.0622 2.40674 14.0622 1.55045C14.0622 0.69416 13.3681 0 12.5118 0C11.6555 0 10.9613 0.69416 10.9613 1.55045C10.9613 2.40674 11.6555 3.1009 12.5118 3.1009Z"
                                        fill="#3758F9" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M22.5038 3.1009C23.3601 3.1009 24.0543 2.40674 24.0543 1.55045C24.0543 0.69416 23.3601 0 22.5038 0C21.6475 0 20.9534 0.69416 20.9534 1.55045C20.9534 2.40674 21.6475 3.1009 22.5038 3.1009Z"
                                        fill="#3758F9" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M32.4958 3.1009C33.3521 3.1009 34.0463 2.40674 34.0463 1.55045C34.0463 0.69416 33.3521 0 32.4958 0C31.6395 0 30.9454 0.69416 30.9454 1.55045C30.9454 2.40674 31.6395 3.1009 32.4958 3.1009Z"
                                        fill="#3758F9" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M42.4875 3.1009C43.3438 3.1009 44.038 2.40674 44.038 1.55045C44.038 0.69416 43.3438 0 42.4875 0C41.6312 0 40.9371 0.69416 40.9371 1.55045C40.9371 2.40674 41.6312 3.1009 42.4875 3.1009Z"
                                        fill="#3758F9" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M52.4795 3.1009C53.3358 3.1009 54.03 2.40674 54.03 1.55045C54.03 0.69416 53.3358 0 52.4795 0C51.6233 0 50.9291 0.69416 50.9291 1.55045C50.9291 2.40674 51.6233 3.1009 52.4795 3.1009Z"
                                        fill="#3758F9" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M2.52045 13.0804C3.37674 13.0804 4.0709 12.3862 4.0709 11.5299C4.0709 10.6737 3.37674 9.97949 2.52045 9.97949C1.66416 9.97949 0.970001 10.6737 0.970001 11.5299C0.970001 12.3862 1.66416 13.0804 2.52045 13.0804Z"
                                        fill="#3758F9" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12.5118 13.0804C13.3681 13.0804 14.0622 12.3862 14.0622 11.5299C14.0622 10.6737 13.3681 9.97949 12.5118 9.97949C11.6555 9.97949 10.9613 10.6737 10.9613 11.5299C10.9613 12.3862 11.6555 13.0804 12.5118 13.0804Z"
                                        fill="#3758F9" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M22.5038 13.0804C23.3601 13.0804 24.0543 12.3862 24.0543 11.5299C24.0543 10.6737 23.3601 9.97949 22.5038 9.97949C21.6475 9.97949 20.9534 10.6737 20.9534 11.5299C20.9534 12.3862 21.6475 13.0804 22.5038 13.0804Z"
                                        fill="#3758F9" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M32.4958 13.0804C33.3521 13.0804 34.0463 12.3862 34.0463 11.5299C34.0463 10.6737 33.3521 9.97949 32.4958 9.97949C31.6395 9.97949 30.9454 10.6737 30.9454 11.5299C30.9454 12.3862 31.6395 13.0804 32.4958 13.0804Z"
                                        fill="#3758F9" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M42.4875 13.0804C43.3438 13.0804 44.038 12.3862 44.038 11.5299C44.038 10.6737 43.3438 9.97949 42.4875 9.97949C41.6312 9.97949 40.9371 10.6737 40.9371 11.5299C40.9371 12.3862 41.6312 13.0804 42.4875 13.0804Z"
                                        fill="#3758F9" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M52.4795 13.0804C53.3358 13.0804 54.03 12.3862 54.03 11.5299C54.03 10.6737 53.3358 9.97949 52.4795 9.97949C51.6233 9.97949 50.9291 10.6737 50.9291 11.5299C50.9291 12.3862 51.6233 13.0804 52.4795 13.0804Z"
                                        fill="#3758F9" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M2.52045 23.0604C3.37674 23.0604 4.0709 22.3662 4.0709 21.5099C4.0709 20.6536 3.37674 19.9595 2.52045 19.9595C1.66416 19.9595 0.970001 20.6536 0.970001 21.5099C0.970001 22.3662 1.66416 23.0604 2.52045 23.0604Z"
                                        fill="#3758F9" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12.5118 23.0604C13.3681 23.0604 14.0622 22.3662 14.0622 21.5099C14.0622 20.6536 13.3681 19.9595 12.5118 19.9595C11.6555 19.9595 10.9613 20.6536 10.9613 21.5099C10.9613 22.3662 11.6555 23.0604 12.5118 23.0604Z"
                                        fill="#3758F9" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M22.5038 23.0604C23.3601 23.0604 24.0543 22.3662 24.0543 21.5099C24.0543 20.6536 23.3601 19.9595 22.5038 19.9595C21.6475 19.9595 20.9534 20.6536 20.9534 21.5099C20.9534 22.3662 21.6475 23.0604 22.5038 23.0604Z"
                                        fill="#3758F9" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M32.4958 23.0604C33.3521 23.0604 34.0463 22.3662 34.0463 21.5099C34.0463 20.6536 33.3521 19.9595 32.4958 19.9595C31.6395 19.9595 30.9454 20.6536 30.9454 21.5099C30.9454 22.3662 31.6395 23.0604 32.4958 23.0604Z"
                                        fill="#3758F9" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M42.4875 23.0604C43.3438 23.0604 44.038 22.3662 44.038 21.5099C44.038 20.6536 43.3438 19.9595 42.4875 19.9595C41.6312 19.9595 40.9371 20.6536 40.9371 21.5099C40.9371 22.3662 41.6312 23.0604 42.4875 23.0604Z"
                                        fill="#3758F9" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M52.4795 23.0604C53.3358 23.0604 54.03 22.3662 54.03 21.5099C54.03 20.6536 53.3358 19.9595 52.4795 19.9595C51.6233 19.9595 50.9291 20.6536 50.9291 21.5099C50.9291 22.3662 51.6233 23.0604 52.4795 23.0604Z"
                                        fill="#3758F9" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M2.52045 33.0404C3.37674 33.0404 4.0709 32.3462 4.0709 31.4899C4.0709 30.6336 3.37674 29.9395 2.52045 29.9395C1.66416 29.9395 0.970001 30.6336 0.970001 31.4899C0.970001 32.3462 1.66416 33.0404 2.52045 33.0404Z"
                                        fill="#3758F9" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12.5118 33.0404C13.3681 33.0404 14.0622 32.3462 14.0622 31.4899C14.0622 30.6336 13.3681 29.9395 12.5118 29.9395C11.6555 29.9395 10.9613 30.6336 10.9613 31.4899C10.9613 32.3462 11.6555 33.0404 12.5118 33.0404Z"
                                        fill="#3758F9" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M22.5038 33.0404C23.3601 33.0404 24.0543 32.3462 24.0543 31.4899C24.0543 30.6336 23.3601 29.9395 22.5038 29.9395C21.6475 29.9395 20.9534 30.6336 20.9534 31.4899C20.9534 32.3462 21.6475 33.0404 22.5038 33.0404Z"
                                        fill="#3758F9" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M32.4958 33.0404C33.3521 33.0404 34.0463 32.3462 34.0463 31.4899C34.0463 30.6336 33.3521 29.9395 32.4958 29.9395C31.6395 29.9395 30.9454 30.6336 30.9454 31.4899C30.9454 32.3462 31.6395 33.0404 32.4958 33.0404Z"
                                        fill="#3758F9" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M42.4875 33.0404C43.3438 33.0404 44.038 32.3462 44.038 31.4899C44.038 30.6336 43.3438 29.9395 42.4875 29.9395C41.6312 29.9395 40.9371 30.6336 40.9371 31.4899C40.9371 32.3462 41.6312 33.0404 42.4875 33.0404Z"
                                        fill="#3758F9" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M52.4795 33.0404C53.3358 33.0404 54.03 32.3462 54.03 31.4899C54.03 30.6336 53.3358 29.9395 52.4795 29.9395C51.6233 29.9395 50.9291 30.6336 50.9291 31.4899C50.9291 32.3462 51.6233 33.0404 52.4795 33.0404Z"
                                        fill="#3758F9" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M2.52045 43.0203C3.37674 43.0203 4.0709 42.3262 4.0709 41.4699C4.0709 40.6136 3.37674 39.9194 2.52045 39.9194C1.66416 39.9194 0.970001 40.6136 0.970001 41.4699C0.970001 42.3262 1.66416 43.0203 2.52045 43.0203Z"
                                        fill="#3758F9" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12.5118 43.0203C13.3681 43.0203 14.0622 42.3262 14.0622 41.4699C14.0622 40.6136 13.3681 39.9194 12.5118 39.9194C11.6555 39.9194 10.9613 40.6136 10.9613 41.4699C10.9613 42.3262 11.6555 43.0203 12.5118 43.0203Z"
                                        fill="#3758F9" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M22.5038 43.0203C23.3601 43.0203 24.0543 42.3262 24.0543 41.4699C24.0543 40.6136 23.3601 39.9194 22.5038 39.9194C21.6475 39.9194 20.9534 40.6136 20.9534 41.4699C20.9534 42.3262 21.6475 43.0203 22.5038 43.0203Z"
                                        fill="#3758F9" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M32.4958 43.0203C33.3521 43.0203 34.0463 42.3262 34.0463 41.4699C34.0463 40.6136 33.3521 39.9194 32.4958 39.9194C31.6395 39.9194 30.9454 40.6136 30.9454 41.4699C30.9454 42.3262 31.6395 43.0203 32.4958 43.0203Z"
                                        fill="#3758F9" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M42.4875 43.0203C43.3438 43.0203 44.038 42.3262 44.038 41.4699C44.038 40.6136 43.3438 39.9194 42.4875 39.9194C41.6312 39.9194 40.9371 40.6136 40.9371 41.4699C40.9371 42.3262 41.6312 43.0203 42.4875 43.0203Z"
                                        fill="#3758F9" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M52.4795 43.0203C53.3358 43.0203 54.03 42.3262 54.03 41.4699C54.03 40.6136 53.3358 39.9194 52.4795 39.9194C51.6233 39.9194 50.9291 40.6136 50.9291 41.4699C50.9291 42.3262 51.6233 43.0203 52.4795 43.0203Z"
                                        fill="#3758F9" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M2.52045 53.0001C3.37674 53.0001 4.0709 52.3059 4.0709 51.4496C4.0709 50.5933 3.37674 49.8992 2.52045 49.8992C1.66416 49.8992 0.970001 50.5933 0.970001 51.4496C0.970001 52.3059 1.66416 53.0001 2.52045 53.0001Z"
                                        fill="#3758F9" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12.5118 53.0001C13.3681 53.0001 14.0622 52.3059 14.0622 51.4496C14.0622 50.5933 13.3681 49.8992 12.5118 49.8992C11.6555 49.8992 10.9613 50.5933 10.9613 51.4496C10.9613 52.3059 11.6555 53.0001 12.5118 53.0001Z"
                                        fill="#3758F9" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M22.5038 53.0001C23.3601 53.0001 24.0543 52.3059 24.0543 51.4496C24.0543 50.5933 23.3601 49.8992 22.5038 49.8992C21.6475 49.8992 20.9534 50.5933 20.9534 51.4496C20.9534 52.3059 21.6475 53.0001 22.5038 53.0001Z"
                                        fill="#3758F9" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M32.4958 53.0001C33.3521 53.0001 34.0463 52.3059 34.0463 51.4496C34.0463 50.5933 33.3521 49.8992 32.4958 49.8992C31.6395 49.8992 30.9454 50.5933 30.9454 51.4496C30.9454 52.3059 31.6395 53.0001 32.4958 53.0001Z"
                                        fill="#3758F9" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M42.4875 53.0001C43.3438 53.0001 44.038 52.3059 44.038 51.4496C44.038 50.5933 43.3438 49.8992 42.4875 49.8992C41.6312 49.8992 40.9371 50.5933 40.9371 51.4496C40.9371 52.3059 41.6312 53.0001 42.4875 53.0001Z"
                                        fill="#3758F9" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M52.4795 53.0001C53.3358 53.0001 54.03 52.3059 54.03 51.4496C54.03 50.5933 53.3358 49.8992 52.4795 49.8992C51.6233 49.8992 50.9291 50.5933 50.9291 51.4496C50.9291 52.3059 51.6233 53.0001 52.4795 53.0001Z"
                                        fill="#3758F9" />
                                </svg>
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
                <div class="w-full px-4 sm:w-1/2 lg:w-1/4 xl:w-1/4">
                    <div
                        class="group mb-8 rounded-xl bg-white px-5 pb-10 pt-12 shadow-testimonial dark:bg-dark dark:shadow-none">
                        <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]">
                            <img src="{{ asset('landing/assets/images/developers/rizki.jpg') }} " alt="team image"
                                class="h-[120px] w-[120px] rounded-full" />
                            <span
                                class="absolute bottom-0 left-0 -z-10 h-10 w-10 rounded-full bg-secondary opacity-0 transition-all group-hover:opacity-100"></span>
                            <span class="absolute right-0 top-0 -z-10 opacity-0 transition-all group-hover:opacity-100">
                                <svg width="45" height="53" viewBox="0 0 45 53" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M2.54166 3.1009C3.39795 3.1009 4.09211 2.40674 4.09211 1.55045C4.09211 0.69416 3.39795 0 2.54166 0C1.68537 0 0.991211 0.69416 0.991211 1.55045C0.991211 2.40674 1.68537 3.1009 2.54166 3.1009Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12.5338 3.1009C13.3901 3.1009 14.0843 2.40674 14.0843 1.55045C14.0843 0.69416 13.3901 0 12.5338 0C11.6776 0 10.9834 0.69416 10.9834 1.55045C10.9834 2.40674 11.6776 3.1009 12.5338 3.1009Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M22.526 3.1009C23.3823 3.1009 24.0765 2.40674 24.0765 1.55045C24.0765 0.69416 23.3823 0 22.526 0C21.6697 0 20.9756 0.69416 20.9756 1.55045C20.9756 2.40674 21.6697 3.1009 22.526 3.1009Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M32.5177 3.1009C33.374 3.1009 34.0682 2.40674 34.0682 1.55045C34.0682 0.69416 33.374 0 32.5177 0C31.6614 0 30.9673 0.69416 30.9673 1.55045C30.9673 2.40674 31.6614 3.1009 32.5177 3.1009Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M42.5094 3.1009C43.3657 3.1009 44.0599 2.40674 44.0599 1.55045C44.0599 0.69416 43.3657 0 42.5094 0C41.6531 0 40.959 0.69416 40.959 1.55045C40.959 2.40674 41.6531 3.1009 42.5094 3.1009Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12.5338 13.0804C13.3901 13.0804 14.0843 12.3862 14.0843 11.5299C14.0843 10.6737 13.3901 9.97949 12.5338 9.97949C11.6776 9.97949 10.9834 10.6737 10.9834 11.5299C10.9834 12.3862 11.6776 13.0804 12.5338 13.0804Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M22.526 13.0804C23.3823 13.0804 24.0765 12.3862 24.0765 11.5299C24.0765 10.6737 23.3823 9.97949 22.526 9.97949C21.6697 9.97949 20.9756 10.6737 20.9756 11.5299C20.9756 12.3862 21.6697 13.0804 22.526 13.0804Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M32.5177 13.0804C33.374 13.0804 34.0682 12.3862 34.0682 11.5299C34.0682 10.6737 33.374 9.97949 32.5177 9.97949C31.6614 9.97949 30.9673 10.6737 30.9673 11.5299C30.9673 12.3862 31.6614 13.0804 32.5177 13.0804Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M42.5094 13.0804C43.3657 13.0804 44.0599 12.3862 44.0599 11.5299C44.0599 10.6737 43.3657 9.97949 42.5094 9.97949C41.6531 9.97949 40.959 10.6737 40.959 11.5299C40.959 12.3862 41.6531 13.0804 42.5094 13.0804Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M22.526 23.0604C23.3823 23.0604 24.0765 22.3662 24.0765 21.5099C24.0765 20.6536 23.3823 19.9595 22.526 19.9595C21.6697 19.9595 20.9756 20.6536 20.9756 21.5099C20.9756 22.3662 21.6697 23.0604 22.526 23.0604Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M32.5177 23.0604C33.374 23.0604 34.0682 22.3662 34.0682 21.5099C34.0682 20.6536 33.374 19.9595 32.5177 19.9595C31.6614 19.9595 30.9673 20.6536 30.9673 21.5099C30.9673 22.3662 31.6614 23.0604 32.5177 23.0604Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M42.5094 23.0604C43.3657 23.0604 44.0599 22.3662 44.0599 21.5099C44.0599 20.6536 43.3657 19.9595 42.5094 19.9595C41.6531 19.9595 40.959 20.6536 40.959 21.5099C40.959 22.3662 41.6531 23.0604 42.5094 23.0604Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M32.5177 33.0404C33.374 33.0404 34.0682 32.3462 34.0682 31.4899C34.0682 30.6336 33.374 29.9395 32.5177 29.9395C31.6614 29.9395 30.9673 30.6336 30.9673 31.4899C30.9673 32.3462 31.6614 33.0404 32.5177 33.0404Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M42.5094 33.0404C43.3657 33.0404 44.0599 32.3462 44.0599 31.4899C44.0599 30.6336 43.3657 29.9395 42.5094 29.9395C41.6531 29.9395 40.959 30.6336 40.959 31.4899C40.959 32.3462 41.6531 33.0404 42.5094 33.0404Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M32.5177 43.0203C33.374 43.0203 34.0682 42.3262 34.0682 41.4699C34.0682 40.6136 33.374 39.9194 32.5177 39.9194C31.6614 39.9194 30.9673 40.6136 30.9673 41.4699C30.9673 42.3262 31.6614 43.0203 32.5177 43.0203Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M42.5094 43.0203C43.3657 43.0203 44.0599 42.3262 44.0599 41.4699C44.0599 40.6136 43.3657 39.9194 42.5094 39.9194C41.6531 39.9194 40.959 40.6136 40.959 41.4699C40.959 42.3262 41.6531 43.0203 42.5094 43.0203Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M42.5094 52.9998C43.3657 52.9998 44.0599 52.3057 44.0599 51.4494C44.0599 50.5931 43.3657 49.8989 42.5094 49.8989C41.6531 49.8989 40.959 50.5931 40.959 51.4494C40.959 52.3057 41.6531 52.9998 42.5094 52.9998Z"
                                        fill="#3056D3" />
                                </svg>
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
                                <a href="#" class="text-dark-6 hover:text-primary">
                                    <i class="fa-brands fa-linkedin-in"></i>
                                </a>
                                <a href="#" class="text-dark-6 hover:text-primary">
                                    <i class="fas fa-globe"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full px-4 sm:w-1/2 lg:w-1/4 xl:w-1/4">
                    <div
                        class="group mb-8 rounded-xl bg-white px-5 pb-10 pt-12 shadow-testimonial dark:bg-dark dark:shadow-none">
                        <div class="relative z-10 mx-auto mb-5 h-[120px] w-[120px]">
                            <img src="{{ asset('landing/assets/images/developers/dimas.png') }} " alt="team image"
                                class="h-[120px] w-[120px] rounded-full" />
                            <span
                                class="absolute bottom-0 left-0 -z-10 h-10 w-10 rounded-full bg-secondary opacity-0 transition-all group-hover:opacity-100"></span>
                            <span class="absolute right-0 top-0 -z-10 opacity-0 transition-all group-hover:opacity-100">
                                <svg width="45" height="53" viewBox="0 0 45 53" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M2.54166 3.1009C3.39795 3.1009 4.09211 2.40674 4.09211 1.55045C4.09211 0.69416 3.39795 0 2.54166 0C1.68537 0 0.991211 0.69416 0.991211 1.55045C0.991211 2.40674 1.68537 3.1009 2.54166 3.1009Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12.5338 3.1009C13.3901 3.1009 14.0843 2.40674 14.0843 1.55045C14.0843 0.69416 13.3901 0 12.5338 0C11.6776 0 10.9834 0.69416 10.9834 1.55045C10.9834 2.40674 11.6776 3.1009 12.5338 3.1009Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M22.526 3.1009C23.3823 3.1009 24.0765 2.40674 24.0765 1.55045C24.0765 0.69416 23.3823 0 22.526 0C21.6697 0 20.9756 0.69416 20.9756 1.55045C20.9756 2.40674 21.6697 3.1009 22.526 3.1009Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M32.5177 3.1009C33.374 3.1009 34.0682 2.40674 34.0682 1.55045C34.0682 0.69416 33.374 0 32.5177 0C31.6614 0 30.9673 0.69416 30.9673 1.55045C30.9673 2.40674 31.6614 3.1009 32.5177 3.1009Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M42.5094 3.1009C43.3657 3.1009 44.0599 2.40674 44.0599 1.55045C44.0599 0.69416 43.3657 0 42.5094 0C41.6531 0 40.959 0.69416 40.959 1.55045C40.959 2.40674 41.6531 3.1009 42.5094 3.1009Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12.5338 13.0804C13.3901 13.0804 14.0843 12.3862 14.0843 11.5299C14.0843 10.6737 13.3901 9.97949 12.5338 9.97949C11.6776 9.97949 10.9834 10.6737 10.9834 11.5299C10.9834 12.3862 11.6776 13.0804 12.5338 13.0804Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M22.526 13.0804C23.3823 13.0804 24.0765 12.3862 24.0765 11.5299C24.0765 10.6737 23.3823 9.97949 22.526 9.97949C21.6697 9.97949 20.9756 10.6737 20.9756 11.5299C20.9756 12.3862 21.6697 13.0804 22.526 13.0804Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M32.5177 13.0804C33.374 13.0804 34.0682 12.3862 34.0682 11.5299C34.0682 10.6737 33.374 9.97949 32.5177 9.97949C31.6614 9.97949 30.9673 10.6737 30.9673 11.5299C30.9673 12.3862 31.6614 13.0804 32.5177 13.0804Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M42.5094 13.0804C43.3657 13.0804 44.0599 12.3862 44.0599 11.5299C44.0599 10.6737 43.3657 9.97949 42.5094 9.97949C41.6531 9.97949 40.959 10.6737 40.959 11.5299C40.959 12.3862 41.6531 13.0804 42.5094 13.0804Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M22.526 23.0604C23.3823 23.0604 24.0765 22.3662 24.0765 21.5099C24.0765 20.6536 23.3823 19.9595 22.526 19.9595C21.6697 19.9595 20.9756 20.6536 20.9756 21.5099C20.9756 22.3662 21.6697 23.0604 22.526 23.0604Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M32.5177 23.0604C33.374 23.0604 34.0682 22.3662 34.0682 21.5099C34.0682 20.6536 33.374 19.9595 32.5177 19.9595C31.6614 19.9595 30.9673 20.6536 30.9673 21.5099C30.9673 22.3662 31.6614 23.0604 32.5177 23.0604Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M42.5094 23.0604C43.3657 23.0604 44.0599 22.3662 44.0599 21.5099C44.0599 20.6536 43.3657 19.9595 42.5094 19.9595C41.6531 19.9595 40.959 20.6536 40.959 21.5099C40.959 22.3662 41.6531 23.0604 42.5094 23.0604Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M32.5177 33.0404C33.374 33.0404 34.0682 32.3462 34.0682 31.4899C34.0682 30.6336 33.374 29.9395 32.5177 29.9395C31.6614 29.9395 30.9673 30.6336 30.9673 31.4899C30.9673 32.3462 31.6614 33.0404 32.5177 33.0404Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M42.5094 33.0404C43.3657 33.0404 44.0599 32.3462 44.0599 31.4899C44.0599 30.6336 43.3657 29.9395 42.5094 29.9395C41.6531 29.9395 40.959 30.6336 40.959 31.4899C40.959 32.3462 41.6531 33.0404 42.5094 33.0404Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M32.5177 43.0203C33.374 43.0203 34.0682 42.3262 34.0682 41.4699C34.0682 40.6136 33.374 39.9194 32.5177 39.9194C31.6614 39.9194 30.9673 40.6136 30.9673 41.4699C30.9673 42.3262 31.6614 43.0203 32.5177 43.0203Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M42.5094 43.0203C43.3657 43.0203 44.0599 42.3262 44.0599 41.4699C44.0599 40.6136 43.3657 39.9194 42.5094 39.9194C41.6531 39.9194 40.959 40.6136 40.959 41.4699C40.959 42.3262 41.6531 43.0203 42.5094 43.0203Z"
                                        fill="#3056D3" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M42.5094 52.9998C43.3657 52.9998 44.0599 52.3057 44.0599 51.4494C44.0599 50.5931 43.3657 49.8989 42.5094 49.8989C41.6531 49.8989 40.959 50.5931 40.959 51.4494C40.959 52.3057 41.6531 52.9998 42.5094 52.9998Z"
                                        fill="#3056D3" />
                                </svg>
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
                                <a href="#" class="text-dark-6 hover:text-primary">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                                <a href="#" class="text-dark-6 hover:text-primary">
                                    <i class="fa-brands fa-github"></i>
                                </a>
                                <a href="https://www.instagram.com/dp_pangestu_dimas" target="_blank"
                                    class="text-dark-6 hover:text-primary">
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
                                <a href="#" class="text-dark-6 hover:text-primary">
                                    <i class="fas fa-globe"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.getElementById('shareButton').addEventListener('click', () => {
            if (navigator.share) {
                navigator.share({
                        title: document.title,
                        text: document.title,
                        url: window.location.href
                    })
                    .then(() => console.log('Berhasil membagikan'))
                    .catch((error) => console.error('Error in sharing:', error));
            } else {
                alert('Maaf, perangkat Anda tidak mendukung fitur berbagi.');
            }
        });
    </script>
@endsection
