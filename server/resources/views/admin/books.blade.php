<!-- //todo Header Start =============================================================== -->
@extends('admin.layouts.layout')




@section('content')
    <div class="modal fade" id="modalStudAdd">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Register Book</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- <div class="modal-body">
                            <form id="formADD_student" action="code.php" method="POST">
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
                                            <label for="department">Department</label>
                                            <select class="form-control form-control-sm" name="department" id="department">
                                                <option selected disabled>------ Select Department ------</option>
                                                <option value="1">New Delhi</option>
                                                <option value="2">Istanbul</option>
                                                <option value="3">Jakarta</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="firstname">First Name</label>
                                            <input type="text" name="firstname" class="form-control form-control-sm" id="firstname"
                                                placeholder="Enter firstname"
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
                                            <input type="text" name="lastname" class="form-control form-control-sm" id="lastname"
                                                placeholder="Enter lastname"
                                                oninput="this.value = this.value.charAt(0).toUpperCase() + this.value.slice(1)">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="birthdate">Birthdate</label>
                                            <input type="date" name="birthdate" class="form-control form-control-sm" id="birthdate">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="gender">Gender</label>
                                            <select class="form-control form-control-sm" name="gender" id="gender">
                                                <option selected disabled>------ Select Gender------</option>
                                                <option value="1">Male</option>
                                                <option value="2">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" class="form-control form-control-sm" id="email"
                                                placeholder="ex. mike@gmail.com">
                                        </div>
                                    </div>
                                </div>


                        </div> -->

                <div class="bs-stepper">
                    <div class="bs-stepper-header" role="tablist">
                        <!-- your steps here -->
                        <div class="step" data-target="#book_basic_part">
                            <button type="button" class="step-trigger" role="tab" aria-controls="book_basic_part"
                                id="btn-bookbasic-trigger">
                                <span class="bs-stepper-circle">1</span>
                                <span class="bs-stepper-label">Entries</span>
                            </button>
                        </div>
                        <div class="line"></div>
                        <div class="step" data-target="#book_details_part">
                            <button type="button" class="step-trigger" role="tab" aria-controls="book_details-part"
                                id="btn_bookdetails_trigger">
                                <span class="bs-stepper-circle">2</span>
                                <span class="bs-stepper-label">Book Details</span>
                            </button>
                        </div>
                        <div class="line"></div>
                        <div class="step" data-target="#book_added_part">
                            <button type="button" class="step-trigger" role="tab" aria-controls="book_details-part"
                                id="btn_bookadded_trigger">
                                <span class="bs-stepper-circle">3</span>
                                <span class="bs-stepper-label">Added Entry</span>
                            </button>
                        </div>
                    </div>
                    <div class="bs-stepper-content">
                        <!-- your steps content here -->
                        <div id="book_basic_part" class="content" role="tabpanel"
                            aria-labelledby="btn_bookbasic_trigger">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="department">Material</label>
                                        <select class="form-control form-control-sm" name="material" id="material">
                                            <option value="1">Book</option>
                                            <option value="2">Magazine</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="accession_no">Call No.</label>
                                    <input type="text" name="call_no" class="form-control form-control-sm"
                                        id="accession_no">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">

                                    <label for="student_no">Title/Statement of Responsibility.</label>
                                    <textarea class="form-control " id="book_title"></textarea>

                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-8">
                                    <label for="accession_no">Authors</label>
                                    <input type="text" name="authors" class="form-control form-control-sm"
                                        id="authors">
                                </div>
                            </div>

                            <div class="row" style="border-top: 1.5px solid #22c55e; margin-top: 25px">
                                <button class="btn btn-primary mt-2" onclick="stepper.next();">
                                    <i class="fas fa-arrow-right mr-2"></i>Next
                                </button>
                            </div>

                        </div>
                        <div id="book_details_part" class="content" role="tabpanel"
                            aria-labelledby="btn_bookdetails_trigger">
                            <div class="row mb-2">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="height">ISBN</label>
                                        <input type="text" name="firstname" class="form-control form-control-sm"
                                            id="firstname">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="middlename">Accession No.</label>
                                        <input type="text" name="accesssion_no" class="form-control form-control-sm"
                                            id="accesssion_no">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="lastname">Edition</label>
                                        <div class="form-group">

                                            <select class="form-control form-control-sm" name="department"
                                                id="department">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                            </select>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="firstname">Place of Publication</label>
                                        <input type="text" name="firstname" class="form-control form-control-sm"
                                            id="firstname">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="middlename">Publisher</label>
                                        <input type="text" name="lastname" class="form-control form-control-sm"
                                            id="lastname">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="lastname">Year of Publication</label>
                                        <div class="form-group">

                                            <select class="form-control form-control-sm" name="department"
                                                id="department">
                                                <option value="1">2010</option>
                                                <option value="2">2011</option>
                                                <option value="3">2012</option>
                                                <option value="4">2013</option>
                                                <option value="5">2014</option>
                                                <option value="6">2015</option>
                                                <option value="7">2016</option>
                                                <option value="8">2017</option>
                                                <option value="9">2018</option>
                                                <option value="10">2019</option>
                                                <option value="11">2020</option>
                                                <option value="12">2021</option>
                                                <option value="13">2022</option>
                                                <option value="14">2023</option>
                                                <option value="15">2024</option>
                                            </select>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-8">
                                    <label for="physical_desc">Physical Description</label>
                                    <input type="text" name="physical_desc" class="form-control form-control-sm"
                                        id="physical_desc">
                                </div>
                                <div class="col-4">
                                    <label for="location">Location</label>
                                    <input type="text" name="location" class="form-control form-control-sm"
                                        id="location">
                                </div>
                            </div>


                            <div class="row mb-2">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="series_title">Series Title</label>
                                        <input type="text" name="series_title" class="form-control form-control-sm"
                                            id="series_title">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="series_title">Classification</label>
                                        <select class="form-control form-control-sm" name="department" id="department">
                                            <option value="1">General-Computer, Dictionaries</option>
                                            <option value="2">Psychology, Philosophy Logic, Humanities</option>
                                            <option value="3">Religion, Bible</option>
                                            <option value="4">Social Sciences-Ecommics, Anthopology</option>
                                            <option value="5">Languages & Grammar</option>
                                            <option value="6">Science-Earth, Biology, Chemeistry, Physics, Mathematics
                                            </option>
                                            <option value="7">Applied Science & Architecture & Technology-Engineering,
                                                Nursing,
                                                Anatomy</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>
                                    </div>
                                </div>

                            </div>

                            <div class="row mb-2">
                                <div class="col-12">
                                    <label for="Notes">Notes:</label>
                                    <textarea class="form-control " id="Notes" placeholder="Includes bibliographical references" required></textarea>
                                </div>

                            </div>

                            <div class="row" style="border-top: 1.5px solid #22c55e; margin-top: 25px">
                                <button class="btn btn-outline-secondary mt-2 mr-2" onclick="stepper.previous()">
                                    <i class="fas fa-arrow-left mr-2"></i>Previous
                                </button>
                                <button class="btn btn-primary mt-2" onclick="stepper.next();">
                                    <i class="fas fa-arrow-right mr-2"></i>Next
                                </button>
                            </div>

                        </div>
                        <div id="book_added_part" class="content" role="tabpanel"
                            aria-labelledby="btn_bookadded_trigger">

                            <div class="row mb-2">
                                <div class="col">
                                    <label for="physical_desc">Subject Added Entry</label>
                                    <input type="text" name="physical_desc" class="form-control form-control-sm"
                                        id="physical_desc">
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col">
                                    <label for="personel_added">Added Entry - Personel Name</label>
                                    <input type="text" name="personel_added" class="form-control form-control-sm"
                                        id="personel_added">
                                </div>
                            </div>
                            <div class="row mb-5">
                                <div class="col">
                                    <button type="button" class="btn btn-info btn-sm">
                                        <i class="fas fa-plus mr-2"></i> Add More Entry
                                    </button>

                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="volume">Volume</label>
                                        <input type="text" name="volume" class="form-control form-control-sm"
                                            id="volume">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="notes">Notes</label>
                                        <input type="text" name="notes" class="form-control form-control-sm"
                                            id="notes">
                                    </div>
                                </div>

                            </div>


                            <div class="row" style="border-top: 1.5px solid #22c55e; margin-top: 25px">
                                <button class="btn btn-outline-secondary mt-2 mr-2" onclick="stepper.previous()">
                                    <i class="fas fa-arrow-left mr-2"></i>Previous
                                </button>
                                <button type="submit" onclick="fetchData()" class="btn btn-primary mt-2">
                                    <i class="fa-solid fa-floppy-disk mr-2"></i>Save
                                </button>
                            </div>

                        </div>

                    </div>
                </div>


                <!-- <div class="modal-footer ">
                            <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fa-solid fa-floppy-disk mr-2"></i>Save
                            </button>
                        </div> -->
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
                                        <i class="fas fa-book" style="font-size: 20px; color: #fff; padding: 3px 5px"></i>
                                    </span>
                                    <div style="margin-top: 5px">
                                        <span style="font-size: 1.1rem; font-weight: 600; color: #14532d">
                                            Book Catalogs
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
                                <li class="breadcrumb-item active">Book Catalogs</li>
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
                                        data-target="#modalStudAdd">
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
                                        <tbody>
                                            <tr>
                                                <td>Trident</td>
                                                <td>Internet
                                                    Explorer 4.0
                                                </td>
                                                <td>Win 95+</td>
                                                <td> 4</td>
                                                <td>X</td>
                                            </tr>
                                            <tr>
                                                <td>Trident</td>
                                                <td>Internet
                                                    Explorer 5.0
                                                </td>
                                                <td>Win 95+</td>
                                                <td>5</td>
                                                <td>C</td>
                                            </tr>
                                            <tr>
                                                <td>Trident</td>
                                                <td>Internet
                                                    Explorer 5.5
                                                </td>
                                                <td>Win 95+</td>
                                                <td>5.5</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Trident</td>
                                                <td>Internet
                                                    Explorer 6
                                                </td>
                                                <td>Win 98+</td>
                                                <td>6</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Trident</td>
                                                <td>Internet Explorer 7</td>
                                                <td>Win XP SP2+</td>
                                                <td>7</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Trident</td>
                                                <td>AOL browser (AOL desktop)</td>
                                                <td>Win XP</td>
                                                <td>6</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>10000</td>
                                                <td>Firefox 1.0</td>
                                                <td>Jan Rgee Sean B. Singueo</td>
                                                <td>Bachelor of Technological-Vocational Teacher Education</td>
                                                <td>
                                                    <i class="fa-solid fa-eye mx-2"></i>
                                                    <i class="fa-solid fa-pencil mr-2"></i>
                                                    <i class="fa-solid fa-trash"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Gecko</td>
                                                <td>Firefox 1.5</td>
                                                <td>Win 98+ / OSX.2+</td>
                                                <td>1.8</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Gecko</td>
                                                <td>Firefox 2.0</td>
                                                <td>Win 98+ / OSX.2+</td>
                                                <td>1.8</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Gecko</td>
                                                <td>Firefox 3.0</td>
                                                <td>Win 2k+ / OSX.3+</td>
                                                <td>1.9</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Gecko</td>
                                                <td>Camino 1.0</td>
                                                <td>OSX.2+</td>
                                                <td>1.8</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Gecko</td>
                                                <td>Camino 1.5</td>
                                                <td>OSX.3+</td>
                                                <td>1.8</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Gecko</td>
                                                <td>Netscape 7.2</td>
                                                <td>Win 95+ / Mac OS 8.6-9.2</td>
                                                <td>1.7</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Gecko</td>
                                                <td>Netscape Browser 8</td>
                                                <td>Win 98SE+</td>
                                                <td>1.7</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Gecko</td>
                                                <td>Netscape Navigator 9</td>
                                                <td>Win 98+ / OSX.2+</td>
                                                <td>1.8</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Gecko</td>
                                                <td>Mozilla 1.0</td>
                                                <td>Win 95+ / OSX.1+</td>
                                                <td>1</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Gecko</td>
                                                <td>Mozilla 1.1</td>
                                                <td>Win 95+ / OSX.1+</td>
                                                <td>1.1</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Gecko</td>
                                                <td>Mozilla 1.2</td>
                                                <td>Win 95+ / OSX.1+</td>
                                                <td>1.2</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Gecko</td>
                                                <td>Mozilla 1.3</td>
                                                <td>Win 95+ / OSX.1+</td>
                                                <td>1.3</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Gecko</td>
                                                <td>Mozilla 1.4</td>
                                                <td>Win 95+ / OSX.1+</td>
                                                <td>1.4</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Gecko</td>
                                                <td>Mozilla 1.5</td>
                                                <td>Win 95+ / OSX.1+</td>
                                                <td>1.5</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Gecko</td>
                                                <td>Mozilla 1.6</td>
                                                <td>Win 95+ / OSX.1+</td>
                                                <td>1.6</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Gecko</td>
                                                <td>Mozilla 1.7</td>
                                                <td>Win 98+ / OSX.1+</td>
                                                <td>1.7</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Gecko</td>
                                                <td>Mozilla 1.8</td>
                                                <td>Win 98+ / OSX.1+</td>
                                                <td>1.8</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Gecko</td>
                                                <td>Seamonkey 1.1</td>
                                                <td>Win 98+ / OSX.2+</td>
                                                <td>1.8</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Gecko</td>
                                                <td>Epiphany 2.20</td>
                                                <td>Gnome</td>
                                                <td>1.8</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Webkit</td>
                                                <td>Safari 1.2</td>
                                                <td>OSX.3</td>
                                                <td>125.5</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Webkit</td>
                                                <td>Safari 1.3</td>
                                                <td>OSX.3</td>
                                                <td>312.8</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Webkit</td>
                                                <td>Safari 2.0</td>
                                                <td>OSX.4+</td>
                                                <td>419.3</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Webkit</td>
                                                <td>Safari 3.0</td>
                                                <td>OSX.4+</td>
                                                <td>522.1</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Webkit</td>
                                                <td>OmniWeb 5.5</td>
                                                <td>OSX.4+</td>
                                                <td>420</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Webkit</td>
                                                <td>iPod Touch / iPhone</td>
                                                <td>iPod</td>
                                                <td>420.1</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Webkit</td>
                                                <td>S60</td>
                                                <td>S60</td>
                                                <td>413</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Presto</td>
                                                <td>Opera 7.0</td>
                                                <td>Win 95+ / OSX.1+</td>
                                                <td>-</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Presto</td>
                                                <td>Opera 7.5</td>
                                                <td>Win 95+ / OSX.2+</td>
                                                <td>-</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Presto</td>
                                                <td>Opera 8.0</td>
                                                <td>Win 95+ / OSX.2+</td>
                                                <td>-</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Presto</td>
                                                <td>Opera 8.5</td>
                                                <td>Win 95+ / OSX.2+</td>
                                                <td>-</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Presto</td>
                                                <td>Opera 9.0</td>
                                                <td>Win 95+ / OSX.3+</td>
                                                <td>-</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Presto</td>
                                                <td>Opera 9.2</td>
                                                <td>Win 88+ / OSX.3+</td>
                                                <td>-</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Presto</td>
                                                <td>Opera 9.5</td>
                                                <td>Win 88+ / OSX.3+</td>
                                                <td>-</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Presto</td>
                                                <td>Opera for Wii</td>
                                                <td>Wii</td>
                                                <td>-</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Presto</td>
                                                <td>Nokia N800</td>
                                                <td>N800</td>
                                                <td>-</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Presto</td>
                                                <td>Nintendo DS browser</td>
                                                <td>Nintendo DS</td>
                                                <td>8.5</td>
                                                <td>C/A<sup>1</sup></td>
                                            </tr>
                                            <tr>
                                                <td>KHTML</td>
                                                <td>Konqureror 3.1</td>
                                                <td>KDE 3.1</td>
                                                <td>3.1</td>
                                                <td>C</td>
                                            </tr>
                                            <tr>
                                                <td>KHTML</td>
                                                <td>Konqureror 3.3</td>
                                                <td>KDE 3.3</td>
                                                <td>3.3</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>KHTML</td>
                                                <td>Konqureror 3.5</td>
                                                <td>KDE 3.5</td>
                                                <td>3.5</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Tasman</td>
                                                <td>Internet Explorer 4.5</td>
                                                <td>Mac OS 8-9</td>
                                                <td>-</td>
                                                <td>X</td>
                                            </tr>
                                            <tr>
                                                <td>Tasman</td>
                                                <td>Internet Explorer 5.1</td>
                                                <td>Mac OS 7.6-9</td>
                                                <td>1</td>
                                                <td>C</td>
                                            </tr>
                                            <tr>
                                                <td>Tasman</td>
                                                <td>Internet Explorer 5.2</td>
                                                <td>Mac OS 8-X</td>
                                                <td>1</td>
                                                <td>C</td>
                                            </tr>
                                            <tr>
                                                <td>Misc</td>
                                                <td>NetFront 3.1</td>
                                                <td>Embedded devices</td>
                                                <td>-</td>
                                                <td>C</td>
                                            </tr>
                                            <tr>
                                                <td>Misc</td>
                                                <td>NetFront 3.4</td>
                                                <td>Embedded devices</td>
                                                <td>-</td>
                                                <td>A</td>
                                            </tr>
                                            <tr>
                                                <td>Misc</td>
                                                <td>Dillo 0.8</td>
                                                <td>Embedded devices</td>
                                                <td>-</td>
                                                <td>X</td>
                                            </tr>
                                            <tr>
                                                <td>Misc</td>
                                                <td>Links</td>
                                                <td>Text only</td>
                                                <td>-</td>
                                                <td>X</td>
                                            </tr>
                                            <tr>
                                                <td>Misc</td>
                                                <td>Lynx</td>
                                                <td>Text only</td>
                                                <td>-</td>
                                                <td>X</td>
                                            </tr>
                                            <tr>
                                                <td>Misc</td>
                                                <td>IE Mobile</td>
                                                <td>Windows Mobile 6</td>
                                                <td>-</td>
                                                <td>C</td>
                                            </tr>
                                            <tr>
                                                <td>Misc</td>
                                                <td>PSP browser</td>
                                                <td>PSP</td>
                                                <td>-</td>
                                                <td>C</td>
                                            </tr>
                                            <tr>
                                                <td>Other browsers</td>
                                                <td>All others</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>U</td>
                                            </tr>
                                        </tbody>
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
