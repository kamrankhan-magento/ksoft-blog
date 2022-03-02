<?php

declare(strict_types=1);

namespace Ksoft\Blog\Api\Data;

interface CategoryInterface
{
    public const CATEGORY_ID = 'category_id';
    public const STORE_ID = 'store_id';
    public const TITLE = 'title';
    public const CONTENT = 'content';
    public const CREATION_TIME = 'creation_time';
    public const UPDATE_TIME = 'update_time';
    public const IS_ACTIVE = 'is_active';

    /**
     * Get Category ID
     * @return int|null
     */
    public function getCategoryId(): ?int;

    /**
     * Get Category Store ID
     * @return int|null
     */
    public function getStoreId(): ?int;

    /**
     * Get Category Title
     * @return string|null
     */
    public function getTitle(): ?string;

    /**
     * Get Category Content
     * @return string|null
     */
    public function getContent(): ?string;

    /**
     * Get Creation Time
     * @return string|null
     */
    public function getCreationTime(): ?string;

    /**
     * Get Update Time
     * @return string|null
     */
    public function getUpdateTime(): ?string;

    /**
     * Get Is Active
     * @return bool|null
     */
    public function getIsActive(): ?bool;

    /**
     * @param int $categoryId
     * @return \Ksoft\Blog\Api\Data\CategoryInterface
     */
    public function setCategoryId(int $categoryId): CategoryInterface;

    /**
     * @param int $storeId
     * @return \Ksoft\Blog\Api\Data\CategoryInterface
     */
    public function setStoreId(int $storeId): CategoryInterface;

    /**
     * @param string $title
     * @return \Ksoft\Blog\Api\Data\CategoryInterface
     */
    public function setTitle(string $title): CategoryInterface;

    /**
     * @param string $content
     * @return \Ksoft\Blog\Api\Data\CategoryInterface
     */
    public function setContent(string $content): CategoryInterface;

    /**
     * @param string $creationTime
     * @return \Ksoft\Blog\Api\Data\CategoryInterface
     */
    public function setCreationTime( string $creationTime ): CategoryInterface;

    /**
     * @param string $updateTime
     * @return \Ksoft\Blog\Api\Data\CategoryInterface
     */
    public function setUpdateTime( string $updateTime ): CategoryInterface;

    /**
     * @param bool $isActive
     * @return \Ksoft\Blog\Api\Data\CategoryInterface
     */
    public function setIsActive( bool $isActive ): CategoryInterface;
}
