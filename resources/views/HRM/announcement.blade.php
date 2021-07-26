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
              <h4 class="page-title">Announcement</h4>
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
                      <button class="btn btn-icons btn-inverse-success" id="buttonModal" data-toggle="modal" data-target="#formAdd"><i class="fa fa-plus"></i></button>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 table-responsive">
                      <table id="tableannouncement" class="table">
                        <thead>
                          <tr class="text-center">
                            <th>No</th>
                            <th>Title</th>
                            <th>Sent to</th>
                            <th>Description</th>
                            <th>Date</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="text-center">
                            <td>1</td>
                            <td>Test</td>
                            <td style="text-align:left;">selected employee</td>
                            <td>jangan bengong aja</td>
                            <td>11 / Dec / 2020 10:45:23</td>
                            <td style="text-align:left;">
                              <div class="dropdown">
                                <button type="button" class="btn btn-icons btn-rounded text-center" data-toggle="dropdown">
                                  <i class="ti-more-alt"></i>
                                </button>
                                <div class="dropdown-menu">
                                  <button class="btn btn-link" onclick="edtItem('ebb97ac1-65a9-47eb-8c08-c896d7613495');"><i class="fa fa-pencil"></i></button>
                                  <button class="btn btn-link" onclick="delItem('ebb97ac1-65a9-47eb-8c08-c896d7613495');"><i class="fa fa-trash-o"></i></button>
                                  <button class="btn btn-link" onclick="viewItem('ebb97ac1-65a9-47eb-8c08-c896d7613495');"><i class="fa fa-user"></i></button>                                </div>
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
          <div class="modal-dialog" role="document" style="margin-top: 15px;margin-bottom: 0">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="formStaffLabel">New Announcement</h5>
                <button type="button" class="close btn-close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form class="saveAnn form" method="post" action="http://beta.xavaxx.com/saveAnn" id="tambah" enctype="multipart/form-data">
              <div class="modal-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="announcement_title">Announcement Title</label>
                      <input type="text" name="announcement_title" id="announcement_title" class="form-control form-control-lg" placeholder="Announcement Title" required>
                      <input type="hidden" name="id_ann" id="id_ann">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="description">Description</label>
                      <textarea class="form-control" id="description" name="description" rows="2" required></textarea>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Send Announcement to</label>
                  <div class="input-group">
                    <select class="form-control form-control-sm" id="tipeSelection" name="tipeSelection">
                      <option disabled selected>-- Choose --</option>
                      <option value="all">All Employees</option>
                      <option value="selected">Selected Employees</option>
                      <option value="department">By Deptartment</option>
                      <option value="designation">By Designation</option>
                    </select>
                  </div>
                </div>
                <div class="form-group" style="display: none;" id="selected_employees">
                  <div id="employees" data="1">
                    <div class="employees1">
                      <div class="row" id="selected_employees">
                        <div class="col-md-10" >
                          <input type="text" list="browsers" name="selected_employee[]" id="selected_employee" class="form-control form-control-lg" placeholder="Employee name or ID">
                          <datalist id="browsers">
                            <option value="007 - Husein Bintang Wijaya">
                            <option value="736672 - Yuda Budi Pratama">
                            <option value="0903 - Yuda Budi Pratama">
                          </datalist>
                        </div>
                        <div class="col-md-2">
                          <button type="button" id="btnselect" class="btn btn-success btn-sm"><i class="fa fa-plus"></i></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-group" style="display: none;" id="by_dept">
                  <div class="input-group">
                    <select class="form-control form-control-sm" name="by_depart" id="by_depart">
                      <option selected="selected" disabled="disabled"> - Select By Dept - </option>
                      <option value="Finance">Finance</option>
                    </select>
                  </div>
                </div>
                <div class="form-group" style="display: none;" id="by_designation">
                  <div class="input-group">
                    <select class="form-control form-control-sm" name="by_des" id="by_des">
                      <option selected="selected" disabled="disabled"> - Select By Designation - </option>
                      <option value="CFO">CFO</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-success" id="btnok">Create Announcement</button>
                <button type="button" class="btn btn-light btn-close" data-dismiss="modal">Cancel</button>
              </div>
            </form>
            </div>
          </div>
        </div>
        
        <div class="modal fade" id="showemployee" tabindex="-1" role="dialog" aria-labelledby="formStaffLabel" data-backdrop="static" data-keyboard="false">
          <div class="modal-dialog modal-md" role="document" style="margin-top: 15px;margin-bottom: 0">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="formStaffLabel">Selected Employees</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <table id="seletedem" class="table">
                  <thead>
                    <tr class="text-center">
                      <th>Name</th>
                      <th>Actions </th>
                    </tr>
                  </thead>
                  <tbody id="loaddatahere">
                  </tbody>
                </table>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>

@endsection

@section('footer')

