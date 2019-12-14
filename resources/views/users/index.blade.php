@section('content')
    <ul>
        @foreach($users as $user)
            <li> {{$user->all()}} </li>
        @endforeach
    </ul>
    @yield('footer')
