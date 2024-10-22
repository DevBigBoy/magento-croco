<?php

namespace Croco\JobOffer\Setup\Patch\Data;

use Magento\Framework\Setup\Patch\DataPatchInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Croco\JobOffer\Model\DepartmentFactory;

class AddDepartments implements DataPatchInterface
{
    private $moduleDataSetup;
    private $departmentFactory;

    public function __construct(
        ModuleDataSetupInterface $moduleDataSetup,
        DepartmentFactory $departmentFactory
    ) {
        $this->moduleDataSetup = $moduleDataSetup;
        $this->departmentFactory = $departmentFactory;
    }

    public function apply()
    {
        $this->moduleDataSetup->startSetup();

        // Insert departments data
        $departments = [
            ['name' => 'Marketing', 'description' => 'Sed cautela nimia in peiores haeserat plagas...'],
            ['name' => 'Technical Support', 'description' => 'Post hanc adclinis Libano monti Phoenice...'],
            ['name' => 'Human Resource', 'description' => 'Duplexque isdem diebus acciderat malum...']
        ];

        foreach ($departments as $data) {
            $department = $this->departmentFactory->create();
            $department->setData($data);
            $department->save();
        }

        $this->moduleDataSetup->endSetup();
    }

    public static function getDependencies()
    {
        return [];
    }

    public function getAliases()
    {
        return [];
    }
}
