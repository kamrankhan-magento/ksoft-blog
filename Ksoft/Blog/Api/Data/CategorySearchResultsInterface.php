<?php

namespace Ksoft\Blog\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

/**
 * @api
 */
interface CategorySearchResultsInterface extends SearchResultsInterface
{
    /**
     * Get categories list.
     *
     * @return CategoryInterface[]
     */
    public function getItems();

    /**
     * Set categories list
     *
     * @param CategoryInterface[] $items
     * @return $this
     */
    public function setItems(?array $items = NULL);
}
