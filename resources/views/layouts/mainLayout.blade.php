<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @stack('css')
    {{-- <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" type="text/css"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>@yield('title') laravel</title>
</head>
<body>
    <div class="content w-100 vh-100 d-flex justify-content-center align-items-center">
        <div style="width: 10%;" class="h-100 bg-danger d-flex justify-content-center align-items-center">@include('components.sidebar')</div>
        <div style="width: 90%;" class=" vh-100 d-flex flex-column justify-content-center align-items-center">
            <div style="height:15%; width:80%" class=" d-flex flex-row justify-content-between align-items-center">
                <span id="pageTitle" class="fs-2">@yield('pageTitle')</span>
                <div style="cursor:pointer" class="dropdown-toggle d-flex flex-row  h-100 justify-content-between gap-2 align-items-center"  data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="d-flex justify-content-center align-items-center  ">
                        <img src="{{ url('storage/site/user.png') }}" width="30px" alt="">
                    </div>
                    <div class="d-flex flex-column align-items-center justify-content-center">
                    
                        <span class="ms-4 fw-bold fs-5">ADM</span>     
                        <span id="cargo" class="ms-4">cargo</span>
                    
                    </div>
                </div>
                
                <ul class="dropdown-menu text-small">
                <li><button class="dropdown-item">Pefil</button></li>
                <li><button class="dropdown-item">Sign out</button></li>
                </ul>
                  
            </div>
            <div style="height: 85%" class="w-100 d-flex justify-content-center align-items-center">@yield('content')</div>
    </div>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script>$('.dropdown-toggle').dropdown()</script>
</html>