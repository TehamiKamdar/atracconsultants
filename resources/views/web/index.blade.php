@extends('layouts.web_main')

@section('main-section')

<!-- Hero section start -->
<div class="hero bg-[#2BB673] py-10 md:h-[88vh] flex items-center">
    <div class="w-[87vw] mx-auto">
        <h1 class="text-white text-4xl mb-3">28 June to 10 July</h1>
        <h1 class="text-white md:text-6xl my-3">STUDY ABROAD EXPO 2024</h1>
        <p class="text-white font-light mt-5">Explore the world of opportunities with free entry, individual
            consultation and learn about <br> new scholarships. HYDERABAD - KARACHI - LAHORE - ISLAMABAD -
            RAWALPINDI - SIALKOT - <br> JHELUM - GUJRAT - PESHAWAR - FAISALABAD - MULTAN - BAHAWALPUR - SARGODHA -
            <br> GUJRANWALA
        </p>
        <button class="bg-white text-xl text-[#2BB673] px-6 py-2 rounded-3xl my-3 font-semibold"><span>View details
            </span><i class="fa-solid fa-arrow-right "></i></button>
    </div>
</div>

<!--Choose Countries  -->
<div id="country" class="choose-countries mt-10 md:mt-20">
    <div class="top w-[88vw] mx-auto flex md:flex-row flex-col">
        <div class="top-left md:w-[44vw] w-[100%]">
            <h1 class="text-[#2BB673] font-bold text-3xl md:text-4xl mb-5">Countries</h1>
            <h1 class="font-bold text-2xl md:text-3xl mb-2">Choose from the top study</h1>
            <h1 class="font-bold text-2xl md:text-3xl">destinations.</h1>
        </div>
        <div class="top-right md:w-[44vw] w-[100%]">
            <p class="text-xl font-light mt-5 md:mt-0">When it comes to studying abroad, there are several countries giving international student great opportunities of higher education and becoming part of their international community. See which country suits you best.</p>
        </div>
    </div>
    <div class="mt-20 slider-country bottom w-[88vw] mx-auto">
        @foreach ($countries as $country)
        <div class="card shadow-lg rounded-lg ">
            <div class="img flex justify-center">
                <img class="w-[120px]" src="{{asset('webassets/newlogo-removebg-preview-BNhagA2w.png')}}" alt="">
            </div>
            <div class="flex justify-center">
                <button
                    class="border mt-10 hover:bg-[#000000] hover:text-[#ffff] border-[#2BB673] text-[#2BB673] px-8 py-1 hover:border-[#000000] rounded-2xl font-semibold">{{$country->country_name}}</button>
            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- What we do -->
