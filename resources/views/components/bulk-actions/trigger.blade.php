<x-tables::button
    icon="heroicon-s-chevron-down"
    icon-position="after"
    x-on:click="isOpen = ! isOpen"
    {{ $attributes->class(['filament-tables-bulk-actions-trigger']) }}
>
    {{ __('tables::table.buttons.bulk_actions.label') }}
</x-tables::button>
