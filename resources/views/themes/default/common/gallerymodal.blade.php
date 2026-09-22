<!-- =========================================================
     GALLERY & MEDIA LIGHTBOX MODAL COMPONENT (PRO DESIGN)
     ========================================================= -->
<div id="galleryModal"
    class="fixed inset-0 z-[99999] hidden items-center justify-center bg-white/15 backdrop-blur-md p-4 sm:p-6 md:p-8 select-none">

    <!-- Overlay Backdrop -->
    <div id="galleryOverlay" class="absolute inset-0 cursor-pointer"></div>

    <!-- Top Toolbar: Counter & Close -->
    <div class="absolute top-4 left-4 sm:top-6 sm:left-6 z-30 flex items-center gap-3">
        <span class="bg-white/10 backdrop-blur-md text-secondary secondary-xs sm:text-sm font-semibold px-4 py-2 rounded-full border border-white/20 shadow-lg flex items-center gap-2">
            <i class="fa-solid fa-images text-secondary text-xs"></i>
            <span id="galleryCounter">1 / 1</span>
        </span>
    </div>

    <button id="closeGalleryModal" type="button" aria-label="Close modal"
        class="absolute top-4 right-4 sm:top-6 sm:right-6 z-30 flex h-11 w-11 items-center justify-center rounded-full bg-white/10 backdrop-blur-md text-primary hover:bg-secondary hover:text-white transition-all duration-300 border border-white/20 shadow-xl hover:scale-105 active:scale-95">
        <i class="fa-solid fa-xmark text-xl"></i>
    </button>

    <!-- Navigation Buttons -->
    <button id="prevGalleryBtn" type="button" aria-label="Previous item"
        class="absolute left-3 sm:left-6 top-1/2 -translate-y-1/2 z-30 flex h-12 w-12 sm:h-14 sm:w-14 items-center justify-center rounded-full bg-primary/80 hover:bg-secondary text-white transition-all duration-300 border border-white/20 backdrop-blur-md shadow-2xl hover:scale-110 active:scale-95">
        <i class="fa-solid fa-angle-left text-2xl"></i>
    </button>

    <button id="nextGalleryBtn" type="button" aria-label="Next item"
        class="absolute right-3 sm:right-6 top-1/2 -translate-y-1/2 z-30 flex h-12 w-12 sm:h-14 sm:w-14 items-center justify-center rounded-full bg-primary/80 hover:bg-secondary text-white transition-all duration-300 border border-white/20 backdrop-blur-md shadow-2xl hover:scale-110 active:scale-95">
        <i class="fa-solid fa-angle-right text-2xl"></i>
    </button>

    <!-- Main Content Box (Stacked vertically with Header at TOP) -->
    <div id="galleryModalBox" class="relative z-10 w-full max-w-5xl max-h-[90vh] overflow-hidden bg-primary/95 rounded-lg border border-white/10 shadow-[0_30px_90px_rgba(0,0,0,0.8)] flex flex-col">
        
        <!-- Header Details Panel (Positioned at TOP) -->
        <div id="galleryModalDetails" class="hidden w-full bg-gradient-primary backdrop-blur-md px-6 py-4 sm:px-8 sm:py-5 border-b border-slate-800 shrink-0">
            <div class="flex flex-wrap items-center gap-3">
                <span id="galleryModalSubtitle" class="inline-flex items-center gap-1.5 bg-[var(--neutral-50)] text-secondary text-xs font-bold uppercase tracking-[2px] px-3 py-1 rounded-full border border-secondary/20">
                </span>
                <h3 id="galleryModalTitle" class="text-white text-lg sm:text-xl font-bold tracking-wide">
                </h3>
            </div>
            <p id="galleryModalDescription" class="text-white/90 text-xs sm:text-sm leading-relaxed mt-2 max-h-[85px] overflow-y-auto pr-2 custom-scrollbar">
            </p>
        </div>

        <!-- Image Container (Below Header) -->
        <div class="relative flex-1 bg-black/80 flex items-center justify-center min-h-[300px] sm:min-h-[420px] md:min-h-[500px] max-h-[70vh] p-4 sm:p-6 overflow-hidden">
            <img id="galleryModalImg" src="" alt="" class="max-w-full max-h-full object-contain rounded-lg transition-all duration-500 ease-out shadow-2xl">
        </div>

        <!-- Footer Info Bar -->
        <div class="bg-gradient-primary px-6 py-2.5 border-t border-slate-800/60 flex items-center justify-between text-xs text-white font-medium shrink-0">
            <span class="flex items-center gap-2">
                <i class="fa-solid fa-hospital text-white text-xs"></i>
                CIWEC Hospital
            </span>
            <span class="hidden sm:inline-flex items-center gap-1.5 opacity-75">
                <i class="fa-solid fa-keyboard text-xs"></i>
                Use &larr; &rarr; Arrow Keys
            </span>
        </div>

    </div>
</div>
