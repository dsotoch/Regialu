<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{asset( 'melody/vendors/iconfonts/font-awesome/css/all.min.css')}}">
<link rel="stylesheet" href="{{asset( 'melody/vendors/css/vendor.bundle.base.css')}}">
<link rel="stylesheet" href="{{asset( 'melody/vendors/css/vendor.bundle.addons.css')}}">
<!-- endinject -->
<!-- plugin css for this page -->
<!-- End plugin css for this page -->
<!-- inject:css -->
<link rel="stylesheet" href="{{asset( 'melody/css/style.css')}}">
<style>
  #olvidado:hover {
    color: blue;
  }
</style>
</head>
<body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
          <div class="row flex-grow" style="background-color: white;">
            <div class="col-lg-6 d-flex align-items-center justify-content-center">
              <div class="auth-form-transparent text-left p-3">
                <div class="brand-logo">
                  <img src="{{asset( 'imagenes/logo.png')}}" alt="logo">
                </div>
                <h4>¡Bienvenido de nuevo!</h4>
                <h6 class="font-weight-light">Encantado de verte de nuevo!</h6>
                <form class="pt-3" id="miformlogin">
                  @csrf
                  <meta name="csrf-token" content="{{ csrf_token() }}">
                  <div class="form-group">
                    <label for="exampleInputEmail">Documento de Identidad</label>
                    <div class="input-group">
                      <div class="input-group-prepend bg-transparent">
                        <span class="input-group-text bg-transparent border-right-0">
                          <i class="fa fa-user text-primary"></i>
                        </span>
                      </div>
                      <input type="number" class="form-control form-control-lg border-left-0" id="exampleInputEmail"
                        placeholder="Username">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword">Password</label>
                    <div class="input-group">
                      <div class="input-group-prepend bg-transparent">
                        <span class="input-group-text bg-transparent border-right-0">
                          <i class="fa fa-lock text-primary"></i>
                        </span>
                      </div>
                      <input type="password" class="form-control form-control-lg border-left-0" id="exampleInputPassword"
                        placeholder="Password">
                    </div>
                  </div>
                  <div class="my-2 d-flex justify-content-between align-items-center">
  
                    <button id="olvidado" style="background-color: white;border: none;">¿Has olvidado tu
                      contraseña?</button>
                  </div>
                  <div class="my-3">
                    <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"
                      id="login">LOGIN</button>
                  </div>
  
                  <div class="text-center mt-4 font-weight-light">
                    ¿No tienes una cuenta?<a href="{{ route('register')}}" class="text-primary">Crear</a>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-lg-6 login-half-bg d-flex flex-row">
              <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2023 Todos
                los Derechos Reservados.</p>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- Button trigger modal -->
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Recuperar Contraseña</h5>
              <button type="button" class="btn-close btn-info" data-dismiss="modal" aria-label="Close">X</button>
            </div>
            <div class="modal-body">
              <form action="" id="miForm2">
                @csrf
      
                <label for="email" class="form-label">Documento de Identidad</label>
                <input type="text" name="dni" class="form-control" placeholder="Ingrese su Documento de Identidad"
                  id="dni">
                <br>
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Ingrese el Email Asociado a tu cuenta"
                  id="email">
                  <br>
                  <button type="button" class="btn btn-success" id="recuperar">Recuperar</button>
              </form>

            </div>
            
          </div>
        </div>
      </div>
      <!-- Button trigger modal -->
  
  
      <!-- Modal -->
      <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="background-color: white;">
          <div class="modal-body">
            <div class="loader-demo-box">
              <div class="pixel-loader"></div>
            </div>
          </div>
        </div>
      </div>
      <!-- page-body-wrapper ends -->
    </div>
  
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{asset( 'melody/vendors/js/vendor.bundle.base.js')}}"></script>
  <script src="{{asset( 'melody/vendors/js/vendor.bundle.addons.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{asset( 'melody/js/off-canvas.js')}}"></script>
  <script src="{{asset( 'melody/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset( 'melody/js/misc.js')}}"></script>
  <script src="{{asset( 'melody/js/settings.js')}}"></script>
  <script src="{{asset( 'melody/js/todolist.js')}}"></script>
  <script src="{{asset( 'melody/js/toastDemo.js')}}" type="module"></script>

  <script src="{{asset( 'login/register.js')}}" type="module"></script>
  <script src="{{asset( '/general.js')}}" type="module"></script>

  <!-- endinject -->
  <!-- Custom js for this page-->
</body>