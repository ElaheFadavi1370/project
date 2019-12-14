@section('content')

    <h1>  Create Room </h1>
    {!! Form::open(['method'=>'POST', 'action'=>'RoomController@store','files'=>true]) !!}

    <div class="form-group">
        {!! Form::label('name', 'Enter Name') !!}
        {!! Form::text('name', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('floor', 'Enter Floor') !!}
        {!! Form::text('floor', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('description', 'Enter Description') !!}
        {!! Form::text('description', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::file('file', ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Create Room', ['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

    @yield('footer')