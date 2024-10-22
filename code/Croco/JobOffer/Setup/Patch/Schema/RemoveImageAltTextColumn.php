<?php

namespace Croco\JobOffer\Setup\Patch\Schema;

use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\SchemaPatchInterface;

class RemoveImageAltTextColumn implements SchemaPatchInterface
{
    /**
     * @var ModuleDataSetupInterface
     */
    private $moduleDataSetup;

    /**
     * Constructor
     *
     * @param ModuleDataSetupInterface $moduleDataSetup
     */
    public function __construct(
        ModuleDataSetupInterface $moduleDataSetup
    ) {
        $this->moduleDataSetup = $moduleDataSetup;
    }

    /**
     * Apply Patch
     */
    public function apply()
    {
        $this->moduleDataSetup->getConnection()->startSetup();

        // Remove the 'image_alt_text' column from the 'job_images' table
        $this->moduleDataSetup->getConnection()->dropColumn(
            $this->moduleDataSetup->getTable('job_images'),
            'image_alt_text'
        );

        $this->moduleDataSetup->getConnection()->endSetup();
    }

    /**
     * Get Aliases
     *
     * @return array
     */
    public function getAliases()
    {
        return [];
    }

    /**
     * Get Dependencies
     *
     * @return array
     */
    public static function getDependencies()
    {
        return [];
    }
}
