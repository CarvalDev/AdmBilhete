<link rel="stylesheet" href="{{ URL::asset('css/nav.css') }}">

<header style="height: 100%">
    <nav class="navbar navbar-expand-sm flex-column h-100">
        <a href="{{route('home.index')}}" class="navbar-brand">
            <img class="h-100 w-100 img-fluid" src="{{ url('storage/site/logo bilhete 1.png') }}" alt="">
        </a>
        <div class="collapse navbar-collapse flex-column h-100" id="navegacao">
            <div class="container d-flex justify-content-center align-items-center" style="height: 55vh">
                <ul class="navbar-nav flex-column gap-5 text-center">
                    <li class="nav-item">
                        <a href="{{route('home.index')}}" class="nav-link">Painel de Controle</a>
                        <hr>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('caixaEntrada.index') }}" class="nav-link">Caixa de Entrada</a>
                        <hr>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('passageiros.index') }}" class="nav-link">Passageiros</a>
                        <hr>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('catracas.index') }}" class="nav-link">Catracas</a>
                        <hr>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('faturamento.index') }}" class="nav-link">Faturamento</a>
                        <hr>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('reajuste.index') }}" class="nav-link">Reajuste</a>
                        <hr>
                    </li>
                </ul>
            </div>
            <div class="d-flex justify-content-end align-items-end h-25">
                <a href="{{ route('login.index') }}" class="nav-link">
                    <div class="d-flex flex-row gap-2">
                        <div class="d-flex justify-content-center align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                            d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0z" />
                            <path fill-rule="evenodd"
                            d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                        </svg>
                    </div> 
                    
                    <div class="d-flex justify-content-center align-items-center">
                    Sair
                    </div>
                    
                </div>
                </a>
            </div>
        </div>

    </nav>
</header>
