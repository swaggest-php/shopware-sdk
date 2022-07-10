<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\NumberRangeType;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\NumberRange\NumberRangeCollection;
use Swaggest\ShopwareSdk\Entity\NumberRangeSalesChannel\NumberRangeSalesChannelCollection;
use Swaggest\ShopwareSdk\Entity\NumberRangeTypeTranslation\NumberRangeTypeTranslationCollection;

final class NumberRangeTypeEntity extends Entity
{
    use EntityIdTrait;

    protected ?string $technicalName;

    protected string $typeName;

    protected bool $global;

    protected ?array $customFields;

    protected ?NumberRangeCollection $numberRanges;

    protected ?NumberRangeSalesChannelCollection $numberRangeSalesChannels;

    protected NumberRangeTypeTranslationCollection $translations;

    public function getTechnicalName(): ?string
    {
        return $this->technicalName;
    }

    public function setTechnicalName(?string $technicalName): void
    {
        $this->technicalName = $technicalName;
    }

    public function getTypeName(): string
    {
        return $this->typeName;
    }

    public function setTypeName(string $typeName): void
    {
        $this->typeName = $typeName;
    }

    public function getGlobal(): bool
    {
        return $this->global;
    }

    public function setGlobal(bool $global): void
    {
        $this->global = $global;
    }

    public function getCustomFields(): ?array
    {
        return $this->customFields;
    }

    public function setCustomFields(?array $customFields): void
    {
        $this->customFields = $customFields;
    }

    public function getNumberRanges(): ?NumberRangeCollection
    {
        return $this->numberRanges;
    }

    public function setNumberRanges(?NumberRangeCollection $numberRanges): void
    {
        $this->numberRanges = $numberRanges;
    }

    public function getNumberRangeSalesChannels(): ?NumberRangeSalesChannelCollection
    {
        return $this->numberRangeSalesChannels;
    }

    public function setNumberRangeSalesChannels(?NumberRangeSalesChannelCollection $numberRangeSalesChannels): void
    {
        $this->numberRangeSalesChannels = $numberRangeSalesChannels;
    }

    public function getTranslations(): NumberRangeTypeTranslationCollection
    {
        return $this->translations;
    }

    public function setTranslations(NumberRangeTypeTranslationCollection $translations): void
    {
        $this->translations = $translations;
    }
}
