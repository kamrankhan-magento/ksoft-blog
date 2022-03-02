<?php

namespace Ksoft\Blog\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

/**
 * Interface for post search results.
 * @api
 */
interface PostSearchResultsInterface extends SearchResultsInterface
{
    /**
     * Get posts list.
     *
     * @return PostInterface[]
     */
    public function getItems();

    /**
     * Set posts list.
     *
     * @param PostInterface[] $items
     * @return $this
     */
    public function setItems(?array $items = NULL);
}
