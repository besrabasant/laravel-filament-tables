@props([
    'active' => false,
    'disabled' => false,
    'icon' => false,
    'label' => null,
    'separator' => false,
])

<li>
    <button
        @if ($disabled || $separator) disabled @endif
        type="button"
        {{ $attributes->class([
            'relative flex items-center justify-center font-medium w-8 h-8 h-8 -my-3 rounded focus:outline-none',
            'hover:bg-gray-500/5 focus:bg-primary-500/10 focus:ring-2 focus:ring-primary-500' => (! $active) && (! $disabled) && (! $separator),
            'focus:text-primary-600' => (! $active) && (! $disabled) && (! $icon) && (! $separator),
            'transition' => ((! $active) && (! $disabled) && (! $separator)) || $active,
            'text-primary-600' => ((! $active) && (! $disabled) && $icon && (! $separator)) || $active,
            'focus:underline bg-primary-500/10 ring-2 ring-primary-500' => $active,
            'cursor-not-allowed opacity-75' => $disabled,
            'cursor-default' => $separator,
            'filament-tables-pagination-item'
        ]) }}
    >
        @if ($icon)
            <x-dynamic-component :component="$icon" class="w-5 h-5 rtl:rotate-180" />
        @endif

        <span>{{ $label ?? ($separator ? '...' : '') }}</span>
    </button>
</li>
