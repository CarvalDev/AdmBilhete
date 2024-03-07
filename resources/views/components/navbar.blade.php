<div style="height:20%; width:100%" class="d-flex flex-column justify-content-between align-items-center">
    <div class="d-flex flex-row w-100  justify-content-around align-items-center h-100">
        <div style="width: 10%" class=""></div>    
        <div style="width: 40%" class="">
        
        @yield('pesquisa')
        
        </div>   
        <div class="d-flex  flex-row justify-content-end  gap-1 align-items-center"  data-bs-toggle="dropdown" aria-expanded="false">
            <div class="d-flex justify-content-center align-items-center  ">
                <img 
                @if ($user->fotoAdm == null)
                    
                src="{{ url('images/user.png') }}" width="40px" alt="">
                @else
                src="{{ url("storage/$user->fotoAdm") }}" width="40px" alt="" class="rounded-circle">
                
                @endif

            </div>
           
            <div class="d-flex flex-column align-items-center justify-content-center">
                <span class="ms-4 fw-bold">{{$user->nomeAdm}}</span>     
                
                
            </div>
            <span class="ms-2"><i class="fa-solid fa-chevron-down"></i></span>
        </div>
        <ul class="dropdown-menu text-small " >
            <form action="{{ route('adm.logout') }}" method="POST">
                @csrf
            <a class="w-100 dropdown-item" href="{{ URL::route('adm.perfil') }}">Perfil</a>
            <li><button type="submit" class="dropdown-item">Sign out</button></li>
        </form>
            </ul>
    </div>
    <div class="container">
        @if (isset($data->status) || isset($linhas))
        <div id="pageTitleContainer" class="d-flex  justify-content-between w-100 align-items-center">
            <div class="w-25 ">
            <span id="pageTitle" class="fs-3 fw-bold text-capitalize">@yield('pageTitle')</span>
            <div id="underline"></div>
            </div>
            <form @if (isset($data->status))
                action="{{route('caixaEntrada.index')}}"
                class="d-flex  justify-content-end  h-25 flex-row w-25 gap-2">
            <select class="form-control border border-dark w-50 " id="statusSuporte" name="statusSuporte" id="">
                <option  value="Aberto">Abertos</option>
                <option  value="Fechado">Fechados</option>
            </select>
            
            </form>
                @elseif(isset($linhas))
                action="{{route('linhas.index')}}"
                class="d-flex justify-content-end   h-25 flex-row w-25 gap-2">
            <select class="form-control border border-dark w-50 " id="statusLinha" name="statusLinha" id="">
                <option  value="Ativa">Ativas</option>
                <option  value="Inativa">Inativas</option>
            </select>
            
            </form>
            @endif
             

        
        
        @else    
        
        <div id="pageTitleContainer" class="d-flex  justify-content-start w-100 align-items-center">
            <span id="pageTitle" class="fs-3 fw-bold">@yield('pageTitle')</span>
            <div id="underline"></div>
            @if(isset($linha->nomeLinha) && $linha->statusLinha == "Ativa") 
                <a href="" class="ms-4 text-dark fs-5" data-bs-toggle="modal" data-bs-target="#desativar"><i class="fa-solid fa-trash"></i></a>
            @elseif(isset($linha->nomeLinha) && $linha->statusLinha == "Inativa")
                
            <a href="" class="ms-4 text-dark fs-5" data-bs-toggle="modal" data-bs-target="#ativar"><i class="fa-solid fa-check"></i></a>
       
            @else
            @endif
            @endif
        </div>
    </div>
      
</div>
<style>
    .dropdown-item.active, .dropdown-item:active {
  background-color: #e70000 !important; 
}
</style>

<script defer src="{{ URL::asset('js/responsivo.js') }}"></script>