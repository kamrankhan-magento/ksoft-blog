<?php

declare(strict_types=1);

namespace Ksoft\Blog\Api;

interface CategoryRepositoryInterface
{
    /**
     * Save category.
     *
     * @param \Ksoft\Blog\Api\Data\CategoryInterface $category
     * @return \Ksoft\Blog\Api\Data\CategoryInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(\Ksoft\Blog\Api\Data\CategoryInterface $category): \Ksoft\Blog\Api\Data\CategoryInterface;

    /**
     * Retrieve category by ID.
     *
     * @param int $categoryId
     * @return \Ksoft\Blog\Api\Data\CategoryInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getById(int $categoryId): \Ksoft\Blog\Api\Data\CategoryInterface;

    /**
     * Retrieve categories matching the specified criteria.
     *
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Ksoft\Blog\Api\Data\CategorySearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria): \Ksoft\Blog\Api\Data\CategorySearchResultsInterface;

    /**
     * Delete category.
     *
     * @param Data\CategoryInterface $category
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(\Ksoft\Blog\Api\Data\CategoryInterface $category): bool;

    /**
     * Delete category by ID.
     *
     * @param int $categoryId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById(int $categoryId): bool;
}
