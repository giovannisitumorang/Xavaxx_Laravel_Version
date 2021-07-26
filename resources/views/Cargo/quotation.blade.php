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
              <h4 class="page-title">Quotation</h4>
              <div class="d-flex align-items-center">
                <div class="wrapper mr-4 d-none d-sm-block">
                  <p class="mb-0">Summary for
                    <b class="mb-0"><i id="bulan"></i> <i id="tahun"></i></b>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row grid-margin">
            <div class="col-md-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Filter Data</h4>
                  <form class="forms-sample">
                    <div class="form-group row mb-0">
                      <label for="label_branch_office" class="col-sm-2 col-form-label">Branch Office</label>
                      <div class="col-sm-5">
                        <select name="branch_office" id="branch_office" class="single-select form-control form-control-sm" >
                          <option selected="selected" disabled="disabled"> - Select Office - </option>
                          <option value="All">All</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row mt-1 mb-1">
                      <label for="label_date" class="col-sm-2 col-form-label">Date</label>
                      <div class="col-sm-2">
                        <input type="text" class="form-control datepicker" name="date_from" id="date_from" placeholder="ex. 01/01/2018">
                      </div>
                      <div class="col-sm-1 text-center">
                        <label for="label_to" class="col-form-label">to</label>
                      </div>
                      <div class="col-sm-2">
                        <input type="text" class="form-control datepicker" name="date_to" id="date_to" placeholder="ex. 31/12/2018">
                      </div>
                    </div>
                    <div class="form-group row mt-0 mb-0">
                      <label for="label_status" class="col-sm-2 col-form-label">Status</label>
                      <div class="col-sm-2">
                        <select name="status" id="status" class="single-select form-control form-control-sm" >
                          <option selected="selected" disabled="disabled"> - Select Status - </option>
                          <option value="All">All</option>
                          <option value="Executed">Executed</option>
                          <option value="In Progress">In Progress</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row mt-1 mb-1">
                      <label for="label_filter_by" class="col-sm-2 col-form-label">Filter by</label>
                      <div class="col-sm-2 mr-0">
                        <select name="filter_by" id="filter_by" class="single-select form-control form-control-sm" >
                          <option selected="selected" value="All">All</option>
                          <option value="Quo No">Quo No</option>
                          <option value="Customer">Customer</option>
                          <option value="Subject">Subject</option>
                        </select>
                      </div>
                      <div class="col-sm-3 ml-0">
                        <input type="text" class="form-control" name="filter" id="filter">
                      </div>
                      <button type="submit" class="btn"><i class="ti ti-search"></i>Filter</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="row grid-margin">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <div class="card-title row">
                    <div class="col-md-12 text-right">
                      <a href="/cargo/quotation/add-quotation" class="btn btn-icons btn-inverse-success" id="buttonModal"><i class="fa fa-plus"></i>
                      </a>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 table-responsive">
                      <table id="tableQuotation" class="table">
                        <thead>
                          <tr class="text-center">
                            <th>Date</th>
                            <th>Quo Number</th>
                            <th>Customer Name</th>
                            <th>Subject</th>
                            <th>Expired</th>
                            <th>Created</th>
                            <th>Status</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                              <td>01/08/2019</td>
                              <td><a>023/QUO-XV/08-2019</a></td>
                              <td>WWE</td>
                              <td>apa itu</td>
                              <td>01/08/2019</td>
                              <td>demo</td>
                              <td>
                                <button class="btn  btn-danger btn-sm">In Progress</button>
                              </td>
                              <td>
                                <div class="dropdown">
                                  <button type="button" class="btn btn-icons btn-rounded text-center" data-toggle="dropdown">
                                    <i class="ti-more-alt"></i>
                                  </button>
                                  <div class="dropdown-menu">
                                    <button class="btn btn-link" onclick="editItem('023/QUO-XV/08-2019');" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></button>
                                    <button class="btn btn-link" onclick="delItem('f2206cf7-5ff3-4561-b1e4-62a41ea28f99');" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i></button>
                                    <button class="btn btn-link" data-toggle="tooltip" title="Execute"><i class="fa fa-check-square-o"></i></button>
                                    <button class="btn btn-link" data-toggle="tooltip" title="Print" onclick="printItem('f2206cf7-5ff3-4561-b1e4-62a41ea28f99')"><i class="fa fa-print"></i></button>
                                    <button class="btn btn-link" data-toggle="tooltip" title="Create Job Order" onclick="createJob('023/QUO-XV/08-2019');"><i class="fa fa-plus-circle"></i></button>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr class="text-center">
                              <td>01/08/2019</td>
                              <td><a>022/QUO-XV/08-2019</a></td>
                              <td></td>
                              <td>u6rtuj</td>
                              <td>01/08/2019</td>
                              <td>demo</td>
                              <td>
                                <button class="btn  btn-danger btn-sm">In Progress</button>
                              </td>
                              <td>
                                <div class="dropdown">
                                  <button type="button" class="btn btn-icons btn-rounded text-center" data-toggle="dropdown">
                                    <i class="ti-more-alt"></i>
                                  </button>
                                  <div class="dropdown-menu">
                                    <button class="btn btn-link" onclick="editItem('022/QUO-XV/08-2019');" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></button>
                                    <button class="btn btn-link" onclick="delItem('abe181a6-c780-4c53-a705-fa97d8ceaedf');" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i></button>
                                    <button class="btn btn-link" data-toggle="tooltip" title="Execute"><i class="fa fa-check-square-o"></i></button>
                                    <button class="btn btn-link" data-toggle="tooltip" title="Print" onclick="printItem('abe181a6-c780-4c53-a705-fa97d8ceaedf')"><i class="fa fa-print"></i></button>
                                    <button class="btn btn-link" data-toggle="tooltip" title="Create Job Order" onclick="createJob('022/QUO-XV/08-2019');"><i class="fa fa-plus-circle"></i></button>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr class="text-center">
                              <td>13/03/2019</td>
                              <td><a>013/QUO-XV/03-2019</a></td>
                              <td></td>
                              <td></td>
                              <td>29/03/2019</td>
                              <td>demo</td>
                              <td>
                                <button class="btn  btn-danger btn-sm">In Progress</button>
                              </td>
                              <td>
                                <div class="dropdown">
                                  <button type="button" class="btn btn-icons btn-rounded text-center" data-toggle="dropdown">
                                    <i class="ti-more-alt"></i>
                                  </button>
                                  <div class="dropdown-menu">
                                    <button class="btn btn-link" onclick="editItem('013/QUO-XV/03-2019');" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></button>
                                    <button class="btn btn-link" onclick="delItem('f0dbe15c-1280-4f60-876e-71e39731ed91');" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i></button>
                                    <button class="btn btn-link" data-toggle="tooltip" title="Execute"><i class="fa fa-check-square-o"></i></button>
                                    <button class="btn btn-link" data-toggle="tooltip" title="Print" onclick="printItem('f0dbe15c-1280-4f60-876e-71e39731ed91')"><i class="fa fa-print"></i></button>
                                    <button class="btn btn-link" data-toggle="tooltip" title="Create Job Order" onclick="createJob('013/QUO-XV/03-2019');"><i class="fa fa-plus-circle"></i></button>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr class="text-center">
                              <td>15/03/2019</td>
                              <td><a>010/QUO-XV/03-2019</a></td>
                              <td></td>
                              <td>Pembayaran</td>
                              <td>29/03/2019</td>
                              <td>demo</td>
                              <td>
                                <button class="btn  btn-danger btn-sm">In Progress</button>
                              </td>
                              <td>
                                <div class="dropdown">
                                  <button type="button" class="btn btn-icons btn-rounded text-center" data-toggle="dropdown">
                                    <i class="ti-more-alt"></i>
                                  </button>
                                  <div class="dropdown-menu">
                                    <button class="btn btn-link" onclick="editItem('010/QUO-XV/03-2019');" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></button>
                                    <button class="btn btn-link" onclick="delItem('7ed9e680-5642-4d28-af1c-3734ba53c5bf');" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i></button>
                                    <button class="btn btn-link" data-toggle="tooltip" title="Execute"><i class="fa fa-check-square-o"></i></button>
                                    <button class="btn btn-link" data-toggle="tooltip" title="Print" onclick="printItem('7ed9e680-5642-4d28-af1c-3734ba53c5bf')"><i class="fa fa-print"></i></button>
                                    <button class="btn btn-link" data-toggle="tooltip" title="Create Job Order" onclick="createJob('010/QUO-XV/03-2019');"><i class="fa fa-plus-circle"></i></button>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr class="text-center">
                              <td>12/03/2019</td>
                              <td><a>007/QUO-XV/03-2019</a></td>
                              <td></td>
                              <td>asd</td>
                              <td>26/03/2019</td>
                              <td>demo</td>
                              <td>
                                <button class="btn  btn-danger btn-sm">In Progress</button>
                              </td>
                              <td>
                                <div class="dropdown">
                                  <button type="button" class="btn btn-icons btn-rounded text-center" data-toggle="dropdown">
                                    <i class="ti-more-alt"></i>
                                  </button>
                                  <div class="dropdown-menu">
                                    <button class="btn btn-link" onclick="editItem('007/QUO-XV/03-2019');" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></button>
                                    <button class="btn btn-link" onclick="delItem('e8f1056b-6b71-4ac7-8e58-0f998a1775f9');" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i></button>
                                    <button class="btn btn-link" data-toggle="tooltip" title="Execute"><i class="fa fa-check-square-o"></i></button>
                                    <button class="btn btn-link" data-toggle="tooltip" title="Print" onclick="printItem('e8f1056b-6b71-4ac7-8e58-0f998a1775f9')"><i class="fa fa-print"></i></button>
                                    <button class="btn btn-link" data-toggle="tooltip" title="Create Job Order" onclick="createJob('007/QUO-XV/03-2019');"><i class="fa fa-plus-circle"></i></button>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr class="text-center">
                              <td>21/03/2019</td>
                              <td><a>004/QUO-XV/03-2019</a></td>
                              <td></td>
                              <td></td>
                              <td>25/03/2019</td>
                              <td>demo</td>
                              <td>
                                <button class="btn  btn-danger btn-sm">In Progress</button>
                              </td>
                              <td>
                                <div class="dropdown">
                                  <button type="button" class="btn btn-icons btn-rounded text-center" data-toggle="dropdown">
                                    <i class="ti-more-alt"></i>
                                  </button>
                                  <div class="dropdown-menu">
                                    <button class="btn btn-link" onclick="editItem('004/QUO-XV/03-2019');" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></button>
                                    <button class="btn btn-link" onclick="delItem('ab1c56e9-5215-4a73-acbd-72d1ac788aad');" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i></button>
                                    <button class="btn btn-link" data-toggle="tooltip" title="Execute"><i class="fa fa-check-square-o"></i></button>
                                    <button class="btn btn-link" data-toggle="tooltip" title="Print" onclick="printItem('ab1c56e9-5215-4a73-acbd-72d1ac788aad')"><i class="fa fa-print"></i></button>
                                    <button class="btn btn-link" data-toggle="tooltip" title="Create Job Order" onclick="createJob('004/QUO-XV/03-2019');"><i class="fa fa-plus-circle"></i></button>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr class="text-center">
                              <td>22/02/2019</td>
                              <td><a>002/QUO-FW/02-2019</a></td>
                              <td></td>
                              <td>Warbyazah</td>
                              <td>01/03/2019</td>
                              <td>demo</td>
                              <td>
                                <button class="btn  btn-danger btn-sm">In Progress</button>
                              </td>
                              <td>
                                <div class="dropdown">
                                  <button type="button" class="btn btn-icons btn-rounded text-center" data-toggle="dropdown">
                                    <i class="ti-more-alt"></i>
                                  </button>
                                  <div class="dropdown-menu">
                                    <button class="btn btn-link" onclick="editItem('002/QUO-FW/02-2019');" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></button>
                                    <button class="btn btn-link" onclick="delItem('05b82c52-8711-4899-97e4-993a67194dc9');" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o"></i></button>
                                    <button class="btn btn-link" data-toggle="tooltip" title="Execute"><i class="fa fa-check-square-o"></i></button>
                                    <button class="btn btn-link" data-toggle="tooltip" title="Print" onclick="printItem('05b82c52-8711-4899-97e4-993a67194dc9')"><i class="fa fa-print"></i></button>
                                    <button class="btn btn-link" data-toggle="tooltip" title="Create Job Order" onclick="createJob('002/QUO-FW/02-2019');"><i class="fa fa-plus-circle"></i></button>
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

