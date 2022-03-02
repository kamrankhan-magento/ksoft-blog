<?php

declare(strict_types=1);

namespace Ksoft\Blog\Model;

use Ksoft\Blog\Api\Data\CategorySearchResultsInterface;
use Magento\Framework\Api\Search\SearchResult;

/**
 * Service Data Object with Category search results.
 */
class CategorySearchResults extends SearchResult implements CategorySearchResultsInterface
{

}
