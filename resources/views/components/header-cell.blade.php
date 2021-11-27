@props([
    'extraAttributes' => [],
    'isSortColumn' => false,
    'name',
    'sortable' => false,
    'sortDirection',
])

@php
    /**
     * @var string $sortDirection
     */
    $sortIconClasses = \Illuminate\Support\Arr::toCssClasses([
        'opacity-0 group-hover:opacity-100' => empty($sortDirection),
    ]);
@endphp

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
            <span class="relative flex items-center {{$sortIconClasses}}">
                @unless($sortDirection)
                    <x-heroicon-s-selector class="w-4 h-4"/>
                @endunless
                @if ($sortDirection === 'asc')
                    <x-heroicon-s-chevron-down class="w-4 h-4"/>
                @elseif ($sortDirection === 'desc')
                    <x-heroicon-s-chevron-up class="w-4 h-4"/>
                @endif
            </span>
        @endif
    </button>
</th>
