@extends('Layouts.master')

@section('content')

<div class="main-panel">
        <div class="content-wrapper">
          <div class="row mb-4">
            <div class="col-12 d-flex align-items-center justify-content-between">
              <h4 class="page-title">Companies</h4>
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
            <div class="col-lg-12">
              <div class="card px-2">
                <div class="card-body">
                  <div class="row">
                    <div class="col-12 table-responsive">
                      <table id="tablepay" class="table">
                        <thead>
                          <tr class="text-center">
                            <th>Company</th>
                            <th>Phone No</th>
                            <th>City</th>
                            <th>Joined</th>
                            <th>Status</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="text-center">
                            <td><span class="companies-name">WWE</span></td>
                            <td>(+62)811-2153-20__</td>
                            <td>Bandung</td>
                            <td>03/20/2019</td>
                            <td>-</td>
                            <td>
                              <div class="dropdown">
                                <button type="button" class="btn btn-icons btn-rounded text-center" data-toggle="dropdown">
                                  <i class="ti-more-alt"></i>
                                </button>
                                <div class="dropdown-menu">
                                  <button class="btn btn-link" onclick="edtItem('be8db22c-ed95-4b07-b4e2-28779da17dc2');"><i class="fa fa-pencil"></i></button>
                                  <button class="btn btn-link" onclick="delItem('be8db22c-ed95-4b07-b4e2-28779da17dc2');"><i class="fa fa-trash-o"></i></button>
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

        <div class="modal fade" id="formAdd" tabindex="-1" role="dialog" aria-labelledby="formStaffLabel" data-backdrop="static" data-keyboard="false">
          <div class="modal-dialog modal-lg" role="document" style="margin-top: 15px;margin-bottom: 0">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="formStaffLabel">Add Contact</h5>
                <button type="button" class="close btn-close" data-dismiss="modal" aria-label="Close" id="btncancel">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form action="/saveCon" class="form-sample" id="tambah" enctype="multipart/form-data" method="post" accept-charset="utf-8">
              <div class="modal-body">
                <div class="row">
                  <div class="col-md-4">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title d-flex">Photo
                        </h4>
                        <input type="file" class="dropify" name="photo" id="photo"/>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="card">
                      <div class="card body">
                        <div class="col-md-12 mt-4">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input type="text" name="first_name" id="first_name" class="form-control form-control-lg" placeholder="First Name">
                                <input type="hidden" id="idnya" name="idnya">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="last_name">Last Name</label>
                                <input type="text" name="last_name" id="last_name" class="form-control form-control-lg" placeholder="Last Name">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email" class="form-control form-control-lg" placeholder="Email">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="phone_no">Phone No.</label>
                                <input type="text" name="phone_no" id="phone_no" class="form-control" placeholder="(+62)8__-____-____">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="job_title">Job Title</label>
                                <input type="text" name="job_title" id="job_title" class="form-control form-control-lg" placeholder="Job Title">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="company">Company</label>
                                <input type="text" name="company" id="company" class="form-control form-control-lg" placeholder="Company">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="address">Address</label>
                                <div id="employees" data="1">
                                  <div class="employees1">

                                    <div class="row" id="selected_employees">
                                      <div class="col-md-10" >
                                        <textarea class="form-control" rows="2" id="address" name="address[]" style="width: 100%;"></textarea>
                                      </div>
                                      <div class="col-md-2">
                                        <button type="button" id="btnselect" class="btn btn-info btn-sm icon-btn ml-4 mb-2"><i class="mdi mdi-plus"></i></button>
                                      </div>
                                    </div>

                                  </div>
                                  <div id="ulang" data="1"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="city">City</label>
                                <input type="text" name="city" id="city" class="form-control form-control-lg" placeholder="City">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="state">State</label>
                                <select class="form-control form-control-sm" id="state" name="state">
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
                                <label for="zip">Zip</label>
                                <input type="text" name="zip" id="zip" class="form-control form-control-lg" placeholder="Zip">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label>Joined</label>
                                <div id="datepicker-popup" class="input-group date datepicker">
                                  <input type="text" class="form-control form-control-lg" name="joined" id="joined">
                                  <span class="input-group-addon input-group-append border-left">
                                  </span>
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
              <div class="modal-footer">
                <button type="submit" class="btn btn-success" id="btnok">Save</button>
                <button type="button" class="btn btn-light btn-close" id="btncancel" data-dismiss="modal">Cancel</button>
              </div>
              </form>
            </div>
          </div>
        </div>

        <div class="modal fade" id="detailCon" tabindex="-1" role="dialog" aria-labelledby="formStaffLabel" data-backdrop="static" data-keyboard="false">
          <div class="modal-dialog modal-lg" role="document" style="margin-top: 15px;margin-bottom: 0">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="formStaffLabel">Detail Contact</h5>
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
                        <center><img src="../assets/images/defuser.png" class="img-lg rounded-circle" id="userimg"></center>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="card">
                      <div class="card-body">

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
                                    <td>Last Name</td>
                                    <td>:</td>
                                    <td><span id="last_named"></span></td>
                                  </tr>
                                  <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td><span id="emaild"></span></td>
                                  </tr>
                                  <tr>
                                    <td>Phone No</td>
                                    <td>:</td>
                                    <td><span id="phone_nod"></span></td>
                                  </tr>
                                  <tr>
                                    <td>Job Title</td>
                                    <td>:</td>
                                    <td><span id="job_titled"></span></td>
                                  </tr>
                                  <tr>
                                    <td>Company</td>
                                    <td>:</td>
                                    <td><span id="companyd"></span></td>
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
                                    <td>Zip</td>
                                    <td>:</td>
                                    <td><span id="zipd"></span></td>
                                  </tr>
                                  <tr>
                                    <td>Joined</td>
                                    <td>:</td>
                                    <td><span id="joinedd"></span></td>
                                  </tr>
                                  <tr>
                                    <td>Address</td>
                                    <td>:</td>
                                    <td id="loaddatahere"></td>
                                  </tr>
                                </table>
                              </div>
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
          window.location.href="/delCon/"+id;
          });
}

