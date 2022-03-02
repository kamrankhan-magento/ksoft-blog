<?php

namespace Ksoft\Blog\Model\ResourceModel\Post;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'post_id';

    /**
     * Event prefix
     *
     * @var string
     */
    protected $_eventPrefix = 'ksoft_blog_posts_collection';

    /**
     * Event object
     *
     * @var string
     */
    protected $_eventObject = 'posts_collection';

    protected function _construct()
    {
        $this->_init(
            \Ksoft\Blog\Model\Post::class,
            \Ksoft\Blog\Model\ResourceModel\Post::class
        );
    }
}
