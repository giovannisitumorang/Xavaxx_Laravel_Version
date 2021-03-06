@extends('Layouts.master')
@section('images')
<img src="../../assets/images/888084082929190.png" alt="profile image" class="img-xs rounded-circle">
@endsection
@section('image')
<img src="../../assets/images/888084082929190.png" alt="profile image">
<p class="text-center font-weight-medium">Demo</p>
@endsection
@section('content')

<div class="main-panel">
        <div class="content-wrapper">
          <div class="row mb-4">
            <div class="col-12 d-flex align-items-center justify-content-between">
              <h4 class="page-title">Employees</h4>
              <div class="d-flex align-items-center">
                <div class="wrapper mr-4 d-none d-sm-block">
                  <p class="mb-0">Summary for
                    <b class="mb-0"><i id="bulan"></i> <i id="tahun"></i></b>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <div class="card-title row">
                    <div class="col-md-12 text-right">
                      <button class="btn btn-icons btn-inverse-success" id="buttonModal" data-toggle="modal" data-target="#formStaff"><i class="fa fa-plus"></i></button>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 table-responsive">
                      <table id="tableEmployee" class="table">
                        <thead>
                          <tr class="text-center">
                            <th style="width: 20%">Employee Name</th>
                            <th style="width: 15%">Designation</th>
                            <th style="width: 15%">Department</th>
                            <th style="width: 10%">Type</th>
                            <th style="width: 15%">Joined</th>
                            <th style="width: 15%">Status</th>
                            <th style="width: 10%">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                              <td style="text-align:left;">Husein Bintang Wijaya</td>
                              <td>CFO</td>
                              <td>Finance</td>
                              <td>Full Time</td>
                              <td>01/12/2020</td>
                              <td>Active</td>
                              <td>
                                <div class="dropdown">
                                  <button type="button" class="btn btn-icons btn-rounded text-center" data-toggle="dropdown">
                                    <i class="ti-more-alt"></i>
                                  </button>
                                  <div class="dropdown-menu">
                                    <button class="btn btn-link" onclick="edtItem('a0fdcb9ede7c4a39b8d182febf15ac05');"><i class="fa fa-pencil"></i></button>
                                    <button class="btn btn-link" onclick="delItem('a0fdcb9ede7c4a39b8d182febf15ac05');"><i class="fa fa-trash-o"></i></button>
                                    <button class="btn btn-link" onclick="viewItem('a0fdcb9ede7c4a39b8d182febf15ac05');"><i class="fa  fa-user-circle-o"></i></button>
                                  </div>
                                </div>
                              </td>
                            </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="formStaff" tabindex="-1" role="dialog" aria-labelledby="formStaffLabel" data-backdrop="static" data-keyboard="false">
          <div class="modal-dialog modal-lg" role="document" style="margin-top: 15px;margin-bottom: 0">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="formStaffLabel">Add Staff</h5>
                <button type="button" class="close btn-close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form action="" class="form-sample" id="tambah" enctype="multipart/form-data" method="post" accept-charset="utf-8">
              <div class="modal-body">
                <div class="row">
                  <div class="col-md-4">
                    <div class="row grid-margin">
                      <div class="card col-md-12">
                        <div class="card-body">
                          <h4 class="card-title d-flex">Photo
                            <!-- <small class="ml-auto align-self-end">
                              <a href="dropify.html" class="font-weight-light" target="_blank">More dropify examples</a>
                            </small> -->
                          </h4>
                          <input type="file" class="dropify" name="photo"  />
                        </div>
                      </div>
                    </div>
                    <div class="row grid-margin">
                      <div class="card col-md-12">
                        <div class="card-body">
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" name="allow" value="yes" id="allow"> Allow Application Login
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="card">
                      <div class="card-body">
                        <ul class="nav nav-tabs tab-basic" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" id="basic-tab" data-toggle="tab" href="#basic" role="tab">Basic</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="work-tab" data-toggle="tab" href="#work" role="tab">Work</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="personal-tab" data-toggle="tab" href="#personal" role="tab">Personal Details</a>
                          </li>
                        </ul>
                        <div class="tab-content tab-content-basic">
                          <div class="tab-pane fade show active" id="basic" role="tabpanel">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="first_name">First Name</label>
                                  <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name" required>
                                  <input type="hidden" name="id" id="mainid">
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="middle_name">Middle Name</label>
                                  <input type="text" name="middle_name" id="middle_name" class="form-control" placeholder="Middle Name">
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="last_name">Last Name</label>
                                  <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name" required>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="employee_id">Employee ID</label>
                                  <input type="text" name="employee_id" id="employee_id" class="form-control" placeholder="Employee ID" >
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="email">Email</label>
                                  <input type="text" name="email" id="email" class="form-control" placeholder="Email">
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="employee_type">Employee Type</label>
                                  <select name="employee_type" id="employee_type" class="single-select form-control" >
                                    <option selected="selected" disabled="disabled"> - Select Type - </option>
                                    <option value="fulltime">Full Time</option>
                                    <option value="parttime">Part Time</option>
                                    <option value="Contract">Contract</option>
                                    <option value="trainee">Trainee</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="employee_status">Employee Status</label>
                                  <select name="employee_status" id="employee_status" class="single-select form-control" >
                                    <option selected="selected" disabled="disabled"> - Select Status - </option>
                                    <option value="active">Active</option>
                                    <option value="terminated">Terminated</option>
                                    <option value="deceased">Deceased</option>
                                    <option value="resigned">Resigned</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="date_of_hire">Date of Hire</label>
                                  <div class="input-group date datepicker">
                                    <input type="text" id="date_of_hire" name="date_of_hire" class="form-control" >
                                    <span class="input-group-addon input-group-append border-left">
                                      <span class="mdi mdi-calendar input-group-text"></span>
                                    </span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="username">Username</label>
                                  <input type="text" name="username" id="username" class="form-control" placeholder="Username" required>

                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="password">Password</label>
                                  <div class="input-group">
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                                    <span class="input-group-addon input-group-append border-left" style="cursor: pointer;" onclick="showpass()">
                                      <span id="eye" class="fa fa-eye-slash input-group-text"></span>
                                    </span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="float-right">
                              <button type="button" class="btn btn-rounded btn-primary" onclick="next_work()">Next >></button>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="work" role="tabpanel">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="department">Department</label>
                                  <select name="department" id="department" class="single-select form-control" >
                                    <option selected="selected" disabled="disabled"> - Select Department - </option>
                                    <option value="df534020-fecd-49bd-b387-059670cc967a">Finance</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="job_title">Job Tittle</label>
                                  <select name="job_title" id="job_title" class="single-select form-control" >
                                    <option selected="selected" disabled="disabled"> - Select Tittle - </option>
                                    <option value="621ff322-b1c9-4a95-9fbe-bb1debbd4a98">CFO</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="location">Location</label>
                                  <select name="location" id="location" class="single-select form-control" >
                                    <option selected="selected" disabled="disabled"> - Select Location - </option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="reporting_to">Reporting To</label>
                                  <select name="reporting_to" id="reporting_to" class="single-select form-control" >
                                    <option selected="selected" disabled="disabled"> - Select - </option>
                                                                      </select>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="source_of_hire">Source of Hire</label>
                                  <select name="source_of_hire" id="source_of_hire" class="single-select form-control" >
                                    <option selected="selected" disabled="disabled"> - Select - </option>
                                    <option value="Direct">Direct</option>
                                    <option value="Referral">Referral</option>
                                    <option value="Web">Web</option>
                                    <option value="Newspaper">Newspaper</option>
                                    <option value="Social Media">Social Media</option>
                                    <option value="Advertisement">Advertisement</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="payrate">Payrate</label>
                                  <input type="text" name="payrate" id="payrate" class="form-control" >
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="pay_type">Pay Type</label>
                                  <select name="pay_type" id="pay_type" class="single-select form-control" >
                                    <option selected="selected" disabled="disabled"> - Select - </option>
                                    <option value="Daily">Daily</option>
                                    <option value="Weekly">Weekly</option>
                                    <option value="Biweekly">Biweekly</option>
                                    <option value="Monthly">Monthly</option>
                                    <option value="Contract">Contract</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="work_phone">Work Phone</label>
                                  <input type="text" name="work_phone" id="work_phone" class="form-control" placeholder="(+62)8__-____-____" >
                                </div>
                              </div>
                            </div>
                            <div class="float-right">
                              <button type="button" class="btn btn-rounded btn-warning" onclick="back_basic()"><< Back</button>
                              <button type="button" class="btn btn-rounded btn-primary" onclick="next_personal()">Next >></button>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="personal" role="tabpanel">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="phone">Phone</label>
                                  <input type="text" name="phone" id="phone" class="form-control" placeholder="(+62)____-_____">
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="hand_phone">Hand Phone</label>
                                  <input type="text" name="hand_phone" id="hand_phone" class="form-control" placeholder="(+62)8__-____-____">
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="other_email">Other Email</label>
                                  <input type="text" name="other_email" id="other_email" class="form-control" placeholder="Other Email">
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="date_of_birth">Date of Birth</label>
                                  <div class="input-group date datepicker">
                                    <input type="text" id="date_of_birth" name="date_of_birth" class="form-control">
                                    <span class="input-group-addon input-group-append border-left">
                                      <span class="mdi mdi-calendar input-group-text"></span>
                                    </span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="nationality">Nationality</label>
                                  <input type="text" name="nationality" id="nationality" class="form-control" placeholder="Nationality">
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="gender">Gender</label>
                                  <select name="gender" id="gender" class="single-select form-control">
                                    <option selected="selected" disabled="disabled"> - Select Gender - </option>
                                    <option value="Man">Male</option>
                                    <option value="Woman">Female</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="marital_status">Marital Status</label>
                                  <select name="marital_status" id="marital_status" class="single-select form-control">
                                    <option selected="selected" disabled="disabled"> - Select Status - </option>
                                    <option value="Married">Married</option>
                                    <option value="Single">Single</option>
                                    <!-- <option value="Disvorced">Disvorced</option> -->
                                    <option value="Widowed">Widowed</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="driving_license">Driving License</label>
                                  <input type="text" name="driving_license" id="driving_license" class="form-control" placeholder="Driving License">
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label for="address">Address</label>
                                  <textarea name="address" id="address" class="form-control" placeholder="Address"></textarea>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="city">City</label>
                                  <input type="text" name="city" id="city" class="form-control" placeholder="City">
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="state">State</label>
                                  <select name="state" id="state" class="single-select form-control">
                                    <option selected="selected" disabled="disabled"> - Select State - </option>
                                    <option value="Aceh">Aceh</option>
                                    <option value="Bali">Bali</option>
                                    <option value="Banten">Banten</option>
                                    <option value="Bengkulu">Bengkulu</option>
                                    <option value="Gorontalo">Gorontalo</option>
                                    <option value="Jakarta">Jakarta</option>
                                    <option value="Jambi">Jambi</option>
                                    <option value="Jawa Barat">Jawa Barat</option>
                                    <option value="Jawa Tengah">Jawa Tengah</option>
                                    <option value="Jawa Timur">Jawa Timur</option>
                                    <option value="Kalimantan Barat">Kalimantan Barat</option>
                                    <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                                    <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                                    <option value="Kalimantan Timur">Kalimantan Timur</option>
                                    <option value="Kalimantan Utara">Kalimantan Utara</option>
                                    <option value="Kepulauan Bangka Belitung">Kepulauan Bangka Belitung</option>
                                    <option value="Kepulauan Riau">Kepulauan Riau</option>
                                    <option value="Lampung">Lampung</option>
                                    <option value="Maluku">Maluku</option>
                                    <option value="Maluku Utara">Maluku Utara</option>
                                    <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
                                    <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                                    <option value="Papua">Papua</option>
                                    <option value="Papua Barat">Papua Barat</option>
                                    <option value="Sulawesi Barat">Sulawesi Barat</option>
                                    <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                                    <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                                    <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                                    <option value="Sulawesi Utara">Sulawesi Utara</option>
                                    <option value="Sumatera Barat">Sumatera Barat</option>
                                    <option value="Sumatera Selatan">Sumatera Selatan</option>
                                    <option value="Sumatera Utara">Sumatera Utara</option>
                                    <option value="Yogyakarta">Yogyakarta</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="zip_code">Zip Code</label>
                                  <input type="number" name="zip_code" id="zip_code" class="form-control" placeholder="00000">
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="notification">Notification :</label>
                                  <div class="form-check form-check-flat">
                                    <label class="form-check-label">
                                      <input type="checkbox" name="notification" id="notification" class="form-check-input" value="yes" > Send the employee a welcome email.
                                    </label>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="float-right">
                              <button type="button" class="btn btn-rounded btn-warning" onclick="back_work()"><< Back</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-success">Submit</button>
                <button type="button" class="btn btn-light btn-close" data-dismiss="modal">Cancel</button>
              </div>
              </form>            </div>
          </div>
        </div>
        <div class="modal fade" id="detailStaff" tabindex="-1" role="dialog" aria-labelledby="formStaffLabel" data-backdrop="static" data-keyboard="false">
          <div class="modal-dialog modal-lg" role="document" style="margin-top: 15px;margin-bottom: 0">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="formStaffLabel">Detail Staff</h5>
                <button type="button" class="close btn-close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-md-4">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title d-flex">Photo
                        </h4>
                        <center><img src="http://beta.xavaxx.com/assets/staffprofil/defuser.png" class="img-lg rounded-circle" id="userimg"></center>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="card">
                      <div class="card-body">
                        <ul class="nav nav-tabs tab-basic" role="tablist">
                          <li class="nav-item">
                            <a class="nav-link active" id="debasic-tab" data-toggle="tab" href="#debasic" role="tab">Basic</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="dework-tab" data-toggle="tab" href="#dework" role="tab">Work</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="depersonal-tab" data-toggle="tab" href="#depersonal" role="tab">Personal Details</a>
                          </li>
                        </ul>
                        <div class="tab-content tab-content-basic">
                          <div class="tab-pane fade show active" id="debasic" role="tabpanel">
                            <div class="row">
                              <div class="col-md-12">
                                <table class="table">
                                  <tr>
                                    <td>First Name</td>
                                    <td>:</td>
                                    <td><span id="first_named"></span></td>
                                  </tr>
                                  <tr>
                                    <td>Middle Name</td>
                                    <td>:</td>
                                    <td><span id="middle_named"></span></td>
                                  </tr>
                                  <tr>
                                    <td>Last Name</td>
                                    <td>:</td>
                                    <td><span id="last_named"></span></td>
                                  </tr>
                                  <tr>
                                    <td>Employee ID</td>
                                    <td>:</td>
                                    <td><span id="employee_idd"></span></td>
                                  </tr>
                                  <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td><span id="emaild"></span></td>
                                  </tr>
                                  <tr>
                                    <td>Employee Type</td>
                                    <td>:</td>
                                    <td><span id="employee_typed"></span></td>
                                  </tr>
                                  <tr>
                                    <td>Employee Status</td>
                                    <td>:</td>
                                    <td><span id="employee_statusd"></span></td>
                                  </tr>
                                  <tr>
                                    <td>Date of Hire</td>
                                    <td>:</td>
                                    <td><span id="date_of_hired"></span></td>
                                  </tr>
                                </table>
                              </div>
                            </div>

                            <div class="float-right">
                              <button type="button" class="btn btn-rounded btn-primary" onclick="next_workd()">Next >></button>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="dework" role="tabpanel">
                            <div class="row">
                              <div class="col-md-12">
                                <table class="table">
                                  <tr>
                                    <td>Department</td>
                                    <td>:</td>
                                    <td><span id="departmentd"></span></td>
                                  </tr>
                                  <tr>
                                    <td>Job Tittle</td>
                                    <td>:</td>
                                    <td><span id="job_titled"></span></td>
                                  </tr>
                                  <tr>
                                    <td>Location</td>
                                    <td>:</td>
                                    <td><span id="locationd"></span></td>
                                  </tr>
                                  <tr>
                                    <td>Reporting To</td>
                                    <td>:</td>
                                    <td><span id="reporting_tod"></span></td>
                                  </tr>
                                  <tr>
                                    <td>Source of Hire</td>
                                    <td>:</td>
                                    <td><span id="source_of_hired"></span></td>
                                  </tr>
                                  <tr>
                                    <td>Payrate</td>
                                    <td>:</td>
                                    <td><span id="payrated"></span></td>
                                  </tr>
                                  <tr>
                                    <td>Pay Type</td>
                                    <td>:</td>
                                    <td><span id="pay_typed"></span></td>
                                  </tr>
                                  <tr>
                                    <td>Work Phone</td>
                                    <td>:</td>
                                    <td><span id="work_phoned"></span></td>
                                  </tr>
                                </table>
                              </div>


                            <div class="float-right">
                              <button type="button" class="btn btn-rounded btn-warning" onclick="back_basicd()"><< Back</button>
                              <button type="button" class="btn btn-rounded btn-primary" onclick="next_personald()">Next >></button>
                            </div>
                          </div>
                        </div>
                          <div class="tab-pane fade" id="depersonal" role="tabpanel">
                            <div class="row">
                              <div class="col-md-12">
                                <table class="table">
                                  <tr>
                                    <td>Phone</td>
                                    <td>:</td>
                                    <td><span id="phoned"></span></td>
                                  </tr>
                                  <tr>
                                    <td>Hand Phone</td>
                                    <td>:</td>
                                    <td><span id="hand_phoned"></span></td>
                                  </tr>
                                  <tr>
                                    <td>Other Email</td>
                                    <td>:</td>
                                    <td><span id="other_emaild"></span></td>
                                  </tr>
                                  <tr>
                                    <td>Date of Birth</td>
                                    <td>:</td>
                                    <td><span id="date_of_birthd"></span></td>
                                  </tr>
                                  <tr>
                                    <td>Nationality</td>
                                    <td>:</td>
                                    <td><span id="nationalityd"></span></td>
                                  </tr>
                                  <tr>
                                    <td>Gender</td>
                                    <td>:</td>
                                    <td><span id="genderd"></span></td>
                                  </tr>
                                  <tr>
                                    <td>Marital Status</td>
                                    <td>:</td>
                                    <td><span id="marital_statusd"></span></td>
                                  </tr>
                                  <tr>
                                    <td>Driving License</td>
                                    <td>:</td>
                                    <td><span id="driving_licensed"></span></td>
                                  </tr>
                                  <tr>
                                    <td>Address</td>
                                    <td>:</td>
                                    <td><span id="addressd"></span></td>
                                  </tr>
                                  <tr>
                                    <td>City</td>
                                    <td>:</td>
                                    <td><span id="cityd"></span></td>
                                  </tr>
                                  <tr>
                                    <td>State</td>
                                    <td>:</td>
                                    <td><span id="stated"></span></td>
                                  </tr>
                                  <tr>
                                    <td>Zip Code</td>
                                    <td>:</td>
                                    <td><span id="zip_coded"></span></td>
                                  </tr>
                                </table>
                              </div>
                            </div>
                            <div class="float-right">
                              <button type="button" class="btn btn-rounded btn-warning" onclick="back_workd()"><< Back</button>
                              <!-- <button type="button" class="btn btn-rounded btn-primary" onclick="next_personal()">Next >></button> -->
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-close" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
@endsection

