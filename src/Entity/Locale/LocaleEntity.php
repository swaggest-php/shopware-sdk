<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\Locale;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\Language\LanguageCollection;
use Swaggest\ShopwareSdk\Entity\LocaleTranslation\LocaleTranslationCollection;
use Swaggest\ShopwareSdk\Entity\User\UserCollection;

final class LocaleEntity extends Entity
{
    use EntityIdTrait;

    protected string $code;

    protected string $name;

    protected string $territory;

    protected ?array $customFields;

    protected ?LanguageCollection $languages;

    protected LocaleTranslationCollection $translations;

    protected ?UserCollection $users;

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getTerritory(): string
    {
        return $this->territory;
    }

    public function setTerritory(string $territory): void
    {
        $this->territory = $territory;
    }

    public function getCustomFields(): ?array
    {
        return $this->customFields;
    }

    public function setCustomFields(?array $customFields): void
    {
        $this->customFields = $customFields;
    }

    public function getLanguages(): ?LanguageCollection
    {
        return $this->languages;
    }

    public function setLanguages(?LanguageCollection $languages): void
    {
        $this->languages = $languages;
    }

    public function getTranslations(): LocaleTranslationCollection
    {
        return $this->translations;
    }

    public function setTranslations(LocaleTranslationCollection $translations): void
    {
        $this->translations = $translations;
    }

    public function getUsers(): ?UserCollection
    {
        return $this->users;
    }

    public function setUsers(?UserCollection $users): void
    {
        $this->users = $users;
    }
}
