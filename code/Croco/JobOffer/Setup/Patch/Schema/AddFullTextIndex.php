<?php

namespace Croco\JobOffer\Setup\Patch\Schema;

use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\SchemaPatchInterface;

class AddFullTextIndex implements SchemaPatchInterface
{
    /**
     * @var SchemaSetupInterface
     */
    private $schemaSetup;

    /**
     * @var ModuleDataSetupInterface
     */
    private $moduleDataSetup;

    /**
     * Constructor
     *
     * @param SchemaSetupInterface $schemaSetup
     * @param ModuleDataSetupInterface $moduleDataSetup
     */
    public function __construct(
        SchemaSetupInterface $schemaSetup,
        ModuleDataSetupInterface $moduleDataSetup
    ) {
        $this->schemaSetup = $schemaSetup;
        $this->moduleDataSetup = $moduleDataSetup;
    }

    /**
     * Apply the patch
     */
    public function apply()
    {
        $this->moduleDataSetup->getConnection()->startSetup();

        // Add full-text index to croco_department table
        $tableName = $this->schemaSetup->getTable('croco_department');
        $fullTextIndex = ['name'];
        $this->moduleDataSetup->getConnection()->addIndex(
            $tableName,
            $this->schemaSetup->getIdxName(
                $tableName,
                $fullTextIndex,
                \Magento\Framework\DB\Adapter\AdapterInterface::INDEX_TYPE_FULLTEXT
            ),
            $fullTextIndex,
            \Magento\Framework\DB\Adapter\AdapterInterface::INDEX_TYPE_FULLTEXT
        );

        // Add full-text index to croco_job table
        $tableName = $this->schemaSetup->getTable('croco_job');
        $fullTextIndex = ['title', 'type', 'location', 'description'];
        $this->moduleDataSetup->getConnection()->addIndex(
            $tableName,
            $this->schemaSetup->getIdxName(
                $tableName,
                $fullTextIndex,
                \Magento\Framework\DB\Adapter\AdapterInterface::INDEX_TYPE_FULLTEXT
            ),
            $fullTextIndex,
            \Magento\Framework\DB\Adapter\AdapterInterface::INDEX_TYPE_FULLTEXT
        );

        $this->moduleDataSetup->getConnection()->endSetup();
    }

    /**
     * @inheritdoc
     */
    public static function getDependencies()
    {
        return [];
    }

    /**
     * @inheritdoc
     */
    public function getAliases()
    {
        return [];
    }
}
