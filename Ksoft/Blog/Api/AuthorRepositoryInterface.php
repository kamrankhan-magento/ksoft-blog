<?php

declare(strict_types=1);

namespace Ksoft\Blog\Api;

interface AuthorRepositoryInterface
{
    /**
     * Save author.
     *
     * @param \Ksoft\Blog\Api\Data\AuthorInterface $author
     * @return \Ksoft\Blog\Api\Data\AuthorInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(\Ksoft\Blog\Api\Data\AuthorInterface $author): \Ksoft\Blog\Api\Data\AuthorInterface;

    /**
     * Retrieve author by ID.
     *
     * @param int $authorId
     * @return \Ksoft\Blog\Api\Data\AuthorInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getById(int $authorId): \Ksoft\Blog\Api\Data\AuthorInterface;

    /**
     * Retrieve authors matching the specified criteria.
     *
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Ksoft\Blog\Api\Data\AuthorSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria): \Ksoft\Blog\Api\Data\AuthorSearchResultsInterface;

    /**
     * Delete author.
     *
     * @param \Ksoft\Blog\Api\Data\AuthorInterface $author
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(\Ksoft\Blog\Api\Data\AuthorInterface $author): bool;

    /**
     * Delete author by ID
     *
     * @param int $authorId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById(int $authorId): bool;
}
