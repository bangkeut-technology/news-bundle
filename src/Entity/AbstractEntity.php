<?php
declare(strict_types=1);

namespace BangkeutTechnology\Bundle\NewsBundle\Entity;

use DateTimeImmutable;

/**
 * Class AbstractEntity
 *
 * @package BangkeutTechnology\Bundle\NewsBundle\Entity
 * @author Vandeth THO <thovandeth@gmail.com>
 */
abstract class AbstractEntity
{
    /**
     * @var int|null
     */
    protected ?int $id = null;

    /**
     * @var DateTimeImmutable
     */
    protected DateTimeImmutable $createdAt;

    /**
     * @var DateTimeImmutable
     */
    protected DateTimeImmutable $updatedAt;

    /**
     * @return DateTimeImmutable
     */
    public function getCreatedAt(): DateTimeImmutable
    {
        return $this->createdAt;
    }

    /**
     * @param DateTimeImmutable $createdAt
     * @return AbstractEntity
     */
    public function setCreatedAt(DateTimeImmutable $createdAt): AbstractEntity
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return DateTimeImmutable
     */
    public function getUpdatedAt(): DateTimeImmutable
    {
        return $this->updatedAt;
    }

    /**
     * @param DateTimeImmutable $updatedAt
     * @return AbstractEntity
     */
    public function setUpdatedAt(DateTimeImmutable $updatedAt): AbstractEntity
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * @return void
     */
    public function prePersist(): void
    {
        $this->createdAt = new DateTimeImmutable();
        $this->updatedAt = new DateTimeImmutable();
    }

    /**
     * @return void
     */
    public function preUpdate(): void
    {
        $this->updatedAt = new DateTimeImmutable();
    }
}
