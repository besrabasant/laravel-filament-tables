@props([
'actions'
])

<div
    x-data="{
        isOpen: false,
    }"
    x-cloak
    {{ $attributes->class(['relative', 'filament-tables-bulk-actions']) }}
>
    <x-tables::bulk-actions.trigger/>

    <div
        x-show="isOpen"
        x-on:click.away="isOpen = false"
        x-transition:enter="transition"
        x-transition:enter-start="-translate-y-1 opacity-0"
        x-transition:enter-end="translate-y-0 opacity-100"
        x-transition:leave="transition"
        x-transition:leave-start="translate-y-0 opacity-100"
        x-transition:leave-end="-translate-y-1 opacity-0"
        class="absolute right-0 z-10 mt-2 shadow-xl rounded-md w-52 top-full"
    >
        <ul class="py-1 space-y-1 overflow-hidden bg-white shadow-lg rounded-md border border-gray-300">
            @foreach($actions as $action)
                <x-tables::dropdown.item
                    :x-on:click="'mountBulkAction(\'' . $action->getName() . '\')'"
                    :icon="$action->getIcon()"
                    :color="$action->getColor()"
                >
                    {{ $action->getLabel() }}
                </x-tables::dropdown.item>
            @endforeach
        </ul>
    </div>
</div>
