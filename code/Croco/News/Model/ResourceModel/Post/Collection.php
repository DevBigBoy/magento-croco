<?php
namespace Croco\News\Model\ResourceModel\Post;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Croco\News\Model\Post as PostModel;
use Croco\News\Model\ResourceModel\Post as PostResourceModel;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(PostModel::class, PostResourceModel::class);
    }
}
