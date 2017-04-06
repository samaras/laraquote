<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Group;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\GroupRepository;
use App\Repositories\UserRepository;

class GroupsController extends Controller
{
    protected $page_title = 'Groups/Role';

    /**
     * GroupRepo object instance
     */
    protected $repo;

    /**
     * UserRepository object
     */
    protected $userRepo;

    /**
     * Constructor
     * 
     * @param GroupRepository
     * @param UserRepository
     * @return void
     */
    public function __construct(GroupRepository $group, UserRepository $user)
    {
        $this->middleware('auth');
        //$this->middleware('admin');

        $this->repo = $group;
        $this->userRepo = $user;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $groups = $this->repo->getPaginate(10);
        return view('groups.index', compact('groups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('groups.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $qoute = new group();
        $qoute->title = $request->get('discount_id');
        $qoute->body = $request->get('status_id');
        $qoute->client_id = $request->get('client_id');
        $qoute->user_id = $request->user()->id;
        $qoute->qoute_date = Carbon::now(); // TODO: Remove qoute_date & use created_at timestamp
       
        $message = 'group saved successfully';
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
        return view('groups.show', compact('group'));
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
        $group = groups::find($id);
        if($group)
        {
            $group->delete();
            $data['message'] = 'group deleted Successfully';
        }
        else 
        {
            $data['errors'] = 'Invalid Operation. You have not sufficient permissions';
        }
        
        return redirect('/')->with($data);
    }
}
