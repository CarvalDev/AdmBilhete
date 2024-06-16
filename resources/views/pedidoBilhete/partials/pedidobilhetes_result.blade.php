<div id="table-content">
    <table class="  mt-3  mx-auto" style="width: 98%;" id="tabela">
        <thead class="">
        <tr class="text-center" style="border-bottom:rgba(1, 1, 1, 0.1) 1px solid  ">
            <th class="py-2" style="width: 30%">Nome do passageiro</th>
            <th class="py-2" id="nomePassageiro" style="width: 30%">Tipo bilhete</th>
            <th class="py-2" style="width: 20%">Status bilhete</th>
            <th class="py-2" style="width: 20%">Visualizar Pedido</th>
        </tr>
        </thead>
       
            
        
        @foreach ($pedidoBilhetes as $pedidoBilhete)
            
        <tr class="text-center" style="border-bottom:rgba(1, 1, 1, 0.1) 1px solid">
            
            <td class="text-center fw-bold">{{ $pedidoBilhete->passageiro_nome }}</td>
            <td class="text-center fw-bold" id="nomePassageiro" style="">{{$pedidoBilhete->tipoBilhete}}</td>
            <td class="text-center fw-bold">{{$pedidoBilhete->statusPedido}}</td>
            <td class="justify-content-center align-items-center d-flex  py-2"><a onclick="acionaModal({{ $pedidoBilhete->id }})" class="btn px-4" style=""><i class="far fa-user-circle fa-xl"></i></a></td>
        </tr>
        @endforeach
        
        
            
        
        
    </table>
    <div class="p-3">
        {{ $pedidoBilhetes->links() }}
 
    </div>
</div>