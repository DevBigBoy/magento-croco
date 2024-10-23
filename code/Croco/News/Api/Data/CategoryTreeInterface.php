<?php

namespace Croco\News\Api\Data;

interface CategoryTreeInterface
{
    /**
     * Get category ID
     * @return int
     */
    public function getId();

    /**
     * Get category name
     * @return string
     */
    public function getName();

    /**
     * Get category URL
     * @return string
     */
    public function getUrl();

    /**
     * Get children categories
     * @return \Croco\News\Api\Data\CategoryTreeInterface[]
     */
    public function getChildren();
}
