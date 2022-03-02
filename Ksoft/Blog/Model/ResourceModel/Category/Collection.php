<?php

namespace Ksoft\Blog\Model\ResourceModel\Category;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'category_id';

    /**
     * Event prefix
     *
     * @var string
     */
    protected $_eventPrefix = 'ksoft_blog_categories_collection';

    /**
     * Event object
     *
     * @var string
     */
    protected $_eventObject = 'categories_collection';

    protected function _construct()
    {
        $this->_init(
            \Ksoft\Blog\Model\Category::class,
            \Ksoft\Blog\Model\ResourceModel\Category::class
        );
    }
}
