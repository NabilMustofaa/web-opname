<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class StockCountLocation
 * 
 * @property int|null $TaskId
 * @property string|null $BinLoc
 * @property string $ProductCode
 * 
 * @property StockCountTask|null $stock_count_task
 *
 * @package App\Models
 */
class StockCountLocation extends Model
{
	protected $table = 'StockCountLocation';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'TaskId' => 'int'
	];

	protected $fillable = [
		'ProductCode'
	];

	public function stock_count_task()
	{
		return $this->belongsTo(StockCountTask::class, 'TaskId');
	}
}
