<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\PaymentTransactions
 *
 * @property int $id
 * @property int $plan_id
 * @property string $payment_id
 * @property string $partner_id
 * @property string $amount
 * @property string $status
 * @property string|null $message
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PaymentTransactions newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PaymentTransactions newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PaymentTransactions query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PaymentTransactions whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PaymentTransactions whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PaymentTransactions whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PaymentTransactions whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PaymentTransactions wherePartnerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PaymentTransactions wherePaymentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PaymentTransactions wherePlanId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PaymentTransactions whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\PaymentTransactions whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class PaymentTransactions extends Model
{
	public const STATUS_IN_PROGRESS = 'not_processed';
	public const STATUS_SUCCESS = 'success';
	public const STATUS_ERROR = 'error';

	protected $fillable = [
		'plan_id',
		'payment_id',
		'partner_id',
		'amount',
		'status',
		'message'
	];
}