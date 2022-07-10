<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\DeliveryTimeTranslation;

use Swaggest\ShopwareSdk\Entity\DeliveryTime\DeliveryTimeEntity;
use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\Language\LanguageEntity;

final class DeliveryTimeTranslationEntity extends Entity
{
    use EntityIdTrait;

    protected string $name;

    protected ?array $customFields;

    protected string $deliveryTimeId;

    protected string $languageId;

    protected ?DeliveryTimeEntity $deliveryTime;

    protected ?LanguageEntity $language;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getCustomFields(): ?array
    {
        return $this->customFields;
    }

    public function setCustomFields(?array $customFields): void
    {
        $this->customFields = $customFields;
    }

    public function getDeliveryTimeId(): string
    {
        return $this->deliveryTimeId;
    }

    public function setDeliveryTimeId(string $deliveryTimeId): void
    {
        $this->deliveryTimeId = $deliveryTimeId;
    }

    public function getLanguageId(): string
    {
        return $this->languageId;
    }

    public function setLanguageId(string $languageId): void
    {
        $this->languageId = $languageId;
    }

    public function getDeliveryTime(): ?DeliveryTimeEntity
    {
        return $this->deliveryTime;
    }

    public function setDeliveryTime(?DeliveryTimeEntity $deliveryTime): void
    {
        $this->deliveryTime = $deliveryTime;
    }

    public function getLanguage(): ?LanguageEntity
    {
        return $this->language;
    }

    public function setLanguage(?LanguageEntity $language): void
    {
        $this->language = $language;
    }
}
