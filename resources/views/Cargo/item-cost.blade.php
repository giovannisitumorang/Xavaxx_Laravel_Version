@extends('Layouts.master')
@section('images')
<img src="../../assets/images/test1.png" alt="profile image" class="img-xs rounded-circle">
@endsection
@section('image')
<img src="../../assets/images/test1.png" alt="profile image">
@endsection
@section('content')

<div class="main-panel">
        <div class="content-wrapper">
          <div class="row mb-4">
            <div class="col-12 d-flex align-items-center justify-content-between">
              <h4 class="page-title">Item Cost</h4>
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
            <div class="col-md-5">
              <div class="card">
                <div class="card-body">
                  <form class="saveDep form" method="post" action="#" id="tambah" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-md-12">
                      <label for="new_category" id="label_item">New Item Cost</label>
                      <div class="form-group">
                        <input type="text" name="item_cost" id="item_cost" class="form-control" placeholder="New Item Cost">
                      </div>
                    <input type="hidden" name="get_idcategory" id="get_idcategory" class="form-control">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <button type="submit" class="btn btn-success btn-fw" id="btnSubmit">Create New Item Cost</button>
                    </div>
                  </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-7">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-12 table-responsive">
                      <table id="tabledepartment" class="table">
                        <thead>
                          <tr class="text-center">
                            <th>Name</th>
                            <th>Update</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="text-center">
                            <td>chika haruka</td>
                            <td>2019-06-13</td>
                            <td>
                              <div class="dropdown">
                                <button type="button" class="btn btn-icons btn-rounded text-center" data-toggle="dropdown">
                                  <i class="ti-more-alt"></i>
                                </button>
                                <div class="dropdown-menu">
                                  <button class="btn btn-link" onclick="edtItem('67ed7f6d-1463-4fba-9f36-e54ff0549db5');"><i class="fa fa-pencil"></i></button>
                                  <button class="btn btn-link" onclick="delItem('67ed7f6d-1463-4fba-9f36-e54ff0549db5');"><i class="fa fa-trash-o"></i></button>
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
  $("#item_cost").focus();
});

function tambah_dep(){
  //alert('ok');
    var department_title = $("#item_cost").val();
      var new_category = $("#item_cost").val();
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
                    new_category : new_category
                }
        });
          swal({
              title: "Congratulation!",
              text: "Item Cost has been added",
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
            data: {id : id}
            });
      swal({
          title: 'Congratulation',
          text: 'Item Cost has been deleted',
          type: 'success',
          confirmButtonClass: "btn btn-success",
          buttonsStyling: false
      });
      location.reload();
  });
}

function edtItem(id){
  //alert(id);
  $("#showsubdep").modal("hide");
  $.ajax({
      url : "",
    type: "POST",
    dataType: "JSON",
    data: {
        id : id
    },
    success : function(data){
            $(".saveDep").attr("id","update");
            $("#get_idcategory").val(data.inilah.iditem);
            $("#item_cost").val(data.inilah.item);
            $("#item_cost").focus();
            $("#label_item").text("Update Item Cost");
            $("#btnSubmit").text("Update Item Cost");
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
  var department_title = $("#item_cost").val();
  var get_idcategory = $("#get_idcategory").val();
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
                department_title : department_title,
                get_idcategory : get_idcategory
            }
    });
      swal({
          title: "Congratulation!",
          text: "Item Cost has been updated",
          type: "success",
          icon: 'success',
          buttonsStyling: false,
          confirmButtonClass: "btn btn-success"
      },function(){
        location.reload();
      });
  }
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