<?php
namespace Croco\News\Block;

use Magento\Framework\View\Element\Template;

class News extends Template
{
    public function getWelcomeText()
    {
        return "Welcome to Croco News!";
    }
}
