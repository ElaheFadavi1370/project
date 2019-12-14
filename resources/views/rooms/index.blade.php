@section('content')
    <ul>
        @foreach($rooms as $room)

            <div class="image-controller" >

                <img height="150" src="/photos/{{$room->path}}" alt="">

            </div>

         Room number: {{$room->name}} <br>Floor:{{$room->floor}}
            <td>  <a class="hollow button warning" href="{{ route('room_description', ['room_id' => $room->id ] ) }}">Description</a>
            </td>

              <td>  <a class="hollow button warning" href="{{ route('check_room', ['room_id' => $room->id ]) }}">BOOK THIS ROOM</a>
              </td>
        @endforeach
    </ul>
    @yield('footer')
