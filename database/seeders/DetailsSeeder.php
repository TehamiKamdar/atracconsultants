<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('countrydetails')->insert([
            [
                'country_id' => 1,
                'country_description' => "Cyprus is located in the Eastern Mediterranean Sea, where three continents' trade routes intersect. It is the third biggest island in the Mediterranean Sea. The total area of the island covers 9,251 square km. The Turkish Republic of Northern Cyprus (TRNC) area is 3,242 square km. Cyprus's nearest neighbor is Turkey. The midyear de-jure population estimate for the Turkish Republic of Northern Cyprus is 286,257. The TRNC's capital, Lefkoşa, is its largest city. Other prominent settlements on the coast include Gazimağusa and Girne. The official language is Turkish, but English is commonly used and understood in both official and commercial settings. The religion is Islam, and Muslims account for 99% of the population",
                'cost_of_living' => "Compared with most countries in Western Europe, the cost of living in Northern Cyprus is low. Monthly expenses of an individual can go from 8000TL - 12000TL on an average basis.",
                "climate"=>"The Turkish Republic of Northern Cyprus has a typical Mediterranean climate with about 300 days of sunshine per year. It enjoys dry, warm summers and mild winters. The bulk of the rain falls during the period from November to March. The coldest month is January having minimum and maximum mean temperatures of 6ºC and 16ºC respectively. In August's hottest, the corresponding minimum and maximum mean temperatures are 21ºC and 35ºC.",
                "language"=>"The mother tongue of the Turkish Cypriots is Turkish. English is widely spoken.",
                'scholarships' => "The duration of Bachelors Program in North Cyprus is 4 years whereas masters program duration is 2-years. The approximate tuition fee for Bs Program in North Cyprus varies from around 1000$ - 1600$ Per Semester whereas Ms Program tuition fee varies from 800$ - 1100$ per semester. The tuition fee is calculated after the university grants you the scholarship.
                IELTS, PTE, and TOFEL are exempted if provided an English Proficiency Certificate or else sitting in an English Proficiency Exam.
                ",
                'workOpp' => "Unlimited part-time working hours are allowed for students to work. Minimum wage offered 39512TL.",
                'bookMeeting' => "Are you interested in studying abroad but not sure where to start? Our team of experts is here to help! By filling out our simple meeting request form, you can schedule a one-on-one consultation to discuss your study abroad options, fees, scholarships, and more. We offer guidance for over 60 countries, so whether you're interested in Europe, Asia, the Americas, or anywhere in between, we've got you covered.|Our consultation service is completely free, and our team is dedicated to helping you achieve your study abroad goals. We understand that the process can be overwhelming, but we're here to provide personalized advice and support every step of the way. Don't miss out on the opportunity to explore the world and broaden your horizons through international education.|Book your meeting today and let us help you make your study abroad dreams a reality.",
            ],
            [
                'country_id' => 2,
                'country_description' => "South Cyprus is an island state in the eastern Mediterranean Sea. It is geographically in West Asia, but its cultural links and geopolitics are predominantly Southeast European. Cyprus is the third largest and most populous island in the Mediterranean. It lies east of Greece, north of Egypt, south of Turkey, and west of Lebanon and Syria. The capital and largest city is Nicosia. The northeastern part of the island is de facto ruled by the self-proclaimed Turkish Republic of Northern Cyprus, which, like Turkey, refers to Cyprus' internationally recognized government as the Greek Cypriot Administration of Southern Cyprus. The Republic of Cyprus is divided into six districts: Nicosia, Famagusta, Kyrenia, Larnaca, Limassol and Paphos
                ",
                'cost_of_living' => "Compared with most countries in Western Europe, the cost of living in Cyprus is low. Approximately 500-600 Euros per month including Accomodation, Utilities, and Food etc.",
                "climate"=>"Cyprus has a subtropical climate with very mild winters (on the coast) and warm to hot summers. Snow is possible only in the Troodos Mountains in the central part of island. Rain occurs mainly in winter, with summer being generally dry.
                ",
                "language"=>"Cyprus has two official languages: Greek and Turkish. The island is divided into two, and the Cypriot Turks live to the north, the Greek Cypriots to the south. Around 2.7% of each also speak the minority languages Armenian and Arabic, and most of these also speak Greek.
                ",
                'scholarships' => "Universities and Institutes in Cyprus offers variety of Associate Degree, Bachelors Degree and Masters Degree programs for International Students
                The duration of Bachelors Program in Cyprus is 4 years and requires 50% in HSC for application whereas masters program duration is 2-years and requires 50% in Bachelors Degree for application. 
                The approximate tuition fee for Associate and Bs Program in Cyprus varies from around 4000-4500Euros Per Year whereas Ms Program tuition fee varies from 5400-4590Euros per year. The tuition fee is calculated after the university grants you the scholarship.
                ",
                'workOpp' => "International (non-EU) students are entitled to work for 20 hours per week during teaching periods, provided that the employment hours will not coincide with their study hours at the American College and 38 hours per week during their holiday periods (Christmas, Easter or Summer). International students can work in specific fields and/or occupations (including Hotel and Restaurants) and occupations relevant to their program of study. Moreover, during summer period (1 June to 15 October) International students studying in Hotel Management or Culinary Arts programs of study, have the opportunity to undertake paid internships in the thriving hotel and tourism industry in Cyprus, thus supplementing their education with real hands-on, paid experience.
                Finally, on completion of our Master in Business Administration program, international students are allowed to remain in Cyprus for a period of up to 12 months in order to seek employment.
                ",
                'bookMeeting' => "Are you interested in studying abroad but not sure where to start? Our team of experts is here to help! By filling out our simple meeting request form, you can schedule a one-on-one consultation to discuss your study abroad options, fees, scholarships, and more. We offer guidance for over 60 countries, so whether you're interested in Europe, Asia, the Americas, or anywhere in between, we've got you covered.|Our consultation service is completely free, and our team is dedicated to helping you achieve your study abroad goals. We understand that the process can be overwhelming, but we're here to provide personalized advice and support every step of the way. Don't miss out on the opportunity to explore the world and broaden your horizons through international education.|Book your meeting today and let us help you make your study abroad dreams a reality.",
            ],
            [
                'country_id' => 3,
                'country_description' => "Italy, officially the Italian Republic, is a country in Southern and Western Europe. It consists of a peninsula that extends into the Mediterranean Sea. Italy shares its borders with France, Switzerland, Austria, Slovenia and two enclaves: Vatican City and San Marino. It is the tenth-largest country in Europe by area, covering 301,340 km2 (116,350 sq mi), and third-most populous member state of the European Union, with a population of nearly 60 million. Its capital and largest city is Rome; other major urban areas include Milan, Naples, Turin, Florence, and Venice.",
                'cost_of_living' => "On average, monthly expenses, including accommodation, food, transport, and other necessities, range from approximately €700 to €1200. The estimate excludes tuition fees and personal expenses like travel and entertainment.",
                "climate"=>"The climate is influenced by the seas that surround Italy on every side except the north, which constitute a reservoir of heat and humidity. Within the southern temperate zone, they determine a Mediterranean climate with local differences. Because of the length of the peninsula and the mostly mountainous hinterland, the climate is highly diverse. In most inland northern and central regions, the climate ranges from humid subtropical to humid continental and oceanic. The Po Valley is mostly humid subtropical, with cool winters and hot summers. The coastal areas of Liguria, Tuscany, and most of the south generally fit the Mediterranean climate stereotype.
                ",
                "language"=>"Italian is the official language of Italy, and 93% of the population are native Italian speakers. Around 50% speak a regional dialect as their mother tongue.",
                'scholarships' => "The duration of the bachelor's Program in Italy is 3-4 years whereas the master's program duration is 1-2 years. 
                The tuition fee for bachelor's and master's programs is waived under Merit-based and Regional scholarships in almost all public universities. Students need to pay only the annual registration/contribution fee of around €150-€400, variable from university to university.
                English Proficiency Letter from the last institute is required to exempt the IELTS, PTE, and TOEFL for admission in Most of the Master's Programs, not all. 
                For Bachelors it is recommended to provide IELTS, PTE, and TOEFL.
                ",
                'workOpp' => "On a Student Visa, Weekly 20 Hours of part-time work is allowed. However, students can work full-time on Holidays or semester breaks.",
                'bookMeeting' => "Are you interested in studying abroad but not sure where to start? Our team of experts is here to help! By filling out our simple meeting request form, you can schedule a one-on-one consultation to discuss your study abroad options, fees, scholarships, and more. We offer guidance for over 60 countries, so whether you're interested in Europe, Asia, the Americas, or anywhere in between, we've got you covered.|Our consultation service is completely free, and our team is dedicated to helping you achieve your study abroad goals. We understand that the process can be overwhelming, but we're here to provide personalized advice and support every step of the way. Don't miss out on the opportunity to explore the world and broaden your horizons through international education.|Book your meeting today and let us help you make your study abroad dreams a reality.",
            ],
            [
                'country_id' => 4,
                'country_description' => "Germany is renowned for its academic excellence, cutting-edge research, and rich cultural heritage. With a strong emphasis on practical learning, Germany offers students an opportunity to study at some of the most prestigious universities in the world, many of which rank highly globally. As a hub of technological innovation and industry, Germany provides unparalleled opportunities for those seeking to excel in fields like engineering, medicine, business, and information technology.",
                'cost_of_living' => "According to DAAD statistics, the average monthly living expense for a student in Germany is 867 euros. Thus, the annual living expenses can be calculated as 10,368 euros per year. This is far lower than other European countries, including the UK, Switzerland, Denmark, etc.
                ",
                "climate"=>"Winters are cool and summers warm, though maximum temperatures can exceed 30 °C for several days in a row during heat waves.


                The warmest regions of Germany are in the southwest. Summers are hot with many days up to 40 °C. Sometimes, minimum temperatures do not drop below 20 °C, which is relatively rare in other regions, except the North Sea coast and western city climates
                ",
                "language"=>"While German is the official language of Germany and widely spoken across the country, many universities offer programs in English, especially at the postgraduate level. For students who wish to immerse themselves in the local culture, learning basic German can be beneficial for day-to-day life and enhances job prospects, but it’s not always a requirement for academic success.
                ",
                'scholarships' => "Germany is home to many world-renowned institutions, like the Technical University of Munich and Heidelberg University, offering a wide range of programs. The duration of the bachelor's Program in Italy is 3-4 years, whereas the master's program is 1-2 years. 
                The tuition fee for bachelor's and master's programs is waived under Merit-based and Regional scholarships in almost all public universities. Students need to pay only the annual registration/contribution fee of around €150-€400, variable from university to university 
                
                
                English Proficiency Letter from the last institute is required to exempt the IELTS, PTE, and TOEFL for admission in Most of the Master's Programs, not all. 
                For Bachelors it is recommended to provide IELTS, PTE, and TOEFL.
                ",
                'workOpp' => "On a Student Visa, Weekly 20 Hours of part-time work is allowed. However, students can work full-time on Holidays or semester breaks.",
                'bookMeeting' => "Are you interested in studying abroad but not sure where to start? Our team of experts is here to help! By filling out our simple meeting request form, you can schedule a one-on-one consultation to discuss your study abroad options, fees, scholarships, and more. We offer guidance for over 60 countries, so whether you're interested in Europe, Asia, the Americas, or anywhere in between, we've got you covered.|Our consultation service is completely free, and our team is dedicated to helping you achieve your study abroad goals. We understand that the process can be overwhelming, but we're here to provide personalized advice and support every step of the way. Don't miss out on the opportunity to explore the world and broaden your horizons through international education.|Book your meeting today and let us help you make your study abroad dreams a reality.",
            ],
            [
                'country_id' => 5,
                'country_description' => "Canada offers world-class education, top-ranked universities, and a welcoming multicultural environment. Known for its safety and high quality of life, it’s a perfect destination for international students. Pakistani students can work part-time, gain global exposure, and even explore pathways to permanent residency.",
                'cost_of_living' => "Planning your budget is essential when studying in Canada. The cost of living varies by city, lifestyle, and accommodation type. On average, students should budget between CAD 10,000 – 20,000 per year for expenses.
                Estimated Monthly Expenses:
                🏠 Accommodation: CAD 400 – 1,500 (shared apartment, dorm, or homestay)
                🍽️ Food & Groceries: CAD 200 – 400
                🚌 Transportation: CAD 80 – 150 (student discounts available)
                🩺 Health Insurance: CAD 600  – 900 per year",
                "climate"=>"Canada experiences a wide range of climatic conditions due to its vast size. The Pacific coast has a mild, wet climate throughout the year, while the Prairie Provinces face extreme seasonal variations with cold, snowy winters and warm summers. The northern regions experience long, harsh winters, whereas southern areas have more moderate temperatures. This diverse climate offers a unique experience across different regions, making Canada an appealing destination for students and travelers alike.",
                "language"=>"Canada is a bilingual country with two official languages: English and French. English is the dominant language in most provinces, while French is primarily spoken in Quebec and some parts of New Brunswick and Ontario. The country’s multicultural society also embraces many other languages, reflecting its diverse immigrant communities. This bilingual and multilingual environment offers international students and professionals a unique cultural and linguistic experience.
                ",
                'scholarships' => "Canada is one of the best places to pursue higher education, offering top-tier universities and a wide variety of academic programs. With its affordable tuition fees compared to other popular destinations, high quality of life, and a safe, multicultural environment, Canada attracts students from all over the world. The country’s diverse population ensures an inclusive learning experience, and many universities offer work opportunities during and after studies. Furthermore, Canada's progressive immigration policies provide international students with pathways to work and permanent residency, making it an attractive destination for those looking to build a future abroad.",
                'workOpp' => "Canada offers excellent part-time job opportunities for international students, allowing them to gain valuable work experience while supporting their living expenses. Students with a valid study permit can work up to 20 hours per week during academic sessions and full-time during scheduled breaks, such as summer or winter holidays. Part-time jobs are available in various sectors, including retail, hospitality, customer service, and campus employment. Many universities also provide work-study programs that allow students to work within the institution",
                'bookMeeting' => "Are you interested in studying abroad but not sure where to start? Our team of experts is here to help! By filling out our simple meeting request form, you can schedule a one-on-one consultation to discuss your study abroad options, fees, scholarships, and more. We offer guidance for over 60 countries, so whether you're interested in Europe, Asia, the Americas, or anywhere in between, we've got you covered.|Our consultation service is completely free, and our team is dedicated to helping you achieve your study abroad goals. We understand that the process can be overwhelming, but we're here to provide personalized advice and support every step of the way. Don't miss out on the opportunity to explore the world and broaden your horizons through international education.|Book your meeting today and let us help you make your study abroad dreams a reality.",
            ],
        ]);
    }
}
