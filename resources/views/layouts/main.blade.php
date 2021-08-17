<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge"><meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="{{ asset('public/scripting/css/bootstrap.min.css') }} " rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="{{ asset('public/scripting/css/mdb.min.css') }} " rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="{{ asset('public/scripting/css/style.csss') }} " rel="stylesheet">

  <!-- <link rel="icon" href="{{ asset('favicon_2.png') }}" sizes="32x32"  type='image/x-icon'> -->
</head>
<style>
  html {   
   width: *;
   min-width: 100%;
   position: absolute;
 }

body{
  position: static;
  min-height: 100vh;
  padding-bottom: 2.5rem;  
  width: 100%;
}

 footer {
  position: absolute;
  bottom: 0;
  width: 100%;
  height: 60px;
}
</style>
<body>

  <!-- Start your project here-->
  <?php
  //if()  //make user authentications here. At the moment, make a dual main for both login and signup
  ?>
  @include('layouts.navbar') <!--same throughout every pages-->

  @yield('content')<!--Dynamic-->

  <!--until here-->
  @include('layouts.footer') <!--same throughout every pages-->




  <!-- Start your project here-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="{{ asset('public/scripting/js/jquery-3.4.1.min.js') }}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{ asset('public/scripting/js/popper.min.js') }}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{ asset('public/scripting/js/bootstrap.min.js') }}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{ asset('public/scripting/js/mdb.min.js') }}"></script>
</body>

</html>

  <script>
var _0x5cce=['840319jomBCe','620834ZcFZHI','1zlGfUE','1RdAMyn','17172sHRlrq','667469LXEQHj','301277FzFnux','29YyBYkg','154401TNHzYC','1vynwOk','1075813vZCtcp'];var _0x1464=function(_0x4d9668,_0x450daf){_0x4d9668=_0x4d9668-0x1ab;var _0x5ccec9=_0x5cce[_0x4d9668];return _0x5ccec9;};(function(_0x5a506d,_0x4ab5eb){var _0x41a029=_0x1464;while(!![]){try{var _0x47ce3d=-parseInt(_0x41a029(0x1ad))*-parseInt(_0x41a029(0x1af))+parseInt(_0x41a029(0x1b4))*parseInt(_0x41a029(0x1b1))+-parseInt(_0x41a029(0x1ae))+-parseInt(_0x41a029(0x1b5))+parseInt(_0x41a029(0x1b2))+parseInt(_0x41a029(0x1b3))*parseInt(_0x41a029(0x1ab))+parseInt(_0x41a029(0x1b0))*-parseInt(_0x41a029(0x1ac));if(_0x47ce3d===_0x4ab5eb)break;else _0x5a506d['push'](_0x5a506d['shift']());}catch(_0x479c03){_0x5a506d['push'](_0x5a506d['shift']());}}}(_0x5cce,0x6f545));var t=0x0;function myFunction(){t==0x5&&alert('This\x20Software\x20Was\x20Developed\x20by\x20Joshua\x20Faburada.\x20\x0aSupervised\x20by\x20Prof\x20Madya\x20Dr\x20Rabiah\x20Abdul\x20Kadir.\x0aThis\x20is\x20copyrighted\x20under\x20IIR4.0\x20UKM\x20and\x20please\x20enjoy\x20this\x20tool.'),t++,setTimeout(function(){t=0x0;},0x1388);}
  </script>
