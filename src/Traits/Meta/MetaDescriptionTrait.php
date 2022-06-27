<?php
declare(strict_types=1);

namespace Asdoria\SyliusMarketingCartPlugin\Traits\Meta;

/**
 * Trait MetaDescriptionTrait
 * @package Asdoria\SyliusMarketingCartPlugin\Traits\Meta
 */
trait MetaDescriptionTrait
{
    /** @var string|null */
    protected ?string $metaDescription;

    /**
     * @return string|null
     */
    public function getMetaDescription(): ?string
    {
        return $this->metaDescription;
    }

    /**
     * @param string|null $metaDescription
     */
    public function setMetaDescription(?string $metaDescription): void
    {
        $this->metaDescription = $metaDescription;
    }
}
