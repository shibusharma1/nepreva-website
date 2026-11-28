@extends('themes.default.common.master')
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('content')
    <main id="main">
        <div class="pg on" data-page="why-nepreva" data-title="Why Nepreva | A Professional Delivery Partner">
            <section class="phero">
                <div class="wrap g">
                    <div>
                        <h1>{!! $data->caption !!}</h1>
                        <p class="lead">{{ strip_tags($data->content) }}</p>
                        <div class="ctas">
                            <a class="btn btn-primary" href="#start">Build your delivery team</a>
                            <a class="btn btn-ghost" href="how-we-work.php">See how we work</a>
                        </div>
                    </div>
                    @include('themes.default.common.aside')
                </div>
            </section>

            <div class="subnav">
                <div class="wrap">
                    @foreach ($posts->where('post_parent', 0) as $post)
                        <a href="#wn-{{ $post->uri }}">{{ $post->post_title }}</a>
                    @endforeach
                </div>
            </div>

            <section class="sec" id="wn-{{ $posts[0]->uri }}">
                <div class="wrap">
                    <div class="head-split">
                        <h2>{{ $posts[0]->sub_title ?? 'The Nepreva advantage' }}</h2>
                        <p class="lead">{{ $posts[0]->post_excerpt }}
                        </p>
                    </div>
                    <div class="vgrid">
                        @foreach ($posts[0]->associatePosts as $item)
                            <div>
                                <h3>{{ $item->title }}</h3>
                                <p>{{ strip_tags($item->brief) }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>

            @php
                $builtDifferentlyPost = $posts[1];
                $tableHtml = $builtDifferentlyPost->post_content ?? '';
                $dom = new DOMDocument();
                libxml_use_internal_errors(true);
                $dom->loadHTML('<?xml encoding="UTF-8">' . $tableHtml);
                $xpath = new DOMXPath($dom);
                $rows = $xpath->query('//table//tr');
            @endphp
            @if ($builtDifferentlyPost)
                <section class="band sec">
                    <div class="wrap">
                        <div class="head-split">
                            <h2>{{ $builtDifferentlyPost->sub_title }}</h2>
                            <p class="lead">{{ $builtDifferentlyPost->post_excerpt }}</p>
                        </div>
                        <div class="tblw">
                            <table class="tbl">
                                <thead>
                                    @if ($rows->length > 0)
                                        <tr>
                                            @foreach ($rows->item(0)->childNodes as $cell)
                                                @if (in_array($cell->nodeName, ['td', 'th']))
                                                    <th>{!! $cell->textContent !!}</th>
                                                @endif
                                            @endforeach
                                        </tr>
                                    @endif
                                </thead>
                                <tbody>
                                    @for ($i = 1; $i < $rows->length; $i++)
                                        <tr>
                                            @foreach ($rows->item($i)->childNodes as $cell)
                                                @if (in_array($cell->nodeName, ['td', 'th']))
                                                    <td>{!! $cell->textContent !!}</td>
                                                @endif
                                            @endforeach
                                        </tr>
                                    @endfor
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            @endif
            @php
                libxml_clear_errors();
            @endphp

            <section class="sec" id="wn-{{ $posts[2]->uri }}">
                <div class="wrap">
                    <div class="found-lite">
                        <div class="head-split">
                            <h2>{{ $posts[2]->sub_title }}</h2>
                            <p class="lead">{{ $posts[2]->post_excerpt }}</p>
                        </div>
                        @php
                            $content = $posts[2]->post_content ?? '';
                            preg_match_all('/<li\b[^>]*>(.*?)<\/li>/is', $content, $matches);
                            $listItems = $matches[1] ?? [];
                        @endphp
                        <ul class="dl">
                            @forelse ($listItems as $item)
                                <li>
                                    <svg class="ico">
                                        <use href="#i-check" />
                                    </svg>
                                    {{ trim(strip_tags($item)) }}
                                </li>
                            @empty
                                {{-- No list items available --}}
                            @endforelse
                        </ul>
                    </div>
                </div>
            </section>

            <section class="band sec" id="wn-{{ $posts[3]->uri }}">
                <div class="wrap">
                    <div class="head-split">
                        <h2>{{ $posts[3]->sub_title }}</h2>
                        <p class="lead">{{ $posts[3]->post_excerpt }}</p>
                    </div>
                    <div class="vgrid">
                        @foreach ($posts[3]->associatePosts as $item)
                            <div>
                                <h3>{{ $item->title }}</h3>
                                <p>{{ strip_tags($item->brief) }}</p>
                            </div>
                        @endforeach
                    </div>
                    <p class="callout" style="margin-top:34px"><svg class="ico">
                            <use href="#i-flag" />
                        </svg>
                        <span><b>What to weigh.</b> {{ $posts[3]->associated_title }}
                            <a class="tlink" href="why-nepal-is-emerging-as-a-delivery-destination.html">Read the
                                full discussion</a>
                        </span>
                    </p>
                </div>
            </section>

            @php
                $tableHtml = $posts[4]->post_content ?? '';
                $dom = new DOMDocument();
                libxml_use_internal_errors(true);
                $dom->loadHTML('<?xml encoding="UTF-8">' . $tableHtml);
                $xpath = new DOMXPath($dom);
                $rows = $xpath->query('//table//tr');
            @endphp

            <section class="sec" id="wn-{{ $posts[4]->uri }}">
                <div class="wrap">
                    <div class="head-split">
                        <h2>{{ $posts[4]->sub_title }}</h2>
                        <p class="lead">{{ $posts[4]->post_excerpt }}</p>
                    </div>
                    <ol class="seq">
                        @foreach ($posts[4]->associatePosts as $item)
                            <li>
                                <h3>{{ $item->title }}</h3>
                                <p>{{ strip_tags($item->brief) }}</p>
                            </li>
                        @endforeach
                    </ol>
                    <h3 style="margin:44px 0 14px;font-size:1.3rem">{{ $posts[4]->associated_title }}</h3>
                    <div class="tblw">
                        <table class="tbl">
                            <thead>
                                @if ($rows->length > 0)
                                    <tr>
                                        @foreach ($rows->item(0)->childNodes as $cell)
                                            @if (in_array($cell->nodeName, ['td', 'th']))
                                                <th>{!! $cell->textContent !!}</th>
                                            @endif
                                        @endforeach
                                    </tr>
                                @endif
                            </thead>
                            <tbody>
                                @for ($i = 1; $i < $rows->length; $i++)
                                    <tr>
                                        @foreach ($rows->item($i)->childNodes as $cell)
                                            @if (in_array($cell->nodeName, ['td', 'th']))
                                                <td>{!! $cell->textContent !!}</td>
                                            @endif
                                        @endforeach
                                    </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            @php
                libxml_clear_errors();
            @endphp

            <section class="band sec" id="wn-{{ $posts[5]->uri }}">
                <div class="wrap">
                    <div class="head-split">
                        <h2>{{ $posts[5]->sub_title }}.</h2>
                        <p class="lead">{{ $posts[5]->post_excerpt }}</p>
                    </div>
                    <div class="vgrid">
                        @foreach ($posts[5]->associatePosts as $item)
                            <div>
                                <h3>{{ $item->title }}</h3>
                                <p>{{ strip_tags($item->brief) }}</p>
                            </div>
                        @endforeach
                    </div>
                    <p class="callout" style="margin-top:30px">
                        <svg class="ico">
                            <use href="#i-shield" />
                        </svg>
                        <span>{{ $posts[5]->associated_title }}</span>
                    </p>
                </div>
            </section>

            <section class="sec" id="wn-{{ $posts[6]->uri }}">
                <div class="wrap">
                    <div class="head-split">
                        <h2>{{ $posts[6]->sub_title }}</h2>
                        <p class="lead">{{ $posts[6]->post_excerpt }}</p>
                    </div>
                    @php
                        $content = $posts[6]->post_content ?? '';
                        // Extract all table cells from the database HTML.
                        preg_match_all('/<td\b[^>]*>(.*?)<\/td>/is', $content, $matches);
                        $cells = $matches[1] ?? [];
                        // Extract heading and subtitle from the first two cells.
                        $leftHeading = '';
                        $leftSubtitle = '';
                        $rightHeading = '';
                        $rightSubtitle = '';
                        if (count($cells) >= 2) {
                            preg_match('/<h3\b[^>]*>(.*?)<\/h3>/is', $cells[0], $leftH);
                            preg_match('/<p\b[^>]*class=["\']sub["\'][^>]*>(.*?)<\/p>/is', $cells[0], $leftP);
                            preg_match('/<h3\b[^>]*>(.*?)<\/h3>/is', $cells[1], $rightH);
                            preg_match('/<p\b[^>]*class=["\']sub["\'][^>]*>(.*?)<\/p>/is', $cells[1], $rightP);
                            $leftHeading = $leftH[1] ?? '';
                            $leftSubtitle = $leftP[1] ?? '';
                            $rightHeading = $rightH[1] ?? '';
                            $rightSubtitle = $rightP[1] ?? '';
                        }
                        // Remaining cells contain alternating left and right list items.
                        $leftItems = [];
                        $rightItems = [];
                        for ($i = 2; $i < count($cells); $i += 2) {
                            $leftItems[] = $cells[$i];
                            if (isset($cells[$i + 1])) {
                                $rightItems[] = $cells[$i + 1];
                            }
                        }
                    @endphp
                    <div class="ledger">
                        <div>
                            <h3>{!! $leftHeading !!}</h3>
                            <p class="sub">{!! $leftSubtitle !!}</p>
                            <ul>
                                @foreach ($leftItems as $item)
                                    <li>{!! $item !!}</li>
                                @endforeach
                            </ul>
                        </div>
                        <div>
                            <h3>{!! $rightHeading !!}</h3>
                            <p class="sub">{!! $rightSubtitle !!}</p>
                            <ul>
                                @foreach ($rightItems as $item)
                                    <li>{!! $item !!}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <p class="small" style="margin-top:22px">{{ $posts[6]->associated_title }}</p>
                </div>
            </section>
        </div>
        @include('themes.default.common.cta-build-your-delivery-team')
    </main>

@endsection
