<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\SnippetSet;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\SalesChannelDomain\SalesChannelDomainCollection;
use Swaggest\ShopwareSdk\Entity\Snippet\SnippetCollection;

final class SnippetSetEntity extends Entity
{
    use EntityIdTrait;

    protected string $name;

    protected string $baseFile;

    protected string $iso;

    protected array $customFields;

    protected ?SnippetCollection $snippets;

    protected ?SalesChannelDomainCollection $salesChannelDomains;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getBaseFile(): string
    {
        return $this->baseFile;
    }

    public function setBaseFile(string $baseFile): void
    {
        $this->baseFile = $baseFile;
    }

    public function getIso(): string
    {
        return $this->iso;
    }

    public function setIso(string $iso): void
    {
        $this->iso = $iso;
    }

    public function getCustomFields(): array
    {
        return $this->customFields;
    }

    public function setCustomFields(array $customFields): void
    {
        $this->customFields = $customFields;
    }

    public function getSnippets(): ?SnippetCollection
    {
        return $this->snippets;
    }

    public function setSnippets(?SnippetCollection $snippets): void
    {
        $this->snippets = $snippets;
    }

    public function getSalesChannelDomains(): ?SalesChannelDomainCollection
    {
        return $this->salesChannelDomains;
    }

    public function setSalesChannelDomains(?SalesChannelDomainCollection $salesChannelDomains): void
    {
        $this->salesChannelDomains = $salesChannelDomains;
    }
}
