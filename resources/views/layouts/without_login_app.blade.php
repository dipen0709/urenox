<!DOCTYPE html>
<html lang="en">
<head>
	<title>{{ trans('common.SITE_NAME') }}</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
        <link rel="icon" type="image/x-icon" href="{{ asset('/public/img/favicon.png')}}" />
        <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
        <link href="{{ asset('/public/css/all.css')}}" rel="stylesheet" type="text/css">       
        <link href="{{ asset('/public/css/nucleo-icons.css')}}" rel="stylesheet" type="text/css">       
	<link href="{{ asset('/public/css/black-dashboard.min.css') }}" rel="stylesheet" type="text/css" >
	<link href="{{ asset('/public/css/demo.css') }}" rel="stylesheet" type="text/css" >
</head>
<body class="login-page">	
   
        @yield('content')
        
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
</body>
</html>      