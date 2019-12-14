@section('content')

 <h1>  Create Client </h1>
 {!! Form::open(['method'=>'POST', 'action'=>'ClientController@store']) !!}

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
     {!! Form::submit('Create Client', ['class'=>'btn btn-primary']) !!}
 </div>

 {!! Form::close() !!}

 @if(count($errors)>0)
     <ul>
     @foreach($errors->all() as $error)
         <li>    {{$error}}  </li>
     </ul>
@endforeach
@endif
@yield('footer')