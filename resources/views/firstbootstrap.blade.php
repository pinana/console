@extends('master')
@extends('modales')


@section('sidebar-up')
    <form class="navbar-form navbar-left">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="ID">
            <input type="text" class="form-control" placeholder="name">
            <input type="text" class="form-control" placeholder="AN">
            <div class="input-group">
                <div class="input-group-btn">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tag <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a href="#">Tag1</a></li>
                        <li><a href="#">tag2</a></li>
                        <li><a href="#">Tag3</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                    <input type="text" class="form-control" placeholder="Tags">
                </div><!-- /btn-group -->
            </div>
        </div>
        <button type="submit" class="btn btn-default">buscar</button>
    </form>


    <a role="button" class="btn  btn-info btn-md pull-right config_nodos" href="/datos">config nodos<a/>

@stop

@section('sidebar-left')
    <table class="table">
        <thead>
        <tr>
            <th>Description</th>
            <th>AETS</th>
            <th>HOST</th>
            <th>port</th>

        </tr>
        </thead>
        <div class="input-group">
            <tbody id="tasks-list" name="tasks-list">

            @foreach($aets as $aet)
                <tr>

                    <td>{{$aet->description}}</td>
                    <td>{{$aet->AET}}</td>
                    <td>{{$aet->host}}</td>
                    <td>{{$aet->port}}</td>


                    <td>
                        <input type="radio" name="AETS" aria-label="...">
                    </td>

                </tr>
            @endforeach




            </tbody>
        </div>

    </table>

@stop
@section('sidebar-fechas')

    <tbody id="tasks-list" name="tasks-list">

    <table class="table">
        <div class="input-group">
            <tr>
        <thead>

            <td><div class="radio">
                <label><input type="radio" name="optradio">cualquier fecha</label>
            </div></td>
            <td><div class="radio">
                    <label><input type="radio" name="optradio">mes pasado</label>
                </div></td>
            <td><div class="radio">
                    <label><input type="radio" name="optradio"><30m</label>
                </div></td>
        </thead>
        </tr>
        <tr>
            <thead>
            <td><div class="radio">
                    <label><input type="radio" name="optradio">cualquier fecha</label>
                </div></td>
            <td><div class="radio">
                    <label><input type="radio" name="optradio">mes pasado</label>
                </div></td>
            <td><div class="radio">
                    <label><input type="radio" name="optradio"><30m</label>
                </div></td>
            </thead>
        </tr>
        <tr>
            <thead>
            <td><div class="radio">
                    <label><input type="radio" name="optradio">cualquier fecha</label>
                </div></td>
            <td><div class="radio">
                    <label><input type="radio" name="optradio">mes pasado</label>
                </div></td>
            <td><div class="radio">
                    <label><input type="radio" name="optradio"><30m</label>
                </div></td>
            </thead>
        </tr>
        <tr>
            <thead>
            <td><div class="radio">
                    <label><input type="radio" name="optradio">cualquier fecha</label>
                </div></td>
            <td><div class="radio">
                    <label><input type="radio" name="optradio">mes pasado</label>
                </div></td>
            <td><div class="radio">
                    <label><input type="radio" name="optradio"><30m</label>
                </div></td>
            </thead>
        </tr>

        <tr>
            <thead>
            <td><div class="radio">
                    <label><input type="radio" name="optradio">cualquier fecha</label>
                </div></td>
            <td><div class="radio">
                    <label><input type="date" name="optradio">date</label>
                </div></td>
            <td><div class="radio">
                    <label><input type="radio" name="optradio"><30m</label>
                </div></td>
            </thead>
        </tr>
        <tr>
            <thead>
            <td><div class="radio">
                    <label><input id="datecheck" type="radio" name="optradio">fecha concreta</label>
                </div></td>
            <td><div class="radio">
                    <label><input id="date"  type="date" name="optradio">date</label>
                </div></td>
            <td><div class="radio">
                    <label><input type="radio" name="optradio"><30m</label>
                </div></td>
            </thead>
        </tr>
        <tr>
            <thead>
            <td><div class="radio">
                    <label><input type="radio" name="optradio">cualquier fecha</label>
                </div></td>
            <td><div class="radio">
                    <label><input type="radio" name="optradio">date</label>
                </div></td>
            <td><div class="radio">
                    <label><input type="radio" name="optradio"><30m</label>
                </div></td>
            </thead>
        </tr>
    </div>
