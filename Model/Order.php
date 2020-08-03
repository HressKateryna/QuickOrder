<?php

namespace ALevel\QuickOrder\Model;

use ALevel\QuickOrder\Api\Model\OrderInterface;
use Magento\Framework\Model\AbstractModel;
use ALevel\QuickOrder\Model\ResourceModel\Order as ResourceModel;

class Order extends AbstractModel
{
    const LABEL = 'update_at';

    protected function _construct()
    {
        $this -> _init(ResourceModel::class);
    }
}
