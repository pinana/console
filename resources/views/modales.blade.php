@section('modales')
@section('modal_ENVIAR')
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">enviar</h4>
                </div>
                <div class="modal-body">
                    <p>select AETS</p>
                    <select class="selectpicker">
                        <option>PAC1</option>
                        <option>PACS2</option>
                        <option>PACS3</option>
                    </select>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">CERRAR</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">ENVIAR</button>
                </div>
            </div>

        </div>
    </div>
@stop
@section('modal_TAGS')
    <div id="MODAL_TAGS" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">TAGS</h4>
                </div>
                <div class="modal-body">
                    <p>TAGS</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">CERRAR</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">GUARGAR</button>
                </div>
            </div>

        </div>
    </div>
@stop
@section('modal_BORRAR')
    <div id="MODAL_BORRAR" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">BORRAR</h4>
                </div>
                <div class="modal-body">
                    <p>BORRAR</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">CERRAR</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">BORRAR</button>
                </div>
            </div>

        </div>
    </div>
@stop
@section('modal_MOVER')
    <div id="MODAL_MOVER" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">MOVER</h4>
                </div>
                <div class="modal-body">
                    <p>MOVER</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">CERRAR</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">MOVER</button>
                </div>
            </div>

        </div>
    </div>
@stop
@section('MODAL_DOWNLOAD')
    <div id="MODAL_DOWNLOAD" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">DOWNLOAD</h4>
                </div>
                <div class="modal-body">
                    <p>DOWNLOAD</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">CERRAR</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">DOWNLOAD</button>
                </div>
            </div>

        </div>
    </div>
@stop

@section('MODAL_NODO')
    <div id="MODAL_NODO" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">CREAR NODO</h4>
                </div>
                <div class="modal-body">
                    <div clas="panel-heading">editar</div>
                    {!! Form::open(array('route'=> 'datos.store')) !!}

                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table no-margin">



                                            <tr>
                                                <td><div class="form-group">
                                                        {!!  Form::label('description', 'Enter description') !!}
                                                        {!!  Form::text('description', null,  ['class' => 'form-comtrol']) !!}

                                                    </div></td>
                                                <td> <div class="form-group">
                                                        {!!  Form::label('AET', 'Enter AETS') !!}
                                                        {!!  Form::text('AET', null,  ['class' => 'form-comtrol']) !!}

                                                    </div></td>
                                                <td> <div class="form-group">
                                                        {!!  Form::label('host', 'Enter host') !!}
                                                        {!!  Form::text('host', null,  ['class' => 'form-comtrol']) !!}

                                                    </div></td>
                                                <td><div class="form-group">
                                                        {!!  Form::label('port', 'port') !!}
                                                        {!!  Form::text('port', null,  ['class' => 'form-comtrol']) !!}

                                                    </div></td>


                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>


                </div>


                <div class="modal-footer">
                    <div class="form-group">
                    <button type="button" class="btn btn-default" data-dismiss="modal">CERRAR</button>


                        {!!  Form::button('Create', ['type'=>'submit' , 'class'=>'btn btn primary']) !!}


                    </div>





                    {!! Form::close() !!}
                </div>
            </div>

        </div>
    </div>
    </div>

@stop
        @section('MODAL_EDITAR')
            @foreach($aets as $aet)
            <div id="modal-edit-{{$aet->id }}" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">TAGS</h4>
                        </div>
                        <div class="modal-body">
                            <div clas="panel-heading">editar</div>
                            {!! Form::model($aet, ['route'=>['datos.update', $aet->id],'method' =>'PUT']) !!}
                            <div class="form-group">
                                {!!  Form::label('description', 'Enter description') !!}
                                {!!  Form::text('description', null,  ['class' => 'form-comtrol']) !!}

                            </div>

                            <div class="form-group">
                                {!!  Form::label('AET', 'Enter AETS') !!}
                                {!!  Form::text('AET', null,  ['class' => 'form-comtrol']) !!}

                            </div>

                            <div class="form-group">
                                {!!  Form::label('host', 'Enter host') !!}
                                {!!  Form::text('host', null,  ['class' => 'form-comtrol']) !!}

                            </div>

                            <div class="form-group">
                                {!!  Form::label('port', 'port') !!}
                                {!!  Form::text('port', null,  ['class' => 'form-comtrol']) !!}

                            </div>

                            <div class="form-group">
                                {!!  Form::button('Create', ['type'=>'submit' , 'class'=>'btn btn primary']) !!}


                            </div>





                            {!! Form::close() !!}
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">CERRAR</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">GUARGAR</button>
                        </div>
                    </div>

                </div>
            </div>
            @endforeach
        @stop

@section('MODAL_DELETE')
    @foreach($aets as $aet)
    <div id="MODAL_DELETE-{{$aet->id}}" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">DELETE</h4>
                </div>
                <div class="modal-body">
                    {!! Form::open(['method' => 'DELETE','route' => ['datos.destroy', $aet->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">CERRAR</button>

                </div>
            </div>

        </div>
    </div>
    @endforeach
@stop

@stop