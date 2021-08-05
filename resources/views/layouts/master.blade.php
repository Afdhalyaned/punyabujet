<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet" >

    <!-- select2 -->
    <link href="{{asset('vendor/select2-4.1.0-rc.0/dist/css/select2.min.css')}}" rel="stylesheet" />

    <title>Transaction</title>
  </head>

  <!-- start body -->
  <body>
    <!-- start main-layout -->
    <div class="main-layout">

        <!-- start header -->
        <div class="header common-header fixed-top img-fluid">
            <!-- sidebar -->
            <div class="menu-toggle ms-3">
                <input type="checkbox">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul>
                <li class="mt-5 btn text-start"><a href="/profile" class="text-light">Profil</a></li>
                <li class="btn text-start"><a href="/collaborator" class="text-light">Kolaborator</a></li>
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <li class="btn text-start ">
                        <a href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" class="text-light">Logout</a>
                    </li>
                </form>
            </ul>
            <!-- end sidebar -->
            <div class="image">
                <img class="img-fluid position-absolute top-50 start-50 translate-middle" src="{{asset('asset/logo.svg')}}" alt="">
            </div>
        </div>
        <!-- end header -->

        <!-- start page content -->
            @yield('content')
        <!-- end page content -->
    </div>
    <!-- end main layout -->
    
    <!-- start main javascript -->
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>
    <!-- end main javascript -->

    @yield('js')


  </body>
  <!-- end body -->
</html>