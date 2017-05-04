<?php

namespace App\Policies;

use App\Quote;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class QuotePolicy
{
	use HandlesAuthorization;
	
    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    
    /**
	 * Grant all abilities to administrator
	 * 
	 * @param \App\User $user
	 * @param string ability
	 * @return bool
	 */
	public function before(User $user, $ability)
	{
		if(session('role') === 'admin')
		{
			return true;
		}
	}
	
	/**
	 * Determine if the given quote can be changed by the user
	 * 
	 * @param \App\User $user
	 * @param \App\Quote $quote
	 * @return bool
	 */
	public function change(User $user, Quote $quote)
	{
		return $user->id === $quote->user_id;
	}
}

