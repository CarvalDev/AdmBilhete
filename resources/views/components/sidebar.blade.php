<link rel="stylesheet" href="{{ URL::asset('css/nav.css') }}">

<header  style="height: 100%; width:100%">
    

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
                <i class='bx bx-help-circle'></i>
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
                <i class='bx bx-info-square'></i>
                <span class="link_name">Ajuda</span>
              </a>
              <i class='bx bxs-chevron-down arrow' ></i>
            </div>
            <ul class="sub-menu">
              <li><a class="link_name" href="#">Ajudas</a></li>
              <li><a href="{{route('ajuda.index')}}">Lista de Ajudas</a></li>
              <li><a href="{{route('ajuda.form')}}">Adicionar Ajudas</a></li>
            </ul>
          </li>

          <li>
            <div class="iocn-link">
              <a href="#">
                <i class='bx bx-group'></i>
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
              <i class='bx bx-bus' ></i>
              <span class="link_name">Linhas</span>
            </a>
            <ul class="sub-menu blank">
              <li><a class="link_name" href="{{route('linhas.index')}}">Linhas</a></li>
            </ul>
          </li>
          <li>
            <a href="{{route('faturamento.index')}}">
              <i class='bx bx-line-chart'></i>
              <span class="link_name">Financeiro</span>
            </a>
            <ul class="sub-menu blank">
              <li><a class="link_name" href="{{route('faturamento.index')}}">Financeiro</a></li>
            </ul>
          </li>
         
          <li>
            <div class="iocn-link">
              <a href="#">
                <i class='bx bx-user'></i>
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
            <li>
              <div class="iocn-link">
                <a href="#">
                  <i class='bx bx-list-plus'></i>
                  
                  <span class="link_name">Bilhetes</span>
                </a>
                <i class='bx bxs-chevron-down arrow' ></i>
              </div>
              <ul class="sub-menu">
                <li><a class="link_name" href="#">Pedidos de Bilhetes</a></li>
                <li><a href="{{ route('pedidoBilhete.index') }}">Lista de Pedidos</a></li>
              </ul>
            </li>
        <div class="profile-details">
          <div class="profile-content" onclick="perfil()">
            <img  @if ($user->fotoAdm == '')
                src="{{URL::asset('images/user.png')}}"
            @else src="{{url("storage/$user->fotoAdm")}}" alt="profileImg">
            @endif
          </div>
          <div class="name-job">
            <div class="profile_name"><p>{{$user->nomeAdm}}</p></div>
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
