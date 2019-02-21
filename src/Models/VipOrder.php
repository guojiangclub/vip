<?php

namespace iBrand\Component\Vip;

use Illuminate\Database\Eloquent\Model;

class VipOrder extends Model
{
	protected $table = 'vip_order';

	protected $guarded = ['id'];
}