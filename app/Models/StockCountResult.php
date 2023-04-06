<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class StockCountResult
 * 
 * @property int $Id
 * @property int|null $TaskId
 * @property string|null $BinLoc
 * @property string|null $ProductCode
 * @property string $ExpDate
 * @property int|null $WholeQty
 * @property int|null $LooseQty
 * @property string $Operator
 * @property string $CreatedDate
 * 
 * @property StockCountTask|null $stock_count_task
 *
 * @package App\Models
 */
class StockCountResult extends Model
{
	protected $table = 'StockCountResult';
	protected $primaryKey = 'Id';
	public $timestamps = false;

	protected $casts = [
		'TaskId' => 'int',
		'WholeQty' => 'int',
		'LooseQty' => 'int'
	];

	protected $fillable = [
		'TaskId',
		'BinLoc',
		'ProductCode',
		'ExpDate',
		'WholeQty',
		'LooseQty',
		'Operator',
		'CreatedDate'
	];

	public function stock_count_task()
	{
		return $this->belongsTo(StockCountTask::class, 'TaskId');
	}
}
