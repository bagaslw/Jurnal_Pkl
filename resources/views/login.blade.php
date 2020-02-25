<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{ url('assets/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{ asset('images/logo_title.png') }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="base_url" content="{{ asset('') }}" />
  <title>
   JURNAL MAGANG | LOGIN
 </title>
 <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
 <!--     Fonts and icons     -->
 <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
 <!-- CSS Files -->
 <link href="{{ asset('assets/css/material-dashboard.css?v=2.1.0')}}" rel="stylesheet" />
 <!-- <link href="{{ url('assets/css/styles.css?v=2.1.0')}}" rel="stylesheet" /> -->
</head>
<body class="off-canvas-sidebar">
  <div class="wrapper wrapper-full-page">
    <div class="page-header login-page header-filter" filter-color="black" style="background-image: url('assets/img/login2.jpg'); background-size: cover; background-position: top center;">
      <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-header card-header-info card-header-icon">
                <div class="card-icon">
                  <i class="material-icons">inbox</i>
                </div>
                <p class="card-category">Total Siswa</p>
                <h3 class="card-title" id="total_siswa"></h3>
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="material-icons">date_range</i>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-header card-header-info card-header-icon">
                <div class="card-icon">
                  <i class="material-icons">event_busy</i>
                </div>
                <p class="card-category">Total Jurnal Masuk</p>
                <h3 class="card-title" id="total_jurnal"></h3>
              </div>
              <div class="card-footer">
                <div class="stats">
                  <i class="material-icons">date_range</i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
          <form id="login-form" novalidate="novalidate">
            <div class="card card-login card-hidden">
              <div id="login-header" class="card-header card-header-info text-center">
                <h4 class="card-title">Login</h4>
              </div>
              <div class="card-body ">
                <span class="form-group bmd-form-group has-danger">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">face</i>
                      </span>
                    </div>
                    <input name="username" required="true" aria-required="true" type="text" class="form-control" placeholder="Username...">
                  </div>
                </span>
                <span class="form-group bmd-form-group has-danger">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">lock_outline</i>
                      </span>
                    </div>
                    <input name="password" required="true" aria-required="true" type="password" class="form-control" placeholder="Password...">
                  </div>
                </span>
              </div>
              <div class="card-footer justify-content-center">
                <button type="submit" id="login-button" class="btn btn-info btn-link btn-lg">LOGIN</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!--   Core JS Files   -->
<script src="{{ asset('assets/js/core/jquery.min.js')}}"></script>
<script src="{{ asset('assets/js/core/popper.min.js')}}"></script>
<script src="{{ asset('assets/js/core/bootstrap-material-design.min.js')}}"></script>
<script src="{{ asset('assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
<!-- Plugin for the momentJs  -->
<script src="{{ asset('assets/js/plugins/moment.min.js')}}"></script>
<!--  Plugin for Sweet Alert -->
<script src="{{ asset('assets/js/plugins/sweetalert2.js')}}"></script>
<!-- Forms Validations Plugin -->
<script src="{{ asset('assets/js/plugins/jquery.validate.min.js')}}"></script>
<!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="{{ asset('assets/js/plugins/jquery.bootstrap-wizard.js')}}"></script>
<!--  Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="{{ asset('assets/js/plugins/bootstrap-selectpicker.js')}}"></script>
<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script src="{{ asset('assets/js/plugins/bootstrap-datetimepicker.min.js')}}"></script>
<!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
<script src="{{ asset('assets/js/plugins/jquery.dataTables.min.js')}}"></script>
<!--  Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="{{ asset('assets/js/plugins/bootstrap-tagsinput.js')}}"></script>
<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="{{ asset('assets/js/plugins/jasny-bootstrap.min.js')}}"></script>
<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
<script src="{{ asset('assets/js/plugins/fullcalendar.min.js')}}"></script>
<!-- Vector Map asgin, full documentation here: http://jvectormap.com/documentation/ -->
<script src="{{ asset('assets/js/plugins/jquery-jvectormap.js')}}"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{ asset('assets/js/plugins/nouislider.min.js')}}"></script>
<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
<!-- Library for adding dinamically elements -->
<script src="{{ asset('assets/js/plugins/arrive.min.js')}}"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chartist JS -->
<script src="{{ asset('assets/js/plugins/chartist.min.js')}}"></script>
<!--  Notifications Plugin    -->
<script src="{{ asset('assets/js/plugins/bootstrap-notify.js')}}"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('assets/js/material-dashboard.js?v=2.1.0')}}" type="text/javascript"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->       
<script>
  const BASE_URL = $("meta[name='base_url']").attr("content");
  const CSRF = $('meta[name="csrf-token"]').attr('content');

  $(document).ready(function() {
    $().ready(function() {
      $sidebar = $('.sidebar');

      $sidebar_img_container = $sidebar.find('.sidebar-background');

      $full_page = $('.full-page');

      $sidebar_responsive = $('body > .navbar-collapse');

      window_width = $(window).width();

      fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

      if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
        if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
          $('.fixed-plugin .dropdown').addClass('open');
        }

      }

      $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

      $('.fixed-plugin .active-color span').click(function() {
        $full_page_background = $('.full-page-background');

        $(this).siblings().removeClass('active');
        $(this).addClass('active');

        var new_color = $(this).data('color');

        if ($sidebar.length != 0) {
          $sidebar.attr('data-color', new_color);
        }

        if ($full_page.length != 0) {
          $full_page.attr('filter-color', new_color);
        }

        if ($sidebar_responsive.length != 0) {
          $sidebar_responsive.attr('data-color', new_color);
        }
      });

      $('.fixed-plugin .background-color .badge').click(function() {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');

        var new_color = $(this).data('background-color');

        if ($sidebar.length != 0) {
          $sidebar.attr('data-background-color', new_color);
        }
      });

      $('.fixed-plugin .img-holder').click(function() {
        $full_page_background = $('.full-page-background');

        $(this).parent('li').siblings().removeClass('active');
        $(this).parent('li').addClass('active');


        var new_image = $(this).find("img").attr('src');

        if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
          $sidebar_img_container.fadeOut('fast', function() {
            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $sidebar_img_container.fadeIn('fast');
          });
        }

        if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
          var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

          $full_page_background.fadeOut('fast', function() {
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
            $full_page_background.fadeIn('fast');
          });
        }

        if ($('.switch-sidebar-image input:checked').length == 0) {
          var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
          var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

          $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
          $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
        }

        if ($sidebar_responsive.length != 0) {
          $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
        }
      });

      $('.switch-sidebar-image input').change(function() {
        $full_page_background = $('.full-page-background');

        $input = $(this);

        if ($input.is(':checked')) {
          if ($sidebar_img_container.length != 0) {
            $sidebar_img_container.fadeIn('fast');
            $sidebar.attr('data-image', '#');
          }

          if ($full_page_background.length != 0) {
            $full_page_background.fadeIn('fast');
            $full_page.attr('data-image', '#');
          }

          background_image = true;
        } else {
          if ($sidebar_img_container.length != 0) {
            $sidebar.removeAttr('data-image');
            $sidebar_img_container.fadeOut('fast');
          }

          if ($full_page_background.length != 0) {
            $full_page.removeAttr('data-image', '#');
            $full_page_background.fadeOut('fast');
          }

          background_image = false;
        }
      });

      $('.switch-sidebar-mini input').change(function() {
        $body = $('body');

        $input = $(this);

        if (md.misc.sidebar_mini_active == true) {
          $('body').removeClass('sidebar-mini');
          md.misc.sidebar_mini_active = false;

          $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

        } else {

          $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

          setTimeout(function() {
            $('body').addClass('sidebar-mini');

            md.misc.sidebar_mini_active = true;
          }, 300);
        }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
    });
});
</script>
<script>
  $(document).ready(function() {
    md.checkFullPageBackgroundImage();
    setTimeout(function() {
        // after 1000 ms we add the class animated to the login/register card
        $('.card').removeClass('card-hidden');
      }, 700);
  });

  $('#login-form').submit(function (e) {
    e.preventDefault();
    var is_valid = $("#login-form").valid();
    if(is_valid) proses_login();
  });

  function show_notif(type, message) {

    $.notify({
      icon: "notification_important",
      message: "User is not valid"

    }, {
      type: "warning",
      timer: 3000,
      placement: {
        from: "top",
        align: "right"
      }
    });

  }

  function proses_login() {

    var object = {};
    object.headers = {};
    object.headers['X-CSRF-TOKEN'] = CSRF;
    object.url = `{{ route('postLogin') }}`;
    object.data = new FormData($('#login-form')[0]);
    object.type = 'POST';
    object.processData = false;
    object.contentType = false;
    object.success = function (result) {
      if(result.status == "success"){
        location.href = `${BASE_URL}${result.redirect_route}`;
        return;
      }

      show_notif("danger", "User is not valid")

    }

    $.ajax(object)
  }


  function setFormValidation(id) {
    $(id).validate({
      highlight: function(element) {
        $(element).closest('.form-group').removeClass('has-success').addClass('has-danger');
        $(element).closest('.form-check').removeClass('has-success').addClass('has-danger');
      },
      errorPlacement: function(error, element) {
        error.addClass('pull-right').css('margin-top', '10px');
        $(element).closest('.form-group').append(error);
      },
    });
  }

  $(document).ready(function() {
    setFormValidation('#login-form');
  });


</script>
</body>

</html>