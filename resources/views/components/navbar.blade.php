<div style="height:20%; width:100%" class="d-flex flex-column justify-content-between align-items-center">
    <div class="d-flex flex-row w-100  justify-content-around align-items-center h-100">
        <div style="width: 10%" class=""></div>    
        <div style="width: 40%" class="">
        
        @yield('pesquisa')
        
        </div>   
        <div style="cursor:pointer;" class="dropdown-toggle d-flex  flex-row justify-content-end  gap-1 align-items-center"  data-bs-toggle="dropdown" aria-expanded="false">
            <div class="d-flex justify-content-center align-items-center  ">
                <img src="{{ url('storage/site/user.png') }}" width="40px" alt="">
            </div>
            <ul class="dropdown-menu text-small" >
            <li><button class="dropdown-item">Pefil</button></li>
            <li><button class="dropdown-item">Sign out</button></li>
            </ul>
            <div class="d-flex flex-column align-items-center justify-content-center">
                <span class="ms-4 fw-bold">Nome do Admin</span>     
                <span id="cargo" class="ms-4">cargo</span>
                
            </div>
        </div>
    </div>
    <div class="container">
        <div id="pageTitleContainer" class="d-flex  justify-content-start w-100 align-items-center">
            <span id="pageTitle" class="fs-3 fw-bold">@yield('pageTitle')</span>
            <div id="underline"></div>
        </div>
    </div>
      
</div>

<script defer src="{{ URL::asset('js/responsivo.js') }}"></script>