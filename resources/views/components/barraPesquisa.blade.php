
<form
@if(isset($passageiros))

@elseif(isset($adms))


@elseif(isset($linhas))

@elseif(isset($datas))

@endif
method="get" class="d-flex flex-row gap-2" >
    @csrf
    
    <input type="text" placeholder="Pesquisa" name="search" class="form-control rounded-5" style="border-color: rgba(0,0,0,0.4)"
    @if(isset($passageiros))
            id="passageiroSearch"
    @elseif(isset($adms))
            id="admSearch"
    @elseif(isset($linhas))
        id="linhaSearch"
    @elseif(isset($datas))
        id="caixaEntradaSearch"
    @endif
    
    >
    <button type="submit" style="background: none; border:none;font-size:22px"><i style="color: #000" class="fa-solid fa-magnifying-glass"></i></button>    
</form>


{{-- para incluir a barra de pesquisa basta abrir uma @section('pesquisa') e dar include nesse componente --}}