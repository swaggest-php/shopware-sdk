<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\CmsSection;

use Swaggest\ShopwareSdk\Entity\CmsBlock\CmsBlockCollection;
use Swaggest\ShopwareSdk\Entity\CmsPage\CmsPageEntity;
use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\Media\MediaEntity;

final class CmsSectionEntity extends Entity
{
    use EntityIdTrait;

    protected int $position;

    protected string $type;

    protected ?bool $locked;

    protected ?string $name;

    protected ?string $sizingMode;

    protected ?string $mobileBehavior;

    protected ?string $backgroundColor;

    protected ?string $backgroundMediaId;

    protected ?string $backgroundMediaMode;

    protected ?string $cssClass;

    protected string $pageId;

    protected ?CmsPageEntity $page;

    protected ?MediaEntity $backgroundMedia;

    protected ?CmsBlockCollection $blocks;

    protected ?array $customFields;

    protected ?string $cmsPageVersionId;

    public function getPosition(): int
    {
        return $this->position;
    }

    public function setPosition(int $position): void
    {
        $this->position = $position;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function getLocked(): ?bool
    {
        return $this->locked;
    }

    public function setLocked(?bool $locked): void
    {
        $this->locked = $locked;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function getSizingMode(): ?string
    {
        return $this->sizingMode;
    }

    public function setSizingMode(?string $sizingMode): void
    {
        $this->sizingMode = $sizingMode;
    }

    public function getMobileBehavior(): ?string
    {
        return $this->mobileBehavior;
    }

    public function setMobileBehavior(?string $mobileBehavior): void
    {
        $this->mobileBehavior = $mobileBehavior;
    }

    public function getBackgroundColor(): ?string
    {
        return $this->backgroundColor;
    }

    public function setBackgroundColor(?string $backgroundColor): void
    {
        $this->backgroundColor = $backgroundColor;
    }

    public function getBackgroundMediaId(): ?string
    {
        return $this->backgroundMediaId;
    }

    public function setBackgroundMediaId(?string $backgroundMediaId): void
    {
        $this->backgroundMediaId = $backgroundMediaId;
    }

    public function getBackgroundMediaMode(): ?string
    {
        return $this->backgroundMediaMode;
    }

    public function setBackgroundMediaMode(?string $backgroundMediaMode): void
    {
        $this->backgroundMediaMode = $backgroundMediaMode;
    }

    public function getCssClass(): ?string
    {
        return $this->cssClass;
    }

    public function setCssClass(?string $cssClass): void
    {
        $this->cssClass = $cssClass;
    }

    public function getPageId(): string
    {
        return $this->pageId;
    }

    public function setPageId(string $pageId): void
    {
        $this->pageId = $pageId;
    }

    public function getPage(): ?CmsPageEntity
    {
        return $this->page;
    }

    public function setPage(?CmsPageEntity $page): void
    {
        $this->page = $page;
    }

    public function getBackgroundMedia(): ?MediaEntity
    {
        return $this->backgroundMedia;
    }

    public function setBackgroundMedia(?MediaEntity $backgroundMedia): void
    {
        $this->backgroundMedia = $backgroundMedia;
    }

    public function getBlocks(): ?CmsBlockCollection
    {
        return $this->blocks;
    }

    public function setBlocks(?CmsBlockCollection $blocks): void
    {
        $this->blocks = $blocks;
    }

    public function getCustomFields(): ?array
    {
        return $this->customFields;
    }

    public function setCustomFields(?array $customFields): void
    {
        $this->customFields = $customFields;
    }

    public function getCmsPageVersionId(): ?string
    {
        return $this->cmsPageVersionId;
    }

    public function setCmsPageVersionId(?string $cmsPageVersionId): void
    {
        $this->cmsPageVersionId = $cmsPageVersionId;
    }
}
