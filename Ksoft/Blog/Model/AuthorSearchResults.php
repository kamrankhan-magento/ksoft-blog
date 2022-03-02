<?php

declare(strict_types=1);

namespace Ksoft\Blog\Model;

use Ksoft\Blog\Api\Data\AuthorSearchResultsInterface;
use Magento\Framework\Api\Search\SearchResult;

/**
 * Service Data Object with Author search results.
 */
class AuthorSearchResults extends SearchResult implements AuthorSearchResultsInterface
{

}
