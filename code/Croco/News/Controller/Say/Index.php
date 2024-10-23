<?php
namespace Croco\News\Controller\Say;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Index extends Action
{
    public function execute()
    {
        echo 'Execute Action Say_Index OK';
        die();
    }
}
