<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Client;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\ClientRepository;

class ClientsController extends Controller
{
	protected $page_title = 'Clients';

    /**
     * ClientsRepository instance
     */
    protected $repo;

    /**
     * Constructor 
     *
     * @param ClientsRepository $clients
     * @return void
     */
    public function __construct(ClientRepository $client)
    {
        $this->repo = $client;
    }
	
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $clients = $this->repo->getPaginate(10);
        $page_title = $this->page_title;
        
        return view('clients.index', compact('clients','page_title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $client = new Client();
        $client->company = $request->get('company');
        $client->address = $request->get('address');
        $client->contact_person = $request->get('contact_person');
        $client->address_line1 = $request->get('address_line1');
        $client->address_line2 = $request->get('address_line2');
        $client->address_line3 = $request->get('address_line3');
        $client->province = $request->get('province');
        $client->postal_code = $request->get('postal_code');
        $client->phone_number = $request->get('phone_number');
        $client->cell_number = $request->get('cell_number');
       
        $message = 'client saved successfully';
        $client->save();
        return redirect('edit/'. $client->id)->withMessage($message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $client = Client::find($id);
        return view('clients.show', ['client' => $client]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        // get the client 
        $client = Client::find($id);
        return view('clients.edit', ['client' => $client]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $client = Client::find($id);
        if($client)
        {
            $client->delete();
            $data['message'] = 'client deleted Successfully';
        }
        else 
        {
            $data['errors'] = 'Invalid Operation. You have not sufficient permissions';
        }
        
        return redirect('/')->with($data);
    }
}
