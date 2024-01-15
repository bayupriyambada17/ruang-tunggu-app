@props(['route', 'bgColor', 'title'])

<a wire:navigate href="{{ $route }}" class="btn btn-{{ $bgColor ?? 'primary' }} btn-md">
    {{ $title }}
</a>
