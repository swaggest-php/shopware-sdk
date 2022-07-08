<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\MailTemplateType;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\MailTemplate\MailTemplateCollection;
use Swaggest\ShopwareSdk\Entity\MailTemplateTypeTranslation\MailTemplateTypeTranslationCollection;

final class MailTemplateTypeEntity extends Entity
{
    use EntityIdTrait;

    protected string $name;

    protected string $technicalName;

    protected array $availableEntities;

    protected array $customFields;

    protected MailTemplateTypeTranslationCollection $translations;

    protected ?MailTemplateCollection $mailTemplates;

    protected array $templateData;

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

    public function getAvailableEntities(): array
    {
        return $this->availableEntities;
    }

    public function setAvailableEntities(array $availableEntities): void
    {
        $this->availableEntities = $availableEntities;
    }

    public function getCustomFields(): array
    {
        return $this->customFields;
    }

    public function setCustomFields(array $customFields): void
    {
        $this->customFields = $customFields;
    }

    public function getTranslations(): MailTemplateTypeTranslationCollection
    {
        return $this->translations;
    }

    public function setTranslations(MailTemplateTypeTranslationCollection $translations): void
    {
        $this->translations = $translations;
    }

    public function getMailTemplates(): ?MailTemplateCollection
    {
        return $this->mailTemplates;
    }

    public function setMailTemplates(?MailTemplateCollection $mailTemplates): void
    {
        $this->mailTemplates = $mailTemplates;
    }

    public function getTemplateData(): array
    {
        return $this->templateData;
    }

    public function setTemplateData(array $templateData): void
    {
        $this->templateData = $templateData;
    }
}
