<section class="final sec" id="start"><svg class="mk" aria-hidden="true" viewBox="0 0 321 295" style="--mk-frame:#fff;--mk-green:#fff;--mk-blue:#fff">
        <use href="#mark" />
    </svg>
    <div class="wrap in">
        <div>
            <h2>{{ $setting->cta_title }}</h2>
            <p class="lead">{{ $setting->cta_brief }}</p>
            @php
                $content = $setting->cta_contents;
                $content = preg_replace('/<ul[^>]*>/i', '<ul class="assure">', $content);
                $content = preg_replace('/<li[^>]*>/i', '<li><svg class="ico"><use href="#i-check" /></svg>', $content);
            @endphp
            {!! $content !!}
        </div>
        @include('themes.default.common.build-your-delivery-team-form')
    </div>
</section>
