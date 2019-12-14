@section('content')
    <ul>
        @foreach($reservations as $reservation)
            <li> {{$reservation->all()}} </li>
        @endforeach
    </ul>
    @yield('footer')
