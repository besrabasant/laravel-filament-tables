@props([
    'extraAttributes' => [],
    'isSortColumn' => false,
    'name',
    'sortable' => false,
    'sortDirection',
])

<th {{ $attributes->merge($extraAttributes)->class(['px-4 py-3', 'filament-tables-header-cell']) }}>
    <button
        @if ($sortable)
        wire:click="sortTable('{{ $name }}')"
        @endif
        type="button"
        @class([
            'flex items-center whitespace-nowrap space-x-1 rtl:space-x-reverse font-medium text-xs text-gray-600 uppercase tracking-wider group',
            'cursor-default' => ! $sortable,
        ])
    >
        <span>
            {{ $slot }}
        </span>

        @if($sortable)
            <span class="relative flex items-center @unless($sortDirection) opacity-0 group-hover:opacity-100 @endif">
                @unless($sortDirection)
                    <x-heroicon-s-selector class="w-3 h-3"/>
                @endunless
                @if ($sortDirection === 'asc')
                    <x-heroicon-s-chevron-down class="w-3 h-3" />
                @elseif ($sortDirection === 'desc')
                    <x-heroicon-s-chevron-up class="w-3 h-3" />
                @endif
            </span>
        @endif
    </button>
</th>
