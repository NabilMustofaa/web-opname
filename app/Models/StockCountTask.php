<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class StockCountTask
 * 
 * @property int $Id
 * @property string|null $Description
 * @property string|null $Location
 * @property string|null $StartDate
 * @property string|null $EndDate
 * @property int|null $KeyWord
 * @property string|null $CreatedDate
 *
 * @package App\Models
 */
class StockCountTask extends Model
{
	protected $table = 'StockCountTask';
	protected $primaryKey = 'Id';
	public $timestamps = false;

	protected $casts = [
		'KeyWord' => 'int'
	];

	protected $fillable = [
		'Description',
		'Location',
		'StartDate',
		'EndDate',
		'KeyWord',
		'CreatedDate'
	];
}