@section('footer')

<script type="text/javascript">
function delItem(id){
  swal({
            title: 'Are you sure ?',
            text: "You will not be able to recover this file!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonClass: 'btn btn-success',
            cancelButtonClass: 'btn btn-danger',
            confirmButtonText: 'Ya, Hapus!',
            cancelButtonText: 'Batal',
            buttonsStyling: false
        },function(){
          window.location.href=""+id;
          });
}

function edtItem(id){
  $.ajax({
      url : "",
    type: "POST",
    dataType: "JSON",
    data: {
        id : id
    },
    success : function(data){
            $("#formStaff").modal("show");
            $("#formStaffLabel").text("Edit Staff");
            $("form").attr("action", "");
            $("#first_name").val(data.fname);
            $("#middle_name").val(data.mname);
            $("#last_name").val(data.lname);
            $("#employee_id").val(data.employeid);
            $("#email").val(data.email);
            $("#employee_type").val(data.employetype);
            $("#employee_status").val(data.employestatus);
            $("#date_of_hire").val(data.datehire);
            $("#department").val(data.department);
            $("#job_title").val(data.jobtitle);
            $("#location").val(data.location);
            $("#reporting_to").val(data.reportingto);
            $("#source_of_hire").val(data.sourceofhire);
            $("#payrate").val(data.payrate);
            $("#pay_type").val(data.paytype);
            $("#work_phone").val(data.workphone);
            $("#phone").val(data.phone);
            $("#hand_phone").val(data.handphone);
            $("#other_email").val(data.otheremail);
            $("#date_of_birth").val(data.birth);
            $("#nationality").val(data.nationality);
            $("#gender").val(data.gender);
            $("#marital_status").val(data.status);
            $("#driving_license").val(data.drivinglicense);
            $("#address").val(data.address);
            $("#city").val(data.city);
            $("#state").val(data.state);
            $("#zip_code").val(data.zipcode);
            $("#mainid").val(data.mainid);
            $("#username").val(data.username);
            $("#password").removeAttr('required','');
            var cek = data.sendnotif;
            var allow = data.allow;
            if(cek == "yes"){
              $("#notification").attr('checked','checked');
            }
            if(allow == "yes"){
              $("#allow").attr('checked','checked');
            }
            $("#btnok").text("Update Department");
    },
    error : function(jqXHR, textStatus, errorThrown){
      swal({
            title: 'Gagal!',
            text: 'Gagal mengambil data.',
            type: 'error',
            confirmButtonClass: "btn btn-danger",
            buttonsStyling: false
        }).catch(swal.noop)
    }
  });
}

