<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\CmsBlock;

use Swaggest\ShopwareSdk\Entity\CmsSection\CmsSectionEntity;
use Swaggest\ShopwareSdk\Entity\CmsSlot\CmsSlotCollection;
use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\Media\MediaEntity;

final class CmsBlockEntity extends Entity
{
    use EntityIdTrait;

    protected int $position;

    protected string $type;

    protected bool $locked;

    protected ?string $name;

    protected ?string $sectionPosition;

    protected ?string $marginTop;

    protected ?string $marginBottom;

    protected ?string $marginLeft;

    protected ?string $marginRight;

    protected ?string $backgroundColor;

    protected ?string $backgroundMediaId;

    protected ?string $backgroundMediaMode;

    protected ?string $cssClass;

    protected string $sectionId;

    protected ?CmsSectionEntity $section;

    protected ?MediaEntity $backgroundMedia;

    protected ?CmsSlotCollection $slots;

    protected array $customFields;

    protected string $cmsSectionVersionId;

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

    public function getLocked(): bool
    {
        return $this->locked;
    }

    public function setLocked(bool $locked): void
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

    public function getSectionPosition(): ?string
    {
        return $this->sectionPosition;
    }

    public function setSectionPosition(?string $sectionPosition): void
    {
        $this->sectionPosition = $sectionPosition;
    }

    public function getMarginTop(): ?string
    {
        return $this->marginTop;
    }

    public function setMarginTop(?string $marginTop): void
    {
        $this->marginTop = $marginTop;
    }

    public function getMarginBottom(): ?string
    {
        return $this->marginBottom;
    }

    public function setMarginBottom(?string $marginBottom): void
    {
        $this->marginBottom = $marginBottom;
    }

    public function getMarginLeft(): ?string
    {
        return $this->marginLeft;
    }

    public function setMarginLeft(?string $marginLeft): void
    {
        $this->marginLeft = $marginLeft;
    }

    public function getMarginRight(): ?string
    {
        return $this->marginRight;
    }

    public function setMarginRight(?string $marginRight): void
    {
        $this->marginRight = $marginRight;
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

    public function getSectionId(): string
    {
        return $this->sectionId;
    }

    public function setSectionId(string $sectionId): void
    {
        $this->sectionId = $sectionId;
    }

    public function getSection(): ?CmsSectionEntity
    {
        return $this->section;
    }

    public function setSection(?CmsSectionEntity $section): void
    {
        $this->section = $section;
    }

    public function getBackgroundMedia(): ?MediaEntity
    {
        return $this->backgroundMedia;
    }

    public function setBackgroundMedia(?MediaEntity $backgroundMedia): void
    {
        $this->backgroundMedia = $backgroundMedia;
    }

    public function getSlots(): ?CmsSlotCollection
    {
        return $this->slots;
    }

    public function setSlots(?CmsSlotCollection $slots): void
    {
        $this->slots = $slots;
    }

    public function getCustomFields(): array
    {
        return $this->customFields;
    }

    public function setCustomFields(array $customFields): void
    {
        $this->customFields = $customFields;
    }

    public function getCmsSectionVersionId(): string
    {
        return $this->cmsSectionVersionId;
    }

    public function setCmsSectionVersionId(string $cmsSectionVersionId): void
    {
        $this->cmsSectionVersionId = $cmsSectionVersionId;
    }
}
