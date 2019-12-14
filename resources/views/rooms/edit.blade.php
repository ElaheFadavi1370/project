@section('content')
    <h1>   Edit Room   </h1>
    <form   method="post"  action="/rooms/{{$room->id}}">

        {{csrf_field()}}
        <input type="hidden"  name="_method"  value="PUT">

        <input type="text"  name="name"  placeholder="name">

        <input type="text"  name="floor"  placeholder="floor">

        <input type="text"  name="description"  placeholder="description">

        <input type="submit"  name="Submit"  value="UPDATE">
    </form>

    <form   method="post"  action="/rooms/{{$room->id}}">
        {{csrf_field()}}

        <input type="hidden"  name="_method"  value="DELETE">

        <input type="submit"   value="DELETE">

    @yield('footer')