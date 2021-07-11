<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>HRIS System</title>
  <link rel="stylesheet" href="../assets/vendors/iconfonts/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css" integrity="sha512-f8gN/IhfI+0E9Fc/LKtjVq4ywfhYAVeMGKsECzDUHcFJ5teVwvKTqizm+5a84FINhfrgdvjX8hEJbem2io1iTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="../assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="../assets/vendors/iconfonts/simple-line-icon/css/simple-line-icons.css">
  <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.addons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
  <link rel="stylesheet" href="path/to/line-awesome/css/line-awesome-font-awesome.min.css">
  <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/32f2c595ba.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="shortcut icon" href="../assets/images/favicon.png" />
</head>
<style type="text/css">
  .modal-content, .content-wrapper{
    background: #F9FBFC;
  }
  .dataTables_wrapper .dataTable .btn-icons{
    padding: 0.1rem 0.1rem;
  }
  .fa-pencil{
    color: #00DA90;
  }
  .fa-trash-o{
    color: #FB0000;
  }
  .btn-link{
    width: 45px;
  }
  .dropdown-menu {
    min-width: 6rem;
  }
  a:hover{
    text-decoration: none;
  }
</style>

<body style="background: #F2F6F9;" class="sidebar-fixed" id="body_id">
    
    <div class="container-scroller" id="wrapper">
        @include('Layouts.Include.navbar')

        <div class="container-fluid page-body-wrapper">
        @include('Layouts.Include.sidebar')
        

        @yield('content')

            <footer class="footer">
                <div class="container-fluid clearfix">
                    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018
                    <a href="https://n56ht.com/" target="_blank">InSight MarkComm</a>. All rights reserved.</span>
                </div>
            </footer>
        
    </div>
  <script type="text/javascript">
    function sidebar_icon(){
      if ($('.sidebar-fixed').hasClass('sidebar-icon-only')) {
        $('.sidebar-fixed').removeClass('sidebar-icon-only')
      }else{
        $('.sidebar-fixed').addClass('sidebar-icon-only')
      }
    }
  </script>
  <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
  <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="../assets/vendors/js/vendor.bundle.addons.js"></script>
  <script src="../assets/js/off-canvas.js"></script>
  <script src="../assets/js/hoverable-collapse.js"></script>
  <script src="../assets/js/misc.js"></script>
  <script src="../assets/js/settings.js"></script>
  <script src="../assets/js/todolist.js"></script>
  <script src="../assets/js/avgrund.js"></script>
  <script src="../assets/js/bt-maxLength.js"></script>
  <script src="../assets/js/c3.js"></script>
  <script src="../assets/js/chart.js"></script>
  <script src="../assets/js/chartist.js"></script>
  <script src="../assets/js/clipboard.js"></script>
  <script src="../assets/js/codeEditor.js"></script>
  <script src="../assets/js/context-menu.js"></script>
  <script src="../assets/js/data-table.js"></script>
  <script src="../assets/js/db.js"></script>
  <script src="../assets/js/dekstop-notification.js"></script>
  <script src="../assets/js/dragula.js"></script>
  <script src="../assets/js/dropity.js"></script>
  <script src="../assets/js/dropzone.js"></script>
  <script src="../assets/js/editorDemo.js"></script>
  <script src="../assets/js/file-upload.js"></script>
  <script src="../assets/js/float-chart.js"></script>
  <script src="../assets/js/form-addons.js"></script>
  <script src="../assets/js/form-repeater.js"></script>
  <script src="../assets/js/form-validation.js"></script>
  <script src="../assets/js/formpickers.js"></script>
  <script src="../assets/js/google-charts.js"></script>
  <script src="../assets/js/google-maps.js"></script>
  <script src="../assets/js/horizontal-menu.js"></script>
  <script src="../assets/js/iCheck.js"></script>
  <script src="../assets/js/ion-range-slider.js"></script>
  <script src="../assets/js/jq.tablesort.js"></script>
  <script src="../assets/js/jquery-file-upload.js"></script>
  <script src="../assets/js/select2.js"></script>
  <script src="../assets/js/morris.js"></script>
  <script src="../assets/js/js-grid.js"></script>
  <script src="../assets/js/just-gage.js"></script>
  <script src="../assets/js/light-gallery.js"></script>
  <script src="../assets/js/mapeal.js"></script>
  <script src="../assets/js/mapeal_example_2.js"></script>
  <script src="../assets/js/mapeal_example_3.js"></script>
  <script src="../assets/js/maps.js"></script>
  <script src="../assets/js/misc.js"></script>
  <script src="../assets/js/modal-demo.js"></script>
  <script src="../assets/js/morris.js"></script>
  <script src="../assets/js/no-ui-slider.js"></script>
  <script src="../assets/js/owl-carousel.js"></script>
  <script src="../assets/js/paginate.js"></script>
  <script src="../assets/js/popover.js"></script>
  <script src="../assets/js/progress-bar.js"></script>
  <script src="../assets/js/sparkline.js"></script>
  <script src="../assets/js/tablesorter.js"></script>
  <script src="../assets/js/tabs.js"></script>
  <script src="../assets/js/tight-grid.js"></script>
  <script src="../assets/js/toastDemo.js"></script>
  <script src="../assets/js/tooltips.js"></script>
  <script src="../assets/js/typehead.js"></script>
  <script src="../assets/js/wizard.js"></script>
  <script src="../assets/js/x-editable.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcode-generator/1.4.4/qrcode.js" integrity="sha512-6WOG76AXc8rlgtGYLGhDg7lIzZG2Cc+VrSamvgpeBYgxauGuoMua6uKll4OsZ0JvVSt12lRX/9uCmXzkt3/wfg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/downloadjs/1.4.8/download.js" integrity="sha512-mxCAjvjp0jvMdGRIEvAHOCGL6BOucqWpTBXwchElsPKNw7BEegHviDHPnYrOrzgzBiw3GD/Q1ibpA5nlFPYDMw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js" integrity="sha512-MqEDqB7me8klOYxXXQlB4LaNf9V9S0+sG1i8LtPOYmHqICuEZ9ZLbyV3qIfADg2UJcLyCm4fawNiFvnYbcBJ1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script type="text/javascript">
  function sidebar_icon(){
    if ($('.sidebar-fixed').hasClass('sidebar-icon-only')) {
      $('.sidebar-fixed').removeClass('sidebar-icon-only')
    }else{
      $('.sidebar-fixed').addClass('sidebar-icon-only')
    }
  }
