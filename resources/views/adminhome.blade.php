@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="alert alert-success">
                            <p> you are logged in as ADMINISTRATOR  </p>
                        </div>
                        <table class="table table-hover table-bordered">
                            <thead>
                            <tr>
                                <th width="5">NO.</th>
                                <th> Member Name </th>
                                <th> Email </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $key =>$value)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $value->name }}</td>
                                    <td>{{ $value->email }}</td>
                                </tr>
                            @endforeach
                            </tbody>

                        </table>
                            <table class="table table-hover table-bordered">
                                <thead>
                                <tr>
                                    <th width="5">NO.</th>
                                    <th> Room Name </th>
                                    <th> Floor </th>
                                    <th> Description </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($rooms as $key =>$value)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $value->name }}</td>
                                        <td>{{ $value->floor }}</td>
                                        <td>{{ $value->description }}</td>
                                    </tr>
                                @endforeach
                                </tbody>

                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
