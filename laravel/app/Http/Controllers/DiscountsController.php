<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Discount;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\DiscountRepository;

class DiscountsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $discounts = Discount::paginate(10);
        return view('discounts.index', ['discounts' => $discounts]);
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('discounts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $qoute = new discount();
        $qoute->title = $request->get('discount_id');
        $qoute->body = $request->get('status_id');
        $qoute->client_id = $request->get('client_id');
        $qoute->user_id = $request->user()->id;
        $qoute->qoute_date = Carbon::now(); // TODO: Remove qoute_date & use created_at timestamp
       
        $message = 'discount saved successfully';
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
        $discount = Discount::find($id);
        return view('discounts.show', ['discount' => $discount]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
        $discount = Discount::find($id);
        return view('discounts.edit', ['discount' => $discount]);
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
        $discount = discounts::find($id);
        if($discount)
        {
            $discount->delete();
            $data['message'] = 'discount deleted Successfully';
        }
        else 
        {
            $data['errors'] = 'Invalid Operation. You have not sufficient permissions';
        }
        
        return redirect('/')->with($data);
    }
}
