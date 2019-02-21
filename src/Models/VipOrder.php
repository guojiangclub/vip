<?php

namespace iBrand\Component\Vip\Models;

use Illuminate\Database\Eloquent\Model;

class VipOrder extends Model
{
	protected $table = 'vip_order';

	protected $guarded = ['id'];

	public function plan()
	{
		return $this->belongsTo(VipPlan::class, 'plan_id');
	}
}