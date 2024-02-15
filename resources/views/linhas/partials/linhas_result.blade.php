<table class="mx-auto mt-3" style="width: 95%" id="tabela">
    <tr class="" style="border-bottom:rgba(1, 1, 1, 0.1) 1px solid">
        <th class="p-2 text-center" style="width: 20%;">Nº Linha</th>
        <th class="px-2 text-center" style="width: 20%">Nome Linha</th>
        <th class="px-2 text-center" style="width: 20%">Qtd Carros</th>
        <th class="px-2 text-center" style="width: 20%">Qtd Consumos</th>
        <th class="px-2   text-center" style="width: 10%"><label>Visualizar</label></th>
        
    </tr>
    @foreach ($linhas as $linha)
    
    <tr style="border-bottom:rgba(1, 1, 1, 0.1) 1px solid">
        <td class="px-2 text-center fw-bold">{{$linha->numLinha}}</td>
        <td class="px-2 text-center fw-bold">{{$linha->nomeLinha}}</td>
        <td class="px-2 text-center fw-bold">{{$linha->qtdCarros}}</td>
        <td class="px-2 text-center fw-bold">{{$linha->qtdConsumos}}</td>
        <td id="btn-modal" class=" px-2 text-center fw-bold" id="alterar"><a id="" href="{{ route('linhas.show', $linha->id) }}" class="btn" ><i class="fa-solid fa-info"></i></a></td>
    
        
    </tr>
    @endforeach
    

</table>