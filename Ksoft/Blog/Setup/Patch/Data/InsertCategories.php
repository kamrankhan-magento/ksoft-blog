<?php

declare(strict_types=1);

namespace Ksoft\Blog\Setup\Patch\Data;

use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;

/**
 * Patch is mechanism, that allows to do atomic upgrade data changes
 */
class InsertCategories implements DataPatchInterface
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
        $categories[] = [
            'store_id' => 1,
            'title' => __('magento 2'),
            'content' => __('Magento 2 Development related posts'),
            'creation_time' => '2022-02-25 09:31:02',
            'update_time' => '2022-02-25 09:31:02',
            'is_active' => 1

        ];
        $categories[] = [
            'store_id' => 1,
            'title' => __('sales'),
            'content' => __('Product Sales'),
            'creation_time' => '2022-02-25 09:31:02',
            'update_time' => '2022-02-25 09:31:02',
            'is_active' => 1

        ];
        $table = $this->moduleDataSetup->getTable('ksoft_blog_categories');
        $this->moduleDataSetup->getConnection()->insertArray(
            $table,
            ['store_id','title','content','creation_time','update_time','is_active'],
            $categories);
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
        return [
            InsertAuthors::class
        ];
    }
}
