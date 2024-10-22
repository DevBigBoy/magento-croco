<?php

namespace Croco\JobOffer\Model\ResourceModel\Department;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Croco\JobOffer\Model\Department as DepartmentModel;
use Croco\JobOffer\Model\ResourceModel\Department as DepartmentResourceModel;

class Collection extends AbstractCollection
{
    /**
     * Initialize model and resource model for the collection
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(DepartmentModel::class, DepartmentResourceModel::class);
    }
}
