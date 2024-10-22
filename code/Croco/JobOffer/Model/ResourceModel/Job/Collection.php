<?php

namespace Croco\JobOffer\Model\ResourceModel\Job;


use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Croco\JobOffer\Model\Job as JobModel;
use Croco\JobOffer\Model\ResourceModel\Job as JobResourceModel;

class Collection extends AbstractCollection
{
    /**
     * Initialize model and resource model for the collection
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(JobModel::class, JobResourceModel::class);
    }
}
