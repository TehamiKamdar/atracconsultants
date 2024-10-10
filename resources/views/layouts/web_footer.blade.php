<!-- Footer Start -->
<div class="footer bg-[#000000]">
        <div class="footer-top w-[95vw] mx-auto md:h-[60vh] py-10">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 ">
                <div class="flex flex-col justify-between">
                    <div class="top ">
                        <div class="logo">
                            <img class="w-[200px]" src="{{asset('webassets/newlogo-removebg-preview-BNhagA2w.png')}}" alt="">
                        </div>
                    </div>

                    <div class="mid">
                        <p class="text-white"><span class="text-[#2BB673]">Address: </span>Office # 101, Silver <br>
                            Trade Center, Block 13 A <br> Gulshan-e-Iqbal, Karachi, <br> Karachi City, Sindh 75300</p>
                    </div>

                    <div class="btm">
                        <p class="text-white"><span class="text-[#2BB673]">Timings: </span>Mon-Sat | 10AM-8PM</p>
                    </div>
                </div>

                <div class="text-white md:my-8">
                    <h1 class="text-xl"><span class="border-b-2 border-[#2BB673]">Quick Links</span></h1>
                    <ul class="my-10 space-y-4 cursor-pointer">
                        <li class="flex space-x-3">
                            <p>Lorem</p>
                        </li>
                        <li class="flex space-x-3">
                            <p>Lorem</p>
                        </li>
                        <li class="flex space-x-3">
                            <p>Lorem</p>
                        </li>
                        <li class="flex space-x-3">
                            <p>Lorem</p>
                        </li>
                    </ul>
                </div>
                <div class="text-white md:my-8">
                    <h1 class="text-xl"><span class="border-b-2 border-[#2BB673]">Navigation</span></h1>
                    <ul class="my-10 space-y-4 cursor-pointer">
                        <li>Home</li>
                        <li>About</li>
                        <li>Blog</li>
                        <li>Testimonial</li>
                        <li>Our vission</li>
                    </ul>
                </div>
                <div class="text-white md:my-8">
                    <h1 class="text-xl"><span class="border-b-2 border-[#2BB673]">Follow Us</span></h1>
                    <ul class="my-10 space-y-4 cursor-pointer">
                        <li class="flex space-x-3"><span class="icon text-[#2BB673]"><i
                                    class="fa-brands fa-x-twitter"></i></span>
                            <p>some_link_of_twitter</p>
                        </li>
                        <li class="flex space-x-3"><span class="icon text-[#2BB673]"><i
                                    class="fa-brands fa-facebook"></i></span>
                            <p>some_link_of_facebook</p>
                        </li>
                        <li class="flex space-x-3"><span class="icon text-[#2BB673]"><i
                                    class="fa-brands fa-linkedin-in"></i></span>
                            <p>some_link_of_linkedin</p>
                        </li>
                        <li class="flex space-x-3"><span class="icon text-[#2BB673]"><i
                                    class="fa-brands fa-instagram"></i></span>
                            <p>some_link_of_instagram</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-btm py-6">
            <p class="text-white text-center text-xl px-5 ">2024 <span class="text-[#2BB673]">&copy;</span> All Rights
                Reserved By <span class="text-[#2BB673]">Atrac Consultants</span></p>
        </div>
    </div>



    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {

            $('.slider').slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: false,
                autoplaySpeed: 2000,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            infinite: true,
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });

            $('.slider-country').slick({
                infinite: true,
                slidesToShow: 6,
                slidesToScroll: 1,
                autoplay: false,
                autoplaySpeed: 2000,
                innerHeight: 200,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                            infinite: true,
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    }
                ]
            });

            $('.slider-testimonial').slick({
                infinite: true,
                slidesToShow: 2,
                slidesToScroll: 1,
                autoplay: false,
                autoplaySpeed: 2000,
                innerHeight: 200,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            infinite: true,
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1

                        }
                    }
                ]
            });


        });
    </script>

</body>

</html>
