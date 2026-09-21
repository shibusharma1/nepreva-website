<div class="hidden lg:block bg-[var([var(--neutral-50)])]border-b border-slate-200">
    <div class="container-custom">
        <div class="h-11 flex items-center justify-between">
            <div class="flex items-center gap-8">
                <div class="flex items-center gap-2 text-sm">
                    <i class="fa-solid fa-location-dot text-secondary"></i>
                    <span class="text-slate-500">
                        Kathmandu
                    </span>
                    <a href="tel:{{ $setting->phone }}"
                        class="font-medium text-slate-800 hover:text-primary transition">
                        {{ $setting->phone }}
                    </a>
                </div>
                <!-- Divider -->
                <div class="w-px h-4 bg-slate-200"></div>
                <!-- Pokhara -->
                <div class="flex items-center gap-2 text-sm">
                    <i class="fa-solid fa-location-dot text-secondary"></i>
                    <span class="text-slate-500">
                        Pokhara
                    </span>
                    <a href="tel:{{ $setting->phone2 }}"
                        class="font-medium text-slate-800 hover:text-primary transition">
                        {{ $setting->phone2 }}
                    </a>
                </div>
            </div>
            <!-- RIGHT -->
            <div
                class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-red-50 border border-red-100">
                <span
                    class="w-2 h-2 rounded-full bg-secondary animate-pulse">
                </span>
                <span
                    class="text-xs font-semibold text-secondary">
                    24/7 Emergency Care
                </span>
            </div>
        </div>
    </div>
</div>

<!-- MOBILE TOP BAR -->
<div class="lg:hidden bg-primary">
    <div class="container-custom">
        <div class="h-10 flex items-center justify-center">
            <a href="tel:{{ $setting->phone }}"
                class="text-white text-sm font-medium">
                Emergency: {{ $setting->phone }}
            </a>
        </div>
    </div>
</div>