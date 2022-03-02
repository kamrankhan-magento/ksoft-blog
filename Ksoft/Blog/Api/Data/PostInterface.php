<?php

declare( strict_types=1 );

namespace Ksoft\Blog\Api\Data;

/**
 * @api
 */
interface PostInterface
{
    public const POST_ID = 'post_id';
    public const STORE_ID = 'store_id';
    public const CATEGORY_ID = 'category_id';
    public const AUTHOR_ID = 'author_id';
    public const TITLE = 'title';
    public const POST_LAYOUT = 'post_layout';
    public const META_KEYWORDS = 'meta_keywords';
    public const META_DESCRIPTION = 'meta_description';
    public const IDENTIFIER = 'identifier';
    public const CONTENT_HEADING = 'content_heading';
    public const CONTENT = 'content';
    public const CREATION_TIME = 'creation_time';
    public const UPDATE_TIME = 'update_time';
    public const IS_ACTIVE = 'is_active';
    public const SORT_ORDER = 'sort_order';
    public const LAYOUT_UPDATE_XML = 'layout_update_xml';
    public const CUSTOM_THEME = 'custom_theme';
    public const CUSTOM_ROOT_TEMPLATE = 'custom_root_template';
    public const CUSTOM_LAYOUT_UPDATE_XML = 'custom_layout_update_xml';
    public const LAYOUT_UPDATE_SELECTED = 'layout_update_selected';
    public const CUSTOM_THEME_FROM = 'custom_theme_from';
    public const CUSTOM_THEME_TO = 'custom_theme_to';

    /**
     * Get Post ID
     * @return int|null
     */
    public function getPostId(): ?int;

    /**
     * Get Store ID
     * @return int|null
     */
    public function getStoreId(): ?int;

    /**
     * Get Category ID
     * @return int|null
     */
    public function getCategoryId(): ?int;

    /**
     * Get Author ID
     * @return int|null
     */
    public function getAuthorId(): ?int;

    /**
     * Get Title
     * @return string|null
     */
    public function getTitle(): ?string;

    /**
     * Get Post Layout
     * @return string|null
     */
    public function getPostLayout(): ?string;

    /**
     * Get Meta Keywords
     * @return string|null
     */
    public function getMetaKeywords(): ?string;

    /**
     * Get Meta Description
     * @return string|null
     */
    public function getMetaDescription(): ?string;

    /**
     * Get Identifier
     * @return string|null
     */
    public function getIdentifier(): ?string;

    /**
     * Get Content Heading
     * @return string|null
     */
    public function getContentHeading(): ?string;

    /**
     * Get Content
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
     * Get Sort Order
     * @return int|null
     */
    public function getSortOrder(): ?int;

    /**
     * Get Layout Update XML
     * @return string|null
     */
    public function getLayoutUpdateXml(): ?string;

    /**
     * Get Custom Theme
     * @return string|null
     */
    public function getCustomTheme(): ?string;

    /**
     * Get Custom Root Template
     * @return string|null
     */
    public function getCustomRootTemplate(): ?string;

    /**
     * Get Custom Layout Update XML
     * @return string|null
     */
    public function getCustomLayoutUpdateXml(): ?string;

    /**
     * Get Layout Update Selected
     * @return string|null
     */
    public function getLayoutUpdateSelected(): ?string;

    /**
     * Get Custom Theme From
     * @return string|null
     */
    public function getCustomThemeFrom(): ?string;

    /**
     * Get Custom Theme To
     * @return string|null
     */
    public function getCustomThemeTo(): ?string;

    /**
     * @param int $postId
     * @return \Ksoft\Blog\Api\Data\PostInterface
     */
    public function setPostId( int $postId ): PostInterface;

    /**
     * @param int $storeId
     * @return \Ksoft\Blog\Api\Data\PostInterface
     */
    public function setStoreId( int $storeId ): PostInterface;

    /**
     * @param int $categoryId
     * @return \Ksoft\Blog\Api\Data\PostInterface
     */
    public function setCategoryId( int $categoryId ): PostInterface;

    /**
     * @param int $authorId
     * @return \Ksoft\Blog\Api\Data\PostInterface
     */
    public function setAuthorId( int $authorId ): PostInterface;

    /**
     * @param string $title
     * @return \Ksoft\Blog\Api\Data\PostInterface
     */
    public function setTitle( string $title ): PostInterface;

    /**
     * @param string $postLayout
     * @return \Ksoft\Blog\Api\Data\PostInterface
     */
    public function setPostLayout( string $postLayout ): PostInterface;

    /**
     * @param string $metaKeywords
     * @return \Ksoft\Blog\Api\Data\PostInterface
     */
    public function setMetaKeywords( string $metaKeywords ): PostInterface;

    /**
     * @param string $metaDescription
     * @return \Ksoft\Blog\Api\Data\PostInterface
     */
    public function setMetaDescription( string $metaDescription ): PostInterface;

    /**
     * @param string $identifier
     * @return \Ksoft\Blog\Api\Data\PostInterface
     */
    public function setIdentifier( string $identifier ): PostInterface;

    /**
     * @param string $contentHeading
     * @return \Ksoft\Blog\Api\Data\PostInterface
     */
    public function setContentHeading( string $contentHeading ): PostInterface;

    /**
     * @param string $content
     * @return \Ksoft\Blog\Api\Data\PostInterface
     */
    public function setContent( string $content ): PostInterface;

    /**
     * @param string $creationTime
     * @return \Ksoft\Blog\Api\Data\PostInterface
     */
    public function setCreationTime( string $creationTime ): PostInterface;

    /**
     * @param string $updateTime
     * @return \Ksoft\Blog\Api\Data\PostInterface
     */
    public function setUpdateTime( string $updateTime ): PostInterface;

    /**
     * @param bool $isActive
     * @return \Ksoft\Blog\Api\Data\PostInterface
     */
    public function setIsActive( bool $isActive ): PostInterface;

    /**
     * @param int $sortOrder
     * @return \Ksoft\Blog\Api\Data\PostInterface
     */
    public function setSortOrder( int $sortOrder ): PostInterface;

    /**
     * @param string $layoutUpdateXml
     * @return \Ksoft\Blog\Api\Data\PostInterface
     */
    public function setLayoutUpdateXml( string $layoutUpdateXml ): PostInterface;

    /**
     * @param string $customTheme
     * @return \Ksoft\Blog\Api\Data\PostInterface
     */
    public function setCustomTheme( string $customTheme ): PostInterface;

    /**
     * @param string $customRootTemplate
     * @return \Ksoft\Blog\Api\Data\PostInterface
     */
    public function setCustomRootTemplate( string $customRootTemplate ): PostInterface;

    /**
     * @param string $customLayoutUpdateXml
     * @return \Ksoft\Blog\Api\Data\PostInterface
     */
    public function setCustomLayoutUpdateXml( string $customLayoutUpdateXml ): PostInterface;

    /**
     * @param string $layoutUpdateSelected
     * @return \Ksoft\Blog\Api\Data\PostInterface
     */
    public function setLayoutUpdateSelected( string $layoutUpdateSelected ): PostInterface;

    /**
     * @param string $customThemeFrom
     * @return \Ksoft\Blog\Api\Data\PostInterface
     */
    public function setCustomThemeFrom( string $customThemeFrom ): PostInterface;

    /**
     * @param string $customThemeTo
     * @return \Ksoft\Blog\Api\Data\PostInterface
     */
    public function setCustomThemeTo( string $customThemeTo ): PostInterface;

}
