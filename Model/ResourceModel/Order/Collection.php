<?php


namespace ALevel\QuickOrder\Model\ResourceModel\Order;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

use ALevel\QuickOrder\Model\Order as Model;
use ALevel\QuickOrder\Model\ResourceModel\Order as ResourceModel;

class Collection extends AbstractCollection
{
    public function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);
    }
}
