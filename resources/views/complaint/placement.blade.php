<html lang="en">

<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/custom.css')}}">
    <link rel="stylesheet" href="css/vendors/simplebar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

</head>

<body>
    @include('sidebar.sidebar')

    <div class="wrapper d-flex flex-column min-vh-100 bg-light">

        <header class="header header-sticky mb-4">
            <div class="container-fluid">
                <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
                    <i class="fa-solid fa-bars"></i>
                </button>

                <ul class="header-nav ms-3">
                    <li>
                        <a class="logout" href="/">Logout &nbsp;<i class="fa-solid fa-right-from-bracket"></i></a>
                    </li>
                </ul>
            </div>
        </header>

        <div class="container">
            <div class="row justify-content-center">
                <div class="mb-3">
                    <div class="card mb-4 mx-4">
                        <div class="card-body p-4">
                            <form action="/placement" method="POST">
                                @csrf
                                <h2 style="margin-bottom: 20px">Placement grievance</h2>

                                <input type="radio" name="gender" value="Placed">
                                <label for="age2">Placed</label>&nbsp;&nbsp;
                                <input type="radio" name="gender" value="Unplaced">
                                <label for="age3">Unplaced</label>
                                <p class="text-medium-emphasis"> </p>
                                <div class="validation-errors validation-errors2">
                                    <span>
                                        @error('gender')
                                        {{$message}}
                                        @enderror
                                    </span>
                                </div>

                                <div class="input-group mb-4">
                                    <span class="input-group-text">
                                        <i class="fa-solid fa-shop"></i>
                                    </span>
                                    <input class="form-control" type="Text" name="skp" placeholder="SKP Name" value="{{old('skp')}}">
                                </div>
                                <div class="validation-errors validation-errors2">
                                    <span>
                                        @error('skp')
                                        {{$message}}
                                        @enderror
                                    </span>
                                </div>

                                <div class="input-group mb-3">
                                    <textarea class="form-control" type="text" name="grievance" placeholder="Write grievance here"></textarea>
                                </div>
                                <div class="validation-errors validation-errors2">
                                    <span>
                                        @error('grievance')
                                        {{$message}}
                                        @enderror
                                    </span>
                                </div>


                                <button class="btn btn-primary px-4" type="submit">SUBMIT</button>&nbsp;&nbsp;

                                <button class="btn btn-secondary px-4" type="reset">CANCEL</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{url('js/vendors/@coreui/coreui/js/coreui.bundle.min.js')}}"></script>

</body>

</html>