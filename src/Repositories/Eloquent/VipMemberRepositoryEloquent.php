<?php

namespace iBrand\Component\Vip\Repositories\Eloquent;

use iBrand\Component\Vip\Repositories\VipMemberRepository;
use iBrand\Component\Vip\VipMember;
use Prettus\Repository\Eloquent\BaseRepository;

class VipMemberRepositoryEloquent extends BaseRepository implements VipMemberRepository
{
	public function model()
	{
		return VipMember::class;
	}

	public function getPlansByUserId($user_id)
	{
		return $this->model->where('user_id', $user_id)->orderBy('created_at', 'DESC')->get();
	}

	public function getDefaultPlanByUserId($user_id)
	{
		return $this->model->where('is_default', 1)->where('status', 1)->where('user_id', $user_id)->first();
	}
}