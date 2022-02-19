<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Lodger
 * 
 * @property int $id
 * @property Carbon $trans_date
 * @property string $guest_name
 * @property string|null $guest_phone
 * @property string|null $guest_email
 * @property Carbon $check_in_date
 * @property Carbon $check_out_date
 * @property string|null $arriving_from
 * @property string|null $departing_to
 * @property Carbon $created_at
 * @property Carbon|null $updated_at
 * @property string $unique_trans_id
 * @property string|null $deleted_at
 *
 * @package App\Models
 */
class Lodger extends Model
{
	use SoftDeletes;
	protected $table = 'lodgers';

	protected $dates = [
		'trans_date',
		'check_in_date',
		'check_out_date'
	];

	protected $fillable = [
		'trans_date',
		'guest_name',
		'guest_phone',
		'guest_email',
		'check_in_date',
		'check_out_date',
		'arriving_from',
		'departing_to',
		'unique_trans_id'
	];
	
	public function scopeCurrentUser($query)
	{
		If(Auth::user()->role_id !== 1)	{
			return $query->where('vendor_id', Auth::user()->id);
		}
	}
}
