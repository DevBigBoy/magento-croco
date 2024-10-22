<?php

namespace Croco\JobOffer\Setup\Patch\Data;

use Magento\Framework\Setup\Patch\DataPatchInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Croco\JobOffer\Model\JobFactory;
use Croco\JobOffer\Model\DepartmentFactory;

class AddJobs implements DataPatchInterface
{
    private $moduleDataSetup;
    private $jobFactory;
    private $departmentFactory;

    public function __construct(
        ModuleDataSetupInterface $moduleDataSetup,
        JobFactory $jobFactory,
        DepartmentFactory $departmentFactory
    ) {
        $this->moduleDataSetup = $moduleDataSetup;
        $this->jobFactory = $jobFactory;
        $this->departmentFactory = $departmentFactory;
    }

    public function apply()
    {
        $this->moduleDataSetup->startSetup();

        // Load department IDs (assuming they are inserted by AddDepartments.php)
        $departmentMarketing = $this->departmentFactory->create()->load(1); // Assuming Marketing is ID 1
        $departmentTechnical = $this->departmentFactory->create()->load(2); // Assuming Technical Support is ID 2
        $departmentHR = $this->departmentFactory->create()->load(3); // Assuming HR is ID 3

        // Insert job data
        $jobs = [
            [
                'title' => 'Sample Marketing Job 1',
                'type' => 'CDI',
                'location' => 'Paris, France',
                'date' => '2016-01-05',
                'status' => 1,  // Assuming 1 is enabled
                'description' => 'Duplexque isdem diebus acciderat malum...',
                'department_id' => $departmentMarketing->getId(),
            ],
            [
                'title' => 'Sample Technical Support Job 1',
                'type' => 'CDD',
                'location' => 'Lille, France',
                'date' => '2016-02-01',
                'status' => 1,  // Assuming 1 is enabled
                'description' => 'Duplexque isdem diebus acciderat malum...',
                'department_id' => $departmentTechnical->getId(),
            ],
            [
                'title' => 'Sample Human Resource Job 1',
                'type' => 'CDI',
                'location' => 'Paris, France',
                'date' => '2016-01-01',
                'status' => 1,  // Assuming 1 is enabled
                'description' => 'Duplexque isdem diebus acciderat malum...',
                'department_id' => $departmentHR->getId(),
            ]
        ];

        foreach ($jobs as $data) {
            $job = $this->jobFactory->create();
            $job->setData($data);
            $job->save();
        }

        $this->moduleDataSetup->endSetup();
    }

    public static function getDependencies()
    {
        return [
            \Croco\JobOffer\Setup\Patch\Data\AddDepartments::class
        ];
    }

    public function getAliases()
    {
        return [];
    }
}
