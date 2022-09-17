@props(['label'])

<a {{ $attributes->merge([
    'class' =>
        'block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:text-gray-400 dark:hover:text-light hover:text-gray-700',
]) }}
    role="menuitem">
    {{ $label }}
</a>
