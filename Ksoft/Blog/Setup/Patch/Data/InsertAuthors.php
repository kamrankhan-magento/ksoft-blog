<?php

declare(strict_types=1);

namespace Ksoft\Blog\Setup\Patch\Data;

use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;

/**
 * Patch is mechanism, that allows to do atomic upgrade data changes
 */
class InsertAuthors implements DataPatchInterface
{
    /**
     * @var ModuleDataSetupInterface $moduleDataSetup
     */
    private $moduleDataSetup;

    /**
     * @param ModuleDataSetupInterface $moduleDataSetup
     */
    public function __construct(ModuleDataSetupInterface $moduleDataSetup)
    {
        $this->moduleDataSetup = $moduleDataSetup;
    }

    /**
     * Do Upgrade
     *
     * @return void
     */
    public function apply()
    {
        $authors[] = [
            'name' => 'Kamran Khan',
            'email' => 'kamran@ksoft.com',
            'designation' => 'Magento Developer',
            'creation_time' => '2022-02-25 09:31:02',
            'update_time' => '2022-02-25 09:31:02'
        ];
        $authors[] = [
            'name' => 'Admin',
            'email' => 'admin@ksoft.com',
            'designation' => 'Ksoft Admin',
            'creation_time' => '2022-02-25 09:31:02',
            'update_time' => '2022-02-25 09:31:02'
        ];
        $table = $this->moduleDataSetup->getTable('ksoft_blog_authors');
        $this->moduleDataSetup->getConnection()->insertArray(
            $table,
            ['name','email','designation','creation_time','update_time'],
            $authors);
    }

    /**
     * @inheritdoc
     */
    public function getAliases()
    {
        return [];
    }

    /**
     * @inheritdoc
     */
    public static function getDependencies()
    {
        return [];
    }
}
