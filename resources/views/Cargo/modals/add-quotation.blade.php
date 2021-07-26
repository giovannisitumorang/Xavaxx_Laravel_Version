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
              <h4 class="page-title">Add Quotation</h4>
              <div class="d-flex align-items-center">
                <div class="wrapper mr-4 d-none d-sm-block">
                  <p class="mb-0">Summary for
                    <b class="mb-0"><i id="bulan"></i> <i id="tahun"></i></b>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <form id="addQuotation">
            <div class="row">
              <div class="col-md-6 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title mb-3">Data Quotation</h4>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="label_quote_number">Quote Number</label>
                          <input type="text" class="form-control" name="quote_number" id="quote_number" readonly value="025/QUO-XV/07-2021">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="label_quote_date">Quote Date</label>
                          <input type="text" class="form-control datepicker" name="quote_date" id="quote_date" readonly value="22/07/2021">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="label_snipping">Shipping From</label>
                            <select name="branch_office" id="branch_office" class="form-control single-select">
                              <option value="" selected disabled> - Select Branch Office - </option>
                              <option value="bef48a16-ec1a-4b19-8de2-6e4aac180b99" >Test</option>
                              <option value="83f90c6a-ee56-49c0-b3ed-d6002df2c09b" >Apa itu</option>
                              <option value="44915aa2-bf06-436b-b22b-e5462eb2cabe" >aw</option>
                              <option value="2ff83abc-2143-4bdb-a969-47b9b3ccbc4e" >Medan 1</option>
                            </select>
                        </div>
                      </div>    
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="label_destination">Destination</label>
                            <select name="destination" id="destination" class="form-control single-select">
                              <option value="" selected disabled> - Select Destination - </option>
                              <option value="4dd1aecc-fa04-4c1b-98fd-530245b4007f" >Belawan (INDONESIA)</option>
                              <option value="12a7e7cb-aebd-4986-a30a-474894712b19" >Tanjung Periok (INDONESIA)</option>
                            </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="label_customer_name">Customer Name</label>
                          <select name="customer_name" id="customer_name" class="single-select form-control">
                            <option selected  disabled="disabled"> - Select Customer - </option>
                            <option  value="be8db22c-ed95-4b07-b4e2-28779da17dc2">WWE</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="label_subject">Subject</label>
                          <textarea type="text" class="form-control" name="subject" id="subject"></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="label_expires_date">Expires Date</label>
                          <input type="text" class="form-control datepicker" name="expires_date" id="expires_date" readonly value="22/07/2021">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="label_term_payment">Term of Payment</label>
                          <select name="term_payment" id="term_payment" class="form-control">
                            <option selected disabled="disabled"> - Term of Payment - </option>
                            <option  value=" "> </option>
                            <option  value="0">0 Days</option>
                            <option  value="7">7 Days</option>
                            <option  value="14">14 Days</option>
                            <option  value="30">30 Days</option>
                            <option  value="60">60 Days</option>
                            <option  value="90">90 Days</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title mb-3">Deskripsi</h4>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="label_header">Header</label>
                          <textarea type="text" class="form-control" name="desk_header" id="desk_header" rows="7" placeholder="Firstly, we would to say thanks for kind cooperation and attention here with we would like to have to overing Quatation for as follow:">Firstly, we would to say thanks for kind cooperation and attention here with we would like to have to overing Quatation for as follow:
                            </textarea>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="label_footer">Footer</label>
                          <textarea type="text" class="form-control" name="desk_footer" id="desk_footer" rows="7" placeholder="The requested term of payment are as follow:    
- 25% on contract date
- 50% on vessel arrival
- 25% after unstuffing/unpacking
        
Hope the above quotation will meet with your requirment and kindly please feel free contact us if any question.">The requested term of payment are as follow:    
- 25% on contract date
- 50% on vessel arrival
- 25% after unstuffing/unpacking
        
