<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Status;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\StatusRepository;

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $status = Status::paginate(10);
        return view('status.index', ['status' => $status]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('status.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $status = new Status();
        $status->status = $request->get('status');
        
        $message = 'Quote status saved successfully';
        $status->save();
        return redirect('edit/'. $status->id)->withMessage($message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $status = Status::find($id);
        return view('status.show', ['status' => $status]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $status = Status::find($id);
        return view('status.edit', ['status' => $status]);
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
        $status = Status::find($id);
        if($status)
        {
            $status->delete();
            $data['message'] = 'status deleted Successfully';
        }
        else 
        {
            $data['errors'] = 'Invalid Operation. You have not sufficient permissions';
        }
        
        return redirect('/')->with($data);
    }
}
