<?php

namespace iBrand\Component\Vip\Test;

use iBrand\Component\Vip\Repositories\VipMemberRepository;
use iBrand\Component\Vip\Repositories\VipOrderRepository;
use iBrand\Component\Vip\Models\VipOrder;
use iBrand\Component\Vip\Models\VipPlan;
use iBrand\Component\Vip\Repositories\VipPlanRepository;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Orchestra\Testbench\TestCase;

abstract class BaseTest extends TestCase
{
	use DatabaseMigrations;

	public $order_no = '4873201818122710542643357059';

	protected $vipMemberRepository;

	protected $vipOrderRepository;

	protected $vipPlanRepository;

	public function setUp()
	{
		parent::setUp();

		$this->vipOrderRepository = $this->app->make(VipOrderRepository::class);

		$this->vipMemberRepository = $this->app->make(VipMemberRepository::class);

		$this->vipPlanRepository = $this->app->make(VipPlanRepository::class);

		$this->seedPlan();

		$this->seedOrder();
	}

	public function getEnvironmentSetUp($app)
	{
		$app['config']->set('database.default', 'testing');
		$app['config']->set('database.connections.testing', [
			'driver'   => 'sqlite',
			'database' => ':memory:',
		]);
		$app['config']->set('repository.cache.enabled', true);
	}

	public function getPackageProviders($app)
	{
		return [
			\Orchestra\Database\ConsoleServiceProvider::class,
			\iBrand\Component\Vip\VipServiceProvider::class,
		];
	}

	public function seedPlan()
	{
		$this->vipPlanRepository->create(['title' => '666年度会员', 'price' => 666, 'level' => 1, 'actions' => ['free_course' => 4, 'course_discount_percentage' => 70]]);
		$this->vipPlanRepository->create(['title' => '998年度会员', 'price' => 998, 'level' => 2, 'actions' => ['free_course' => 8, 'course_discount_percentage' => 60]]);
		$this->vipPlanRepository->create(['title' => '1188年度会员', 'price' => 1188, 'level' => 3, 'actions' => ['free_course' => 12, 'course_discount_percentage' => 50]]);
	}

	public function seedOrder()
	{
		$this->vipOrderRepository->create([
			'order_no' => $this->order_no,
			'plan_id'  => 1,
			'user_id'  => 1,
			'price'    => 66600,
		]);
	}
}