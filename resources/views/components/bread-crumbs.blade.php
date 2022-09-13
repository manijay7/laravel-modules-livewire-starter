@props(['items'])
@php
$crumbs = isset($items) ? explode(',', $items) : [];

@endphp


<div>
    @if ($crumbs)
        <ol class="flex items-center overflow-x-auto">
            @foreach ($crumbs as $crumb)
                @if (!$loop->last)
                    <li
                        class="flex items-center text-sm font-bold text-gray-700 hover: text-theme-darked-primary transition duration-200 ">
                        <a href="#">
                            {{ $crumb }}
                        </a>
                    </li>
                @else
                    <li
                        class="flex items-center text-sm font-bold text-gray-700 hover: text-theme-darked-primary transition duration-200 active">
                        {{ $crumb }}
                    </li>
                @endif
            @endforeach
        </ol>
    @endif
</div>
