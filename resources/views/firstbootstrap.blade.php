@extends('master')
@extends('modales')


@section('sidebar-up')

    <div class="col-md-12">
        <form class="">
            <div class="form-group">

                <div class="col-md-1" >
                 <input type="text" class="form-control" placeholder="ID">
                </div>

                <div class="col-md-1" >
                    <input type="text" class="form-control" placeholder="AN">
                </div>

                <div class="col-md-1" >
                    <input type="text" class="form-control" placeholder="NAME">
                </div>

                <div class="col-md-2 tag_col" >
                <div class="input-group">

                    <div class="col-md-6 tags" >

                            <input type="text" class="form-control" placeholder="Tags">
                    </div>
                    <div class="col-md-6 tags" >
                        <select id="my-se" name="my-se" multiple="multiple">
                            <option value="CT">CT</option>
                            <option value="CT">CT</option>
                            <option value="CT">CT</option>
                            <option value="CT">CT</option>
                            <option value="CT">CT</option>
                            <option value="CT">CT</option>
                            <option value="CT">CT</option>
                        </select>
                    </div>






                </div>
                </div>



                <div class="col-md-2" >
                    <select id="my-select" name="character" multiple="multiple">
                        <option value="CT">CT</option>
                        <option value="CT">CT</option>
                        <option value="CT">CT</option>
                        <option value="CT">CT</option>
                        <option value="CT">CT</option>
                        <option value="CT">CT</option>
                        <option value="CT">CT</option>
                    </select>
                    </div>

                    <div class="col-md-2" >


                    <div class="form-group">


                        <div class="input-group">
                            <button type="button" class="btn btn-default pull-right" id="daterange-btn">
                    <span>
                      <i class="fa fa-calendar"></i> Fecha
                    </span>
                                <i class="fa fa-caret-down"></i>
                            </button>
                        </div>
                    </div>
</div>

                <div class="col-md-2" >
                    <a role="button" class="btn  btn-info btn-md pull-right config_nodos" href="/datos">buscar</a>
</div>
                </div>




            </form>
    </div>





















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
        <div class="input-group" multiple="multiple">
            <tbody id="tasks-list" name="tasks-list" multiple="multiple">

            @foreach($aets as $aet)
                <tr>

                    <td>{{$aet->description}}</td>
                    <td>{{$aet->AET}}</td>
                    <td>{{$aet->host}}</td>
                    <td>{{$aet->port}}</td>


                    <td>
                        <input type="radio" name="AETS" multiple="multiple"  aria-label="...">
                    </td>

                </tr>
            @endforeach




            </tbody>
        </div>

    </table>

@stop
@section('sidebar-fechas')




@stop

@section('sidebar-modality')




    @stop

    @section('patients')


        <div class="row marketing">

            <div class="accordion">
                <div class="accordion-group">

                    <div class="accordion-heading level1 ">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>NAME</th>
                                    <th> PATIENT</th>


                            </tr>
                            </thead>
                        <tr>
                       <td><a id="button" type="" class="" data-toggle="collapse" data-target="#estudios">
                               <span class="glyphicon glyphicon-collapse-down"></span>
                           </a>

                           <span>Juan solo</span></td>
                        <td><span>1234563445</span></td>


                            <td><button type="button" class="btn btn-info btn-xs pull-right" data-toggle="modal" data-target="#MODAL_DOWNLOAD"><span class="glyphicon glyphicon-trash"></span></button>
                             <button type="button" class="btn btn-info btn-xs pull-right" data-toggle="modal" data-target="#MODAL_DOWNLOAD"><span class="glyphicon glyphicon-download"></span></button>
                            <button type="button" class="btn btn-info btn-xs pull-right" data-toggle="modal" data-target="#MODAL_DOWNLOAD"><span class="glyphicon glyphicon-edit"></span></button></td>
                        </tr>
