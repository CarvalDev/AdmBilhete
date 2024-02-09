<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @stack('css')
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <script src="https://kit.fontawesome.com/d5ea0dfb99.js" crossorigin="anonymous"></script>
    <link rel="short icon" href="{{ URL::asset('storage/site/logo bilhete 1.png') }}" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>@yield('title') - BUD</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script type="text/javascript" src="http://code.jquery.com/jquery-3.0.0.min.js"></script>
</head>
<body>
    <div class="content w-100 vh-100 d-flex justify-content-center align-items-center">
        <div id="navbar"  style="width: 10%;background-color:#dd2d4a" class="h-100  d-flex justify-content-center align-items-center fixed-top">@include('components.sidebar')</div>
        <div style="width: 90%; margin-left:10%" class=" vh-100 d-flex flex-column justify-content-center align-items-center">
            @include('components.navbar')
            <div style="height: 80%" class="w-100 d-flex justify-content-center align-items-center">@yield('content')</div>
        </div>
        <div id="navExpandida" class="h-100   justify-content-center align-items-center fixed-top">
            @include('components.sideBarExpandida')
        </div>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="{{ URL::asset('js/nav.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


</html>