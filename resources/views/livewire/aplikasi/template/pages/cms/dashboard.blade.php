@section('ruangApp', 'Dasbor')
<div>
    <div class="col-12">
        <div class="row row-cards">
            @foreach ($data as $model)
                <div class="col-sm-6 col-lg-3">
                    <div class="card card-sm">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="text-white avatar" style="background-color: {{ $model['color'] }}">
                                        <i data-lucide="{{ $model['icon'] }}"></i>
                                    </span>
                                </div>
                                <div class="col">
                                    <div class="font-weight-medium">
                                        {{ $model['total'] }} data
                                    </div>
                                    <div class="text-secondary">
                                        {{ $model['nama'] }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