<script type="text/javascript">
function tambah_ann(){
  var announcement_title = $("#announcement_title").val();
  var description = $("#description").val();
  var tipeSelection = $("#tipeSelection").val();
  var by_depart = $("#by_depart").val();
  var by_des = $("#by_des").val();
  var selected_employee = $("#selected_employee").val();
  if(announcement_title == "" || description == "" || tipeSelection == ""){
      swal({
        title: "Data ada yang kosong!",
          text: "Tolong lengkapi data.",
          type: "warning",
          icon: 'warning',
          buttonsStyling: false,
          confirmButtonClass: "btn btn-warning"
      }).catch(swal.noop);
  }else{
    $.ajax({
      url : "",
            type: "POST",
            dataType: "JSON",
            data: {
                announcement_title : announcement_title,
                description : description,
                tipeSelection : tipeSelection,
                by_depart : by_depart,
                by_des : by_des,
                selected_employee : selected_employee
            }
    });
    $("#formAdd").modal("hide");
      swal({
          title: "Congratulation!",
          text: "Designation has been added",
          type: "success",
          icon: 'success',
          buttonsStyling: false,
          confirmButtonClass: "btn btn-success"
      },function(){
        location.reload();
      });
  }
}

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
                $.ajax({
                  url : "",
                        type: "POST",
                        dataType: "JSON",
                        data: {
                          id : id
                        }
                        });
                        swal({
                              title: 'Congratulation',
                              text: 'Data has been deleted',
                              type: 'success',
                              confirmButtonClass: "btn btn-success",
                              buttonsStyling: false
                          });
                          location.reload();
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
            $("#formAdd").modal("show");
            $("#formStaffLabel").text("Edit Announcement");
            $("form").attr("data-id", data.idann);
            $("form").attr("id",'update');
            $("form").attr("action",'');
            $("#id_ann").val(data.idann);
            $("#announcement_title").val(data.anntitle);
            $("#description").val(data.anndesc);
            $("#tipeSelection").val(data.annsendto);
            var open = data.annsendto;
            if(open=="department"){
              $("#by_dept").css("display", "block");
              $("#by_depart").val(data.annsenddetail);
            }else if(open=="designation"){
              $("#by_designation").css("display", "block");
              $("#by_des").val(data.annsenddetail);
            }else if(open=="selected"){
              $("#selected_employees").css("display", "block");
            }else{
              $("#selected_employees").css("display", "none");
              $("#by_designation").css("display", "none");
              $("#by_dept").css("display", "none");
            }
            $("#btnok").text("Update Announcement");
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

function update_ann(id_ann){
  var announcement_title = $("#announcement_title").val();
  var description = $("#description").val();
  var tipeSelection = $("#tipeSelection").val();
  var by_depart = $("#by_depart").val();
  var by_des = $("#by_des").val();
  var selected_employee = $("#selected_employee").val();
  if(announcement_title == "" || description == "" || tipeSelection == ""){
      swal({
        title: "Data ada yang kosong!",
          text: "Tolong lengkapi data.",
          type: "warning",
          icon: 'warning',
          buttonsStyling: false,
          confirmButtonClass: "btn btn-warning"
      }).catch(swal.noop);
  }else{
    $.ajax({
      url : "",
            type: "POST",
            dataType: "JSON",
            data: {
                id_ann : id_ann,
                announcement_title : announcement_title,
                description : description,
                tipeSelection : tipeSelection,
                by_depart : by_depart,
                by_des : by_des,
                selected_employee : selected_employee
            }
    });
    $("#formAdd").modal("hide");
      swal({
          title: "Congratulation!",
          text: "Announcement has been updated",
          type: "success",
          icon: 'success',
          buttonsStyling: false,
          confirmButtonClass: "btn btn-success"
      },function(){
        location.reload();
      });
  }
}

function viewItem(id){
  $("#showemployee").modal("show");
  $.ajax({
      url : "",
    type: "POST",
    dataType: "JSON",
    data: {
        id : id
    },
    success : function(data){
            $("#showsubdep").modal("show");
              var html = '';
                   var i;
                   for(i=0; i<data.length; i++){
                       html += '<tr class="text-center">'+
                               '<td style="text-align:left;">'+data[i].diann+'</td>'+
                               '<td><button class="btn btn-link" onclick="delSel('+"'"+data[i].idannsendto+"'"+');"><i class="fa fa-trash-o"></i></button></td>'+
                               '</tr>';
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
}

function delSel(id){
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
                $.ajax({
                  url : "",
                        type: "POST",
                        dataType: "JSON",
                        data: {
                          id : id
                        }
                        });

                          swal({
                              title: 'Congratulation',
                              text: 'Data has been deleted',
                              type: 'success',
                              confirmButtonClass: "btn btn-success",
                              buttonsStyling: false
                          });
                          location.reload();
          });
}
</script>
<script type="text/javascript">
  $('#tableannouncement').DataTable({
      "aLengthMenu": [
        [5, 10, 15, -1],
        [5, 10, 15, "All"]
      ],
      "iDisplayLength": 10,
      "language": {
        search: ""
      },
    });

    $('#seletedem').DataTable({
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
  });

  $("#tipeSelection").change(function(){
    var value = $(this).val();
    if(value == "selected"){
      $("#tipeselect").removeAttr("disabled");
      $("#selected_employees").css("display", "block");
      $("#by_dept").css("display", "none");
      $("#by_designation").css("display", "none");
    }
    else if(value == "department"){
      $("#tipeselect").removeAttr("disabled");
      $("#by_dept").css("display", "block");
      $("#selected_employees").css("display", "none");
      $("#by_designation").css("display", "none");
    }
    else if(value == "designation"){
      $("#tipeselect").removeAttr("disabled");
      $("#by_designation").css("display", "block");
      $("#selected_employees").css("display", "none");
      $("#by_dept").css("display", "none");
    }
    else{
      $("#tipeselect").attr("disabled", "disabled");
      $("#selected_employees").css("display", "none");
      $("#by_dept").css("display", "none");
      $("#by_designation").css("display", "none");
    }
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
          <input type="text" list="brow" name="selected_employee[]" id="selected_employee" class="form-control form-control-lg" placeholder="Employee name or ID">
          <datalist id="brow">
                        <option value="007 - Husein Bintang Wijaya">
                        <option value="736672 - Yuda Budi Pratama">
                        <option value="0903 - Yuda Budi Pratama">
                      </datalist>
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