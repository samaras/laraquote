<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Quote;
use App\Client;
use App\User;
use App\Status;
use App\Discount;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\QuoteRepository;
use App\Repositories\UserRepository;
use App\Repositories\ClientRepository;

class QuotesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $quotes = Quote::paginate(10);
        return view('quotes.index', ['quotes' => $quotes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $clients = Client::lists('contact_person', 'id');
        $users = User::lists('email', 'id');
        $status = Status::lists('status', 'id');
        $discounts = Discount::lists('discount', 'id');

        return view('quotes.create', ['clients' => $clients, 'users' => $users, 'status' => $status, 'discounts' => $discounts]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $qoute = new Quote();
        
        $qoute->title = $request->get('discount_id');
        $qoute->body = $request->get('status_id');
        $qoute->client_id = $request->get('client_id');
        $qoute->user_id = $request->user()->id;
        $qoute->qoute_date = Carbon::now(); // TODO: Remove qoute_date & use created_at timestamp
       
        $message = 'Quote saved successfully';
        $qoute->save();
        return redirect('edit/'. $qoute->id)->withMessage($message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $quote = Quote::find($id);
        return view('quotes.show', ['quote' => $quote]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $clients = Client::lists('contact_person', 'id');
        $users = User::lists('email', 'id');
        $status = Status::lists('status', 'id');
        $discount = Discount::lists('discount', 'id');

        $quote = Quote::find($id);
        return view('quotes.edit', ['quote' => $quote, 'clients' => $clients, 'users' => $users, 'status' => $status, 'discounts' => $discounts]);
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
        $quote = Quotes::find($id);
        if($quote)
        {
            $quote->delete();
            $data['message'] = 'Quote deleted Successfully';
        }
        else 
        {
            $data['error'] = 'Invalid Operation. You have not sufficient permissions';
        }
        
        return redirect('/')->with($data);
    }
}
