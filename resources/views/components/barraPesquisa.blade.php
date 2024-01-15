<form action="{{route('passageiros.index')}}" method="get" class="d-flex flex-row">
    @csrf
    <input type="text" placeholder="Pesquisa" name="search" class="form-control border border-danger rounded-5">
    <button type="submit" style="background: none; border:none;font-size:22px"><i style="color: #000" class="fa-solid fa-magnifying-glass"></i></button>    
</form>


{{-- para incluir a barra de pesquisa basta abrir uma @section('pesquisa') e dar include nesse componente --}}