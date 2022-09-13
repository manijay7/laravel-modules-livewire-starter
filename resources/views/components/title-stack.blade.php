<div class="flex justify-between items-center w-full">
    <div class="flex flex-col">
        <h1 class="text-2xl font-semibold whitespace-nowrap">{{ $title ?? '' }}</h1>
        @isset($breadcrumbs)
            {{ $breadcrumbs }}
        @endisset
    </div>


    @isset($right)
        {{ $right }}
    @endisset
</div>
