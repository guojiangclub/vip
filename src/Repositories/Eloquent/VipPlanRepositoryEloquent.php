<?php

namespace iBrand\Component\Vip\Repositories\Eloquent;

use iBrand\Component\Vip\Repositories\VipPlanRepository;
use iBrand\Component\Vip\Models\VipPlan;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Traits\CacheableRepository;

class VipPlanRepositoryEloquent extends BaseRepository implements VipPlanRepository
{
    use CacheableRepository;

	public function model()
	{
		return VipPlan::class;
	}
}