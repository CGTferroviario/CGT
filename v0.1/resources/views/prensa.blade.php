@extends('layouts.prensa')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3">
            <x-side-bar />
        </div>
        <div class="col-sm-9">
            {{-- <x-show-hide /> --}}

            <x-videos-prensa />

            <x-logos-prensa />

            <x-fotos-prensa />

            <x-carteles-prensa/>
        </div>
    </div>
</div>

@endsection
