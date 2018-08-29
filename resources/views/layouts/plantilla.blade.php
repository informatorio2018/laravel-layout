<!doctype html>
<html class="no-js h-100" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Shards Dashboard Lite - Free Bootstrap Admin Template – DesignRevision</title>
    <meta name="description" content="A high-quality &amp; free Bootstrap admin dashboard template pack that comes with lots of templates and components.">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/main.css')}}">

    <!-- <script async defer src="https://buttons.github.io/buttons.js"></script> -->
  </head>
  <body class="h-100">
   
    
    <div class="container-fluid">
      <div class="row">
        <!-- Main Sidebar -->
        @include('partials.sidebar')
        <!-- End Main Sidebar -->

        <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
          <div class="main-navbar sticky-top bg-white">
            <!-- Main Navbar -->
            @include('partials.navbar')
          </div>
          <!-- / .main-navbar -->

          <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Pantalla Principal</span>
                
                @yield('content')
              </div>
            </div>
            <!-- End Page Header -->
           
            
          </div>
         @include('partials.footer')
        </main>

      </div>
    </div>
    <script src="{{asset('js/main.js')}}"></script>

  </body>
</html>