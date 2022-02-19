<?php

/**
 * Created by Reliese Model.
 */

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Vendor
 * 
 * @property int $id
 * @property string $hotel_name
 * @property string $location
 * @property string|null $state_id
 * @property string $contact_phone
 * @property string $directors_name
 * @property string|null $cac_no
 * @property string|null $contact_email
 * @property string $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $logo_img
 *
 * @package App\Models
 */
class Vendor extends Model
{
	protected $table = 'vendors';

	protected $fillable = [
		'hotel_name',
		'location',
		'state_id',
		'contact_phone',
		'directors_name',
		'cac_no',
		'contact_email',
		'status',
		'logo_img'
	];
}