function printItem(id){
    url = ""+id;
    Object.assign(document.createElement('a'), { target: '_blank', href: url}).click();
}

function editItem(num) {
    window.location.href=""+num;
}

function createJob(num) {
    window.location.href=""+num;
}

function saveQuo(){
    var quote_number = $("#quote_number").val();
    var quote_date = $("#quote_date").val();
    var shipping_from = $("#branch_office").val();
    var destination = $("#destination").val();
    var customer_name = $("#customer_name").val();
    var subject = $("#subject").val();
    var expires_date = $("#expires_date").val();
    var term_payment = $("#term_payment").val();
    var desk_header = $("#desk_header").val();
    var desk_footer = $("#desk_footer").val();
    if(customer_name == ""){
        swal({
            title: "Data ada yang kosong!",
                text: "Tolong isi customer name.",
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
            quote_number : quote_number,
            quote_date : quote_date,
            shipping_from : shipping_from,
            destination : destination,
            customer_name : customer_name,
            subject : subject,
            expires_date : expires_date,
            term_payment : term_payment,
            desk_header : desk_header,
            desk_footer : desk_footer
        }
    });
      swal({
            title: "Congratulation!",
            text: "Quotation has been added",
            type: "success",
            icon: 'success',
            buttonsStyling: false,
            confirmButtonClass: "btn btn-success"
        },function(){
            location.href=""+quote_number;
        });
    }
}

