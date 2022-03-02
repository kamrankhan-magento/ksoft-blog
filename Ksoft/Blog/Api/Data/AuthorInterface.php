<?php

declare(strict_types=1);

namespace Ksoft\Blog\Api\Data;

interface AuthorInterface
{
    public const AUTHOR_ID = 'author_id';
    public const NAME = 'name';
    public const EMAIL = 'email';
    public const DESIGNATION = 'designation';
    public const CREATION_TIME = 'creation_time';
    public const UPDATE_TIME = 'update_time';

    /**
     * Get Author ID
     * @return int|null
     */
    public function getAuthorId(): ?int;

    /**
     * Get Author Name
     * @return string|null
     */
    public function getName(): ?string;

    /**
     * @return string|null
     */
    public function getEmail(): ?string;

    /**
     * Get Author Email
     * @return string|null
     */
    public function getDesignation(): ?string;

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
     * @param int $authorId
     * @return \Ksoft\Blog\Api\Data\AuthorInterface
     */
    public function setAuthorId(int $authorId): AuthorInterface;

    /**
     * @param string $name
     * @return \Ksoft\Blog\Api\Data\AuthorInterface
     */
    public function setName(string $name): AuthorInterface;

    /**
     * @param string $email
     * @return \Ksoft\Blog\Api\Data\AuthorInterface
     */
    public function setEmail(string $email): AuthorInterface;

    /**
     * @param string $designation
     * @return \Ksoft\Blog\Api\Data\AuthorInterface
     */
    public function setDesignation(string $designation): AuthorInterface;

    /**
     * @param string $creationTime
     * @return \Ksoft\Blog\Api\Data\AuthorInterface
     */
    public function setCreationTime( string $creationTime ): AuthorInterface;

    /**
     * @param string $updateTime
     * @return \Ksoft\Blog\Api\Data\AuthorInterface
     */
    public function setUpdateTime( string $updateTime ): AuthorInterface;
}
