<?php
namespace Croco\News\Model;

use Croco\News\Api\Data\PostInterface;
use Magento\Framework\Model\AbstractModel;

class Post extends AbstractModel implements PostInterface
{
    protected function _construct()
    {
        $this->_init(\Croco\News\Model\ResourceModel\Post::class);
    }

    // Method to get related categories
    public function getCategoryIds()
    {
        $connection = $this->getResource()->getConnection();
        $postCategoryTable = $this->getResource()->getTable('croco_news_post_category');
        $select = $connection->select()
            ->from($postCategoryTable, 'category_id')
            ->where('post_id = ?', $this->getId());

        return $connection->fetchCol($select);
    }

    // Method to assign categories to a post
    public function assignCategories(array $categoryIds)
    {
        $connection = $this->getResource()->getConnection();
        $postCategoryTable = $this->getResource()->getTable('croco_news_post_category');

        // Remove existing categories
        $connection->delete($postCategoryTable, ['post_id = ?' => $this->getId()]);

        // Insert new categories
        foreach ($categoryIds as $categoryId) {
            $connection->insert($postCategoryTable, [
                'post_id' => $this->getId(),
                'category_id' => $categoryId,
            ]);
        }
    }

    // Getter and Setter for Post ID
    public function getId()
    {
        return $this->getData(self::POST_ID);
    }

    // Getter and Setter for Title
    public function getTitle()
    {
        return $this->getData(self::TITLE);
    }

    public function setTitle($title)
    {
        return $this->setData(self::TITLE, $title);
    }

    // Getter and Setter for Short Description
    public function getShortDescription()
    {
        return $this->getData(self::SHORT_DESCRIPTION);
    }

    public function setShortDescription($shortDescription)
    {
        return $this->setData(self::SHORT_DESCRIPTION, $shortDescription);
    }

    // Getter and Setter for Body
    public function getBody()
    {
        return $this->getData(self::BODY);
    }

    public function setBody($body)
    {
        return $this->setData(self::BODY, $body);
    }

    // Getter and Setter for Image
    public function getImage()
    {
        return $this->getData(self::IMAGE);
    }

    public function setImage($image)
    {
        return $this->setData(self::IMAGE, $image);
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
