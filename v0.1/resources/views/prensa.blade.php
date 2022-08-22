@extends('layouts.prensa')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-4">
            <x-side-bar />
        </div>
        <div class="col-sm-8">

            <x-videos-prensa />

            <x-logos-prensa />

            <x-fotos-prensa />

            <x-carteles-prensa/>
        </div>
    </div>

    

    
</div>

@endsection
