<!doctype html>
<html lang="en">

<head>
    <?php

    use Carbon\Carbon;

    ?>
    <!-- Start of  Zendesk Widget script -->
    @auth
   
    @endauth
    <!-- End of  Zendesk Widget script -->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <!-- Data Tables-->
    <meta http-equiv="expires" content="0">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta http-equiv="Pragma" CONTENT="no-cache">
    @vite('resources/css/app.css')



    <style>
      
    </style>
     @livewireStyles
    @yield('styles')

</head>

<body style="background: #f5f6f6; " id="body">

    <div>
    <div class="bg-zinc-300">
    Menu
    </div>
    <div class="bg-amber-300">
    contenido
    </div>
    </div>

   

   



    @yield('scripts')
    @livewireScripts
    <script>
      
    </script>
</body>

</html>