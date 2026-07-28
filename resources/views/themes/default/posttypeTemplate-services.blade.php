@extends('themes.default.common.master')
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('content')

    <section id="servicesSection" class="section-padding bg-white overflow-hidden">
        <div class="container-custom">
            <!-- HEADER -->
            <div class="text-center max-w-4xl mx-auto mb-12">
                <span class="section-subtitle">
                    Healthcare Services
                </span>
                <h2 class="section-title">
                    Available Services By Location
                </h2>
                <p class="text-slate-600 mt-6 leading-8">
                    Explore healthcare services available at our
                    Kathmandu and Pokhara facilities. Select a location
                    to view services offered at that center.
                </p>
            </div>
            <!-- LOCATION TOGGLE -->
            <div class="flex justify-center mb-14">
                <div class="inline-flex bg-slate-100 p-2 rounded-full">
                    <button id="kathmanduBtn"
                        class="location-btn active-location px-8 py-4 rounded-full font-bold transition-all duration-300">
                        Kathmandu Services
                    </button>
                    <button id="pokharaBtn"
                        class="location-btn px-8 py-4 rounded-full font-bold transition-all duration-300">
                        Pokhara Services
                    </button>
                </div>
            </div>

            <!-- KATHMANDU SERVICES -->
            <div id="kathmanduServices" class="grid md:grid-cols-2 xl:grid-cols-3 gap-8">
                <!-- CARD -->
                <div class="service-card bg-white border border-slate-200 hover:border-secondary transition-all duration-300"
                    data-category="travel">
                    <div class="p-8">
                        <div class="flex justify-between items-center mb-6">
                            <span class="text-secondary font-bold">
                                Travel Medicine
                            </span>
                            <i class="fa-solid fa-earth-asia text-secondary text-2xl">
                            </i>
                        </div>
                        <h3 class="text-primary text-2xl font-black">
                            Travel Health Clinic
                        </h3>
                        <p class="text-slate-600 mt-4 leading-7">
                            Vaccinations, travel consultations
                            and preventive healthcare.
                        </p>
                        <div class="mt-6 pt-6 border-t">
                            <a href="#" class="font-semibold text-primary hover:text-secondary">
                                Learn More →
                            </a>
                        </div>
                    </div>
                </div>
                <!-- CARD -->
                <div class="service-card bg-white border border-slate-200 hover:border-secondary transition-all duration-300"
                    data-category="screening">
                    <div class="p-8">
                        <div class="flex justify-between items-center mb-6">
                            <span class="text-secondary font-bold">
                                Preventive Care
                            </span>
                            <i class="fa-solid fa-heart-pulse text-primary text-2xl">
                            </i>
                        </div>
                        <h3 class="text-primary text-2xl font-black">
                            Health Screening
                        </h3>
                        <p class="text-slate-600 mt-4 leading-7">
                            Executive checkups and wellness
                            screening programs.
                        </p>
                        <div class="mt-6 pt-6 border-t">
                            <a href="#" class="font-semibold text-primary hover:text-secondary">
                                Learn More →
                            </a>
                        </div>
                    </div>
                </div>
                <!-- MORE CARDS HERE -->
            </div>
            <!-- POKHARA SERVICES -->
            <div id="pokharaServices" class="hidden grid md:grid-cols-2 xl:grid-cols-3 gap-8">
                <!-- Pokhara Cards -->
                <div class="service-card bg-white border border-slate-200 hover:border-secondary transition-all duration-300"
                    data-category="screening">
                    <div class="p-8">
                        <div class="flex justify-between items-center mb-6">
                            <span class="text-secondary font-bold">
                                Preventive Care
                            </span>
                            <i class="fa-solid fa-heart-pulse text-primary text-2xl">
                            </i>
                        </div>
                        <h3 class="text-primary text-2xl font-black">
                            Health Screening
                        </h3>
                        <p class="text-slate-600 mt-4 leading-7">
                            Executive checkups and wellness
                            screening programs.
                        </p>
                        <div class="mt-6 pt-6 border-t">
                            <a href="#" class="font-semibold text-primary hover:text-secondary">
                                Learn More →
                            </a>
                        </div>
                    </div>
                </div>
                <!-- CARD -->
                <div class="service-card bg-white border border-slate-200 hover:border-secondary transition-all duration-300"
                    data-category="travel">
                    <div class="p-8">
                        <div class="flex justify-between items-center mb-6">
                            <span class="text-secondary font-bold">
                                Travel Medicine
                            </span>
                            <i class="fa-solid fa-earth-asia text-secondary text-2xl">
                            </i>
                        </div>
                        <h3 class="text-primary text-2xl font-black">
                            Travel Health Clinic(PKH)
                        </h3>
                        <p class="text-slate-600 mt-4 leading-7">
                            Vaccinations, travel consultations
                            and preventive healthcare.
                        </p>
                        <div class="mt-6 pt-6 border-t">
                            <a href="#" class="font-semibold text-primary hover:text-secondary">
                                Learn More →
                            </a>
                        </div>
                    </div>
                </div>
                <!-- CARD -->
                <div class="service-card bg-white border border-slate-200 hover:border-secondary transition-all duration-300"
                    data-category="screening">
                    <div class="p-8">
                        <div class="flex justify-between items-center mb-6">
                            <span class="text-secondary font-bold">
                                Preventive Care
                            </span>
                            <i class="fa-solid fa-heart-pulse text-primary text-2xl">
                            </i>
                        </div>
                        <h3 class="text-primary text-2xl font-black">
                            Health Screening
                        </h3>
                        <p class="text-slate-600 mt-4 leading-7">
                            Executive checkups and wellness
                            screening programs.
                        </p>
                        <div class="mt-6 pt-6 border-t">
                            <a href="#" class="font-semibold text-primary hover:text-secondary">
                                Learn More →
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        const kathmanduBtn =
            document.getElementById("kathmanduBtn");

        const pokharaBtn =
            document.getElementById("pokharaBtn");

        const kathmanduServices =
            document.getElementById("kathmanduServices");

        const pokharaServices =
            document.getElementById("pokharaServices");

        kathmanduBtn.addEventListener("click", () => {

            kathmanduBtn.classList.add("active-location");
            pokharaBtn.classList.remove("active-location");

            kathmanduServices.classList.remove("hidden");
            pokharaServices.classList.add("hidden");
        });

        pokharaBtn.addEventListener("click", () => {

            pokharaBtn.classList.add("active-location");
            kathmanduBtn.classList.remove("active-location");

            pokharaServices.classList.remove("hidden");
            kathmanduServices.classList.add("hidden");
        });
    </script>

    <section class="section-padding bg-slate-100 overflow-hidden">
        <div class="container-custom">
            <!-- HEADER -->
            <div class="text-center max-w-4xl mx-auto mb-12">
                <span class="section-subtitle">
                    Patient Experience
                </span>
                <h2 class="section-title">
                    Your Healthcare Journey At CIWEC
                </h2>
                <p class="text-slate-600 mt-6 leading-8">
                    From your first appointment to recovery and follow-up care,
                    our healthcare team is committed to supporting you at every step.
                </p>
            </div>
            <!-- TIMELINE -->
            <div class="relative">
                <!-- DESKTOP LINE -->
                <div class="hidden xl:block absolute top-16 left-0 right-0 h-[2px] bg-slate-200">
                </div>
                <div class="grid md:grid-cols-2 xl:grid-cols-5 gap-8">
                    <!-- STEP 1 -->
                    <div class="relative text-center group">
                        <div
                            class="w-32 h-32 mx-auto bg-primary text-white flex items-center justify-center rounded-full relative z-10 shadow-xl">
                            <i class="fa-solid fa-calendar-check text-4xl">
                            </i>
                        </div>
                        <div class="mt-8">
                            <span class="text-secondary font-bold">
                                STEP 01
                            </span>
                            <h3 class="text-primary text-2xl font-black mt-3">
                                Book Appointment
                            </h3>
                            <p class="text-slate-600 mt-4 leading-7">
                                Schedule your visit online,
                                by phone or directly at our hospital.
                            </p>
                        </div>
                    </div>
                    <!-- STEP 2 -->
                    <div class="relative text-center group">
                        <div
                            class="w-32 h-32 mx-auto bg-secondary text-white flex items-center justify-center rounded-full relative z-10 shadow-xl">
                            <i class="fa-solid fa-user-doctor text-4xl">
                            </i>
                        </div>
                        <div class="mt-8">
                            <span class="text-secondary font-bold">
                                STEP 02
                            </span>
                            <h3 class="text-primary text-2xl font-black mt-3">
                                Consultation
                            </h3>
                            <p class="text-slate-600 mt-4 leading-7">
                                Meet with experienced physicians
                                and healthcare specialists.
                            </p>
                        </div>
                    </div>
                    <!-- STEP 3 -->
                    <div class="relative text-center group">
                        <div
                            class="w-32 h-32 mx-auto bg-primary text-white flex items-center justify-center rounded-full relative z-10 shadow-xl">
                            <i class="fa-solid fa-microscope text-4xl">
                            </i>
                        </div>
                        <div class="mt-8">
                            <span class="text-secondary font-bold">
                                STEP 03
                            </span>
                            <h3 class="text-primary text-2xl font-black mt-3">
                                Diagnosis
                            </h3>
                            <p class="text-slate-600 mt-4 leading-7">
                                Advanced diagnostics and testing
                                help determine the right treatment.
                            </p>
                        </div>
                    </div>
                    <!-- STEP 4 -->
                    <div class="relative text-center group">
                        <div
                            class="w-32 h-32 mx-auto bg-secondary text-white flex items-center justify-center rounded-full relative z-10 shadow-xl">
                            <i class="fa-solid fa-notes-medical text-4xl">
                            </i>
                        </div>
                        <div class="mt-8">
                            <span class="text-secondary font-bold">
                                STEP 04
                            </span>
                            <h3 class="text-primary text-2xl font-black mt-3">
                                Treatment
                            </h3>
                            <p class="text-slate-600 mt-4 leading-7">
                                Personalized treatment plans
                                tailored to your healthcare needs.
                            </p>
                        </div>
                    </div>
                    <!-- STEP 5 -->
                    <div class="relative text-center group">
                        <div
                            class="w-32 h-32 mx-auto bg-primary text-white flex items-center justify-center rounded-full relative z-10 shadow-xl">
                            <i class="fa-solid fa-heart-circle-check text-4xl">
                            </i>
                        </div>
                        <div class="mt-8">
                            <span class="text-secondary font-bold">
                                STEP 05
                            </span>
                            <h3 class="text-primary text-2xl font-black mt-3">
                                Recovery & Follow-Up
                            </h3>
                            <p class="text-slate-600 mt-4 leading-7">
                                Ongoing care and follow-up support
                                for long-term health and wellness.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding bg-white overflow-hidden">
        <div class="container-custom">
            <!-- HEADER -->
            <div class="text-center max-w-4xl mx-auto mb-12">
                <span class="section-subtitle">
                    World-Class Infrastructure
                </span>
                <h2 class="section-title">
                    Advanced Medical Technology & Facilities
                </h2>
                <p class="text-slate-600 mt-6 leading-8">
                    CIWEC combines experienced healthcare professionals
                    with modern medical technology and advanced facilities
                    to deliver accurate diagnosis and effective treatment.
                </p>
            </div>
            <!-- FEATURED FACILITY -->
            <div class="grid lg:grid-cols-12 gap-0 bg-slate-100 border border-slate-200 overflow-hidden mb-12">
                <!-- IMAGE -->
                <div class="lg:col-span-6">
                    <img src="./assets/img/health/cyclospora.png" alt=""
                        class="w-full h-full min-h-[550px] object-cover">
                </div>
                <!-- CONTENT -->
                <div class="lg:col-span-6 p-10 lg:p-16 flex flex-col justify-center">
                    <span class="text-secondary font-bold uppercase tracking-[3px]">
                        Featured Facility
                    </span>
                    <h3 class="text-primary text-4xl font-black mt-5">
                        Advanced Diagnostic Laboratory
                    </h3>
                    <p class="text-slate-600 mt-6 leading-8">
                        Our state-of-the-art laboratory provides
                        comprehensive diagnostic testing with
                        reliable results, supporting accurate
                        diagnosis and timely treatment decisions.
                    </p>
                    <div class="grid md:grid-cols-2 gap-4 mt-8">
                        <div class="flex items-center gap-3">
                            <i class="fa-solid fa-check text-secondary">
                            </i>
                            <span>
                                Pathology Services
                            </span>
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="fa-solid fa-check text-secondary">
                            </i>
                            <span>
                                Blood Testing
                            </span>
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="fa-solid fa-check text-secondary">
                            </i>
                            <span>
                                Microbiology
                            </span>
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="fa-solid fa-check text-secondary">
                            </i>
                            <span>
                                Rapid Reporting
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FACILITY GRID -->
            <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-8">
                <!-- CARD -->
                <div
                    class="group overflow-hidden bg-white border border-slate-200 hover:border-secondary transition-all duration-500">
                    <div class="overflow-hidden">
                        <img src="./assets/img/radiology.png"
                            class="w-full h-72 object-cover group-hover:scale-110 transition duration-700">
                    </div>
                    <div class="p-8">
                        <h3 class="text-primary text-2xl font-black">
                            Imaging & Radiology
                        </h3>
                        <p class="text-slate-600 mt-4 leading-7">
                            Modern imaging services supporting
                            accurate diagnosis and treatment planning.
                        </p>
                    </div>
                </div>
                <!-- CARD -->
                <div
                    class="group overflow-hidden bg-white border border-slate-200 hover:border-secondary transition-all duration-500">
                    <div class="overflow-hidden">
                        <img src="./assets/img/emergency-unit.png"
                            class="w-full h-72 object-cover group-hover:scale-110 transition duration-700">
                    </div>
                    <div class="p-8">
                        <h3 class="text-primary text-2xl font-black">
                            Emergency Department
                        </h3>
                        <p class="text-slate-600 mt-4 leading-7">
                            Emergency healthcare services
                            available around the clock.
                        </p>
                    </div>
                </div>
                <!-- CARD -->
                <div
                    class="group overflow-hidden bg-white border border-slate-200 hover:border-secondary transition-all duration-500">
                    <div class="overflow-hidden">
                        <img src="./assets/img/travel-clinic.png"
                            class="w-full h-72 object-cover group-hover:scale-110 transition duration-700">
                    </div>
                    <div class="p-8">
                        <h3 class="text-primary text-2xl font-black">
                            Travel Health Clinic
                        </h3>
                        <p class="text-slate-600 mt-4 leading-7">
                            Specialized travel medicine,
                            vaccinations and consultations.
                        </p>
                    </div>
                </div>
                <!-- CARD -->
                <div
                    class="group overflow-hidden bg-white border border-slate-200 hover:border-secondary transition-all duration-500">
                    <div class="overflow-hidden">
                        <img src="./assets/img/vaccination-center.png"
                            class="w-full h-72 object-cover group-hover:scale-110 transition duration-700">
                    </div>
                    <div class="p-8">
                        <h3 class="text-primary text-2xl font-black">
                            Vaccination Center
                        </h3>
                        <p class="text-slate-600 mt-4 leading-7">
                            Comprehensive vaccination
                            and immunization services.
                        </p>
                    </div>
                </div>
                <!-- CARD -->
                <div
                    class="group overflow-hidden bg-white border border-slate-200 hover:border-secondary transition-all duration-500">
                    <div class="overflow-hidden">
                        <img src="./assets/img/inpatient-care.png"
                            class="w-full h-72 object-cover group-hover:scale-110 transition duration-700">
                    </div>
                    <div class="p-8">
                        <h3 class="text-primary text-2xl font-black">
                            Inpatient Facilities
                        </h3>
                        <p class="text-slate-600 mt-4 leading-7">
                            Comfortable patient rooms
                            designed for quality recovery.
                        </p>
                    </div>
                </div>
                <!-- CARD -->
                <div
                    class="group overflow-hidden bg-white border border-slate-200 hover:border-secondary transition-all duration-500">
                    <div class="overflow-hidden">
                        <img src="./assets/img/health-screening.png"
                            class="w-full h-72 object-cover group-hover:scale-110 transition duration-700">
                    </div>
                    <div class="p-8">
                        <h3 class="text-primary text-2xl font-black">
                            Health Screening Center
                        </h3>
                        <p class="text-slate-600 mt-4 leading-7">
                            Executive and preventive
                            health screening programs.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
