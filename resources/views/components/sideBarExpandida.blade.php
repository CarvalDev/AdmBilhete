<link rel="stylesheet" href="{{ URL::asset('css/nav.css') }}">

<header  style="height: 100%">
    <nav  class="navbar w-100 navbar-expand-sm flex-column h-100">
        <div id="espacamento" style="height:20%; width:80%" href="{{route('home.index')}}" class="  m-0  d-flex justify-content-center align-items-center">
            
        </div>
        <div style="height:80%" class="collapse navbar-collapse w-100 mt-1 flex-column h-100" id="navegacao">
            <div class="container d-flex justify-content-center w-100 align-items-center" style="height: 100%">
                <ul class="navbar-nav flex-column w-100  d-flex h-100 justify-content-between  text-center">
                    <li class="nav-item">
                            <a href="{{route('preco.edit',['id'=>1])}}" class="nav-link">Editar Preço</a>
                        <hr>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('adm.index')}}" class="nav-link">Adicionar Adm</a>
                        <hr>
                    </li>
                    <li class="nav-item">
                        <span id="navTransition" onclick="fechaNav()" href="{{ route('passageiros.index') }}" class="nav-link"><i class="fa-solid fa-arrow-left"></i> Fechar</span>
                        <hr>
                    </li>
                    <li class="nav-item">
                        
                    </li>
                    <li class="nav-item">
                        
                    </li>
                    <li class="nav-item">
                        
                    </li>
                </ul>
            </div>
            <div class="d-flex justify-content-end align-items-end " style="height: 4.8%">
                
                    
                </div>
                </a>
            </div>
        </div>

    </nav>
</header>
