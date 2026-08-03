@if ($history->isNotEmpty())
    @php
        $firstHistory = $history->first();
        $historyData = $history->mapWithKeys(function ($item) {
            return [
                (string) $item->id => [
                    'year' => $item->sub_title ?? '',
                    'title' => $item->post_title ?? '',
                    'description' => $item->post_excerpt ?? '',
                    'image' => !empty($item->banner)
                        ? asset('uploads/medium/' . $item->banner)
                        : asset('themes-assets/img/ciwec.webp'),
                ],
            ];
        });
    @endphp
<section class="section-padding bg-slate-100 relative overflow-hidden">
  <div class="absolute inset-x-0 bottom-0 z-0 hidden lg:block">
    <img src="{{ asset('themes-assets/img/bg-img4.webp') }}"
                class="mx-auto w-[140%] sm:w-[125%] md:w-[110%] lg:w-full h-auto object-contain opacity-[0.4]">
  </div>
  <div class="relative z-10 container-custom">
    <!-- HEADER -->
    <div class="max-w-3xl mb-8 lg:mb-10">
      <span class="inline-flex items-center gap-2 text-secondary text-xs font-semibold uppercase tracking-[3px] mb-4">
        <span class="w-2 h-2 bg-secondary">
        </span>
        Our Journey
      </span>
      <h2 class="text-primary text-3xl md:text-4xl xl:text-4xl font-black leading-tight mb-6">
        Over Four Decades of Healthcare Excellence
      </h2>
      <p class="text-slate-600 mt-5 text-base md:text-lg leading-8">
        Since 1982, CIWEC has evolved from a travel medicine clinic into
                    one of Nepal's most trusted international healthcare providers.
      </p>
    </div>
    <!-- DESKTOP TIMELINE -->
    <div class="hidden lg:block mb-8 lg:mb-10">
      <div class="relative">
        <div class="absolute left-0 right-0 top-1/2 h-px bg-slate-300">
        </div>
        <div class="flex justify-between">
          @foreach ($history as $historyItem)
          <button type="button"
                                class="history-year {{ $loop->
            first ? 'active' : '' }} relative z-10 flex flex-col items-center"
                                data-history-id="{{ $historyItem->id }}">
            <span class="w-5 h-5 rounded-full border-4 border-white bg-slate-300 shadow-lg mb-4">
            </span>
            <span class="font-bold text-primary text-sm">
              {{ $historyItem->sub_title }}
            </span>
          </button>
          @endforeach
        </div>
      </div>
    </div>
    <!-- CONTENT CARD -->
    <div class="grid lg:grid-cols-12 bg-white border border-slate-200 overflow-hidden rounded-xl shadow-sm">
      <!-- IMAGE -->
      <div class="lg:col-span-5">
        <img id="historyImage" src="{{ !empty($firstHistory->banner)
                            ? asset('uploads/medium/' . $firstHistory->banner)
                            : asset('themes-assets/img/ciwec.webp') }}"
                        alt="{{ $firstHistory->post_title }}" class="w-full h-56 sm:h-64 md:h-80 lg:h-[430px] object-cover">
      </div>
      <!-- CONTENT -->
      <div class="lg:col-span-7 flex items-center">
        <div class="p-5 sm:p-6 md:p-8 lg:p-10">
          <span id="historyYear" class="inline-flex items-center gap-2 text-secondary text-sm font-bold uppercase tracking-[2px] mb-4">
            {{ $firstHistory->sub_title }}
          </span>
          <h3 id="historyTitle" class="text-2xl md:text-3xl lg:text-4xl font-black leading-tight mb-4">
            {{ $firstHistory->post_title }}
          </h3>
          <div class="w-16 h-[3px] bg-secondary mb-5">
          </div>
          <p id="historyDescription" class="text-slate-600 text-base md:text-lg leading-7 max-w-2xl">
            {{ $firstHistory->post_excerpt }}
          </p>
        </div>
      </div>
    </div>
    <!-- MOBILE TIMELINE -->
    <div class="lg:hidden mt-6">
      <div class="space-y-3">
        @foreach ($history as $historyItem)
        <button type="button"
                            class="history-year {{ $loop->
          first ? 'active' : '' }} w-full text-left flex items-start gap-4 {{ $loop->first ? 'p-3 sm:p-4' : 'p-4' }} bg-white border border-slate-200 hover:border-secondary transition-all duration-300"
                            data-history-id="{{ $historyItem->id }}">
          <span class="flex flex-col items-center mt-1">
            <span class="w-4 h-4 rounded-full {{ $loop->
              first ? 'bg-secondary' : 'bg-slate-300' }} border-4 border-white shadow">
            </span>
          </span>
          <div>
            <h4 class="font-bold text-primary text-base sm:text-lg">
              {{ $historyItem->sub_title }}
            </h4>
            <p class="text-slate-600 text-sm mt-1 leading-6">
              {{ $historyItem->post_title }}
            </p>
          </div>
        </button>
        @endforeach
      </div>
    </div>
  </div>
</section>
<script type="application/json" id="historyData">
  {!! json_encode(
            $historyData,
            JSON_HEX_TAG |
            JSON_HEX_APOS |
            JSON_HEX_AMP |
            JSON_HEX_QUOT |
            JSON_UNESCAPED_UNICODE |
            JSON_UNESCAPED_SLASHES
        ) !!}
</script>
<script>
        const historyDataElement = document.getElementById("historyData");
        const historyButtons = document.querySelectorAll(".history-year");
        if (historyDataElement && historyButtons.length) {
            let historyData = {};
            try {
                historyData = JSON.parse(historyDataElement.textContent);
            } catch (error) {
                console.error("Unable to parse history data:", error);
                historyData = {};
            }
            const historyImage = document.getElementById("historyImage");
            const historyYear = document.getElementById("historyYear");
            const historyTitle = document.getElementById("historyTitle");
            const historyDescription = document.getElementById(
                "historyDescription"
            );
            const showHistoryItem = (historyId) => {
                const data = historyData[historyId];
                if (!data) {
                    return;
                }
                if (historyYear) {
                    historyYear.textContent = data.year || "";
                }

                if (historyTitle) {
                    historyTitle.textContent = data.title || "";
                }

                if (historyDescription) {
                    historyDescription.textContent =
                        data.description || "";
                }

                if (historyImage && data.image) {
                    historyImage.src = data.image;
                    historyImage.alt = data.title || "";
                }
                historyButtons.forEach((button) => {
                    const buttonHistoryId =
                        button.dataset.historyId;
                    if (buttonHistoryId === String(historyId)) {
                        button.classList.add("active");
                    } else {
                        button.classList.remove("active");
                    }
                });
            };
            historyButtons.forEach((button) => {
                button.addEventListener("click", function() {
                    const historyId =
                        this.dataset.historyId;
                    if (!historyId) {
                        return;
                    }
                    showHistoryItem(historyId);
                });
            });
        }
</script>
@endif