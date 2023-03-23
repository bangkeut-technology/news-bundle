<?php
declare(strict_types=1);

namespace BangkeutTechnology\Bundle\NewsBundle\Entity;

use DateTimeImmutable;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * Class Image
 *
 * @package BangkeutTechnology\Bundle\NewsBundle\Entity
 * @author Vandeth THO <thovandeth@gmail.com>
 */
#[Vich\Uploadable]
class Image extends AbstractEntity
{
    /**
     * @var File|null
     */
    #[Vich\UploadableField(
        mapping: 'posts',
        fileNameProperty: 'imageName',
        size: 'imageSize',
        mimeType: 'mimeType',
        originalName: 'originalName',
        dimensions: 'dimensions'
    )]
    private ?File $imageFile = null;

    /**
     * @var string|null
     */
    private ?string $imageName = null;

    /**
     * @var int|null
     */
    private ?int $imageSize = null;

    /**
     * @var string|null
     */
    private ?string $mimeType = null;

    /**
     * @var string|null
     */
    private ?string $originalName = null;

    /**
     * @var string|null
     */
    private ?string $dimensions = null;

    /**
     * @return File|null
     */
    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }

    /**
     * @param File|null $imageFile
     * @return Image
     */
    public function setImageFile(?File $imageFile): Image
    {
        $this->imageFile = $imageFile;

        if (null !== $imageFile) {
            $this->updatedAt = new DateTimeImmutable();
        }

        return $this;
    }

    /**
     * @return string|null
     */
    public function getImageName(): ?string
    {
        return $this->imageName;
    }

    /**
     * @param string|null $imageName
     * @return Image
     */
    public function setImageName(?string $imageName): Image
    {
        $this->imageName = $imageName;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getImageSize(): ?int
    {
        return $this->imageSize;
    }

    /**
     * @param int|null $imageSize
     * @return Image
     */
    public function setImageSize(?int $imageSize): Image
    {
        $this->imageSize = $imageSize;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getMimeType(): ?string
    {
        return $this->mimeType;
    }

    /**
     * @param string|null $mimeType
     * @return Image
     */
    public function setMimeType(?string $mimeType): Image
    {
        $this->mimeType = $mimeType;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getOriginalName(): ?string
    {
        return $this->originalName;
    }

    /**
     * @param string|null $originalName
     * @return Image
     */
    public function setOriginalName(?string $originalName): Image
    {
        $this->originalName = $originalName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDimensions(): ?string
    {
        return $this->dimensions;
    }

    /**
     * @param string|null $dimensions
     * @return Image
     */
    public function setDimensions(?string $dimensions): Image
    {
        $this->dimensions = $dimensions;

        return $this;
    }
}
