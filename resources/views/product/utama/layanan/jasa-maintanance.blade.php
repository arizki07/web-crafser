@extends('layouts.main')
@section('webcrafser')
    <style>
        .img-bg {
            background-image: url('{{ asset('landing/assets/images/banner/banner-4.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            position: relative;
            z-index: 1;
        }

        .overlay {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background-color: black;
            /* Warna hitam */
            opacity: 0.7;
            /* Opacity 0.5 */
        }
    </style>

    <div id="home" class="relative overflow-hidden pt-[120px] md:pt-[130px] lg:pt-[160px] img-bg">
        <div class="overlay"></div>
        <div class="container relative z-1">
            <div class="-mx-4 flex flex-wrap items-center">
                <div class="w-full px-4">
                    <div class="hero-content wow fadeInUp mx-auto max-w-[780px] text-center" data-wow-delay=".2s">
                        <h1
                            class="mb-6 text-3xl font-bold leading-snug text-white sm:text-4xl sm:leading-snug lg:text-5xl lg:leading-[1.2]">
                            {{ $judul }}
                        </h1>
                        <p class="mx-auto mb-9 max-w-[600px] text-base font-medium text-white sm:text-lg sm:leading-[1.44]">
                            <?= $judul ?>
                        </p>
                        <ul class="mb-10 flex flex-wrap items-center justify-center gap-5">
                            <li>
                                <a href="{{ route('contact') }}"
                                    class="inline-flex items-center justify-center rounded-md bg-white px-7 py-[14px] text-center text-base font-medium text-dark shadow-1 transition duration-300 ease-in-out hover:bg-gray-2 hover:text-body-color">
                                    Hubungi
                                </a>
                            </li>
                            <li>
                                <a href="#jasa"
                                    class="flex items-center gap-4 rounded-md bg-white/[0.12] px-6 py-[14px] text-base font-medium text-white transition duration-300 ease-in-out hover:bg-white hover:text-dark">
                                    <i class="fas fa-chevron-down"></i>
                                    Lihat
                                </a>
                            </li>
                        </ul>
                        <div class="mb-12" style="margin-top: 80px;">

                            <p class="mb-4 text-center text-base font-medium text-white">Teknologi Yang Kami Gunakan</p>

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
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="jasa" class="pb-10 pt-20 dark:bg-dark lg:pb-20 lg:pt-[120px]"
        style="padding-left: 20px; padding-right: 20px;">
        <div class="container">
            <div class="flex flex-wrap justify-center -mx-4">
                <div class="flex flex-wrap -mx-4">
                    <div class="w-full px-4 lg:w-8/12">
                        <div>
                            <h2 class="wow fadeInUp mb-8 text-2xl font-bold text-dark dark:text-white sm:text-3xl md:text-[35px] md:leading-[1.28]"
                                data-wow-delay=".1s">
                                Layanan {{ $judul }}
                            </h2>
                            <p class="mb-6 text-base wow fadeInUp text-body-color dark:text-dark-6" data-wow-delay=".1s">
                                <?= $paragraf1 ?>
                            </p>
                            <p class="mb-8 text-base wow fadeInUp text-body-color dark:text-dark-6" data-wow-delay=".1s">
                                <?= $paragraf2 ?>
                            </p>
                            <h3 class="wow fadeInUp mb-6 text-2xl font-bold text-dark dark:text-white sm:text-[28px] sm:leading-[40px]"
                                data-wow-delay=".1s">
                                <?= $title ?>
                            </h3>
                            <p class="mb-10 text-base wow fadeInUp text-body-color dark:text-dark-6" data-wow-delay=".1s">
                                <?= $paragraf3 ?>
                            </p>
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
                                        “<?= $quotes ?>”
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
                                                <linearGradient id="paint0_linear_2014_9017" x1="0.409163"
                                                    y1="51.5654" x2="151.162" y2="52.3482"
                                                    gradientUnits="userSpaceOnUse">
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
                                Jangan ragu untuk menghubungi kami sekarang untuk mendapatkan konsultasi gratis. Tim kami
                                yang ramah dan berpengetahuan luas akan dengan senang hati membantu Anda menjelajahi potensi
                                dan kemungkinan yang dapat dihadirkan oleh Web Crafser. Dapatkan penawaran spesial untuk
                                proyek Anda dan bergabunglah dengan para pelanggan kami yang puas yang telah merasakan
                                kelebihan memiliki website yang dirancang dan dikembangkan dengan penuh dedikasi oleh Web
                                Crafser.
                            </p>

                            <div class="flex flex-wrap items-center mb-12 -mx-4">
                                <div class="w-full px-4 md:w-1/2">
                                    <div class="flex flex-wrap items-center gap-3 mb-8 wow fadeInUp md:mb-0"
                                        data-wow-delay=".1s">
                                        <a href="https://api.whatsapp.com/send?phone=6281312211348&text=Saya%20ingin%20konsultasi%2C%20apakah%20ini%20dengan%20Web%20Crafster%20Service%20Cirebon%3F"
                                            target="_blank"
                                            class="block rounded-md bg-primary/[0.08] px-[14px] py-[5px] text-base text-dark hover:bg-primary hover:text-white dark:text-white">
                                            <i class="fa-brands fa-whatsapp"></i>
                                        </a>
                                        <a href="https://instagram.com/web.crafser" target="_blank"
                                            class="block rounded-md bg-primary/[0.08] px-[14px] py-[5px] text-base text-dark hover:bg-primary hover:text-white dark:text-white">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                        {{-- <a href="<?= base_url('/') ?>"
                                            class="block rounded-md bg-primary/[0.08] px-[14px] py-[5px] text-base text-dark hover:bg-primary hover:text-white dark:text-white">
                                            <i class="fas fa-globe"></i>
                                        </a> --}}
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
                                            Share Postingan Web Crafser &nbsp; :
                                        </span>
                                        <div class="flex items-center gap-[10px]">
                                            <a href="javascript:void(0)" id="shareButton">
                                                <i class="fas fa-share-nodes"
                                                    style="font-size: 25px; background: linear-gradient(135deg, #3498db, #ff8c00, #9b59b6); -webkit-background-clip: text; color: transparent;"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full px-4 lg:w-4/12">
                        <div>
                            <div class="wow fadeInUp relative mb-12 overflow-hidden px-11 py-[60px] text-center lg:px-8"
                                data-wow-delay=".1s"
                                style="background: linear-gradient(to bottom, #3498db, #ffffff, #ff69b4);
					border-radius: 25px;">

                                <img src="{{ asset('landing/assets/images/logo/wci-height.png') }} " alt="">

                                <div>
                                    <span class="absolute top-0 right-0">
                                        <svg width="46" height="46" viewbox="0 0 46 46" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="1.39737" cy="44.6026" r="1.39737"
                                                transform="rotate(-90 1.39737 44.6026)" fill="white"
                                                fill-opacity="0.44" />
                                            <circle cx="1.39737" cy="7.9913" r="1.39737"
                                                transform="rotate(-90 1.39737 7.9913)" fill="white"
                                                fill-opacity="0.44" />
                                            <circle cx="13.6943" cy="44.6026" r="1.39737"
                                                transform="rotate(-90 13.6943 44.6026)" fill="white"
                                                fill-opacity="0.44" />
                                            <circle cx="13.6943" cy="7.9913" r="1.39737"
                                                transform="rotate(-90 13.6943 7.9913)" fill="white"
                                                fill-opacity="0.44" />
                                            <circle cx="25.9911" cy="44.6026" r="1.39737"
                                                transform="rotate(-90 25.9911 44.6026)" fill="white"
                                                fill-opacity="0.44" />
                                            <circle cx="25.9911" cy="7.9913" r="1.39737"
                                                transform="rotate(-90 25.9911 7.9913)" fill="white"
                                                fill-opacity="0.44" />
                                            <circle cx="38.288" cy="44.6026" r="1.39737"
                                                transform="rotate(-90 38.288 44.6026)" fill="white"
                                                fill-opacity="0.44" />
                                            <circle cx="38.288" cy="7.9913" r="1.39737"
                                                transform="rotate(-90 38.288 7.9913)" fill="white"
                                                fill-opacity="0.44" />
                                            <circle cx="1.39737" cy="32.3058" r="1.39737"
                                                transform="rotate(-90 1.39737 32.3058)" fill="white"
                                                fill-opacity="0.44" />
                                            <circle cx="13.6943" cy="32.3058" r="1.39737"
                                                transform="rotate(-90 13.6943 32.3058)" fill="white"
                                                fill-opacity="0.44" />
                                            <circle cx="25.9911" cy="32.3058" r="1.39737"
                                                transform="rotate(-90 25.9911 32.3058)" fill="white"
                                                fill-opacity="0.44" />
                                            <circle cx="38.288" cy="32.3058" r="1.39737"
                                                transform="rotate(-90 38.288 32.3058)" fill="white"
                                                fill-opacity="0.44" />
                                            <circle cx="1.39737" cy="20.0086" r="1.39737"
                                                transform="rotate(-90 1.39737 20.0086)" fill="white"
                                                fill-opacity="0.44" />
                                            <circle cx="13.6943" cy="20.0086" r="1.39737"
                                                transform="rotate(-90 13.6943 20.0086)" fill="white"
                                                fill-opacity="0.44" />
                                            <circle cx="25.9911" cy="20.0086" r="1.39737"
                                                transform="rotate(-90 25.9911 20.0086)" fill="white"
                                                fill-opacity="0.44" />
                                            <circle cx="38.288" cy="20.0086" r="1.39737"
                                                transform="rotate(-90 38.288 20.0086)" fill="white"
                                                fill-opacity="0.44" />
                                        </svg>
                                    </span>
                                    <span class="absolute bottom-0 left-0">
                                        <svg width="46" height="46" viewbox="0 0 46 46" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="1.39737" cy="44.6026" r="1.39737"
                                                transform="rotate(-90 1.39737 44.6026)" fill="white"
                                                fill-opacity="0.44" />
                                            <circle cx="1.39737" cy="7.9913" r="1.39737"
                                                transform="rotate(-90 1.39737 7.9913)" fill="white"
                                                fill-opacity="0.44" />
                                            <circle cx="13.6943" cy="44.6026" r="1.39737"
                                                transform="rotate(-90 13.6943 44.6026)" fill="white"
                                                fill-opacity="0.44" />
                                            <circle cx="13.6943" cy="7.9913" r="1.39737"
                                                transform="rotate(-90 13.6943 7.9913)" fill="white"
                                                fill-opacity="0.44" />
                                            <circle cx="25.9911" cy="44.6026" r="1.39737"
                                                transform="rotate(-90 25.9911 44.6026)" fill="white"
                                                fill-opacity="0.44" />
                                            <circle cx="25.9911" cy="7.9913" r="1.39737"
                                                transform="rotate(-90 25.9911 7.9913)" fill="white"
                                                fill-opacity="0.44" />
                                            <circle cx="38.288" cy="44.6026" r="1.39737"
                                                transform="rotate(-90 38.288 44.6026)" fill="white"
                                                fill-opacity="0.44" />
                                            <circle cx="38.288" cy="7.9913" r="1.39737"
                                                transform="rotate(-90 38.288 7.9913)" fill="white"
                                                fill-opacity="0.44" />
                                            <circle cx="1.39737" cy="32.3058" r="1.39737"
                                                transform="rotate(-90 1.39737 32.3058)" fill="white"
                                                fill-opacity="0.44" />
                                            <circle cx="13.6943" cy="32.3058" r="1.39737"
                                                transform="rotate(-90 13.6943 32.3058)" fill="white"
                                                fill-opacity="0.44" />
                                            <circle cx="25.9911" cy="32.3058" r="1.39737"
                                                transform="rotate(-90 25.9911 32.3058)" fill="white"
                                                fill-opacity="0.44" />
                                            <circle cx="38.288" cy="32.3058" r="1.39737"
                                                transform="rotate(-90 38.288 32.3058)" fill="white"
                                                fill-opacity="0.44" />
                                            <circle cx="1.39737" cy="20.0086" r="1.39737"
                                                transform="rotate(-90 1.39737 20.0086)" fill="white"
                                                fill-opacity="0.44" />
                                            <circle cx="13.6943" cy="20.0086" r="1.39737"
                                                transform="rotate(-90 13.6943 20.0086)" fill="white"
                                                fill-opacity="0.44" />
                                            <circle cx="25.9911" cy="20.0086" r="1.39737"
                                                transform="rotate(-90 25.9911 20.0086)" fill="white"
                                                fill-opacity="0.44" />
                                            <circle cx="38.288" cy="20.0086" r="1.39737"
                                                transform="rotate(-90 38.288 20.0086)" fill="white"
                                                fill-opacity="0.44" />
                                        </svg>
                                    </span>
                                </div>
                            </div>

                            <div class="flex flex-wrap mb-8 -mx-4">
                                <div class="w-full px-4">
                                    <h2 class="wow fadeInUp relative pb-5 text-2xl font-semibold text-dark dark:text-white sm:text-[28px]"
                                        data-wow-delay=".1s">
                                        Informasi Lainnya
                                    </h2>
                                    <span class="mb-10 inline-block h-[2px] w-20 bg-primary"></span>
                                </div>

                                <div class="w-full px-4 md:w-1/2 lg:w-full">
                                    <div class="flex items-center w-full pb-5 mb-5 border-b wow fadeInUp border-stroke dark:border-dark-3"
                                        data-wow-delay=".1s">
                                        <div class="mr-5 h-20 w-full max-w-[80px] overflow-hidden rounded-full"
                                            style="background: linear-gradient(to bottom, #3498db, #ffffff, #ff69b4);">
                                            <img src="{{ asset('landing/assets/images/logo/wci-height.png') }}"
                                                alt="image" class="w-full" />
                                        </div>
                                        <div class="w-full">
                                            <h4>
                                                <a href="{{ route('jasa-website') }}"
                                                    class="inline-block mb-1 text-lg font-medium leading-snug text-dark hover:text-primary dark:text-dark-6 dark:hover:text-primary lg:text-base xl:text-lg">
                                                    Layanan Jasa Pembuatan Website... </a>
                                            </h4>
                                            <p class="text-sm text-body-color dark:text-dark-6"> Web Crafter Service </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full px-4 md:w-1/2 lg:w-full">
                                    <div class="flex items-center w-full pb-5 mb-5 border-b wow fadeInUp border-stroke dark:border-dark-3"
                                        data-wow-delay=".1s
						">
                                        <div class="mr-5 h-20 w-full max-w-[80px] overflow-hidden rounded-full"
                                            style="background: linear-gradient(to bottom, #3498db, #ffffff, #ff69b4);">
                                            <img src="{{ asset('landing/assets/images/logo/wci-height.png') }}"
                                                alt="image" class="w-full" />
                                        </div>
                                        <div class="w-full">
                                            <h4>
                                                <a href="{{ route('jasa.seo') }}"
                                                    class="inline-block mb-1 text-lg font-medium leading-snug text-dark hover:text-primary dark:text-dark-6 dark:hover:text-primary lg:text-base xl:text-lg">
                                                    Layanan Jasa SEO (Search Engine Optimization)... </a>
                                            </h4>
                                            <p class="text-sm text-body-color dark:text-dark-6"> Web Crafter Service </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full px-4 md:w-1/2 lg:w-full">
                                    <div class="flex items-center w-full pb-5 mb-5 border-b wow fadeInUp border-stroke dark:border-dark-3"
                                        data-wow-delay=".1s
					">
                                        <div class="mr-5 h-20 w-full max-w-[80px] overflow-hidden rounded-full"
                                            style="background: linear-gradient(to bottom, #3498db, #ffffff, #ff69b4);">
                                            <img src="{{ asset('landing/assets/images/logo/wci-height.png') }}"
                                                alt="image" class="w-full" />
                                        </div>
                                        <div class="w-full">
                                            <h4>
                                                <a href="{{ route('jasa.skripsi') }}"
                                                    class="inline-block mb-1 text-lg font-medium leading-snug text-dark hover:text-primary dark:text-dark-6 dark:hover:text-primary lg:text-base xl:text-lg">
                                                    Layanan Jasa Konsultasi & Pembuatan Skripsi... </a>
                                            </h4>
                                            <p class="text-sm text-body-color dark:text-dark-6"> Web Crafter Service </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full px-4 md:w-1/2 lg:w-full">
                                    <div class="flex items-center w-full pb-5 mb-5 border-0 wow fadeInUp border-stroke dark:border-dark-3 md:border-b lg:border-0"
                                        data-wow-delay=".1s
				">
                                        <div class="mr-5 h-20 w-full max-w-[80px] overflow-hidden rounded-full"
                                            style="background: linear-gradient(to bottom, #3498db, #ffffff, #ff69b4);">
                                            <img src="{{ asset('landing/assets/images/logo/wci-height.png') }}"
                                                alt="image" class="w-full" />
                                        </div>
                                        <div class="w-full">
                                            <h4>
                                                <a href="{{ route('jasa.design') }}"
                                                    class="inline-block mb-1 text-lg font-medium leading-snug text-dark hover:text-primary dark:text-dark-6 dark:hover:text-primary lg:text-base xl:text-lg">
                                                    Layanan Jasa Design Grafis... </a>
                                            </h4>
                                            <p class="text-sm text-body-color dark:text-dark-6"> Web Crafter Service </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full px-4 md:w-1/2 lg:w-full">
                                    <div class="flex items-center w-full pb-5 mb-5 border-0 wow fadeInUp border-stroke dark:border-dark-3 md:border-b lg:border-0"
                                        data-wow-delay=".1s
			">
                                        <div class="mr-5 h-20 w-full max-w-[80px] overflow-hidden rounded-full"
                                            style="background: linear-gradient(to bottom, #3498db, #ffffff, #ff69b4);">
                                            <img src="{{ asset('landing/assets/images/logo/wci-height.png') }}"
                                                alt="image" class="w-full" />
                                        </div>
                                        <div class="w-full">
                                            <h4>
                                                <a href="{{ route('jasa.ui') }}"
                                                    class="inline-block mb-1 text-lg font-medium leading-snug text-dark hover:text-primary dark:text-dark-6 dark:hover:text-primary lg:text-base xl:text-lg">
                                                    Layanan Jasa Design Web UI/UX... </a>
                                            </h4>
                                            <p class="text-sm text-body-color dark:text-dark-6"> Web Crafter Service </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full px-4 md:w-1/2 lg:w-full">
                                    <div class="flex items-center w-full pb-5 mb-5 border-0 wow fadeInUp border-stroke dark:border-dark-3 md:border-b lg:border-0"
                                        data-wow-delay=".1s
		">
                                        <div class="mr-5 h-20 w-full max-w-[80px] overflow-hidden rounded-full"
                                            style="background: linear-gradient(to bottom, #3498db, #ffffff, #ff69b4);">
                                            <img src="{{ asset('landing/assets/images/logo/wci-height.png') }}"
                                                alt="image" class="w-full" />
                                        </div>
                                        <div class="w-full">
                                            <h4>
                                                <a href="{{ route('jasa.maintenance') }}"
                                                    class="inline-block mb-1 text-lg font-medium leading-snug text-dark hover:text-primary dark:text-dark-6 dark:hover:text-primary lg:text-base xl:text-lg">
                                                    Layanan Jasa Maintanance IT/Maintanance Website... </a>
                                            </h4>
                                            <p class="text-sm text-body-color dark:text-dark-6"> Web Crafter Service </p>
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
