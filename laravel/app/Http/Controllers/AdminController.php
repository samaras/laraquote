<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Quote;
use App\Client;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;
use App\Repositories\ClientRepository;
use App\Repositories\QuoteRepository;

class AdminController extends Controller
{

	/**
	 * Constructor
	 */
	public function __construct()
	{
		$this->middleware('auth');
		//$this->middleware('admin');
	}

	/**
	 * Display a default dashboard
	 *
	 * @return Response
	 */
	public function index()
	{
		$user_repo = new UserRepository(new User());
		
		// Get last 10 new users
		$users = $user_repo->getPaginate(10);
		// Get total number of users
		$userCount = $user_repo->getCount();
		
		$quote_repo = new QuoteRepository(new Quote());
		// Total number of quotes
		$quoteCount = $quote_repo->getCount();
		
		$client_repo = new ClientRepository(new Client());
		// Total number of clients
		$clientCount = $client_repo->getCount();
		
		return view('admin.index', ['userCount' => $userCount, 'quoteCount' => $quoteCount, 'clientCount' => $clientCount]);
	}
}
