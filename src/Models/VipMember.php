<?php

namespace iBrand\Component\Vip;

use Illuminate\Database\Eloquent\Model;

class VipMember extends Model
{
	protected $table = 'vip_member';

	protected $guarded = ['id'];

	public function plan()
	{
		return $this->belongsTo(VipPlan::class, 'plan_id');
	}
}