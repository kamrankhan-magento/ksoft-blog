<?php

namespace Ksoft\Blog\Model;

use Ksoft\Blog\Api\CategoryRepositoryInterface;
use Ksoft\Blog\Api\Data\CategoryInterface;
use Ksoft\Blog\Api\Data\CategorySearchResultsInterface;
use Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface;
use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;
use Ksoft\Blog\Model\ResourceModel\Category as ResourceCategory;
use Ksoft\Blog\Model\ResourceModel\Category\CollectionFactory as CategoryCollectionFactory;

/**
 * Class CategoryRepository
 */
class CategoryRepository implements CategoryRepositoryInterface
{
    /**
     * @var ResourceCategory
     */
    protected ResourceCategory $resource;

    /**
     * @var CategoryFactory
     */
    protected CategoryFactory $categoryFactory;

    /**
     * @var CategoryCollectionFactory
     */
    protected CategoryCollectionFactory $categoryCollectionFactory;

    /**
     * @var CollectionProcessorInterface|null
     */
    protected ?CollectionProcessorInterface $collectionProcessor;

    /**
     * @param ResourceCategory $resource
     * @param CategoryFactory $categoryFactory
     * @param CategoryCollectionFactory $categoryCollectionFactory
     * @param CollectionProcessorInterface|null $collectionProcessor
     */
    public function __construct(
        ResourceCategory $resource,
        CategoryFactory $categoryFactory,
        CategoryCollectionFactory $categoryCollectionFactory,
        CollectionProcessorInterface $collectionProcessor = null
    )
    {
        $this->resource = $resource;
        $this->categoryFactory = $categoryFactory;
        $this->categoryCollectionFactory = $categoryCollectionFactory;
        $this->collectionProcessor = $collectionProcessor;
    }
    /**
     * Save Category data
     *
     * @param CategoryInterface $category
     * @return CategoryInterface
     * @throws CouldNotSaveException
     */
    public function save(CategoryInterface $category): CategoryInterface
    {
        try {
            $this->resource->save($category);
        }catch (\Exception $exception) {
            throw new CouldNotSaveException(__($exception->getMessage()));
        }
        return $category;
    }

    /**
     * Load Category data by give Category Identity
     *
     * @param int $categoryId
     * @return CategoryInterface
     * @throws NoSuchEntityException
     */
    public function getById(int $categoryId): CategoryInterface
    {
        $category = $this->categoryFactory->create();
        $this->resource->load($category, $categoryId);
        if (!$category->getCategoryId()) {
            throw new NoSuchEntityException(__('The Blog category with the "%1" ID doesn\'t exist.', $categoryId));
        }
        return $category;
    }

    /**
     * Load Category data collection by given search criteria
     *
     * @param SearchCriteriaInterface $searchCriteria
     * @return CategorySearchResultsInterface
     */
    public function getList(SearchCriteriaInterface $searchCriteria): CategorySearchResultsInterface
    {
        /** @var \Ksoft\Blog\Model\ResourceModel\Category\Collection $collection */
        $collection = $this->authorCollectionFactory->create();

        $this->collectionProcessor->process($searchCriteria, $collection);

        /** @var CategorySearchResultsInterface $searchResults */
        $searchResults = $this->searchResultsFactory->create();
        $searchResults->setSearchCriteria($searchCriteria);
        $searchResults->setItems($collection->getItems());
        $searchResults->setTotalCount($collection->getSize());
        return $searchResults;
    }

    /**
     * Delete Category by given Category Identity
     *
     * @param CategoryInterface $category
     * @return bool
     * @throws CouldNotDeleteException
     * @throws NoSuchEntityException
     */
    public function delete(CategoryInterface $category): bool
    {
        try {
            $this->resource->delete($category);
        } catch (\Exception $exception) {
            throw new CouldNotDeleteException(__($exception->getMessage()));
        }
        return true;
    }

    /**
     * Delete Category by given Category Identity
     *
     * @param int $categoryId
     * @return bool
     * @throws CouldNotDeleteException
     * @throws NoSuchEntityException
     */
    public function deleteById(int $categoryId): bool
    {
        return $this->delete($this->getById($categoryId));
    }

    /**
     * Retrieve collection processor
     *
     * @return CollectionProcessorInterface
     */
    private function getCollectionProcessor()
    {
        if (!$this->collectionProcessor) {
            $this->collectionProcessor = \Magento\Framework\App\ObjectManager::getInstance()->get(
                'Ksoft\Blog\Model\Api\SearchCriteria\CategoryCollectionProcessor'
            );
        }
        return $this->collectionProcessor;
    }
}
