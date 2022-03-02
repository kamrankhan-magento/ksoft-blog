<?php

namespace Ksoft\Blog\Model;

use Ksoft\Blog\Api\AuthorRepositoryInterface;
use Ksoft\Blog\Api\Data\AuthorInterface;
use Ksoft\Blog\Api\Data\AuthorSearchResultsInterface;
use Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface;
use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;
use Ksoft\Blog\Model\ResourceModel\Author as ResourceAuthor;
use Ksoft\Blog\Model\ResourceModel\Author\CollectionFactory as AuthorCollectionFactory;

/**
 * Class AuthorRepository
 */
class AuthorRepository implements AuthorRepositoryInterface
{
    /**
     * @var ResourceAuthor
     */
    protected ResourceAuthor $resource;

    /**
     * @var AuthorFactory
     */
    protected AuthorFactory $authorFactory;

    /**
     * @var AuthorCollectionFactory
     */
    protected AuthorCollectionFactory $authorCollectionFactory;

    /**
     * @var CollectionProcessorInterface|null
     */
    protected ?CollectionProcessorInterface $collectionProcessor;

    /**
     * @param ResourceAuthor $resource
     * @param AuthorFactory $authorFactory
     * @param AuthorCollectionFactory $authorCollectionFactory
     * @param CollectionProcessorInterface|null $collectionProcessor
     */
    public function __construct(
        ResourceAuthor $resource,
        AuthorFactory $authorFactory,
        AuthorCollectionFactory $authorCollectionFactory,
        CollectionProcessorInterface $collectionProcessor = null
    )
    {
        $this->resource = $resource;
        $this->authorFactory = $authorFactory;
        $this->authorCollectionFactory = $authorCollectionFactory;
        $this->collectionProcessor = $collectionProcessor;
    }

    /**
     * Save Author data
     *
     * @param AuthorInterface $author
     * @return Author
     * @throws CouldNotSaveException
     */
    public function save(AuthorInterface $author): Author
    {
        try {
            $this->resource->save($author);
        }catch (\Exception $exception) {
            throw new CouldNotSaveException(__($exception->getMessage()));
        }
        return $author;
    }

    /**
     * Load Author data by given Author Identity
     *
     * @param int $authorId
     * @return Author
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getById(int $authorId): Author
    {
        $author = $this->authorFactory->create();
        $this->resource->load($author, $authorId);
        if (!$author->getAuthorId()) {
            throw new NoSuchEntityException(__('The Blog author with the "%1" ID doesn\'t exist.', $authorId));
        }
        return $author;
    }

    /**
     * Load Author data collection by given search criteria
     *
     * @param SearchCriteriaInterface $searchCriteria
     * @return AuthorSearchResultsInterface
     */
    public function getList(SearchCriteriaInterface $searchCriteria): AuthorSearchResultsInterface
    {
        /** @var \Ksoft\Blog\Model\ResourceModel\Author\Collection $collection */
        $collection = $this->authorCollectionFactory->create();

        $this->collectionProcessor->process($searchCriteria, $collection);

        /** @var AuthorSearchResultsInterface $searchResults */
        $searchResults = $this->searchResultsFactory->create();
        $searchResults->setSearchCriteria($searchCriteria);
        $searchResults->setItems($collection->getItems());
        $searchResults->setTotalCount($collection->getSize());
        return $searchResults;
    }

    /**
     * Delete Author
     *
     * @param AuthorInterface $author
     * @return bool
     * @throws CouldNotDeleteException
     */
    public function delete(AuthorInterface $author): bool
    {
        try {
            $this->resource->delete($author);
        } catch (\Exception $exception) {
            throw new CouldNotDeleteException(__($exception->getMessage()));
        }
        return true;
    }

    /**
     * Delete Author by given Author Identity
     *
     * @param int $authorId
     * @return bool
     * @throws CouldNotDeleteException
     * @throws NoSuchEntityException
     */
    public function deleteById(int $authorId): bool
    {
        return $this->delete($this->getById($authorId));
    }

    /**
     * Retrieve collection processor
     *
     * @return CollectionProcessorInterface
     */
    private function getCollectionProcessor(): ?CollectionProcessorInterface
    {
        if (!$this->collectionProcessor) {
            $this->collectionProcessor = \Magento\Framework\App\ObjectManager::getInstance()->get(
                'Ksoft\Blog\Model\Api\SearchCriteria\AuthorCollectionProcessor'
            );
        }
        return $this->collectionProcessor;
    }
}
