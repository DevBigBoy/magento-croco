<?php

namespace Croco\News\Model\Data;

use Croco\News\Api\Data\CategoryTreeInterface;
use Magento\Framework\DataObject;

class CategoryTree extends DataObject implements CategoryTreeInterface
{
    public function getId()
    {
        return $this->getData('id');
    }

    public function getName()
    {
        return $this->getData('name');
    }

    public function getUrl()
    {
        return $this->getData('url');
    }

    public function getChildren()
    {
        return $this->getData('children');
    }
}
