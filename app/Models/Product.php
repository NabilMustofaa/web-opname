<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 * 
 * @property string|null $ProductCode
 * @property string|null $ProductName
 * @property string $Category
 * @property string $Brand
 * @property string $Variant
 * @property string $Barcode1
 * @property string $Barcode2
 * @property string $AliasCode
 * @property int|null $WholeUOMQty
 *
 * @package App\Models
 */
class Product extends Model
{
	protected $table = 'Product';
	protected $primaryKey = 'ProductCode';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'WholeUOMQty' => 'int'
	];

	protected $fillable = [
		'ProductName',
		'Category',
		'Brand',
		'Variant',
		'Barcode1',
		'Barcode2',
		'AliasCode',
		'WholeUOMQty'
	];
}
