
@section('content')

    <div class="row">
        <div class="medium-12 large-12 columns">
            <h4 class="text-center">Clients</h4>
            <div class="medium-2  columns"><a class="button hollow success" href="{{ route('new_client') }}"> <h4 class="text-center">ADD NEW CLIENT</h4></a></div>
                <ul>
        @foreach($clients as $client)
                        <div class="medium-12 large-12 columns">  <td class="text-center">  {{ $client->first_name }} {{ $client->last_name }}</td>
                            <td>  <a class="hollow button" href="{{ route('show_client', ['client_id' => $client->id ]) }}">SHOW</a>
                       <a class="hollow button" href="{{ route('edit_client', ['client_id' => $client->id ]) }}">EDIT</a> </td>
                    @endforeach
    </ul>
@yield('footer')
