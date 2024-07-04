<script src="{{ asset('landing/assets/js/swiper-bundle.min.js') }}"></script>
<!-- <script src="<?= base_url() ?>landing/assets/js/main.js"></script> -->
<script>
    ! function() {
        "use strict";
        window.onscroll = function() {
            let e = document.querySelector(".ud-header"),
                t = e.offsetTop,
                s = document.querySelectorAll(".header-logo");
            window.pageYOffset > t ? e.classList.add("sticky") : e.classList.remove("sticky"), s.length && (e
                    .classList.contains("sticky") ? document.querySelector(".header-logo").src =
                    "{{ asset('landing/assets/images/logo/wci-long.png') }}" : document.querySelector(
                        ".header-logo").src = "{{ asset('landing/assets/images/logo/wci-long-white.png') }}"),
                document.documentElement.classList.contains("dark") && s.length && e.classList.contains("sticky") &&
                (document.querySelector(".header-logo").src =
                    "{{ asset('landing/assets/images/logo/wci-long-white.png') }}");
            let l = document.querySelector(".back-to-top");
            document.body.scrollTop > 50 || document.documentElement.scrollTop > 50 ? l.style.display = "flex" : l
                .style.display = "none"
        };
        let e = document.querySelector("#navbarToggler"),
            t = document.querySelector("#navbarCollapse");
        e.addEventListener("click", () => {
            e.classList.toggle("navbarTogglerActive"), t.classList.toggle("hidden")
        }), document.querySelectorAll("#navbarCollapse ul li:not(.submenu-item) a").forEach(s => s.addEventListener(
            "click", () => {
                e.classList.remove("navbarTogglerActive"), t.classList.add("hidden")
            }));
        let s = document.querySelectorAll(".submenu-item");
        s.forEach(e => {
            e.querySelector("a").addEventListener("click", () => {
                e.querySelector(".submenu").classList.toggle("hidden")
            })
        });
        let l = document.querySelectorAll(".single-faq");
        l.forEach(e => {
            e.querySelector(".faq-btn").addEventListener("click", () => {
                e.querySelector(".icon").classList.toggle("rotate-180"), e.querySelector(".faq-content")
                    .classList.toggle("hidden")
            })
        }), new WOW().init(), Math.easeInOutQuad = function(e, t, s, l) {
            return (e /= l / 2) < 1 ? s / 2 * e * e + t : -s / 2 * (--e * (e - 2) - 1) + t
        }, document.querySelector(".back-to-top").onclick = () => {
            ! function e(t, s = 0, l = 500) {
                let a = t.scrollTop,
                    i = s - a,
                    n = 0,
                    r = () => {
                        n += 20;
                        let e = Math.easeInOutQuad(n, a, i, l);
                        t.scrollTop = e, n < l && setTimeout(r, 20)
                    };
                r()
            }(document.documentElement)
        };
        let a = document.getElementById("themeSwitcher"),
            i = localStorage.getItem("theme"),
            n = window.matchMedia("(prefers-color0scheme: dark)").matches,
            r = () => {
                if (document.documentElement.classList.contains("dark")) {
                    document.documentElement.classList.remove("dark"), localStorage.setItem("theme", "light");
                    return
                }
                document.documentElement.classList.add("dark"), localStorage.setItem("theme", "dark")
            };
        a.addEventListener("click", () => {
            r()
        }), (() => {
            if ("dark" === i || !i && n) {
                document.documentElement.classList.add("dark");
                return
            }
        })()
    }();
    const testimonialSwiper = new Swiper(".testimonial-carousel", {
            slidesPerView: "auto",
            spaceBetween: 30,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev"
            },
            autoplay: {
                delay: 3500,
                disableOnInteraction: !1
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 30
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 30
                },
                1280: {
                    slidesPerView: 3,
                    spaceBetween: 30
                }
            }
        }),
        teknologiSwiper = new Swiper(".teknologi-digunakan", {
            slidesPerView: "auto",
            spaceBetween: 30,
            autoplay: {
                delay: 1500,
                disableOnInteraction: !1
            },
            breakpoints: {
                "@0.00": {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                "@0.75": {
                    slidesPerView: 3,
                    spaceBetween: 20
                },
                "@1.00": {
                    slidesPerView: 3,
                    spaceBetween: 40
                },
                "@1.50": {
                    slidesPerView: 5,
                    spaceBetween: 50
                }
            }
        }),
        teamSwiper = new Swiper(".team-developer", {
            slidesPerView: "auto",
            spaceBetween: 30,
            autoplay: {
                delay: 1500,
                disableOnInteraction: !1
            },
            breakpoints: {
                "@0.00": {
                    slidesPerView: 5,
                    spaceBetween: 10
                },
                "@0.75": {
                    slidesPerView: 5,
                    spaceBetween: 20
                },
                "@1.00": {
                    slidesPerView: 7,
                    spaceBetween: 40
                },
                "@1.50": {
                    slidesPerView: 7,
                    spaceBetween: 50
                }
            }
        }),
        klienSwipper = new Swiper(".klien-webcrafser", {
            effect: "coverflow",
            grabCursor: !0,
            centeredSlides: !0,
            slidesPerView: "auto",
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: !1
            },
            autoplay: {
                delay: 4e3,
                disableOnInteraction: !1
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev"
            },
            breakpoints: {
                "@0.00": {
                    slidesPerView: 1,
                    spaceBetween: 10
                },
                "@0.75": {
                    slidesPerView: 1,
                    spaceBetween: 20
                },
                "@1.00": {
                    slidesPerView: 2,
                    spaceBetween: 40
                },
                "@1.50": {
                    slidesPerView: 2,
                    spaceBetween: 50
                }
            }
        });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var e = document.querySelectorAll(".lazy"),
            n = new IntersectionObserver(function(e) {
                e.forEach(function(e) {
                    if (e.isIntersecting) {
                        var t = e.target;
                        t.src = t.dataset.src, t.classList.remove("lazy"), n.unobserve(t)
                    }
                })
            });
        e.forEach(function(e) {
            n.observe(e)
        })
    });
</script>
