<?php
namespace Croco\News\Model;

use Croco\News\Api\Data\CategoryInterface;
use Magento\Framework\Model\AbstractModel;

class Category extends AbstractModel implements CategoryInterface
{
    protected function _construct()
    {
        $this->_init(\Croco\News\Model\ResourceModel\Category::class);
    }
    public function getPostIds()
    {
        $connection = $this->getResource()->getConnection();
        $postCategoryTable = $this->getResource()->getTable('croco_news_post_category');
        $select = $connection->select()
            ->from($postCategoryTable, 'post_id')
            ->where('category_id = ?', $this->getId());

        return $connection->fetchCol($select);
    }


    // Method to get child categories recursively
//    public function getCategoryTree($parentId = null)
//    {
//        $connection = $this->getResource()->getConnection();
//        $categoryTable = $this->getResource()->getTable('croco_news_category');
//
//        // Select categories where parent_id matches the provided parentId
//        $select = $connection->select()
//            ->from($categoryTable)
//            ->where('parent_id = ?', $parentId)
//            ->order('name ASC');
//
//        $categories = $connection->fetchAll($select);
//
//        // Recursively get subcategories
//        foreach ($categories as &$category) {
//            $category['children'] = $this->getCategoryTree($category['category_id']);
//        }
//
//        return $categories;
//    }
    // Getter and Setter for Category ID
    public function getId()
    {
        return $this->getData(self::CATEGORY_ID);
    }

    // Getter and Setter for Name
    public function getName()
    {
        return $this->getData(self::NAME);
    }

    public function setName($name)
    {
        return $this->setData(self::NAME, $name);
    }

    // Getter and Setter for Description
    public function getDescription()
    {
        return $this->getData(self::DESCRIPTION);
    }

    public function setDescription($description)
    {
        return $this->setData(self::DESCRIPTION, $description);
    }

    // Getter and Setter for Parent ID
    public function getParentId()
    {
        return $this->getData(self::PARENT_ID);
    }

    public function setParentId($parentId)
    {
        return $this->setData(self::PARENT_ID, $parentId);
    }

    // Getter and Setter for Created At
    public function getCreatedAt()
    {
        return $this->getData(self::CREATED_AT);
    }

    public function setCreatedAt($createdAt)
    {
        return $this->setData(self::CREATED_AT, $createdAt);
    }

    // Getter and Setter for Updated At
    public function getUpdatedAt()
    {
        return $this->getData(self::UPDATED_AT);
    }

    public function setUpdatedAt($updatedAt)
    {
        return $this->setData(self::UPDATED_AT, $updatedAt);
    }
}
