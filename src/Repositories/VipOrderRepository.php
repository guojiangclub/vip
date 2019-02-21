<?php

namespace iBrand\Component\Vip\Repositories;

use Prettus\Repository\Contracts\RepositoryInterface;

interface VipOrderRepository extends RepositoryInterface
{
	/**
	 * @param $order_no
	 *
	 * @return mixed
	 */
	public function getOrderByNo($order_no);
}