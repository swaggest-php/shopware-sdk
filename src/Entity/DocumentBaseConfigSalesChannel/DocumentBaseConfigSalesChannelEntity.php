<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\DocumentBaseConfigSalesChannel;

use Swaggest\ShopwareSdk\Entity\DocumentBaseConfig\DocumentBaseConfigEntity;
use Swaggest\ShopwareSdk\Entity\DocumentType\DocumentTypeEntity;
use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\SalesChannel\SalesChannelEntity;

final class DocumentBaseConfigSalesChannelEntity extends Entity
{
    protected string $documentBaseConfigId;

    protected ?string $salesChannelId;

    protected ?string $documentTypeId;

    protected ?DocumentTypeEntity $documentType;

    protected ?DocumentBaseConfigEntity $documentBaseConfig;

    protected ?SalesChannelEntity $salesChannel;

    public function getDocumentBaseConfigId(): string
    {
        return $this->documentBaseConfigId;
    }

    public function setDocumentBaseConfigId(string $documentBaseConfigId): void
    {
        $this->documentBaseConfigId = $documentBaseConfigId;
    }

    public function getSalesChannelId(): ?string
    {
        return $this->salesChannelId;
    }

    public function setSalesChannelId(?string $salesChannelId): void
    {
        $this->salesChannelId = $salesChannelId;
    }

    public function getDocumentTypeId(): ?string
    {
        return $this->documentTypeId;
    }

    public function setDocumentTypeId(?string $documentTypeId): void
    {
        $this->documentTypeId = $documentTypeId;
    }

    public function getDocumentType(): ?DocumentTypeEntity
    {
        return $this->documentType;
    }

    public function setDocumentType(?DocumentTypeEntity $documentType): void
    {
        $this->documentType = $documentType;
    }

    public function getDocumentBaseConfig(): ?DocumentBaseConfigEntity
    {
        return $this->documentBaseConfig;
    }

    public function setDocumentBaseConfig(?DocumentBaseConfigEntity $documentBaseConfig): void
    {
        $this->documentBaseConfig = $documentBaseConfig;
    }

    public function getSalesChannel(): ?SalesChannelEntity
    {
        return $this->salesChannel;
    }

    public function setSalesChannel(?SalesChannelEntity $salesChannel): void
    {
        $this->salesChannel = $salesChannel;
    }
}
