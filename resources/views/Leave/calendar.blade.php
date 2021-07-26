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
              <h4 class="page-title">Leave Calendar</h4>
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
              <div class="card">
                <div class="card-body">
                  <form class="saveCom form" method="get" action="/leave/calendar" id="tambah" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-md-3">
                      <select name="department" id="department" class="single-select form-control" >
                        <option selected="selected" disabled="disabled"> - Select Department - </option>
                        <option value="df534020-fecd-49bd-b387-059670cc967a">Finance</option>
                      </select>
                    </div>
                    <div class="col-md-3">
                      <select name="designation" id="designation" class="single-select form-control" >
                        <option selected="selected" disabled="disabled"> - Select Designation - </option>
                        <option value="621ff322-b1c9-4a95-9fbe-bb1debbd4a98">CFO</option>
                      </select>                      
                    </div>
                    <div class="col-md-1">
                      <button class="btn btn-inverse-success" type="submit">
                        <i class="ti-filter"></i> Filter
                      </button>
                    </div>
                  </div>
                  </form>
                  <div class="row">
                    <div class="col-md-12">
                      <div id="calendar" class="calendar"></div>
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

  (function($) {
  'use strict';
  $(function() {
    var style = getComputedStyle(document.body);
    if ($('#calendar').length) {
      $('#calendar').fullCalendar({
        header: {
          left: 'prev,next today',
          center: 'title',
          right: 'month,basicWeek,basicDay'
        },
        defaultDate: '2021-07-11',
        navLinks: true,
        editable: true,
        eventLimit: true,
        events: [
        ]
      })
    }
  });
})(jQuery);
</script>
@endsection