@section('content')
    <table class="stack"style=" margin-left: 40px">
        <thead>
        <tr>
            <th width="200">Room</th>
            <th width="200">Name</th>
            <th width="200">Start Date</th>
            <th width="200">End Date</th>
            <th width="200">Action</th>
        </tr>
        </thead>
        <tbody>
   @foreach( $reservations as $reservation)
       <tr>
   <td> {{$reservation->client_id}}</td>
   <td> {{$reservation->room_id}}</td>
   <td> {{$reservation->startdate}}</td>
   <td> {{$reservation->enddate}}</td>
   <td>   <a class="hollow button warning"
         href="{{route('reservation_create')}}">Add Reservation <br><a href="{{ route('reservation_edit')}}">Edit or Delete Reservation</a>
@endforeach
        </tbody>
    </table>
@yield('footer')