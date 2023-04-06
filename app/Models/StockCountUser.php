<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable; 
/**
 * Class StockCountUser
 * 
 * @property int|null $TaskId
 * @property string|null $Operator
 * 
 * @property StockCountTask|null $stock_count_task
 *
 * @package App\Models
 */
class StockCountUser extends Authenticatable
{
	protected $table = 'StockCountUser';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'TaskId' => 'int'
	];

	protected $primaryKey =  [
		'TaskId',
		'Operator'
	];

	protected $fillable = [
		'TaskId',
		'Operator'
	];

	public function stock_count_task()
	{
		return $this->belongsTo(StockCountTask::class, 'TaskId');
	}

	public function getAuthPassword()
	{
		return '$2a$12$Fy1ZvKgc5Vdzf1NBvzozcuGG38rQCYM6V7zOCnpBctgcTVbfhofF6';
	}

	public function getAuthIdentifierName()
	{
		return 'Operator';
	}
}
