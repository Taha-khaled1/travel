
    <title>@yield("title")</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="{{URL::asset('assets/favicon.ico')}}"/>

    <!-- CSS (Font, Vendor, Icon, Plugins & Style CSS files) -->

    <!--  <link rel="stylesheet" href="./assets/css/vendor/icofont.min.css" />
  <link rel="stylesheet" href="./assets/css/vendor/line-awesome.min.css"/>
  <link rel="stylesheet" href="./assets/css/vendor/simple-line-icons.css"/> -->
    <!-- Font CSS -->
    <!-- Fonts -->
    {{-- <link href="{{URL::asset('assets/fonts/Recoleta-RegularDEMO.woff')}}" rel="stylesheet"> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    @yield('css')
    <!-- Vendor CSS (Bootstrap & Icon Font) -->

    <!-- Plugins CSS (All Plugins Files) -->

    {{-- <link rel="preload" href="{{URL::asset('assets/css-rtl/main.css')}}" as="script" />
    <link rel="preload" href="{{URL::asset('vendors/rs6.css')}}" as="style" />
    <script src="{{URL::asset('jquery.min.js')}}"></script>
    <link rel="stylesheet" href="{{URL::asset('vendors/rs6.css')}}" />


    <link rel="stylesheet" href="{{URL::asset('assets/css-rtl/plugins.css')}}" />

    <link rel="stylesheet" href="{{URL::asset('assets/plugins/nice-select.css')}}" />

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{URL::asset('assets/css-rtl/main.css')}}" /> --}}
  
<link rel="stylesheet" href="{{ asset('assets/css-rtl/main.css') }}" />
<link rel="stylesheet" href="{{ asset('vendors/rs6.css') }}" />
<link rel="stylesheet" href="{{ asset('jquery.min.js') }}" />
<link rel="stylesheet" href="{{ asset('vendors/rs6.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css-rtl/plugins.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/plugins/nice-select.css') }}" />
<link rel="stylesheet" href="{{ asset('assets/css-rtl/main.css') }}" />