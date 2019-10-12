<?php

namespace iBrand\Component\Vip\Repositories\Eloquent;

use iBrand\Component\Vip\Repositories\VipMemberRepository;
use iBrand\Component\Vip\Models\VipMember;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Traits\CacheableRepository;

class VipMemberRepositoryEloquent extends BaseRepository implements VipMemberRepository
{
    use CacheableRepository;

	public function model()
	{
		return VipMember::class;
	}

	public function getPlansByUserId($user_id)
	{
		return $this->with('plan')->orderBy('created_at', 'DESC')->findWhere(['user_id' => $user_id]);
	}

	public function getDefaultByUserId($user_id)
	{
		return $this->with('plan')->findWhere(['is_default' => 1, 'status' => 1, 'user_id' => $user_id])->first();
	}
}