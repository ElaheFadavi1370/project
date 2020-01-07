
@section('content')

    <div class="row">
        <div class="medium-12 large-12 columns">
            <h4 class="text-center">Users</h4>
            <div class="medium-2  columns"><a class="button hollow success" href="{{ route('new_user') }}"> <h4 class="text-center">ADD NEW USER</h4></a></div>
            <ul>
                @foreach($users as $user)
                    <div class="medium-12 large-12 columns">  <td class="text-center">  {{ $user->name }} {{ $user->email}} {{$user->password}}</td>
                        <td>  <a class="hollow button" href="{{ route('show_user', ['user_id' => $user->id ]) }}">SHOW</a>
                            <a class="hollow button" href="{{ route('edit_user', ['user_id' => $user->id ]) }}">EDIT</a> </td>
                @endforeach
            </ul>
  @yield('footer')
