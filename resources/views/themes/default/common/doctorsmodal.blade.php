<!-- DOCTOR PROFILE MODAL COMPONENT -->
<div id="doctorModal" class="fixed inset-0 z-[99999] hidden items-center justify-center bg-slate-900/65 backdrop-blur-sm p-3 sm:p-6">
    <!-- Overlay -->
    <div id="doctorOverlay" class="absolute inset-0">
    </div>
    <!-- Modal Box -->
    <div class="relative z-10 w-full max-w-5xl max-h-[92vh] sm:max-h-[88vh] overflow-hidden bg-white border border-slate-200 shadow-2xl rounded-md">
        <!-- Close Button -->
        <button id="closeDoctorModal" type="button" aria-label="Close doctor profile" class="absolute right-3 top-3 sm:right-4 sm:top-4 z-40 flex h-9 w-9 sm:h-10 sm:w-10 items-center justify-center rounded-full bg-slate-900/80 hover:bg-secondary text-white transition-all duration-300 border border-white/20 backdrop-blur-md shadow-lg">
            <i class="fa-solid fa-xmark text-base sm:text-lg"></i>
        </button>
        <!-- Dynamic Content -->
        <div id="doctorModalContent" class="max-h-[92vh] sm:max-h-[88vh] overflow-y-auto">
        </div>
    </div>
</div>
