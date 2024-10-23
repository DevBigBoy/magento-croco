<?php

namespace Croco\News\Model;

use Croco\News\Api\CategoryTreeInterface;
use Croco\News\Api\Data\CategoryTreeInterface as DataCategoryTreeInterface;
use Croco\News\Model\ResourceModel\Category\CollectionFactory;
use Magento\Framework\Api\DataObjectHelper;

class CategoryTree implements CategoryTreeInterface
{
    protected $categoryCollectionFactory;
    protected $dataCategoryTreeFactory;
    protected $dataObjectHelper;

    public function __construct(
        CollectionFactory $categoryCollectionFactory,
        DataCategoryTreeInterface $dataCategoryTreeFactory,
        DataObjectHelper $dataObjectHelper
    ) {
        $this->categoryCollectionFactory = $categoryCollectionFactory;
        $this->dataCategoryTreeFactory = $dataCategoryTreeFactory;
        $this->dataObjectHelper = $dataObjectHelper;
    }

    public function getCategoryTree($parentId = null)
    {
        if ($parentId === null) {
            $categoryCollection = $this->categoryCollectionFactory->create()
                ->addFieldToSelect(['category_id', 'name'])
                ->addFieldToFilter('parent_id', ['null' => true]);
        } else {
            $categoryCollection = $this->categoryCollectionFactory->create()
                ->addFieldToSelect(['category_id', 'name'])
                ->addFieldToFilter('parent_id', $parentId);
        }

        // Debugging: Check if data is being fetched
//        if ($categoryCollection->getSize() == 0) {
//            throw new \Exception('No categories found for parent_id: ' . $parentId);
//        }

        $categories = [];
        foreach ($categoryCollection as $category) {
            $categories[] = [
                'id' => $category->getId(),
                'name' => $category->getName(),
                'url' => '#',
                'children' => $this->getCategoryTree($category->getId())
            ];
        }

        return $categories;
    }

}
