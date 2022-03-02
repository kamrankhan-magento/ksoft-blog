<?php

namespace Ksoft\Blog\Model;

use Ksoft\Blog\Api\Data\AuthorInterface;
use Magento\Framework\Model\AbstractModel;

/**
 * Ksoft blog author model
 *
 */
class Author extends AbstractModel implements AuthorInterface
{
    /**
     * Prefix of model events names
     *
     * @var string
     */
    protected $_eventPrefix = 'ksoft_blog_authors';

    /**
     * Construct
     *
     * @return void
     * @noinspection MagicMethodsValidityInspection
     */
    protected function _construct()
    {
       $this->_init(\Ksoft\Blog\Model\ResourceModel\Author::class);
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
     * Retrieve author name
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->getData(self::NAME);
    }

    /**
     * Retrieve author email
     *
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->getData(self::EMAIL);
    }

    /**
     * Retrieve author designation
     *
     * @return string|null
     */
    public function getDesignation(): ?string
    {
        return $this->getData(self::DESIGNATION);
    }

    /**
     * Retrieve author creation time
     *
     * @return string|null
     */
    public function getCreationTime(): ?string
    {
        return $this->getData(self::CREATION_TIME);
    }

    /**
     * Retrieve author update time
     * @return string|null
     */
    public function getUpdateTime(): ?string
    {
        return $this->getData(self::UPDATE_TIME);
    }

    /**
     * Set author ID
     *
     * @param int $authorId
     * @return AuthorInterface
     */
    public function setAuthorId(int $authorId): AuthorInterface
    {
        return $this->setData(self::AUTHOR_ID,$authorId);
    }

    /**
     * Set author name
     *
     * @param string $name
     * @return AuthorInterface
     */
    public function setName(string $name): AuthorInterface
    {
        return $this->setData(self::NAME,$name);
    }

    /**
     * Set author email
     *
     * @param string $email
     * @return AuthorInterface
     */
    public function setEmail(string $email): AuthorInterface
    {
        return $this->setData(self::EMAIL,$email);
    }

    /**
     * Set author designation
     *
     * @param string $designation
     * @return AuthorInterface
     */
    public function setDesignation(string $designation): AuthorInterface
    {
        return $this->setData(self::DESIGNATION,$designation);
    }

    /**
     * Set author creation time
     *
     * @param string $creationTime
     * @return AuthorInterface
     */
    public function setCreationTime(string $creationTime): AuthorInterface
    {
        return $this->setData(self::CREATION_TIME,$creationTime);
    }

    /**
     * Set author update time
     *
     * @param string $updateTime
     * @return AuthorInterface
     */
    public function setUpdateTime(string $updateTime): AuthorInterface
    {
        return $this->setData(self::UPDATE_TIME,);
    }

}
