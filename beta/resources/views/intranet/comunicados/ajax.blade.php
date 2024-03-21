{{-- 
@section('content')
    <div class="card">
        <div class="card-header">Administración de Comunicados</div>
        <div class="card-body">
            {{ $dataTable->table() }}
        </div>
    </div>
@endsection

@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush --}}