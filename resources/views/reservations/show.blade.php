@section('content')
    <li> Reservation ID is:    {{$reservation->id}} </li>
    <li> Date In is:  {{$reservation->date_in}} </li>
    <li> Date Out is:    {{$reservation->date_out}} </li>
    <li> Client ID is:   {{$reservation->client_id}} </li>
    <li> Room ID is:       {{$reservation->room_id}} </li>
    @yield('footer')
