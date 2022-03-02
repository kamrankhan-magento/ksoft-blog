<?php

namespace Ksoft\Blog\Model;

use Ksoft\Blog\Api\Data\PostInterface;
use Ksoft\Blog\Api\Data\PostSearchResultsInterface;
use Ksoft\Blog\Api\PostRepositoryInterface;
use Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface;
use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;
use Ksoft\Blog\Model\ResourceModel\Post as ResourcePost;
use Ksoft\Blog\Model\ResourceModel\Post\CollectionFactory as PostCollectionFactory;

/**
 * Class PostRepository
 */
class PostRepository implements PostRepositoryInterface
{
    /**
     * @var ResourcePost
     */
    protected ResourcePost $resource;

    /**
     * @var PostFactory
     */
    protected PostFactory $postFactory;

    /**
     * @var PostCollectionFactory
     */
    protected PostCollectionFactory $postCollectionFactory;

    /**
     * @var CollectionProcessorInterface|null
     */
    protected ?CollectionProcessorInterface $collectionProcessor;

    /**
     * @param ResourcePost $resource
     * @param PostFactory $postFactory
     * @param PostCollectionFactory $postCollectionFactory
     * @param CollectionProcessorInterface|null $collectionProcessor
     */
    public function __construct(
        ResourcePost $resource,
        PostFactory $postFactory,
        PostCollectionFactory $postCollectionFactory,
        CollectionProcessorInterface $collectionProcessor = null
    )
    {
        $this->resource = $resource;
        $this->postFactory = $postFactory;
        $this->postCollectionFactory = $postCollectionFactory;
        $this->collectionProcessor = $collectionProcessor;
    }

    /**
     * Save Post data
     *
     * @param PostInterface $post
     * @return Post
     * @throws CouldNotSaveException
     */
    public function save(PostInterface $post): Post
    {
        try {
            $this->resource->save($post);
        }catch (\Exception $exception) {
            throw new CouldNotSaveException(__($exception->getMessage()));
        }
        return $post;
    }

    /**
     * Load Post data by given Post Identity
     *
     * @param int $postId
     * @return Post
     * @throws NoSuchEntityException
     */
    public function getById(int $postId): Post
    {
        $post = $this->postFactory->create();
        $this->resource->load($post, $postId);
        if (!$post->getPostId()) {
            throw new NoSuchEntityException(__('The Blog post with the "%1" ID doesn\'t exist.', $postId));
        }
        return $post;
    }

    /**
     * Load Post data collection by given search criteria
     *
     * @param SearchCriteriaInterface $searchCriteria
     * @return PostSearchResultsInterface
     */
    public function getList(SearchCriteriaInterface $searchCriteria): PostSearchResultsInterface
    {
        /** @var \Ksoft\Blog\Model\ResourceModel\Post\Collection $collection */
        $collection = $this->authorCollectionFactory->create();

        $this->collectionProcessor->process($searchCriteria, $collection);

        /** @var PostSearchResultsInterface $searchResults */
        $searchResults = $this->searchResultsFactory->create();
        $searchResults->setSearchCriteria($searchCriteria);
        $searchResults->setItems($collection->getItems());
        $searchResults->setTotalCount($collection->getSize());
        return $searchResults;
    }

    /**
     * Delete Post
     *
     * @param PostInterface $post
     * @return bool
     * @throws CouldNotDeleteException
     */
    public function delete(PostInterface $post): bool
    {
        try {
            $this->resource->delete($post);
        } catch (\Exception $exception) {
            throw new CouldNotDeleteException(__($exception->getMessage()));
        }
        return true;
    }

    /**
     * Delete Post by given Post Identity
     *
     * @param int $postId
     * @return bool
     * @throws CouldNotDeleteException
     * @throws NoSuchEntityException
     */
    public function deleteById(int $postId): bool
    {
        return $this->delete($this->getById($postId));
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
                'Ksoft\Blog\Model\Api\SearchCriteria\PostCollectionProcessor'
            );
        }
        return $this->collectionProcessor;
    }
}
