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
                <h4 class="page-title">Department</h4>
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
                            <div class="col-12 dt-responsive table-responsive">
                                <table id="tabledepartment" class="table">
                                    <thead>
                                        <tr class="text-center">
                                            <th>Department</th>
                                            <th>Department lead</th>
                                            <th>No. of Employee</th>
                                            <th>Sub Department</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="text-center">
                            <td>Finance</td>
                            <td></td>
                            <td>1 Employee[s]</td>
                            <td><button type="button" class="btn btn-outline-info" onclick="viewdep('Finance')">view</button></td>
                            <td>
                              <div class="dropdown">
                                <button type="button" class="btn btn-icons btn-rounded text-center" data-toggle="dropdown">
                                  <i class="ti-more-alt"></i>
                                </button>
                                <div class="dropdown-menu">
                                  <button class="btn btn-link" onclick="edtItem('df534020-fecd-49bd-b387-059670cc967a');"><i class="fa fa-pencil"></i></button>
                                  <button class="btn btn-link" onclick="delItem('df534020-fecd-49bd-b387-059670cc967a');"><i class="fa fa-trash-o"></i></button>
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
        <div class="modal-dialog" role="document" style="margin-top: 15px;margin-bottom: 0">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="formStaffLabel">New Department</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="saveDep form" method="post" action="#" id="tambah" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="department_title">Department Title</label>
                                    <input type="text" name="department_title" id="department_title" class="form-control form-control-lg" placeholder="Department Title">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" id="description" rows="2" name="description"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="department_lead">Department Lead</label>
                                    <input type="text" list="emp" name="department_lead" id="department_lead" class="form-control form-control-lg" placeholder="Department Lead">
                                    <datalist id="emp">
                                        <option value="Husein Bintang Wijaya">
                                        <option value="Yuda Budi Pratama">
                                        <option value="Yuda Budi Pratama">
                                    </datalist>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="parent_department">Parent Department</label>
                                    <input type="text" list="browsers" name="parent_department" id="parent_department" class="form-control form-control-lg" placeholder="Parent Department">
                                    <datalist id="browsers">
                                        <option value="Finance">
                                    </datalist>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" id="btnok">Create Department</button>
                        <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="showsubdep" tabindex="-1" role="dialog" aria-labelledby="formStaffLabel" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-lg" role="document" style="margin-top: 15px;margin-bottom: 0">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="">Sub Department</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table id="subdeptable" class="table">
                        <thead>
                            <tr class="text-center">
                                <th>Department</th>
                                <th>Description</th>
                                <th>Department lead</th>
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
                tambah_dep();
            }
            else if(atribut == "update"){
                var id_dep = $(this).data("id");
                update_dep(id_dep);
            }
        });
    });

    function tambah_dep(){
        var department_title = $("#department_title").val();
        var description = $("#description").val();
        var department_lead = $("#department_lead").val();
        var parent_department = $("#parent_department").val();
        if(department_title == "" ){
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
                    department_title : department_title,
                    description : description,
                    department_lead : department_lead,
                    parent_department : parent_department,
                }
            });
            $("#formAdd").modal("hide");
                swal({
                    title: "Congratulation!",
                    text: "Department has been added",
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
        $("#showsubdep").modal("hide");
        $.ajax({
            url : "",
            type: "POST",
            dataType: "JSON",
            data: {
                id : id
            },
            success : function(data){
                $("#formAdd").modal("show");
                $("#formStaffLabel").text("Edit Department");
                $("form").attr("data-id", data.iddepartment);
                $("form").attr("id",'update');
                $("#department_title").val(data.departmenttitle);
                $("#description").val(data.departmentdesc);
                $("#parent_department").val(data.parentdepartment);
                $("#department_lead").val(data.departmentlead);
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

    function update_dep(id_dep){
        var department_title = $("#department_title").val();
        var description = $("#description").val();
        var department_lead = $("#department_lead").val();
        var parent_department = $("#parent_department").val();
        if(department_title == ""  ){
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
                        id_dep : id_dep,
                        department_title : department_title,
                        description : description,
                        department_lead : department_lead,
                        parent_department : parent_department,
                    }
                });
                $("#formAdd").modal("hide");
                    swal({
                        title: "Congratulation!",
                        text: "Department has been updated",
                        type: "success",
                        icon: 'success',
                        buttonsStyling: false,
                        confirmButtonClass: "btn btn-success"
                    },function(){
                        location.reload();
                    });
        }
    }

    function viewdep(id){
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
                               '<td>'+data[i].departmenttitle+'</td>'+
                               '<td>'+data[i].departmentdesc+'</td>'+
                               '<td>'+data[i].departmentlead+'</td>'+
                               '<td><button class="btn btn-link" onclick="edtItem('+"'"+data[i].iddepartment+"'"+');"><i class="fa fa-pencil"></i></button> <button class="btn btn-link" onclick="delItem('+"'"+data[i].iddepartment+"'"+');"><i class="fa fa-trash-o"></i></button></td>'+
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
</script>
<script type="text/javascript">
  $('#tabledepartment').DataTable({
      "aLengthMenu": [
        [5, 10, 15, -1],
        [5, 10, 15, "All"]
      ],
      "iDisplayLength": 10,
      "language": {
        search: ""
      },
    });

    $('#subdeptable').DataTable({
        "aLengthMenu": [
          [5, 10, 15, -1],
          [5, 10, 15, "All"]
        ],
        "iDisplayLength": 10,
        "language": {
          search: ""
        },
      });
</script>
@endsection