@php
    $price = $viewData["product"]["price"];
@endphp

@extends('layouts.app')

@section('title', $viewData["title"])

@section('subtitle', $viewData["subtitle"])

@section('content')

<div class="card mb-3">

<div class="row g-0">

<div class="col-md-4">

<img src="https://laravel.com/img/logotype.min.svg" class="img-fluid rounded-start">

</div>

<div class="col-md-8">

<div class="card-body">

<h5 class="card-title">

<p style="color: {{ $price > 100 ? 'red' : 'black' }}">
    {{ $viewData["product"]["name"] }}
</p>


</h5>

<p class="card-text">{{ $viewData["product"]["description"] }}</p>
<p class="card-text">Price: {{ $viewData["product"]["price"] }}</p>


</div>

</div>

</div>

</div>

@endsection