<?php

namespace iBrand\Component\Vip\Models;

use Illuminate\Database\Eloquent\Model;

class VipPlan extends Model
{
	protected $table = 'vip_plan';

	protected $guarded = ['id'];

	public function getActionsAttribute($value)
	{
		$actions = null;
		if ($value) {
			$actions = json_decode($value, true);
		}

		return $actions;
	}

	public function setActionsAttribute($value)
	{
		if ($value && is_array($value)) {
			$this->attributes['actions'] = json_encode($value);
		}
	}

	public function setPriceAttribute($value)
	{
		if ($value > 0) {
			$this->attributes['price'] = $value * 100;
		}
	}

	public function getPriceAttribute($value)
	{
		$price = 0;
		if ($value > 0) {
			$price = $value / 100;
		}

		return $price;
	}
}