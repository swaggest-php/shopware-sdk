<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\CustomFieldSet;

use Swaggest\ShopwareSdk\Entity\App\AppEntity;
use Swaggest\ShopwareSdk\Entity\CustomField\CustomFieldCollection;
use Swaggest\ShopwareSdk\Entity\CustomFieldSetRelation\CustomFieldSetRelationCollection;
use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\Product\ProductCollection;

final class CustomFieldSetEntity extends Entity
{
    use EntityIdTrait;

    protected string $name;

    protected array $config;

    protected bool $active;

    protected bool $global;

    protected ?int $position;

    protected ?string $appId;

    protected ?CustomFieldCollection $customFields;

    protected ?CustomFieldSetRelationCollection $relations;

    protected ?ProductCollection $products;

    protected ?AppEntity $app;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getConfig(): array
    {
        return $this->config;
    }

    public function setConfig(array $config): void
    {
        $this->config = $config;
    }

    public function getActive(): bool
    {
        return $this->active;
    }

    public function setActive(bool $active): void
    {
        $this->active = $active;
    }

    public function getGlobal(): bool
    {
        return $this->global;
    }

    public function setGlobal(bool $global): void
    {
        $this->global = $global;
    }

    public function getPosition(): ?int
    {
        return $this->position;
    }

    public function setPosition(?int $position): void
    {
        $this->position = $position;
    }

    public function getAppId(): ?string
    {
        return $this->appId;
    }

    public function setAppId(?string $appId): void
    {
        $this->appId = $appId;
    }

    public function getCustomFields(): ?CustomFieldCollection
    {
        return $this->customFields;
    }

    public function setCustomFields(?CustomFieldCollection $customFields): void
    {
        $this->customFields = $customFields;
    }

    public function getRelations(): ?CustomFieldSetRelationCollection
    {
        return $this->relations;
    }

    public function setRelations(?CustomFieldSetRelationCollection $relations): void
    {
        $this->relations = $relations;
    }

    public function getProducts(): ?ProductCollection
    {
        return $this->products;
    }

    public function setProducts(?ProductCollection $products): void
    {
        $this->products = $products;
    }

    public function getApp(): ?AppEntity
    {
        return $this->app;
    }

    public function setApp(?AppEntity $app): void
    {
        $this->app = $app;
    }
}
