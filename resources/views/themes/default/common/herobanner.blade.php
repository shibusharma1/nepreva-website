<section class="relative h-[220px] md:h-[280px] overflow-hidden">
    <img src="{{ isset($data) && $data->banner ? asset('uploads/medium/' . $data->banner) : asset('themes-assets/img/ciwec.webp') }}"
        alt="{{ $data->post_type ?? 'CIWEC Hospital' }}" class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-black/40"></div>
    <div class="relative z-10 h-full flex items-center">
        <div class="container-custom">
            <h1 class="text-white text-center text-3xl md:text-4xl font-black mb-3">
                {{ $data->post_title ?? $data->post_type ?? 'CIWEC Hospital' }}
            </h1>
            <div class="flex items-center justify-center gap-2 text-white/90">
                <a href="{{ url('/') }}" class="hover:text-secondary transition">
                    Home
                </a>
                <i class="fa-solid fa-angle-right text-xs"></i>
                <span class="text-white/80 hover:text-white font-medium">
                    {{ $data->post_title ?? $data->post_type ?? ($offer->post_title ?? 'CIWEC Hospital') }}
                </span>
            </div>
        </div>
    </div>
</section>
