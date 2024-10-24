<?php

namespace Croco\News\Model;

use Croco\News\Api\PostManagementInterface;
use Croco\News\Model\ResourceModel\Post\CollectionFactory as PostCollectionFactory;
use Magento\Framework\Exception\LocalizedException;

class PostManagement implements PostManagementInterface
{
    protected $postCollectionFactory;

    public function __construct(
        PostCollectionFactory $postCollectionFactory
    ) {
        $this->postCollectionFactory = $postCollectionFactory;
    }

    public function getPostsByCategory($categoryId)
    {
        // Ensure categoryId is valid
        $categoryId = (int) $categoryId;

        if ($categoryId <= 0) {
            throw new LocalizedException(__('Invalid category ID.'));
        }

        // Fetch posts related to the category and its children
        $postCollection = $this->postCollectionFactory->create();

        $postCollection->getSelect()
            ->join(
                ['pc' => 'croco_news_post_category'],  // Join with the relation table
                'main_table.post_id = pc.post_id',     // Join condition
                []  // We don't need extra columns from the join table
            )
            ->where('pc.category_id = ?', $categoryId);

        return $postCollection->getItems();
    }
}
