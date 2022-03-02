<?php

declare(strict_types=1);

namespace Ksoft\Blog\Setup\Patch\Data;

use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;

/**
* Patch is mechanism, that allows to do atomic upgrade data changes
*/
class InsertPosts implements DataPatchInterface
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
        $posts[] = [
            'store_id' => 1,
            'category_id' => 1,
            'author_id' => 1,
            'title' => __('Ksoft Test Blog Post'),
            'creation_time' => '2022-02-25 09:31:02',
            'update_time' => '2022-02-25 09:31:02',
            'is_active' => 1
        ];
        $posts[] = [
            'store_id' => 1,
            'category_id' => 1,
            'author_id' => 1,
            'title' => __('Ksoft Magento 2 Development'),
            'creation_time' => '2022-02-25 09:31:02',
            'update_time' => '2022-02-25 09:31:02',
            'is_active' => 1
        ];
        $table = $this->moduleDataSetup->getTable('ksoft_blog_posts');
        $this->moduleDataSetup->getConnection()->insertArray(
            $table,
            ['store_id','category_id','author_id','title','creation_time','update_time','is_active'],
            $posts);
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
            InsertCategories::class,
            InsertAuthors::class
        ];
    }
}
