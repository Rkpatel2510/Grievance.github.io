<html>

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
    <!-- @include('sidebar.sidebar') -->

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
                <div class="mb-2">
                    <div class="card mb-4 mx-4">
                        <div class="card-body p-4">
                            <form action="/faculty" method="POST">
                                @csrf
                                <h2 style="margin-bottom: 20px;">Edit grievance </h2>

                                <div class="input-group mb-3">
                                    <span class="input-group-text">
                                        <i class="fa-solid fa-person"></i>
                                    </span>

                                    <select class="form-select" name="name" aria-label="Default select example">
                                        <option selected value="">Select faculty name</option>
                                        <option value="Bhadresh shah">Bhadresh shah</option>
                                        <option value="Hardik rabari">Hardik Rabari</option>
                                        <option value="Sanjay jayswal">Sanjay jaysawal</option>
                                    </select>
                                    <div class="validation-errors">
                                        <span style="color : red">
                                            @error('name')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>                                    
                                </div>

                                <div class="input-group mb-3"><span class="input-group-text">
                                        <i class="fa-solid fa-book"></i></span>
                                    <input class="form-control" name="subject" type="text" placeholder="Faculty subject" value="{{old('subject')}}">
                                </div>
                                <div class=""></div>
                                <span style="color : red">
                                    @error('subject')
                                    {{$message}}
                                    @enderror
                                </span>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">
                                        <i class="fa-solid fa-book"></i>
                                    </span>
                                    <input class="form-control" type="text" name="subject" placeholder="Grievance subject" value="{{old('subject')}}">
                                </div>
                                
                                <div class="input-group mb-4">
                                    <span class="input-group-text">
                                        <i class="fa-solid fa-shop"></i>
                                    </span>
                                    <input class="form-control" type="Text" name="skp" placeholder="SKP Name" value="{{old('skp')}}">
                                </div>
                                
                                <input type="radio" name="gender" value="Placed">
                                <label for="age2">Placed</label>&nbsp;&nbsp;
                                <input type="radio" name="gender" value="Unplaced">
                                <label for="age3">Unplaced</label>
                                <p class="text-medium-emphasis"> </p>

                                <div class="Vertical"></div>
                                <div class="tab-content rounded-bottom">
                                    <div class="p-3 preview select-ds-inln col-md">
                                        <select class="form-select" name="vertical" aria-label="Default select example">
                                            <option selected value="">Select vertical</option>
                                            <option value="1">BFSI</option>
                                            <option value="2">IT</option>
                                            <option value="3">MEPS</option>
                                        </select>
                                        <span style="color : red">
                                            @error('vertical')
                                            {{$message}}
                                            @enderror
                                        </span>
                                    </div>

                                    <div class="p-3 preview select-ds-inln col-md">
                                        <select class="form-select" name="semester" aria-label="Default select example">
                                            <option selected="" value="">Select semester</option>
                                            <option value="I">I</option>
                                            <option value="II">II</option>
                                            <option value="III">III</option>
                                            <option value="IV">IV</option>
                                            <option value="V">V</option>
                                            <option value="VI">VI</option>
                                        </select>
                                    </div>
                                    <span style="color : red">
                                        @error('semester')
                                        {{$message}}
                                        @enderror
                                    </span>
                                </div>

                                <label for="myfile">Attach grievance file:</label>
                                <input type="file" id="myfile" name="name" multiple><br><br>

                                <div class="input-group mb-3">
                                    <textarea class="form-control" name="grievance" type="text" placeholder="Write grievance here" value="{{old('grievance')}}" rows="3"></textarea>
                                </div>
                                <span style="color : red">
                                    @error('grievance')
                                    {{$message}}
                                    @enderror
                                </span>


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