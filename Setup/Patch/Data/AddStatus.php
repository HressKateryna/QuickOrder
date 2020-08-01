<?php

namespace ALevel\QuickOrder\Setup\Patch\Data;

use ALevel\QuickOrder\Model\StatusFactory;
use Magento\Framework\Setup\Patch\DataPatchInterface;
use Magento\Framework\DB\TransactionFactory;

class AddStatus implements DataPatchInterface
{
    private $modelFactory;

    private $transactionFactory;

    public function __construct(
        StatusFactory $statusFactory,
        TransactionFactory $transactionFactory
    ) {
        $this -> modelFactory         = $statusFactory;
        $this -> transactionFactory   = $transactionFactory;
    }

    public static function getDependencies()
    {
        return [];
    }

    public function getAliases()
    {
        return [];
    }

    public function apply()
    {
        $transaction = $this -> transactionFactory -> create();

        for ($i = 0; $i < 2; $i++) {
            $model = $this -> modelFactory -> create();
            $model -> setName(sprintf("Status %d", $i));
            $transaction -> addObject($model);
        }

        $transaction -> save();
    }
}
