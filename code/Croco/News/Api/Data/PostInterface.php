<?php

namespace Croco\News\Api\Data;

interface PostInterface
{
    /**
     * Get post ID
     *
     * @return int
     */
    public function getId();

    /**
     * Get post title
     *
     * @return string
     */
    public function getTitle();

    /**
     * Get post short description
     *
     * @return string|null
     */
    public function getShortDescription();

    /**
     * Get post body
     *
     * @return string
     */
    public function getBody();

    /**
     * Get post image URL
     *
     * @return string|null
     */
//    public function getImageUrl();
}
