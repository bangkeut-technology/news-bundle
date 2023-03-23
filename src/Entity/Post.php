<?php
declare(strict_types=1);

namespace BangkeutTechnology\Bundle\NewsBundle\Entity;

/**
 * Class Post
 *
 * @package BangkeutTechnology\Bundle\NewsBundle\Entity
 * @author Vandeth THO <thovandeth@gmail.com>
 */
class Post extends AbstractEntity
{
    /**
     * @var string|null
     */
    private ?string $caption = null;

    /**
     * @return string|null
     */
    public function getCaption(): ?string
    {
        return $this->caption;
    }

    /**
     * @param string|null $caption
     * @return Post
     */
    public function setCaption(?string $caption): Post
    {
        $this->caption = $caption;

        return $this;
    }
}
