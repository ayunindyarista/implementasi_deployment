<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Barcode
 * 
 * @property string $ID_BARANG
 * @property string $NAMA_BARANG
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Barcode extends Model
{
	protected $table = 'barcode';
	protected $primaryKey = 'ID_BARANG';
	public $incrementing = false;

	protected $fillable = [
		'NAMA_BARANG'
	];
}
