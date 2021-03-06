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
              <h4 class="page-title">Job Order</h4>
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
                          <option value="Bandung">Bandung</option>
                          <option value="Denpasar">Denpasar</option>
                          <option value="Jakarta">Jakarta</option>
                          <option value="Medan">Medan</option>
                          <option value="Semarang">Semarang</option>
                          <option value="Surabaya">Surabaya</option>
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
                    <div class="form-group row mt-1 mb-1">
                      <label for="label_filter_by" class="col-sm-2 col-form-label">Filter by</label>
                      <div class="col-sm-2 mr-0">
                        <select name="filter_by" id="filter_by" class="single-select form-control form-control-sm" >
                          <option selected="selected" value="All">All</option>
                          <option value="Job No">Job No</option> 
                          <option value="Quo No">Quo No</option>
                          <option value="Customer">Customer</option>
                          <option value="Type">Type</option>
                          <option value="BL Number">BL Number</option>
                          <option value="MBL Number">MBL Number</option>
                          <option value="Loading">Loading</option>
                          <option value="Discharge">Discharge</option>
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
                  <div class="row">
                    <div class="col-12 table-responsive">
                      <table id="tableJoborder" class="table">
                        <thead>
                          <tr class="text-center">
                            <th>Date</th>
                            <th>Job Number</th>
                            <th>Customer Name</th>
                            <th>Type</th>
                            <th>BL / MBL Number </th>
                            <th>Loading</th>
                            <th>Discharge</th>
                            <th>Created</th>
                            <th>Tracking</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                              <td>13/03/2019</td>
                              <td><a>XV032019003</a></td>
                              <td></td>
                              <td>Export</td>
                              <td></td>
                              <td>NA</td>
                              <td>NA</td>
                              <td>demo</td>
                              <td>
                                <button class="btn btn-primary btn-sm">At Warehouse </button>
                              </td>
                              <td>
                                <div class="dropdown">
                                  <button type="button" class="btn btn-icons btn-rounded text-center" data-toggle="dropdown">
                                    <i class="ti-more-alt"></i>
                                  </button>
                                  <div class="dropdown-menu">
                                    <button class="btn btn-link" onclick="editItem('010/QUO-XV/03-2019');" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></button>
                                    <button class="btn btn-link" data-toggle="tooltip" title="Print" onclick="printItem('63bd43e0-4b93-4f9a-a0c6-aa52882002ff');"><i class="fa fa-print"></i></button>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr class="text-center">
                              <td>13/03/2019</td>
                              <td><a>XV032019004</a></td>
                              <td></td>
                              <td>Import</td>
                              <td></td>
                              <td>NA</td>
                              <td>NA</td>
                              <td>demo</td>
                              <td>
                                <button class="btn btn-primary btn-sm">At Warehouse </button>
                              </td>
                              <td>
                                <div class="dropdown">
                                  <button type="button" class="btn btn-icons btn-rounded text-center" data-toggle="dropdown">
                                    <i class="ti-more-alt"></i>
                                  </button>
                                  <div class="dropdown-menu">
                                    <button class="btn btn-link" onclick="editItem('013/QUO-XV/03-2019');" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></button>
                                    <button class="btn btn-link" data-toggle="tooltip" title="Print" onclick="printItem('b28cc909-6ae9-4dad-a404-0481d8cb0162');"><i class="fa fa-print"></i></button>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr class="text-center">
                              <td>03/12/2019</td>
                              <td><a>XV032019001</a></td>
                              <td></td>
                              <td>Export</td>
                              <td>ddsxfs</td>
                              <td>AARHUS (DENMARK)</td>
                              <td>ABU DHABI (UNITED ARAB EMIRATES)</td>
                              <td>demo</td>
                              <td>
                                <button class="btn btn-primary btn-sm">At Warehouse </button>
                              </td>
                              <td>
                                <div class="dropdown">
                                  <button type="button" class="btn btn-icons btn-rounded text-center" data-toggle="dropdown">
                                    <i class="ti-more-alt"></i>
                                  </button>
                                  <div class="dropdown-menu">
                                    <button class="btn btn-link" onclick="editItem('002/QUO-FW/02-2019');" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></button>
                                    <button class="btn btn-link" data-toggle="tooltip" title="Print" onclick="printItem('c1727be5-f92e-450c-a267-b1bba6d31da8');"><i class="fa fa-print"></i></button>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr class="text-center">
                              <td>10/12/2019</td>
                              <td><a>XV032019002</a></td>
                              <td></td>
                              <td>Export</td>
                              <td></td>
                              <td>AACHEN (GERMANY)</td>
                              <td>AACHEN (GERMANY)</td>
                              <td>demo</td>
                              <td>
                                <button class="btn btn-primary btn-sm">At Warehouse </button>
                              </td>
                              <td>
                                <div class="dropdown">
                                  <button type="button" class="btn btn-icons btn-rounded text-center" data-toggle="dropdown">
                                    <i class="ti-more-alt"></i>
                                  </button>
                                  <div class="dropdown-menu">
                                    <button class="btn btn-link" onclick="editItem('007/QUO-XV/03-2019');" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></button>
                                    <button class="btn btn-link" data-toggle="tooltip" title="Print" onclick="printItem('8a71a67f-dd37-4733-a57a-deaa2a3f41b1');"><i class="fa fa-print"></i></button>
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
  $(".single-select").select2({
    width: '100%',
  });
  $('#tableJoborder').DataTable({
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
</script>
<script type="text/javascript">
function delJob(id){
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

function editItem(num) {
    window.location.href=""+num;
}

function printItem(data){
    url = ""+data;
    Object.assign(document.createElement('a'), { target: '_blank', href: url}).click();
}


function saveJob(){
    var jo_number = $("#jo_number").val();
    var jo_date = $("#jo_date").val();
    var jo_type = $("#jo_type").val();
    var freight_type = $("#freight_type").val();
    var id_quotation = $("#id_quotation").val();
   
    if(jo_number == "" || jo_date == "" || jo_type == "" || freight_type == ""){
        swal({
            title: "Data ada yang kosong!",
                text: "Tolong isi lengkapi data..",
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
            jo_number : jo_number,
            jo_date : jo_date,
            jo_type : jo_type,
            freight_type : freight_type,
            id_quotation : id_quotation
        },
        error: (error) => {
            console.log(JSON.stringify(error));
        }
    });
      swal({
            title: "Congratulation!",
            text: "Job Order has been added",
            type: "success",
            icon: 'success',
            buttonsStyling: false,
            confirmButtonClass: "btn btn-success"
            },function(){
                location.reload();
            });
    }
}

function uptJob(id){
    // Val Job Order
    var jo_number = $("#jo_number").val();
    var jo_date = $("#jo_date").val();
    var jo_type = $("#jo_type").val();
    var freight_type = $("#freight_type").val();
    var id_quotation = $("#id_quotation").val();
    // Val Data
    var shipper = $("#shipper").val();
    var consignee = $("#consignee").val();
    var notify_party = $("#notify_party").val();
    var agent = $("#agent").val();
    var etd = $("#etd").val();
    var eta = $("#eta").val();
    var stuffing = $("#stuffing").val();
    var receive = $("#receive").val();
    var loading = $("#loading").val();
    var discharge = $("#discharge").val();
    var delivery = $("#delivery").val();
    var hs_code = $("#hs_code").val();
    var deskripsi = $("#descofgoods").val();
    // Val Sea
    var shipping_line = $("#shipping_line").val();
    var shipment_number = $("#shipment_number").val();
    var shipping_mark = $("#shipping_marks").val();
    var qty = $("#qty").val();
    var piece = $("#piece").val();
    var type = $("#type_sea").val();
    var bl_number = $("#bl_number").val();
    var mbl_number = $("#mbl_number").val();
    var voyage = $("#voyage").val();
    var vessel = $("#vessel").val();
    var issued_office = $("#issued_office").val();
    // Val Air
    var airlines = $("#airlines").val();
    var flight_number = $("#flight_number").val();
    var hawb_number = $("#hawb_number").val();
    var mawb_number = $("#mawb_number").val();
    var aita_code = $("#aita_code").val();

    
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
            // Job Order
            id_job_order : id,
            jo_number : jo_number,
            jo_date : jo_date,
            jo_type : jo_type,
            freight_type : freight_type,
            id_quotation : id_quotation,
            // Data
            shipper : shipper,
            consignee : consignee,
            notify_party : notify_party,
            agent : agent,
            etd : etd,
            eta : eta,
            stuffing : stuffing,
            receive : receive,
            loading : loading,
            discharge : discharge,
            delivery : delivery,
            hs_code : hs_code,
            deskripsi : deskripsi,
            // Data Sea
            shipping_line : shipping_line,
            shipment_number : shipment_number,
            shipping_mark : shipping_mark,
            qty : qty,
            piece : piece,
            type : type,
            bl_number : bl_number,
            mbl_number : mbl_number,
            voyage : voyage,
            vessel : vessel,
            issued_office : issued_office,
            // Data Air
            airlines : airlines,
            flight_number : flight_number,
            hawb_number : hawb_number,
            mawb_number : mawb_number,
            aita_code : aita_code,
        },
        error: (error) => {
            console.log(JSON.stringify(error));
        }
    });
        swal({
            title: "Congratulation!",
            text: "Job Order has been updated",
            type: "success",
            icon: 'success',
            buttonsStyling: false,
            confirmButtonClass: "btn btn-success"
        },function(){
            location.reload();
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
          //Prosess Penghapusan data
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

@endsection