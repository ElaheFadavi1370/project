@section('content')
    <h1><a href="{{route('rooms.edit', $room->id)}}">Edit and Delete Room</a></h1>
   <li>  Room Name is: "{{$room->name}}" </li>
    <li> Floor Number is:"{{$room->floor}}" </li>
    <li> Description:"{{$room->description}}" </li>

    @yield('footer')