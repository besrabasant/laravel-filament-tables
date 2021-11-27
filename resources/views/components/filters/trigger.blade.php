<x-tables::button
    icon="heroicon-o-filter"
    icon-position="after"
    x-on:click="isOpen = ! isOpen"
    {{ $attributes->class(['filament-tables-filters-trigger']) }}
>
    {{ __('tables::table.buttons.filter.label')  }}
</x-tables::button>
