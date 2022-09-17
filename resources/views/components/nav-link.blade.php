@props(['active', 'label'])

@php
$classes = $active ?? false ? ' bg-gray-700 text-gray-700' : ' ';

@endphp


<a
    {{ $attributes->merge([
        'class' =>
            $classes .
            ' relative flex items-center space-x-4  px-4 py-3 text-base font-normal text-gray-900 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700',
    ]) }}>
    @isset($leftIcon)
        <ion-icon name="{{ $leftIcon }}" class="w-5 h-5"></ion-icon>
    @else
        <ion-icon name="ellipse-outline" class="w-5 h-5"></ion-icon>
    @endisset

    <span class="-mr-1 text-sm font-medium">{{ $label }}</span>

    @isset($rightIcon)
        <ion-icon name="{{ $rightIcon }}" class="w-5 h-5"></ion-icon>
    @endisset

</a>
