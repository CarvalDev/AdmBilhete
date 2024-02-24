<link rel="stylesheet" href="{{ URL::asset('css/nav.css') }}">

<header  style="height: 100%; width:100%">
    {{-- <nav  class="navbar navbar-expand-sm flex-column h-100">
        <div style="width:80%; height:20%" class="  m-0  d-flex justify-content-center align-items-center">
        <a style="height:100% width:100%" href="{{route('home.index')}}" >
            <img class="img-fluid"  style="" src="{{ url('images/logoBranca.png') }}" alt="">
        </a>
        </div>
        <div style="height:80%" class="collapse navbar-collapse  flex-column h-100" id="navegacao">
            <div class="container d-flex justify-content-center align-items-center" style="height: 100%">
                <ul class="navbar-nav flex-column d-flex h-100 justify-content-between   text-center">
                    <li class="nav-item">
                        <div class="w-100 d-flex justify-content-center align-items-center flex-row">
                            <i style="width:25%" class="fa-solid fa-chart-simple text-white"></i>
                        <a style="width:75%" href="{{route('home.index')}}" class="nav-link">Dashboard</a>
                        </div>
                        <!-- <hr> -->
                    </li>
                    <li class="nav-item ">
                        <div class="w-100 d-flex justify-content-center align-items-center flex-row">
                            <i  style="width:25%" class="fa-solid fa-chart-simple text-white"></i>
                        <a style="width:75%" href="{{route('caixaEntrada.index')}}" class="nav-link">Suportes</a>
                        </div>
                        <!-- <hr> -->
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('passageiros.index') }}" class="nav-link">Passageiros</a>
                        <!-- <hr> -->
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('linhas.index') }}" class="nav-link">Linhas</a>
                        <!-- <hr> -->
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('faturamento.index') }}" class="nav-link">Faturamento</a>
                        <!-- <hr> -->
                    </li>
                    <li class="nav-item">
                        <span href="" id="navTransition" onclick="abreNav()" class="nav-link">Mais Opções<i class="fa-solid fa-arrow-right"></i></span>
                        <!-- <hr> -->
                    </li>
                </ul>
            </div>
            <div class="d-flex justify-content-end align-items-end ">
                <form method="POST" action="{{ route('adm.logout') }}" class="nav-link">
                    @csrf
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
                    
                    <button type="submit" style="background-color: transparent; color:white; border:none" class="d-flex justify-content-center align-items-center">
                    Sair
                    </button>
                    
                </div>
            </form>
            </div>
        </div>

    </nav> --}}

    <div class="sidebar close">
        <div class="logo-details">
          {{-- <i class='bx bxl-c-plus-plus'></i> --}}
          <img src="{{URL::asset('images/bBranca.png')}}" class=""  alt="">
          <span class="logo_name">Bilhete Único Digital</span> 
        </div>
        <ul class="nav-links">
          <li>
            <a href="{{ route('home.index') }}">
              <i class='bx bx-grid-alt' ></i>
              <span class="link_name">Dashboard</span>
            </a>
            <ul class="sub-menu blank">
              <li><a class="link_name" href="{{route('home.index')}}">Dashboard</a></li>
            </ul>
          </li>
          <li>
            <div class="iocn-link">
              <a href="{{route('caixaEntrada.index')}}">
                <i class='bx bx-collection' ></i>
                <span class="link_name">Suportes</span>
              </a>
              
            </div>
            <ul class="sub-menu blank">
              <li><a class="link_name" href="{{route('caixaEntrada.index')}}">Suportes</a></li>
              
            </ul>
          </li>
          <li>
            <div class="iocn-link">
              <a href="#">
                <i class='bx bx-book-alt' ></i>
                <span class="link_name">Passageiros</span>
              </a>
              <i class='bx bxs-chevron-down arrow' ></i>
            </div>
            <ul class="sub-menu">
              <li><a class="link_name" href="#">Passageiros</a></li>
              <li><a href="{{route('passageiros.index')}}">Lista de Passageiros</a></li>
              <li><a href="{{route('passageiros.form')}}">Adicionar Passageiros</a></li>
            </ul>
          </li>
          <li>
            <a href="{{route('linhas.index')}}">
              <i class='bx bx-pie-chart-alt-2' ></i>
              <span class="link_name">Linhas</span>
            </a>
            <ul class="sub-menu blank">
              <li><a class="link_name" href="{{route('linhas.index')}}">Linhas</a></li>
            </ul>
          </li>
          <li>
            <div class="iocn-link">
              <a href="#">
                <i class='bx bx-book-alt' ></i>
                <span class="link_name">Financeiro</span>
              </a>
              <i class='bx bxs-chevron-down arrow' ></i>
            </div>
            <ul class="sub-menu ">
              <li><a class="link_name" href="#">Financeiro</a></li>
              <li><a href="{{ route('faturamento.index') }}">Faturamento</a></li>
              <li><a href="{{ route('preco.index') }}">Editar Preço</a></li>
            </ul>
          </li>
          <li>
            <div class="iocn-link">
              <a href="#">
                <i class='bx bx-plug' ></i>
                <span class="link_name" >Adms</span>
              </a>
              <i class='bx bxs-chevron-down arrow' ></i>
            </div>
            <ul class="sub-menu">
              <li><a class="link_name" href="#">Administradores</a></li>
              <li><a href="{{ route('adm.index') }}">Lista de Adms</a></li>
              <li><a href="{{ route('adm.form') }}">Adicionar Adm</a></li>
              
            </ul>
          </li>
          
          </li>
          <li>
        <div class="profile-details">
          <div class="profile-content">
            <img @if ($user->fotoAdm == '')
                src="{{URL::asset('images/user.png')}}"
            @else src="{{$user->fotoAdm}}" alt="profileImg">
            @endif
          </div>
          <div class="name-job">
            <div class="profile_name">{{$user->nomeAdm}}</div>
            <div class="job">Supervisor</div>
          </div>
          <form action="{{ route('adm.logout') }}" method="POST">
            @csrf
            <button type="submit" style="background-color: transparent; border:none">
          <i class='bx bx-log-out' ></i>
        </button>
          </form>
        </div>
      </li>
    </ul>
      </div>
      <section class="home-section bg-white">
        <div class="home-content">
          <i class='bx bx-menu' ></i>
          
        </div>
      </section>
    
</header>

<script>
    let arrow = document.querySelectorAll(".arrow");
    for (var i = 0; i < arrow.length; i++) {
      arrow[i].addEventListener("click", (e)=>{
     let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
     arrowParent.classList.toggle("showMenu");
      });
    }
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".bx-menu");
    console.log(sidebarBtn);
    sidebarBtn.addEventListener("click", ()=>{
      sidebar.classList.toggle("close");
    });
    </script>
