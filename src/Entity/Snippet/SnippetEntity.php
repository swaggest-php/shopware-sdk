<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\Snippet;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\SnippetSet\SnippetSetEntity;

final class SnippetEntity extends Entity
{
    use EntityIdTrait;

    protected string $setId;

    protected string $translationKey;

    protected string $value;

    protected string $author;

    protected ?array $customFields;

    protected ?SnippetSetEntity $set;

    public function getSetId(): string
    {
        return $this->setId;
    }

    public function setSetId(string $setId): void
    {
        $this->setId = $setId;
    }

    public function getTranslationKey(): string
    {
        return $this->translationKey;
    }

    public function setTranslationKey(string $translationKey): void
    {
        $this->translationKey = $translationKey;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function setValue(string $value): void
    {
        $this->value = $value;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function setAuthor(string $author): void
    {
        $this->author = $author;
    }

    public function getCustomFields(): ?array
    {
        return $this->customFields;
    }

    public function setCustomFields(?array $customFields): void
    {
        $this->customFields = $customFields;
    }

    public function getSet(): ?SnippetSetEntity
    {
        return $this->set;
    }

    public function setSet(?SnippetSetEntity $set): void
    {
        $this->set = $set;
    }
}
