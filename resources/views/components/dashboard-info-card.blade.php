@props(['icon', 'total', 'nama', 'color'])

<div class="col-sm-6 col-lg-3">
    <div class="card card-sm">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col-auto">
                    <span class="text-white avatar" style="background-color: {{ $color }}">
                        <i data-lucide="{{ $icon }}"></i>
                    </span>
                </div>
                <div class="col">
                    <div class="font-weight-medium">
                        {{ $total }} data
                    </div>
                    <div class="text-secondary">
                        {{ $nama }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
