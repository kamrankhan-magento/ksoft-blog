<?php

namespace Ksoft\Blog\Model\ResourceModel\Author;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'author_id';

    /**
     * Event prefix
     *
     * @var string
     */
    protected $_eventPrefix = 'ksoft_blog_authors_collection';

    /**
     * Event object
     *
     * @var string
     */
    protected $_eventObject = 'authors_collection';

    protected function _construct()
    {
        $this->_init(
            \Ksoft\Blog\Model\Author::class,
            \Ksoft\Blog\Model\ResourceModel\Author::class
        );
    }
}
