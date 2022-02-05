<x-tables::button
    icon="heroicon-s-chevron-down"
    icon-position="after"
    color="secondary"
    x-on:click="isOpen = ! isOpen"
    {{ $attributes->class(['filament-tables-bulk-actions-trigger text-primary-600']) }}
>
    {{ __('tables::table.buttons.bulk_actions.label') }}
</x-tables::button>
