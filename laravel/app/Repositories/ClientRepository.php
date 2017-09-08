<?php 

namespace App\Repositories;

use App\Models\Client;

class ClientRepository extends BaseRepository
{
	/**
	 * Create ClienRepository instance
	 *
	 * @param App\Models\Client $client
	 * @return void
	 */
	public function __construct(Client $client)
	{
		$this->model = $client;
	}
	
	/**
	 *  Get the number of clients 
	 * 
	 * @return Illuminate\Support\Collection 
	 */
	public function getCount()
	{
		return $this->model->count();
	}
}