function edtItem(id){
  $.ajax({
      url : "/edtCon",
    type: "POST",
    dataType: "JSON",
    data: {
        id : id
    },
    success : function(data){
            $("#formAdd").modal("show");
            $("#formStaffLabel").text("Edit Contact");
            $("form").attr("action", "/uptCon");
            $("#idnya").val(data.idcontacts);
            $("#first_name").val(data.first_name);
            $("#last_name").val(data.last_name);
            $("#email").val(data.email);
            $("#phone_no").val(data.phone_no);
            $("#job_title").val(data.job_title);
            $("#company").val(data.company);
            $("#city").val(data.city);
            $("#state").val(data.state);
            $("#zip").val(data.zip);
            $("#joined").val(data.joined);

            $("#btncancel").removeAttr('data-dismiss');
            $("#btncancel").attr('onclick','location.reload();');
            $("#btnok").text("Update Contact");

            $.ajax({
                url : "/showAddCon",
              type: "POST",
              dataType: "JSON",
              data: {
                  id : id
              },
              success : function(data){
                for(o=0; o<1; o++){
                  $("#address").val(data[o].address);
                }
                var kepala = $('#ulang');
                            var html = '';
                             var i;
                             for(i=1; i<data.length; i++){
                                 html += `
                                 <div class="ulang`+(i+1)+`">
                                   <div class="row mt-2">
                                     <div class="col-md-10">
                                       <textarea class="form-control" rows="2"  name="address[]" style="width: 100%;">`+data[i].address+`</textarea>
                                     </div>
                                     <div class="col-md-2">
                                       <button type="button"  class="btn btn-danger btn-just-icon add btn-sm btnHps" data="ulang`+(i+1)+`"><i class="fa fa-minus"></i></button>
                                     </div>
                                   </div>
                                 </div>
                                 `;
                             }
                             $('#ulang').html(html);
                             btnHps = $('.btnHps');
                             btnHps.click(function(){
                               var id_div = $(this).attr('data');
                               console.log(id_div);
                               $('.'+id_div).remove();
                             });
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
      url : "/viewCon",
    type: "POST",
    dataType: "JSON",
    data: {
        id : id
    },
    success : function(data){
            $("#detailCon").modal("show");
            $("#first_named").html(data.first_name);
            $("#last_named").html(data.last_name);
            $("#emaild").html(data.email);
            $("#phone_nod").html(data.phone_no);
            $("#job_titled").html(data.job_title);
            $("#companyd").html(data.company);
            $("#cityd").html(data.city);
            $("#stated").html(data.state);
            $("#zipd").html(data.zip);
            $("#joinedd").html(data.joined);
            var cekimg = data.photo;
            if(cekimg !=""){
              $("#userimg").attr('src','/assets/images/'+cekimg);
            }

            $.ajax({
                url : "/showAddCon",
              type: "POST",
              dataType: "JSON",
              data: {
                  id : id
              },
              success : function(data){
                            var html = '';
                             var i;
                             for(i=0; i<data.length; i++){
                                 html += '<div style="margin-bottom:1px;">'+data[i].address+'</div><br>';
                             }
                             $('#loaddatahere').html(html);
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
  $('#tablepay').DataTable({
      "aLengthMenu": [
        [5, 10, 15, -1],
        [5, 10, 15, "All"]
      ],
      "iDisplayLength": 10,
      "language": {
        search: ""
      },
    });
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
      $("#phone_no").inputmask({"mask": "(+62)8##-####-####"});
    });

    var btnaddselect = $('#btnselect');
      var btnDelete;
      var loopID = 1;
      btnaddselect.on('click', function(){
      loopID++;
      var headHtml = $('#employees');
      var html = `
      <div class="employees`+loopID+`">
        <div class="row mt-2">
          <div class="col-md-10">
            <textarea class="form-control" rows="2" id="address" name="address[]" style="width: 100%;"></textarea>
          </div>
          <div class="col-md-2">
            <button type="button"  class="btn btn-danger btn-just-icon add btn-sm btnDelete" data="employees`+loopID+`"><i class="fa fa-minus"></i></button>
          </div>
        </div>
      </div>
      `;
      headHtml.append(html);
      btnDelete = $('.btnDelete')
      btnDelete.click(function(){
        var id_div = $(this).attr('data');
        console.log(id_div);
        $('.'+id_div).remove();
      });
    });
</script>
@endsection