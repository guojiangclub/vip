<?php

namespace iBrand\Component\Vip\Repositories;

use Prettus\Repository\Contracts\RepositoryInterface;

interface VipMemberRepository extends RepositoryInterface
{

	/**
	 * @param $user_id
	 *
	 * @return mixed
	 */
	public function getPlansByUserId($user_id);

	/**
	 * @param $user_id
	 *
	 * @return mixed
	 */
	public function getDefaultPlanByUserId($user_id);
}