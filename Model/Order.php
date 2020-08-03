<?php

namespace ALevel\QuickOrder\Model;

use ALevel\QuickOrder\Api\Model\OrderInterface;
use Magento\Framework\Model\AbstractModel;
use Alevel\QuickOrder\Model\ResourceModel\Order as ResourceModel;

class Order extends AbstractModel implements OrderInterface
{

    protected function _construct()
    {
        $this -> _init(ResourceModel::class);
    }
}
