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
              <h4 class="page-title">Leave Request</h4>
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
                      <table id="tableLeaverequest" class="table">
                        <thead>
                          <tr class="text-center">
                            <th>No.</th>
                            <th>Employee Name</th>
                            <th>Total Days</th>
                            <th>Available</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
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
                <h5 class="modal-title" id="formStaffLabel">New Request</h5>
                <button type="button" class="close btn-close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form class="saveDep form" method="post" action="#" id="tambah" enctype="multipart/form-data">
              <div class="modal-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="employee_name">Employee Name</label>
                      <input type="text" list="browsers" name="employee_name" id="employee_name" class="form-control form-control-lg" placeholder="Employee Name">
                      <datalist id="browsers">
                        <option value="007 - Husein Bintang Wijaya">Husein Bintang Wijaya</option>
                        <option value="736672 - Yuda Budi Pratama">Yuda Budi Pratama</option>
                        <option value="0903 - Yuda Budi Pratama">Yuda Budi Pratama</option>
                      </datalist>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="from_date">From</label>
                      <div class="input-group date datepicker">
                        <input type="text" name="from_date" id="from_date" class="form-control form-control-lg">
                        <span class="input-group-addon input-group-append border-left">
                          <span class="mdi mdi-calendar input-group-text"></span>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="to_date">To</label>
                      <div class="input-group date datepicker">
                        <input type="text" name="to_date" id="to_date" class="form-control form-control-lg">
                        <span class="input-group-addon input-group-append border-left">
                          <span class="mdi mdi-calendar input-group-text"></span>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="reason">Reason</label>
                      <textarea class="form-control" id="reason" rows="2" name="reason"></textarea>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-success">Create Request</button>
                <button type="button" class="btn btn-light btn-close" data-dismiss="modal">Cancel</button>
              </div>
            </form>
            </div>
          </div>
        </div>
        <!-- Modal Ends -->

        <div class="modal fade" id="showleave" tabindex="-1" role="dialog" aria-labelledby="formStaffLabel" data-backdrop="static" data-keyboard="false">
          <div class="modal-dialog modal-lg" role="document" style="margin-top: 15px;margin-bottom: 0">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="formStaffLabel">Detail Leave</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <table id="leavetbl" class="table">
                  <thead>
                    <tr class="text-center">
                      <th>From Date</th>
                      <th>To Date</th>
                      <th>Days</th>
                      <th>Leave Reason</th>
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
$(document).ready(function(){
  $("form").submit(function(e){
    e.preventDefault();
    var atribut = $(this).attr("id");
    if(atribut == "tambah"){
      adding();
    }
    else if(atribut == "update"){
      var keyword = $(this).data("id");
      updating(keyword);
    }
  });
});

function adding(){
      var employee_name = $("#employee_name").val();
      var from_date = $("#from_date").val();
      var to_date = $("#to_date").val();
      var reason = $("#reason").val();
      if(employee_name == "" || from_date == "" || to_date =="" || reason==""){
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
                  employee_name:employee_name,
                  from_date :from_date ,
                  to_date :to_date ,
                  reason :reason ,
                },
        success : function(data){
            $("#formAdd").modal("hide");
              swal({
                  title: "Congratulation!",
                  text: "Data has been added",
                  type: "success",
                  icon: 'success',
                  buttonsStyling: false,
                  confirmButtonClass: "btn btn-success"
              },function(){
                location.reload();
              });
        },
        error : function(jqXHR, textStatus, errorThrown){
          swal({
                title: 'Gagal!',
                text: 'Jumlah hari melebih batas maksimal',
                type: 'error',
                confirmButtonClass: "btn btn-danger",
                buttonsStyling: false
            }).catch(swal.noop)
        }
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
          window.location.href="http://beta.xavaxx.com/delReq/"+id;
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
            $("#showleave").modal("show");
              var html = '';
                   var i;
                   for(i=0; i<data.length; i++){
                       html += '<tr class="text-center">'+
                               '<td>'+data[i].fromdate+'</td>'+
                               '<td>'+data[i].todate+'</td>'+
                               '<td>'+data[i].days+'</td>'+
                               '<td>'+data[i].leavereson+'</td>'+
                               '<td><button class="btn btn-link" onclick="edtItem('+"'"+data[i].idleavereq+"'"+');"><i class="fa fa-pencil"></i></button> <button class="btn btn-link" onclick="delSel('+"'"+data[i].idleavereq+"'"+');"><i class="fa fa-trash-o"></i></button></td>'+
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

function edtItem(id){
  //alert(id);
  $.ajax({
      url : "",
    type: "POST",
    dataType: "JSON",
    data: {
        id : id
    },
    success : function(data){
            $("#formAdd").modal("show");
            $("#showleave").modal("hide");
            $("#formStaffLabel").text("Edit Leave Request");
            $("form").attr("data-id", id);
            $("form").attr("id",'update');
            $("#employee_name").val(data.employeid+" - "+data.fname+" "+data.mname+" "+data.lname);
            $("#from_date").val(data.fromdate);
            $("#to_date").val(data.todate);
            $("#reason").val(data.leavereson);
            $("#btnok").text("Update Leave Request");
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

function updating(keyword){
      var employee_name = $("#employee_name").val();
      var from_date = $("#from_date").val();
      var to_date = $("#to_date").val();
      var reason = $("#reason").val();
      if(employee_name == "" || from_date == "" || to_date =="" || reason==""){
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
                  keyword : keyword,
                  employee_name:employee_name,
                  from_date :from_date ,
                  to_date :to_date ,
                  reason :reason ,
                },
        success : function(data){
            $("#formAdd").modal("hide");
              swal({
                  title: "Congratulation!",
                  text: "Data has been updated",
                  type: "success",
                  icon: 'success',
                  buttonsStyling: false,
                  confirmButtonClass: "btn btn-success"
              },function(){
                location.reload();
              });
        },
        error : function(jqXHR, textStatus, errorThrown){
          swal({
                title: 'Gagal!',
                text: 'Jumlah hari melebih batas maksimal',
                type: 'error',
                confirmButtonClass: "btn btn-danger",
                buttonsStyling: false
            }).catch(swal.noop)
        }
      });
      }
}
</script>
<script type="text/javascript">
  $('#tableLeaverequest').DataTable({
      "aLengthMenu": [
        [5, 10, 15, -1],
        [5, 10, 15, "All"]
      ],
      "iDisplayLength": 10,
      "language": {
        search: ""
      },
    });

    $('#leavetbl').DataTable({
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

    $('.datepicker').datepicker({
        enableOnReadonly: true,
        todayHighlight: true,
        autoclose: true,
        format: "dd/mm/yyyy"
    });
  });

</script>
@endsection