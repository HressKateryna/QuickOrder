<?php


namespace ALevel\QuickOrder\Model\ResourceModel\Status;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

use ALevel\QuickOrder\Model\Status as Model;
use ALevel\QuickOrder\Model\ResourceModel\Status as ResourceModel;

class Collection extends AbstractCollection
{
    public function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);
    }
}
