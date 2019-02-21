<?php

namespace iBrand\Component\Vip;

use iBrand\Component\Vip\Repositories\Eloquent\VipMemberRepositoryEloquent;
use iBrand\Component\Vip\Repositories\Eloquent\VipOrderRepositoryEloquent;
use iBrand\Component\Vip\Repositories\Eloquent\VipPlanRepositoryEloquent;
use iBrand\Component\Vip\Repositories\VipMemberRepository;
use iBrand\Component\Vip\Repositories\VipOrderRepository;
use iBrand\Component\Vip\Repositories\VipPlanRepository;
use Illuminate\Support\ServiceProvider;

class VipServiceProvider extends ServiceProvider
{
	public function boot()
	{
		if ($this->app->runningInConsole()) {
			$this->loadMigrationsFrom(__DIR__ . '/../migrations');
		}
	}

	public function register()
	{
		$this->app->bind(VipMemberRepository::class, VipMemberRepositoryEloquent::class);
		$this->app->bind(VipOrderRepository::class, VipOrderRepositoryEloquent::class);
		$this->app->bind(VipPlanRepository::class, VipPlanRepositoryEloquent::class);
	}
}