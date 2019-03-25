<?php

namespace iBrand\Component\Vip\Models;

use Illuminate\Database\Eloquent\Model;

class VipMember extends Model
{
	protected $table = 'vip_member';

	protected $guarded = ['id'];

	public function plan()
	{
		return $this->belongsTo(VipPlan::class, 'plan_id');
	}

	public function scopeDefaultPlan($query, $user_id)
	{
		return $query->with('plan')->where('is_default', 1)->where('status', 1)->where('user_id', $user_id)->get();
	}
}