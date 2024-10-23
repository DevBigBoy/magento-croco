<?php
namespace Croco\News\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Post extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('croco_news_post', 'post_id'); // Define table and primary key
    }
}
