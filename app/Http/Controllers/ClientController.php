<?php

namespace App\Http\Controllers;
use App\Client;
use App\Http\Requests\CreateClientsRequest;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    private $client;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct( Client $client )
    {
        $this->client = $client;
    }

    public function index()
    {
        $data = [];

        $data['clients'] = $this->client->all();

      //$clients=$this->Client->all();
        return view ('clients.index', $data);
      // return $clients=Client::all();
        //return 'this is working';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateClientsRequest $request)
    {

       // return $request->all();
        Client::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client=Client::findOrfail($id);
        return view ('clients.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client=Client::findOrfail($id);
        return view('clients.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       // return "hiiiiiiiiiiiiiiiiii";
        $client=Client::findOrfail($id);
        $client->update($request->all());
        return redirect('clients');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client=Client::findOrfail($id);
        $client->delete();
        return redirect('clients');
    }
}
