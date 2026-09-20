<section id="map" class="section-padding bg-slate-50 overflow-hidden">
    <div class="container-custom">
        <!-- HEADER -->
        <div class="max-w-3xl mb-10 lg:mb-12">
            <span class="section-subtitle">
                Our Locations
            </span>
            <h2 class="section-title mt-2 mb-4">
                Visit CIWEC Hospital
            </h2>
            <p class="text-slate-600 text-base md:text-lg leading-8">
                Providing trusted healthcare services from Kathmandu and Pokhara,
                serving local and international patients across Nepal.
            </p>
        </div>

        <!-- LOCATIONS -->
        <div class="grid xl:grid-cols-2 gap-8">
            <!-- KATHMANDU -->
            <div class="bg-white border border-slate-200 overflow-hidden hover:border-secondary hover:shadow-xl transition-all duration-300">
                <!-- MAP -->
                <div class="h-[280px]">
                   {!! $setting->google_map !!}
                </div>
                <!-- CONTENT -->
                <div class="p-6 md:p-8">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-12 h-12 bg-primary/10 flex items-center justify-center">
                            <i class="fa-solid fa-location-dot text-primary"></i>
                        </div>
                        <div>
                            <h3 class="text-primary text-xl md:text-2xl font-bold">
                                Kathmandu
                            </h3>
                            <p class="text-slate-500 text-sm font-medium">
                                Main Hospital
                            </p>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div>
                            <h4 class="text-sm font-semibold text-primary mb-1">
                                Address
                            </h4>
                            <p class="text-slate-600 leading-relaxed text-base md:text-lg">
                               {!! $setting->address !!}
                            </p>
                        </div>
                        <div>
                            <h4 class="text-sm font-semibold text-primary mb-1">
                                Phone
                            </h4>
                            <a href="tel:{{ $setting->phone }}" class="text-slate-600 hover:text-secondary text-base md:text-lg transition">
                               {{ $setting->phone }}
                            </a>
                        </div>
                        <div>
                            <h4 class="text-sm font-semibold text-primary mb-1">
                                Email
                            </h4>
                            <a href="mailto:{{ $setting->email_primary }}" class="text-slate-600 hover:text-secondary text-base md:text-lg transition">
                                {{ $setting->email_primary }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- POKHARA -->
            <div class="bg-white border border-slate-200 overflow-hidden hover:border-secondary hover:shadow-xl transition-all duration-300">
                <!-- MAP -->
                <div class="h-[280px]">
                    {!! $setting->google_map2 !!}
                </div>
                <!-- CONTENT -->
                <div class="p-6 md:p-8">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-12 h-12 bg-primary/10 flex items-center justify-center">
                            <i class="fa-solid fa-location-dot text-primary"></i>
                        </div>
                        <div>
                            <h3 class="text-primary text-xl md:text-2xl font-bold">
                                Pokhara
                            </h3>
                            <p class="text-slate-500 text-sm font-medium">
                                Branch Hospital
                            </p>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div>
                            <h4 class="text-sm font-semibold text-primary mb-1">
                                Address
                            </h4>
                            <p class="text-slate-600 leading-relaxed text-base md:text-lg">
                               {!! $setting->address2 !!}
                            </p>
                        </div>
                        <div>
                            <h4 class="text-sm font-semibold text-primary mb-1">
                                Phone
                            </h4>
                            <a href="tel:{{ $setting->phone2 }}" class="text-slate-600 hover:text-secondary text-base md:text-lg transition">
                                {{ $setting->phone2 }}
                            </a>
                        </div>
                        <div>
                            <h4 class="text-sm font-semibold text-primary mb-1">
                                Email
                            </h4>
                            <a href="mailto:{{ $setting->email_secondary }}" class="text-slate-600 hover:text-secondary text-base md:text-lg transition">
                                {{ $setting->email_secondary }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>