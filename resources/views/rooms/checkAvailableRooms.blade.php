@section('content')
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
</head>
<body>
<div class="row">
    <div class="text-center medium-12 large-12 columns">
        <h4>Client Booking</h4>
        <div class="text-center medium-2  columns"><b>
{{--               First Name: {{$client->first_name}}<br>--}}
{{--                Last Name: {{$client->last_name}}--}}
            </b></div>
        <div class="container">
            <br/>
            <form >
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                        <strong> Start Date : </strong>
                        <input class="date form-control"  type="text" id="startdate" name="startdate">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                        <strong> End Date : </strong>
                        <input class="date form-control"  type="text" id="enddate" name="enddate">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                        <button type="submit" class="btn btn-success">Search</button>
                    </div>
                </div>
            </form>
            <table class="stack"style=" margin-left: 40px">
                <thead>
                <tr>
                    <th width="200">Room</th>
                    <th width="200">Availability</th>
                    <th width="200">Action</th>
                </tr>
                </thead>
                <tbody>
                @unless( empty( $dateFrom ) || empty( $dateTo ) )
                    @foreach( $rooms as $room )
                        <tr>
                            <td>{{$room->name}}</td>
                            <td>
                                <div class="callout success">
                                    <h7>Available</h7>
                                </div>
                            </td>
                            <td>
                                <a class="hollow button warning"
                                   href="{{
                    route('book_room',
                      ['client_id' => $client->id,
                        'room_id' => $room->id,
                        'date_in' => $dateFrom,
                        'date_out' => $dateTo
                      ]
                    )
                  }}">BOOK NOW</a>
                            </td>
                        </tr>
                    @endforeach
                @endunless
                </tbody>
            </table>
        </div>
    </div>
</div>
    <script type="text/javascript">
        $('#startdate').datepicker({
            autoclose: true,
            format: 'yyyy-mm-dd'
        });
        $('#enddate').datepicker({
            autoclose: true,
            format: 'yyyy-mm-dd'
        });
    </script>
</body>
</html>
@yield('footer')