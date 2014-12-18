<?php

use Zizaco\Confide\ConfideUser;
use Zizaco\Confide\ConfideUserInterface;
use Zizaco\Entrust\HasRole;

class User extends Eloquent implements ConfideUserInterface {
	use HasRole, ConfideUser;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public function breweries()
	{
		return $this->belongsTo('Brewery');
	}

	// public function getRememberToken()
	// {
	//     return $this->remember_token;
	// }

	// public function setRememberToken($value)
	// {
	//     $this->remember_token = $value;
	// }

	// public function getRememberTokenName()
	// {
	//     return 'remember_token';
	// }


}
