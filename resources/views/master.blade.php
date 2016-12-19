<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <title>www.hc-kr.com</title>
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="{{ asset('css/ie10-viewport-bug-workaround.css') }}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/jumbotron-narrow.css') }}" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="{{ asset('js/ie-emulation-modes-warning.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <script src="assets/js/jquery.checkboxes-1.2.0.min.js"></script>

    <![endif]-->

</head>
<body>

<div class="container">
    <div class="header clearfix">

        @yield('sidebar-up')


    </div>



    <div class="row marketing">
        <div class="col-lg-5 nodos">
            @yield('sidebar-left')
        </div>


            <div class="col-lg-4 fechas">
                @yield('sidebar-fechas')
            </div>

                <div class="col-lg-3 modalitys">
                    @yield('sidebar-modality')
                </div>



    </div>


    <div class="row marketing">
        <div class="col-lg-12 patients">
            @yield('patients')
        </div>

        <div class="row marketing">
            <div class="col-lg-12 patients">
                @yield('actions')

            </div>
        </div>
    </div>












</div> <!-- /container -->



<!-- /MODALES -->
@yield('modal_ENVIAR')
@yield('modal_MOVER')
@yield('modal_BORRAR')
@yield('modal_TAGS')
@yield('MODAL_DOWNLOAD')


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