<?php

namespace Croco\News\Block;

use Magento\Framework\View\Element\Template;
use Croco\News\Model\ResourceModel\Category\CollectionFactory as CategoryCollectionFactory;

class CategoryMenu extends Template
{
    protected $categoryCollectionFactory;

    public function __construct(
        Template\Context $context,
        CategoryCollectionFactory $categoryCollectionFactory,
        array $data = []
    ) {
        $this->categoryCollectionFactory = $categoryCollectionFactory;
        parent::__construct($context, $data);
    }

    public function getCategoryTree($parentId = null)
    {
        // Check if we're fetching root categories
        if ($parentId === null) {
            $categoryCollection = $this->categoryCollectionFactory->create()
                ->addFieldToSelect(['category_id', 'name'])
                ->addFieldToFilter('parent_id', ['null' => true]);  // Fetch categories with parent_id IS NULL (root categories)
        } else {
            // Fetch subcategories for a specific parent_id
            $categoryCollection = $this->categoryCollectionFactory->create()
                ->addFieldToSelect(['category_id', 'name'])
                ->addFieldToFilter('parent_id', $parentId);  // Fetch categories with the given parent_id
        }

        // Initialize an empty array to hold categories
        $categories = [];

        // Loop through the collection and build the category tree
        foreach ($categoryCollection as $category) {
            // Append current category and recursively fetch children
            $categories[] = [
                'id' => $category->getId(),
                'name' => $category->getName(),
                'url' => '#', // Replace with actual URL logic if needed
                'children' => $this->getCategoryTree($category->getId()) // Recursively get subcategories
            ];
        }

        // Return the accumulated categories array
        return $categories;
    }



}
