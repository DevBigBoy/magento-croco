<?php
declare(strict_types=1);

namespace Croco\News\Api\Data;

interface PostInterface
{
    const POST_ID = 'post_id';
    const TITLE = 'title';
    const SHORT_DESCRIPTION = 'short_description';
    const BODY = 'body';
    const IMAGE = 'image';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    // Getters and setters for each field
    public function getId();

    public function getTitle();
    public function setTitle($title);

    public function getShortDescription();
    public function setShortDescription($shortDescription);

    public function getBody();
    public function setBody($body);

    public function getImage();
    public function setImage($image);

    public function getCreatedAt();
    public function setCreatedAt($createdAt);

    public function getUpdatedAt();
    public function setUpdatedAt($updatedAt);
}
