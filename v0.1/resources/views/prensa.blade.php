@extends('layouts.prensa')

@section('content')

<div class="container">
    
    <x-prensa.sidebar />

    <div class="row">
        <div class="col-md-12">
            <x-prensa.videos />

            <x-prensa.logos />

            <x-prensa.fotos />

            <x-prensa.carteles />
        </div>
    </div>
</div>

@endsection
