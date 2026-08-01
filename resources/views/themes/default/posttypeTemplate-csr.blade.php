@extends('themes.default.common.master')
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('content')
       @include('themes.default.common.herobanner')
    <!-- CSR MISSION -->
    <section class="section-padding bg-white overflow-hidden">
        <div class="container-custom">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <!-- LEFT CONTENT -->
                <div>
                    <span class="section-subtitle">
                        Community Responsibility
                    </span>
                    <h2 class="section-title mt-4">
                        Healthcare Beyond Hospital Walls
                    </h2>
                    <p class="mt-8 text-slate-600 leading-8">
                        At CIWEC Hospital, Corporate Social Responsibility is a core part of our mission.
                        We believe quality healthcare should be accessible to everyone, everywhere.
                    </p>
                    <p class="mt-6 text-slate-600 leading-8">
                        Through medical camps, blood donation drives, disaster relief efforts,
                        and community partnerships, we help build healthier and stronger
                        communities across Nepal.
                    </p>
                    <!-- <p class="mt-6 text-slate-600 leading-8">
                   Our CSR programs focus on prevention, education, emergency
                   preparedness, and access to healthcare, ensuring a lasting
                   positive impact on society.
                </p> -->
                    <!-- HIGHLIGHTS -->
                    <div class="grid sm:grid-cols-2 gap-5 mt-10">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-primary/10 flex items-center justify-center flex-shrink-0">
                                <i class="fa-solid fa-heart-pulse text-primary"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-primary">
                                    Free Health Services
                                </h4>
                                <p class="text-slate-500 text-sm mt-1">
                                    Medical camps and preventive care programs.
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-secondary/10 flex items-center justify-center flex-shrink-0">
                                <i class="fa-solid fa-hand-holding-droplet text-secondary"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-primary">
                                    Blood Donation
                                </h4>
                                <p class="text-slate-500 text-sm mt-1">
                                    Supporting lifesaving donation initiatives.
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-primary/10 flex items-center justify-center flex-shrink-0">
                                <i class="fa-solid fa-kit-medical text-primary"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-primary">
                                    First Aid Training
                                </h4>
                                <p class="text-slate-500 text-sm mt-1">
                                    Empowering communities with emergency skills.
                                </p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-secondary/10 flex items-center justify-center flex-shrink-0">
                                <i class="fa-solid fa-people-group text-secondary"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-primary">
                                    Community Engagement
                                </h4>
                                <p class="text-slate-500 text-sm mt-1">
                                    Supporting local events and social initiatives.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- RIGHT CONTENT -->
                <div class="relative">
                    <!-- MAIN IMAGE -->
                    <img src="./assets/img/csr-main.png" alt="CIWEC CSR"
                        class="w-full h-[600px] object-cover shadow-[0_25px_60px_rgba(0,0,0,.10)]">
                    <!-- FLOATING CARD -->
                    <div class="absolute bottom-8 left-8 bg-white p-6 shadow-xl max-w-[260px]">
                        <span class="text-secondary font-bold">
                            Since 1982
                        </span>
                        <h4 class="text-primary text-xl font-black mt-2">
                            Serving Communities Across Nepal
                        </h4>
                        <p class="text-slate-500 text-sm mt-3">
                            Delivering healthcare outreach, education and
                            humanitarian support for more than four decades.
                        </p>
                    </div>
                    <!-- TOP BADGE -->
                    <div class="absolute top-6 right-6 bg-primary text-white px-5 py-3 shadow-lg">
                        <div class="text-3xl font-black">
                            42+
                        </div>
                        <div class="text-xs uppercase tracking-wide">
                            Years of Impact
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-padding bg-slate-200 overflow-hidden">
        <div class="container-custom">
            <!-- HEADING -->
            <div class="text-center max-w-4xl mx-auto mb-12">
                <span class="section-subtitle">
                    Our Initiatives
                </span>
                <h2 class="section-title">
                    Featured CSR Programs
                </h2>
                <p class="text-slate-600 mt-6 leading-8">
                    Our CSR activities focus on healthcare accessibility,
                    education, emergency preparedness, environmental
                    responsibility, and community wellbeing.
                </p>
            </div>
            <!-- PROGRAMS -->
            <div class="grid lg:grid-cols-2 gap-8">
                <!-- FIRST AID TRAINING -->
                <div
                    class="group bg-slate-100 border border-slate-200 hover:border-secondary transition-all duration-500 overflow-hidden">
                    <div class="grid md:grid-cols-2">
                        <div class="overflow-hidden">
                            <img src="./assets/img/csr-firstaid.png"
                                class="w-full h-full object-cover transition-all duration-700 group-hover:scale-110">
                        </div>
                        <div class="p-8">
                            <div class="w-14 h-14 bg-primary/10 flex items-center justify-center mb-5">
                                <i class="fa-solid fa-kit-medical text-primary text-xl"></i>
                            </div>
                            <h3 class="text-primary text-2xl font-black">
                                Free First Aid Training
                            </h3>
                            <p class="text-slate-600 mt-5 leading-7">
                                Training schools, businesses,
                                trekking guides and communities
                                with lifesaving emergency response skills.
                            </p>
                            <div class="mt-6">
                                <span class="inline-flex items-center gap-2 text-secondary font-semibold">
                                    <i class="fa-solid fa-users"></i>
                                    1,500+ Participants Trained
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- BLOOD DONATION -->
                <div
                    class="group bg-slate-100 border border-slate-200 hover:border-secondary transition-all duration-500 overflow-hidden">
                    <div class="grid md:grid-cols-2">
                        <div class="overflow-hidden">
                            <img src="./assets/img/csr-blood.png"
                                class="w-full h-full object-cover transition-all duration-700 group-hover:scale-110">
                        </div>
                        <div class="p-8">
                            <div class="w-14 h-14 bg-secondary/10 flex items-center justify-center mb-5">
                                <i class="fa-solid fa-droplet text-secondary text-xl"></i>
                            </div>
                            <h3 class="text-primary text-2xl font-black">
                                Blood Donation Camps
                            </h3>
                            <p class="text-slate-600 mt-5 leading-7">
                                Organizing regular donation drives
                                to support emergency care and
                                lifesaving medical treatments.
                            </p>
                            <div class="mt-6">
                                <span class="inline-flex items-center gap-2 text-secondary font-semibold">
                                    <i class="fa-solid fa-heart"></i>
                                    Hundreds Of Lives Supported
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- MEDICAL CAMPS -->
                <div
                    class="group bg-slate-100 border border-slate-200 hover:border-secondary transition-all duration-500 overflow-hidden">
                    <div class="grid md:grid-cols-2">
                        <div class="overflow-hidden">
                            <img src="./assets/img/csr-medicalcamp.png"
                                class="w-full h-full object-cover transition-all duration-700 group-hover:scale-110">
                        </div>
                        <div class="p-8">
                            <div class="w-14 h-14 bg-primary/10 flex items-center justify-center mb-5">
                                <i class="fa-solid fa-stethoscope text-primary text-xl"></i>
                            </div>
                            <h3 class="text-primary text-2xl font-black">
                                Free Medical Camps
                            </h3>
                            <p class="text-slate-600 mt-5 leading-7">
                                Bringing healthcare services directly
                                to underserved communities throughout Nepal.
                            </p>
                            <div class="mt-6">
                                <span class="inline-flex items-center gap-2 text-secondary font-semibold">
                                    <i class="fa-solid fa-user-doctor"></i>
                                    Rural Healthcare Outreach
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- COMMUNITY -->
                <div
                    class="group bg-slate-100 border border-slate-200 hover:border-secondary transition-all duration-500 overflow-hidden">
                    <div class="grid md:grid-cols-2">
                        <div class="overflow-hidden">
                            <img src="./assets/img/csr-community.png"
                                class="w-full h-full object-cover transition-all duration-700 group-hover:scale-110">
                        </div>
                        <div class="p-8">
                            <div class="w-14 h-14 bg-secondary/10 flex items-center justify-center mb-5">
                                <i class="fa-solid fa-people-group text-secondary text-xl"></i>
                            </div>
                            <h3 class="text-primary text-2xl font-black">
                                Community Support Programs
                            </h3>
                            <p class="text-slate-600 mt-5 leading-7">
                                Supporting local events,
                                awareness campaigns and
                                community wellbeing initiatives.
                            </p>
                            <div class="mt-6">
                                <span class="inline-flex items-center gap-2 text-secondary font-semibold">
                                    <i class="fa-solid fa-handshake-angle"></i>
                                    Strong Local Partnerships
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding bg-white overflow-hidden">
        <div class="container-custom">
            <!-- HEADING -->
            <div class="text-center max-w-4xl mx-auto mb-12">
                <span class="section-subtitle">
                    Real Impact
                </span>
                <h2 class="section-title">
                    Stories From The Communities We Serve
                </h2>
                <p class="text-slate-600 mt-6 leading-8">
                    Behind every initiative are real people whose lives
                    have been positively impacted through healthcare,
                    education, emergency preparedness and community support.
                </p>
            </div>
            <!-- STORIES -->
            <div class="grid lg:grid-cols-3 gap-8">
                <!-- STORY -->
                <div class="group bg-slate-100 border border-slate-200 hover:border-secondary transition-all duration-500">
                    <div class="p-8">
                        <!-- QUOTE -->
                        <div class="w-14 h-14 bg-primary/10 flex items-center justify-center mb-6">
                            <i class="fa-solid fa-quote-left text-primary text-xl">
                            </i>
                        </div>
                        <p class="text-slate-600 leading-8 italic">
                            The first aid training provided by CIWEC
                            helped our school staff respond quickly
                            during a medical emergency. The skills
                            learned continue to benefit our students
                            every day.
                        </p>
                        <!-- PERSON -->
                        <div class="flex items-center gap-4 mt-8 pt-6 border-t border-slate-200">
                            <img src="./assets/img/doctors/doc2.png" class="w-14 h-14 rounded-full object-cover">
                            <div>
                                <h4 class="text-primary font-bold">
                                    Sita Sharma
                                </h4>
                                <p class="text-slate-500 text-sm">
                                    School Administrator
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- STORY -->
                <div class="group bg-slate-100 border border-slate-200 hover:border-secondary transition-all duration-500">
                    <div class="p-8">
                        <div class="w-14 h-14 bg-secondary/10 flex items-center justify-center mb-6">
                            <i class="fa-solid fa-quote-left text-secondary text-xl">
                            </i>
                        </div>
                        <p class="text-slate-600 leading-8 italic">
                            Through CIWEC's free health camp,
                            many residents in our community
                            received healthcare consultations
                            that otherwise would not have been accessible.
                        </p>
                        <div class="flex items-center gap-4 mt-8 pt-6 border-t border-slate-200">
                            <img src="./assets/img/csr-main.png" class="w-14 h-14 rounded-full object-cover">
                            <div>
                                <h4 class="text-primary font-bold">
                                    Ram Bahadur Thapa
                                </h4>
                                <p class="text-slate-500 text-sm">
                                    Community Leader
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- STORY -->
                <div class="group bg-slate-100 border border-slate-200 hover:border-secondary transition-all duration-500">
                    <div class="p-8">
                        <div class="w-14 h-14 bg-primary/10 flex items-center justify-center mb-6">
                            <i class="fa-solid fa-quote-left text-primary text-xl">
                            </i>
                        </div>
                        <p class="text-slate-600 leading-8 italic">
                            The blood donation campaign organized by
                            CIWEC encouraged many young people to become
                            regular donors and contribute to saving lives.
                        </p>
                        <div class="flex items-center gap-4 mt-8 pt-6 border-t border-slate-200">
                            <img src="./assets/img/doctors/doc3.jpg" class="w-14 h-14 rounded-full object-cover">
                            <div>
                                <h4 class="text-primary font-bold">
                                    Anish Karki
                                </h4>
                                <p class="text-slate-500 text-sm">
                                    Volunteer Donor
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FEATURED STORY -->
            <div class="mt-20 bg-primary overflow-hidden">
                <div class="grid lg:grid-cols-12 items-center">
                    <!-- IMAGE -->
                    <div class="lg:col-span-5">
                        <img src="./assets/img/csr-main.png" class="w-full h-full object-cover">
                    </div>
                    <!-- CONTENT -->
                    <div class="lg:col-span-7 p-10 lg:p-16">
                        <span class="text-secondary font-bold uppercase tracking-[2px]">
                            Featured Story
                        </span>
                        <h3 class="text-white text-4xl font-black mt-4">
                            Building Healthier Communities Together
                        </h3>
                        <p class="text-white/80 mt-6 leading-8">
                            Over the years, CIWEC's CSR initiatives have
                            reached thousands of individuals through free
                            healthcare services, emergency response training,
                            awareness campaigns and community partnerships.
                        </p>
                        <p class="text-white/80 mt-6 leading-8">
                            Every program is designed not only to provide
                            immediate support but also to create long-term
                            positive change for communities throughout Nepal.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", () => {

            const filterButtons =
                document.querySelectorAll(".csr-filter");

            const galleryItems =
                document.querySelectorAll(".csr-item");

            const emptyState =
                document.getElementById("csr-empty-state");

            function filterGallery(filter) {

                let visibleCount = 0;

                galleryItems.forEach(item => {

                    if (
                        filter === "all" ||
                        item.classList.contains(filter)
                    ) {

                        item.style.display = "block";
                        visibleCount++;

                    } else {

                        item.style.display = "none";

                    }

                });

                if (visibleCount === 0) {

                    emptyState.classList.remove("hidden");

                } else {

                    emptyState.classList.add("hidden");

                }

            }

            // Initial State
            filterGallery("all");

            filterButtons.forEach(button => {

                button.addEventListener("click", () => {

                    const filter =
                        button.dataset.filter;

                    filterButtons.forEach(btn => {
                        btn.classList.remove("active");
                    });

                    button.classList.add("active");

                    filterGallery(filter);

                });

            });

        });
    </script>
@endsection
