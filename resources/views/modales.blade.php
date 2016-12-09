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
@stop