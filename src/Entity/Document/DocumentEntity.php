<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\Document;

use Swaggest\ShopwareSdk\Entity\DocumentType\DocumentTypeEntity;
use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\Media\MediaEntity;
use Swaggest\ShopwareSdk\Entity\Order\OrderEntity;

final class DocumentEntity extends Entity
{
    use EntityIdTrait;

    protected string $documentTypeId;

    protected string $fileType;

    protected ?string $referencedDocumentId;

    protected string $orderId;

    protected ?string $documentMediaFileId;

    protected ?string $orderVersionId;

    protected array $config;

    protected ?bool $sent;

    protected ?bool $static;

    protected string $deepLinkCode;

    protected ?array $customFields;

    protected ?DocumentTypeEntity $documentType;

    protected ?OrderEntity $order;

    protected ?DocumentEntity $referencedDocument;

    protected ?DocumentCollection $dependentDocuments;

    protected ?MediaEntity $documentMediaFile;

    public function getDocumentTypeId(): string
    {
        return $this->documentTypeId;
    }

    public function setDocumentTypeId(string $documentTypeId): void
    {
        $this->documentTypeId = $documentTypeId;
    }

    public function getFileType(): string
    {
        return $this->fileType;
    }

    public function setFileType(string $fileType): void
    {
        $this->fileType = $fileType;
    }

    public function getReferencedDocumentId(): ?string
    {
        return $this->referencedDocumentId;
    }

    public function setReferencedDocumentId(?string $referencedDocumentId): void
    {
        $this->referencedDocumentId = $referencedDocumentId;
    }

    public function getOrderId(): string
    {
        return $this->orderId;
    }

    public function setOrderId(string $orderId): void
    {
        $this->orderId = $orderId;
    }

    public function getDocumentMediaFileId(): ?string
    {
        return $this->documentMediaFileId;
    }

    public function setDocumentMediaFileId(?string $documentMediaFileId): void
    {
        $this->documentMediaFileId = $documentMediaFileId;
    }

    public function getOrderVersionId(): ?string
    {
        return $this->orderVersionId;
    }

    public function setOrderVersionId(?string $orderVersionId): void
    {
        $this->orderVersionId = $orderVersionId;
    }

    public function getConfig(): array
    {
        return $this->config;
    }

    public function setConfig(array $config): void
    {
        $this->config = $config;
    }

    public function getSent(): ?bool
    {
        return $this->sent;
    }

    public function setSent(?bool $sent): void
    {
        $this->sent = $sent;
    }

    public function getStatic(): ?bool
    {
        return $this->static;
    }

    public function setStatic(?bool $static): void
    {
        $this->static = $static;
    }

    public function getDeepLinkCode(): string
    {
        return $this->deepLinkCode;
    }

    public function setDeepLinkCode(string $deepLinkCode): void
    {
        $this->deepLinkCode = $deepLinkCode;
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

    public function getOrder(): ?OrderEntity
    {
        return $this->order;
    }

    public function setOrder(?OrderEntity $order): void
    {
        $this->order = $order;
    }

    public function getReferencedDocument(): ?self
    {
        return $this->referencedDocument;
    }

    public function setReferencedDocument(?self $referencedDocument): void
    {
        $this->referencedDocument = $referencedDocument;
    }

    public function getDependentDocuments(): ?DocumentCollection
    {
        return $this->dependentDocuments;
    }

    public function setDependentDocuments(?DocumentCollection $dependentDocuments): void
    {
        $this->dependentDocuments = $dependentDocuments;
    }

    public function getDocumentMediaFile(): ?MediaEntity
    {
        return $this->documentMediaFile;
    }

    public function setDocumentMediaFile(?MediaEntity $documentMediaFile): void
    {
        $this->documentMediaFile = $documentMediaFile;
    }
}
