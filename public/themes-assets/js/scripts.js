/**
 * CIWEC Hospital - Unified Master JavaScript Bundle
 * Consolidates all theme scripts, interactive modals, filters, timelines, and UI features.
 */

document.addEventListener("DOMContentLoaded", () => {
    /* ==========================================================================
       1. GLOBAL DOCTOR PROFILE MODAL SYSTEM
       ========================================================================== */
    window.renderDoctorModal = function (doctor) {
        const doctorModal = document.getElementById('doctorModal');
        const doctorModalContent = document.getElementById('doctorModalContent');

        if (!doctorModal || !doctorModalContent || !doctor) {
            return;
        }

        const educationHtml = Array.isArray(doctor.education) && doctor.education.length
            ? `<div class="mt-6">
                <h3 class="text-base font-bold text-primary mb-2 border-b border-slate-100 pb-1">
                    Education & Credentials
                </h3>
                <ul class="space-y-2.5 mt-3">
                    ${doctor.education.map(item => `
                        <li class="flex items-start gap-2.5 text-sm text-slate-600">
                            <i class="fa-solid fa-circle-check text-secondary mt-0.5 text-xs"></i>
                            <span>${item}</span>
                        </li>
                    `).join('')}
                </ul>
               </div>`
            : '';

        doctorModalContent.innerHTML = `
            <div class="grid lg:grid-cols-12">
                <!-- IMAGE -->
                <div class="lg:col-span-5 bg-slate-100 relative min-h-[280px]">
                    <img
                        src="${doctor.image || ''}"
                        alt="${doctor.name || 'Doctor'}"
                        class="h-[280px] sm:h-[350px] lg:h-full w-full object-cover">
                </div>

                <!-- DETAILS -->
                <div class="lg:col-span-7 p-6 sm:p-8 lg:p-10">
                    <!-- Department Badge -->
                    <span class="inline-flex items-center gap-2 bg-secondary/10 px-3 py-1.5 text-xs font-semibold uppercase tracking-wider text-secondary">
                        <span class="h-1.5 w-1.5 bg-secondary"></span>
                        ${doctor.department || 'Medical Specialist'}
                    </span>

                    <!-- Doctor Name -->
                    <h2 class="mt-3 text-2xl sm:text-3xl font-bold leading-tight text-primary">
                        ${doctor.name || ''}
                    </h2>

                    <!-- Qualification -->
                    <p class="mt-1 text-sm font-medium text-slate-500">
                        ${doctor.qualification || ''}
                    </p>

                    <!-- Accent Line -->
                    <div class="my-4 h-1 w-12 bg-secondary"></div>

                    <!-- Stats Box -->
                    <div class="bg-slate-50 border border-slate-200 p-4 grid grid-cols-3 gap-3 my-5 text-center">
                        <div>
                            <div class="text-lg sm:text-xl font-bold text-primary">
                                ${doctor.experience || '-'}
                            </div>
                            <p class="mt-1 text-xs font-semibold text-slate-500 uppercase tracking-wider">
                                Experience
                            </p>
                        </div>

                        <div class="border-x border-slate-200">
                            <div class="text-lg sm:text-xl font-bold text-primary">
                                ${doctor.patients || '-'}
                            </div>
                            <p class="mt-1 text-xs font-semibold text-slate-500 uppercase tracking-wider">
                                Patients
                            </p>
                        </div>

                        <div>
                            <div class="text-lg sm:text-xl font-bold text-primary">
                                ${doctor.research || '-'}
                            </div>
                            <p class="mt-1 text-xs font-semibold text-slate-500 uppercase tracking-wider">
                                Publications
                            </p>
                        </div>
                    </div>

                    <!-- About -->
                    <div class="mt-5">
                        <h3 class="text-base font-bold text-primary mb-2 border-b border-slate-100 pb-1">
                            About Doctor
                        </h3>
                        <p class="mt-2 text-sm leading-relaxed text-slate-600">
                            ${doctor.about || 'Doctor information is currently unavailable.'}
                        </p>
                    </div>

                    ${educationHtml}

                    <!-- Languages -->
                    <div class="mt-5">
                        <h3 class="text-base font-bold text-primary mb-2 border-b border-slate-100 pb-1">
                            Languages Spoken
                        </h3>
                        <p class="mt-2 text-sm text-slate-600 font-medium">
                            ${doctor.languages || 'English, Nepali'}
                        </p>
                    </div>

                    <!-- CTA Button -->
                    <div class="mt-7">
                        <a href="/page/bookappointment.html" class="btn-primary inline-flex items-center gap-3">
                            Book Appointment
                            <i class="fa-solid fa-arrow-right text-xs"></i>
                        </a>
                    </div>
                </div>
            </div>
        `;

        doctorModal.classList.remove('hidden');
        doctorModal.classList.add('flex');
        document.body.style.overflow = 'hidden';
    };

    window.closeDoctorModal = function () {
        const doctorModal = document.getElementById('doctorModal');
        if (!doctorModal) return;
        doctorModal.classList.add('hidden');
        doctorModal.classList.remove('flex');
        document.body.style.overflow = '';
    };

    const closeDoctorBtn = document.getElementById('closeDoctorModal');
    const doctorOverlay = document.getElementById('doctorOverlay');
    if (closeDoctorBtn) closeDoctorBtn.addEventListener('click', window.closeDoctorModal);
    if (doctorOverlay) doctorOverlay.addEventListener('click', window.closeDoctorModal);

    const homeDoctorsEl = document.getElementById('homeDoctorsData');
    if (homeDoctorsEl) {
        let homeDoctors = {};
        try {
            homeDoctors = JSON.parse(homeDoctorsEl.textContent || '{}');
        } catch (e) {
            homeDoctors = {};
        }
        window.openHomeDoctor = function (key) {
            const doctor = homeDoctors[key];
            if (doctor && window.renderDoctorModal) {
                window.renderDoctorModal(doctor);
            } else {
                console.error('Doctor not found:', key);
            }
        };
    }

    /* ==========================================================================
       2. GLOBAL GALLERY LIGHTBOX MODAL SYSTEM
       ========================================================================== */
    let currentGalleryItems = [];
    let currentGalleryIndex = 0;

    const galleryModal = document.getElementById('galleryModal');
    const galleryOverlay = document.getElementById('galleryOverlay');
    const closeGalleryBtn = document.getElementById('closeGalleryModal');
    const prevGalleryBtn = document.getElementById('prevGalleryBtn');
    const nextGalleryBtn = document.getElementById('nextGalleryBtn');

    window.updateGalleryModalView = function () {
        if (!currentGalleryItems.length) return;
        const item = currentGalleryItems[currentGalleryIndex];

        const counter = document.getElementById('galleryCounter');
        const img = document.getElementById('galleryModalImg');
        const detailsPanel = document.getElementById('galleryModalDetails');
        const subtitleEl = document.getElementById('galleryModalSubtitle');
        const titleEl = document.getElementById('galleryModalTitle');
        const descEl = document.getElementById('galleryModalDescription');

        if (counter) counter.textContent = `${currentGalleryIndex + 1} / ${currentGalleryItems.length}`;
        if (img) {
            img.src = item.src;
            img.alt = item.title || '';
        }

        const hasDetails = item.title || item.subtitle || item.description;
        if (detailsPanel) {
            if (hasDetails) {
                detailsPanel.classList.remove('hidden');
                if (subtitleEl) subtitleEl.textContent = item.subtitle || 'CIWEC Gallery';
                if (titleEl) titleEl.textContent = item.title || '';
                if (descEl) {
                    descEl.textContent = item.description || '';
                    descEl.classList.toggle('hidden', !item.description);
                }
            } else {
                detailsPanel.classList.add('hidden');
            }
        }
    };

    window.openGalleryModal = function (items, index = 0) {
        if (!items || !items.length || !galleryModal) return;
        currentGalleryItems = items;
        currentGalleryIndex = Math.max(0, Math.min(index, items.length - 1));

        window.updateGalleryModalView();

        galleryModal.classList.remove('hidden');
        galleryModal.classList.add('flex');
        document.body.style.overflow = 'hidden';
    };

    window.closeGalleryModal = function () {
        if (!galleryModal) return;
        galleryModal.classList.add('hidden');
        galleryModal.classList.remove('flex');
        document.body.style.overflow = '';
    };

    if (closeGalleryBtn) closeGalleryBtn.addEventListener('click', window.closeGalleryModal);
    if (galleryOverlay) galleryOverlay.addEventListener('click', window.closeGalleryModal);

    if (prevGalleryBtn) {
        prevGalleryBtn.addEventListener('click', () => {
            if (!currentGalleryItems.length) return;
            currentGalleryIndex = (currentGalleryIndex - 1 + currentGalleryItems.length) % currentGalleryItems.length;
            window.updateGalleryModalView();
        });
    }

    if (nextGalleryBtn) {
        nextGalleryBtn.addEventListener('click', () => {
            if (!currentGalleryItems.length) return;
            currentGalleryIndex = (currentGalleryIndex + 1) % currentGalleryItems.length;
            window.updateGalleryModalView();
        });
    }

    /* ==========================================================================
       3. SERVICES PAGE & SERVICE MODAL HANDLERS
       ========================================================================== */
    const locationButtons = document.querySelectorAll('.location-btn');
    const serviceWrappers = document.querySelectorAll('.service-wrapper');

    locationButtons.forEach(button => {
        button.addEventListener('click', function () {
            locationButtons.forEach(btn => {
                btn.classList.remove('bg-primary', 'text-white', 'shadow-md');
                btn.classList.add('text-slate-600', 'hover:text-primary');
            });

            this.classList.remove('text-slate-600', 'hover:text-primary');
            this.classList.add('bg-primary', 'text-white', 'shadow-md');

            serviceWrappers.forEach(wrapper => wrapper.classList.add('hidden'));

            const locationId = this.dataset.location;
            const activeWrapper = document.getElementById('location-' + locationId);
            if (activeWrapper) activeWrapper.classList.remove('hidden');
        });
    });

    const serviceModal = document.getElementById('serviceModal');
    const serviceModalBackdrop = document.getElementById('serviceModalBackdrop');
    const serviceModalClose = document.getElementById('serviceModalClose');
    const serviceModalTitle = document.getElementById('serviceModalTitle');
    const serviceModalSubtitle = document.getElementById('serviceModalSubtitle');
    const serviceModalDescription = document.getElementById('serviceModalDescription');
    const serviceModalIcon = document.getElementById('serviceModalIcon');

    window.openServiceModal = function (button) {
        if (!serviceModal) return;
        const title = button.dataset.title || '';
        const subtitle = button.dataset.subtitle || '';
        const associatedTitle = button.dataset.associatedTitle || 'fa-solid fa-stethoscope';
        const description = button.dataset.description || '';

        if (serviceModalTitle) serviceModalTitle.textContent = title;
        if (serviceModalSubtitle) serviceModalSubtitle.textContent = subtitle;
        if (serviceModalDescription) serviceModalDescription.textContent = description;
        if (serviceModalIcon) serviceModalIcon.className = associatedTitle + ' text-xl';

        serviceModal.classList.remove('hidden');
        serviceModal.classList.add('flex');
        serviceModal.setAttribute('aria-hidden', 'false');
        document.body.classList.add('overflow-hidden');
    };

    window.closeServiceModal = function () {
        if (!serviceModal) return;
        serviceModal.classList.add('hidden');
        serviceModal.classList.remove('flex');
        serviceModal.setAttribute('aria-hidden', 'true');
        document.body.classList.remove('overflow-hidden');
    };

    document.querySelectorAll('.service-modal-trigger').forEach(button => {
        button.addEventListener('click', function () {
            window.openServiceModal(this);
        });
    });

    if (serviceModalClose) serviceModalClose.addEventListener('click', window.closeServiceModal);
    if (serviceModalBackdrop) serviceModalBackdrop.addEventListener('click', window.closeServiceModal);

    /* ==========================================================================
       4. DOCTORS PAGE FILTERING SYSTEM
       ========================================================================== */
    const doctorDataElement = document.getElementById('doctorData');
    if (doctorDataElement) {
        let doctors = [];
        try {
            doctors = JSON.parse(doctorDataElement.textContent || '[]');
        } catch (e) {
            doctors = [];
        }

        const doctorLoader = document.getElementById("doctorLoader");
        const doctorGrid = document.getElementById("doctorGrid");
        const departmentSelect = document.getElementById("departmentFilter");
        const doctorSearchInput = document.getElementById("doctorSearch");
        const locationFilterSelect = document.getElementById("locationFilter");
        const resetFiltersBtn = document.getElementById("resetFilters");
        const clearSearchBtn = document.getElementById("clearSearchBtn");

        function showDoctorLoader() {
            if (doctorLoader) doctorLoader.classList.remove("hidden");
            if (doctorGrid) doctorGrid.classList.add("hidden");
        }

        function hideDoctorLoader() {
            if (doctorLoader) doctorLoader.classList.add("hidden");
            if (doctorGrid) doctorGrid.classList.remove("hidden");
        }

        function populateDepartments() {
            if (!departmentSelect) return;
            departmentSelect.innerHTML = `<option value="">All Departments</option>`;
            const departments = [...new Set(doctors.map(item => item.department).filter(Boolean))];
            departments.forEach(department => {
                departmentSelect.insertAdjacentHTML(
                    "beforeend",
                    `<option value="${department}">${department}</option>`
                );
            });
        }

        function renderDoctors(data) {
            if (!doctorGrid) return;
            const doctorCount = document.getElementById("doctorCount");
            const emptyState = document.getElementById("doctorEmptyState");
            doctorGrid.innerHTML = "";

            if (doctorCount) {
                doctorCount.innerText = `${data.length} Doctor${data.length !== 1 ? "s" : ""}`;
            }

            if (data.length === 0) {
                if (emptyState) emptyState.classList.remove("hidden");
                return;
            }

            if (emptyState) emptyState.classList.add("hidden");

            data.forEach((doctor, index) => {
                doctorGrid.insertAdjacentHTML(
                    "beforeend",
                    `<article class="group bg-white border border-slate-200 hover:border-secondary hover:shadow-xl transition-all duration-500 overflow-hidden">
                        <div class="relative overflow-hidden">
                            <img
                                src="${doctor.image}"
                                alt="${doctor.name}"
                                class="w-full h-[280px] object-cover transition duration-700 group-hover:scale-105">
                            <div class="absolute top-4 left-4">
                                <span class="bg-primary text-white px-4 py-2 text-xs font-semibold">
                                    ${doctor.location}
                                </span>
                            </div>
                        </div>
                        <div class="p-6">
                            <span class="text-secondary text-sm font-semibold">
                                ${doctor.department}
                            </span>
                            <h3 class="text-primary text-xl font-black mt-2">
                                ${doctor.name}
                            </h3>
                            <p class="text-slate-500 text-sm mt-1 leading-7">
                                ${doctor.qualification}
                            </p>
                            <button
                                type="button"
                                class="doctor-profile-btn btn-primary w-full mt-2"
                                data-index="${index}">
                                View Profile
                            </button>
                        </div>
                    </article>`
                );
            });

            doctorGrid.querySelectorAll('.doctor-profile-btn').forEach(btn => {
                btn.addEventListener('click', function () {
                    const idx = parseInt(this.dataset.index);
                    if (data[idx]) window.renderDoctorModal(data[idx]);
                });
            });
        }

        function filterDoctors() {
            showDoctorLoader();
            setTimeout(() => {
                const keyword = (doctorSearchInput?.value || "").toLowerCase();
                const department = departmentSelect?.value || "";
                const location = locationFilterSelect?.value || "";

                const filtered = doctors.filter(doctor => {
                    const matchSearch = doctor.name.toLowerCase().includes(keyword);
                    const matchDepartment = department === "" || doctor.department === department;
                    const matchLocation = location === "" || doctor.location === location;
                    return matchSearch && matchDepartment && matchLocation;
                });
                renderDoctors(filtered);
                hideDoctorLoader();
            }, 300);
        }

        populateDepartments();
        renderDoctors(doctors);

        if (doctorSearchInput) doctorSearchInput.addEventListener("input", filterDoctors);
        if (departmentSelect) departmentSelect.addEventListener("change", filterDoctors);
        if (locationFilterSelect) locationFilterSelect.addEventListener("change", filterDoctors);

        const resetAll = () => {
            if (doctorSearchInput) doctorSearchInput.value = "";
            if (departmentSelect) departmentSelect.value = "";
            if (locationFilterSelect) locationFilterSelect.value = "";
            renderDoctors(doctors);
        };

        if (resetFiltersBtn) resetFiltersBtn.addEventListener("click", resetAll);
        if (clearSearchBtn) clearSearchBtn.addEventListener("click", resetAll);
    }

    /* ==========================================================================
       5. PUBLICATIONS & HEALTH INFORMATION PAGINATED TABLES
       ========================================================================== */
    const publicationsDataEl = document.getElementById("publicationsData") || document.getElementById("healthInformationData");
    const publicationTable = document.getElementById("publicationTable");

    if (publicationsDataEl && publicationTable) {
        let publications = [];
        try {
            publications = JSON.parse(publicationsDataEl.textContent || "[]");
        } catch (e) {
            publications = [];
        }

        const pagination = document.getElementById("publicationPagination");
        const loader = document.getElementById("publicationLoader");
        const content = document.getElementById("publicationContent");
        const searchInput = document.getElementById("searchInput");
        const perPageSelect = document.getElementById("perPage");

        let currentPage = 1;
        let perPage = parseInt(perPageSelect?.value || 5);
        let search = "";

        function showPubLoader() {
            if (loader) loader.classList.remove("hidden");
            if (content) {
                content.style.opacity = ".3";
                content.style.pointerEvents = "none";
            }
        }

        function hidePubLoader() {
            if (loader) loader.classList.add("hidden");
            if (content) {
                content.style.opacity = "1";
                content.style.pointerEvents = "auto";
            }
        }

        function escapeHtml(value) {
            const div = document.createElement("div");
            div.textContent = value ?? "";
            return div.innerHTML;
        }

        function getActionButtons(item) {
            if (item.documents && item.documents.length) {
                let buttons = "";
                item.documents.forEach(doc => {
                    buttons += `
                        <a href="${doc.file}"
                           target="_blank"
                           rel="noopener noreferrer"
                           class="inline-flex items-center gap-2 text-primary font-semibold mr-3">
                            <i class="fa-solid fa-file-pdf text-secondary"></i>
                            ${escapeHtml(doc.title || 'View PDF')}
                        </a>
                    `;
                });
                return buttons;
            }
            if (item.file) {
                return `
                    <a href="${item.file}"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="inline-flex items-center gap-2 text-primary font-semibold">
                        <i class="fa-solid fa-file-pdf text-secondary"></i>
                        View PDF
                    </a>
                `;
            }
            return `<span class="text-slate-400">No Document</span>`;
        }

        function renderPubTable(data) {
            publicationTable.innerHTML = "";
            if (!data.length) {
                publicationTable.innerHTML = `
                    <tr>
                        <td colspan="3" class="px-5 py-8 text-center text-slate-500">
                            No records found
                        </td>
                    </tr>
                `;
                return;
            }
            data.forEach((item, index) => {
                const serialNumber = (currentPage - 1) * perPage + index + 1;
                publicationTable.innerHTML += `
                    <tr class="border-b border-slate-200 hover:bg-slate-100 transition">
                        <td class="px-5 py-4 font-semibold text-primary">
                            ${serialNumber}
                        </td>
                        <td class="px-5 py-4 text-slate-700">
                            <strong>${escapeHtml(item.title)}</strong>
                            ${item.content ? `<br>${item.content}` : ''}
                        </td>
                        <td class="px-5 py-4 text-center">
                            ${getActionButtons(item)}
                        </td>
                    </tr>
                `;
            });
        }

        function renderPubPagination(totalPages) {
            if (!pagination) return;
            pagination.innerHTML = "";
            if (totalPages <= 1) return;

            for (let i = 1; i <= totalPages; i++) {
                pagination.innerHTML += `
                    <button
                        type="button"
                        data-page="${i}"
                        class="pub-page-btn px-4 py-2 border transition
                        ${currentPage === i
                            ? "bg-primary text-white border-primary"
                            : "bg-white text-primary border-slate-300 hover:bg-primary hover:text-white"}">
                        ${i}
                    </button>
                `;
            }

            pagination.querySelectorAll(".pub-page-btn").forEach(btn => {
                btn.addEventListener("click", function () {
                    currentPage = parseInt(this.dataset.page);
                    fetchPubs();
                });
            });
        }

        function fetchPubs() {
            showPubLoader();
            setTimeout(() => {
                const searchTerm = search.trim().toLowerCase();
                const filtered = publications.filter(item => (item.title || "").toLowerCase().includes(searchTerm));
                const totalPages = Math.ceil(filtered.length / perPage);
                if (currentPage > totalPages && totalPages > 0) currentPage = 1;

                const start = (currentPage - 1) * perPage;
                const data = filtered.slice(start, start + perPage);
                renderPubTable(data);
                renderPubPagination(totalPages);
                hidePubLoader();
            }, 300);
        }

        if (perPageSelect) {
            perPageSelect.addEventListener("change", function () {
                perPage = parseInt(this.value);
                currentPage = 1;
                fetchPubs();
            });
        }

        if (searchInput) {
            let typingTimer;
            searchInput.addEventListener("input", function () {
                clearTimeout(typingTimer);
                const val = this.value;
                typingTimer = setTimeout(() => {
                    search = val;
                    currentPage = 1;
                    fetchPubs();
                }, 300);
            });
        }

        fetchPubs();
    }

    /* ==========================================================================
       6. HISTORY TIMELINE SCROLL & INTERACTION
       ========================================================================== */
    const historySection = document.getElementById("history-section");
    const historyDataEl = document.getElementById("historyData");
    if (historySection && historyDataEl) {
        const scrollContainer = document.getElementById("history-scroll-container");
        const sticky = document.getElementById("history-sticky");
        const buttons = document.querySelectorAll(".history-year");

        if (scrollContainer && sticky && buttons.length) {
            let historyData = {};
            try {
                historyData = JSON.parse(historyDataEl.textContent || "{}");
            } catch (e) {
                historyData = {};
            }

            const historyIds = [];
            buttons.forEach(button => {
                const id = String(button.dataset.historyId);
                if (id && !historyIds.includes(id)) {
                    historyIds.push(id);
                }
            });

            if (historyIds.length) {
                const image = document.getElementById("historyImage");
                const year = document.getElementById("historyYear");
                const title = document.getElementById("historyTitle");
                const description = document.getElementById("historyDescription");
                const mobileImage = document.getElementById("historyImageMobile");
                const mobileYear = document.getElementById("historyYearMobile");
                const mobileTitle = document.getElementById("historyTitleMobile");
                const mobileDescription = document.getElementById("historyDescriptionMobile");

                let currentIndex = 0;
                let clickScrolling = false;
                let scrollTimeout = null;
                let ticking = false;

                function updateActiveButton(index) {
                    const activeId = String(historyIds[index]);
                    buttons.forEach(button => {
                        const buttonId = String(button.dataset.historyId);
                        const dot = button.querySelector(".history-year-dot");
                        if (buttonId === activeId) {
                            button.classList.add("active");
                            if (dot) {
                                dot.classList.remove("bg-slate-300");
                                dot.classList.add("bg-secondary");
                            }
                        } else {
                            button.classList.remove("active");
                            if (dot) {
                                dot.classList.remove("bg-secondary");
                                dot.classList.add("bg-slate-300");
                            }
                        }
                    });
                }

                function showHistory(index) {
                    if (index < 0 || index >= historyIds.length) return;
                    const id = String(historyIds[index]);
                    const data = historyData[id];
                    if (!data) return;
                    currentIndex = index;

                    if (year) year.textContent = data.year || "";
                    if (title) title.textContent = data.title || "";
                    if (description) description.textContent = data.description || "";
                    if (image && data.image) {
                        image.src = data.image;
                        image.alt = data.title || "";
                    }

                    if (mobileYear) mobileYear.textContent = data.year || "";
                    if (mobileTitle) mobileTitle.textContent = data.title || "";
                    if (mobileDescription) mobileDescription.textContent = data.description || "";
                    if (mobileImage && data.image) {
                        mobileImage.src = data.image;
                        mobileImage.alt = data.title || "";
                    }

                    updateActiveButton(index);
                }

                function setupScrollHeight() {
                    if (window.innerWidth < 1024) {
                        scrollContainer.style.height = "";
                        return;
                    }
                    const visibleHeight = sticky.offsetHeight;
                    const perItem = Math.round(window.innerHeight * 0.8);
                    const totalScroll = Math.max(0, (historyIds.length - 1) * perItem);
                    scrollContainer.style.height = (visibleHeight + totalScroll) + "px";
                }

                function updateFromScroll() {
                    if (window.innerWidth < 1024 || clickScrolling) return;
                    const rect = scrollContainer.getBoundingClientRect();
                    const stickyTop = sticky.offsetTop;
                    const travelled = Math.max(0, -rect.top + stickyTop);
                    const totalScroll = scrollContainer.offsetHeight - sticky.offsetHeight;
                    if (totalScroll <= 0) return;
                    let progress = Math.max(0, Math.min(1, travelled / totalScroll));
                    const index = Math.round(progress * (historyIds.length - 1));
                    if (index !== currentIndex) showHistory(index);
                }

                buttons.forEach(button => {
                    button.addEventListener("click", function (event) {
                        event.preventDefault();
                        const id = String(this.dataset.historyId);
                        const index = historyIds.indexOf(id);
                        if (index === -1) return;
                        showHistory(index);

                        if (window.innerWidth >= 1024) {
                            const totalScroll = scrollContainer.offsetHeight - sticky.offsetHeight;
                            const progress = historyIds.length <= 1 ? 0 : index / (historyIds.length - 1);
                            const containerTop = scrollContainer.getBoundingClientRect().top + window.scrollY;
                            const target = containerTop + (sticky.offsetTop || 0) + (totalScroll * progress);
                            clickScrolling = true;
                            clearTimeout(scrollTimeout);
                            window.scrollTo({ top: target, behavior: "smooth" });
                            scrollTimeout = setTimeout(() => {
                                clickScrolling = false;
                                updateFromScroll();
                            }, 900);
                        } else {
                            this.scrollIntoView({ behavior: "smooth", block: "center" });
                        }
                    });
                });

                window.addEventListener("scroll", () => {
                    if (ticking) return;
                    ticking = true;
                    requestAnimationFrame(() => {
                        updateFromScroll();
                        ticking = false;
                    });
                }, { passive: true });

                window.addEventListener("resize", () => {
                    setupScrollHeight();
                    updateFromScroll();
                });

                showHistory(0);
                setupScrollHeight();
            }
        }
    }

    const historyGalleryGrid = document.getElementById("historyGalleryGrid");
    if (historyGalleryGrid) {
        historyGalleryGrid.addEventListener("click", function (e) {
            const item = e.target.closest(".history-gallery-item");
            if (!item) return;

            const allItems = Array.from(document.querySelectorAll("#historyGalleryGrid .history-gallery-item"));
            const itemsData = allItems.map(el => ({
                src: el.dataset.src || "",
                title: el.dataset.title || "",
                subtitle: el.dataset.subtitle || "CIWEC History",
                description: el.dataset.description || ""
            }));

            const index = allItems.indexOf(item);
            if (index !== -1 && window.openGalleryModal) {
                window.openGalleryModal(itemsData, index);
            }
        });
    }

    /* ==========================================================================
       7. GALLERY PAGE FILTER & LIGHTBOX
       ========================================================================== */
    const galleryGrid = document.getElementById("galleryGrid");
    if (galleryGrid) {
        galleryGrid.addEventListener("click", (e) => {
            const item = e.target.closest(".gallery-item");
            if (!item) return;

            const visibleItems = Array.from(document.querySelectorAll("#galleryGrid .gallery-item")).filter(
                el => el.style.display !== "none"
            );

            const itemsData = visibleItems.map(el => {
                const img = el.querySelector("img");
                return {
                    src: img ? img.src : "",
                    title: img ? img.alt : "CIWEC Hospital Gallery",
                    subtitle: "Gallery",
                    description: ""
                };
            });

            const clickedIndex = visibleItems.indexOf(item);
            if (clickedIndex !== -1 && window.openGalleryModal) {
                window.openGalleryModal(itemsData, clickedIndex);
            }
        });
    }

    const filterButtons = document.querySelectorAll(".gallery-filter");
    const galleryItems = document.querySelectorAll(".gallery-item");
    if (filterButtons.length && galleryItems.length) {
        filterButtons.forEach(button => {
            button.addEventListener("click", () => {
                filterButtons.forEach(btn => btn.classList.remove("active"));
                button.classList.add("active");
                const filter = button.dataset.filter;
                galleryItems.forEach(item => {
                    item.style.display = filter === "all" || item.classList.contains(filter) ? "" : "none";
                });
            });
        });
    }

    /* ==========================================================================
       8. BOOK APPOINTMENT FLATPICKR & TIME SLOTS
       ========================================================================== */
    const appointmentDateInput = document.getElementById('appointment_date');
    const appointmentTimeSelect = document.getElementById('appointment_time');

    if (appointmentDateInput && typeof flatpickr !== "undefined") {
        flatpickr(appointmentDateInput, {
            dateFormat: "Y-m-d",
            minDate: "today",
            disableMobile: true
        });
    }

    if (appointmentDateInput && appointmentTimeSelect) {
        function formatDate(date) {
            return date.toISOString().split('T')[0];
        }

        function populateTimes() {
            appointmentTimeSelect.innerHTML = '';
            const selectedDate = appointmentDateInput.value;
            const today = formatDate(new Date());
            const now = new Date();
            let slotsAdded = 0;

            for (let hour = 9; hour <= 17; hour++) {
                for (let minute = 0; minute < 60; minute += 30) {
                    const hh = String(hour).padStart(2, '0');
                    const mm = String(minute).padStart(2, '0');
                    if (selectedDate === today) {
                        if (hour < now.getHours() || (hour === now.getHours() && minute <= now.getMinutes())) {
                            continue;
                        }
                    }
                    const option = document.createElement('option');
                    option.value = `${hh}:${mm}`;
                    const displayHour = hour > 12 ? hour - 12 : hour;
                    const ampm = hour >= 12 ? 'PM' : 'AM';
                    option.text = `${displayHour}:${mm} ${ampm}`;
                    appointmentTimeSelect.appendChild(option);
                    slotsAdded++;
                }
            }

            if (slotsAdded === 0) {
                const option = document.createElement('option');
                option.value = "";
                option.text = "No slots available for today.";
                option.disabled = true;
                option.selected = true;
                appointmentTimeSelect.appendChild(option);
            }
        }

        appointmentDateInput.addEventListener('change', populateTimes);
        populateTimes();
    }

    /* ==========================================================================
       9. HEALTH SCREENING FAQ ACCORDIONS
       ========================================================================== */
    const faqItems = document.querySelectorAll(".faq-item");
    if (faqItems.length) {
        faqItems.forEach((item) => {
            const button = item.querySelector(".faq-btn");
            if (button) {
                button.addEventListener("click", () => {
                    const isActive = item.classList.contains("active");
                    faqItems.forEach((faq) => faq.classList.remove("active"));
                    if (!isActive) item.classList.add("active");
                });
            }
        });
    }

    /* ==========================================================================
       10. FRONTPAGE MODEL SWITCHER & VIDEO MODAL
       ========================================================================== */
    const modelItems = document.querySelectorAll('.model-item');
    const centerImage = document.getElementById('centerImage');
    if (modelItems.length && centerImage) {
        modelItems.forEach(item => {
            item.addEventListener('click', () => {
                modelItems.forEach(i => i.classList.remove('active'));
                item.classList.add('active');
                centerImage.style.opacity = '0';
                centerImage.style.transform = 'scale(.95)';
                setTimeout(() => {
                    centerImage.src = item.dataset.image;
                    centerImage.style.opacity = '1';
                    centerImage.style.transform = 'scale(1)';
                }, 250);
            });
        });
    }

    /* Video Lightbox */
    const videoModal = document.getElementById("videoModal");
    const storyVideo = document.getElementById("storyVideo");
    const videoFrame = document.getElementById("videoFrame");
    const closeVideoModal = document.getElementById("closeVideoModal") || document.getElementById("closeVideo");

    if (videoModal) {
        document.querySelectorAll(".story-card[data-video], .videoBtn").forEach(trigger => {
            trigger.addEventListener("click", (e) => {
                e.preventDefault();
                const videoUrl = trigger.dataset.video;
                if (!videoUrl) return;

                const targetMedia = storyVideo || videoFrame;
                if (targetMedia) {
                    const separator = videoUrl.includes("?") ? "&" : "?";
                    targetMedia.src = `${videoUrl}${separator}autoplay=1&rel=0`;
                    videoModal.classList.remove("hidden");
                    videoModal.classList.add("flex");
                    document.body.style.overflow = "hidden";
                }
            });
        });

        const closeModal = () => {
            videoModal.classList.add("hidden");
            videoModal.classList.remove("flex");
            if (storyVideo) storyVideo.src = "";
            if (videoFrame) videoFrame.src = "";
            document.body.style.overflow = "";
        };

        if (closeVideoModal) closeVideoModal.addEventListener("click", closeModal);
        videoModal.addEventListener("click", (e) => {
            if (e.target === videoModal) closeModal();
        });
    }

    /* KEYBOARD ESCAPE LISTENER FOR ALL MODALS */
    document.addEventListener("keydown", (e) => {
        if (e.key === "Escape") {
            if (window.closeDoctorModal) window.closeDoctorModal();
            if (window.closeGalleryModal) window.closeGalleryModal();
            if (window.closeServiceModal) window.closeServiceModal();
        }
    });

    /* ==========================================================================
       11. CORE SWIPERS & UTILITIES
       ========================================================================== */
    if (document.querySelector(".awardSwiper") && typeof Swiper !== "undefined") {
        new Swiper(".awardSwiper", {
            loop: true,
            speed: 1000,
            spaceBetween: 24,
            autoplay: { delay: 3000, disableOnInteraction: false, pauseOnMouseEnter: true },
            pagination: { el: ".award-pagination", clickable: true },
            breakpoints: { 0: { slidesPerView: 1 }, 768: { slidesPerView: 2 }, 1280: { slidesPerView: 3 } }
        });
    }

    if (document.querySelector(".patientStoriesSwiper") && typeof Swiper !== "undefined") {
        new Swiper(".patientStoriesSwiper", {
            loop: true,
            speed: 1000,
            spaceBetween: 20,
            autoplay: { delay: 2500, disableOnInteraction: false, pauseOnMouseEnter: true },
            pagination: { el: ".patient-story-pagination", clickable: true },
            breakpoints: { 0: { slidesPerView: 1 }, 768: { slidesPerView: 2 } }
        });
    }

    if (document.querySelector(".specialitySwiper") && typeof Swiper !== "undefined") {
        new Swiper(".specialitySwiper", {
            loop: false,
            speed: 900,
            slidesPerView: 1.15,
            spaceBetween: 1,
            autoplay: true,
            pagination: { el: ".speciality-pagination", clickable: true },
            breakpoints: { 640: { slidesPerView: 2.1 }, 1024: { slidesPerView: 3.2 }, 1280: { slidesPerView: 4.5 } }
        });
    }

    if (document.querySelector(".reviewSwiper") && typeof Swiper !== "undefined") {
        new Swiper(".reviewSwiper", {
            loop: true,
            speed: 1000,
            spaceBetween: 24,
            autoplay: { delay: 2500, disableOnInteraction: false, pauseOnMouseEnter: true },
            breakpoints: { 0: { slidesPerView: 1 }, 768: { slidesPerView: 2 }, 1280: { slidesPerView: 3 } }
        });
    }

    /* GLightbox Inline Modal Initialization for Testimonials */
    if (typeof GLightbox !== "undefined" && document.querySelector(".testimonial-lightbox, [data-glightbox]")) {
        GLightbox({
            selector: '.testimonial-lightbox, [data-glightbox]',
            touchNavigation: true,
            loop: false,
            autoplayVideos: true
        });
    }

    /* Back To Top + Scroll Progress */
    const backToTop = document.getElementById("backToTop");
    const progressCircle = document.getElementById("scrollProgress");
    if (backToTop) {
        backToTop.onclick = () => window.scrollTo({ top: 0, behavior: "smooth" });
        window.addEventListener("scroll", () => {
            if (window.scrollY > 250) {
                backToTop.classList.remove("opacity-0", "pointer-events-none", "translate-y-8");
                backToTop.classList.add("opacity-100", "translate-y-0");
            } else {
                backToTop.classList.add("opacity-0", "pointer-events-none", "translate-y-8");
                backToTop.classList.remove("opacity-100", "translate-y-0");
            }

            if (progressCircle) {
                const scrollTop = window.scrollY;
                const docHeight = document.documentElement.scrollHeight - window.innerHeight;
                const progress = scrollTop / docHeight;
                progressCircle.style.strokeDashoffset = 289 - progress * 289;
            }
        });
    }

    /* Header Shadow */
    const header = document.getElementById("header");
    if (header) {
        window.addEventListener("scroll", () => {
            header.classList.toggle("shadow-md", window.scrollY > 20);
        });
    }

    /* Search Toggle */
    const searchToggle = document.getElementById("searchToggle");
    const searchWrapper = document.getElementById("searchWrapper");
    const searchOverlay = document.getElementById("searchOverlay");
    if (searchToggle && searchWrapper && searchOverlay) {
        searchToggle.addEventListener("click", (e) => {
            e.stopPropagation();
            searchWrapper.classList.toggle("search-active");
        });
        searchOverlay.addEventListener("click", () => searchWrapper.classList.remove("search-active"));
    }

    /* Counter Animation */
    const counters = document.querySelectorAll(".counter");
    if (counters.length) {
        const counterObserver = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        const counter = entry.target;
                        const target = +(counter.dataset.target || counter.dataset.count);
                        let current = 0;
                        const increment = target / 120;
                        const updateCounter = () => {
                            if (current < target) {
                                current += increment;
                                counter.innerText = Math.floor(current);
                                requestAnimationFrame(updateCounter);
                            } else {
                                counter.innerText = target.toLocaleString() + "+";
                            }
                        };
                        updateCounter();
                        counterObserver.unobserve(counter);
                    }
                });
            },
            { threshold: 0.4 }
        );
        counters.forEach((counter) => counterObserver.observe(counter));
    }

    /* ==========================================================================
       12. NAVIGATION & MOBILE MENU SYSTEM
       ========================================================================== */
    const menuToggle = document.getElementById("menuToggle");
    const mobileMenu = document.getElementById("mobileMenu");
    const mobileOverlay = document.getElementById("mobileOverlay");
    const closeMenu = document.getElementById("closeMenu");
    const whatsappWidget = document.querySelector(".whatsapp-widget");
    const mobileDropdowns = document.querySelectorAll(".mobile-dropdown");

    function openMobileMenu() {
        mobileMenu?.classList.add("active");
        mobileOverlay?.classList.add("active");
        document.body.classList.add("menu-open");
        whatsappWidget?.classList.add("hidden");
    }

    function closeMobileMenu() {
        mobileMenu?.classList.remove("active");
        mobileOverlay?.classList.remove("active");
        document.body.classList.remove("menu-open");
        whatsappWidget?.classList.remove("hidden");
        mobileDropdowns.forEach(dropdown => {
            dropdown.classList.remove("active");
        });
    }

    menuToggle?.addEventListener("click", openMobileMenu);
    closeMenu?.addEventListener("click", closeMobileMenu);
    mobileOverlay?.addEventListener("click", closeMobileMenu);

    mobileDropdowns.forEach(dropdown => {
        const button = dropdown.querySelector(".mobile-dropdown-btn");
        if (!button) return;

        button.addEventListener("click", (e) => {
            e.preventDefault();
            e.stopPropagation();

            mobileDropdowns.forEach(item => {
                if (item !== dropdown && item.classList.contains("active")) {
                    item.classList.remove("active");
                }
            });

            dropdown.classList.toggle("active");
        });
    });

    const searchToggles = document.querySelectorAll(".searchToggle, .searchToggleMobile");
    const closeSearch = document.getElementById("closeSearch");

    function openSearch() {
        if (searchWrapper) {
            searchWrapper.classList.add("search-active");
            document.body.classList.add("menu-open");
        }
    }

    function closeSearchModal() {
        if (searchWrapper) {
            searchWrapper.classList.remove("search-active");
            document.body.classList.remove("menu-open");
        }
    }

    searchToggles.forEach(btn => {
        btn.addEventListener("click", (e) => {
            e.preventDefault();
            openSearch();
        });
    });

    closeSearch?.addEventListener("click", closeSearchModal);

    const dropdownParents = document.querySelectorAll(".dropdown-parent");
    const dropdownMenus = document.querySelectorAll(".dropdown-menu");

    function closeAllDropdowns() {
        dropdownMenus.forEach(menu => menu.classList.remove("active"));
        dropdownParents.forEach(parent => parent.classList.remove("active"));
    }

    dropdownParents.forEach(parent => {
        const toggle = parent.querySelector(".dropdown-toggle");
        if (!toggle) return;

        const dropdownId = toggle.dataset.dropdown;
        const menu = document.getElementById(dropdownId);
        if (!menu) return;

        parent.addEventListener("mouseenter", () => {
            if (window.innerWidth >= 1024) {
                closeAllDropdowns();
                menu.classList.add("active");
                parent.classList.add("active");
            }
        });

        parent.addEventListener("mouseleave", () => {
            if (window.innerWidth >= 1024) {
                menu.classList.remove("active");
                parent.classList.remove("active");
            }
        });

        toggle.addEventListener("click", (e) => {
            if (window.innerWidth >= 1024) {
                e.preventDefault();
                const isActive = menu.classList.contains("active");
                closeAllDropdowns();
                if (!isActive) {
                    menu.classList.add("active");
                    parent.classList.add("active");
                }
            }
        });
    });

    document.addEventListener("click", (e) => {
        if (!e.target.closest(".dropdown-parent")) {
            closeAllDropdowns();
        }
    });
});
