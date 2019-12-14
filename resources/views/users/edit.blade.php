@section('content')
    <h1>   Edit User  </h1>
    <form   method="post"  action="/users/{{$user->id}}">

        {{csrf_field()}}
        <input type="hidden"  name="_method"  value="PUT">

        <input type="text"  name="first name"  placeholder="first name">

        <input type="text"  name="last name"  placeholder="last name">

        <input type="text"  name="email"  placeholder="email">

        <input type="text"  name="password"  placeholder="password">

        <input type="text"  name="confirm password"  placeholder="confirm password">

        <input type="submit"  name="Submit"  value="UPDATE">
    </form>

    <form   method="post"  action="/users/{{$user->id}}">
        {{csrf_field()}}

        <input type="hidden"  name="_method"  value="DELETE">

        <input type="submit"   value="DELETE">

    @yield('footer')