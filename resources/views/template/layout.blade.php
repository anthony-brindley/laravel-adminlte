<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ $pageTitle or "AdminLTE Dashboard" }}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="{{ elixir('css/all.css') }}" rel="stylesheet" type="text/css" />
    <!--[if lt IE 9]>
    <script src="{{ elixir('js/lt-ie9.js') }}"></script>
    <![endif]-->
</head>
<body class="skin-blue">
<div class="wrapper">

    <!-- Header -->
    @include('template.header')

            <!-- Sidebar -->
    @include('template.sidebar')

            <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                {{ $pageTitle or "Page Title" }}
                <small>{{ $pageDescription or null }}</small>
            </h1>
            <!-- You can dynamically generate breadcrumbs here -->
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                <li class="active">Here</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
            @yield('content')
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    <!-- Footer -->
    @include('template.footer')

</div><!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<script src="{{ elixir('js/all.js') }}"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience -->
</body>
</html>