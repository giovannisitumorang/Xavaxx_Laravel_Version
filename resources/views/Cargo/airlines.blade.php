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
              <h4 class="page-title">Airlines</h4>
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
                    <h5 id="label_airlines">Add New Airlines</h5>
                    <br>
                      <label for="airlines"><small>Airlines</small></label>
                      <div class="form-group">
                        <input type="text" name="airlines" id="airlines" class="form-control" placeholder="Airlines">
                      </div>
                    </div>                    
                  </div>                  
                  <div class="row">
                    <div class="col-md-12">                    
                      <label for="deskripsi"><small>Description</small></label>
                      <div class="form-group">
                        <input type="text" name="deskripsi" id="deskripsi" class="form-control" placeholder="Description">
                      </div>
                      <input type="hidden" name="id_airlines" id="id_airlines" class="form-control">
                    </div>                    
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <button type="submit" class="btn btn-success btn-fw" id="btnSubmit">Create Airlines</button>
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
                            <th>No</th>
                            <th>Airlines</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="text-center">
                            <td>1</td>
                            <td>Garuda</td>
                            <td>
                              <div class="dropdown">
                                <button type="button" class="btn btn-icons btn-rounded text-center" data-toggle="dropdown">
                                  <i class="ti-more-alt"></i>
                                </button>
                                <div class="dropdown-menu">
                                  <button class="btn btn-link" onclick="edtItem('38080e65-3a13-4a18-9019-5c9fd04cfa82');"><i class="fa fa-pencil"></i></button>
                                  <button class="btn btn-link" onclick="delItem('38080e65-3a13-4a18-9019-5c9fd04cfa82');"><i class="fa fa-trash-o"></i></button>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr class="text-center">
                            <td>2</td>
                            <td>Lion Air</td>
                            <td>
                              <div class="dropdown">
                                <button type="button" class="btn btn-icons btn-rounded text-center" data-toggle="dropdown">
                                  <i class="ti-more-alt"></i>
                                </button>
                                <div class="dropdown-menu">
                                  <button class="btn btn-link" onclick="edtItem('f21684af-3c1e-4622-91f0-ec1672d812e3');"><i class="fa fa-pencil"></i></button>
                                  <button class="btn btn-link" onclick="delItem('f21684af-3c1e-4622-91f0-ec1672d812e3');"><i class="fa fa-trash-o"></i></button>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr class="text-center">
                            <td>3</td>
                            <td>Batik Air</td>
                            <td>
                              <div class="dropdown">
                                <button type="button" class="btn btn-icons btn-rounded text-center" data-toggle="dropdown">
                                  <i class="ti-more-alt"></i>
                                </button>
                                <div class="dropdown-menu">
                                  <button class="btn btn-link" onclick="edtItem('e0fd5bce-11d0-42ca-8213-4de2ef819243');"><i class="fa fa-pencil"></i></button>
                                  <button class="btn btn-link" onclick="delItem('e0fd5bce-11d0-42ca-8213-4de2ef819243');"><i class="fa fa-trash-o"></i></button>
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
  $("#airlines").focus();
});

function tambah_dep(){
      var airlines = $("#airlines").val();
      var deskripsi = $("#deskripsi").val();
      if(airlines == "" ){
          swal({
            title: "Data ada yang kosong!",
              text: "Tolong lengkapi data...",
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
                    airlines : airlines,
                    deskripsi : deskripsi
                }
        });
          swal({
              title: "Congratulation!",
              text: "Airlines has been added",
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
          text: 'Airlines has been deleted',
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
            $(".saveDep").attr("id","update");
            $("#id_airlines").val(data.inilah.id_airlines);
            $("#airlines").focus();
            $("#airlines").val(data.inilah.airlines);
            $("#label_airlines").text("Update Airlines");
            $("#btnSubmit").text("Update Airlines");
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
  var airlines = $("#airlines").val();
  var id_airlines = $("#id_airlines").val();
  var deskripsi = $("deskripsi").val();
  if(airlines == ""  ){
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
                airlines : airlines,
                id_airlines : id_airlines,
                deskripsi : deskripsi
            }
    });
      swal({
          title: "Congratulation!",
          text: "Airlines has been updated",
          type: "success",
          icon: 'success',
          buttonsStyling: false,
          confirmButtonClass: "btn btn-success"
      },function(){
        location.reload();
      })
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