</script>
<script type="text/javascript">
  var d = new Date();
  var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
  document.getElementById("bulan").innerHTML = months[d.getMonth()];
  document.getElementById("tahun").innerHTML = d.getFullYear();
  $('.dropify').dropify();
</script>
@yield('footer')

</body>

<script type="text/javascript">
    function changepass(){
    $('#formpass').modal('show');
    }

    function changeuser(){
      $('#formuser').modal('show');
    }

    $(document).ready(function(){
      $(".changepass").submit(function(e){
        e.preventDefault();
        var atribut = $(this).attr("id");
        if(atribut == "tambah"){
          ubahpass();
        }
      });

      $(".changeuser").submit(function(e){
        e.preventDefault();
        var atribut = $(this).attr("id");
        if(atribut == "tambah"){
          ubahuser();
        }
      });
    });

    function ubahpass(){
        var old_pass = $("#old_pass").val();
        var new_pass = $("#new_pass").val();
        if(old_pass == "" || new_pass==""){
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
              url : "/getPass",
            type: "POST",
            dataType: "JSON",
            data: {
                old_pass :old_pass,
                new_pass :new_pass,
            },
            success : function(data){
                if(data == 0){
                  swal({
                        title: 'Gagal!',
                        text: 'Password tidak ditemukan',
                        type: 'error',
                        confirmButtonClass: "btn btn-danger",
                        buttonsStyling: false
                    }).catch(swal.noop)
                }else{
                  $.ajax({
                    url : "",
                          type: "POST",
                          dataType: "JSON",
                          data: {
                            old_pass :old_pass,
                            new_pass :new_pass,
                          }
                  });
                  $("#formpass").modal("hide");
                    swal({
                        title: "Congratulation!",
                        text: "Password has been changed. Please login with new password",
                        type: "success",
                        icon: 'success',
                        buttonsStyling: false,
                        confirmButtonClass: "btn btn-success"
                    },function(){
                      window.location.href="";
                    });
                }
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
    }

    function ubahuser(){
        var old_user = $("#old_user").val();
        var new_user = $("#new_user").val();
        if(old_user == "" || new_user==""){
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
                old_user :old_user,
                new_user :new_user,
            },
            success : function(data){
                if(data == 0){
                  swal({
                        title: 'Gagal!',
                        text: 'Username tidak ditemukan',
                        type: 'error',
                        confirmButtonClass: "btn btn-danger",
                        buttonsStyling: false
                    }).catch(swal.noop)
                }else{
                  $.ajax({
                    url : "uptUser",
                          type: "POST",
                          dataType: "JSON",
                          data: {
                            old_user :old_user,
                            new_user :new_user,
                          }
                  });
                  $("#formpass").modal("hide");
                    swal({
                        title: "Congratulation!",
                        text: "Username has been changed. Please login with new username",
                        type: "success",
                        icon: 'success',
                        buttonsStyling: false,
                        confirmButtonClass: "btn btn-success"
                    },function(){
                      window.location.href="";
                    });
                }
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
    }

    function showoldpass() {
      var x = document.getElementById("old_pass");
      var y = document.getElementById("eye");
      if (x.type == "password") {
          x.type = "text";
          $('#eye').removeClass('fa fa-eye-slash');
          $('#eye').addClass('fa fa-eye');
      } else {
          x.type = "password";
          $('#eye').removeClass('fa fa-eye');
          $('#eye').addClass('fa fa-eye-slash');
      }
    }

    function shownewpass() {
      var x = document.getElementById("new_pass");
      var y = document.getElementById("eye");
      if (x.type == "password") {
          x.type = "text";
          $('#eye').removeClass('fa fa-eye-slash');
          $('#eye').addClass('fa fa-eye');
      } else {
          x.type = "password";
          $('#eye').removeClass('fa fa-eye');
          $('#eye').addClass('fa fa-eye-slash');
      }
    }

</script>

</html>