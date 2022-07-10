<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\StateMachineTranslation;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\Language\LanguageEntity;
use Swaggest\ShopwareSdk\Entity\StateMachine\StateMachineEntity;

final class StateMachineTranslationEntity extends Entity
{
    use EntityIdTrait;

    protected string $name;

    protected ?array $customFields;

    protected string $stateMachineId;

    protected string $languageId;

    protected ?StateMachineEntity $stateMachine;

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

    public function getStateMachineId(): string
    {
        return $this->stateMachineId;
    }

    public function setStateMachineId(string $stateMachineId): void
    {
        $this->stateMachineId = $stateMachineId;
    }

    public function getLanguageId(): string
    {
        return $this->languageId;
    }

    public function setLanguageId(string $languageId): void
    {
        $this->languageId = $languageId;
    }

    public function getStateMachine(): ?StateMachineEntity
    {
        return $this->stateMachine;
    }

    public function setStateMachine(?StateMachineEntity $stateMachine): void
    {
        $this->stateMachine = $stateMachine;
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
