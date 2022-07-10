<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\MailTemplate;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\MailTemplateMedia\MailTemplateMediaCollection;
use Swaggest\ShopwareSdk\Entity\MailTemplateTranslation\MailTemplateTranslationCollection;
use Swaggest\ShopwareSdk\Entity\MailTemplateType\MailTemplateTypeEntity;

final class MailTemplateEntity extends Entity
{
    use EntityIdTrait;

    protected string $mailTemplateTypeId;

    protected ?bool $systemDefault;

    protected ?string $senderName;

    protected ?string $description;

    protected string $subject;

    protected string $contentHtml;

    protected string $contentPlain;

    protected ?array $customFields;

    protected MailTemplateTranslationCollection $translations;

    protected ?MailTemplateTypeEntity $mailTemplateType;

    protected ?MailTemplateMediaCollection $media;

    public function getMailTemplateTypeId(): string
    {
        return $this->mailTemplateTypeId;
    }

    public function setMailTemplateTypeId(string $mailTemplateTypeId): void
    {
        $this->mailTemplateTypeId = $mailTemplateTypeId;
    }

    public function getSystemDefault(): ?bool
    {
        return $this->systemDefault;
    }

    public function setSystemDefault(?bool $systemDefault): void
    {
        $this->systemDefault = $systemDefault;
    }

    public function getSenderName(): ?string
    {
        return $this->senderName;
    }

    public function setSenderName(?string $senderName): void
    {
        $this->senderName = $senderName;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    public function getSubject(): string
    {
        return $this->subject;
    }

    public function setSubject(string $subject): void
    {
        $this->subject = $subject;
    }

    public function getContentHtml(): string
    {
        return $this->contentHtml;
    }

    public function setContentHtml(string $contentHtml): void
    {
        $this->contentHtml = $contentHtml;
    }

    public function getContentPlain(): string
    {
        return $this->contentPlain;
    }

    public function setContentPlain(string $contentPlain): void
    {
        $this->contentPlain = $contentPlain;
    }

    public function getCustomFields(): ?array
    {
        return $this->customFields;
    }

    public function setCustomFields(?array $customFields): void
    {
        $this->customFields = $customFields;
    }

    public function getTranslations(): MailTemplateTranslationCollection
    {
        return $this->translations;
    }

    public function setTranslations(MailTemplateTranslationCollection $translations): void
    {
        $this->translations = $translations;
    }

    public function getMailTemplateType(): ?MailTemplateTypeEntity
    {
        return $this->mailTemplateType;
    }

    public function setMailTemplateType(?MailTemplateTypeEntity $mailTemplateType): void
    {
        $this->mailTemplateType = $mailTemplateType;
    }

    public function getMedia(): ?MailTemplateMediaCollection
    {
        return $this->media;
    }

    public function setMedia(?MailTemplateMediaCollection $media): void
    {
        $this->media = $media;
    }
}
