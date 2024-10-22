<?php

namespace Croco\JobOffer\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Job extends AbstractDb
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('croco_job', 'entity_id');  // 'croco_job' is the table name, 'entity_id' is the primary key
    }
}
