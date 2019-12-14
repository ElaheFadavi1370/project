@section('content')

          <h1><a href="{{route('clients.edit', $client->id)}}">Show Client </a></h1>
            <li>  Client First Name is: {{$client->first_name}}</li>
            <li> Client Last Name is:  {{$client->last_name}} </li>
            <li> Client Address is:    {{$client->address}} </li>
            <li> Client Zip Code is:   {{$client->zip_code}} </li>
            <li> Client City is:       {{$client->city}} </li>
            <li> Client State is:      {{$client->state}} </li>
            <li> Client Email is:      {{$client->email}} </li>
    @yield('footer')
