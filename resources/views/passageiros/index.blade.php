@extends('layouts.mainLayout')

@push('css')
<link rel="stylesheet" href="{{ URL::asset('css/passageiros.css') }}" type="text/css">
@endpush

@section('title', 'Passageiros')

@section('content')
<div class="tabela w-100 h-100">
    <table class="w-100 mt-3">
        <tr class="" style="border-bottom:1px solid red">
            <th class="p-2" style="width: 5%;">ID</th>
            <th class="px-2" style="width: 20%">Nome</th>
            <th class="px-2" style="width: 20%">Email</th>
            <th class="px-2" style="width: 20%">Nascimento</th>
            <th class="px-2" style="width: 20%">Cpf</th>
            <th class="text-center" style="width: 15%">Perfil</th>
        </tr>
        <tr style="border-bottom:1.5px solid red">
            <td class="px-2 fw-bold ">01</td>
            <td class="px-2 fw-bold">Marcelinho Carioca</td>
            <td class="px-2 fw-bold">talarico@gmail.com</td>
            <td class="px-2 fw-bold">01/04/1990</td>
            <td class="px-2 fw-bold">908.098.908-00</td>
            <td class="justify-content-center align-items-center d-flex  py-2"><a href="" class="btn px-4" style=""><i class="fa-regular fa-circle-question fa-xl"></i></a></td>
        </tr>

    </table>
</div>
@endsection

@section('pageTitle', 'Passageiros')

@section('pesquisa')
    @include('components.barraPesquisa')
@endsection

