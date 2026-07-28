@extends('themes.default.common.master')
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('content')

    <section class="section-padding bg-white overflow-hidden">
        <div class="container-custom">
            <!-- HEADER -->
            <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6 mb-10">
                <div class="max-w-3xl">
                    <span
                        class="inline-flex items-center gap-2 text-secondary text-xs font-semibold uppercase tracking-[3px] mb-4">
                        <span class="w-2 h-2 bg-secondary"></span>
                        Research Publications
                    </span>
                    <h2 class="text-primary text-3xl md:text-4xl xl:text-4xl font-black leading-tight mb-4">
                        <!-- HealthInformations & Publications -->
                        <?= $page['heading'] ?>
                    </h2>
                    <p class="text-slate-600 text-base md:text-lg leading-8">
                        <!-- Explore healthcare updates, travel medicine insights,
                        research publications and hospital healthdata. -->
                        <?= $page['description'] ?>
                    </p>
                </div>
                <a href="#" class="inline-flex items-center gap-3 text-primary font-bold group">
                    View All Publications
                    <span
                        class="w-9 h-9 bg-secondary text-white flex items-center justify-center transition-all duration-300 group-hover:translate-x-1">
                        <i class="fa-solid fa-arrow-right text-xs"></i>
                    </span>
                </a>
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
                        <input type="text" id="searchInput" placeholder="Search publications..."
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
        const currentType = "<?= $type ?>";
        const actionType = "<?= $page['action_type'] ?>";
    </script>
@endsection
