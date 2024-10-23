<?php


namespace Croco\News\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Category extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('croco_news_category', 'category_id'); // Table name and primary key
    }
}
