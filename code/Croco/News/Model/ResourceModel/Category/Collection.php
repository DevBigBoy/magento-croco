<?php
namespace Croco\News\Model\ResourceModel\Category;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Croco\News\Model\Category as CategoryModel;
use Croco\News\Model\ResourceModel\Category as CategoryResourceModel;

class Collection extends AbstractCollection
{
    /**
     * Define model & resource model
     */
    protected function _construct()
    {
        $this->_init(CategoryModel::class, CategoryResourceModel::class);
    }
}
