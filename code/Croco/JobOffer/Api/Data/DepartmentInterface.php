<?php

declare(strict_types=1);

namespace Croco\JobOffer\Api\Data;

/**
 * Interface DepartmentInterface
 * @package Croco\JobOffer\Api\Data
 */
interface DepartmentInterface
{
    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId();

    /**
     * Set ID
     *
     * @param int $id
     * @return $this
     */
    public function setId($id);

    /**
     * Get Name
     *
     * @return string|null
     */
    public function getName();

    /**
     * Set Name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name);

    /**
     * Get Description
     *
     * @return string|null
     */
    public function getDescription();

    /**
     * Set Description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description);
}