<div id="whatwedo" class="what-we-do pt-10">
    <div class="top">
        <h1 class="text-center text-[#2BB673] text-3xl md:text-5xl font-bold py-5">What We Do</h1>
        <h1 class="text-center text-3xl md:text-5xl font-bold pb-2">Our Business & Financial</h1>
        <h1 class="text-center text-3xl md:text-5xl font-bold">Consulting Services</h1>
    </div>

    <div class="btm slider w-[90vw] md:w-[80vw] mx-auto  my-16">
        <div
            class="card cursor-pointer w-[100%] md:w-[26vw] hover:bg-[#2BB673] bg-[#000000] h-[48vh] md:h-[59vh] rounded-lg  mr-5">
            <div class="bg-white w-[100px] mx-auto h-[100px] rounded-full flex justify-center items-center my-5">
                <i class="fa-solid fa-user text-gray-500 text-5xl"></i>
            </div>
            <div class="desc text-white">
                <h1 class="text-center text-2xl font-bold mb-4">Carrer guidence</h1>
                <p class="text-center px-5 md:px-10 leading-8">Deciding what profession you should go into is easier when you, have us helping you make an informed decision.</p>
            </div>
        </div>
        <div
            class="card cursor-pointer w-[100%] md:w-[26vw] hover:bg-[#2BB673] bg-[#000000] h-[48vh] md:h-[59vh] rounded-lg  mr-5">
            <div class="bg-white w-[100px] mx-auto h-[100px] rounded-full flex justify-center items-center my-5">
                <i class="fa-solid fa-user text-gray-500 text-5xl"></i>
            </div>
            <div class="desc text-white">
                <h1 class="text-center text-2xl font-bold mb-4">Carrer guidence</h1>
                <p class="text-center px-5 md:px-10 leading-8">Deciding what profession you should go into is easier when you, have us helping you make an informed decision.</p>
            </div>
        </div>
        <div
            class="card cursor-pointer w-[100%] md:w-[26vw] hover:bg-[#2BB673] bg-[#000000] h-[48vh] md:h-[59vh] rounded-lg  mr-5">
            <div class="bg-white w-[100px] mx-auto h-[100px] rounded-full flex justify-center items-center my-5">
                <i class="fa-solid fa-user text-gray-500 text-5xl"></i>
            </div>
            <div class="desc text-white">
                <h1 class="text-center text-2xl font-bold mb-4">Carrer guidence</h1>
                <p class="text-center px-5 md:px-10 leading-8">Deciding what profession you should go into is easier when you, have us helping you make an informed decision.</p>
            </div>
        </div>
        <div
            class="card cursor-pointer w-[100%] md:w-[26vw] hover:bg-[#2BB673] bg-[#000000] h-[48vh] md:h-[59vh] rounded-lg  mr-5">
            <div class="bg-white w-[100px] mx-auto h-[100px] rounded-full flex justify-center items-center my-5">
                <i class="fa-solid fa-user text-gray-500 text-5xl"></i>
            </div>
            <div class="desc text-white">
                <h1 class="text-center text-2xl font-bold mb-4">Carrer guidence</h1>
                <p class="text-center px-5 md:px-10 leading-8">Deciding what profession you should go into is easier when you, have us helping you make an informed decision.</p>
            </div>
        </div>
    </div>

</div>

<!-- Why Choose us -->
<div id="whywechoose" class="why-choose flex flex-col md:flex-row">
    <div class="choose-left bg-[#2BB673] md:w-[50%]">

    </div>

    <div class="choose-right px-10 bg-[#f8f8f8] md:w-[50%] py-20">

        <div>
            <h1 class="text-2xl font-bold text-[#2BB673]">Why choose Us</h1>
            <h1 class="text-4xl font-semibold py-3">Reasons For trusting Times Consultant</h1>
        </div>

        <div>
            <div class="flex items-center gap-3">
                <div
                    class="icon bg-[#bcfdde] w-[60px] h-[60px] rounded-full flex justify-center items-center text-3xl">
                    <i class="fa-solid fa-clock text-[#2BB673]"></i>
                </div>
                <h1 class="text-2xl font-semibold">State of the art technologies</h1>
            </div>
            <p class="font-light my-2">We improve on efficiency and provide unmatched customer experience in the industry with modern CRM technologies and student portal.</p>
        </div>

        <div>
            <div class="flex items-center gap-3">
                <div
                    class="icon bg-[#bcfdde] w-[60px] h-[60px] rounded-full flex justify-center items-center text-3xl">
                    <i class="fa-solid fa-flag text-[#2BB673]"></i>
                </div>
                <h1 class="text-2xl font-semibold">Experienced</h1>
            </div>
            <p class="font-light my-2">Working since 2004, we have yielded vast experience from helping thousands of students from very high to average profile get admissions from their ideal universities while maintaining a proven success record of experience.</p>
        </div>

        <div>
            <div class="flex items-center gap-3">
                <div
                    class="icon bg-[#bcfdde] w-[60px] h-[60px] rounded-full flex justify-center items-center text-3xl">
                    <i class="fa-solid fa-wallet text-[#2BB673]"></i>
                </div>
                <h1 class="text-2xl font-semibold">Free Consultancy</h1>
            </div>
            <p class="font-light my-2">We represent the largest number of foreign institutes in Pakistan from Australia, Canada, UK, USA, Europe and so on while providing free consultancy for admissions, scholarships, interview preparation and visa related matters.</p>
        </div>

    </div>
