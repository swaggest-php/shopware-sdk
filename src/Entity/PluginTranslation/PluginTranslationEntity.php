<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\PluginTranslation;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\Language\LanguageEntity;
use Swaggest\ShopwareSdk\Entity\Plugin\PluginEntity;

final class PluginTranslationEntity extends Entity
{
    protected string $label;

    protected ?string $description;

    protected ?string $manufacturerLink;

    protected ?string $supportLink;

    protected ?array $changelog;

    protected ?array $customFields;

    protected string $pluginId;

    protected string $languageId;

    protected ?PluginEntity $plugin;

    protected ?LanguageEntity $language;

    public function getLabel(): string
    {
        return $this->label;
    }

    public function setLabel(string $label): void
    {
        $this->label = $label;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    public function getManufacturerLink(): ?string
    {
        return $this->manufacturerLink;
    }

    public function setManufacturerLink(?string $manufacturerLink): void
    {
        $this->manufacturerLink = $manufacturerLink;
    }

    public function getSupportLink(): ?string
    {
        return $this->supportLink;
    }

    public function setSupportLink(?string $supportLink): void
    {
        $this->supportLink = $supportLink;
    }

    public function getChangelog(): ?array
    {
        return $this->changelog;
    }

    public function setChangelog(?array $changelog): void
    {
        $this->changelog = $changelog;
    }

    public function getCustomFields(): ?array
    {
        return $this->customFields;
    }

    public function setCustomFields(?array $customFields): void
    {
        $this->customFields = $customFields;
    }

    public function getPluginId(): string
    {
        return $this->pluginId;
    }

    public function setPluginId(string $pluginId): void
    {
        $this->pluginId = $pluginId;
    }

    public function getLanguageId(): string
    {
        return $this->languageId;
    }

    public function setLanguageId(string $languageId): void
    {
        $this->languageId = $languageId;
    }

    public function getPlugin(): ?PluginEntity
    {
        return $this->plugin;
    }

    public function setPlugin(?PluginEntity $plugin): void
    {
        $this->plugin = $plugin;
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
