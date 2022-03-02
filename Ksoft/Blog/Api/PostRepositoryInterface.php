<?php

declare(strict_types=1);

namespace Ksoft\Blog\Api;

interface PostRepositoryInterface
{
    /**
     * Save post.
     *
     * @param \Ksoft\Blog\Api\Data\PostInterface $post
     * @return \Ksoft\Blog\Api\Data\PostInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(\Ksoft\Blog\Api\Data\PostInterface $post): \Ksoft\Blog\Api\Data\PostInterface;

    /**
     * Retrieve post by ID.
     *
     * @param int $postId
     * @return \Ksoft\Blog\Api\Data\PostInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getById(int $postId): \Ksoft\Blog\Api\Data\PostInterface;

    /**
     * Get posts matching the specified criteria.
     *
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Ksoft\Blog\Api\Data\PostSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria): \Ksoft\Blog\Api\Data\PostSearchResultsInterface;

    /**
     * Delete post.
     *
     * @param \Ksoft\Blog\Api\Data\PostInterface $post
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(\Ksoft\Blog\Api\Data\PostInterface $post): bool;

    /**
     * Delete post by ID.
     *
     * @param int $postId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById(int $postId): bool;
}
