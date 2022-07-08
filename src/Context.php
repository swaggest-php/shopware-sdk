<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk;

use Swaggest\ShopwareSdk\Struct\Struct;

final class Context extends Struct
{
    public function __construct(
        protected string $clientId,
        protected string $clientSecret,
        protected string $baseUrl,
        protected bool $apiCompatibility = false,
        protected bool $inheritance = false,
        protected ?string $currencyId = null,
        protected ?string $languageId = null,
        protected ?string $versionId = null,
    ) {
    }

    public function getClientId(): string
    {
        return $this->clientId;
    }

    public function getClientSecret(): string
    {
        return $this->clientSecret;
    }

    public function getBaseUrl(): string
    {
        return $this->baseUrl;
    }

    public function isApiCompatibilityEnabled(): bool
    {
        return $this->apiCompatibility;
    }

    public function isInheritanceEnabled(): bool
    {
        return $this->inheritance;
    }

    public function getCurrencyId(): ?string
    {
        return $this->currencyId;
    }

    public function getLanguageId(): ?string
    {
        return $this->languageId;
    }

    public function getVersionId(): ?string
    {
        return $this->versionId;
    }
}