function upQuo(id){
    var quote_number = $("#quote_number").val();
    var quote_date = $("#quote_date").val();
    var shipping_from = $("#branch_office").val();
    var destination = $("#destination").val();
    var customer_name = $("#customer_name").val();
    var subject = $("#subject").val();
    var expires_date = $("#expires_date").val();
    var term_payment = $("#term_payment").val();
    var desk_header = $("#desk_header").val();
    var desk_footer = $("#desk_footer").val();
    if(customer_name == ""){
        swal({
            title: "Data ada yang kosong!",
                text: "Tolong isi customer name.",
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
            id_quotation : id,
            quote_number : quote_number,
            quote_date : quote_date,
            shipping_from : shipping_from,
            destination : destination,
            customer_name : customer_name,
            subject : subject,
            expires_date : expires_date,
            term_payment : term_payment,
            desk_header : desk_header,
            desk_footer : desk_footer
        },
        error: (error) => {
            console.log(JSON.stringify(error));
        }
    });
        swal({
            title: "Congratulation!",
            text: "Quotation has been updated",
            type: "success",
            icon: 'success',
            buttonsStyling: false,
            confirmButtonClass: "btn btn-success"
        },function(){
            location.href=""+quote_number;
        });
    }
}

function saveRate(){
    var id_quo = $("#id_quo").val();
    var rate_item_cost = $("#rate_item_cost").val();
    var rate_unit = $("#rate_unit").val();
    var rate_qty = $("#rate_qty").val();
    var rate_price = $("#rate_price").val();
    var rate_prices = $("#rate_prices").val();
    var note = $("#note").val();
    if(rate_item_cost == ""||rate_unit == ""||rate_qty == ""||rate_price == "") {
        swal({
            title: "Data ada yang kosong!",
                text: "Tolong isi lengkapi data.",
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
            id_quo : id_quo,
            rate_item_cost : rate_item_cost,
            rate_unit : rate_unit,
            rate_qty : rate_qty,
            rate_price : rate_price,
            rate_prices : rate_prices,
            note : note,
        }
    });
    $("#formRate").modal("hide");
        swal({
            title: "Congratulation!",
            text: "Rate Quote has been added",
            type: "success",
            icon: 'success',
            buttonsStyling: false,
            confirmButtonClass: "btn btn-success"
        },function(){
            location.reload();
        });
    }
}

