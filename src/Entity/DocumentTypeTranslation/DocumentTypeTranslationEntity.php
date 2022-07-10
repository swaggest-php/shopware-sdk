<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\DocumentTypeTranslation;

use Swaggest\ShopwareSdk\Entity\DocumentType\DocumentTypeEntity;
use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\Language\LanguageEntity;

final class DocumentTypeTranslationEntity extends Entity
{
    use EntityIdTrait;

    protected string $name;

    protected ?array $customFields;

    protected string $documentTypeId;

    protected string $languageId;

    protected ?DocumentTypeEntity $documentType;

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

    public function getDocumentTypeId(): string
    {
        return $this->documentTypeId;
    }

    public function setDocumentTypeId(string $documentTypeId): void
    {
        $this->documentTypeId = $documentTypeId;
    }

    public function getLanguageId(): string
    {
        return $this->languageId;
    }

    public function setLanguageId(string $languageId): void
    {
        $this->languageId = $languageId;
    }

    public function getDocumentType(): ?DocumentTypeEntity
    {
        return $this->documentType;
    }

    public function setDocumentType(?DocumentTypeEntity $documentType): void
    {
        $this->documentType = $documentType;
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
