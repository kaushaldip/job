<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('custom/style.css') }}" rel="stylesheet">
  <link href="{{ asset('libs/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css') }}" rel="stylesheet">
  <link href="{{ asset('libs/magnific-popup/magnific-popup.css') }}" rel="stylesheet">

  <!-- Scripts -->
  <script>
  window.Laravel = {!! json_encode([
    'csrfToken' => csrf_token(),
    ]) !!};
  </script>
  <script src="{{ asset('js/app.js') }}"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body class="sub-page">
  <!-- Header start -->
  @include('partials.header')
  <!-- Header end --> 

  @yield('content')

  <!--Footer-->
  @include('partials.footer')
   <script src="{{ asset('js/script.js') }}"></script>
  <script src="{{ asset('js/dropzone.js') }}"></script>
  <script src="{{ asset('custom/script.js') }}"></script>
  <script src="{{ asset('libs/moment/moment.js') }}"></script>
  <script src="{{ asset('libs/tinymce/tinymce.js') }}"></script>
  <script src="{{ asset('libs/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js') }}"></script>
  <script src="{{ asset('libs/magnific-popup/jquery.magnific-popup.js') }}"></script>
  <script>
    roleChange = function(){
        $('#employee,#hospital').hide();
        $('#'+$('input[name="role"]:checked').val()).show();
        if($('input[name="role"]:checked').val() == 'employee'){
          $('#fn_name').html('Name');
          $('#contact_person').hide();
        }else{
          $('#fn_name').html('Facility Name');
          $('#contact_person').show();
        }
    };
    $(document).ready(function(){
      tinymce.init({
        selector: 'textarea',
        height: 500,
        theme: 'modern',
        plugins: [
          'advlist autolink lists link image charmap print preview hr anchor pagebreak',
          'searchreplace wordcount visualblocks visualchars code fullscreen',
          'insertdatetime media nonbreaking save table contextmenu directionality',
          'template paste textcolor colorpicker textpattern codesample toc help'
        ],
        toolbar1: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link ',
      });
      roleChange();
      $('input[name="role"]').on('change',roleChange);
    })
  </script>
</body>
</html>
