<x-tables::button
    icon="heroicon-o-filter"
    icon-position="after"
    x-on:click="isOpen = ! isOpen"
    color="secondary"
    {{ $attributes->class(['filament-tables-filters-trigger text-primary-600']) }}
>
    {{ __('tables::table.buttons.filter.label')  }}
</x-tables::button>
