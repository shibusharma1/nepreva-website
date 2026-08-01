<section class="relative h-[220px] md:h-[280px] overflow-hidden">
    <img src="{{ $data->banner ? asset('uploads/medium/' . $data->banner) : asset('themes-assets/img/company.jpg') }}"
        alt="{{ $data->post_type }}" class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-primary/80"></div>
    <div class="relative z-10 h-full flex items-center">
        <div class="container-custom">
            <h1 class="text-white text-center text-3xl md:text-4xl font-black mb-3">
                {{ $data->post_title ?? $data->post_type ?? 'CIWEC Hospital' }}
            </h1>
            <div class="flex items-center justify-center gap-2 text-white/90">
                <a href="{{ url('/') }}" class="hover:text-secondary">
                    Home
                </a>
                <i class="fa-solid fa-angle-right text-xs"></i>
                <span class="text-secondary">
                    {{ $data->post_title ?? $data->post_type ?? $offer->post_title }}
                </span>
            </div>
        </div>
    </div>
</section>
