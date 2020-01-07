@section('content')
    <h1>   Create Reservation </h1>
    <form   method="post"  action="/reservations">

        <input type="date"  name="Date In" >
        {{csrf_field()}}

        <input type="date"  name="Date Out" >

        <input type="integer"  name="Client ID" >

        <input type="integer"  name="Room ID"  >

        <input type="submit"   name="Submit">
    </form>
    @yield('footer')
