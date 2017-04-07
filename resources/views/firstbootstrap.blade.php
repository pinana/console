@extends('master')
@extends('modales')


@section('sidebar-up')

    <div class="col-md-12">

        {{ Form::open(array('method' =>'GET','url'=>action('searchcontroller@search'))) }}

            <div class="form-group">

                <div class="col-md-1" >
                 <input type="text" name="ID" class="form-control" placeholder="ID">
                </div>

                <div class="col-md-1" >
                    <input type="text" name="AN" class="form-control" placeholder="AN">
                </div>

                <div class="col-md-1" >
                    <input type="text" name="NAME" class="form-control" placeholder="NAME">
                </div>

                <div class="col-md-2 tag_col" >
                <div class="input-group">

                    <div class="col-md-5 tags" >

                            <input type="text" name="Tags" class="form-control" placeholder="Tags">
                    </div>
                    <div class="col-md-7 tags" >
                        <select id="my-se" name="my-se" multiple="multiple">
                            <option name="tag" value="DESCRIPTION">DESCRIPTION</option>
                            <option name="tag" value="CT">NAME</option>
                            <option name="tag"value="CT">UID</option>
                            <option name="tag" value="CT">STUDY NUMBER</option>
                            <option name="tag" value="CT">PATIENT ID</option>

                        </select>
                    </div>






                </div>
                </div>



                <div class="col-md-2" >
                    <select id="my-select" name="modality" multiple="multiple">
                        <option name="modality" value="CT">CT</option>
                        <option name="modality" value="CT">xm</option>
                        <option name="modality" value="CT">CT</option>
                        <option name="modality" value="CT">CT</option>
                        <option name="modality" value="CT">CT</option>
                        <option name="modality" value="CT">CT</option>
                        <option name="modality" value="CT">CT</option>
                    </select>
                    </div>

                    <div class="col-md-2" >


                    <div class="form-group">
                        <input type="text" value="" id="inputstart" name="start" hidden />
                        <input type="text" value="" id="inputend" name="end" hidden />
                        <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%">
                            <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>&nbsp;
                           <span></span> <b class="caret"></b>
                        </div>




                    </div>
</div>

                <div class="col-md-2" >
                    <div>
                        {{Form::submit('Search', array('class' => 'btn')) }}
                    </div>
                    {{ Form::close() }}
</div>
                </div>






    </div>
















@stop




@section('sidebar-left')
            <div id="checkboxlist">



    <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>Description</th>
            <th>AETS</th>
            <th>HOST</th>
            <th>port</th>



        </tr>
        </thead>
        <div class="input-group box_nodos" multiple="multiple">
            <tbody id="tasks-list" name="tasks-list" multiple="multiple">
            <div class="col-md-12"  >
                {{ Form::open(array('method' =>'GET','url'=>action('searchcontroller@aets'))) }}
            @foreach($aets as $aet)

                <tr>


                    <td>{{$aet->description}}</td>
                    <td>{{$aet->AET}}</td>
                    <td>{{$aet->host}}</td>
                    <td>{{$aet->port}}</td>
                    <td> {{ Form::checkbox('ch[]', ($aet->id . $aet->description), false) }}</td>
                    <td> <input type="checkbox"  name="ch[]" value="{{$aet->description}}" false  id="checkboxlist"></td>




                </tr>

            @endforeach
                {!! Form::submit('Click Me!') !!}
                {!! Form::close() !!}
            </div>






            </tbody>

        </div>

    </table>
            </div>
@stop


@section('sidebar-fechas')




@stop

