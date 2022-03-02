<?php

declare(strict_types=1);

namespace Ksoft\Blog\Model;

use Ksoft\Blog\Api\Data\PostSearchResultsInterface;
use Magento\Framework\Api\Search\SearchResult;

/**
 * Service Data Object with Post search results.
 */
class PostSearchResults extends SearchResult implements PostSearchResultsInterface
{

}
