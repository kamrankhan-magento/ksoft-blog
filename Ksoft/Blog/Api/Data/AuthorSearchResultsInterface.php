<?php

namespace Ksoft\Blog\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

/**
 * @api
 */
interface AuthorSearchResultsInterface extends SearchResultsInterface
{
    /**
     * Get authors list
     *
     * @return AuthorInterface[]
     */
    public function getItems();

    /**
     * Set authors list
     *
     * @param AuthorInterface[] $items
     * @return  $this
     */
    public function setItems(?array $items = NULL);
}