function viewItem(id){
  $.ajax({
      url : "",
    type: "POST",
    dataType: "JSON",
    data: {
        id : id
    },
    success : function(data){
            $("#detailStaff").modal("show");
            $("#first_named").html(data.fname);
            $("#middle_named").html(data.mname);
            $("#last_named").html(data.lname);
            $("#employee_idd").html(data.employeid);
            $("#emaild").html(data.email);
            $("#employee_typed").html(data.employetype);
            $("#employee_statusd").html(data.employestatus);
            $("#date_of_hired").html(data.datehire);
            $("#departmentd").html(data.departmenttitle);
            $("#job_titled").html(data.designationtitle);
            $("#locationd").html(data.location);
            $("#reporting_tod").html(data.departmentlead);
            $("#source_of_hired").html(data.sourceofhire);
            $("#payrated").html(data.payrate);
            $("#pay_typed").html(data.paytype);
            $("#work_phoned").html(data.workphone);
            $("#phoned").html(data.phone);
            $("#hand_phoned").html(data.handphone);
            $("#other_emaild").html(data.otheremail);
            $("#date_of_birthd").html(data.birth);
            $("#nationalityd").html(data.nationality);
            $("#genderd").html(data.gender);
            $("#marital_statusd").html(data.status);
            $("#driving_licensed").html(data.drivinglicense);
            $("#addressd").html(data.address);
            $("#cityd").html(data.city);
            $("#stated").html(data.state);
            $("#zip_coded").html(data.zipcode);
            $("#mainid").html(data.mainid);
            var cek = data.sendnotif;
            var cekimg = data.photo;
            if(cekimg !=""){
              $("#userimg").attr('src',''+cekimg);
            }
            if(cek == "yes"){
              $("#notification").attr('checked','checked');
            }
            $("#btnok").text("Update Department");
    },
    error : function(jqXHR, textStatus, errorThrown){
      swal({
            title: 'Gagal!',
            text: 'Gagal mengambil data.',
            type: 'error',
            confirmButtonClass: "btn btn-danger",
            buttonsStyling: false
        }).catch(swal.noop)
    }
  });
}
</script>
<script type="text/javascript">
  function next_work() {
    $('#basic').removeClass('active show');
    $('#basic-tab').removeClass('active');
    $('#work').addClass('active show');
    $('#work-tab').addClass('active');
  }
  function next_workd() {
    $('#debasic').removeClass('active show');
    $('#debasic-tab').removeClass('active');
    $('#dework').addClass('active show');
    $('#dework-tab').addClass('active');
  }
  function back_basic() {
    $('#work').removeClass('active show');
    $('#work-tab').removeClass('active');
    $('#basic').addClass('active show');
    $('#basic-tab').addClass('active');
  }
  function back_basicd() {
    $('#dework').removeClass('active show');
    $('#dework-tab').removeClass('active');
    $('#debasic').addClass('active show');
    $('#debasic-tab').addClass('active');
  }
  function next_personal() {
    $('#work').removeClass('active show');
    $('#work-tab').removeClass('active');
    $('#personal').addClass('active show');
    $('#personal-tab').addClass('active');
  }
  function next_personald() {
    $('#dework').removeClass('active show');
    $('#dework-tab').removeClass('active');
    $('#depersonal').addClass('active show');
    $('#depersonal-tab').addClass('active');
  }
  function back_work() {
    $('#personal').removeClass('active show');
    $('#personal-tab').removeClass('active');
    $('#work').addClass('active show');
    $('#work-tab').addClass('active');
  }
  function back_workd() {
    $('#depersonal').removeClass('active show');
    $('#depersonal-tab').removeClass('active');
    $('#dework').addClass('active show');
    $('#dework-tab').addClass('active');
  }
  function showpass() {
    var x = document.getElementById("password");
    var y = document.getElementById("eye");
    if (x.type == "password") {
        x.type = "text";
        $('#eye').removeClass('fa fa-eye-slash');
        $('#eye').addClass('fa fa-eye');
    } else {
        x.type = "password";
        $('#eye').removeClass('fa fa-eye');
        $('#eye').addClass('fa fa-eye-slash');
    }
  }
  $('#tableEmployee').DataTable({
      "aLengthMenu": [
        [5, 10, 15, -1],
        [5, 10, 15, "All"]
      ],
      "iDisplayLength": 10,
      "language": {
        search: ""
      },
    });
if ($(".datepicker").length) {
    $('.datepicker').datepicker({
      enableOnReadonly: true,
      todayHighlight: true,
      autoclose: true,
      format: "dd/mm/yyyy"
    });
  }
  $(document).ready(function() {
        $('#buttonModal').click(function() {
            $('html').css('overflow', 'hidden');
            $('body').bind('touchmove', function(e) {
                e.preventDefault()
            });
        });
        $('.btn-close').click(function() {
            $('html').css('overflow', 'scroll');
            $('body').unbind('touchmove');
        });
        // $("#payrate").inputmask({ alias : "currency", mask : "Rp 0.00" });
        $('#payrate').inputmask({
          alias: 'currency',
          prefix: 'Rp ',
        });
        $("#phone").inputmask({"mask": "(+62)####-#####"});
        $("#work_phone").inputmask({"mask": "(+62)8##-####-####"});
        $("#hand_phone").inputmask({"mask": "(+62)8##-####-####"});
    });

</script>
@endsection