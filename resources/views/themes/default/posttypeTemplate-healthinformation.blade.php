@extends('themes.default.common.master')
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('content')
    @include('themes.default.common.herobanner')

    <section class="section-padding bg-white overflow-hidden">
        <div class="container-custom">
            <!-- HEADER -->
            <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6 mb-10">
                <div class="max-w-3xl">
                    <span
                        class="inline-flex items-center gap-2 text-secondary text-xs font-semibold uppercase tracking-[3px] mb-4">
                        <span class="w-2 h-2 bg-secondary"></span>
                        Research Health Information
                    </span>
                    <h2 class="text-primary text-3xl md:text-4xl xl:text-4xl font-black leading-tight mb-4">
                        Health Informations

                    </h2>
                    <p class="text-slate-600 text-base md:text-lg leading-8">
                        Explore health care updates, travel medicine insights,
                        research health information and hospital healthdata.

                    </p>
                </div>
            </div>
            <!-- FILTER BAR -->
            <div class="border border-slate-200 bg-slate-100 p-5 md:p-6 mb-6">
                <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-5">
                    <!-- LEFT -->
                    <div class="flex items-center gap-3">
                        <span class="text-sm font-semibold text-primary">
                            Show
                        </span>
                        <select id="perPage"
                            class="h-11 px-4 border border-slate-300 bg-white text-sm text-slate-700 focus:border-secondary outline-none">
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="20">20</option>
                        </select>
                        <span class="text-sm text-slate-600">
                            entries
                        </span>
                    </div>
                    <!-- SEARCH -->
                    <div class="relative w-full lg:w-[320px]">
                        <input type="text" id="searchInput" placeholder="Search healthinformation..."
                            class="w-full h-11 pl-11 pr-4 border border-slate-300 bg-white text-sm outline-none focus:border-secondary">
                        <i class="fa-solid fa-magnifying-glass absolute left-4 top-1/2 -translate-y-1/2 text-slate-400">
                        </i>
                    </div>
                </div>
            </div>
            <!-- LOADER -->
            <div id="publicationLoader" class="hidden py-12">
                <div
                    class="w-12 h-12 border-[3px]
                border-slate-200
                border-t-secondary
                rounded-full
                animate-spin
                mx-auto">
                </div>
            </div>
            <!-- CONTENT -->
            <div id="publicationContent">
                <!-- TABLE -->
                <div class="overflow-x-auto border border-slate-200 bg-white">
                    <table class="w-full">
                        <thead>
                            <tr class="bg-primary text-white">
                                <th class="px-5 py-4 text-left text-sm font-bold uppercase tracking-wide">
                                    #
                                </th>
                                <th class="px-5 py-4 text-left text-sm font-bold uppercase tracking-wide">
                                    Publication Title
                                </th>
                                <th class="px-5 py-4 text-center text-sm font-bold uppercase tracking-wide">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody id="publicationTable">
                            <!-- AJAX DATA -->
                        </tbody>
                    </table>
                </div>
                <!-- PAGINATION -->
                <div id="publicationPagination" class="flex flex-wrap justify-center gap-2 mt-8">
                </div>
            </div>
        </div>
    </section>

    <script>
        const healthinformation = {!! json_encode(
            $healthinformation->map(function ($post) {
                    return [
                        'id' => $post->id,
                        'title' => $post->post_title,
                        'documents' => $post->documents->map(function ($doc) {
                                return [
                                    'title' => $doc->title,
                                    'file' => asset('uploads/doc/' . $doc->document),
                                ];
                            })->values(),
                        'detailsUrl' => url('page/' . $post->uri),
                    ];
                })->values(),
        ) !!};
    </script>

    <script>
        const publicationTable = document.getElementById("publicationTable");
        if (publicationTable) {
            const pagination = document.getElementById("publicationPagination");
            const loader = document.getElementById("publicationLoader");
            const content = document.getElementById("publicationContent");
            const searchInput = document.getElementById("searchInput");
            const perPageSelect = document.getElementById("perPage");

            let currentPage = 1;
            let perPage = 5;
            let search = "";

            function showLoader() {
                if (loader)
                    loader.classList.remove("hidden");
                if (content) {
                    content.style.opacity = ".3";
                    content.style.pointerEvents = "none";
                }
            }

            function hideLoader() {
                if (loader)
                    loader.classList.add("hidden");
                if (content) {
                    content.style.opacity = "1";
                    content.style.pointerEvents = "auto";
                }
            }

            function getActionButtons(item) {
                if (!item.documents.length) {
                    return `<span class="text-slate-400">No Document</span>`;
                }
                let buttons = "";
                item.documents.forEach(doc => {
                    buttons += `
                <a href="${doc.file}"
                   target="_blank"
                   download
                   class="inline-flex items-center gap-2 text-primary font-semibold mr-3">
                    <i class="fa-solid fa-file-pdf text-secondary"></i>
                    ${doc.title}
                </a>
            `;
                });
                return buttons;
            }

            function renderTable(data) {
                publicationTable.innerHTML = "";
                if (!data.length) {
                    publicationTable.innerHTML = `
                <tr>
                    <td colspan="3"
                        class="px-5 py-8 text-center text-slate-500">
                        No records found
                    </td>
                </tr>
            `;
                    return;
                }

                data.forEach((item, index) => {
                    publicationTable.innerHTML += `
                <tr class="border-b border-slate-200 hover:bg-slate-100 transition">
                    <td class="px-5 py-4 font-semibold text-primary">
                        ${(currentPage - 1) * perPage + index + 1}
                    </td>
                    <td class="px-5 py-4 text-slate-700">
                        ${item.title}
                    </td>
                    <td class="px-5 py-4 text-center">
                        ${getActionButtons(item)}
                    </td>
                </tr>
            `;
                });

            }

            function renderPagination(totalPages) {
                if (!pagination)
                    return;
                pagination.innerHTML = "";
                if (totalPages <= 1)
                    return;
                for (let i = 1; i <= totalPages; i++) {
                    pagination.innerHTML += `
                <button
                    onclick="changePage(${i})"
                    class="px-4 py-2 border transition
                    ${currentPage === i
                        ? "bg-primary text-white border-primary"
                        : "bg-white text-primary border-slate-300 hover:bg-primary hover:text-white"}">
                    ${i}
                </button>
            `;
                }
            }

            function fetchhealthinformation() {
                showLoader();
                setTimeout(() => {
                    const filtered = healthinformation.filter(item =>
                        item.title.toLowerCase().includes(search.toLowerCase())
                    );
                    const totalPages = Math.ceil(filtered.length / perPage);
                    const start = (currentPage - 1) * perPage;
                    const data = filtered.slice(start, start + perPage);
                    renderTable(data);
                    renderPagination(totalPages);
                    hideLoader();
                }, 300);
            }
            window.changePage = function(page) {
                currentPage = page;
                fetchhealthinformation();
            }
            if (perPageSelect) {
                perPageSelect.addEventListener("change", function(e) {
                    perPage = parseInt(e.target.value);
                    currentPage = 1;
                    fetchhealthinformation();
                });
            }
            if (searchInput) {
                let typingTimer;
                searchInput.addEventListener("keyup", function(e) {
                    clearTimeout(typingTimer);
                    typingTimer = setTimeout(function() {
                        search = e.target.value;
                        currentPage = 1;
                        fetchhealthinformation();
                    }, 300);
                });
            }
            fetchhealthinformation();
        }
    </script>

@endsection
