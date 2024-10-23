<?php

namespace Croco\News\Api;

interface CategoryTreeInterface
{
    /**
     * Get category tree
     *
     * @param int|null $parentId Parent category ID (null for root categories)
     * @return \Croco\News\Api\Data\CategoryTreeInterface[]
     */
    public function getCategoryTree($parentId = null);
}
