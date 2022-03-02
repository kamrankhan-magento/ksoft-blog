<?php

namespace Ksoft\Blog\Model;

use Ksoft\Blog\Api\Data\PostInterface;
use Magento\Framework\DataObject\IdentityInterface;
use Magento\Framework\Model\AbstractModel;

/**
 * Ksoft blog post model
 *
 */
class Post extends AbstractModel implements PostInterface, IdentityInterface
{

    /**
     * Blog post cache tag
     */
    public const CACHE_TAG = 'ksoft_blog_p';

    /**
     * @var string
     */
    protected $_cacheTag = self::CACHE_TAG;

    /**
     * Prefix of model events names
     *
     * @var string
     */
    protected $_eventPrefix = 'ksoft_blog_posts';

    /**
     * Construct
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(\Ksoft\Blog\Model\ResourceModel\Post::class);
    }

    /**
     * Retrieve post it
     *
     * @return int|null
     */
    public function getPostId(): ?int
    {
        return $this->getData(self::POST_ID);
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
     * Retrieve category id
     *
     * @return int|null
     */
    public function getCategoryId(): ?int
    {
        return $this->getData(self::CATEGORY_ID);
    }

    /**
     * Retrieve author id
     *
     * @return int|null
     */
    public function getAuthorId(): ?int
    {
       return $this->getData(self::AUTHOR_ID);
    }

    /**
     * Retrieve post title
     *
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->getData(self::TITLE);
    }

    /**
     * Retrieve post layout
     *
     * @return string|null
     */
    public function getPostLayout(): ?string
    {
       return $this->getData(self::POST_LAYOUT);
    }

    /**
     * Retrieve post meta keywords
     *
     * @return string|null
     */
    public function getMetaKeywords(): ?string
    {
       return $this->getData(self::META_KEYWORDS);
    }

    /**
     * Retrieve post meta description
     *
     * @return string|null
     */
    public function getMetaDescription(): ?string
    {
       return $this->getData(self::META_DESCRIPTION);
    }

    /**
     * Retrieve post identifier
     *
     * @return string|null
     */
    public function getIdentifier(): ?string
    {
       return $this->getData(self::IDENTIFIER);
    }

    /**
     * Retrieve post content heading
     *
     * @return string|null
     */
    public function getContentHeading(): ?string
    {
       return $this->getData(self::CONTENT_HEADING);
    }

    /**
     * Retrieve post content
     *
     * @return string|null
     */
    public function getContent(): ?string
    {
       return $this->getData(self::CONTENT);
    }

    /**
     * Retrieve post creation time
     *
     * @return string|null
     */
    public function getCreationTime(): ?string
    {
       return $this->getData(self::CREATION_TIME);
    }

    /**
     * Retrieve post update time
     *
     * @return string|null
     */
    public function getUpdateTime(): ?string
    {
       return $this->getData(self::UPDATE_TIME);
    }

    /**
     * Retrieve post is active
     *
     * @return bool|null
     */
    public function getIsActive(): ?bool
    {
       return $this->getData(self::IS_ACTIVE);
    }

    /**
     * Retrieve post sort order
     *
     * @return int|null
     */
    public function getSortOrder(): ?int
    {
       return $this->getData(self::SORT_ORDER);
    }

    /**
     * Retrieve post layout update xml
     *
     * @return string|null
     */
    public function getLayoutUpdateXml(): ?string
    {
       return $this->getData(self::LAYOUT_UPDATE_XML);
    }

    /**
     * Retrieve post custom theme
     *
     * @return string|null
     */
    public function getCustomTheme(): ?string
    {
       return $this->getData(self::CUSTOM_THEME);
    }

    /**
     * Retrieve post custom root template
     *
     * @return string|null
     */
    public function getCustomRootTemplate(): ?string
    {
       return $this->getData(self::CUSTOM_ROOT_TEMPLATE);
    }

    /**
     * Retrieve post custom layout update xml
     *
     * @return string|null
     */
    public function getCustomLayoutUpdateXml(): ?string
    {
       return $this->getData(self::CUSTOM_LAYOUT_UPDATE_XML);
    }

    /**
     * Retrieve post layout update selected
     *
     * @return string|null
     */
    public function getLayoutUpdateSelected(): ?string
    {
       return $this->getData(self::LAYOUT_UPDATE_SELECTED);
    }

    /**
     * Retrieve post custom theme from
     *
     * @return string|null
     */
    public function getCustomThemeFrom(): ?string
    {
       return $this->getData(self::CUSTOM_THEME_FROM);
    }

    /**
     * Retrieve post custom theme to
     *
     * @return string|null
     */
    public function getCustomThemeTo(): ?string
    {
       return $this->getData(self::CUSTOM_THEME_TO);
    }

    /**
     * Set post id
     *
     * @param int $postId
     * @return PostInterface
     */
    public function setPostId(int $postId): PostInterface
    {
       return $this->setData(self::POST_ID,$postId);
    }

    /**
     * Set post store id
     *
     * @param int $storeId
     * @return PostInterface
     */
    public function setStoreId(int $storeId): PostInterface
    {
       return $this->setData(self::STORE_ID,$storeId);
    }

    /**
     * Set post category id
     *
     * @param int $categoryId
     * @return PostInterface
     */
    public function setCategoryId(int $categoryId): PostInterface
    {
        return $this->setData(self::CATEGORY_ID,$categoryId);
    }

    /**
     * Set post author id
     *
     * @param int $authorId
     * @return PostInterface
     */
    public function setAuthorId(int $authorId): PostInterface
    {
       return $this->setData(self::AUTHOR_ID,$authorId);
    }

    /**
     * Set post title
     *
     * @param string $title
     * @return PostInterface
     */
    public function setTitle(string $title): PostInterface
    {
        return $this->setData(self::TITLE,$title);
    }

    /**
     * Set post layout
     *
     * @param string $postLayout
     * @return PostInterface
     */
    public function setPostLayout(string $postLayout): PostInterface
    {
        return $this->setData(self::POST_LAYOUT,$postLayout);
    }

    /**
     * Set post meta keywords
     *
     * @param string $metaKeywords
     * @return PostInterface
     */
    public function setMetaKeywords(string $metaKeywords): PostInterface
    {
       return $this->setData(self::META_KEYWORDS,$metaKeywords);
    }

    /**
     * Set post meta description
     *
     * @param string $metaDescription
     * @return PostInterface
     */
    public function setMetaDescription(string $metaDescription): PostInterface
    {
       return $this->setData(self::META_DESCRIPTION,$metaDescription);
    }

    /**
     * Set post identifier
     *
     * @param string $identifier
     * @return PostInterface
     */
    public function setIdentifier(string $identifier): PostInterface
    {
        return $this->setData(self::IDENTIFIER,$identifier);
    }

    /**
     * Set post content heading
     *
     * @param string $contentHeading
     * @return PostInterface
     */
    public function setContentHeading(string $contentHeading): PostInterface
    {
       return $this->setData(self::CONTENT_HEADING,$contentHeading);
    }

    /**
     * Set post content
     *
     * @param string $content
     * @return PostInterface
     */
    public function setContent(string $content): PostInterface
    {
       return $this->setData(self::CONTENT,$content);
    }

    /**
     * Set post creation time
     *
     * @param string $creationTime
     * @return PostInterface
     */
    public function setCreationTime(string $creationTime): PostInterface
    {
       return $this->setData(self::CREATION_TIME,$creationTime);
    }

    /**
     * Set post update time
     *
     * @param string $updateTime
     * @return PostInterface
     */
    public function setUpdateTime(string $updateTime): PostInterface
    {
       return $this->setData(self::UPDATE_TIME,$updateTime);
    }

    /**
     * Set post is active
     *
     * @param bool $isActive
     * @return PostInterface
     */
    public function setIsActive(bool $isActive): PostInterface
    {
       return $this->setData(self::IS_ACTIVE,$isActive);
    }

    /**
     * Set post sort order
     *
     * @param int $sortOrder
     * @return PostInterface
     */
    public function setSortOrder(int $sortOrder): PostInterface
    {
       return $this->setData(self::SORT_ORDER,$sortOrder);
    }

    /**
     * Set post layout update xml
     *
     * @param string $layoutUpdateXml
     * @return PostInterface
     */
    public function setLayoutUpdateXml(string $layoutUpdateXml): PostInterface
    {
       return $this->setData(self::LAYOUT_UPDATE_XML,$layoutUpdateXml);
    }

    /**
     * Set post custom theme
     *
     * @param string $customTheme
     * @return PostInterface
     */
    public function setCustomTheme(string $customTheme): PostInterface
    {
        return $this->setData(self::CUSTOM_THEME,$customTheme);
    }

    /**
     * Set post custom root template
     *
     * @param string $customRootTemplate
     * @return PostInterface
     */
    public function setCustomRootTemplate(string $customRootTemplate): PostInterface
    {
        return $this->setData(self::CUSTOM_ROOT_TEMPLATE,$customRootTemplate);
    }

    /**
     * Set post custom layout update xml
     *
     * @param string $customLayoutUpdateXml
     * @return PostInterface
     */
    public function setCustomLayoutUpdateXml(string $customLayoutUpdateXml): PostInterface
    {
       return $this->setData(self::CUSTOM_LAYOUT_UPDATE_XML,$customLayoutUpdateXml);
    }

    /**
     * Set post layout update selected
     *
     * @param string $layoutUpdateSelected
     * @return PostInterface
     */
    public function setLayoutUpdateSelected(string $layoutUpdateSelected): PostInterface
    {
       return $this->setData(self::LAYOUT_UPDATE_SELECTED,$layoutUpdateSelected);
    }

    /**
     * Set post custom theme from
     *
     * @param string $customThemeFrom
     * @return PostInterface
     */
    public function setCustomThemeFrom(string $customThemeFrom): PostInterface
    {
       return $this->setData(self::CUSTOM_THEME_FROM,$customThemeFrom);
    }

    /**
     * Set post custom theme to
     *
     * @param string $customThemeTo
     * @return PostInterface
     */
    public function setCustomThemeTo(string $customThemeTo): PostInterface
    {
        return $this->setData(self::CUSTOM_THEME_TO,$customThemeTo);
    }

    /**
     * @return string[]
     */
    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getPostId()];
    }
}
