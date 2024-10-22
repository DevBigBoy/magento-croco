<?php
namespace Croco\JobOffer\Model;

use Croco\JobOffer\Api\Data\DepartmentInterface;
use Magento\Framework\Model\AbstractModel;

class Department extends AbstractModel implements DepartmentInterface
{
   private const ENTITY_ID = 'entity_id';
   private const NAME = 'name';
   private const DESCRIPTION = 'description';

    /**
     * Initialize model
     */
    protected function _construct()
    {
        $this->_eventPrefix = 'croco_department';
        $this->_eventObject = 'department';
        $this->_idFieldName = 'entity_id';
        $this->_init(\Croco\JobOffer\Model\ResourceModel\Department::class);
    }

    /**
     * Get Department ID
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->getData(self::ENTITY_ID);
    }

    /**
     * Set Department ID
     *
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        return $this->setData(self::ENTITY_ID, $id);
    }

    /**
     * Get Department Name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->getData(self::NAME);
    }

    /**
     * Set Department Name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        return $this->setData(self::NAME, $name);
    }

    /**
     * Get Department Description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->getData(self::DESCRIPTION);
    }

    /**
     * Set Department Description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        return $this->setData(self::DESCRIPTION, $description);
    }
}
