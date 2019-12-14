@section('content')
    <h1>  Edit and Delete Client </h1>
    {!! Form::model($client,['method'=>'PATCH', 'action'=>['ClientController@update', $client->id]]) !!}
    {{csrf_field()}}

    <div class="form-group">
        {!! Form::label('first_name', 'Enter First Name') !!}
        {!! Form::text('first_name', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('last_name', 'Enter Last Name') !!}
        {!! Form::text('last_name', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('address', 'Enter Address') !!}
        {!! Form::text('address', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('zip_code', 'Enter Zip Code') !!}
        {!! Form::text('zip_code', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('city', 'Enter City') !!}
        {!! Form::text('city', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('state', 'Enter State') !!}
        {!! Form::text('state', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'Enter Email') !!}
        {!! Form::text('email', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Edit Client', ['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

    {!! Form::open(['method'=>'DELETE', 'action'=>['ClientController@destroy', $client->id]]) !!}
        {{csrf_field()}}

    {!! Form::submit('Delete Client', ['class'=>'btn btn-primary']) !!}

    {!! Form::close() !!}
@yield('footer')

