<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard Mitra</title>
    <meta name="description" content="dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- style --}}
    @include('includes.styleDashboard')
</head>

<body>
    {{-- sidebar --}}
    @include('includes.sidebarDashboard')
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        {{-- navbar --}}
        @include('includes.navbarDashboard')
        <!-- Content -->
        <div class="content">
            {{-- content --}}
            @yield('content')
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
    </div>
    <!-- /#right-panel -->



    <!--Local Stuff-->
    {{-- script --}}
    @include('includes.scriptDashboard')
</body>

</html>