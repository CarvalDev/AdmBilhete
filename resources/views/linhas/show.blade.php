@extends('layouts.mainLayout')

@push('css')
    <link rel="stylesheet" href="{{ URL::asset('css/linhasShow.css') }}">
@endpush

@section('title')
Linha {{$linha->nomeLinha}} 
@endsection

@section('content')
<div class="w-100 h-100 d-flex flex-row justify-content-center align-items-center">
    <div id="" class=" w-50 h-100 d-flex flex-column justify-content-center align-items-center">
        <div class=" w-100" style="height:10%">
            
        </div>
        <div id="areaInfos" class=" -danger w-100  d-flex flex-column-reverse justify-content-center align-items-center" style="height:90%">
           
            <table class="rounded table w-75 text-strong p-2  shadow">
                <tr class="text-center gap-2" style="border-bottom: 1px solid #edf2f4">
                    <th>Id</th>
                    <th>Total Consumos</th>
                    <th>Total Carros</th>
                </tr>
                <tr class="text-center" style="">
                    <td>{{$linha->id}}</td>
                    <td>{{$consumosTotais}}</td>
                    <td>{{$carros->count()}}</td>
                </tr>
            </table>
            <form id="formUpdate" style="height: 60%" class="w-75 row mb-4  rounded shadow  d-flex flex-column justify-content-center align-items-center">
                @csrf
                @method('PUT')
                <div style="height: 20%" class="w-100 d-flex flex-row justify-content-center align-items-center">
                    <span class="fs-4">Informações da Linha</span>
                </div>
                <div  style="height:60%" class="corpoForm w-100  row m-0 d-flex flex-row justify-content-center align-items-center">
                    
                        <div class="col-12">
                            <label for="nomeLinha">Nome Linha:</label>
                            <input type="text" value="{{$linha->nomeLinha}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            
                          </div>
                          <div class="col-12   ">
                            <label for="numLinha">Numero Linha:</label>
                            <input type="text" value="{{$linha->numLinha}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            
                          </div>
                  
                </div>
                <div style="height:20%" class="corpoForm w-100 d-flex flex-row justify-content-end align-items-center">
                    <button type="submit" class="btn btn-success">Atualizar</button>
                </div>

            </form>
        </div>
       

    </div>
    <div class="w-50 h-100 d-flex flex-column justify-content-center align-items-center">
        <div class=" w-100 d-flex justify-content-start align-items-center" style="height:10%">
          <div class=" w-50 d-flex justify-content-start align-items-center">

            <span id="pageTitle" class="ms-3 fs-2">Carros da linha:</span>
          </div>
          <div class=" w-50 d-flex justify-content-end align-items-center">
            <a href="" class="border-0 me-3" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-plus-circle fa-2x text-dark" aria-hidden="true"></i></a>
          </div>

            
          
        </div>
        <div class=" w-100 overflow-auto"  style="height:90%">
            <table class="w-100 mt-3">
                <tr class="" style="border-bottom:1.5px solid red">
                    <th class="p-2 text-center" style="width: 20%;">ID</th>
                    <th class="px-2 text-center" style="width: 20%">Numero do Carro</th>
                    <th class="px-2 text-center" style="width: 20%">ID catraca</th>
                    <th class="px-2 text-center" style="width: 20%">Qtd Consumos</th>
                    <th class="px-2   text-center" style="width: 10%"><label>Excluir</label></th>
                    
                </tr>
                @for ($i = 0; $i < count($carros); $i++)
                
                <tr style="border-bottom:1.5px solid red">
                    <td class="px-2 text-center fw-bold">{{$carros[$i]->id}}</td>
                    <td class="px-2 text-center fw-bold">{{$carros[$i]->numCarro}}</td>
                    <td class="px-2 text-center fw-bold">{{$carros[$i]->catraca_id}}</td>
                    <td id="consumo" class="px-2 text-center fw-bold">
                     {{$consumosFixed[$i]}}
                    </td>
                    <td id="btn-modal" class=" px-2 text-center fw-bold" id="alterar"><a id="" href="" class="btn" ><i class="fa-solid fa-trash"></i></a></td>
                
                    
                </tr>
                @endfor
                @include('components.modalCarro')
                
                
        
            </table>
        </div>
      

    </div>
</div>
<script src="{{ URL::asset('js/showLinhas.js') }}"></script>
@endsection
@section('pageTitle')
Linha {{$linha->nomeLinha." ".$linha->numLinha}} 
@endsection

