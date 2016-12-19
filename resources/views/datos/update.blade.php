<div clas="panel-heading">editar</div>
{!! Form::open(array('route'=> 'datos.store')) !!}
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