<?php

namespace ALevel\QuickOrder\Model;

use ALevel\QuickOrder\Api\Model\StatusInterface;
use Magento\Framework\Model\AbstractModel;
use ALevel\QuickOrder\Model\ResourceModel\Status as ResourceModel;

class Status extends AbstractModel implements StatusInterface
{
    const LABEL = 'update_at';

    protected function _construct()
    {
        $this -> _init(ResourceModel::class);
    }
}
