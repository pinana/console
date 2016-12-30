<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $page_title or "AdminLTE Dashboard" }}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="{{ asset("/bower_components/AdminLTE/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{ asset("/bower_components/AdminLTE/dist/css/AdminLTE.min.css")}}" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link href="{{ asset("/bower_components/AdminLTE/dist/css/skins/skin-blue.min.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>

</head>
<body>


<body class="skin-blue">
<div class="wrapper">

    <!-- Header -->
@include('header')




    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                {{ $page_title or "Page Title" }}
                <small>{{ $page_description or null }}</small>
            </h1>
            <!-- You can dynamically generate breadcrumbs here -->
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                <li class="active">Here</li>
            </ol>
        </section>
        <div class="header clearfix">

            @yield('sidebar-up')


        </div>
        <section class="content">
            <!-- Your Page Content Here -->
            <div class="row">
                <div class="col-md-5 nodos">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Monthly Recap Report</h3>
                            @yield('sidebar-left')
                        </div>
                    </div>
                </div>

                <div class="col-md-4 fechas">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Monthly Recap Report</h3>
                            @yield('sidebar-fechas')
                        </div>
                    </div>
                </div>

                <div class="col-md-3 modalitys">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Monthly Recap Report</h3>
                            @yield('sidebar-modality')
                        </div>
                    </div>
                </div>
            </div>

            <div class="row patients">
                <div class="col-lg-12 patients">
                    <div class="box">
                        <div class="box-header with-border">
                            <div class="actions">
                            @yield('actions')
                            </div>
<div>
                            @yield('patients')
</div>

                    </div>
                </div>
            </div>
            </div>





        </section><!-- /.content -->



    </div>
</div>
</body>




<!-- /MODALES -->
@yield('modal_ENVIAR')
@yield('modal_MOVER')
@yield('modal_BORRAR')
@yield('modal_TAGS')
@yield('MODAL_DOWNLOAD')

<script src="{{ asset ("bower_components/AdminLTE/plugins/jQuery/jQuery-2.2.3.min.js") }}"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset ("bower_components/AdminLTE/bootstrap/js/bootstrap.min.js") }}" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="{{ asset ("bower_components/AdminLTE/dist/js/app.min.js") }}" type="text/javascript"></script>
</body>
<script>
    $('#toggle-all').click(function() {
        $('.btn-group input[type="checkbox"]').prop('checked', true);
    });

    $('#untoggle-all').click(function() {
        $('.btn-group input[type="checkbox"]').prop('checked', false);
    });

    $(document).ready(function(){
        $("#datecheck").on("change",function(){
            if($(this).is(":checked"))
            {alert("Yes it fds");
                $("#date").focus();
            }
        });
    });

    $('#datecheck').change(function() {
        alert($(this).prop('checked'))
    })

    $("input[name=optradio]").change(function () {



        alert("Yes it A");


    });

</script>



</html>