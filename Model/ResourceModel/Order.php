<?php


namespace ALevel\QuickOrder\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Order extends AbstractDb
{

    protected function _construct()
    {
        $this->_init('alevel_quickorder', 'order_id');
    }
}
