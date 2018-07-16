<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Client;
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
        return view('clients.edit', ['client' => $client, 'page_title' => $this->page_title]);
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
        //$this->authorize('change', $client);

        if($client)
        {
            $client->delete();
            $data['message'] = 'Client deleted Successfully';
        }
        else 
        {
            $data['errors'] = 'Invalid Operation. You have not sufficient permissions';
        }
        
        return redirect('/')->with($data);
    }

    /**
     * Find a client
     *
     * @param App\Http\Requests\SearchRequest $request
     * @return Response
     */
    public function search(SearchRequest $request)
    {
        $page_title = $this->page_title;
        $search     = $request->input('search');
        $clients    = $this->repo->search(10, $search);
        $links      = $this->appends(compact('search'))->render();
        $info       = trans('clients.info-search') . '<strong>' . $search .'</strong>';

        return view('clients.index', compact('clients', 'links', 'info', 'page_title'));
    }
}

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use Illuminate\Http\Request;
use App\Repositories\CommentRepository;
use App\Repositories\UserRepository;

class CommentController extends Controller
{
    /**
     * The CommentController instance
     *
     * @var App\Repositories\CommentRepository $comment_gestion
     */
    protected $comment_gestion;

    /**
     * Create a new CommentController instance
     *
     * @param App\Repositories\CommentRepository $comment_gestion
     * @return void
     */
    public function __construct(CommentRepository $comment_gestion)
    {
        $this->comment_gestion = $comment_gestion;

        $this->middleware('admin', ['except' => ['store', 'edit', 'update', 'destroy']]);
        $this->middleware('auth', ['only' => ['store', 'update', 'destroy']]);
        $this->middleware('ajax', ['only' => ['updateSeen', 'update', 'valid']]);
    }

    /**
     * Display a listing of the resource
     *
     * @return Response
     */
    public function index()
    {
        $comments = $this->comment_gestion->index(4);
        $links = $comments->render();

        return view('back.comments.index', compact('comments', 'links'));
    }

    /**
     * Store a newly created resource in storage
     *
     * @param App\Requests\CommentRequest $request
     * @return Response 
     */
    public function store(CommentRequest $request)
    {   
        $this->comment_gestion->store($request->all(), $request->user()->id);

        if($request->user()->valid)
        {
            return redirect()->back();
        }

        return redirect()->back()->with('warning', 'Warning: Comment not stored');
    }

}

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use App\Repositories\RoleReposiory;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Http\Requests\RoleRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * The UserRepository instance
     *
     * @var App\Repositories\UserRepository
     */
    protected $user_gestion;

    /**
     * The RoleRepository instance
     *
     * @var App\Repositories\RoleRepository
     */
    protected $role_gestion;

    /**
     * Create a new UserController instance
     *
     * @param App\Repositories\UserRepository $user_gestion
     * @param App\Repositories\RoleRepository $role_gestion
     * @return void
     */
    public function __construct(UserRepository $user_gestion, RoleRepository $role_gestion)
    {
        $this->user_gestion = $user_gestion;
        $this->role_gestion = $role_gestion;

        $this->middleware('admin');
        $this->middleware('ajax', ['only' => 'updateSeen']);
    }

    /**
     * Display a listing of the resource
     *
     * @return Response
     */
    public function index()
    {
        return $this->indexSort('total');  
    }

    /**
     * Display a listing of the resource.
     *
     * @param string $role 
     * @return Response
     */
    public function indexSort($role)
    {
        $counts = $this->user_gestion->counts();
        $users = $this->user_gestion->index(4, $role);
        $links = $users->render();
        $roles = $this->role_gestion->all();

        return view('users.index', compact('users', 'links', 'counts', 'roles'));
    }

    /**
     * Show the form for creating a new resource
     *
     * @return Response
     */
    public function create()
    {
        return view('users.create', $this->role_gestion->getAllSelect());
    }

    /**
     * Store a newly created resource in storage
     *
     * @param App\Request\UserCreateRequest $request
     * @return Response
     */
    public function store(UserCreateRequest $request)
    {
        $this->client_gestion->store($request->all());

        return redirect('user')->with('ok', 'User created');
    }
}