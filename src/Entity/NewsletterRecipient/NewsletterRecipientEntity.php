<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\NewsletterRecipient;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\Language\LanguageEntity;
use Swaggest\ShopwareSdk\Entity\SalesChannel\SalesChannelEntity;
use Swaggest\ShopwareSdk\Entity\Salutation\SalutationEntity;
use Swaggest\ShopwareSdk\Entity\Tag\TagCollection;

final class NewsletterRecipientEntity extends Entity
{
    use EntityIdTrait;

    protected string $email;

    protected ?string $title;

    protected ?string $firstName;

    protected ?string $lastName;

    protected ?string $zipCode;

    protected ?string $city;

    protected ?string $street;

    protected string $status;

    protected string $hash;

    protected ?array $customFields;

    protected ?\DateTimeInterface $confirmedAt;

    protected ?TagCollection $tags;

    protected ?string $salutationId;

    protected ?SalutationEntity $salutation;

    protected string $languageId;

    protected ?LanguageEntity $language;

    protected string $salesChannelId;

    protected ?SalesChannelEntity $salesChannel;

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(?string $firstName): void
    {
        $this->firstName = $firstName;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(?string $lastName): void
    {
        $this->lastName = $lastName;
    }

    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }

    public function setZipCode(?string $zipCode): void
    {
        $this->zipCode = $zipCode;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): void
    {
        $this->city = $city;
    }

    public function getStreet(): ?string
    {
        return $this->street;
    }

    public function setStreet(?string $street): void
    {
        $this->street = $street;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    public function getHash(): string
    {
        return $this->hash;
    }

    public function setHash(string $hash): void
    {
        $this->hash = $hash;
    }

    public function getCustomFields(): ?array
    {
        return $this->customFields;
    }

    public function setCustomFields(?array $customFields): void
    {
        $this->customFields = $customFields;
    }

    public function getConfirmedAt(): ?\DateTimeInterface
    {
        return $this->confirmedAt;
    }

    public function setConfirmedAt(?\DateTimeInterface $confirmedAt): void
    {
        $this->confirmedAt = $confirmedAt;
    }

    public function getTags(): ?TagCollection
    {
        return $this->tags;
    }

    public function setTags(?TagCollection $tags): void
    {
        $this->tags = $tags;
    }

    public function getSalutationId(): ?string
    {
        return $this->salutationId;
    }

    public function setSalutationId(?string $salutationId): void
    {
        $this->salutationId = $salutationId;
    }

    public function getSalutation(): ?SalutationEntity
    {
        return $this->salutation;
    }

    public function setSalutation(?SalutationEntity $salutation): void
    {
        $this->salutation = $salutation;
    }

    public function getLanguageId(): string
    {
        return $this->languageId;
    }

    public function setLanguageId(string $languageId): void
    {
        $this->languageId = $languageId;
    }

    public function getLanguage(): ?LanguageEntity
    {
        return $this->language;
    }

    public function setLanguage(?LanguageEntity $language): void
    {
        $this->language = $language;
    }

    public function getSalesChannelId(): string
    {
        return $this->salesChannelId;
    }

    public function setSalesChannelId(string $salesChannelId): void
    {
        $this->salesChannelId = $salesChannelId;
    }

    public function getSalesChannel(): ?SalesChannelEntity
    {
        return $this->salesChannel;
    }

    public function setSalesChannel(?SalesChannelEntity $salesChannel): void
    {
        $this->salesChannel = $salesChannel;
    }
}
