<meta charset="utf-8" />
<title>{{env('APP_NAME')}} | @yield('title')</title>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
<meta content="" name="description" />
<meta content="" name="author" />

<!-- ================== BEGIN BASE CSS STYLE ================== -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet" />
<link href="{{base_url('assets/css/bundle.css')}}" rel="stylesheet" />
<link href="{{base_url('assets/css/default/style.min.css')}}" rel="stylesheet" />
<link href="{{base_url('assets/css/default/style-responsive.min.css')}}" rel="stylesheet" />
<link href="{{base_url('assets/css/default/theme/default.css')}}" rel="stylesheet" id="theme" />
<!-- ================== END BASE CSS STYLE ================== -->

<!-- ================== BEGIN BASE JS ================== -->
<script src="{{base_url('assets/plugins/pace/pace.min.js')}}"></script>
<!-- ================== END BASE JS ================== -->

@stack('css')
