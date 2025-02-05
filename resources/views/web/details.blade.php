@extends('layouts.web_main')
@push('title')
Details - {{$name}}
@endpush
<style>
    .left::-webkit-scrollbar {
            display: none;
        }
</style>
@section('main-section')
<div class="after-banner w-[90vw] mx-auto flex my-16 md:h-[80vh] md:flex-row flex-col">
    <div class="left md:w-[65%] cnt md:overflow-y-auto ">
        <div class="desc-top">
            <h1 class="text-2xl md:text-4xl font-bold mb-3">Study in {{$name}}</h1>
            <p class="text-xl font-light">Studying in {{$name}} provides students with a unique and enriching
                experience, with opportunities for personal and academic growth. With high-quality education, a
                welcoming society, and excellent post-study work opportunities, {{$name}} is an excellent choice for
                international students seeking a well-rounded education and a bright future.</p>
        </div>
        <div class="desc-top-2 mt-5">
            <h1 class="text-2xl md:text-4xl font-bold mb-3">Table of contents</h1>
            <div class="flex flex-col px-8">
                <a class="text-xl font-light hover:text-[#2BB673] cursor-pointer">Why study in {{$name}}?</a>
                <a class="text-xl font-light hover:text-[#2BB673] cursor-pointer">Admission requirements in
                    {{$name}}</a>
                <a class="text-xl font-light hover:text-[#2BB673] cursor-pointer">Cost of studying in {{$name}}</a>
                <a class="text-xl font-light hover:text-[#2BB673] cursor-pointer">Scholarships for international
                    students in {{$name}}</a>
                <a class="text-xl font-light hover:text-[#2BB673] cursor-pointer">Student visa requirements in
                    {{$name}}</a>
                <a class="text-xl font-light hover:text-[#2BB673] cursor-pointer">Post-Study Work Opportunities</a>
                <a class="text-xl font-light hover:text-[#2BB673] cursor-pointer">Book a Meeting with expert</a>
            </div>
            <div class="desc-top mt-5">
                <h1 class="text-2xl md:text-4xl font-bold mb-3">Cost of studying in {{ $name }} for international students</h1>

                @php
                    // Split the 'whyStudy' field using '|' and replace 'Europe' with the country name
                    $studyDetails = explode('|', $details->whyStudy);
                @endphp

                @foreach($studyDetails as $study)
                    @php
                        $study = str_replace('Europe', $name, $study); // Replace "Europe" with dynamic $name
                    @endphp
                    <p class="text-xl font-light mt-3">{{ $study }}</p>
                @endforeach
            </div>



            <div class="desc-top mt-5">
                <h1 class="text-2xl md:text-4xl font-bold mb-3">Admission requirements in {{$name}}</h1>
                <p class="text-xl font-light">CV</p>
                <p class="text-xl font-light mt-1">Passport</p>
                <p class="text-xl font-light mt-1">Health insurance for overseas students</p>
                <p class="text-xl font-light mt-1">All educational documents</p>
                <p class="text-xl font-light mt-1">Experience letter (in case of gap)</p>
                <p class="text-xl font-light mt-1">English language test, such as, IELTS/PTE (if any)</p>
            </div>

            <div class="desc-top mt-5">
                <h1 class="text-2xl md:text-4xl font-bold mb-3">Cost of studying in {{$name}} for international
                    students</h1>
                <p class="text-xl font-light">{{$name}} is a popular destination among international students for higher education due to its world-renowned universities and high-quality education system. The cost of studying in {{$name}} for international students varies depending on the institution and the course they choose. On average, tuition fees for undergraduate courses range from 12,000 to 15,000 AUD per semester.</p>
                <p class="text-xl font-light mt-3">
                    Apart from tuition fees, international students are also required to bear living expenses, including accommodation, food, and transportation. According to estimates, the average living expense for international students in {{$name}} is around 21,041 AUD per year. Additionally, students may also need to consider travel expenses, which can cost around 2,200 AUD.
                </p>
                <p class="text-xl font-light mt-3">
                    However, one of the advantages of studying in {{$name}} is that international students are allowed to work part-time up to 24 hours per week while studying. This can help cover their living and travel expenses while also gaining work experience.
                </p>
            </div>

            <div class="desc-top mt-5">
                <h1 class="text-2xl md:text-4xl font-bold mb-3">Scholarships for international students in {{$name}}
                </h1>
                <p class="text-xl font-light">{{$name}} is a popular study destination for international students due to its high-quality education system and multicultural environment. One of the biggest concerns for students studying abroad is the cost of tuition fees. However, {{$name}} offers various scholarships to international students to make their study abroad journey affordable and accessible.</p>
                <p class="text-xl font-light mt-3">The scholarship amount can vary depending on the course and university. International students can receive up to 30% off their tuition fees and living expenses.</p>
                <p class="text-xl font-light mt-3">If you are planning to study in {{$name}} and looking for scholarship options, our team of experts can guide you through the scholarship application process. Book a meeting with us to discuss your study abroad options, fees, and scholarships in 60+ countries.</p>
            </div>

            <div class="desc-top mt-5">
                <h1 class="text-2xl md:text-4xl font-bold mb-3">Student visa requirements in {{$name}}</h1>
                <p class="text-xl font-light">A valid passport</p>
                <p class="text-xl font-light mt-1">Polio certificate</p>
                <p class="text-xl font-light mt-1">Visa application fee</p>
                <p class="text-xl font-light mt-1">Passport-sized pictures</p>
                <p class="text-xl font-light mt-1">Proof of enrolment (your electronic confirmation of enrolment eCOE)</p>
                <p class="text-xl font-light mt-1">A Genuine Temporary Entrant (GTE) statement</p>
                <p class="text-xl font-light mt-1">Details of health insurance policy (OSHC)</p>
                <p class="text-xl font-light mt-1">Financial proof that you can afford living expenses, tuition fees, return airfare, expenses for dependents</p>
            </div>

            <div class="desc-top mt-5">
                <h1 class="text-2xl md:text-4xl font-bold mb-3">Post-Study Work Opportunities</h1>
                <p class="text-xl font-light">
                    {{$name}} offers excellent post-study work opportunities for international students who wish to stay in the country after completing their studies. Students who have completed a Bachelor's degree can apply for a Post-Study Work (PSW) visa, which allows them to stay and work in {{$name}} for up to 2-4 years, depending on their chosen field of study. Similarly, students who have completed a Master's degree can apply for a PSW visa that is valid for up to 3-5 years. These PSW visas provide international students with an opportunity to gain valuable work experience, earn money, and develop their careers in {{$name}}. The post-study work opportunities in {{$name}} make it an attractive destination for international students who are looking to pursue higher education and build their careers.
                </p>
            </div>

            <div class="desc-top mt-5">
                <h1 class="text-2xl md:text-4xl font-bold mb-3">Book a Meeting with expert</h1>
                <p class="text-xl font-light">Are you interested in studying abroad but not sure where to start? Our team of experts is here to help! By filling out our simple meeting request form, you can schedule a one-on-one consultation to discuss your study abroad options, fees, scholarships, and more. We offer guidance for over 60 countries, so whether you're interested in {{$name}}, Asia, the Americas, or anywhere in between, we've got you covered.</p>
                <p class="text-xl font-light mt-3">Our consultation service is completely free, and our team is dedicated to helping you achieve your study abroad goals. We understand that the process can be overwhelming, but we're here to provide personalized advice and support every step of the way. Don't miss out on the opportunity to explore the world and broaden your horizons through international education.</p>
                <p class="text-xl font-light mt-3">Book your meeting today and let us help you make your study abroad dreams a reality.</p>
            </div>


        </div>
    </div>
    <div class="right w-[90vw] md:w-[35%] bg-[#2BB673] h-[90%] rounded-xl mt-10 md:mt-0">
            <h1 class="text-white text-center text-3xl font-semibold py-4">Book Free Consultation</h1>
            <form action="">
                <div class="w-[90%] mx-auto mb-4">
                    <input class="w-[100%] outline-none rounded-xl px-5 py-2" type="text" name="" placeholder="Full Name *">
                </div>
                <div class="w-[90%] mx-auto mb-4">
                    <input class="w-[100%] outline-none rounded-xl px-5 py-2" type="email" name=""
                        placeholder="Email Address*">
                </div>
                <div class="w-[90%] mx-auto mb-4">
                    <input class="w-[100%] outline-none rounded-xl px-5 py-2" type="tel" name=""
                        placeholder="Phone number *">
                </div>
                <div class="w-[90%] mx-auto mb-4">
                    <input class="w-[100%] outline-none rounded-xl px-5 py-2" type="tel" name=""
                        placeholder="Country interested in *">
                </div>
                <div class="w-[90%] mx-auto mb-4">
                    <input class="w-[100%] outline-none rounded-xl px-5 py-2" type="tel" name=""
                        placeholder="Last Qualification *">
                </div>
                <div class="w-[90%] mx-auto mb-4 flex gap-4">
                    <button class="bg-[#c9ffe4] text-[#2BB673] px-10 py-2 rounded-3xl font-semibold ">Book Now<i
                            class="ml-1 fa-solid fa-arrow-right"></i></button>
                </div>
            </form>
        </div>
</div>
@endsection