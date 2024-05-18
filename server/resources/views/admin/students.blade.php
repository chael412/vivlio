<!-- //todo Header Start =============================================================== -->
@extends('admin.layouts.layout')
<style>
    .green-icon {
        color: green;
    }

    .photo-form-group {
        margin-bottom: 0.5rem;
        /* Adjusted margin for smaller spacing */
    }

    label {
        display: block;
        margin-bottom: 0.25rem;
        /* Adjusted margin for smaller spacing */
        font-weight: bold;
    }

    input[type="file"] {
        width: 100%;
        padding: 0.20rem 0.5rem;
        /* Adjusted padding for smaller input */
        border: 1px solid #ccc;
        border-radius: 0.25rem;
        background-color: #fff;
        font-size: 0.875rem;

    }

    /* Optional: Style the file input's label */
    .custom-file-label::after {
        content: "Choose file";
        display: inline-block;
        background-color: #007bff;
        color: #fff;
        padding: 0.25rem 0.5rem;
        /* Adjusted padding for smaller label */
        border-radius: 0.25rem;
        cursor: pointer;
    }

    .custom-file-label:hover::after {
        background-color: #0056b3;
    }

    .custom-file-label:active::after {
        background-color: #00428a;
    }


    /* cropie styling */
    #btnRefresh,
    #btnCrop,
    #croppieContainer,
    #croppedImage {
        display: none;
    }

    #btnRefresh,
    #btnCrop,
    #croppedImage {
        margin: auto;
    }

    /* input[type="file"]::file-selector-button {
        border-radius: 4px;
        padding: 0 16px;
        height: 40px;
        cursor: pointer;
        background-color: white;
        border: 1px solid rbga(0, 0, 0, 0.16);
        box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.05);
        margin-right: 16px;
        transition: background-color 200ms;
    }

    input[type="file"]::file-selector-button:hover {
        background-color: #f3f4f6;
    }

    input[type="file"]::file-selector-button:active {
        background-color: #e5e7eb;
    } */

    .button-croopie {
        background-color: #2ecc71;
        color: #444444;
        font-weight: bold;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
        display: inline-block;
    }

    /* button:hover {
        background-color: #27ae60;
    } */
</style>



@section('content')
    <div class="modal fade" id="modalStudAdd">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Register Student</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="formADD_student">
                        <div class="row">
                            <div class="col">
                                <div class="row mb-2">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="student_no">Student No.</label>
                                            <input type="text" name="student_no" class="form-control form-control-sm"
                                                id="student_no" placeholder="ex. 20-10712">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="course">Course</label>
                                            <select class="form-control form-control-sm" name="course" id="course">
                                                <option selected disabled>------ Select Course ------</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="row mb-2">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="firstname">First Name</label>
                                            <input type="text" name="firstname" class="form-control form-control-sm"
                                                id="firstname" placeholder="Enter firstname"
                                                oninput="this.value = this.value.charAt(0).toUpperCase() + this.value.slice(1)">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="middlename">Middle Name</label>
                                            <input type="text" name="middlename" class="form-control form-control-sm"
                                                id="middlename" placeholder="Enter firstname"
                                                oninput="this.value = this.value.charAt(0).toUpperCase() + this.value.slice(1)">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="lastname">Last Name</label>
                                            <input type="text" name="lastname" class="form-control form-control-sm"
                                                id="lastname" placeholder="Enter lastname"
                                                oninput="this.value = this.value.charAt(0).toUpperCase() + this.value.slice(1)">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="birthdate">Birthdate</label>
                                            <input type="date" name="birthdate" class="form-control form-control-sm"
                                                id="birthdate">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="gender">Gender</label>
                                            <select class="form-control form-control-sm" name="gender" id="gender">
                                                <option selected disabled>------ Select Gender------</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" class="form-control form-control-sm"
                                                id="email" placeholder="ex. mike@gmail.com">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label>Photo</label>
                                        <input type="file" id="upload" accept="image/*">
                                        <button type="button" class="button-croopie" id="btnCrop"
                                            style="margin-top: 10px; margin-bottom: 10px;">Crop Image</button>
                                        <div id="croppieContainer"></div>

                                        <button type="button" class="button-croopie" id="btnRefresh"
                                            style="margin-bottom: 10px;">Crop Another Image</button>
                                        <img src="" id="croppedImage"
                                            style="display: none; border: 1px solid #052e16;">
                                        <input type="hidden" id="croppedImageData" name="croppedImageData">
                                    </div>
                                </div>
                            </div>

                        </div>



                </div>

                <div class="modal-footer ">
                    <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cancel</button>
                    <button type="button" onclick="createStudent()" class="btn btn-primary btn-sm">
                        <i class="fa-solid fa-floppy-disk mr-2"></i>Save
                    </button>
                </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

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
                                        <i class="fa-solid fa-user"
                                            style="font-size: 20px; color: #fff; padding: 3px 5px"></i>
                                    </span>
                                    <div style="margin-top: 5px">
                                        <span style="font-size: 1.1rem; font-weight: 600; color: #14532d">
                                            Students
                                        </span><br />
                                        <!-- <span style="color:#3498db">Summary</span> -->
                                    </div>
                                </div>

                            </div>

                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6 bread-title">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active">Students</li>
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
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <button type="button" class="btn btn-sm btn-primary px-3" data-toggle="modal"
                                        data-target="#modalStudAdd" onclick="fetchCourses()">
                                        <i class="fa-solid fa-plus mr-2"></i>Register
                                    </button>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="studentTable" class="table table-sm table-bordered  table-hover">
                                        <thead>
                                            <tr>
                                                <th style="width:5%">No.</th>
                                                <th style="width:15%">Student No</th>
                                                <th style="width:30%">Full Name</th>
                                                <th style="width:40%">Course</th>
                                                <th style="width:10%"></th>
                                            </tr>
                                        </thead>
                                        <tbody id="studentsTableBody" class="table-container"></tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
                    </div>


                </div>


            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
    @endsection
