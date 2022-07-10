<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\NumberRange;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\NumberRangeSalesChannel\NumberRangeSalesChannelCollection;
use Swaggest\ShopwareSdk\Entity\NumberRangeState\NumberRangeStateEntity;
use Swaggest\ShopwareSdk\Entity\NumberRangeTranslation\NumberRangeTranslationCollection;
use Swaggest\ShopwareSdk\Entity\NumberRangeType\NumberRangeTypeEntity;

final class NumberRangeEntity extends Entity
{
    use EntityIdTrait;

    protected string $typeId;

    protected bool $global;

    protected string $name;

    protected ?string $description;

    protected string $pattern;

    protected int $start;

    protected ?array $customFields;

    protected ?NumberRangeTypeEntity $type;

    protected ?NumberRangeSalesChannelCollection $numberRangeSalesChannels;

    protected ?NumberRangeStateEntity $state;

    protected NumberRangeTranslationCollection $translations;

    public function getTypeId(): string
    {
        return $this->typeId;
    }

    public function setTypeId(string $typeId): void
    {
        $this->typeId = $typeId;
    }

    public function getGlobal(): bool
    {
        return $this->global;
    }

    public function setGlobal(bool $global): void
    {
        $this->global = $global;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    public function getPattern(): string
    {
        return $this->pattern;
    }

    public function setPattern(string $pattern): void
    {
        $this->pattern = $pattern;
    }

    public function getStart(): int
    {
        return $this->start;
    }

    public function setStart(int $start): void
    {
        $this->start = $start;
    }

    public function getCustomFields(): ?array
    {
        return $this->customFields;
    }

    public function setCustomFields(?array $customFields): void
    {
        $this->customFields = $customFields;
    }

    public function getType(): ?NumberRangeTypeEntity
    {
        return $this->type;
    }

    public function setType(?NumberRangeTypeEntity $type): void
    {
        $this->type = $type;
    }

    public function getNumberRangeSalesChannels(): ?NumberRangeSalesChannelCollection
    {
        return $this->numberRangeSalesChannels;
    }

    public function setNumberRangeSalesChannels(?NumberRangeSalesChannelCollection $numberRangeSalesChannels): void
    {
        $this->numberRangeSalesChannels = $numberRangeSalesChannels;
    }

    public function getState(): ?NumberRangeStateEntity
    {
        return $this->state;
    }

    public function setState(?NumberRangeStateEntity $state): void
    {
        $this->state = $state;
    }

    public function getTranslations(): NumberRangeTranslationCollection
    {
        return $this->translations;
    }

    public function setTranslations(NumberRangeTranslationCollection $translations): void
    {
        $this->translations = $translations;
    }
}
