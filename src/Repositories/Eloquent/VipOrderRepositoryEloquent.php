<?php

namespace iBrand\Component\Vip\Repositories\Eloquent;

use iBrand\Component\Vip\Repositories\VipOrderRepository;
use iBrand\Component\Vip\VipOrder;
use Prettus\Repository\Eloquent\BaseRepository;

class VipOrderRepositoryEloquent extends BaseRepository implements VipOrderRepository
{
	public function model()
	{
		return VipOrder::class;
	}
}