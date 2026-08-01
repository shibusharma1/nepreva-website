<section id="map" class="section-padding bg-slate-100 overflow-hidden">
    <div class="container-custom">
        <!-- HEADER -->
        <div class="max-w-3xl mb-12">
            <span
                class="inline-flex items-center gap-2 text-secondary text-xs font-semibold uppercase tracking-[3px] mb-4">
                <span class="w-2 h-2 bg-secondary"></span>
                Our Locations
            </span>
            <h2
                class="text-primary text-3xl md:text-4xl xl:text-4xl font-black leading-tight mb-4">
                Visit CIWEC Hospital
            </h2>
            <p
                class="text-slate-600 text-base md:text-lg leading-8">
                Providing trusted healthcare services from Kathmandu and Pokhara,
                serving local and international patients across Nepal.
            </p>
        </div>
        <!-- LOCATIONS -->
        <div class="grid xl:grid-cols-2 gap-8">
            <!-- KATHMANDU -->
            <div
                class="bg-white border border-slate-200 overflow-hidden">
                <!-- MAP -->
                <div class="h-[280px]">
                   {!! $setting->google_map !!}
                </div>
                <!-- CONTENT -->
                <div class="p-8">
                    <div
                        class="flex items-center gap-3 mb-6">
                        <div
                            class="w-12 h-12 bg-primary/10 flex items-center justify-center">
                            <i
                                class="fa-solid fa-location-dot text-primary">
                            </i>
                        </div>
                        <div>
                            <h3
                                class="text-primary text-2xl font-black">
                                Kathmandu
                            </h3>
                            <p
                                class="text-slate-500 text-sm">
                                Main Hospital
                            </p>
                        </div>
                    </div>
                    <div class="space-y-5">
                        <div>
                            <h4
                                class="text-primary font-semibold mb-1">
                                Address
                            </h4>
                            <p class="text-slate-600 leading-7">
                               {!! $setting->address !!}
                            </p>
                        </div>
                        <div>
                            <h4
                                class="text-primary font-semibold mb-1">
                                Phone
                            </h4>
                            <a
                                href="tel:{{ $setting->phone }}"
                                class="text-slate-600 hover:text-secondary">
                               {{ $setting->phone }}
                            </a>
                        </div>
                        <div>
                            <h4
                                class="text-primary font-semibold mb-1">
                                Email
                            </h4>
                            <a
                                href="mailto:{{ $setting->email_primary }}"
                                class="text-slate-600 hover:text-secondary">
                                {{ $setting->email_primary }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- POKHARA -->
            <div
                class="bg-white border border-slate-200 overflow-hidden">
                <!-- MAP -->
                <div class="h-[280px]">
                    {!! $setting->google_map2 !!}
                </div>
                <!-- CONTENT -->
                <div class="p-8">
                    <div
                        class="flex items-center gap-3 mb-6">
                        <div
                            class="w-12 h-12 bg-primary/10 flex items-center justify-center">
                            <i
                                class="fa-solid fa-location-dot text-primary">
                            </i>
                        </div>
                        <div>
                            <h3
                                class="text-primary text-2xl font-black">
                                Pokhara
                            </h3>
                            <p
                                class="text-slate-500 text-sm">
                                Branch Hospital
                            </p>
                        </div>
                    </div>
                    <div class="space-y-5">
                        <div>
                            <h4
                                class="text-primary font-semibold mb-1">
                                Address
                            </h4>
                            <p class="text-slate-600 leading-7">
                               {!! $setting->address2 !!}
                            </p>
                        </div>
                        <div>
                            <h4 class="text-primary font-semibold mb-1">
                                Phone
                            </h4>
                            <a
                                href="tel:{{ $setting->phone2 }}"
                                class="text-slate-600 hover:text-secondary">
                                {{ $setting->phone2 }}
                            </a>
                        </div>
                        <div>
                            <h4 class="text-primary font-semibold mb-1">
                                Email
                            </h4>
                            <a href="mailto:{{ $setting->email_secondary }}"
                                class="text-slate-600 hover:text-secondary">
                                {{ $setting->email_secondary }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>