@extends('layouts.mainLayout')

@section('title','pagina login')

@push('css')
<link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" type="text/css">
@endpush
    
@section('content')
    <span class="display-1">DASHBOARD</span>
@endsection

@section('pageTitle', 'Painel de Controle')