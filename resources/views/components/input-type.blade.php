{{-- @props(['required', 'label', 'type'. 'wire'])


<div class="mb-3">
    <label class="form-label {{ $required ?'required' : '' }}">{{ $label }}</label>
    <input type="{{ $type ?? 'text' }}" class="form-control" wire:model="{{ $wire }}">
    @error('{{ $wire }}')
        <span class="error text-danger">{{ $message }}</span>
    @enderror
</div> --}}

@props(['required' => true, 'label', 'type', 'wireModel' => null])


<label class="form-label {{ $required ? 'required' : '' }}">{{ $label }}</label>
<input type="{{ $type ?? 'text' }}" class="form-control" wire:model="{{ $wireModel ?? null }}">
