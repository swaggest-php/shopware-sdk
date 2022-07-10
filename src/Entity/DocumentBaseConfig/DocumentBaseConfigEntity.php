<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\DocumentBaseConfig;

use Swaggest\ShopwareSdk\Entity\DocumentBaseConfigSalesChannel\DocumentBaseConfigSalesChannelCollection;
use Swaggest\ShopwareSdk\Entity\DocumentType\DocumentTypeEntity;
use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\Media\MediaEntity;

final class DocumentBaseConfigEntity extends Entity
{
    protected string $documentTypeId;

    protected ?string $logoId;

    protected string $name;

    protected ?string $filenamePrefix;

    protected ?string $filenameSuffix;

    protected bool $global;

    protected ?string $documentNumber;

    protected ?array $config;

    protected ?array $customFields;

    protected ?DocumentTypeEntity $documentType;

    protected ?MediaEntity $logo;

    protected ?DocumentBaseConfigSalesChannelCollection $salesChannels;

    public function getDocumentTypeId(): string
    {
        return $this->documentTypeId;
    }

    public function setDocumentTypeId(string $documentTypeId): void
    {
        $this->documentTypeId = $documentTypeId;
    }

    public function getLogoId(): ?string
    {
        return $this->logoId;
    }

    public function setLogoId(?string $logoId): void
    {
        $this->logoId = $logoId;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getFilenamePrefix(): ?string
    {
        return $this->filenamePrefix;
    }

    public function setFilenamePrefix(?string $filenamePrefix): void
    {
        $this->filenamePrefix = $filenamePrefix;
    }

    public function getFilenameSuffix(): ?string
    {
        return $this->filenameSuffix;
    }

    public function setFilenameSuffix(?string $filenameSuffix): void
    {
        $this->filenameSuffix = $filenameSuffix;
    }

    public function getGlobal(): bool
    {
        return $this->global;
    }

    public function setGlobal(bool $global): void
    {
        $this->global = $global;
    }

    public function getDocumentNumber(): ?string
    {
        return $this->documentNumber;
    }

    public function setDocumentNumber(?string $documentNumber): void
    {
        $this->documentNumber = $documentNumber;
    }

    public function getConfig(): ?array
    {
        return $this->config;
    }

    public function setConfig(?array $config): void
    {
        $this->config = $config;
    }

    public function getCustomFields(): ?array
    {
        return $this->customFields;
    }

    public function setCustomFields(?array $customFields): void
    {
        $this->customFields = $customFields;
    }

    public function getDocumentType(): ?DocumentTypeEntity
    {
        return $this->documentType;
    }

    public function setDocumentType(?DocumentTypeEntity $documentType): void
    {
        $this->documentType = $documentType;
    }

    public function getLogo(): ?MediaEntity
    {
        return $this->logo;
    }

    public function setLogo(?MediaEntity $logo): void
    {
        $this->logo = $logo;
    }

    public function getSalesChannels(): ?DocumentBaseConfigSalesChannelCollection
    {
        return $this->salesChannels;
    }

    public function setSalesChannels(?DocumentBaseConfigSalesChannelCollection $salesChannels): void
    {
        $this->salesChannels = $salesChannels;
    }
}
