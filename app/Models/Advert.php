<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Advert extends Model
{

	public const STATUS_ACTIVE = 1;
	public const STATUS_DRAFT = 2;
	public const STATUS_INACTIVE = 3;

	public function service(): MorphTo
    {
		return $this->morphTo();
	}

}
