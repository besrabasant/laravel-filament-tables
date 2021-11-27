<x-tables::button
    {{--    icon="heroicon-o-dots-vertical"--}}
    x-on:click="isOpen = ! isOpen"
    :label="__('tables::table.buttons.open_actions.label')"
    {{ $attributes->class(['filament-tables-bulk-actions-trigger']) }}
>
    {{ __('tables::table.buttons.bulk_actions.label') }}
</x-tables::button>
