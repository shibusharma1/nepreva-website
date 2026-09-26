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
    <section id="history-section" class="section-padding bg-slate-100 relative overflow-clip">
        <!-- BACKGROUND -->
        <div class="absolute inset-0 z-0 pointer-events-none hidden lg:block">
            {{-- <img src="{{ asset('themes-assets/img/history-bg.png') }}"
                class="sticky top-0 w-full h-screen object-contain opacity-40" alt="" aria-hidden="true"> --}}
        </div>
        <div class="relative z-10 container-custom">
            <!-- DESKTOP SCROLL AREA -->
            <div id="history-scroll-container" class="hidden lg:block relative">
                <!-- COMPLETE STICKY CONTENT - HEADER + TIMELINE + CARD -->
                <div id="history-sticky" class="sticky top-16 xl:top-20 z-20">
                    <!-- HEADER -->
                    <div class="max-w-3xl mb-4 lg:mb-5">
                        <span class="section-label">
                            <span class="w-2 h-2 bg-secondary"></span>
                            Our Journey
                        </span>
                        <h2 class="text-black text-2xl md:text-3xl font-black leading-tight mb-3 lg:mb-4">
                            Over Four Decades of Healthcare Excellence
                        </h2>
                        <p class="text-slate-600 text-base md:text-lg leading-8">
                            Since 1982, CIWEC has evolved from a travel medicine clinic into
                            one of Nepal's most trusted international healthcare providers.
                        </p>
                    </div>
                    <!-- DESKTOP TIMELINE -->
                    <div class="mb-4 lg:mb-5">
                        <div class="relative">
                            <div class="absolute left-0 right-0 top-1/2 h-px bg-slate-300"></div>
                            <div class="flex justify-between">
                                @foreach ($history as $historyItem)
                                    <button type="button" class="history-year {{ $loop->first ? 'active' : '' }} relative z-10 flex flex-col items-center" data-history-id="{{ $historyItem->id }}" data-history-index="{{ $loop->index }}">
                                        <span class="history-year-dot w-5 h-5 rounded-full border-4 border-white {{ $loop->first ? 'bg-secondary' : 'bg-slate-300' }} shadow-lg mb-4 transition-all duration-300"></span>
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
                            <img id="historyImage"
                                src="{{ !empty($firstHistory->banner) ? asset('uploads/medium/' . $firstHistory->banner) : asset('themes-assets/img/ciwec.webp') }}"
                                alt="{{ $firstHistory->post_title }}"
                                class="w-full h-[clamp(300px,40vh,400px)] object-cover">
                        </div>
                        <!-- CONTENT -->
                        <div class="lg:col-span-7 flex items-center">
                            <div class="p-5 sm:p-6 lg:p-8">
                                <span id="historyYear" class="inline-flex items-center gap-2 text-secondary text-sm font-bold uppercase tracking-[2px] mb-4">
                                    {{ $firstHistory->sub_title }}
                                </span>
                                <h3 id="historyTitle" class="text-xl md:text-2xl lg:text-3xl text-black font-black leading-tight mb-3">
                                    {{ $firstHistory->post_title }}
                                </h3>
                                <div class="w-16 h-[3px] bg-secondary mb-5"></div>
                                <p id="historyDescription" class="text-slate-600 text-justify text-base md:text-lg leading-relaxed max-w-2xl">
                                    {{ $firstHistory->post_excerpt }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- INVISIBLE SCROLL SPACE -->
                <div id="history-scroll-space" class="absolute inset-x-0 top-0 pointer-events-none" aria-hidden="true"></div>
            </div>
            <!-- MOBILE LAYOUT -->
            <div class="lg:hidden">
                <!-- CONTENT CARD -->
                <div class="grid bg-white border border-slate-200 overflow-hidden rounded-xl shadow-sm mb-6">
                    <!-- IMAGE -->
                    <div>
                        <img id="historyImageMobile"
                            src="{{ !empty($firstHistory->banner) ? asset('uploads/medium/' . $firstHistory->banner) : asset('themes-assets/img/ciwec.webp') }}"
                            alt="{{ $firstHistory->post_title }}"
                            class="w-full h-[clamp(220px,38vh,340px)] object-cover">
                    </div>
                    <!-- CONTENT -->
                    <div class="flex items-center">
                        <div class="p-5 sm:p-6 md:p-8">
                            <span id="historyYearMobile"
                                class="inline-flex items-center gap-2 text-secondary text-sm font-bold uppercase tracking-[2px] mb-4">
                                {{ $firstHistory->sub_title }}
                            </span>
                            <h3 id="historyTitleMobile" class="text-2xl md:text-3xl text-black font-black leading-tight mb-4">
                                {{ $firstHistory->post_title }}
                            </h3>
                            <div class="w-16 h-[3px] bg-secondary mb-5"></div>
                            <p id="historyDescriptionMobile" class="text-slate-600 text-base md:text-lg leading-7">
                                {{ $firstHistory->post_excerpt }}
                            </p>
                        </div>
                    </div>
                </div>
                <!-- MOBILE TIMELINE -->
                <div class="space-y-3">
                    @foreach ($history as $historyItem)
                        <button type="button" class="history-year {{ $loop->first ? 'active' : '' }} w-full text-left flex items-start gap-4 {{ $loop->first ? 'p-3 sm:p-4' : 'p-4' }} bg-white border border-slate-200 hover:border-secondary transition-all duration-300" data-history-id="{{ $historyItem->id }}" data-history-index="{{ $loop->index }}">
                            <span class="flex flex-col items-center mt-1">
                                <span class="history-year-dot w-4 h-4 rounded-full {{ $loop->first ? 'bg-secondary' : 'bg-slate-300' }} border-4 border-white shadow transition-all duration-300"></span>
                            </span>
                            <div>
                                <h4 class="font-bold text-primary text-base sm:text-lg">
                                    {{ $historyItem->sub_title }}
                                </h4>
                                <p class="text-slate-600 text-sm md:text-base mt-1 leading-relaxed">
                                    {{ $historyItem->post_title }}
                                </p>
                            </div>
                        </button>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- HISTORY DATA -->
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
@endif
