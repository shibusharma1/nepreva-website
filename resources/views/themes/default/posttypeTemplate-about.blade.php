@extends('themes.default.common.master')
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('content')
    <main id="main">
        <div class="pg on" data-page="about" data-title="About Nepreva | Independent Global Delivery Company">
            <section class="phero">
                <div class="wrap g">
                    <div>
                        <h1>{!! $data->caption !!}</h1>
                        <p class="lead">{{ strip_tags($data->content) }}</p>
                        <div class="ctas"><a class="btn btn-primary" href="#start">Build your delivery team</a></div>
                    </div>
                    @include('themes.default.common.aside')
                </div>
            </section>

            <section class="band sec">
                <div class="wrap">
                    <div class="head-split">
                        <h2>{{ $posts[0]->post_title }}</h2>
                        <p class="lead">{{ $posts[0]->sub_title }}</p>
                    </div>
                    <div class="cons">
                        <div>
                            <h3
                                style="font-family:var(--serif);font-weight:700;font-size:1.5rem;letter-spacing:-.02em;margin-bottom:14px">
                                {{ $posts[0]->associated_title }}
                            </h3>
                            <p class="lead" style="color:var(--text)">
                                {{ strip_tags($posts[0]->post_excerpt) }}
                            </p>
                        </div>
                        <div>
                            <p class="lead" style="color:var(--text);margin-top:46px">
                                {{ strip_tags($posts[0]->post_content) }}
                            </p>
                        </div>
                    </div>
                </div>
            </section>


            <section class="sec">
                <div class="wrap">
                    <div class="mv">
                        @foreach ($posts[0]->associatePosts as $associatePost)
                            <div>
                                <h3>{{ $associatePost->title }}</h3>
                                <p>{{ strip_tags($associatePost->brief) }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>


            <section class="band sec">
                <div class="wrap">
                    <div class="head-split">
                        <h2>{{ $posts[1]->post_title }}</h2>
                        <p class="lead">{{ strip_tags($posts[1]->post_excerpt) }}</p>
                    </div>
                    <div class="vgrid">
                        @foreach ($posts[1]->associatePosts as $item)
                            <div>
                                <h3>{{ $item->title }}</h3>
                                <p>{{ strip_tags($item->brief) }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>

            <section class="sec" id="leadership">
                <div class="wrap">
                    <div class="head-split">
                        <h2>{{ $posts[2]->post_title }}</h2>
                        <p class="lead">{{ strip_tags($posts[2]->post_excerpt) }}</p>
                    </div>
                    <div class="team">
                        @foreach ($posts[2]->associatePosts as $person)
                            <div class="person">
                                <span class="av">
                                    {{ collect(explode(' ', trim($person->title)))->filter()->map(fn($word) => strtoupper(substr($word, 0, 1)))->take(2)->implode('') }}
                                </span>
                                <div>
                                    <h3>{{ $person->title }}</h3>
                                    {{-- {!! $person->brief !!} --}}
                                    {{ strip_tags($person->brief) }}
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- CONFIRM Nepreva-level roles and biographies before publication -->
                </div>
            </section>


            <section class="found sec">
                <svg class="mk" aria-hidden="true" viewBox="0 0 286 275"
                    style="--mk-frame:#fff;--mk-green:#fff;--mk-blue:#fff">
                    <use href="#mark" />
                </svg>
                <div class="wrap in">
                    <div>
                        <h2>{{ $posts[3]->post_title }}</h2>
                        <p class="lead">
                            {{ $posts[3]->post_excerpt }}
                        </p>
                    </div>
                    <ul class="facts">
                        @php
                            $facts = $posts[3]->post_content;
                            preg_match_all('/<li[^>]*>(.*?)<\/li>/is', $facts, $matches);
                        @endphp
                        @foreach ($matches[1] as $fact)
                            <li>
                                <svg class="ico">
                                    <use href="#i-check" />
                                </svg>
                                {!! trim(strip_tags($fact)) !!}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </section>

            <section class="sec">
                <div class="wrap">
                    <div class="head-split">
                        <h2>{{ $posts[4]->post_title }}</h2>

                        <p class="lead">
                            {{ $posts[4]->post_excerpt }}
                        </p>
                    </div>
                    <p class="callout">
                        <svg class="ico">
                            <use href="#i-flag" />
                        </svg>

                        <span>
                            {!! strip_tags($posts[4]->post_content, '<strong><b><em><i>') !!}
                        </span>
                    </p>
                </div>
            </section>

            <section class="band sec" id="careers-block">
                <div class="wrap">
                    <div class="head-split">
                        <h2>{{ $posts[5]->post_title }}</h2>
                        <p class="lead">{{ strip_tags($posts[5]->post_excerpt) }}</p>
                    </div>
                    <p class="small" style="margin-bottom:22px;color:var(--text)">
                        {{ strip_tags($posts[5]->post_content) }}</p>

                    @foreach ($career as $post)
                        @foreach ($post->associatePosts as $role)
                            @php
                                $tags = json_decode($role->sub_title, true) ?? [];
                            @endphp
                            <article class="role">
                                <div class="tags">
                                    @foreach ($tags as $tag)
                                        <span>{{ $tag }}</span>
                                    @endforeach
                                </div>
                                <h3>{{ $role->title }}</h3>
                                {!! $role->brief !!}
                                <p>
                                    <b>You bring:</b>
                                    {!! $role->composition !!}
                                </p>
                                {{-- Application Information --}}
                                <p style="margin-bottom:0">
                                    <b>To apply:</b>
                                    send your CV to hello@nepreva.com with the subject "{{ $role->title }}".
                                </p>
                            </article>
                        @endforeach
                    @endforeach

                    <p style="margin-top:24px">
                        <a class="tlink" href="{{ url('page/career.html') }}">See all roles and how we hire
                            <svg class="ico">
                                <use href="#i-arrow" />
                            </svg>
                        </a>
                    </p>
                </div>
            </section>
        </div>
        @include('themes.default.common.cta-build-your-delivery-team')
    </main>
@endsection
