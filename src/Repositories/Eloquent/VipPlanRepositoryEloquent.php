<?php

namespace iBrand\Component\Vip\Repositories\Eloquent;

use iBrand\Component\Vip\Repositories\VipPlanRepository;
use iBrand\Component\Vip\Models\VipPlan;
use Prettus\Repository\Eloquent\BaseRepository;

class VipPlanRepositoryEloquent extends BaseRepository implements VipPlanRepository
{
	public function model()
	{
		return VipPlan::class;
	}
}