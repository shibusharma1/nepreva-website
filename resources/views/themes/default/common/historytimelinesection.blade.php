@if ($history->isNotEmpty())
    @php
        $firstHistory = $history->first();

        $historyData = $history->mapWithKeys(function ($item) {
            return [
                (string) $item->id => [
                    'year' => $item->sub_title ?? '',
                    'title' => $item->post_title ?? '',
                    'description' => $item->post_excerpt ?? '',
                    'image' => !empty($item->banner)
                        ? asset('uploads/medium/' . $item->banner)
                        : asset('themes-assets/img/ciwec.webp'),
                ],
            ];
        });
    @endphp

    <section
        id="history-section"
        class="section-padding bg-slate-100 relative overflow-clip"
    >

        <!-- BACKGROUND -->
        <div class="absolute inset-0 z-0 pointer-events-none hidden lg:block">
            {{-- <img
                src="{{ asset('themes-assets/img/bg-img4.webp') }}"
                class="sticky top-0 w-full h-screen object-cover opacity-40"
                alt=""
                aria-hidden="true"
            > --}}
        </div>

        <div class="relative z-10 container-custom">

            <!-- =======================================================
                 DESKTOP SCROLL AREA
                 ======================================================= -->

            <div
                id="history-scroll-container"
                class="hidden lg:block relative"
            >

                <!-- ===================================================
                     COMPLETE STICKY CONTENT
                     HEADER + TIMELINE + CARD
                     =================================================== -->

                <div
                    id="history-sticky"
                    class="sticky top-24 z-20"
                >

                    <!-- HEADER -->
                    <div class="max-w-3xl mb-5 lg:mb-6">

                        <span class="inline-flex items-center gap-2 text-secondary text-xs font-semibold uppercase tracking-[3px] mb-4">
                            <span class="w-2 h-2 bg-secondary"></span>
                            Our Journey
                        </span>

                        <h2 class="text-primary text-2xl md:text-3xl font-black leading-tight mb-6">
                            Over Four Decades of Healthcare Excellence
                        </h2>

                        <p class="text-slate-600 mt-5 text-base md:text-lg leading-8">
                            Since 1982, CIWEC has evolved from a travel medicine clinic into
                            one of Nepal's most trusted international healthcare providers.
                        </p>

                    </div>


                    <!-- DESKTOP TIMELINE -->
                    <div class="mb-5 lg:mb-6">

                        <div class="relative">

                            <div class="absolute left-0 right-0 top-1/2 h-px bg-slate-300"></div>

                            <div class="flex justify-between">

                                @foreach ($history as $historyItem)

                                    <button
                                        type="button"
                                        class="history-year {{ $loop->first ? 'active' : '' }} relative z-10 flex flex-col items-center"
                                        data-history-id="{{ $historyItem->id }}"
                                        data-history-index="{{ $loop->index }}"
                                    >

                                        <span
                                            class="history-year-dot w-5 h-5 rounded-full border-4 border-white {{ $loop->first ? 'bg-secondary' : 'bg-slate-300' }} shadow-lg mb-4 transition-all duration-300"
                                        ></span>

                                        <span class="font-bold text-primary text-sm">
                                            {{ $historyItem->sub_title }}
                                        </span>

                                    </button>

                                @endforeach

                            </div>

                        </div>

                    </div>


                    <!-- EXISTING CONTENT CARD -->
                    <div class="grid lg:grid-cols-12 bg-white border border-slate-200 overflow-hidden rounded-sm shadow-sm">

                        <!-- IMAGE -->
                        <div class="lg:col-span-5">

                            <img
                                id="historyImage"
                                src="{{ !empty($firstHistory->banner)
                                    ? asset('uploads/medium/' . $firstHistory->banner)
                                    : asset('themes-assets/img/ciwec.webp') }}"
                                alt="{{ $firstHistory->post_title }}"
                                class="w-full h-56 sm:h-64 md:h-80 lg:h-[430px] object-cover"
                            >

                        </div>


                        <!-- CONTENT -->
                        <div class="lg:col-span-7 flex items-center">

                            <div class="p-5 sm:p-6 lg:p-8">

                                <span
                                    id="historyYear"
                                    class="inline-flex items-center gap-2 text-secondary text-sm font-bold uppercase tracking-[2px] mb-4"
                                >
                                    {{ $firstHistory->sub_title }}
                                </span>

                                <h3
                                    id="historyTitle"
                                    class="text-xl md:text-2xl lg:text-3xl font-black leading-tight mb-3"
                                >
                                    {{ $firstHistory->post_title }}
                                </h3>

                                <div class="w-16 h-[3px] bg-secondary mb-5"></div>

                                <p
                                    id="historyDescription"
                                    class="text-slate-600 text-sm md:text-base leading-6 max-w-2xl"
                                >
                                    {{ $firstHistory->post_excerpt }}
                                </p>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- INVISIBLE SCROLL SPACE -->
                <div
                    id="history-scroll-space"
                    class="absolute inset-x-0 top-0 pointer-events-none"
                    aria-hidden="true"
                ></div>

            </div>


            <!-- =======================================================
                 MOBILE LAYOUT
                 ======================================================= -->

            <div class="lg:hidden">

                <!-- CONTENT CARD -->
                <div class="grid bg-white border border-slate-200 overflow-hidden rounded-xl shadow-sm mb-6">

                    <!-- IMAGE -->
                    <div>

                        <img
                            id="historyImageMobile"
                            src="{{ !empty($firstHistory->banner)
                                ? asset('uploads/medium/' . $firstHistory->banner)
                                : asset('themes-assets/img/ciwec.webp') }}"
                            alt="{{ $firstHistory->post_title }}"
                            class="w-full h-[clamp(220px,38vh,340px)] object-cover"
                        >

                    </div>


                    <!-- CONTENT -->
                    <div class="flex items-center">

                        <div class="p-5 sm:p-6 md:p-8">

                            <span
                                id="historyYearMobile"
                                class="inline-flex items-center gap-2 text-secondary text-sm font-bold uppercase tracking-[2px] mb-4"
                            >
                                {{ $firstHistory->sub_title }}
                            </span>

                            <h3
                                id="historyTitleMobile"
                                class="text-2xl md:text-3xl font-black leading-tight mb-4"
                            >
                                {{ $firstHistory->post_title }}
                            </h3>

                            <div class="w-16 h-[3px] bg-secondary mb-5"></div>

                            <p
                                id="historyDescriptionMobile"
                                class="text-slate-600 text-base md:text-lg leading-7"
                            >
                                {{ $firstHistory->post_excerpt }}
                            </p>

                        </div>

                    </div>

                </div>


                <!-- MOBILE TIMELINE -->
                <div class="space-y-3">

                    @foreach ($history as $historyItem)

                        <button
                            type="button"
                            class="history-year {{ $loop->first ? 'active' : '' }} w-full text-left flex items-start gap-4 {{ $loop->first ? 'p-3 sm:p-4' : 'p-4' }} bg-white border border-slate-200 hover:border-secondary transition-all duration-300"
                            data-history-id="{{ $historyItem->id }}"
                            data-history-index="{{ $loop->index }}"
                        >

                            <span class="flex flex-col items-center mt-1">

                                <span
                                    class="history-year-dot w-4 h-4 rounded-full {{ $loop->first ? 'bg-secondary' : 'bg-slate-300' }} border-4 border-white shadow transition-all duration-300"
                                ></span>

                            </span>

                            <div>

                                <h4 class="font-bold text-primary text-base sm:text-lg">
                                    {{ $historyItem->sub_title }}
                                </h4>

                                <p class="text-slate-600 text-sm mt-1 leading-6">
                                    {{ $historyItem->post_title }}
                                </p>

                            </div>

                        </button>

                    @endforeach

                </div>

            </div>

        </div>

    </section>


    <!-- =============================================================
         HISTORY DATA
         ============================================================= -->

    <script type="application/json" id="historyData">
        {!! json_encode(
            $historyData,
            JSON_HEX_TAG |
            JSON_HEX_APOS |
            JSON_HEX_AMP |
            JSON_HEX_QUOT |
            JSON_UNESCAPED_UNICODE |
            JSON_UNESCAPED_SLASHES
        ) !!}
    </script>


    <script>
        document.addEventListener("DOMContentLoaded", function () {

            const section = document.getElementById("history-section");

            const scrollContainer = document.getElementById(
                "history-scroll-container"
            );

            const scrollSpace = document.getElementById(
                "history-scroll-space"
            );

            const sticky = document.getElementById("history-sticky");

            const dataElement = document.getElementById("historyData");

            const buttons = document.querySelectorAll(".history-year");

            if (
                !section ||
                !scrollContainer ||
                !scrollSpace ||
                !sticky ||
                !dataElement ||
                !buttons.length
            ) {
                return;
            }


            /* ========================================================
               DATA
               ======================================================== */

            let historyData = {};

            try {
                historyData = JSON.parse(dataElement.textContent);
            } catch (error) {
                console.error("Unable to parse history data:", error);
                return;
            }


            /* ========================================================
               UNIQUE HISTORY IDS
               ======================================================== */

            const historyIds = [];

            buttons.forEach(function (button) {

                const id = String(button.dataset.historyId);

                if (id && !historyIds.includes(id)) {
                    historyIds.push(id);
                }

            });

            if (!historyIds.length) {
                return;
            }


            /* ========================================================
               ELEMENTS
               ======================================================== */

            const image = document.getElementById("historyImage");
            const year = document.getElementById("historyYear");
            const title = document.getElementById("historyTitle");
            const description = document.getElementById("historyDescription");

            const mobileImage = document.getElementById("historyImageMobile");
            const mobileYear = document.getElementById("historyYearMobile");
            const mobileTitle = document.getElementById("historyTitleMobile");
            const mobileDescription = document.getElementById("historyDescriptionMobile");

            let currentIndex = 0;
            let clickScrolling = false;
            let scrollTimeout = null;
            let ticking = false;


            /* ========================================================
               UPDATE ACTIVE BUTTON
               ======================================================== */

            function updateActiveButton(index) {

                const activeId = String(historyIds[index]);

                buttons.forEach(function (button) {

                    const buttonId = String(button.dataset.historyId);

                    const dot = button.querySelector(".history-year-dot");

                    if (buttonId === activeId) {

                        button.classList.add("active");

                        if (dot) {
                            dot.classList.remove("bg-slate-300");
                            dot.classList.add("bg-secondary");
                        }

                    } else {

                        button.classList.remove("active");

                        if (dot) {
                            dot.classList.remove("bg-secondary");
                            dot.classList.add("bg-slate-300");
                        }

                    }

                });

            }


            /* ========================================================
               SHOW HISTORY
               ======================================================== */

            function showHistory(index) {

                if (index < 0 || index >= historyIds.length) {
                    return;
                }

                const id = String(historyIds[index]);

                const data = historyData[id];

                if (!data) {
                    return;
                }

                currentIndex = index;

                /* Desktop */

                if (year) {
                    year.textContent = data.year || "";
                }

                if (title) {
                    title.textContent = data.title || "";
                }

                if (description) {
                    description.textContent = data.description || "";
                }

                if (image && data.image) {
                    image.src = data.image;
                    image.alt = data.title || "";
                }


                /* Mobile */

                if (mobileYear) {
                    mobileYear.textContent = data.year || "";
                }

                if (mobileTitle) {
                    mobileTitle.textContent = data.title || "";
                }

                if (mobileDescription) {
                    mobileDescription.textContent = data.description || "";
                }

                if (mobileImage && data.image) {
                    mobileImage.src = data.image;
                    mobileImage.alt = data.title || "";
                }

                updateActiveButton(index);

            }


            /* ========================================================
               CREATE INTERNAL SCROLL HEIGHT
               ======================================================== */

            function setupScrollHeight() {

                if (window.innerWidth < 1024) {
                    scrollContainer.style.height = "";
                    return;
                }

                /*
                 * Measure the COMPLETE sticky content:
                 * heading + timeline + card.
                 */

                const visibleHeight = sticky.offsetHeight;

                /*
                 * One viewport of scrolling per additional item.
                 */

                const perItem = Math.round(
                    window.innerHeight * 0.8
                );

                const totalScroll = Math.max(
                    0,
                    (historyIds.length - 1) * perItem
                );

                /*
                 * The container must be tall enough for
                 * the entire sticky content and scrolling.
                 */

                const totalHeight = visibleHeight + totalScroll;

                scrollContainer.style.height = totalHeight + "px";

            }


            /* ========================================================
               GET SCROLL PROGRESS
               ======================================================== */

            function updateFromScroll() {

                if (
                    window.innerWidth < 1024 ||
                    clickScrolling
                ) {
                    return;
                }

                const rect = scrollContainer.getBoundingClientRect();

                /*
                 * Scroll progress starts when the complete
                 * sticky section reaches the top offset.
                 */

                const stickyTop = sticky.offsetTop;

                const travelled = Math.max(
                    0,
                    -rect.top + stickyTop
                );

                const totalScroll =
                    scrollContainer.offsetHeight -
                    sticky.offsetHeight;

                if (totalScroll <= 0) {
                    return;
                }

                let progress = travelled / totalScroll;

                progress = Math.max(
                    0,
                    Math.min(1, progress)
                );

                const index = Math.round(
                    progress * (historyIds.length - 1)
                );

                if (index !== currentIndex) {
                    showHistory(index);
                }

            }


            /* ========================================================
               CLICK TIMELINE
               ======================================================== */

            buttons.forEach(function (button) {

                button.addEventListener("click", function (event) {

                    event.preventDefault();

                    const id = String(this.dataset.historyId);

                    const index = historyIds.indexOf(id);

                    if (index === -1) {
                        return;
                    }

                    showHistory(index);


                    /* DESKTOP */

                    if (window.innerWidth >= 1024) {

                        const totalScroll =
                            scrollContainer.offsetHeight -
                            sticky.offsetHeight;

                        const progress = historyIds.length <= 1
                            ? 0
                            : index / (historyIds.length - 1);

                        const containerTop =
                            scrollContainer.getBoundingClientRect().top +
                            window.scrollY;

                        const target =
                            containerTop +
                            (sticky.offsetTop || 0) +
                            (totalScroll * progress);

                        clickScrolling = true;

                        clearTimeout(scrollTimeout);

                        window.scrollTo({
                            top: target,
                            behavior: "smooth"
                        });

                        scrollTimeout = setTimeout(function () {

                            clickScrolling = false;

                            updateFromScroll();

                        }, 900);

                    }


                    /* MOBILE */

                    else {

                        this.scrollIntoView({
                            behavior: "smooth",
                            block: "center"
                        });

                    }

                });

            });


            /* ========================================================
               SCROLL LISTENER
               ======================================================== */

            window.addEventListener(
                "scroll",
                function () {

                    if (ticking) {
                        return;
                    }

                    ticking = true;

                    requestAnimationFrame(function () {

                        updateFromScroll();

                        ticking = false;

                    });

                },
                {
                    passive: true
                }
            );


            /* ========================================================
               RESIZE
               ======================================================== */

            window.addEventListener("resize", function () {

                setupScrollHeight();

                updateFromScroll();

            });


            /* ========================================================
               INITIALIZE
               ======================================================== */

            showHistory(0);

            setupScrollHeight();

        });
    </script>

@endif