Hope the above quotation will meet with your requirment and kindly please feel free contact us if any question.
                            </textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
          <div class="row grid-margin collapse" id="tableBottom">
            <ul class="nav nav-tabs tab-solid tab-solid-danger ml-2 mb-0" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="btnItem" data-toggle="tab" role="tab" onclick="clickRate()">Rate Quote</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="btnCost" data-toggle="tab" role="tab" onclick="clickCost()">Estimation Cost</a>
              </li>
            </ul>
            <div class="col-md-12" style="display: block;" id="cardRate">
              <div class="card">
                <div class="card-body">
                  <div class="card-title row">
                    <div class="col-md-12 text-left">
                      <button class="btn btn-icons btn-inverse-success" data-toggle="modal" data-target="#formRate"><i class="fa fa-plus"></i></button>
                    </div>
                  </div>
                    <div class="row">
                      <div class="col-12 table-responsive">
                        <table id="tableItem" class="table table-bordered">
                          <thead>
                            <tr class="text-center">  
                              <th rowspan="2" width="3%" style="vertical-align: middle;">No</th>
                              <th rowspan="2" width="28%" style="vertical-align: middle;">Item Cost</th>          
                              <th rowspan="2" width="5%" style="vertical-align: middle;">Unit</th>
                              <th rowspan="2" width="5%" style="vertical-align: middle;">QTY</th>
                              <th rowspan="2" width="10%" style="vertical-align: middle;">Price</th>
                              <th colspan="2" width="14%">Amount</th>
                              <th rowspan="2" width="30%" style="vertical-align: middle;">Note</th>
                              <th rowspan="2" width="5%" style="vertical-align: middle;">Action</th>
                            </tr>
                            <tr class="text-center">  
                              <th width="7%">IDR</th>
                              <th width="7%">USD</th> 
                            </tr>
                          </thead>
                          <tbody>
                          </tbody>
                          <tfoot class="text-center">
                            <th colspan="4"></th>
                            <th style="font-weight: bold;">Total Quote :</th>
                            <th style="background: #00B65E">0</th>
                            <th style="background: #F88600">0</th>
                            <th colspan="2"></th>
                          </tfoot>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12" style="display: none;" id="cardCost">
                <div class="card">
                  <div class="card-body">
                    <div class="card-title row">
                      <div class="col-md-12 text-left">
                        <button class="btn btn-icons btn-inverse-success" id="buttonModal" data-toggle="modal" data-target="#formCost"><i class="fa fa-plus"></i></button>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12 table-responsive">
                        <table id="tableCost" class="table table-bordered">
                          <thead>
                            <tr class="text-center">  
                              <th rowspan="2" width="3%" style="vertical-align: middle;">No</th>
                              <th rowspan="2" width="28%" style="vertical-align: middle;">Item Cost</th>          
                              <th rowspan="2" width="5%" style="vertical-align: middle;">Unit</th>
                              <th rowspan="2" width="5%" style="vertical-align: middle;">QTY</th>
                              <th rowspan="2" width="10%" style="vertical-align: middle;">Price</th>
                              <th colspan="2" width="14%">Amount</th>
                              <th rowspan="2" width="30%" style="vertical-align: middle;">Vendor</th>
                              <th rowspan="2" width="5%" style="vertical-align: middle;">Action</th>
                            </tr>
                            <tr class="text-center">  
                              <th width="7%">IDR</th>
                              <th width="7%">USD</th> 
                            </tr>
                          </thead>
                          <tbody>
                          </tbody>
                          <tfoot class="text-center">
                            <tr>
                              <th colspan="4"></th>
                              <th style="font-weight: bold;">Estimation Cost :</th>
                              <th style="background: #00B65E">0</th>
                              <th style="background: #F88600">0</th>
                              <th colspan="2"></th>
                            </tr>
                            <tr>
                              <th colspan="4"></th>
                              <th style="font-weight: bold;">Total Quote :</th>
                              <th style="background: #00B65E">0</th>
                              <th style="background: #F88600">0</th>
                              <th colspan="2"></th>
                            </tr>
                            <tr>
                              <th colspan="4"></th>
                              <th style="font-weight: bold;">Estimation Profit :</th>
                              <th style="background: #00B65E">0</th>
                              <th style="background: #F88600">0</th>
                              <th colspan="2"></th>
                            </tr>
                          </tfoot>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <button type="button" onclick="saveQuo()" class="btn btn-success ml-2 float-right">Save</button>
            <a href="/cargo/quotation" class="ml-2"><button type="button" class="btn btn-light btn-close" data-dismiss="modal">Back</button></a>
        </div>     
        <div class="modal fade" id="formRate" tabindex="-1" role="dialog" aria-labelledby="formRateLabel">
          <div class="modal-dialog" role="document" style="margin-top: 15px;margin-bottom: 0">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="formRateLabel">Rate Quote</h5>
                <button type="button" class="close btn-close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form class="saveRateQ form" id="rate" action="saveratequote" method="post"> 
              <div class="modal-body">
                <div class="row">
                  <input type="hidden" name="id_quo" id="id_quo" value="">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="label_rate_item_cost">Item Cost</label>
                        <select name="rate_item_cost" id="rate_item_cost" class="form-control modal1_select">
                          <option selected="selected" disabled="disabled"> - Select Item Cost - </option>
                          <option value="chika haruka">chika haruka</option>
                          <option value="Ocen Freight">Ocen Freight</option>
                          <option value="Custom Clearance">Custom Clearance</option>
                          <option value="Handling">Handling</option>
                          <option value="Document Fee">Document Fee</option>
                          <option value="Storage/Port Charge">Storage/Port Charge</option>
                          <option value="Lift Off">Lift Off</option>
                          <option value="Lift On">Lift On</option>
                          <option value="Seal Fee">Seal Fee</option>
                          <option value="Trucking/Haulage">Trucking/Haulage</option>
                          <option value="Physical Check Commpdity">Physical Check Commpdity</option>
                          <option value="Export License/Under Name">Export License/Under Name</option>
                          <option value="Document ">Document </option>
                          <option value="Telex Release">Telex Release</option>
                          <option value="Chasis Charge">Chasis Charge</option>
                          <option value="Over Time">Over Time</option>
                          <option value="Police Escort (If any)">Police Escort (If any)</option>
                          <option value="Duty/Tax/Vat">Duty/Tax/Vat</option>
                          <option value="DTHC">DTHC</option>
                          <option value="LTHC">LTHC</option>
                          <option value="DG Surcharge">DG Surcharge</option>
                          <option value="Bank Charges">Bank Charges</option>
                          <option value="PEB / NPE">PEB / NPE</option>
                          <option value="Stuffing/Striffing">Stuffing/Striffing</option>
                          <option value="AES Export Filing">AES Export Filing</option>
                          <option value="Additional Custom Clearance">Additional Custom Clearance</option>
                          <option value="Handling Physical check Commodity">Handling Physical check Commodity</option>
                          <option value="Additional Physical check Commodity">Additional Physical check Commodity</option>
                          <option value="Import License/No Import Permit">Import License/No Import Permit</option>
                          <option value="Manifes Entry">Manifes Entry</option>
                        </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="label_rate_unit">Unit</label>
                      <select name="rate_unit" id="rate_unit" class="form-control modal1_select">
                        <option selected="selected" disabled="disabled"> - Select Unit - </option>
                        <option value="Shipment">Shipment</option>
                        <option value="Container">Container</option>
                        <option value="Document">Document</option>
                        <option value="Kgs">Kgs</option>
                        <option value="Trip/Container/20GP">Trip/Container/20GP</option>
                        <option value="Trip/Container/40'HC">Trip/Container/40'HC</option>
                        <option value="20Feet">20Feet</option>
                        <option value="40Feet/HC">40Feet/HC</option>
                        <option value=""></option>
                        <option value="Trip/Truck">Trip/Truck</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="label_rate_qty">QTY</label>
                      <input type="text" name="rate_qty" id="rate_qty" class="form-control qty">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="label_rate_price">Price</label>
                      <div class="input-group">
                        <input type="text" name="rate_price" id="rate_price" class="form-control col-md-10">
                        <select name="rate_prices" id="rate_prices" class="form-control input-group-addon col-md-2" style="background: #E3E6EA;">
                          <option value="IDR" selected="selected">IDR</option>
                          <option value="USD">USD</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="label_note">Note</label>
                      <textarea name="note" id="note" class="form-control"></textarea>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" onclick="saveRate()" id="btnSaveR" class="btn btn-success">Save</button>
                <button type="button" class="btn btn-light btn-close" data-dismiss="modal">Cancel</button>
              </div>
            </form>
            </div>
          </div>
        </div>

        <div class="modal fade" id="formCost" tabindex="-1" role="dialog" aria-labelledby="formCostLabel">
          <div class="modal-dialog" role="document" style="margin-top: 15px;margin-bottom: 0">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="formCostLabel">Estimation Cost</h5>
                <button type="button" class="close btn-close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form class="saveDep form">
              <div class="modal-body">
                <div class="row">
                  <input type="hidden" name="id_quo_est" id="id_quo_est" value="">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="label_est_item_cost">Item Cost</label>
                      <select name="est_item_cost" id="est_item_cost" class="form-control modal2_select">
                        <option selected="selected" disabled="disabled"> - Select Item Cost - </option>
                        <option value="chika haruka">chika haruka</option>
                        <option value="Ocen Freight">Ocen Freight</option>
                        <option value="Custom Clearance">Custom Clearance</option>
                        <option value="Handling">Handling</option>
                        <option value="Document Fee">Document Fee</option>
                        <option value="Storage/Port Charge">Storage/Port Charge</option>
                        <option value="Lift Off">Lift Off</option>
                        <option value="Lift On">Lift On</option>
                        <option value="Seal Fee">Seal Fee</option>
                        <option value="Trucking/Haulage">Trucking/Haulage</option>
                        <option value="Physical Check Commpdity">Physical Check Commpdity</option>
                        <option value="Export License/Under Name">Export License/Under Name</option>
                        <option value="Document ">Document </option>
                        <option value="Telex Release">Telex Release</option>
                        <option value="Chasis Charge">Chasis Charge</option>
                        <option value="Over Time">Over Time</option>
                        <option value="Police Escort (If any)">Police Escort (If any)</option>
                        <option value="Duty/Tax/Vat">Duty/Tax/Vat</option>
                        <option value="DTHC">DTHC</option>
                        <option value="LTHC">LTHC</option>
                        <option value="DG Surcharge">DG Surcharge</option>
                        <option value="Bank Charges">Bank Charges</option>
                        <option value="PEB / NPE">PEB / NPE</option>
                        <option value="Stuffing/Striffing">Stuffing/Striffing</option>
                        <option value="AES Export Filing">AES Export Filing</option>
                        <option value="Additional Custom Clearance">Additional Custom Clearance</option>
                        <option value="Handling Physical check Commodity">Handling Physical check Commodity</option>
                        <option value="Additional Physical check Commodity">Additional Physical check Commodity</option>
                        <option value="Import License/No Import Permit">Import License/No Import Permit</option>
                        <option value="Manifes Entry">Manifes Entry</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="label_est_unit">Unit</label>
                      <select name="est_unit" id="est_unit" class="form-control modal2_select">
                        <option selected="selected" disabled="disabled"> - Select Unit - </option>
                        <option value="Shipment">Shipment</option>
                        <option value="Container">Container</option>
                        <option value="Document">Document</option>
                        <option value="Kgs">Kgs</option>
                        <option value="Trip/Container/20GP">Trip/Container/20GP</option>
                        <option value="Trip/Container/40'HC">Trip/Container/40'HC</option>
                        <option value="20Feet">20Feet</option>
                        <option value="40Feet/HC">40Feet/HC</option>
                        <option value=""></option>
                        <option value="Trip/Truck">Trip/Truck</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="label_est_qty">QTY</label>
                      <input type="text" name="est_qty" id="est_qty" class="form-control qty">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="label_est_price">Price</label>
                      <div class="input-group">
                        <input type="text" name="est_price" id="est_price" class="form-control col-md-10">
                        <select name="est_prices" id="est_prices" class="form-control input-group-addon col-md-2" style="background: #E3E6EA;">
                          <option value="IDR" selected="selected">IDR</option>
                          <option value="USD">USD</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="label_vendor">Vendor</label>
                      <select name="vendor" id="vendor" class="form-control modal2_select">
                        <option value="CV. MAKMUR SENTOSA DAN ABADI">CV. MAKMUR SENTOSA DAN ABADI</option>
                        <option value="PT ASIA INDO JAWA">PT ASIA INDO JAWA</option>
                        <option value="PT BUMI ABADI JAYA">PT BUMI ABADI JAYA</option>
                        <option value="PT CEMERLANG SELALU">PT CEMERLANG SELALU</option>
                        <option value="PT GOLDEN JAYA SELALU">PT GOLDEN JAYA SELALU</option>
                        <option value="PT. ARCA INDONESIA">PT. ARCA INDONESIA</option>
                        <option value="PT. INTAN MUTIARA CEMERLANG">PT. INTAN MUTIARA CEMERLANG</option>
                        <option value="PT. KERAJAAN MAJAPAHIT">PT. KERAJAAN MAJAPAHIT</option>
                        <option value="PT. KURNIA JAYA RAYA">PT. KURNIA JAYA RAYA</option>
                        <option value="PT. MUTIARA YANG HILANG">PT. MUTIARA YANG HILANG</option>
                        <option value="PT. PACIFIC MARITIM INDO">PT. PACIFIC MARITIM INDO</option>
                        <option value="PT. PANTJA DUNIA ALAM">PT. PANTJA DUNIA ALAM</option>
                        <option value="PT. SHIPPING INDONESIA MAJU">PT. SHIPPING INDONESIA MAJU</option>
                        <option value="PT. TEGUH DUNIA ABADIPT. TEGUH DUNIA ABADI">PT. TEGUH DUNIA ABADI</option>
                        <option value="PT.PRATAMA EXPRESINDO LOGISTIK">PT.PRATAMA EXPRESINDO LOGISTIK</option>
                        <option value="PT.TRANS PRATAMA SEJAHTERA">PT.TRANS PRATAMA SEJAHTERA</option>

                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" onclick="saveEst()" id="btnSaveE" class="btn btn-success">Save</button>
                <button type="button" class="btn btn-light btn-close" data-dismiss="modal">Cancel</button>
              </div>
            </form>
            </div>
          </div>
        </div>

