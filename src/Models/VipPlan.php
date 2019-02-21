<?php

namespace iBrand\Component\Vip;

use Illuminate\Database\Eloquent\Model;

class VipPlan extends Model
{
	protected $table = 'vip_plan';

	protected $guarded = ['id'];

	public function getActionsAttribute($value)
	{
		if ($value) {
			return json_decode($value, true);
		}

		return '';
	}

	public function setActionsAttribute($value)
	{
		if ($value && is_array($value)) {
			$this->attributes['actions'] = json_encode($value);
		}
	}
}