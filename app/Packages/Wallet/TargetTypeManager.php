<?php

/*
 * +----------------------------------------------------------------------+
 * |                          ThinkSNS Plus                               |
 * +----------------------------------------------------------------------+
 * | Copyright (c) 2017 Chengdu ZhiYiChuangXiang Technology Co., Ltd.     |
 * +----------------------------------------------------------------------+
 * | This source file is subject to version 2.0 of the Apache license,    |
 * | that is bundled with this package in the file LICENSE, and is        |
 * | available through the world-wide-web at the following url:           |
 * | http://www.apache.org/licenses/LICENSE-2.0.html                      |
 * +----------------------------------------------------------------------+
 * | Author: Slim Kit Group <master@zhiyicx.com>                          |
 * | Homepage: www.thinksns.com                                           |
 * +----------------------------------------------------------------------+
 */

namespace Zhiyi\Plus\Packages\Wallet;

use Illuminate\Support\Manager;
use Zhiyi\Plus\Packages\Wallet\TargetTypes\Target;

class TargetTypeManager extends Manager
{
    protected $order;

    /**
     * Set the manager order.
     *
     * @param \Zhiyi\Plus\Packages\Wallet\Order $order
     * @author Seven Du <shiweidu@outlook.com>
     */
    public function setOrder(Order $order)
    {
        $this->order = $order;
    }

    /**
     * Get the order target type dirver.
     *
     * @return string
     * @author Seven Du <shiweidu@outlook.com>
     */
    public function getDefaultDriver()
    {
        return $this->order->target_type;
    }

    protected function createUserDriver(): Target
    {
        $driver = $this->app->make(TargetTypes\UserTarget::class);
        $dirver->setOrder($this->order);

        return $dirver;
    }
}