<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\CustomerGroupTranslation;

use Swaggest\ShopwareSdk\Entity\CustomerGroup\CustomerGroupEntity;
use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\Language\LanguageEntity;

final class CustomerGroupTranslationEntity extends Entity
{
    use EntityIdTrait;

    protected string $name;

    protected ?string $registrationTitle;

    protected ?string $registrationIntroduction;

    protected ?bool $registrationOnlyCompanyRegistration;

    protected ?string $registrationSeoMetaDescription;

    protected ?array $customFields;

    protected string $customerGroupId;

    protected string $languageId;

    protected ?CustomerGroupEntity $customerGroup;

    protected ?LanguageEntity $language;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getRegistrationTitle(): ?string
    {
        return $this->registrationTitle;
    }

    public function setRegistrationTitle(?string $registrationTitle): void
    {
        $this->registrationTitle = $registrationTitle;
    }

    public function getRegistrationIntroduction(): ?string
    {
        return $this->registrationIntroduction;
    }

    public function setRegistrationIntroduction(?string $registrationIntroduction): void
    {
        $this->registrationIntroduction = $registrationIntroduction;
    }

    public function getRegistrationOnlyCompanyRegistration(): ?bool
    {
        return $this->registrationOnlyCompanyRegistration;
    }

    public function setRegistrationOnlyCompanyRegistration(?bool $registrationOnlyCompanyRegistration): void
    {
        $this->registrationOnlyCompanyRegistration = $registrationOnlyCompanyRegistration;
    }

    public function getRegistrationSeoMetaDescription(): ?string
    {
        return $this->registrationSeoMetaDescription;
    }

    public function setRegistrationSeoMetaDescription(?string $registrationSeoMetaDescription): void
    {
        $this->registrationSeoMetaDescription = $registrationSeoMetaDescription;
    }

    public function getCustomFields(): ?array
    {
        return $this->customFields;
    }

    public function setCustomFields(?array $customFields): void
    {
        $this->customFields = $customFields;
    }

    public function getCustomerGroupId(): string
    {
        return $this->customerGroupId;
    }

    public function setCustomerGroupId(string $customerGroupId): void
    {
        $this->customerGroupId = $customerGroupId;
    }

    public function getLanguageId(): string
    {
        return $this->languageId;
    }

    public function setLanguageId(string $languageId): void
    {
        $this->languageId = $languageId;
    }

    public function getCustomerGroup(): ?CustomerGroupEntity
    {
        return $this->customerGroup;
    }

    public function setCustomerGroup(?CustomerGroupEntity $customerGroup): void
    {
        $this->customerGroup = $customerGroup;
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
