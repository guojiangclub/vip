<?php

namespace iBrand\Component\Vip\Repositories\Eloquent;

use iBrand\Component\Vip\Repositories\VipOrderRepository;
use iBrand\Component\Vip\Models\VipOrder;
use Prettus\Repository\Eloquent\BaseRepository;

class VipOrderRepositoryEloquent extends BaseRepository implements VipOrderRepository
{
	public function model()
	{
		return VipOrder::class;
	}

	public function getOrderByNo($order_no)
	{
		return $this->with('plan')->findWhere(['order_no' => $order_no])->first();
	}
}