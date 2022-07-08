<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\ImportExportProfile;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\ImportExportLog\ImportExportLogCollection;
use Swaggest\ShopwareSdk\Entity\ImportExportProfileTranslation\ImportExportProfileTranslationCollection;

final class ImportExportProfileEntity extends Entity
{
    use EntityIdTrait;

    protected ?string $name;

    protected string $label;

    protected ?string $type;

    protected bool $systemDefault;

    protected string $sourceEntity;

    protected string $fileType;

    protected string $delimiter;

    protected string $enclosure;

    protected array $mapping;

    protected array $updateBy;

    protected array $config;

    protected ?ImportExportLogCollection $importExportLogs;

    protected ImportExportProfileTranslationCollection $translations;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function setLabel(string $label): void
    {
        $this->label = $label;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    public function getSystemDefault(): bool
    {
        return $this->systemDefault;
    }

    public function setSystemDefault(bool $systemDefault): void
    {
        $this->systemDefault = $systemDefault;
    }

    public function getSourceEntity(): string
    {
        return $this->sourceEntity;
    }

    public function setSourceEntity(string $sourceEntity): void
    {
        $this->sourceEntity = $sourceEntity;
    }

    public function getFileType(): string
    {
        return $this->fileType;
    }

    public function setFileType(string $fileType): void
    {
        $this->fileType = $fileType;
    }

    public function getDelimiter(): string
    {
        return $this->delimiter;
    }

    public function setDelimiter(string $delimiter): void
    {
        $this->delimiter = $delimiter;
    }

    public function getEnclosure(): string
    {
        return $this->enclosure;
    }

    public function setEnclosure(string $enclosure): void
    {
        $this->enclosure = $enclosure;
    }

    public function getMapping(): array
    {
        return $this->mapping;
    }

    public function setMapping(array $mapping): void
    {
        $this->mapping = $mapping;
    }

    public function getUpdateBy(): array
    {
        return $this->updateBy;
    }

    public function setUpdateBy(array $updateBy): void
    {
        $this->updateBy = $updateBy;
    }

    public function getConfig(): array
    {
        return $this->config;
    }

    public function setConfig(array $config): void
    {
        $this->config = $config;
    }

    public function getImportExportLogs(): ?ImportExportLogCollection
    {
        return $this->importExportLogs;
    }

    public function setImportExportLogs(?ImportExportLogCollection $importExportLogs): void
    {
        $this->importExportLogs = $importExportLogs;
    }

    public function getTranslations(): ImportExportProfileTranslationCollection
    {
        return $this->translations;
    }

    public function setTranslations(ImportExportProfileTranslationCollection $translations): void
    {
        $this->translations = $translations;
    }
}