@endsection

@section('footer')

<script type="text/javascript">
  if ($(".datepicker").length) {
    $('.datepicker').datepicker({
      enableOnReadonly: true,
      todayHighlight: true,
      autoclose: true,
      format: "dd/mm/yyyy"
    });
  }
  $(".single-select").select2({
    width: '100%',
  $('#tableItem').DataTable({
      "aLengthMenu": [
        [5, 10, 15, -1],
        [5, 10, 15, "All"]
      ],
      "iDisplayLength": 10,
      "language": {
        search: ""
      },
      "bSort" : false,
    });

  $('#tableCost').DataTable({
      "aLengthMenu": [
        [5, 10, 15, -1],
        [5, 10, 15, "All"]
      ],
      "iDisplayLength": 10,
      "language": {
        search: ""
      },
      "bSort" : false,
    });
  $(document).ready(function() {
    $("#btnShow").collapse('toggle');
    $('.qty').inputmask({
      alias: 'currency',
      prefix: '',
    });
    $('#price').inputmask({
      alias: 'currency',
      prefix: '',
    });
  });

  function showTable(){
    $("#btnShow").collapse('toggle');
    $("#tableBottom").collapse('toggle');
    $("#btnSave").collapse('toggle');
  }
  function clickRate(){ 
    document.getElementById('cardRate').style.cssText = 'display: block';
    document.getElementById('cardCost').style.cssText = 'display: none';
  }
  function clickCost(){
    document.getElementById('cardRate').style.cssText = 'display: none';
    document.getElementById('cardCost').style.cssText = 'display: block';
  }
</script>
<script type="text/javascript">
function delItem(id){
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

@endsection