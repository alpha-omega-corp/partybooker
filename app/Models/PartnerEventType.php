<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PartnerEventType extends Model
{
	public $timestamps = false;

	protected $fillable = [
		'partners_info_id',
		'event_type_id'
	];
}
