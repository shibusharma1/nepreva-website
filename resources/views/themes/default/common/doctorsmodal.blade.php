<!-- DOCTOR PROFILE MODAL COMPONENT -->
<div id="doctorModal" class="fixed inset-0 z-[99999] hidden items-center justify-center bg-primary/80 backdrop-blur-sm p-4 sm:p-6">
    <!-- Overlay -->
    <div id="doctorOverlay" class="absolute inset-0">
    </div>
    <!-- Modal Box -->
    <div class="relative z-10 w-full max-w-5xl max-h-[90vh] overflow-hidden bg-white border border-slate-200 shadow-2xl">
        <!-- Close Button -->
        <button id="closeDoctorModal" type="button" aria-label="Close doctor profile" class="absolute right-4 top-4 z-30 flex h-10 w-10 items-center justify-center bg-primary text-white transition-all duration-300 hover:bg-secondary shadow-md">
            <i class="fa-solid fa-xmark text-lg"></i>
        </button>
        <!-- Dynamic Content -->
        <div id="doctorModalContent" class="max-h-[90vh] overflow-y-auto">
        </div>
    </div>
</div>