function delRate(id){
  //alert(id);
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

function editRate(id){
  $.ajax({
      url : "",
    type: "POST",
    dataType: "JSON",
    data: {
        id : id
    },
    success : function(data){
            $("#formRate").modal("show");
            $("#formRateLabel").text("Edit Rate Quote");
            $("#rate_item_cost").val(data.item_cost);
            $("#rate_unit").val(data.unit);
            $("#rate_qty").val(data.qty);
            $("#rate_price").val(data.price);
            $("#note").val(data.note);
            $("#btnSaveR").attr('onclick',"uptRate('"+id+"')");
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

function uptRate(id){
    var id_quo = $("#id_quo").val();
    var rate_item_cost = $("#rate_item_cost").val();
    var rate_unit = $("#rate_unit").val();
    var rate_qty = $("#rate_qty").val();
    var rate_price = $("#rate_price").val();
    var rate_prices = $("#rate_prices").val();
    var note = $("#note").val();
    if(rate_item_cost == ""||rate_unit == ""||rate_qty == ""||rate_price == "") {
        swal({
            title: "Data ada yang kosong!",
                text: "Tolong isi lengkapi data.",
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
            id_rate_quote : id,
            id_quo : id_quo,
            rate_item_cost : rate_item_cost,
            rate_unit : rate_unit,
            rate_qty : rate_qty,
            rate_price : rate_price,
            rate_prices : rate_prices,
            note : note,
        }
    });
    $("#formRate").modal("hide");
        swal({
            title: "Congratulation!",
            text: "Rate Quote has been added",
            type: "success",
            icon: 'success',
            buttonsStyling: false,
            confirmButtonClass: "btn btn-success"
        },function(){
            location.reload();
        });
    }
}

function saveEst(){
    var id_quo_est = $("#id_quo_est").val();
    var est_item_cost = $("#est_item_cost").val();
    var est_unit = $("#est_unit").val();
    var est_qty = $("#est_qty").val();
    var est_price = $("#est_price").val();
    var est_prices = $("#est_prices").val();
    var vendor = $("#vendor").val();
    if(est_item_cost == ""||est_unit == ""||est_qty == ""||est_price == "") {
        swal({
            title: "Data ada yang kosong!",
                text: "Tolong isi lengkapi data.",
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
            id_quo_est : id_quo_est,
            est_item_cost : est_item_cost,
            est_unit : est_unit,
            est_qty : est_qty,
            est_price : est_price,
            est_prices : est_prices,
            vendor : vendor,
        },
        error: (error) => {
            console.log(JSON.stringify(error));
        }
    });
    $("#formRate").modal("hide");
        swal({
            title: "Congratulation!",
            text: "Estimation Cost has been added",
            type: "success",
            icon: 'success',
            buttonsStyling: false,
            confirmButtonClass: "btn btn-success"
        },function(){
            location.reload();
        });
    }
}

function delEst(id){
  //alert(id);
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

function editEst(id){
  $.ajax({
      url : "",
    type: "POST",
    dataType: "JSON",
    data: {
        id : id
    },
    success : function(data){
            $("#formCost").modal("show");
            $("#formRateLabel").text("Edit Rate Quote");
            $("#est_item_cost").val(data.item_cost);
            $("#est_unit").val(data.unit);
            $("#est_qty").val(data.qty);
            $("#est_price").val(data.price);
            $("#vendor").val(data.vendor);
            $("#btnSaveE").attr('onclick',"uptEst('"+id+"')");
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

function uptEst(id){
    var id_quo_est = $("#id_quo_est").val();
    var est_item_cost = $("#est_item_cost").val();
    var est_unit = $("#est_unit").val();
    var est_qty = $("#est_qty").val();
    var est_price = $("#est_price").val();
    var est_prices = $("#est_prices").val();
    var vendor = $("#vendor").val();
    if(est_item_cost == ""||est_unit == ""||est_qty == ""||est_price == "") {
        swal({
            title: "Data ada yang kosong!",
                text: "Tolong isi lengkapi data.",
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
            id_estimation : id,
            id_quo_est : id_quo_est,
            est_item_cost : est_item_cost,
            est_unit : est_unit,
            est_qty : est_qty,
            est_price : est_price,
            est_prices : est_prices,
            vendor : vendor,
        }
    });
    $("#formCost").modal("hide");
        swal({
            title: "Congratulation!",
            text: "Estimation Cost has been updated",
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
  $(".single-select").select2({
    width: '100%',
  });
  $('#tableQuotation').DataTable({
      "aLengthMenu": [
        [5, 10, 15, -1],
        [5, 10, 15, "All"]
      ],
      "iDisplayLength": 5,
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
</script>

@endsection