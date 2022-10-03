@extends('layouts.prensa')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3">
            <x-prensa.sidebar />
        </div>
        <div class="col-sm-9">

            <x-videos-prensa />

            <x-logos-prensa />

            <x-fotos-prensa />

            <x-carteles-prensa/>
        </div>
    </div>
</div>

@endsection
