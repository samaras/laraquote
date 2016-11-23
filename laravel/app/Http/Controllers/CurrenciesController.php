<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Currency;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\CurrencyRepository;

class CurrenciesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $currencies = Currency::paginate(2);
        return view('currencies.index', ['currencies' => $currencies, 'page_title' => 'Currency']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('currencies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $currency = new Currency();
        $currency->currency = $request->get('currency');
        $currency->code = $request->get('code');
        $currency->symbol = $request->get('symbol');
       
        $message = 'Currency saved successfully';
        $currency->save();

        return redirect('edit/'. $currency->id)->withMessage($message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $currency = Currency::find($id);
        return view('currencies.show', ['currency' => $currency]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $currency = Currency::find($id);
        return view('currencies.edit', ['currency' => $currency]);
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
        $currency = Currency::find($id);
        if($currency)
        {
            $currency->delete();
            $data['message'] = 'Currency deleted Successfully';
        }
        else 
        {
            $data['errors'] = 'Invalid Operation. You have not sufficient permissions';
        }
        
        return redirect('/')->with($data);
    }
}
