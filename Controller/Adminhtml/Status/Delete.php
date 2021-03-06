<?php

namespace ALevel\QuickOrder\Controller\Adminhtml\Status;

use ALevel\QuickOrder\Api\Repository\StatusRepositoryInterface;
use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\NoSuchEntityException;
use Psr\Log\LoggerInterface;

class Delete extends Action
{
    private $repository;

    private $logger;

    public function __construct(
        Context $context,
        StatusRepositoryInterface $repository,
        LoggerInterface $logger
    ) {
        $this-> repository   = $repository;
        $this-> logger       = $logger;

        parent::__construct($context);
    }

    public function execute()
    {
        $id = $this->getRequest()->getParam('id', null);
        if (!empty($id)) {
            try {
                $this->repository->deleteById($id);
                $this->messageManager->addSuccessMessage(sprintf("Item %d was deleted", $id));
            } catch (NoSuchEntityException $e) {
                $this->logger->info(sprintf("item %d already delete", $id));
            }
        } else {
            $this->messageManager->addWarningMessage(__("Please select status id"));
        }
        $this->_redirect('*/*/listing');

    }
}
