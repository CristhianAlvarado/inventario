@extends('layouts.app')

@section('content')
    @push('styles')
        <link rel="stylesheet" href="{{ asset('css/almacen.css') }} ">
    @endpush

    <almacen-index></almacen-index>
@endsection