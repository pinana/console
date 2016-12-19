@extends('admin_template')
@extends('modales')





@section('content')

    <div class="row">
        <!-- Left col -->
        <div class="col-md-8">
            <!-- MAP & BOX PANE -->




            <!-- TABLE: LATEST ORDERS -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">editar NODOS</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table no-margin">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Description</th>
                                <th>AET</th>
                                <th>HOST</th>
                                <th>port</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($aets as $aet)
                            <tr>
                                <td>{{$aet->id}}</td>
                                <td>{{$aet->description}}</td>
                                <td>{{$aet->AET}}</td>
                                <td>{{$aet->host}}</td>
                                <td>{{$aet->port}}</td>
                                <td>

                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#MODAL_DELETE-{{$aet->id}}">DELETE</button>
                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-edit-{{$aet->id}}">EDIT</button>


                                </td>
                            </tr>
                            @endforeach




                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">

                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#MODAL_NODO">AÑADIR NODO</button>

                    </button>


                </div>
                <!-- /.box-footer -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->


        <!-- /.col -->
    </div>



@endsection
