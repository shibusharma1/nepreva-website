@extends('themes.default.common.master')
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('content')

    <section class="section-padding bg-slate-100 overflow-hidden">
        <div class="container-custom">
            <!-- HEADING -->
            <div class="text-center max-w-4xl mx-auto mb-16">
                <span class="section-subtitle">
                    Featured Resources
                </span>
                <h2 class="section-title">
                    Essential Health Guides
                </h2>
                <p class="text-slate-600 mt-6 leading-8">
                    Explore some of our most frequently accessed health
                    information resources, prepared by CIWEC's medical
                    professionals to help you stay informed and healthy.
                </p>
            </div>
            <!-- FEATURED GUIDE -->
            <div class="bg-white border border-slate-200 overflow-hidden">
                <div class="grid lg:grid-cols-12 items-center">
                    <!-- IMAGE -->
                    <div class="lg:col-span-5 relative">
                        <img src="./assets/img/altitudesickness.png" alt=""
                            class="w-full h-full min-h-[550px] object-cover">
                        <div class="absolute top-6 left-6">
                            <span class="bg-secondary text-white px-4 py-2 text-sm font-bold uppercase">
                                Most Popular Guide
                            </span>
                        </div>
                    </div>
                    <!-- CONTENT -->
                    <div class="lg:col-span-7 p-10 lg:p-14">
                        <span class="text-primary font-bold uppercase tracking-[3px]">
                            Altitude Medicine
                        </span>
                        <h3 class="text-primary text-4xl font-black mt-5 leading-tight">
                            Complete Guide To Altitude Sickness
                        </h3>
                        <p class="text-slate-600 mt-8 leading-8">
                            Learn how altitude affects the body,
                            understand early warning signs,
                            recognize symptoms and discover
                            proven prevention strategies for
                            safe trekking and mountain travel.
                        </p>
                        <!-- FEATURES -->
                        <div class="grid md:grid-cols-2 gap-5 mt-10">
                            <div class="flex items-center gap-3">
                                <i class="fa-solid fa-circle-check text-secondary">
                                </i>
                                <span>
                                    Symptoms Explained
                                </span>
                            </div>
                            <div class="flex items-center gap-3">
                                <i class="fa-solid fa-circle-check text-secondary">
                                </i>
                                <span>
                                    Prevention Strategies
                                </span>
                            </div>
                            <div class="flex items-center gap-3">
                                <i class="fa-solid fa-circle-check text-secondary">
                                </i>
                                <span>
                                    Emergency Warning Signs
                                </span>
                            </div>
                            <div class="flex items-center gap-3">
                                <i class="fa-solid fa-circle-check text-secondary">
                                </i>
                                <span>
                                    Treatment Options
                                </span>
                            </div>
                        </div>
                        <!-- ACTIONS -->
                        <div class="flex flex-wrap gap-4 mt-10">
                            <a href="./assets/pdf/news1.pdf" target="_blank" class="btn-primary">
                                Read Full Guide
                            </a>
                            <a href="./assets/pdf/news1.pdf" download class="btn-secondary">
                                Download PDF
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- OTHER GUIDES -->
            <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-8 mt-12">
                <!-- GUIDE -->
                <article
                    class="group bg-white border border-slate-200 hover:border-secondary hover:-translate-y-2 transition-all duration-500">
                    <img src="./assets/img/travel-health-guide.png" class="w-full h-60 object-cover">
                    <div class="p-8">
                        <span class="text-secondary text-sm font-bold uppercase">
                            Travel Health
                        </span>
                        <h3 class="text-primary text-2xl font-black mt-4">
                            Traveler's Health & Safety Guide
                        </h3>
                        <p class="text-slate-600 mt-4 leading-7">
                            Essential travel health advice,
                            vaccinations and preventive measures.
                        </p>
                        <a href="./assets/pdf/news1.pdf" target="_blank"
                            class="inline-flex items-center gap-2 text-primary hover:text-secondary font-semibold mt-6">
                            Read Guide
                            <i class="fa-solid fa-arrow-right">
                            </i>
                        </a>
                    </div>
                </article>
                <!-- GUIDE -->
                <article
                    class="group bg-white border border-slate-200 hover:border-secondary hover:-translate-y-2 transition-all duration-500">
                    <img src="./assets/img/vaccination-center.png" class="w-full h-60 object-cover">
                    <div class="p-8">
                        <span class="text-secondary text-sm font-bold uppercase">
                            Vaccinations
                        </span>
                        <h3 class="text-primary text-2xl font-black mt-4">
                            Travel Vaccination Guide
                        </h3>
                        <p class="text-slate-600 mt-4 leading-7">
                            Recommended vaccines,
                            schedules and travel preparation.
                        </p>
                        <a href="./assets/pdf/news1.pdf" target="_blank"
                            class="inline-flex items-center gap-2 text-primary hover:text-secondary font-semibold mt-6">
                            Read Guide
                            <i class="fa-solid fa-arrow-right">
                            </i>
                        </a>
                    </div>
                </article>
                <!-- GUIDE -->
                <article
                    class="group bg-white border border-slate-200 hover:border-secondary hover:-translate-y-2 transition-all duration-500">
                    <img src="./assets/img/preventive-guide.png" class="w-full h-60 object-cover">
                    <div class="p-8">
                        <span class="text-secondary text-sm font-bold uppercase">
                            Preventive Care
                        </span>
                        <h3 class="text-primary text-2xl font-black mt-4">
                            Preventive Health Screening Guide
                        </h3>
                        <p class="text-slate-600 mt-4 leading-7">
                            Learn the importance of regular
                            health screening and early detection.
                        </p>
                        <a href="./assets/pdf/news1.pdf" target="_blank"
                            class="inline-flex items-center gap-2 text-primary hover:text-secondary font-semibold mt-6">
                            Read Guide
                            <i class="fa-solid fa-arrow-right">
                            </i>
                        </a>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class="section-padding bg-white overflow-hidden">
        <div class="container-custom">
            <!-- HEADER -->
            <div class="text-center max-w-4xl mx-auto mb-16">
                <span class="section-subtitle">
                    Travel Medicine Expertise
                </span>
                <h2 class="section-title">
                    CIWEC Travel Health Center
                </h2>
                <p class="text-slate-600 mt-6 leading-8">
                    Whether you're trekking in the Himalayas,
                    exploring Nepal or travelling internationally,
                    our travel health resources help you prepare,
                    stay healthy and travel safely.
                </p>
            </div>
            <!-- MAIN FEATURE -->
            <div class="bg-primary overflow-hidden">
                <div class="grid lg:grid-cols-12 items-center">
                    <div class="lg:col-span-7 p-10 lg:p-14">
                        <span class="text-secondary font-bold uppercase tracking-[3px]">
                            Featured Travel Guide
                        </span>
                        <h3 class="text-white text-4xl font-black mt-5">
                            Essential Travel Health Preparation
                        </h3>
                        <p class="text-white/80 mt-8 leading-8">
                            Learn everything you need to know before
                            travelling including vaccinations,
                            altitude preparation, food safety,
                            emergency planning and travel health tips.
                        </p>
                        <div class="grid md:grid-cols-2 gap-5 mt-10">
                            <div class="flex items-center gap-3">
                                <i class="fa-solid fa-circle-check text-secondary">
                                </i>
                                <span class="text-white">
                                    Vaccination Guidance
                                </span>
                            </div>
                            <div class="flex items-center gap-3">
                                <i class="fa-solid fa-circle-check text-secondary">
                                </i>
                                <span class="text-white">
                                    Trekking Preparation
                                </span>
                            </div>
                            <div class="flex items-center gap-3">
                                <i class="fa-solid fa-circle-check text-secondary">
                                </i>
                                <span class="text-white">
                                    Altitude Awareness
                                </span>
                            </div>
                            <div class="flex items-center gap-3">
                                <i class="fa-solid fa-circle-check text-secondary">
                                </i>
                                <span class="text-white">
                                    Emergency Planning
                                </span>
                            </div>
                        </div>
                        <div class="flex flex-wrap gap-4 mt-10">
                            <a href="./assets/pdf/news1.pdf" target="_blank" class="btn-secondary">
                                Read Guide
                            </a>
                            <a href="./assets/pdf/news1.pdf" target="_blank" class="btn-light text-white">
                                Download PDF
                            </a>
                        </div>
                    </div>
                    <div class="lg:col-span-5">
                        <img src="./assets/img/travel-health-preparation.png" alt=""
                            class="w-full h-full min-h-[500px] object-cover">
                    </div>
                </div>
            </div>
            <!-- TOPICS -->
            <!-- <div
             class="grid md:grid-cols-2 xl:grid-cols-3 gap-8 mt-16">
             <div
                class="group bg-slate-100 border border-slate-200 p-8 hover:border-secondary hover:-translate-y-2 transition-all duration-500">
                <div
                   class="w-16 h-16 bg-primary/10 flex items-center justify-center mb-6">
                   <i
                      class="fa-solid fa-syringe text-primary text-2xl">
                   </i>
                </div>
                <h3
                   class="text-primary text-2xl font-black">
                   Travel Vaccinations
                </h3>
                <p
                   class="text-slate-600 mt-4 leading-7">
                   Recommended vaccinations and immunization
                   schedules before international travel.
                </p>
             </div>
             <div
                class="group bg-slate-100 border border-slate-200 p-8 hover:border-secondary hover:-translate-y-2 transition-all duration-500">
                <div
                   class="w-16 h-16 bg-secondary/10 flex items-center justify-center mb-6">
                   <i
                      class="fa-solid fa-mountain text-secondary text-2xl">
                   </i>
                </div>
                <h3
                   class="text-primary text-2xl font-black">
                   Altitude Awareness
                </h3>
                <p
                   class="text-slate-600 mt-4 leading-7">
                   Understand altitude sickness,
                   symptoms and prevention strategies.
                </p>
             </div>
             <div
                class="group bg-slate-100 border border-slate-200 p-8 hover:border-secondary hover:-translate-y-2 transition-all duration-500">
                <div
                   class="w-16 h-16 bg-primary/10 flex items-center justify-center mb-6">
                   <i
                      class="fa-solid fa-utensils text-primary text-2xl">
                   </i>
                </div>
                <h3
                   class="text-primary text-2xl font-black">
                   Food & Water Safety
                </h3>
                <p
                   class="text-slate-600 mt-4 leading-7">
                   Practical guidance for avoiding
                   foodborne and waterborne illnesses.
                </p>
             </div>
             <div
                class="group bg-slate-100 border border-slate-200 p-8 hover:border-secondary hover:-translate-y-2 transition-all duration-500">
                <div
                   class="w-16 h-16 bg-secondary/10 flex items-center justify-center mb-6">
                   <i
                      class="fa-solid fa-kit-medical text-secondary text-2xl">
                   </i>
                </div>
                <h3
                   class="text-primary text-2xl font-black">
                   Travel Medical Kit
                </h3>
                <p
                   class="text-slate-600 mt-4 leading-7">
                   Essential medicines and health
                   supplies every traveler should carry.
                </p>
             </div>
             <div
                class="group bg-slate-100 border border-slate-200 p-8 hover:border-secondary hover:-translate-y-2 transition-all duration-500">
                <div
                   class="w-16 h-16 bg-primary/10 flex items-center justify-center mb-6">
                   <i
                      class="fa-solid fa-person-hiking text-primary text-2xl">
                   </i>
                </div>
                <h3
                   class="text-primary text-2xl font-black">
                   Trekking Health
                </h3>
                <p
                   class="text-slate-600 mt-4 leading-7">
                   Safety recommendations for trekking,
                   hiking and adventure travel.
                </p>
             </div>
             <div
                class="group bg-slate-100 border border-slate-200 p-8 hover:border-secondary hover:-translate-y-2 transition-all duration-500">
                <div
                   class="w-16 h-16 bg-secondary/10 flex items-center justify-center mb-6">
                   <i
                      class="fa-solid fa-plane-circle-check text-secondary text-2xl">
                   </i>
                </div>
                <h3
                   class="text-primary text-2xl font-black">
                   Travel Emergencies
                </h3>
                <p
                   class="text-slate-600 mt-4 leading-7">
                   What to do and where to seek help
                   during a medical emergency abroad.
                </p>
             </div>
          </div> -->
            <!-- QUICK STATS -->
            <div class="grid md:grid-cols-4 gap-6 mt-20">
                <div class="bg-slate-100 border border-slate-200 p-8 text-center">
                    <h3 class="text-primary text-4xl font-black">
                        40+
                    </h3>
                    <p class="text-slate-600 mt-2">
                        Years Experience
                    </p>
                </div>
                <div class="bg-slate-100 border border-slate-200 p-8 text-center">
                    <h3 class="text-primary text-4xl font-black">
                        Global
                    </h3>
                    <p class="text-slate-600 mt-2">
                        Travel Expertise
                    </p>
                </div>
                <div class="bg-slate-100 border border-slate-200 p-8 text-center">
                    <h3 class="text-primary text-4xl font-black">
                        Trusted
                    </h3>
                    <p class="text-slate-600 mt-2">
                        Medical Guidance
                    </p>
                </div>
                <div class="bg-slate-100 border border-slate-200 p-8 text-center">
                    <h3 class="text-primary text-4xl font-black">
                        24/7
                    </h3>
                    <p class="text-slate-600 mt-2">
                        Patient Support
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding bg-slate-200">
        <div class="container-custom">
            <div class="text-center mb-12">
                <span class="section-subtitle">
                    Frequently Asked Questions
                </span>
                <h2 class="text-primary text-4xl font-black">
                    Health Screening FAQs
                </h2>
            </div>
            <div class="max-w-4xl mx-auto space-y-4">
                <div class="faq-item active">
                    <button
                        class="faq-btn w-full flex items-center justify-between bg-white border border-slate-200 px-6 py-5 text-left">
                        <span class="text-primary font-bold text-lg">
                            What is included in a routine health screening?
                        </span>
                        <i class="faq-icon fa-solid fa-plus text-secondary transition-all duration-300"></i>
                    </button>
                    <div class="faq-content">
                        <div class="px-6 pb-6 text-slate-600 bg-slate-50 leading-8">
                            A routine health screening typically includes blood pressure check,
                            blood tests, glucose levels, cholesterol screening and basic physical examination.
                        </div>
                    </div>
                </div>
                <div class="faq-item">
                    <button
                        class="faq-btn w-full flex items-center justify-between bg-white border border-slate-200 px-6 py-5 text-left">
                        <span class="text-primary font-bold text-lg">
                            Who should undergo regular health screening?
                        </span>
                        <i class="faq-icon fa-solid fa-plus text-secondary transition-all duration-300"></i>
                    </button>
                    <div class="faq-content">
                        <div class="px-6 pb-6 text-slate-600 bg-slate-50 leading-8">
                            Adults above 30 years, individuals with chronic conditions,
                            and those with family history of diseases should undergo regular health screening.
                        </div>
                    </div>
                </div>
                <div class="faq-item">
                    <button
                        class="faq-btn w-full flex items-center justify-between bg-white border border-slate-200 px-6 py-5 text-left">
                        <span class="text-primary font-bold text-lg">
                            How often should I do a full body checkup?
                        </span>
                        <i class="faq-icon fa-solid fa-plus text-secondary transition-all duration-300"></i>
                    </button>
                    <div class="faq-content">
                        <div class="px-6 pb-6 text-slate-600 bg-slate-50 leading-8">
                            It is generally recommended to undergo a full body checkup once every year,
                            or more frequently if advised by your doctor.
                        </div>
                    </div>
                </div>
                <div class="faq-item">
                    <button
                        class="faq-btn w-full flex items-center justify-between bg-white border border-slate-200 px-6 py-5 text-left">
                        <span class="text-primary font-bold text-lg">
                            Do I need to fast before a health screening?
                        </span>
                        <i class="faq-icon fa-solid fa-plus text-secondary transition-all duration-300"></i>
                    </button>
                    <div class="faq-content">
                        <div class="px-6 pb-6 text-slate-600 bg-slate-50 leading-8">
                            Yes, fasting for 8–12 hours may be required for certain blood tests
                            like glucose and lipid profile.
                        </div>
                    </div>
                </div>
                <div class="faq-item">
                    <button
                        class="faq-btn w-full flex items-center justify-between bg-white border border-slate-200 px-6 py-5 text-left">
                        <span class="text-primary font-bold text-lg">
                            Are health screenings painful or risky?
                        </span>
                        <i class="faq-icon fa-solid fa-plus text-secondary transition-all duration-300"></i>
                    </button>
                    <div class="faq-content">
                        <div class="px-6 pb-6 text-slate-600 bg-slate-50 leading-8">
                            No, health screenings are safe, simple and minimally invasive,
                            usually involving basic blood tests and physical measurements.
                        </div>
                    </div>
                </div>
            </div>
            <!-- HELP BOX -->
            <div class="bg-primary text-center p-10 mt-16 max-w-5xl mx-auto">
                <h3 class="text-white text-3xl font-black">
                    Still Have Questions?
                </h3>
                <p class="text-white/80 mt-4 max-w-2xl mx-auto leading-8">
                    Our healthcare professionals are available
                    to guide you with personalized health screening recommendations.
                </p>
                <a href="./contactus.php" class="btn-secondary mt-8">
                    Contact Our Team
                </a>
            </div>
        </div>
    </section>

@endsection
