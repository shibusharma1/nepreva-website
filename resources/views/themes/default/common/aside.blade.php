<aside class="glance">
    <h2>{{ $data->info_section_title }}</h2>
    <dl>
        @foreach (range(1, 3) as $i)
            <dt>{{ $data->{"info_section_label_$i"} }}</dt>
            <dd @if ($i == 3) class="lime" @endif>
                {{ $data->{"info_section_value_$i"} }}
            </dd>
        @endforeach
    </dl>
</aside>
