<?php


namespace ALevel\QuickOrder\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Status extends AbstractDb
{

    protected function _construct()
    {
        $this->_init('alevel_quickorder_status', 'status_id');
    }
}
