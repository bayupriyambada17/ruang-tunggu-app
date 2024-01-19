@props(['required' => true, 'label', 'type', 'wireModel' => null])


<label class="form-label {{ $required ? 'required' : '' }}">{{ $label }}</label>
<input type="{{ $type ?? 'text' }}" class="form-control" wire:model="{{ $wireModel ?? null }}">
