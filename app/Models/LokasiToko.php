<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class LokasiToko
 * 
 * @property string $BARCODE
 * @property string $NAMA_TOKO
 * @property float $LATITUDE
 * @property float $LONGITUDE
 * @property float $ACURACY
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class LokasiToko extends Model
{
	protected $table = 'lokasi_toko';
	protected $primaryKey = 'BARCODE';
	public $incrementing = false;

	protected $casts = [
		'LATITUDE' => 'float',
		'LONGITUDE' => 'float',
		'ACURACY' => 'float'
	];

	protected $fillable = [
		'NAMA_TOKO',
		'LATITUDE',
		'LONGITUDE',
		'ACURACY'
	];
}
