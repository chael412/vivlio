<!-- //todo Header Start =============================================================== -->
@extends('admin.layouts.layout')
<!--  Header End ======================================================================= -->

@section('content')
    <style>
        @media screen and (max-width: 1065px) {
            .time_clock {
                display: block;
            }
        }

        @media screen and (max-width: 1500px) {
            .time_clock {
                display: block;
            }
        }



        @media screen and (max-width: 672px) {
            .time_clock {
                display: none;
            }
        }
    </style>

    <div class="wrapper">

        <div class="subNavbar" style="background: #006331; ">
            <div class="container-fluid px-5"
                style="height: 90px; display:flex; justify-content: center; align-items: center">
                <div class="row flex-row">
                    <div class="col-12 d-flex align-items-center gap-3">

                        <h2 style="color: white; font-weight: 600">
                            <a href="{{ route('dashboard') }}"><img src="./assets/dist/img/menu.png" alt="isu"
                                    width="60">
                            </a>
                            Welcome to ISU-Ilagan Library
                        </h2>
                        <p class="mx-4 h5 time_clock" style="color: #34d399"><span>August 16, 2001</span> <span>7:01:35
                                am</span></p>
                    </div>
                </div>

            </div>
        </div>
        <div class="container" style="margin-top: 25px; padding:0 160px">
            <div class="row d-flex justify-content-between ">
                <div class="col-12 col-md-6 col-lg-7 col-sm-12">


                    <div class="card  pb-3" style="border: 2px solid green; height: 280px;">
                        <div class="card-header text-center h3 bg-success">Login Here </div>
                        <div class="row justify-content-center align-items-center h-100">

                            <div class="col">
                                <div class="card-body">
                                    <form action="">
                                        <div class="form-group ">
                                            <label for="lastname">Student No.</label>
                                            <input type="text" name="lastname" class="mt-2 form-control form-control-md"
                                                id="lastname" placeholder="ex. 20-10712"
                                                oninput="this.value = this.value.charAt(0).toUpperCase() + this.value.slice(1)">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="button" class="btn btn-primary w-100" style="letter-spacing: 2.5px">
                        <i class="far fa-clock px-2"></i>Login
                    </button>
                    <p class="mt-3">No account yet? <a href="#" style="border-bottom: 1px solid blue">Register
                            here</a></p>

                </div>
                <div class="col-12 col-md-6 col-lg-3 col-sm-12">
                    <div class="row flex-column">
                        <div class="col">
                            <div class="card px-2" style="border: 2px solid green; height: 185px">
                                <div class="card-body">
                                    <img src="./assets/dist/img/default-profile.png" class="img-thumbnail" alt="">
                                    <p class="text-center">
                                        <span>Song Yan</span> <br />

                                        <span class="bg-secondary px-2">Time in: 7:00am</span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card px-2" style="border: 2px solid green; height: 185px">
                                <div class="card-body">
                                    <img src="./assets/dist/img/download4.png" class="img-thumbnail" alt="">
                                    <p class="text-center">
                                        <span>Song Yan</span> <br />

                                        <span class="bg-secondary px-2">Time in: 7:00am</span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card px-2" style="border: 2px solid green; height: 185px">
                                <div class="card-body">
                                    <img src="./assets/dist/img/download4.png" class="img-thumbnail" alt="">
                                    <p class="text-center">
                                        <span>Song Yan</span> <br />

                                        <span class="bg-secondary px-2">Time in: 7:00am</span>
                                    </p>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>


            </div>
        </div>


        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