</div>

<!-- Impressive Amount of options -->
<div class="options md:h-[55vh] bg-[#000000] text-white flex flex-col md:flex-row items-center py-5 md:py-0">

    <div class="options-left md:w-[60%] px-5 md:px-12">
        <h1 class="text-xl my-2 md:text-3xl md:font-semibold leading-[130%]">An impressive amount of options await
        </h1>
        <h1 class="md:text-4xl text-xl md:font-bold leading-[130%]">Search for your desired study program <br>through TCF...
        </h1>
        <button class="border-2 my-5 border-[#2BB673] hover:text-white hover:border-gray-600 hover:bg-gray-600 text-[#2BB673] px-4 md:px-6 py-2 rounded-3xl font-semibold">Times Course Finder</button>
    </div>

    <div class="hidden options-right md:flex w-[40%] justify-center gap-4">
        <div class="icon">
            <i class="text-[#2BB673] text-8xl fa-regular fa-star"></i>
        </div>
        <div class="icon">
            <i class="text-[#2BB673] text-8xl fa-solid fa-envelope-open-text"></i>
        </div>
    </div>

</div>

<!-- Latest news -->
<div id="blog" class="latest-news my-20">
    <div class="top">
        <h1 class="text-[#2BB673] text-2xl font-semibold text-center my-2">Latest News</h1>
        <p class="text-5xl font-bold text-center">Something from our latest blog</p>
    </div>
    <div class="btm w-[90vw] mx-auto flex-col md:flex-row flex justify-between">

        <div class="my-10 md:w-[26vw]">
            <img src="https://cdn.pixabay.com/photo/2017/07/31/11/21/people-2557396_640.jpg" alt="">
            <div class="desc my-4">
                <p class="date text-gray-400 font-bold">25 June,24</p>
                <h1 class="font-bold text-2xl">Is there a right time to apply to a Canadian university?</h1>
                <button
                    class="bg-[#2BB673] hover:bg-[#000000] px-8 py-2 text-white rounded-3xl my-4 font-semibold">Read
                    More <i class="fa-solid fa-arrow-right "></i></button>
            </div>
        </div>

        <div class="my-10 md:w-[26vw]">
            <img src="https://cdn.pixabay.com/photo/2017/07/31/11/21/people-2557396_640.jpg" alt="">
            <div class="desc my-4">
                <p class="date text-gray-400 font-bold">25 June,24</p>
                <h1 class="font-bold text-2xl">Is there a right time to apply to a Canadian university?</h1>
                <button
                    class="bg-[#2BB673] hover:bg-[#000000] px-8 py-2 text-white rounded-3xl my-4 font-semibold">Read
                    More <i class="fa-solid fa-arrow-right "></i></button>
            </div>
        </div>

        <div class="my-10 md:w-[26vw]">
            <img src="https://cdn.pixabay.com/photo/2017/07/31/11/21/people-2557396_640.jpg" alt="">
            <div class="desc my-4">
                <p class="date text-gray-400 font-bold">25 June,24</p>
                <h1 class="font-bold text-2xl">Is there a right time to apply to a Canadian university?</h1>
                <button
                    class="bg-[#2BB673] hover:bg-[#000000] px-8 py-2 text-white rounded-3xl my-4 font-semibold">Read
                    More <i class="fa-solid fa-arrow-right "></i></button>
            </div>
        </div>

    </div>
</div>

