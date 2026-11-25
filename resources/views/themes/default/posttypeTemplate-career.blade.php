@extends('themes.default.common.master')
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('content')

    <main id="main">
        <div class="pg on" data-page="careers" data-title="Careers at Nepreva | Build a Global Accounting Career">
            <section class="phero">
                <div class="wrap g">
                    <div>
                        <h1>{!! $data->caption !!}</h1>
                        <p class="lead">{{ strip_tags($data->content) }}</p>
                        <div class="ctas">
                            <a class="btn btn-primary" href="#roles">See open roles</a>
                            <a class="btn btn-ghost" href="mailto:{{ $setting->email_primary }}?subject=Open%20application">Send an
                                open application</a>
                        </div>
                    </div>
                    @include('themes.default.common.aside')
                </div>
            </section>
            <section class="band sec">
                <div class="wrap">
                    <div class="head-split">
                        <h2>{{ $posts[0]->post_title}}</h2><span></span>
                    </div>
                    <div class="vgrid">
                        @foreach ($posts[0]->associatePosts as $item)
                            <div>
                                <h3>{{ $item->title }}</h3>
                                <p>{{ strip_tags($item->brief)}}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
            <section class="sec">
                <div class="wrap">
                    <div class="head-split">
                        <h2>{{ $posts[1]->post_title}}</h2>
                        <p class="lead">{{ $posts[1]->post_excerpt ?? 'We hire across levels, from trainees to experienced reviewers.' }}</p>
                    </div>

                    <ul class="dl">
                        @php
                            $items = [];
                            if (!empty($posts[1]->post_content)) {
                                preg_match_all('/<li[^>]*>(.*?)<\/li>/is',$posts[1]->post_content,$matches);
                                $items = $matches[1] ?? [];
                            }
                        @endphp

                        @foreach($items as $item)
                            <li>
                                <svg class="ico">
                                    <use href="#i-check" />
                                </svg>
                                {!! trim(strip_tags($item, '<strong><b><em><i><span>')) !!}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </section>

            <section class="band sec" id="roles">
                <div class="wrap">
                    <div class="head-split">
                        <h2>{{ $posts[2]->post_title}}</h2>
                    </div>
                    @foreach($posts[2]->associatePosts as $role)
                        @php
                            $tags = json_decode($role->sub_title, true) ?? [];
                        @endphp
                        <article class="role">
                            <div class="tags">
                                @foreach($tags as $tag)
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

                    <article class="role" style="margin-top:22px">
                        <div class="tags"><span>{{ $posts[3]->post_title }}</span></div>
                        <h3>{{ $posts[3]->post_excerpt }}</h3>
                        <p style="margin-bottom:0">{{ strip_tags($posts[3]->post_content) }}</p>
                    </article>
                </div>
            </section>

            <section class="sec">
                <div class="wrap">
                    <div class="head-split">
                        <h2>{{ $posts[4]->post_title}}</h2>
                        <p class="lead">{{ $posts[4]->post_excerpt ?? 'Our process is simple. Steps may vary by role.' }}</p>
                    </div>
                    <ol class="seq c4">
                        @foreach ($posts[4]->associatePosts as $item)
                        <li>
                            <h3>{{ $item->title }}</h3>
                            <p>{{ strip_tags($item->brief)}}</p>
                        </li>
                        @endforeach
                    </ol>
                </div>
            </section>
        </div>
        @include('themes.default.common.cta-build-your-delivery-team')
    </main>
@endsection
