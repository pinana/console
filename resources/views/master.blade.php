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
    <link href="{{ asset("/bower_components/AdminLTE/dist/css/daterangepicker.css")}}" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link href="{{ asset("/bower_components/AdminLTE/dist/css/skins/skin-purple.min.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("/bower_components/AdminLTE/dist/css/bootstrap-multiselect.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <link href="{{ asset("/bower_components/AdminLTE/dist/css/select2.min.css")}}" rel="stylesheet" type="text/css" >
    <link href="{{ asset("/bower_components/AdminLTE/dist/css/sol.css")}}" rel="stylesheet" type="text/css" >
    <link href="{{ asset("/bower_components/AdminLTE/dist/css/all.css")}}" rel="stylesheet" type="text/css" >
    <link href="{{ asset("/bower_components/AdminLTE/dist/css/red.css")}}" rel="stylesheet" type="text/css" >
</head>
<body>


<body class="skin-purple layout-top-nav">
<div class="wrapper">

    <!-- Header -->
@include('header')




    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <div class="header clearfix">

            @yield('sidebar-up')


        </div>
        <section class="content">
            <!-- Your Page Content Here -->
            <div class="row search_menu">


                <div class="col-md-3">
                    <div class="box box-warning box-solid">
                        <div class="box-header with-border">
                            <h3 class="box-title">Nodos</h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                            </div>
                            <!-- /.box-tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body" style="display: block;">
                            @yield('sidebar-left')
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
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
        <div class="row patients">
            <div class="col-lg-12 patients">
                <div class="box">
                    <div class="box-header with-border">
                        <div class="actions">
                            @yield('actions')
                        </div>
                        <div>
                            @yield('footer')
                        </div>

                    </div>
                </div>
            </div>
        </div>


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

<script src="{{ asset ("bower_components/AdminLTE/dist/js/jquery.dataTables.min.js") }}" type="text/javascript"></script>
<script src="{{ asset ("bower_components/AdminLTE/dist/js/app.min.js") }}" type="text/javascript"></script>

<script src="{{ asset ("bower_components/AdminLTE/dist/js/bootstrap-multiselect.js") }}" type="text/javascript"></script>

<script src="{{ asset ("bower_components/AdminLTE/dist/js/select2.min.js") }}" type="text/javascript"></script>

<script src="{{ asset ("bower_components/AdminLTE/dist/js/select2.full.min.js") }}" type="text/javascript"></script>
<script src="{{ asset ("bower_components/AdminLTE/dist/js/moment.js") }}" type="text/javascript"></script>
<script src="{{ asset ("bower_components/AdminLTE/dist/js/moment.min.js") }}" type="text/javascript"></script>
<script src="{{ asset ("bower_components/AdminLTE/dist/js/daterangepicker.js") }}" type="text/javascript"></script>

<script src="{{ asset ("bower_components/AdminLTE/dist/js/bootstrap-datepicker.js") }}" type="text/javascript"></script>
<script src="{{ asset ("bower_components/AdminLTE/dist/js/jquery.inputmask.date.extensions.js") }}" type="text/javascript"></script>
<script src="{{ asset ("bower_components/AdminLTE/dist/js/jquery.inputmask.extensions.js") }}" type="text/javascript"></script>
<script src="{{ asset ("bower_components/AdminLTE/dist/js/jquery.inputmask.js") }}" type="text/javascript"></script>
<script src="{{ asset ("bower_components/AdminLTE/dist/js/sol.js") }}" type="text/javascript"></script>
<script src="{{ asset ("bower_components/AdminLTE/dist/js/icheck.js") }}" type="text/javascript"></script>
<script src="{{ asset ("bower_components/AdminLTE/dist/js/icheck.min.js") }}" type="text/javascript"></script>
<script src="{{ asset ("bower_components/AdminLTE/dist/js/bootstrap-colorpicker.js") }}" type="text/javascript"></script>
<script src="{{ asset ("bower_components/AdminLTE/dist/js/bootstrap-timepicker.js") }}" type="text/javascript"></script>
<script src="{{ asset ("bower_components/AdminLTE/dist/js/dataTables.bootstrap.min.js") }}" type="text/javascript"></script>

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

    $(document).ready(function(){

        $("#e1").click(function () {

            $("#country option[value='United State']").attr("disabled", false);

        });
    });
    $(function () {
        //Initialize Select2 Elements
        $(".select2").select2();





        $("#checkbox").click(function(){
            if($("#checkbox").is(':checked') ){
                $("#e1 > option").prop("selected","selected");
                $("#e1").trigger("change");
            }else{
                $("#e1 > option").removeAttr("selected");
                $("#e1").trigger("change");
            }
        });
        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        //Datemask2 mm/dd/yyyy
        $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
        //Money Euro
        $("[data-mask]").inputmask();

        //Date range picker
        $('#reservation').daterangepicker();
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
        //Date range as a button
        $('#daterange-btn').daterangepicker(
                {
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                    },
                    startDate: moment().subtract(29, 'days'),
                    endDate: moment()
                },
                function (start, end) {
                    $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                }
        );

        //Date picker
        $('#datepicker').datepicker({
            autoclose: true
        });

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass: 'iradio_minimal-blue'
        });
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
            checkboxClass: 'icheckbox_minimal-red',
            radioClass: 'iradio_minimal-red'
        });
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
            checkboxClass: 'icheckbox_flat-green',
            radioClass: 'iradio_flat-green'
        });

        //Colorpicker
        $(".my-colorpicker1").colorpicker();
        //color picker with addon
        $(".my-colorpicker2").colorpicker();

        //Timepicker
        $(".timepicker").timepicker({
            showInputs: false
        });
    });



            $(function() {
                // initialize sol
                $('#my-select').searchableOptionList();
            });


    $(function() {
        // initialize sol
        $('#my-selett').searchableOptionList();
    });



    $(function() {


        $('#my-se').searchableOptionList({
            showSelectAll: true,
            // set texts for this SOL only, overriding the defaults
            texts: {
                noItemsAvailable: 'No entries found',
                selectAll: 'todo',
                selectNone: 'Nada',
                quickDelete: '&times;',
                searchplaceholder: 'TAGS'
            }
        });
    });

    $(function(){
        $('#estudios').on('hide.bs.collapse', function () {
            $('#button').html('<span class="glyphicon glyphicon-collapse-down"></span> ');
        })
        $('#estudios').on('show.bs.collapse', function () {
            $('#button').html('<span class="glyphicon glyphicon-collapse-up"></span>');
        })
    })


    $(function(){
        $('#serie').on('hide.bs.collapse', function () {
            $('#button1').html('<span class="glyphicon glyphicon-collapse-down"></span> ');
        })
        $('#serie').on('show.bs.collapse', function () {
            $('#button1').html('<span class="glyphicon glyphicon-collapse-up"></span>');
        })
    })

    $(function(){
        $('#imagenes').on('hide.bs.collapse', function () {
            $('#button2').html('<span class="glyphicon glyphicon-collapse-down"></span> ');
        })
        $('#imagenes').on('show.bs.collapse', function () {
            $('#button2').html('<span class="glyphicon glyphicon-collapse-up"></span>');
        })
    })


    $(function () {

        $('#example1').DataTable({

            "lengthChange": false,
            "searching": true,
            "ordering": false,
            "info": false,
            "autoWidth": false,

            "paginate": false,
            "language": {
                     "search": ""
            }
        });
    });
//collapse all from patient
    $('.closeall').click(function(){
        $('.collapse.in')
                .collapse('hide');
    });


//close above level from from studies
    $('.closepps').click(function(){
        $('#pps')
                .collapse('hide');
        $('#estudi3')
                .collapse('hide');

        $('.file')
                .collapse('hide');
    });

    //close all levels above serie from  studies
    $('.closeserie').click(function(){

        $('#estudi3')
                .collapse('hide');

        $('.file')
                .collapse('hide');
    });
    //close all levels  above image from  series
    $('.closeinstance').click(function(){

        $('.file')
                .collapse('hide');
    });
</script>





</html>