</tbody>
        </table>
@stop

@section('sidebar-modality')
    <tbody id="tasks-list" name="tasks-list">
    <div class="btn-group" >
    <table id ="table" class="table">






        <tr>

        <td><div class="checkbox">
                <label><input type="checkbox" name="optradio">CT</label>
            </div></td>
        <td><div class="checkbox">
                <label><input type="checkbox" name="optradio">CT</label>
            </div></td>
        <td><div class="checkbox">
                <label><input type="checkbox" name="optradio">CT</label>
            </div></td>


        </tr>

        <tr>

            <td><div class="checkbox">
                    <label><input type="checkbox" name="optradio">CT</label>
                </div></td>
            <td><div class="checkbox">
                    <label><input type="checkbox" name="optradio">CT</label>
                </div></td>
            <td><div class="checkbox">
                    <label><input type="checkbox" name="optradio">CT</label>
                </div></td>


        </tr>

        <tr>

            <td><div class="checkbox">
                    <label><input type="checkbox" name="optradio">CT</label>
                </div></td>
            <td><div class="checkbox">
                    <label><input type="checkbox" name="optradio">CT</label>
                </div></td>
            <td><div class="checkbox">
                    <label><input type="checkbox" name="optradio">CT</label>
                </div></td>


        </tr>

        <tr>

            <td><div class="checkbox">
                    <label><input type="checkbox" name="optradio">CT</label>
                </div></td>
            <td><div class="checkbox">
                    <label><input type="checkbox" name="optradio">CT</label>
                </div></td>
            <td><div class="checkbox">
                    <label><input type="checkbox" name="optradio">CT</label>
                </div></td>


        </tr>
    </table>
        </div>
    </tbody>

    <div class="row marketing">
        <div class="btn_modalitys btn-xs">

            <button id="toggle-all" class="btn btn-info">Select All</button>
            <button id="untoggle-all" class="btn btn-info">deSelect All</button>

        </div>
    </div>
    @stop

    @section('patients')


        <div class="row marketing">
            <div class="accordion">
                <div class="accordion-group">

                    <div class="accordion-heading level1">
                        <a class="accordion-toggle" data-toggle="collapse" href="#estudios">JUAN ATUN DEL MAR</a>

                    </div>
                </div>

                <div class="accordion-body collapse" id="estudios">
                    <div class="accordion-inner">
                        <div class="accordion" id="LEVEL2">
                            <div class="accordion-group">
                                <div class="accordion-heading level2">
                                    <a class="accordion-toggle" data-parent="#serie" data-toggle="collapse" href="#serie">
                                        ESTUDIO ALETA</a>


                                </div>

                                <div class="accordion-body collapse" id="serie">
                                    <div class="accordion-inner">
                                        <div class="accordion" id="LEVEL3">
                                            <div class="accordion-group">
                                                <div class="accordion-heading level3">
                                                    <a class="accordion-toggle" data-parent="#LEVEL3" data-toggle="collapse" href="#serie">
                                                        serie 1</a>


                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion" id="LEVEL2.1">
                            <div class="accordion-group">
                                <div class="accordion-heading level2">
                                    <a class="accordion-toggle" data-parent="#serie" data-toggle="collapse" href="#serie1">
                                        ESTUDIO COLA</a>


                                </div>

                                <div class="accordion-body collapse" id="serie1">
                                    <div class="accordion-inner">
                                        <div class="accordion" id="LEVEL3.1">
                                            <div class="accordion-group">
                                                <div class="accordion-heading level3">
                                                    <a class="accordion-toggle" data-parent="#LEVEL3.1" data-toggle="collapse" href="#serie1">
                                                        SERIE1 ESTUDIO COLA</a>


                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @stop
    @section('actions')
        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">ENVIAR</button>
        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#MODAL_TAGS">TAGS</button>
        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#MODAL_BORRAR">MODAL_BORRAR</button>
        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#MODAL_MOVER">MOVER</button>
        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#MODAL_DOWNLOAD">download</button>
    @stop




@section('footer')
    <p>&copy; 2016 www.hc-kr.com, Inc.</p>
@stop

