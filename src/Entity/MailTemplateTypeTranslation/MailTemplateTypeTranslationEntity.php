<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\MailTemplateTypeTranslation;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\Language\LanguageEntity;
use Swaggest\ShopwareSdk\Entity\MailTemplateType\MailTemplateTypeEntity;

final class MailTemplateTypeTranslationEntity extends Entity
{
    use EntityIdTrait;

    protected string $name;

    protected ?array $customFields;

    protected string $mailTemplateTypeId;

    protected string $languageId;

    protected ?MailTemplateTypeEntity $mailTemplateType;

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

    public function getMailTemplateTypeId(): string
    {
        return $this->mailTemplateTypeId;
    }

    public function setMailTemplateTypeId(string $mailTemplateTypeId): void
    {
        $this->mailTemplateTypeId = $mailTemplateTypeId;
    }

    public function getLanguageId(): string
    {
        return $this->languageId;
    }

    public function setLanguageId(string $languageId): void
    {
        $this->languageId = $languageId;
    }

    public function getMailTemplateType(): ?MailTemplateTypeEntity
    {
        return $this->mailTemplateType;
    }

    public function setMailTemplateType(?MailTemplateTypeEntity $mailTemplateType): void
    {
        $this->mailTemplateType = $mailTemplateType;
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