</table>
                    </div>
                </div>

                <div class="accordion-body collapse" id="estudios">
                    <div class="accordion-inner">

                        <div class="accordion" id="LEVEL2">
                            <div class="accordion-group">
                                <div class="accordion-heading level2">
                                    <table class="table">
                                    <td><a id="button1" type="" class="" data-toggle="collapse" data-target="#serie">
                                        <span class="glyphicon glyphicon-collapse-down"></span>
                                    </a>
                                    <span>
                                        ESTUDIO ALETA</span></td>
                                   <td><button type="button" class="btn btn-info btn-xs pull-right" data-toggle="modal" data-target="#MODAL_DOWNLOAD"><span class="glyphicon glyphicon-trash"></span></button>
                                    <button type="button" class="btn btn-info btn-xs pull-right" data-toggle="modal" data-target="#MODAL_DOWNLOAD"><span class="glyphicon glyphicon-download"></span></button>
                                    <button type="button" class="btn btn-info btn-xs pull-right" data-toggle="modal" data-target="#MODAL_DOWNLOAD"><span class="glyphicon glyphicon-edit"></span></button>
</td>
                                    </table>
                                </div>

                                <div class="accordion-body collapse" id="serie">
                                    <div class="accordion-inner">
                                        <div class="accordion" id="LEVEL3">
                                            <div class="accordion-group">
                                                <div class="accordion-heading level3">
                                                    <a id="button2" type="" class="" data-toggle="collapse" data-target="#imagenes">
                                                        <span class="glyphicon glyphicon-collapse-down"></span>
                                                    </a>
                                                    <span>
                                       serie 1</span>
                                                    <button type="button" class="btn btn-info btn-xs pull-right" data-toggle="modal" data-target="#MODAL_DOWNLOAD"><span class="glyphicon glyphicon-trash"></span></button>
                                                    <button type="button" class="btn btn-info btn-xs pull-right" data-toggle="modal" data-target="#MODAL_DOWNLOAD"><span class="glyphicon glyphicon-download"></span></button>
                                                    <button type="button" class="btn btn-info btn-xs pull-right" data-toggle="modal" data-target="#MODAL_DOWNLOAD"><span class="glyphicon glyphicon-edit"></span></button>

                                                </div>

                                                <div class="accordion-body collapse" id="imagenes">
                                                    <div class="accordion-inner">
                                                        <div class="accordion" id="LEVEL4">
                                                            <div class="accordion-group">
                                                                <div class="accordion-heading level4">
                                                                    <a class="accordion-toggle" data-parent="#LEVEL4" data-toggle="collapse" href="#imagenes">
                                                                        imagen1</a>
                                                                    <button type="button" class="btn btn-info btn-xs pull-right" data-toggle="modal" data-target="#MODAL_DOWNLOAD"><span class="glyphicon glyphicon-trash"></span></button>
                                                                    <button type="button" class="btn btn-info btn-xs pull-right" data-toggle="modal" data-target="#MODAL_DOWNLOAD"><span class="glyphicon glyphicon-download"></span></button>
                                                                    <button type="button" class="btn btn-info btn-xs pull-right" data-toggle="modal" data-target="#MODAL_DOWNLOAD"><span class="glyphicon glyphicon-edit"></span></button>

                                                                </div>

                                                            </div>
                                                            <div class="accordion-group">
                                                                <div class="accordion-heading level4">
                                                                    <a class="accordion-toggle" data-parent="#LEVEL4" data-toggle="collapse" href="#imagenes">
                                                                        imagen2</a>
                                                                    <button type="button" class="btn btn-info btn-xs pull-right" data-toggle="modal" data-target="#MODAL_DOWNLOAD"><span class="glyphicon glyphicon-trash"></span></button>
                                                                    <button type="button" class="btn btn-info btn-xs pull-right" data-toggle="modal" data-target="#MODAL_DOWNLOAD"><span class="glyphicon glyphicon-download"></span></button>
                                                                    <button type="button" class="btn btn-info btn-xs pull-right" data-toggle="modal" data-target="#MODAL_DOWNLOAD"><span class="glyphicon glyphicon-edit"></span></button>

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

                </div>

            </div>
        </div>
    @stop
    @section('actions')
        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">EXPORTAR</button>
        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">IMPORTAR</button>




    @stop






@section('footer')
    <p>&copy; 2016 www.hc-kr.com, Inc.</p>
@stop

