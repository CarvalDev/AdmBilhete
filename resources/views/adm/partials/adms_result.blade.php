<table id="tabela" class="mx-auto  mt-3 text-center" style="width: 98%">

    <tr class="" style="border-bottom:rgba(1, 1, 1, 0.1) 1px solid">
        <th class="p-2" style="width: 10%;">ID</th>
        <th class="px-2" style="width: 25%">Nome</th>
        <th class="px-2" style="width: 25%">Email</th>
        <th class="px-2" style="width: 20%">Editar</th>
        <th class="text-center" style="width: 20%">Remover</th>
    </tr>
   
        
    
    @foreach ($adms as $adm)
        
    <tr style="border-bottom:rgba(1, 1, 1, 0.1) 1px solid">
        <td class="px-2 fw-bold ">{{ $adm->id }}</td>
        <td class="px-2 fw-bold">{{$adm->nomeAdm}}</td>
        <td class="px-2 fw-bold">{{$adm->emailAdm}}</td>
        <td class="  py-2"><a href="{{ route('adm.edit', $adm->id) }}" class="btn px-4" style=""><i class="fa-solid fa-pen-to-square"></i></a></td>
        <form action="{{ route('adm.destroy', $adm->id) }}" method="POST">
            @csrf
            @method('DELETE')
        <td class="py-2"><button type="submit" class="btn px-4" style=""><i class="fa-solid fa-trash"></i></button></td>
        </form>
    </tr>
    @endforeach
    
    
        
    
    
</table>