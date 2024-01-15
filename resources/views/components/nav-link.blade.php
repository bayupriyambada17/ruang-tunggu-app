@props(['route', 'name', 'icon'])

<a wire:navigate class="nav-link" href="{{ route($route) }}">
    <i data-lucide="{{ $icon ?? "cog" }}" width="15" height="15" style="margin-right: 2px;"></i>
    </span>
    <span class="nav-link-title">
        {{ $name }}
    </span>
</a>
