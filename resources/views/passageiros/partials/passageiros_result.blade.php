<div id="table-content">
    <table class="  mt-3  mx-auto" style="width: 98%;" id="tabela">
        <thead class="">
        <tr class="text-center" style="border-bottom:rgba(1, 1, 1, 0.1) 1px solid  ">
            
            <th class="py-2" id="nomePassageiro" style="width: 20%">Nome</th>
            <th class="py-2" style="width: 30%">Email</th>
            <th class="py-2" style="width: 20%">Nascimento</th>
            <th class="py-2" style="width: 20%">Cpf</th>
            <th class="text-center py-2" style="width: 10%">Perfil</th>
        </tr>
        </thead>
       
            
        
        @foreach ($passageiros as $passageiro)
            
        <tr class="text-center" style="border-bottom:rgba(1, 1, 1, 0.1) 1px solid">
            
            <td class="text-center fw-bold" id="nomePassageiro" style="">{{$passageiro->nomePassageiro}}</td>
            <td class="text-center fw-bold">{{$passageiro->emailPassageiro}}</td>
            <td class="text-center fw-bold">{{ $passageiro->dataNascPassageiro }}</td>
            <td class="text-center fw-bold">{{ $passageiro->cpfPassageiro }}</td>
            <td class="justify-content-center align-items-center d-flex  py-2"><a href="{{route('perfilPassageiro.index', $passageiro->id)}}" class="btn px-4" style=""><i class="far fa-user-circle fa-xl"></i></a></td>
        </tr>
        @endforeach
        
        
            
        
        
    </table>
    <div class="p-3">
    {{ $passageiros->links() }}
    </div>
</div>