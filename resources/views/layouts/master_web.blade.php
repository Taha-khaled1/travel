{{-- dir="rtl"  --}}
<!DOCTYPE html>
<html class="no-js" lang="en"  >

<head>

    <meta charset="UTF-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="Your vacation, tours and travel theme needs are all met at emprise." />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Your vacation, tours and travel theme needs are all met at emprise." />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @include('layouts.head_script_web')

</head>


<body class="rlr-body rlr-js-banner-search">
    <main id="rlr-main" class="rlr-main">
        @include('layouts.head_web_design')
        @yield('page-header')
        @include('sweetalert::alert')
        @yield('content')
       
   </main>
   @include('layouts.fotter_web')
   @include('layouts.fotter_secript_web')
</body>

</html>