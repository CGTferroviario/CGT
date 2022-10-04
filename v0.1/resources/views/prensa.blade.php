@extends('layouts.prensa')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3">
            <x-prensa.sidebar />
        </div>
        <div class="col-sm-9">

            <x-prensa.videos />

            <x-prensa.logos />

            <x-prensa.fotos />

            <x-prensa.carteles />
            
        </div>
    </div>
</div>

@endsection
