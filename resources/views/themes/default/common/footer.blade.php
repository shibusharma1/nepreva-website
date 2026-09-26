@include('themes.default.common.locationsection')
<footer class="bg-gradient-primary overflow-hidden">
    <div class="border-b border-white/10">
        <div class="container-custom">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 py-14">
                <div>
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('themes-assets/img/logo.png') }}" alt="CIWEC Hospital & Travel Medicine Center Logo" class="h-20 bg-white p-3 mb-6">
                    </a>
                    <p class="text-white text-justify text-sm md:text-base leading-relaxed">
                        {{ $setting->welcome_text }}
                    </p>
                </div>
                <div>
                    <h3 class="text-white text-lg font-black mb-6">
                        Quick Links
                    </h3>
                    <ul class="space-y-3">
                        <li>
                            <a href="{{ url('/') }}" class="text-white hover:text-secondary transition">
                                Home
                            </a>
                            @foreach ($navigations as $row)
                        <li> 
                            <a href="{{ url(posttype_url($row->uri)) }}" class="text-white hover:text-secondary transition">{{ $row->post_type }}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div>
                    <h3 class="text-white text-lg font-black mb-6">
                        Key Services
                    </h3>
                    <ul class="space-y-3">
                        @foreach ($services->skip(1)->take(6) as $service)
                            <li>
                                <a href="{{ url($service->uri).'.html'}}" class="text-white hover:text-secondary transition">
                                    {{ $service->post_title }}
                                </a>
                            </li>
                        @endforeach

                    </ul>
                </div>
                <div>
                    <h3 class="text-white text-lg font-black mb-6">
                        Subscribe
                    </h3>
                    <p class="text-white text-sm md:text-base mb-5">
                        Get healthcare updates and newsletters.
                    </p>
                    <form action="{{ route('newsletter.subscribe') }}" method="POST" class="flex">
                        @csrf
                        <input type="hidden" id="g_recaptcha_response" name="g_recaptcha_response">
                        <input type="email" placeholder="Email Address" name="email" class="flex-1 h-12 px-4 text-sm text-slate-700 outline-none focus:ring-2 focus:ring-secondary focus:border-secondary transition">
                        <button type="submit" class="w-14 bg-secondary text-white hover:bg-white hover:text-primary transition hover:border-2 hover:border-secondary">
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </form>
                    <div class="flex gap-3 mt-6">
                        @if ($setting->facebook_link)
                            <a href="{{ $setting->facebook_link }}" class="w-10 h-10 border border-white/20 text-white flex items-center justify-center hover:bg-secondary hover:border-secondary transition">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        @endif
                        @if ($setting->instagram_link)
                            <a href="{{ $setting->instagram_link }}" class="w-10 h-10 border border-white/20 text-white flex items-center justify-center hover:bg-secondary hover:border-secondary transition">
                                <i class="fab fa-instagram"></i>
                            </a>
                        @endif
                        @if ($setting->youtube_link)
                            <a href="{{ $setting->youtube_link }}" class="w-10 h-10 border border-white/20 text-white flex items-center justify-center hover:bg-secondary hover:border-secondary transition">
                                <i class="fab fa-youtube"></i>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- COPYRIGHT -->
    <div class="pb-20 lg:pb-0 md:pb-0">
        <div class="container-custom">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4 py-6">
                <p class="text-white/90 text-sm">
                    © {{ date('Y') }} {{ $setting->copyright_text }}
                </p>
                <p class="text-sm text-white/90">
                    Designed & Developed by
                    <a href="https://cyberlink.com.np/" class="text-white hover:underline">
                        Cyberlink Pvt. Ltd.
                    </a>
                </p>
                <div class="flex gap-5 text-sm">
                    <a href="{{ url('page/privacy-policy.html') }}" class="text-white/90 hover:text-secondary transition">
                        Privacy Policy
                    </a>
                    <a href="{{ url('page/terms-and-conditions.html') }}" class="text-white/90 hover:text-secondary transition">
                        Terms & Conditions
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Back to top button  -->
<button id="backToTop" aria-label="Back to top" class="fixed bottom-40 right-4 md:bottom-28 md:right-6 z-[60] w-14 h-14 bg-white border-2 border-slate-200 shadow-[0_8px_25px_rgba(0,0,0,.15)] text-primary opacity-0 pointer-events-none translate-y-8 transition-all duration-500 rounded-full hover:border-primary hover:text-secondary">
    <svg class="absolute inset-0 w-full h-full -rotate-90" viewBox="0 0 100 100">
        <circle cx="50" cy="50" r="46" stroke="#E5E7EB" stroke-width="4" fill="none" />
        <circle id="scrollProgress" cx="50" cy="50" r="46" stroke="#D71920" stroke-width="4" fill="none" stroke-linecap="round" stroke-dasharray="289" stroke-dashoffset="289" />
    </svg>
    <i class="fa-solid fa-arrow-up relative z-10 text-sm pointer-events-none"></i>
</button>

@include('themes.default.common.stickyfooterbar')

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
<script src="{{ asset('themes-assets/js/scripts.js') }}"></script>
<!-- Success Toast -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="https://www.google.com/recaptcha/api.js?render={{ env('SITE_KEY') }}"></script>
<script>
    grecaptcha.ready(function() {
        function executeRecaptcha() {
            grecaptcha.execute('<?php echo env('SITE_KEY'); ?>', {
                action: 'homepage'
            }).then(function(token) {
                document.getElementById('g_recaptcha_response').value = token;
            });
        }
        // Initial execution of reCAPTCHA
        executeRecaptcha();
        // Refresh the reCAPTCHA token every 100 seconds (less than 2 minutes)
        setInterval(executeRecaptcha, 900000);
    });
</script>
@stack('scripts')

@if (session('success'))
    <script>
        Swal.fire({
            toast: true,
            position: 'top-end',
            icon: 'success',
            title: "{{ session('success') }}",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            background: '#ffffff',
            color: '#1f2937',
            iconColor: '#11497B',
        });
    </script>
@endif

@if (session('message'))
    <script>
        Swal.fire({
            toast: true,
            position: 'top-end',
            icon: 'info',
            title: "{{ session('message') }}",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            background: '#ffffff',
            color: '#1f2937',
        });
    </script>
@endif

@if (session('error'))
    <script>
        Swal.fire({
            toast: true,
            position: 'top-end',
            icon: 'error',
            title: "{{ session('error') }}",
            showConfirmButton: false,
            timer: 3500,
            timerProgressBar: true,
            background: '#ffffff',
            color: '#1f2937',
        });
    </script>
@endif

@if ($errors->any())
    <script>
        Swal.fire({
            toast: true,
            position: 'top-end',
            icon: 'warning',
            title: 'Please fix the highlighted fields and try again.',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            background: '#ffffff',
            color: '#1f2937',
        });
    </script>
@endif

</body>

</html>
