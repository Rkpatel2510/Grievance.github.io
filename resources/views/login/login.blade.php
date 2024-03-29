<html>

<head>
  <base href="./">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
  <link rel="stylesheet" href="css/vendors/simplebar.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

</head>

<body>
  <div class="bg-light min-vh-100 d-flex flex-row align-items-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="card-group d-block d-md-flex row">
            <div class="card col-md-7 p-4 mb-0">
              <div class="card-body">
                <form action="/" method="POST">
                  @csrf

                  @if($errors)
                  @foreach($errors -> all() as $err)
                  <label> {{$err}} </label>
                  @endforeach
                  @endif

                  @if(session()->has('status'))
                  <div class="alert alert-danger">
                  {{session()->get('status')}}
                  </div>                 
                  @endif

                  <h1>Login</h1>
                  <p class="text-medium-emphasis">Sign in to your account</p>
                  <div class="input-group mb-3"><span class="input-group-text">
                      <i class="fa-solid fa-envelope"></i>
                    </span>
                    <input class="form-control" type="email" name="email" placeholder="Email id" value="{{old('email')}}">
                  </div>
                  <div class="input-group mb-4"><span class="input-group-text">
                      <i class="fa-solid fa-key"></i>
                    </span>
                    <input class="form-control" type="password" name="password" placeholder="Password">
                  </div>
                  <div class="row">
                    <div class="col-6">
                      <button class="btn btn-primary px-4" type="submit">LOGIN</button>
                    </div>
                    <div class="col-6 text-end">
                      <button class="btn btn-link px-0" type="button"><a href="/forgetlink/create">Forgot password?</a></button>
                    </div>
                  </div>
                </form>
              </div>
            </div>

            <div class="card col-md-5 text-white py-5" style="background-color: #303C54; ">
              <div class="card-body text-center">
                <div style="margin-bottom: 15px">
                  <img src="{{url('images/STA.png')}}" height="47" width="190" alt="logo" />
                </div>
                <div>
                  <h2>Sign up</h2>
                  <p>Create your account
                  </p>
                  <a class="btn btn-lg btn-outline-light mt-3" href="{{url('/register/create')}}">Sign up!</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- CoreUI and necessary plugins-->
  <script src="vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
  <script src="vendors/simplebar/js/simplebar.min.js"></script>

</body>


</html>