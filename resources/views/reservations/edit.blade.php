@section('content')
    <h1>   Edit Reservation  </h1>
    <form   method="post"  action="/reservations/{{$reservation->id}}">

        {{csrf_field()}}
        <input type="hidden"  name="_method"  value="PUT">

        <input type="integer"  name="reservation ID"  placeholder="reservation ID">

        <input type="date"  name="date in"  placeholder="date in">

        <input type="date"  name="date out"  placeholder="date out">

        <input type="integer"  name="client ID"  placeholder="client ID">

        <input type="integer"  name="room ID"  placeholder="room ID">

        <input type="submit"  name="Submit"  value="UPDATE" >
    </form>

    <form   method="post"  action="/reservations/{{$reservation->id}}">
        {{csrf_field()}}

        <input type="hidden"  name="_method"  value="DELETE">

        <input type="submit"   value="DELETE">

    @yield('footer')