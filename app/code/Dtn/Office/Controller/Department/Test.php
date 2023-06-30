<?php

namespace Dtn\Office\Controller\Department;

use Dtn\Office\Model\ResourceModel\Department\CollectionFactory;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\Action\HttpPostActionInterface;

class Test extends Action implements HttpGetActionInterface, HttpPostActionInterface
{
    public function __construct(
        protected Context $context,
        protected CollectionFactory $departmentCollectionFactory

    ) {
        parent::__construct($context);
    }

    public function execute()
    {
        $c=$this->departmentCollectionFactory->create();
        $c->load();
        foreach($c as $department)
        {
            echo $department->getName()."<br>";
        }
    }
}
