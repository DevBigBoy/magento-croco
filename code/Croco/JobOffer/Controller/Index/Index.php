<?php
// app/code/Croco/JobOffer/Controller/Index/Index.php

namespace Croco\JobOffer\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Index extends Action
{
    protected $resultPageFactory;

    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
    ) {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        /** @var \Magento\Framework\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();

        // Set the page title using the config object
        $resultPage->getConfig()->getTitle()->set(__('Job Offers List'));

        return $resultPage;
    }
}
