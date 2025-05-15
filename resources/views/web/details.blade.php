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
            <div class="desc-top-2 mt-5">
                <h1 class="text-2xl md:text-4xl font-bold mb-3">Table of contents</h1>
                <div class="flex flex-col px-8">
                    <a href="#desc" class="text-xl font-light hover:text-[#2BB673] cursor-pointer">About
                        {{$countryName}}</a>
                    <a href="#work-opportunity" class="text-xl font-light hover:text-[#2BB673] cursor-pointer">Part-Time &
                        Post-Study Work Opportunities</a>
                    <a href="#cost-of-studying" class="text-xl font-light hover:text-[#2BB673] cursor-pointer">Cost of
                        Studying for International Students</a>
                    <a href="#requirement" class="text-xl font-light hover:text-[#2BB673] cursor-pointer">Admission &
                        English Proficiency Requirements</a>
                    <a href="#environment" class="text-xl font-light hover:text-[#2BB673] cursor-pointer">Life in {{$name}}
                        (Climate & Language)</a>
                    <a href="#visa-requirement" class="text-xl font-light hover:text-[#2BB673] cursor-pointer">Student visa
                        requirements</a>
                    <a href="#book-a-meeting" class="text-xl font-light hover:text-[#2BB673] cursor-pointer">Book a Meeting
                        with expert</a>
                </div>

                <div class="desc-top" id="desc">
                    <h1 class="text-2xl md:text-4xl font-bold mb-3">About {{$countryName}}</h1>
                    <p class="text-xl font-light">{{$details->country_description}}</p>
                </div>

                <div class="desc-top mt-5" id="scholarship">
                    <h1 class="text-2xl md:text-4xl font-bold mb-3">Cost of Living</h1>
                    <p class="text-xl font-light">{{$details->cost_of_living}}</p>
                </div>

                <div class="desc-top mt-5" id="environment">
                    <h1 class="text-2xl md:text-4xl font-bold mb-3">Climate & Language of {{$countryName}}</h1>
                    <p class="text-xl font-light">{{$details->climate}}</p>
                    <p class="text-xl font-light mt-3">{{$details->language}}</p>
                </div>


                <div class="desc-top mt-5" id="requirement">
                    <h1 class="text-2xl md:text-4xl font-bold mb-3">Admission requirements in {{$countryName}}</h1>
                    <p class="text-xl font-light">CV</p>
                    <p class="text-xl font-light mt-1">Passport</p>
                    <p class="text-xl font-light mt-1">Health insurance for overseas students</p>
                    <p class="text-xl font-light mt-1">All educational documents</p>
                    <p class="text-xl font-light mt-1">Experience letter (in case of gap)</p>
                    <p class="text-xl font-light mt-1">English language test, such as, IELTS/PTE (if any)</p>
                </div>

                <div class="desc-top mt-5" id="cost-of-studying">
                    <h1 class="text-2xl md:text-4xl font-bold mb-3">Cost of studying in {{$countryName}} for international
                        students</h1>
                    <p class="text-xl font-light">{{$details->scholarships}}</p>

                </div>

                <div class="desc-top mt-5" id="visa-requirement">
                    <h1 class="text-2xl md:text-4xl font-bold mb-3">Student visa requirements in {{$countryName}}</h1>
                    <p class="text-xl font-light">A valid passport</p>
                    <p class="text-xl font-light mt-1">Polio certificate</p>
                    <p class="text-xl font-light mt-1">Visa application fee</p>
                    <p class="text-xl font-light mt-1">Passport-sized pictures</p>
                    <p class="text-xl font-light mt-1">Proof of enrolment (your electronic confirmation of enrolment eCOE)
                    </p>
                    <p class="text-xl font-light mt-1">A Genuine Temporary Entrant (GTE) statement</p>
                    <p class="text-xl font-light mt-1">Details of health insurance policy (OSHC)</p>
                    <p class="text-xl font-light mt-1">Financial proof that you can afford living expenses, tuition fees,
                        return airfare, expenses for dependents</p>
                </div>

                <div class="desc-top mt-5" id="work-opportunity">
                    <h1 class="text-2xl md:text-4xl font-bold mb-3">Post-Study Work Opportunities</h1>
                    <p class="text-xl font-light">
                        {{$details->workOpp}}
                    </p>
                </div>

                <div class="desc-top mt-5" id="book-a-meeting">
                    <h1 class="text-2xl md:text-4xl font-bold mb-3">Book a Meeting with expert</h1>
                    <p class="text-xl font-light">Are you interested in studying abroad but not sure where to start? Our
                        team of experts is here to help! By filling out our simple meeting request form, you can schedule a
                        one-on-one consultation to discuss your study abroad options, fees, scholarships, and more. We offer
                        guidance for over 60 countries, so whether you're interested in {{$countryName}}, Asia, the
                        Americas, or
                        anywhere in between, we've got you covered.</p>
                    <p class="text-xl font-light mt-3">Our consultation service is completely free, and our team is
                        dedicated to helping you achieve your study abroad goals. We understand that the process can be
                        overwhelming, but we're here to provide personalized advice and support every step of the way. Don't
                        miss out on the opportunity to explore the world and broaden your horizons through international
                        education.</p>
                    <p class="text-xl font-light mt-3">Book your meeting today and let us help you make your study abroad
                        dreams a reality.</p>
                </div>


            </div>
        </div>
        <div class="right w-[90vw] md:w-[35%] bg-[#2BB673] h-[100%] rounded-xl mt-10 md:mt-0">
            <h1 class="text-white text-center text-3xl font-semibold py-4">Book Free Consultation</h1>
            <form action="{{route('consultation')}}" method="POST">
                @csrf
                <div class="w-[90%] mx-auto mb-4">
                    <input class="w-[100%] outline-none rounded-xl px-5 py-2" type="text" name="name"
                        placeholder="Full Name *" required>
                </div>
                <div class="w-[90%] mx-auto mb-4">
                    <input class="w-[100%] outline-none rounded-xl px-5 py-2" type="email" name="email"
                        placeholder="Email Address*" required>
                </div>
                <div class="w-[90%] mx-auto mb-4">
                    <input class="w-[100%] outline-none rounded-xl px-5 py-2" type="tel" name="phone"
                        placeholder="Phone number *" required>
                </div>
                <div class="w-[90%] mx-auto mb-4">
                    <input class="w-[100%] outline-none rounded-xl px-5 py-2" type="text" name="" value="{{$countryName}}"
                        placeholder="{{$countryName}}" disabled>
                </div>
                <div class="w-[90%] mx-auto mb-4">
                    <input class="w-[100%] outline-none rounded-xl px-5 py-2" type="hidden" name="country"
                        value="{{$details->country_id}}">
                </div>
                <div class="w-[90%] mx-auto mb-4">
                    <select class="w-[100%] px-4 py-2 rounded-lg outline-none" name="field" id="">
                        <option value="" selected disabled>Fields of Interest</option>
                        @foreach ($fields as $f)
                            <option value="{{$f->field}}">{{$f->field}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="w-[90%] mx-auto mb-4">
                    <select class="w-[100%] px-4 py-2 rounded-lg outline-none" name="qualification" id="">
                        <option value="" selected disabled>Qualification</option>
                        <option value="Intermediate">Intermediate</option>
                        <option value="Bachelors">Bachelors</option>
                        <option value="Masters">Masters</option>
                    </select>
                </div>
                <div class="w-[90%] mx-auto mb-4">
                    <input class="w-[100%] outline-none rounded-xl px-5 py-2" type="number" max="100" name="percentage"
                        placeholder="Percentage *" required>
                </div>
                <div class="w-[90%] mx-auto mb-4 flex gap-4">
                    <button class="bg-[#c9ffe4] text-[#2BB673] px-10 py-2 rounded-3xl font-semibold ">Book Now<i
                            class="ml-1 fa-solid fa-arrow-right"></i></button>
                </div>


            </form>
        </div>

    </div>

    <div class="mt-20 slider-country bottom w-[88vw] mx-auto">
        @foreach ($universities as $uni)
            <div class="card shadow-lg rounded-lg ">
                <div class="img flex justify-center">
                    <img class="w-[120px]" src="{{$uni->logo}}" alt="{{$uni->university_name}}">
                </div>
                <div class="flex justify-center">
                    <a href="{{route('university.details', $uni->slug)}}" class="border mt-10 hover:bg-[#000000] hover:text-[#ffff] border-[#2BB673] text-[#2BB673] px-8 py-1 hover:border-[#000000] rounded-2xl font-semibold">
                        {{$uni->university_name}}
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@endsection