<!-- request Consultation -->
<div class="consulatation mb-10">
    <div class="top">
        <h1 class="text-[#2BB673] text-2xl font-semibold text-center my-2">Contact Form</h1>
        <p class="text-4xl font-bold text-center my-2">Request our free consultation!</p>
    </div>

    @if (session('success'))
        <script>
            alert("{!! session('success') !!}");
        </script>
    @endif



    <div class="btm w-[90vw] md:h-[80vh] mx-auto bg-[#2BB673] rounded-3xl mt-10">
        <div class="top py-5">
            <div class="icon flex justify-center">
                <i class="text-6xl text-white fa-regular fa-address-card"></i>
            </div>
            <div class="desc">
                <h1 class="text-center text-white text-xl font-boldbold">Book Free Consultation</h1>
            </div>
        </div>
        <div class="btm">
            <form action="{{route('consultation')}}" method="POST">
                @csrf
                <div class="w-[95%] mx-auto grid grid-cols-2 gap-2">
                    <div>
                        <input name="name" class="w-[95%] px-4 py-2 rounded-lg outline-none" type="text" placeholder="Full name">
                    </div>
                    <div>
                        <input name="phone" class="w-[95%] px-4 py-2 rounded-lg outline-none" type="text" placeholder="Phone number">
                    </div>
                </div>
                <div class="my-3 w-[95%] mx-auto">
                    <input name="email" class="px-4 py-2 w-[97.5%] rounded-lg outline-none" type="text" placeholder="Email address">
                </div>
                <div class="my-3 w-[95%] mx-auto">
                    <textarea placeholder="Message" rows="5" class="px-4 py-2 w-[97.5%] rounded-lg outline-none" name="message" id=""></textarea>
                </div>
                <div class="my-3 w-[95%] mx-auto">
                    <button class="bg-white px-8 py-2 text-[#2BB673] rounded-3xl my-4 font-semibold">Book Now <i class="fa-solid fa-arrow-right"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Testimonails -->
<div id="testimonial" class="testimonial mb-16">
    <div class="top w-[90vw] mx-auto mb-10">
        <h1 class="text-[#2BB673] text-2xl font-semibold mb-2">Client Testimonials</h1>
        <h1 class="text-4xl font-bold">We are Very Happy to Get Our <br> Client's Reviews.</h1>
    </div>
    <div class="btm w-[90vw] mx-auto slider-testimonial">

        <div class="card w-[43vw] px-8 py-10 rounded-xl mx-2 mb-3">
            <div class="top">
                <div
                    class="logo rounded-full bg-purple-500 w-[60px] h-[60px] flex justify-center items-center text-white">
                    <p class="text-3xl font-bold">M</p>
                </div>
            </div>
            <div class="mid my-4">
                <p class="text-xl font-light">
                    It's been a great experience getting my student visa processed by Times. The team has been really cooperative.They helped me getting offer letter from a university when another university had deferred my admission to next year.
                </p>
            </div>
            <div class="btm">
                <p class="font-bold text-xl">Misbah Riaz</p>
                <p class="font-light">RMIT University, Melbourne.</p>
            </div>
        </div>

        <div class="card w-[43vw] px-8 py-10 rounded-xl mr-2 mb-3">
            <div class="top">
                <div class="logo rounded-full bg-pink-500 w-[60px] h-[60px] flex justify-center items-center text-white">
                    <p class="text-3xl font-bold">M</p>
                </div>
            </div>
            <div class="mid my-4">
                <p class="text-xl font-light ">
                    It's been a great experience getting my student visa processed by Times. The team has been
                    really cooperative.They helped me getting offer letter from a university when another university
                    had deferred my admission to next year.
                </p>
            </div>
            <div class="btm">
                <p class="font-bold text-xl">Misbah Riaz</p>
                <p class="font-light">RMIT University, Melbourne</p>
            </div>
        </div>

        <div class="card w-[43vw] px-8 py-10 rounded-xl mr-2 mb-3">
            <div class="top">
                <div
                    class="logo rounded-full bg-orange-500 w-[60px] h-[60px] flex justify-center items-center text-white">
                    <p class="text-3xl font-bold">M</p>
                </div>
            </div>
            <div class="mid my-4">
                <p class="text-xl font-light ">
                    It's been a great experience getting my student visa processed by Times. The team has been
                    really cooperative.They helped me getting offer letter from a university when another university
                    had deferred my admission to next year.
                </p>
            </div>
            <div class="btm">
                <p class="font-bold text-xl">Misbah Riaz</p>
                <p class="font-light">RMIT University, Melbourne</p>
            </div>
        </div>

    </div>
</div>


@endsection
