<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\Plugin;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\PaymentMethod\PaymentMethodCollection;
use Swaggest\ShopwareSdk\Entity\PluginTranslation\PluginTranslationCollection;

final class PluginEntity extends Entity
{
    protected string $baseClass;

    protected string $name;

    protected ?string $composerName;

    protected array $autoload;

    protected ?bool $active;

    protected ?bool $managedByComposer;

    protected ?string $path;

    protected ?string $author;

    protected ?string $copyright;

    protected ?string $license;

    protected string $version;

    protected ?string $upgradeVersion;

    protected ?\DateTimeInterface $installedAt;

    protected ?\DateTimeInterface $upgradedAt;

    protected ?string $iconRaw;

    protected ?string $icon;

    protected string $label;

    protected ?string $description;

    protected ?string $manufacturerLink;

    protected ?string $supportLink;

    protected ?array $changelog;

    protected ?array $customFields;

    protected ?PluginTranslationCollection $translations;

    protected ?PaymentMethodCollection $paymentMethods;

    public function getBaseClass(): string
    {
        return $this->baseClass;
    }

    public function setBaseClass(string $baseClass): void
    {
        $this->baseClass = $baseClass;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getComposerName(): ?string
    {
        return $this->composerName;
    }

    public function setComposerName(?string $composerName): void
    {
        $this->composerName = $composerName;
    }

    public function getAutoload(): array
    {
        return $this->autoload;
    }

    public function setAutoload(array $autoload): void
    {
        $this->autoload = $autoload;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(?bool $active): void
    {
        $this->active = $active;
    }

    public function getManagedByComposer(): ?bool
    {
        return $this->managedByComposer;
    }

    public function setManagedByComposer(?bool $managedByComposer): void
    {
        $this->managedByComposer = $managedByComposer;
    }

    public function getPath(): ?string
    {
        return $this->path;
    }

    public function setPath(?string $path): void
    {
        $this->path = $path;
    }

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setAuthor(?string $author): void
    {
        $this->author = $author;
    }

    public function getCopyright(): ?string
    {
        return $this->copyright;
    }

    public function setCopyright(?string $copyright): void
    {
        $this->copyright = $copyright;
    }

    public function getLicense(): ?string
    {
        return $this->license;
    }

    public function setLicense(?string $license): void
    {
        $this->license = $license;
    }

    public function getVersion(): string
    {
        return $this->version;
    }

    public function setVersion(string $version): void
    {
        $this->version = $version;
    }

    public function getUpgradeVersion(): ?string
    {
        return $this->upgradeVersion;
    }

    public function setUpgradeVersion(?string $upgradeVersion): void
    {
        $this->upgradeVersion = $upgradeVersion;
    }

    public function getInstalledAt(): ?\DateTimeInterface
    {
        return $this->installedAt;
    }

    public function setInstalledAt(?\DateTimeInterface $installedAt): void
    {
        $this->installedAt = $installedAt;
    }

    public function getUpgradedAt(): ?\DateTimeInterface
    {
        return $this->upgradedAt;
    }

    public function setUpgradedAt(?\DateTimeInterface $upgradedAt): void
    {
        $this->upgradedAt = $upgradedAt;
    }

    public function getIconRaw(): ?string
    {
        return $this->iconRaw;
    }

    public function setIconRaw(?string $iconRaw): void
    {
        $this->iconRaw = $iconRaw;
    }

    public function getIcon(): ?string
    {
        return $this->icon;
    }

    public function setIcon(?string $icon): void
    {
        $this->icon = $icon;
    }

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

    public function getTranslations(): ?PluginTranslationCollection
    {
        return $this->translations;
    }

    public function setTranslations(?PluginTranslationCollection $translations): void
    {
        $this->translations = $translations;
    }

    public function getPaymentMethods(): ?PaymentMethodCollection
    {
        return $this->paymentMethods;
    }

    public function setPaymentMethods(?PaymentMethodCollection $paymentMethods): void
    {
        $this->paymentMethods = $paymentMethods;
    }
}
