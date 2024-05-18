@extends('layouts.layout')



@section('content')
    <style>
        .white-text {
            color: #fff;
        }

        .icon {
            color: #1abc9c;
        }

        .title-wrapper {
            padding: 15px 20px;
        }

        .card-no {
            font-size: 1.3rem;
        }

        .card-txt {
            font-size: 1.1rem;
        }

        .first-span {
            border-bottom: 1px solid #fff;
            padding-bottom: 5px;
            margin-botttom: 25px;
        }


        @media screen and (max-width: 1065px) {
            .library-img {
                display: none;
            }

            .hero-title {
                font-size: 4.5rem;
            }

            .hero-title-container {
                padding-left: 55px
            }

        }

        @media screen and (max-width: 1500px) {

            .hero-title {
                font-size: 4.5rem;

            }

            .hero-title-container {
                padding-left: 135px
            }

            .hrs-card {
                padding: 25px 25px 40px 25px;
            }
        }

        @media screen and (max-width: 3200px) {

            .hero-title {
                font-size: 4.5rem;

            }

            .hero-title-container {
                padding-left: 135px
            }

            .hrs-card {
                padding: 25px 25px 40px 25px;
            }
        }





        @media screen and (max-width: 672px) {
            .isu-img {
                display: none;
            }

            .bread-title {
                display: none;
            }

            .first-span {
                font-size: .85rem;
            }

            .second-span {
                font-size: .75rem;
            }

            .third-span {
                font-size: .85rem;
            }

            .hero-sec {
                display: flex;
                flex-direction: column;
            }

            .hero-title {
                font-size: 3.5rem;
            }

            .hero-title-container {
                padding-left: 65px
            }
        }
    </style>


    <div class="wrapper">
        <!-- //todo Topbar =============================================================== -->
        @include('layouts.topbar')
        <!-- Topbar End  ================================================================= -->


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="padding-bottom: 80px">
            <!-- //subNavBar Topbar =============================================================== -->
            @include('layouts.subbar')
            <!-- subNavBar End  =================================================================== -->

            <style>
                .hero-card {
                    position: relative;
                    /* Establish stacking context */
                    width: 100%;
                    height: 500px;
                    /* Set your desired height */
                    background: url('./assets/dist/img/girl_in_lib.jpg') center/cover no-repeat;
                    /* Replace with your image */
                }

                .img-overlay {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    background-color: #2c3e50;
                    opacity: 0.6;
                }

                .content {
                    position: relative;
                    z-index: 1;
                    /* Ensure content appears above overlay */
                    padding: 20px;
                    /* Adjust padding as needed */
                }

                .line-hrs {
                    display: inline-block;
                    width: 15%;
                    /* Adjust width of the lines */
                    border-top: 1px solid #fff;
                    /* Adjust thickness and color of the lines */
                }

                .hrs-title {
                    text-align: center;
                    /* Center the content horizontally */
                }
            </style>

            <!-- Main content -->

            <div class="container-fluid mt-1">
                <div class="row">
                    <div class="col-12 hero-card">
                        <div class="img-overlay"></div>
                        <div class="row hero-sec">
                            <div class="col-12 col-md-12 col-sm-12 col-lg-7 text-light  mt-5">
                                <div class="row hero-title-container">
                                    <div class="col-12 ">
                                        <h2 class="hero-title" style=" font-weight: 500">Books accompany
                                            your learning</h2>
                                    </div>
                                    <div class="col-12 mt-3">
                                        <button type="button" onclick="fetchData()"
                                            class="btn btn-success btn-lg hero-btn">
                                            <i class="fa-solid fa-book mx-1"></i>Browse book
                                        </button>
                                    </div>
                                </div>


                            </div>
                            <div class="col-12 col-md-12 col-sm-12 col-lg-5 mt-5">
                                <div class="row" style="display:flex; justify-content:center">

                                    <div class="col-12">
                                        <div class="row flex-column justify-content-center align-items-center">
                                            <div class="col-12" style="color: #fff">
                                                <h5 class="hrs-title">
                                                    <span class="line-hrs"></span>
                                                    Library Hours
                                                    <span class="line-hrs"></span>
                                                </h5>
                                            </div>


                                            <div class="col-7">
                                                <div class="text-center hrs-card"
                                                    style=" background: url('./assets/dist/img/banner.jpg'); color: #fff; ">
                                                    <h5>Monday-Friday</h5>
                                                    <h5>

                                                        (8:00 a.m. - 5:00 p.m.)
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

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
