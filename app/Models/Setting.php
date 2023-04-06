<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class Setting
 * 
 * @property string|null $UserName
 * @property string|null $Password
 *
 * @package App\Models
 */
class Setting extends Authenticatable
{
	protected $table = 'Setting';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'UserName',
		'Password'
	];

	public function getAuthPassword()
	{
		return $this->Password;
	}

	public function getAuthIdentifierName()
	{
		return 'UserName';
	}

	public function getAuthIdentifier()
	{
		return 'UserName';
	}



	
}