@section('sidebar-modality')




    @stop

    @section('patients')


        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">EXPORTAR</button>
        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">IMPORTAR</button>
        <table class="table">
            <thead align="left" valign="top" id="id4f" title="">
            <tr class="patient" title="">
                <td rowspan="5" class="expand" title="">
                    <a id="button2" type="" class="closeall" data-toggle="collapse" data-target="#estudi">
                        <span class="glyphicon glyphicon-collapse-down"></span>
                    </a>
                </td>
                <th colspan="5">Patient Name</th>
                <th>Patient ID/Issuer</th>
                <th>Birth Date</th>
                <th>Sex</th>
                <th colspan="3">Comments</th>
                <th colspan="6"></th>
                <th>

                </th>
            </tr>

            <tr class="study collapse in" title=""  id="estudi" >
                <td rowspan="4" class="" title="">
                    <a id="button2" type="" class="closepps" data-toggle="collapse" data-target="#pps">
                        <span class="glyphicon glyphicon-collapse-down"></span>
                    </a>
                </td>
                <th colspan="4">Study Date/Time</th>
                <th>Study ID</th>
                <th>Accession No</th>
                <th>Modality</th>
                <th>Description</th>
                <th>#S/#I</th>
                <th>Availability</th>
                <th colspan="6"></th>
                <th>

                </th>
            </tr>
            <tr class="pps collapse " title=""  id="pps" >
                <td rowspan="3" class="expand" title="">
                    <a id="button2" type="" class="closeserie" data-toggle="collapse" data-target="#estudi3">
                        <span class="glyphicon glyphicon-collapse-down"></span>
                    </a>
                </td>
                <th colspan="3">PPS Start Date/Time</th>
                <th>PPS ID</th>
                <th>SPS ID</th>
                <th>Modality</th>
                <th>Description</th>
                <th>#S/#I</th>
                <th>Status</th>
                <th colspan="7"></th>
            </tr>

            <tr class="series collapse" title="" id="estudi3">
                <td rowspan="2" class="expand" title="">
                    <a id="button2" type="" class="closeinstance" data-toggle="collapse" data-target=".file">
                        <span class="glyphicon glyphicon-collapse-down"></span>
                    </a>
                </td>
                <th colspan="2">Series Date/Time</th>
                <th>Series No</th>
                <th>Source AET</th>
                <th>Modality</th>
                <th>Description</th>
                <th>#I</th>
                <th>Availability</th>
                <th colspan="6"></th>

            </tr>
            <tr class="file collapse"  title="">
                <th colspan="1">Instance Date/Time</th>
                <th></th>
                <th>Instance No</th>
                <th colspan="2">SOP Class UID</th>



                <th>Description</th>
                <th></th>
                <th> Availability</th>
                <th colspan="7"></th>
            </tr>
            </thead>
            <tbody align="left" valign="top" id="id190">

            <tr id="id191" class="collapse" >
                <td rowspan="33" class="expand">
                    <a id="button2" type="" class="" data-toggle="collapse" data-target="#studies-avalos">
                        <span class="glyphicon glyphicon-collapse-down"></span>
                    </a>
                </td>
                <td colspan="5" title="Patient Name. format: FAMILY[^GIVEN[^MIDDLE[^PREFIX[^SUFFIX]]]]">AVALOS ESPINOLA FRANCISCA</td>
                <td><span title="Patient ID (Format: id[ / issuer])">20235449</span>
                </td>
                <td title="Patient Birthdate (Format:d/MM/yyyy)">5/06/1965</td>
                <td title="Patient Sex">F</td>
                <td colspan="3" title="Patient Comments"></td>
                <td>
                    <button type="button" class="btn btn-info btn-xs pull-right" data-toggle="modal" data-target="#MODAL_DOWNLOAD"><span class="glyphicon glyphicon-trash"></span></button>
                </td>
                <td>
                    <button type="button" class="btn btn-info btn-xs pull-right" data-toggle="modal" data-target="#MODAL_DOWNLOAD"><span class="glyphicon glyphicon-download"></span></button>
                </td>
                <td>
                    <button type="button" class="btn btn-info btn-xs pull-right" data-toggle="modal" data-target="#MODAL_DOWNLOAD"><span class="glyphicon glyphicon-edit"></span></button>
                </td>
                <td>

                </td>
                <td>
                </td>

                <td>

                </td>
                <td>
                    <input type="checkbox" name="patients:0:row:selected" id="id196">
                </td>
            </tr>

            <tr id="studies-avalos" >
                <td rowspan="32" class="expand">
                    <a id="button2" type="" class="" data-toggle="collapse" data-target="#pps">
                        <span class="glyphicon glyphicon-collapse-down"></span>
                    </a>
                </td>
                <td colspan="4" title="Study Date / Time">23/05/2016 10:55</td>
                <td title="Study ID">2234</td>
                <td title="Accession Number">302747</td>
                <td title="Modalities">MR</td>
                <td><div class="longText" title="MANO IZQ">MANO IZQ</div></td>
                <td><span title="Number of series">8</span>/<span title="Number of Instances">175</span>
                </td>
                <td></td>
                <td>
                    <button type="button" class="btn btn-info btn-xs pull-right" data-toggle="modal" data-target="#MODAL_DOWNLOAD"><span class="glyphicon glyphicon-trash"></span></button>
                </td>
                <td>
                    <button type="button" class="btn btn-info btn-xs pull-right" data-toggle="modal" data-target="#MODAL_DOWNLOAD"><span class="glyphicon glyphicon-download"></span></button>
                </td>
                <td>
                    <button type="button" class="btn btn-info btn-xs pull-right" data-toggle="modal" data-target="#MODAL_DOWNLOAD"><span class="glyphicon glyphicon-edit"></span></button>
                </td>
                <td>

                </td>
                <td>


                </td>
                <td>



                <td>
                    <input type="checkbox" name="patients:0:studies:0:row:selected" id="id338" >
                </td>
            </tr>


            <tr class="pps" id="pps">
                <td rowspan="9" class="expand">
                    <a id="button2" type="" class="" data-toggle="collapse" data-target="#pps">
                        <span class="glyphicon glyphicon-collapse-down"></span>
                    </a>
                </td>
                <td colspan="3" title="Performed Procedure Step Date / Time">23/05/2016 10:55</td>
                <td title="Performed Procedure Step ID"></td>
                <td title="Scheduled Step Procedure Step ID"></td>
                <td title="Modality">MR</td>
                <td><div class="longText"></div></td>
                <td><span title="Number of Series">8</span>/<span title="Number of Instances">175</span>
                </td>
                <td>
                    <span title="Performed Procedure Step Status"></span>
                </td>


            </tr>
            <tr id="idaf" class="series">
                <td rowspan="1" class="expand">
                    <a id="button2" type="" class="" data-toggle="collapse" data-target="#pps">
                        <span class="glyphicon glyphicon-collapse-down"></span>
                    </a>
                </td>
                <td colspan="2" title="Series Date / Time">23/05/2016 10:56</td>
                <td title="Series Number">2</td>
                <td title="Source AET">ACTUALPACS</td>
                <td title="Modality">MR</td>
                <td><div class="longText" title="Loc FOV GRANDE">Loc FOV GRANDE</div></td>
                <td title="Number of Instances">21</td>
                <td title="Series Availability">ONLINE</td>


                <td>
                    <button type="button" class="btn btn-info btn-xs pull-right" data-toggle="modal" data-target="#MODAL_DOWNLOAD"><span class="glyphicon glyphicon-trash"></span></button>
                </td>
                <td>
                    <button type="button" class="btn btn-info btn-xs pull-right" data-toggle="modal" data-target="#MODAL_DOWNLOAD"><span class="glyphicon glyphicon-download"></span></button>
                </td>
                <td>
                    <button type="button" class="btn btn-info btn-xs pull-right" data-toggle="modal" data-target="#MODAL_DOWNLOAD"><span class="glyphicon glyphicon-edit"></span></button>
                </td>
                <td>

                </td>
                <td>


                </td>
                <td>


                </td>
                <td>
                    <input type="checkbox" name="patients:0:studies:0:ppss:0:series:0:row:selected" id="idb4" onclick="var wcall=wicketAjaxPost('?wicket:interface=:0:modules:panel:form:patients:0:studies:0:ppss:0:series:0:row:selected::IBehaviorListener:0:-1', wicketSerialize(Wicket.$('idb4')),function() { }.bind(this),function() { }.bind(this), function() {return Wicket.$('idb4') != null;}.bind(this));" title="Select Series for further processing">
                </td>
            </tr>

            <tr id="id16b" onclick="var wcall=wicketAjaxGet('?wicket:interface=:0:modules:panel:form:patients:0:studies:4:ppss:0:series:0:instances:0:row::IBehaviorListener:0:-1',function() { }.bind(this),function() { }.bind(this), function() {if (event == null || !event.ctrlKey) return false;var t = (event.target) ? event.target : (event.srcElement) ? event.srcElement : null;if (t.nodeType == 3) t = t.parentNode; return t.nodeName == 'TD' || t.nodeName == 'SPAN'}.bind(this));" class="instance">
                <td rowspan="2" class="expand">

                </td>
                <td title="Instance Date / Time">30/11/2016 11:55</td>
                <td></td>
                <td title="Instance Number">1</td>
                <td colspan="2" title="SOP Class UID">1.2.840.10008.5.1.4.1.1.1.1</td>
                <td><div class="longText" title="MONOCHROME2, 16 bits, 847x1172x1">MONOCHROME2, 16 bits, 847x1172</div></td>
                <td>
                </td>
                <td title="Instance Availability">ONLINE</td>


                <td>
                    <button type="button" class="btn btn-info btn-xs pull-right" data-toggle="modal" data-target="#MODAL_DOWNLOAD"><span class="glyphicon glyphicon-trash"></span></button>
                </td>
                <td>
                    <button type="button" class="btn btn-info btn-xs pull-right" data-toggle="modal" data-target="#MODAL_DOWNLOAD"><span class="glyphicon glyphicon-download"></span></button>
                </td>
                <td>
                    <button type="button" class="btn btn-info btn-xs pull-right" data-toggle="modal" data-target="#MODAL_DOWNLOAD"><span class="glyphicon glyphicon-edit"></span></button>
                </td>

                <td></td>
                <td></td>
                <td></td>
                <td><input type="checkbox" name="patients:0:studies:4:ppss:0:series:0:instances:0:row:selected" id="id171" onclick="var wcall=wicketAjaxPost('?wicket:interface=:0:modules:panel:form:patients:0:studies:4:ppss:0:series:0:instances:0:row:selected::IBehaviorListener:0:-1', wicketSerialize(Wicket.$('id171')),function() { }.bind(this),function() { }.bind(this), function() {return Wicket.$('id171') != null;}.bind(this));" title="Select Instance for further processing"></td>
            </tr>



            </tbody>



        </table>





    @stop







