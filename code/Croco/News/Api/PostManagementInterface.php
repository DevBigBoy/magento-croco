<?php

namespace Croco\News\Api;

interface PostManagementInterface
{
    /**
     * Fetch all posts related to a specific category and its children.
     *
     * @param int $categoryId
     * @return \Croco\News\Api\Data\PostInterface[]
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getPostsByCategory(int $categoryId);
}
