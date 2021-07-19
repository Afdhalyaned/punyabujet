<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet" >
    <title>Register</title>
  </head>
  <!-- start body -->
  <body class="center">
    <!-- start main-layout -->
    <div class="main-layout">
      <!-- start page content -->
      <div class="row">
        <div class="col">
          <div class="content ">
            <!-- logo -->
            <div class="row">
              <div class="col">
                <img class="rounded mx-auto d-block m-5" src="asset/logo.svg" alt="">
              </div>
            </div>
            <!-- end logo -->
            <!-- start register form -->
            <div class="row">
              <div class="col">
                <form method="POST" action="{{ route('register') }}">
                @csrf
                  <h4 class="text-light mb-3 mx-3">Daftar</h4>
                  <!-- email -->
                  <div class="mb-3 mx-3">
                    <input type="email" class="form-control border-0" id="email" name="email" placeholder="email">
                  </div>
                  <!-- username -->
                  <div class="mb-3 mx-3">
                    <input type="text" class="form-control border-0" id="name" name="name" placeholder="name">
                  </div>
                  <!-- password form -->
                  <div class="mb-3 mx-3">
                    <input type="password" class="form-control border-0" id="password" name="password" placeholder="password">
                  </div>
                  <!-- re-password -->
                  <div class="mb-3 mx-3">
                    <input type="password" class="form-control border-0" id="password_confirmation" name="password_confirmation" placeholder="re-password">
                  </div>
                  <!-- term and condition -->
                  <div class="mb-3 mx-3">
                    <p class="text-light text-center">Dengan mengklik tombol daftar, anda setuju dengan <a href="#" class="text-warning">Syarat Ketentuan</a> dan <a href="#" class="text-warning">Kebijakan privacy</a> kami</p>
                  </div>
                  <!-- button -->
                  <div class="mb-3 mx-3 d-grid gap-2">
                    <button type="submit" class="btn text-dark btn-green border-0 ">{{ __('Register') }}</button>
                  </div>
                  <!-- link to register -->
                  <div class="mb-3 mx-3">
                    <p class="text-light text-center">Sudah punya akun? <a href="/login" class="text-warning">Login</a> disini</p>
                  </div>
                </form>
              </div>
            </div>
            <!-- end register form -->
          </div>
        </div>
      </div>
      
      <!-- end page content -->
    </div>
    <!-- end container -->
    
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>
    
  </body>
  <!-- end body -->
</html>