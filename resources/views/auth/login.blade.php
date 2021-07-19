<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet" >
    <title>Login</title>
  </head>
  <!-- start body -->
  <body class="center">
    <!-- start main layout -->
    <div class="main-layout">
      <!-- start page content -->
      <div class="row">
        <div class="col">
          <div class="content">
            <!-- logo -->
            <div class="row">
              <div class="col">
                <img class="rounded mx-auto d-block m-5" src="asset/logo.svg" alt="">
              </div>
            </div>
            <!-- end logo -->
            <!-- start login form -->
            <div class="row">
              <div class="col">
                <form method="POST" action="{{ route('login') }}">
                @csrf
                  <h4 class="text-light mb-3 mx-3">Login</h4>
                  <!-- email form -->
                  <div class="mb-3 mx-3">
                    <input type="email" class="form-control border-0" id="email" name="email" placeholder="email">
                  </div>
                  <!-- password form -->
                  <div class="mb-3 mx-3">
                    <input type="password" class="form-control border-0" id="password" name="password" placeholder="password" required>
                  </div>
                  <!-- remember me -->
                  <div class="mb-3 mx-3">
                    <input type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember" id="remember_me" >
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                  </div>
                  <!-- button -->
                  <div class="mb-3 mx-3 d-grid gap-2">
                    <button type="submit" class="btn text-dark btn-green border-0">{{ __('Masuk') }}</button>
                  </div>
                  <!-- link to register -->
                  <div class="mb-3 mx-3">
                    <p class="text-light text-center">Belum punya akun? <a href="/register" class="text-light">Daftar</a> disini. <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('lupa password??') }} </a></p>
                  </div>
                </form>
              </div>
            </div>
            <!-- end login form -->
          </div>
        </div>
      </div>
      
      <!-- end page content -->
    </div>
    <!-- end container -->
    
    <script src="../../js/bootstrap.bundle.min.js"></script>

  </body>
  <!-- end body -->
</html>