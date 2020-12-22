<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Customer
 * 
 * @property string $ID_CUSTOMER
 * @property int $ID_KELURAHAN
 * @property string $NAMA
 * @property string $ALAMAT
 * @property boolean|null $FOTO
 * @property string|null $FILE_PATH
 * 
 * @property Kelurahan $kelurahan
 *
 * @package App\Models
 */
class Customer extends Model
{
	protected $table = 'customer';
	protected $primaryKey = 'ID_CUSTOMER';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_KELURAHAN' => 'int',
	];

	protected $fillable = [
		'ID_KELURAHAN',
		'NAMA',
		'ALAMAT',
		'FOTO',
		'FILE_PATH'
	];

	public function kelurahan()
	{
		return $this->belongsTo(Kelurahan::class, 'ID_KELURAHAN');
	}
}
