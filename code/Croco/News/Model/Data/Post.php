<?php

namespace Croco\News\Model;

use Croco\News\Api\Data\PostInterface;
use Magento\Framework\Model\AbstractModel;

class Post extends AbstractModel implements PostInterface
{
    /**
     * Define resource model
     */
    protected function _construct()
    {
        $this->_init(\Croco\News\Model\ResourceModel\Post::class);
    }

    /**
     * Get post ID
     * @return int
     */
    public function getId()
    {
        return $this->getData('post_id');
    }

    /**
     * Get post title
     * @return string
     */
    public function getTitle()
    {
        return $this->getData('title');
    }

    /**
     * Get post short description
     * @return string
     */
    public function getShortDescription()
    {
        return $this->getData('short_description');
    }

    /**
     * Get post body content
     * @return string
     */
    public function getBody()
    {
        return $this->getData('body');
    }

    /**
     * Get post image URL
     * @return string
     */
//    public function getImageUrl()
//    {
//        return $this->getData('image');
//    }
}
