@section('ruangApp', 'Dasbor')
<div>
    <div class="col-12">
        <div class="row row-cards">
            @foreach ($data as $model)
                <x-dashboard-info-card :icon="$model['icon']" :total="$model['total']" :nama="$model['nama']" :color="$model['color']"></x-dashboard-info-card>
            @endforeach
        </div>
    </div>
</div>
