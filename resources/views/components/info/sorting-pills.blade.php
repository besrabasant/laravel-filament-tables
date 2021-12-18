@props([
'hasEnabledSorts' => false,
'enabledSorts' => [],
'columns'
])

@php
    @endphp

<div>
    @if($hasEnabledSorts)
        <div class="mb-4 px-4 md:p-0">
            <small class="text-gray-700 font-medium mr-1">@lang('Applied Sorting'):</small>

            @foreach($enabledSorts as $columnName => $direction)
                @php
                    $column = $columns[$columnName];
                @endphp

                @continue(is_null($column))

                @php
                    $sortingPillDirection = match ($direction) {
                        'asc' => "A-Z",
                        'desc' => "Z-A",
                        default => "",
                    };
                @endphp

                <span
                    wire:key="sorting-pill-{{ $columnName }}"
                    class="inline-flex items-center pl-3 pr-0.5 py-0.5 rounded-full text-sm font-medium leading-4 bg-primary-600 text-white"
                >
                {{ $column->getLabel() }}: {{$sortingPillDirection}}

                    <x-tables::icon-button
                        color="primary"
                        label="@lang('Remove sort option')"
                        icon="heroicon-s-x-circle"
                        class="-my-2"
                        wire:click.prevent="clearSort('{{$columnName}}')"
                    />

                </span>

            @endforeach

            <x-tables::button
                color="secondary"
                size="sm"
                class="ml-2 -my-3 rounded-full"
                wire:click.prevent="clearSorts"
            >
                <span class="px-1">@lang('Clear')</span>
            </x-tables::button>
        </div>
    @endif
</div>
