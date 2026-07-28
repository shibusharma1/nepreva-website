@extends('themes.default.common.master')
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('content')
    <section class="section-padding bg-white">
        <div class="container-custom">
            <div class="max-w-4xl mx-auto text-center">
                <span class="section-subtitle">
                    Explore CIWEC
                </span>
                <h2 class="section-title">
                    Moments That Define Our Journey
                </h2>
                <p class="mt-6 text-slate-600 leading-8">
                    Explore photographs and videos showcasing
                    our healthcare services, medical professionals,
                    events, facilities and milestones throughout
                    CIWEC's history.
                </p>
            </div>
        </div>
        <div class="container-custom mt-8">
            <div class="flex
            flex-wrap
            justify-center
            gap-3">
                <button class="gallery-filter active" data-filter="all">
                    All
                </button>
                <button class="gallery-filter" data-filter="hospital">
                    Hospital
                </button>
                <button class="gallery-filter" data-filter="doctors">
                    Doctors
                </button>
                <button class="gallery-filter" data-filter="events">
                    Events
                </button>
                <button class="gallery-filter" data-filter="facilities">
                    Facilities
                </button>
                <!-- <button
                    class="gallery-filter"
                    data-filter="community">
                    Community Outreach
                    </button> -->
                <button class="gallery-filter" data-filter="research">
                    Research
                </button>
            </div>
        </div>
        <div class="container-custom mt-8">
            <div id="galleryGrid" class="grid md:grid-cols-2 xl:grid-cols-4 gap-6">
                <!-- HOSPITAL -->
                <div class="gallery-item hospital">
                    <img src="./assets/img/history/history1.webp" class="w-full h-[300px] object-cover">
                </div>
                <div class="gallery-item hospital">
                    <img src="./assets/img/history/history2.webp" class="w-full h-[300px] object-cover">
                </div>
                <!-- DOCTORS -->
                <div class="gallery-item doctors">
                    <img src="./assets/img/history/history3.webp" class="w-full h-[300px] object-cover">
                </div>
                <div class="gallery-item doctors">
                    <img src="./assets/img/doctors/david.png" class="w-full h-[300px] object-cover">
                </div>
                <!-- EVENTS -->
                <div class="gallery-item events">
                    <img src="./assets/img/speciality/img1.jpg" class="w-full h-[300px] object-cover">
                </div>
                <div class="gallery-item events">
                    <img src="./assets/img/speciality/img4.jpg" class="w-full h-[300px] object-cover">
                </div>
                <!-- FACILITIES -->
                <div class="gallery-item facilities">
                    <img src="./assets/img/health/healthinformation.png" class="w-full h-[300px] object-cover">
                </div>
                <div class="gallery-item facilities">
                    <img src="./assets/img/health/immunization.png" class="w-full h-[300px] object-cover">
                </div>
            </div>
            <div id="gallery-empty-state" class="hidden">
                <div class="bg-slate-100 border border-slate-200 py-16 px-8 text-center">
                    <div class="w-20 h-20 mx-auto bg-primary/10 flex items-center justify-center mb-6">
                        <i class="fa-solid fa-images text-primary text-3xl">
                        </i>
                    </div>
                    <h3 class="text-primary text-2xl font-black mb-3">
                        No Images Available
                    </h3>
                    <p class="text-slate-600 max-w-lg mx-auto leading-7">
                        There are currently no images available in this category.
                        Please explore other gallery sections or check back later.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding bg-slate-200 overflow-hidden">
        <div class="container-custom">
            <!-- HEADING -->
            <div class="text-center mb-12">
                <span class="section-subtitle">
                    Video Gallery
                </span>
                <h2 class="section-title">
                    Stories In Motion
                </h2>
                <p class="max-w-3xl mx-auto
                text-slate-600
                mt-6
                leading-8">
                    Explore videos highlighting CIWEC's healthcare
                    services, community initiatives, medical expertise
                    and memorable moments throughout our journey.
                </p>
            </div>
            <!-- VIDEOS -->
            <div class="grid
            md:grid-cols-2
            xl:grid-cols-3
            gap-8">
                <!-- VIDEO -->
                <div
                    class="group
                bg-white
                border
                border-slate-200
                overflow-hidden
                hover:border-secondary
                hover:-translate-y-2
                transition-all duration-500">
                    <div class="relative
                    overflow-hidden">
                        <img src="./assets/img/history/history1.webp"
                            class="w-full
                        h-[260px]
                        object-cover
                        transition-all duration-700
                        group-hover:scale-110">
                        <!-- OVERLAY -->
                        <div
                            class="absolute inset-0
                        bg-primary/40
                        group-hover:bg-primary/60
                        transition-all">
                        </div>
                        <!-- PLAY -->
                        <button
                            class="videoBtn
                        absolute
                        inset-0
                        flex
                        items-center
                        justify-center"
                            data-video="./assets/vdo/banner.mp4">
                            <div
                                class="w-20
                            h-20
                            rounded-full
                            bg-white
                            text-primary
                            flex
                            items-center
                            justify-center
                            shadow-2xl">
                                <i
                                    class="fa-solid fa-play
                                text-xl
                                ml-1">
                                </i>
                            </div>
                        </button>
                    </div>
                    <div class="p-6">
                        <span class="text-secondary
                        font-bold
                        text-sm">
                            Documentary
                        </span>
                        <h3
                            class="text-primary
                        text-xl
                        font-black
                        mt-3">
                            The CIWEC Story
                        </h3>
                        <p class="text-slate-600
                        mt-4
                        leading-7">
                            A journey through more than four decades
                            of healthcare excellence.
                        </p>
                    </div>
                </div>
                <!-- VIDEO -->
                <div
                    class="group
                bg-white
                border
                border-slate-200
                overflow-hidden
                hover:border-secondary
                hover:-translate-y-2
                transition-all duration-500">
                    <div class="relative
                    overflow-hidden">
                        <img src="./assets/img/history/history2.webp"
                            class="w-full
                        h-[260px]
                        object-cover
                        transition-all duration-700
                        group-hover:scale-110">
                        <div class="absolute inset-0
                        bg-primary/40">
                        </div>
                        <button
                            class="videoBtn
                        absolute
                        inset-0
                        flex
                        items-center
                        justify-center"
                            data-video="./assets/vdo/banner.mp4">
                            <div
                                class="w-20 h-20
                            rounded-full
                            bg-white
                            text-primary
                            flex items-center justify-center">
                                <i class="fa-solid fa-play
                                text-xl ml-1">
                                </i>
                            </div>
                        </button>
                    </div>
                    <div class="p-6">
                        <span class="text-secondary
                        font-bold
                        text-sm">
                            Medical Camp
                        </span>
                        <h3
                            class="text-primary
                        text-xl
                        font-black
                        mt-3">
                            Community Outreach Program
                        </h3>
                        <p class="text-slate-600
                        mt-4
                        leading-7">
                            Bringing quality healthcare services
                            beyond hospital walls.
                        </p>
                    </div>
                </div>
                <!-- VIDEO -->
                <div
                    class="group
                bg-white
                border
                border-slate-200
                overflow-hidden
                hover:border-secondary
                hover:-translate-y-2
                transition-all duration-500">
                    <div class="relative
                    overflow-hidden">
                        <img src="./assets/img/history/history3.webp"
                            class="w-full
                        h-[260px]
                        object-cover
                        transition-all duration-700
                        group-hover:scale-110">
                        <div class="absolute inset-0
                        bg-primary/40">
                        </div>
                        <button
                            class="videoBtn
                        absolute
                        inset-0
                        flex
                        items-center
                        justify-center"
                            data-video="./assets/vdo/banner.mp4">
                            <div
                                class="w-20 h-20
                            rounded-full
                            bg-white
                            text-primary
                            flex items-center justify-center">
                                <i class="fa-solid fa-play
                                text-xl ml-1">
                                </i>
                            </div>
                        </button>
                    </div>
                    <div class="p-6">
                        <span class="text-secondary
                        font-bold
                        text-sm">
                            Health Education
                        </span>
                        <h3
                            class="text-primary
                        text-xl
                        font-black
                        mt-3">
                            Doctor Insights & Awareness
                        </h3>
                        <p class="text-slate-600
                        mt-4
                        leading-7">
                            Expert healthcare guidance from
                            CIWEC specialists.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================= -->
    <!-- VIDEO MODAL -->
    <!-- ========================================= -->
    <div id="videoModal" class="fixed inset-0 z-[9999] hidden">
        <div id="videoOverlay" class="absolute inset-0 bg-black/90">
        </div>
        <div class="relative
        flex
        items-center
        justify-center
        h-screen
        p-4">
            <button id="closeVideo"
                class="absolute
            top-6
            right-6
            text-white
            text-3xl
            z-10">
                <i class="fa-solid fa-xmark"></i>
            </button>
            <div class="w-full
            max-w-6xl
            aspect-video">
                <iframe id="videoFrame" class="w-full h-full" src="" allowfullscreen>
                </iframe>
            </div>
        </div>
    </div>

    <script>
        const videoBtns =
            document.querySelectorAll(".videoBtn");
        const videoModal =
            document.getElementById("videoModal");
        const videoFrame =
            document.getElementById("videoFrame");
        const closeVideo =
            document.getElementById("closeVideo");
        const videoOverlay =
            document.getElementById("videoOverlay");
        videoBtns.forEach(btn => {
            btn.addEventListener("click", () => {
                videoFrame.src =
                    btn.dataset.video + "?autoplay=1";
                videoModal.classList.remove("hidden");
                document.body.style.overflow =
                    "hidden";
            });
        });

        function closeVideoModal() {
            videoModal.classList.add("hidden");
            videoFrame.src = "";
            document.body.style.overflow = "";
        }

        closeVideo.addEventListener(
            "click",
            closeVideoModal
        );

        videoOverlay.addEventListener(
            "click",
            closeVideoModal
        );
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const filterButtons =
                document.querySelectorAll(".gallery-filter");
            const galleryItems =
                document.querySelectorAll(".gallery-item");

            function filterGallery(filter) {
                const emptyState =
                    document.getElementById("gallery-empty-state");
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

            // Initial state
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
