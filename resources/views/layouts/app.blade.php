<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="main_html_class">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" type="image/x-icon" href="{{ asset('/public/front/favicon32.png')}}" />

        <!-- Basic -->        
        <title>@if(!empty($meta_title)){{$meta_title.' | '}}@endif{{trans('common.SITE_NAME')}}</title>
        <meta name="keywords" content="" />
        <meta name="description" content="">
        <meta name="author" content="">  
        <link rel="icon" type="image/x-icon" href="{{ asset('/public/img/favicon.png')}}" />
        <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
        <link href="{{ asset('/public/css/all.css')}}" rel="stylesheet" type="text/css">       
        <link href="{{ asset('/public/css/nucleo-icons.css')}}" rel="stylesheet" type="text/css">       
        <link href="{{ asset('/public/css/black-dashboard.min.css') }}" rel="stylesheet" type="text/css" >
        <link href="{{ asset('/public/css/demo.css') }}" rel="stylesheet" type="text/css" >
    </head>
    <body class="sidebar-mini ">
        <div class="wrapper">

            @include('includes/sidebar')

            <div class="main-panel">
                @include('includes/header') 
                @yield('content')
                @include('includes/footer') 
                <div class="modal modal-search fade" id="modalStatusChange" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="tim-icons icon-simple-remove"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
               
            </div>
        </div>
        <script type="text/javascript">
            var base_url = "{{URL::to('/').'/'}}";
            var langauge_var = {!! json_encode(trans('javascript')); !!};
        </script>    
        <?php
        $php_default_date_format = session()->get('PHP_DEFAULT_DATE_FORMAT');
        $js_default_date_format = session()->get('JS_DEFAULT_DATE_FORMAT');
        ?>
        <script type="text/javascript">
            var php_default_date_format = "{{$php_default_date_format}}";
            var js_default_date_format = "{{$js_default_date_format}}";
            var js_default_date_format_small = "{{ strtolower($js_default_date_format) }}";
            var stack_bar_bottom = {"dir1": "up", "dir2": "right", "spacing1": 0, "spacing2": 0};
        </script>
        <script src="{{ asset('/public/js/jquery.min.js') }}"></script>
        <script src="{{ asset('/public/js/jquery-ui.min.js') }}"></script> 
        <script src="{{ asset('/public/js/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('/public/js/additional-methods.js') }}"></script>
        <script src="{{ asset('/public/js/jquery.browser.mobile.js') }}"></script>


        <script src="{{ asset('/public/js/core/jquery.min.js') }}"></script>
        <script src="{{ asset('/public/js/core/popper.min.js') }}"></script>
        <script src="{{ asset('/public/js/core/bootstrap.min.js') }}"></script>
        <script src="{{ asset('/public/js/perfect-scrollbar.jquery.min.js') }}"></script>
        <script src="{{ asset('/public/js/moment.min.js') }}"></script>
        <script src="{{ asset('/public/js/bootstrap-switch.js') }}"></script>
        <!--  Plugin for Sweet Alert -->
        <script src="{{ asset('/public/js/sweetalert2.min.js') }}"></script>
        <!--  Plugin for Sorting Tables -->
        <script src="{{ asset('/public/js/jquery.tablesorter.js') }}"></script>
        <!-- Forms Validations Plugin -->
        <script src="{{ asset('/public/js/jquery.validate.min.js') }}"></script>
        <!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
        <script src="{{ asset('/public/js/jquery.bootstrap-wizard.js') }}"></script>
        <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
        <script src="{{ asset('/public/js/bootstrap-selectpicker.js') }}"></script>
        <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
        <script src="{{ asset('/public/js/bootstrap-datetimepicker.js') }}"></script>
        <!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
        <script src="{{ asset('/public/js/jquery.dataTables.min.js') }}"></script>
        <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
        <script src="{{ asset('/public/js/bootstrap-tagsinput.js') }}"></script>
        <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
        <script src="{{ asset('/public/js/jasny-bootstrap.min.js') }}"></script>
        <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
        <script src="{{ asset('/public/js/fullcalendar/fullcalendar.min.js') }}"></script>
        <script src="{{ asset('/public/js/fullcalendar/daygrid.min.js') }}"></script>
        <script src="{{ asset('/public/js/fullcalendar/timegrid.min.js') }}"></script>
        <script src="{{ asset('/public/js/fullcalendar/interaction.min.js') }}"></script>
        <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
        <script src="{{ asset('/public/js/jquery-jvectormap.js') }}"></script>
        <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
        <script src="{{ asset('/public/js/nouislider.min.js') }}"></script>
        <!--  Google Maps Plugin    -->
        <!-- Place this tag in your head or just before your close body tag. -->
        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
        <!-- Chart JS -->
        <script src="{{ asset('/public/js/chartjs.min.js') }}"></script>
        <!--  Notifications Plugin    -->
        <script src="{{ asset('/public/js/bootstrap-notify.js') }}"></script>
        <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="{{ asset('/public/js/black-dashboard.min.js') }}"></script>
        <!-- Black Dashboard DEMO methods, don't include it in your project! -->
        <script src="{{ asset('/public/demo.js') }}"></script>

        <?php
        $success_load_msg = session('success');
        $error_load_msg = session('error');
        ?>  
        <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');
        $navbar = $('.navbar');
        $main_panel = $('.main-panel');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');
        sidebar_mini_active = true;
        white_color = false;

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();



        $('.fixed-plugin a').click(function(event) {
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .background-color span').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data', new_color);
          }

          if ($main_panel.length != 0) {
            $main_panel.attr('data', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data', new_color);
          }
        });

        $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            sidebar_mini_active = false;
            blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
          } else {
            $('body').addClass('sidebar-mini');
            sidebar_mini_active = true;
            blackDashboard.showSidebarMessage('Sidebar mini activated...');
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

        $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (white_color == true) {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').removeClass('white-content');
            }, 900);
            white_color = false;
          } else {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').addClass('white-content');
            }, 900);

            white_color = true;
          }


        });

        $('.light-badge').click(function() {
          $('body').addClass('white-content');
        });

        $('.dark-badge').click(function() {
          $('body').removeClass('white-content');
        });
      });
    });
  </script>
    </body>
</html>      
