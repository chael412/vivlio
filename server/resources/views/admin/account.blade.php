<!-- //todo Header Start =============================================================== -->
@extends('admin.layouts.layout')
<!--  Header End ======================================================================= -->


@section('content')
    <div class="wrapper">
        <style>
            .card-custom.card-outline-custom>.card-header a.active {
                border-top: 3px solid green;
            }
        </style>

        <!-- //todo Topbar =============================================================== -->
        @include('admin.layouts.topbar')
        <!-- Topbar End  ================================================================= -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid px-5">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Account</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                <li class="breadcrumb-item active">My Account</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid px-5">
                    <div class="row">
                        <div class="col-md-3">

                            <!-- Profile Image -->
                            <div class="card " style="border-top: 3px solid green;">
                                <div class="card-body box-profile">
                                    <div class="text-center">
                                        <img class="profile-user-img img-fluid img-circle"
                                            src="../assets/dist/img/account.png" alt="User profile picture">
                                        <!-- <i class="fa-solid fa-pen"></i> -->
                                    </div>

                                    <h3 class="profile-username text-center">Mike the Great</h3>

                                    <p class="text-muted text-center">Software Engineer</p>


                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->


                        </div>


                        <div class="col-md-9">
                            <div class="card card-custom  card-outline-custom">
                                <div class="card-header p-0 border-bottom-0">
                                    <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill"
                                                href="#custom-tabs-four-home" role="tab"
                                                aria-controls="custom-tabs-four-home" aria-selected="true">Home</a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-four-settings-tab" data-toggle="pill"
                                                href="#custom-tabs-four-settings" role="tab"
                                                aria-controls="custom-tabs-four-settings" aria-selected="false">Settings</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content" id="custom-tabs-four-tabContent">
                                        <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel"
                                            aria-labelledby="custom-tabs-four-home-tab">
                                            <form class="form-horizontal">
                                                <div class="form-group row">
                                                    <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                                    <div class="col-sm-10">
                                                        <input type="email" class="form-control" id="inputName"
                                                            placeholder="Name">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                                    <div class="col-sm-10">
                                                        <input type="email" class="form-control" id="inputEmail"
                                                            placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputName2" class="col-sm-2 col-form-label">Name</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="inputName2"
                                                            placeholder="Name">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputExperience"
                                                        class="col-sm-2 col-form-label">Experience</label>
                                                    <div class="col-sm-10">
                                                        <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="inputSkills"
                                                            placeholder="Skills">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <button type="submit"
                                                            class="btn btn-primary btn-sm float-right px-3 py-2">Update</button>
                                                    </div>
                                                </div>
                                            </form>

                                        </div>


                                        <div class="tab-pane fade" id="custom-tabs-four-settings" role="tabpanel"
                                            aria-labelledby="custom-tabs-four-settings-tab">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin malesuada lacus
                                            ullamcorper dui
                                            molestie, sit amet congue quam finibus. Etiam ultricies nunc non magna feugiat
                                            commodo. Etiam odio
                                            magna, mollis auctor felis vitae, ullamcorper ornare ligula. Proin pellentesque
                                            tincidunt nisi,
                                            vitae ullamcorper felis aliquam id. Pellentesque habitant morbi tristique
                                            senectus et netus et
                                            malesuada fames ac turpis egestas. Proin id orci eu lectus blandit suscipit.
                                            Phasellus porta, ante
                                            et varius ornare, sem enim sollicitudin eros, at commodo leo est vitae lacus.
                                            Etiam ut porta sem.
                                            Proin porttitor porta nisl, id tempor risus rhoncus quis. In in quam a nibh
                                            cursus pulvinar non
                                            consequat neque. Mauris lacus elit, condimentum ac condimentum at, semper vitae
                                            lectus. Cras lacinia
                                            erat eget sapien porta consectetur.
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card -->
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
    @endsection
