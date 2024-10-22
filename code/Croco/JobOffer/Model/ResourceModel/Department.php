<?php

namespace Croco\JobOffer\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Department extends AbstractDb
{

    private const TABLE_NAME = 'croco_department';
    private const FIELD_NAME = 'entity_id' ;

    /**
     * Initialize the resource model
     */
    protected function _construct()
    {
        // Define the database table and primary key
        $this->_init(self::TABLE_NAME, self::FIELD_NAME);
    }
}
