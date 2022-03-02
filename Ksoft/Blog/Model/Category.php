<?php

namespace Ksoft\Blog\Model;

use Ksoft\Blog\Api\Data\CategoryInterface;
use Magento\Framework\Model\AbstractModel;

/**
 * Ksoft blog category model
 *
 */
class Category extends AbstractModel implements CategoryInterface
{
    /**
     * Prefix of model events names
     *
     * @var string
     */
    protected $_eventPrefix = 'ksoft_blog_categories';

    /**
     * Construct
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(\Ksoft\Blog\Model\ResourceModel\Category::class);
    }

    /**
     * Retrieve category id
     *
     * @return int|null
     */
    public function getCategoryId(): ?int
    {
        return $this->getData(self::CATEGORY_ID);
    }

    /**
     * Retrieve store id
     *
     * @return int|null
     */
    public function getStoreId(): ?int
    {
       return $this->getData(self::STORE_ID);
    }

    /**
     * Retrieve category title
     *
     * @return string|null
     */
    public function getTitle(): ?string
    {
       return $this->getData(self::TITLE);
    }

    /**
     * Retrieve category content
     *
     * @return string|null
     */
    public function getContent(): ?string
    {
       return $this->getData(self::CONTENT);
    }

    /**
     * Retrieve category creation time
     *
     * @return string|null
     */
    public function getCreationTime(): ?string
    {
       return $this->getData(self::CREATION_TIME);
    }

    /**
     * Retrieve category update time
     *
     * @return string|null
     */
    public function getUpdateTime(): ?string
    {
       return $this->getData(self::UPDATE_TIME);
    }

    /**
     * Retrieve category is active
     *
     * @return bool|null
     */
    public function getIsActive(): ?bool
    {
        return $this->getData(self::IS_ACTIVE);
    }

    /**
     * Set category id
     *
     * @param int $categoryId
     * @return CategoryInterface
     */
    public function setCategoryId(int $categoryId): CategoryInterface
    {
        return $this->setData(self::CATEGORY_ID,$categoryId);
    }

    /**
     * Set store id
     *
     * @param int $storeId
     * @return CategoryInterface
     */
    public function setStoreId(int $storeId): CategoryInterface
    {
       return $this->setData(self::STORE_ID,$storeId);
    }

    /**
     * set category title
     *
     * @param string $title
     * @return CategoryInterface
     */
    public function setTitle(string $title): CategoryInterface
    {
       return $this->setData(self::TITLE,$title);
    }

    /**
     * Set category content
     *
     * @param string $content
     * @return CategoryInterface
     */
    public function setContent(string $content): CategoryInterface
    {
       return $this->setData(self::CONTENT,$content);
    }

    /**
     * Set category creation time
     *
     * @param string $creationTime
     * @return CategoryInterface
     */
    public function setCreationTime(string $creationTime): CategoryInterface
    {
       return $this->setData(self::CREATION_TIME,$creationTime);
    }

    /**
     * Set category update time
     *
     * @param string $updateTime
     * @return CategoryInterface
     */
    public function setUpdateTime(string $updateTime): CategoryInterface
    {
       return $this->setData(self::UPDATE_TIME,$updateTime);
    }

    /**
     * Set category is active
     *
     * @param bool $isActive
     * @return CategoryInterface
     */
    public function setIsActive(bool $isActive): CategoryInterface
    {
        return $this->setData(self::IS_ACTIVE,$isActive);
    }
}
