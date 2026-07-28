<!-- SEARCH OVERLAY -->
<div id="searchWrapper"
    class="fixed inset-0 z-[9999] opacity-0 invisible transition-all duration-500">
    <!-- BACKDROP -->
    <div id="searchOverlay"
        class="absolute inset-0 bg-black/70 backdrop-blur-sm">
    </div>
    <!-- CONTENT -->
    <div
        class="relative flex items-start justify-center min-h-screen pt-24 md:pt-32 px-4">
        <div
            class="w-full max-w-4xl">
            <!-- SEARCH PANEL -->
            <div
                class="bg-white border border-slate-200 shadow-[0_20px_80px_rgba(0,0,0,.15)]">
                <!-- HEADER -->
                <div
                    class="flex items-center justify-between border-b border-slate-200 px-6 md:px-8 py-5">
                    <div>
                        <h3
                            class="text-primary text-xl md:text-2xl font-black">
                            Search CIWEC
                        </h3>
                        <p
                            class="text-slate-500 text-sm mt-1">
                            Find doctors, services, publications and health information
                        </p>
                    </div>
                    <!-- CLOSE -->
                    <button
                        id="closeSearch"
                        class="w-10 h-10 border border-slate-200 text-primary hover:border-secondary hover:text-secondary transition">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <!-- SEARCH FORM -->
                <div
                    class="p-6 md:p-8">
                    <form
                        class="flex">
                        <input
                            type="text"
                            placeholder="Search doctors, services, articles..."
                            class="flex-1 h-[58px] px-6 border border-slate-300 border-r-0 text-base outline-none focus:border-secondary">
                        <button
                            type="submit"
                            class="w-[70px] h-[58px] bg-primary text-white hover:bg-secondary transition">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </form>
                    <!-- QUICK LINKS -->
                    <div class="mt-8">
                        <p
                            class="text-sm font-semibold text-primary mb-4">
                            Popular Searches
                        </p>
                        <div
                            class="flex flex-wrap gap-3">
                            <a href="./doctors.php"
                                class="px-4 py-2 border border-slate-300 text-sm text-slate-600 hover:border-secondary hover:text-secondary transition">
                                Doctors
                            </a>
                            <a href="./services.php"
                                class="px-4 py-2 border border-slate-300 text-sm text-slate-600 hover:border-secondary hover:text-secondary transition">
                                Services
                            </a>
                            <a href="./healthinformation.php"
                                class="px-4 py-2 border border-slate-300 text-sm text-slate-600 hover:border-secondary hover:text-secondary transition">
                                Health Information
                            </a>
                            <a href="./researchandpublication.php"
                                class="px-4 py-2 border border-slate-300 text-sm text-slate-600 hover:border-secondary hover:text-secondary transition">
                                Publications
                            </a>
                            <a href="./contactus.php"
                                class="px-4 py-2 border border-slate-300 text-sm text-slate-600 hover:border-secondary hover:text-secondary transition">
                                Contact
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>