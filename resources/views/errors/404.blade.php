@extends('themes.default.common.master') @section('post_title','404 - Page Not Found') @section('content')

<section class="relative min-h-[85vh] flex items-center bg-slate-100 overflow-hidden">
    {{-- Background --}}
      <div class="container-custom relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            {{-- Error Number --}}
            <div class="text-[120px] md:text-[180px] font-black text-primary/10 leading-none select-none">404</div>
            {{-- Icon --}}
            <div
                class="-mt-20 mb-8 inline-flex items-center justify-center w-24 h-24 bg-primary text-white rounded-full shadow-xl"
            >
                <i class="fa-solid fa-triangle-exclamation text-4xl"></i>
            </div>
            {{-- Heading --}}
            <h1 class="text-primary text-4xl md:text-5xl font-black mb-6">Page Not Found</h1>
            <p class="max-w-2xl mx-auto text-slate-600 text-lg leading-8">
                Sorry, the page you are looking for may have been removed, renamed or is temporarily unavailable. Please
                check the URL or return to the homepage.
            </p>
            {{-- Buttons --}}
            <div class="flex flex-wrap justify-center gap-5 mt-10">
                <a
                    href="{{ url('/') }}"
                    class="bg-primary text-white font-bold px-8 py-4 hover:bg-secondary transition-all duration-300 inline-flex items-center gap-3"
                >
                    <i class="fa-solid fa-house"></i>

                    Back to Home
                </a>
                <a
                    href="{{ url('/contact') }}"
                    class="border border-primary text-primary font-bold px-8 py-4 hover:bg-primary hover:text-white transition-all duration-300 inline-flex items-center gap-3"
                >
                    <i class="fa-solid fa-envelope"></i>
                    Contact Us
                </a>
            </div>
        </div>
        {{-- Quick Links --}}
        <div class="max-w-5xl mx-auto mt-20">
            <div class="bg-[#fdfdfd] border border-slate-200 shadow-lg">
                <div class="grid md:grid-cols-4 divide-y md:divide-y-0 md:divide-x divide-slate-200">
                    <a href="{{ url('/about-us.html') }}" class="group p-8 text-center hover:bg-slate-50 transition">
                        <div
                            class="w-16 h-16 mx-auto mb-5 flex items-center justify-center bg-primary/10 text-primary group-hover:bg-primary group-hover:text-white transition"
                        >
                            <i class="fa-solid fa-circle-info text-2xl"></i>
                        </div>
                        <h3 class="font-bold text-primary">About Us</h3>
                    </a>
                    <a href="{{ url('/services.html') }}" class="group p-8 text-center hover:bg-slate-50 transition">
                        <div
                            class="w-16 h-16 mx-auto mb-5 flex items-center justify-center bg-primary/10 text-primary group-hover:bg-primary group-hover:text-white transition"
                        >
                            <i class="fa-solid fa-stethoscope text-2xl"></i>
                        </div>
                        <h3 class="font-bold text-primary">Services</h3>
                    </a>
                    <a href="{{ url('/doctors-at-ciwec.html') }}" class="group p-8 text-center hover:bg-slate-50 transition">
                        <div
                            class="w-16 h-16 mx-auto mb-5 flex items-center justify-center bg-primary/10 text-primary group-hover:bg-primary group-hover:text-white transition"
                        >
                            <i class="fa-solid fa-user-doctor text-2xl"></i>
                        </div>
                        <h3 class="font-bold text-primary">Doctors</h3>
                    </a>
                    <a href="{{ url('page/bookappointment.html') }}" class="group p-8 text-center hover:bg-slate-50 transition">
                        <div
                            class="w-16 h-16 mx-auto mb-5 flex items-center justify-center bg-primary/10 text-primary group-hover:bg-primary group-hover:text-white transition"
                        >
                            <i class="fa-solid fa-calendar-check text-2xl"></i>
                        </div>
                        <h3 class="font-bold text-primary">Appointment</h3>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
