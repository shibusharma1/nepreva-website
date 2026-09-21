<a href="https://wa.me/{{ $setting->phone }}" target="_blank" id="whatsappBtn" class="fixed bottom-20 right-4 md:bottom-6 md:right-6 z-50 group transition-all duration-500 ease-out">
    <div class="relative flex items-center">
        <!-- Chat Panel -->
        <div class="absolute right-8 translate-x-full opacity-0 group-hover:translate-x-0 group-hover:opacity-100 transition-all duration-500 ease-out">
            <div class="bg-[var([var(--neutral-50)])]shadow-[0_15px_40px_rgba(0,0,0,.12)] border border-slate-100 px-5 py-3 min-w-[220px]">
                <div class="text-primary font-bold text-sm">
                    Chat with CIWEC
                </div>
                <div class="text-slate-500 text-xs mt-1">
                    Our team is online
                </div>
            </div>
        </div>
        <!-- WhatsApp Button -->
        <div class="relative w-16 h-16 bg-[#25D366] rounded-full flex items-center justify-center text-white shadow-[0_10px_30px_rgba(0,0,0,.18)] hover:scale-105 transition-all duration-300">
            <span class="absolute inset-0 rounded-full bg-[#25D366] animate-ping opacity-20"></span>
            <span class="absolute -top-1 -right-1 w-6 h-6 bg-secondary text-white text-[11px] font-bold flex items-center justify-center rounded-full border-2 border-white">
                1
            </span>
            <i class="fa-brands fa-whatsapp text-[32px] relative z-10"></i>
        </div>
    </div>
</a>
<div id="stickyBar" class="hidden md:flex lg:flex fixed right-6 inset-y-0 items-center z-40">
    <div class="overflow-hidden shadow-[0_12px_35px_rgba(0,0,0,.12)]">
        <!-- APPOINTMENT -->
        <a href="{{ url('page/bookappointment.html') }}" class="group flex items-center w-[64px] hover:w-[260px] h-[68px] bg-secondary text-white overflow-hidden transition-all duration-300">
            <div class="w-[64px] h-[68px] flex items-center justify-center flex-shrink-0">
                <i class="fa-regular fa-calendar-check text-xl"></i>
            </div>
            <span class="opacity-0 group-hover:opacity-100 transition-all duration-300 whitespace-nowrap text-[15px] font-semibold pr-8">
                Book Appointment
            </span>
        </a>
        <!-- INQUIRY -->
        <a href="{{ url('page/contact.html') }}" class="group flex items-center w-[64px] hover:w-[260px] h-[68px] bg-primary text-white overflow-hidden transition-all duration-300 border-t border-white/10">
            <div class="w-[64px] h-[68px] flex items-center justify-center flex-shrink-0">
                <i class="fa-regular fa-message text-xl"></i>
            </div>
            <span class="opacity-0 group-hover:opacity-100 transition-all duration-300 whitespace-nowrap text-[15px] font-semibold pr-8">
                Make Inquiry
            </span>
        </a>
    </div>
</div>
<!-- MOBILE STICKY CTA -->
<div id="mobileStickyBar" class="fixed bottom-0 left-0 w-full z-50 bg-[var([var(--neutral-50)])]border-t border-slate-200 shadow-[0_-8px_25px_rgba(0,0,0,.08)] transform transition-all duration-500 ease-[cubic-bezier(0.22,1,0.36,1)] md:hidden lg:hidden">
    <div class="grid grid-cols-2">
        <!-- INQUIRY -->
        <a href="{{ url('page/contact.html') }}" class="flex flex-col items-center justify-center py-3 border-x border-slate-200 text-primary hover:text-primary-dark transition">
            <i class="fa-regular fa-message text-lg mb-1"></i>
            <span class="text-[11px] font-semibold">
                Inquiry
            </span>
        </a>
        <!-- APPOINTMENT -->
        <a href="{{ url('page/bookappointment.html') }}" class="flex flex-col items-center justify-center py-3 bg-primary text-white hover:bg-primary-dark transition">
            <i class="fa-regular fa-calendar-check text-lg mb-1"></i>
            <span class="text-[11px] font-semibold">
                Appointment
            </span>
        </a>
    </div>
</div>
