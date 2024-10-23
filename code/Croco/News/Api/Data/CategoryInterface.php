<?php
namespace Croco\News\Api\Data;

interface CategoryInterface
{
    const CATEGORY_ID = 'category_id';
    const NAME = 'name';
    const DESCRIPTION = 'description';
    const PARENT_ID = 'parent_id';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    // Getters and setters for each field
    public function getId();

    public function getName();
    public function setName($name);

    public function getDescription();
    public function setDescription($description);

    public function getParentId();
    public function setParentId($parentId);

    public function getCreatedAt();
    public function setCreatedAt($createdAt);

    public function getUpdatedAt();
    public function setUpdatedAt($updatedAt);
}
