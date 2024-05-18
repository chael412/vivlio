<!-- //todo Header Start =============================================================== -->
@extends('admin.layouts.layout')
<!--  Header End ======================================================================= -->


@section('content')
    <div class="wrapper">
        <!-- //todo Topbar =============================================================== -->
        @include('admin.layouts.topbar')
        <!-- Topbar End  ================================================================= -->


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="padding-bottom: 80px">
            <!-- //subNavBar Topbar =============================================================== -->
            @include('admin.layouts.subbar')
            <!-- subNavBar End  =================================================================== -->


            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container">
                    <div class="row mb-2" style="box-shadow: 0 4px 5px rgba(0, 0, 0, 0.1); padding: 15px; 2px">
                        <div class="col-sm-6">
                            <div class="m-0">
                                <div class="d-flex">
                                    <span
                                        style="background: #27ae60; border-radius: 5px; padding: 10px 8px; margin-right: 5px">
                                        <i class="fa-solid fa-house-chimney"
                                            style="font-size: 20px; color: #fff; padding: 3px"></i>
                                    </span>
                                    <div>
                                        <span>Dashboard</span><br />
                                        <span style="color:#3498db">Summary</span>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6 bread-title">
                            <ol class="breadcrumb float-sm-right">
                                <!-- <li class="breadcrumb-item"><a href="#">Home</a></li> -->
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="info-box" style="padding: 20px 0">
                                <span class="info-box-icon">
                                    <i class="fa-solid fa-users icon"></i>
                                </span>
                                <div class="info-box-content">
                                    <span class="info-box-text card-txt">Students</span>
                                    <span class="info-box-number card-no">1,410</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="info-box" style="padding: 20px 0">
                                <span class="info-box-icon">
                                    <i class="fa-solid fa-user icon"></i>
                                </span>

                                <div class="info-box-content">
                                    <span class="info-box-text card-txt">Faculty</span>
                                    <span class="info-box-number card-no">410</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="info-box" style="padding: 20px 0">
                                <span class="info-box-icon">
                                    <i class="fa-solid fa-school icon"></i>
                                </span>

                                <div class="info-box-content">
                                    <span class="info-box-text card-txt">Departments</span>
                                    <span class="info-box-number card-no">13,648</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="info-box" style="padding: 20px 0">
                                <span class="info-box-icon">
                                    <i class="fa-solid fa-book icon"></i>
                                </span>
                                <div class="info-box-content">
                                    <span class="info-box-text card-txt">Books</span>
                                    <span class="info-box-number card-no">93,139</span>
                                </div>
                                <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                        </div>
                        <!-- /.col -->
                    </div>


                </div>
                <div class="container">
                    <div class="row pt-3 pb-5">
                        <div class="col-12">`
                            <h4>Legends:</h4>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div class="table-responsive">
                                <table class="table  table-sm">
                                    <thead class="table-success">
                                        <tr>
                                            <th style="width: 25%">Acronoym</th>
                                            <th style="width: 75%">Course</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>R1C1</td>
                                            <td>R1C2</td>
                                        </tr>
                                        <tr>
                                            <td>Item</td>
                                            <td>Item</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <div id="chart_div"></div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
    @endsection
