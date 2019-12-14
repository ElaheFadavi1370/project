@section('content')
    <h1><a href="{{route('users.edit', $user->id)}}"> Edit and Delete User</a></h1>
    <li> User First Name is: {{$user->first_name}} </li>
    <li> User Last Name is: {{$user->last_name}} </li>
    <li> User Email Address is: {{$user->email}} </li>
    <li> User Password is: {{$user->password}} </li>
    @yield('footer')