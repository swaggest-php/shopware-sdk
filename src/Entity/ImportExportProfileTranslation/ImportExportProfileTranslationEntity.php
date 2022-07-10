<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\ImportExportProfileTranslation;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\ImportExportProfile\ImportExportProfileEntity;
use Swaggest\ShopwareSdk\Entity\Language\LanguageEntity;

final class ImportExportProfileTranslationEntity extends Entity
{
    protected ?string $label;

    protected string $importExportProfileId;

    protected string $languageId;

    protected ?ImportExportProfileEntity $importExportProfile;

    protected ?LanguageEntity $language;

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(?string $label): void
    {
        $this->label = $label;
    }

    public function getImportExportProfileId(): string
    {
        return $this->importExportProfileId;
    }

    public function setImportExportProfileId(string $importExportProfileId): void
    {
        $this->importExportProfileId = $importExportProfileId;
    }

    public function getLanguageId(): string
    {
        return $this->languageId;
    }

    public function setLanguageId(string $languageId): void
    {
        $this->languageId = $languageId;
    }

    public function getImportExportProfile(): ?ImportExportProfileEntity
    {
        return $this->importExportProfile;
    }

    public function setImportExportProfile(?ImportExportProfileEntity $importExportProfile): void
    {
        $this->importExportProfile = $importExportProfile;
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
