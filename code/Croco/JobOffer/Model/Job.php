<?php

namespace Croco\JobOffer\Model;


use Magento\Framework\Model\AbstractModel;

class Job extends AbstractModel
{
    /**
     * Define primary key field name
     */
    const JOB_ID = 'entity_id';  // Primary key field for the job table

    /**
     * Prefix of model events names
     *
     * @var string
     */
    protected $_eventPrefix = 'croco_joboffer_job';  // Prefix for job events

    /**
     * Name of the event object
     *
     * @var string
     */
    protected $_eventObject = 'job';  // Event object name

    /**
     * Name of object id field
     *
     * @var string
     */
    protected $_idFieldName = self::JOB_ID;  // Defines the primary key field

    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(\Croco\JobOffer\Model\ResourceModel\Job::class);  // Initialize the resource model for Job
    }

    public function getEnableStatus() {
        return 1;
    }

    public function getDisableStatus() {
        return 0;
    }
}
