<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\DocumentType;

use Swaggest\ShopwareSdk\Entity\Document\DocumentCollection;
use Swaggest\ShopwareSdk\Entity\DocumentBaseConfig\DocumentBaseConfigCollection;
use Swaggest\ShopwareSdk\Entity\DocumentBaseConfigSalesChannel\DocumentBaseConfigSalesChannelCollection;
use Swaggest\ShopwareSdk\Entity\DocumentTypeTranslation\DocumentTypeTranslationCollection;
use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;

final class DocumentTypeEntity extends Entity
{
    use EntityIdTrait;

    protected string $name;

    protected string $technicalName;

    protected array $customFields;

    protected DocumentTypeTranslationCollection $translations;

    protected ?DocumentCollection $documents;

    protected ?DocumentBaseConfigCollection $documentBaseConfigs;

    protected ?DocumentBaseConfigSalesChannelCollection $documentBaseConfigSalesChannels;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getTechnicalName(): string
    {
        return $this->technicalName;
    }

    public function setTechnicalName(string $technicalName): void
    {
        $this->technicalName = $technicalName;
    }

    public function getCustomFields(): array
    {
        return $this->customFields;
    }

    public function setCustomFields(array $customFields): void
    {
        $this->customFields = $customFields;
    }

    public function getTranslations(): DocumentTypeTranslationCollection
    {
        return $this->translations;
    }

    public function setTranslations(DocumentTypeTranslationCollection $translations): void
    {
        $this->translations = $translations;
    }

    public function getDocuments(): ?DocumentCollection
    {
        return $this->documents;
    }

    public function setDocuments(?DocumentCollection $documents): void
    {
        $this->documents = $documents;
    }

    public function getDocumentBaseConfigs(): ?DocumentBaseConfigCollection
    {
        return $this->documentBaseConfigs;
    }

    public function setDocumentBaseConfigs(?DocumentBaseConfigCollection $documentBaseConfigs): void
    {
        $this->documentBaseConfigs = $documentBaseConfigs;
    }

    public function getDocumentBaseConfigSalesChannels(): ?DocumentBaseConfigSalesChannelCollection
    {
        return $this->documentBaseConfigSalesChannels;
    }

    public function setDocumentBaseConfigSalesChannels(?DocumentBaseConfigSalesChannelCollection $documentBaseConfigSalesChannels): void
    {
        $this->documentBaseConfigSalesChannels = $documentBaseConfigSalesChannels;
    }
}
