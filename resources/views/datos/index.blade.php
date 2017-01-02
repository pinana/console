
@extends ('layout')
@section ('content')









<table class="table">
        <thead>
        <tr><th>ID</th>
            <th>Description</th>
            <th>AET</th>
            <th>HOST</th>
            <th>port</th>

        </tr>
        </thead>
        <div class="input-group">
        <tbody id="tasks-list" name="tasks-list">
        @foreach($aets as $aet)
            <tr id="">
                <td>{{$aet->id}}</td>
                <td>{{$aet->description}}</td>
                <td>{{$aet->AET}}</td>
                <td>{{$aet->host}}</td>
                <td>{{$aet->port}}</td>
                <td>
                    <button class="btn btn-warning btn-xs btn-detail open-modal" value="">Edit</button>
                    <button class="btn btn-danger btn-xs btn-delete delete-task" value="">Delete</button>
                    <button class="btn btn-danger btn-xs btn-delete delete-task" value="">ping</button>
                </td>
                <td>

                </td>

            </tr>
            @endforeach





        </div>
        </tbody>
    </table>



    @stop
@section ('content2')
   content 2
   <br>
   {{link_to_route('datos.create','Add new nodo', null, ['class'=>'btn btn-primary btn-xs'])}}
   <button class="btn btn-primary btn-xs btn-delete delete-task" value="">save</button>
@stop

@section ('content3')
    content 3

@stop

