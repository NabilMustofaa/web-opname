<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class StockCountProduct
 * 
 * @property int|null $TaskId
 * @property string|null $ProductCode
 * 
 * @property StockCountTask|null $stock_count_task
 *
 * @package App\Models
 */
class StockCountProduct extends Model
{
	protected $table = 'StockCountProduct';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'TaskId' => 'int'
	];

	public function stock_count_task()
	{
		return $this->belongsTo(StockCountTask::class, 'TaskId');
	}
}
