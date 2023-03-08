<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Internal;

use Swaggest\ShopwareSdk\Context;

final class HeaderProvider implements HeaderProviderInterface
{
    public function getHeaders(Context $context): array
    {
        return \array_merge($this->prepareCommonHeaders(), $this->prepareContextHeaders($context));
    }

    private function prepareContextHeaders(Context $context): array
    {
        $headers = [];

        $headers['sw-api-compatibility'] = $context->isApiCompatibilityEnabled();
        $headers['sw-inheritance'] = $context->isInheritanceEnabled();

        if (null !== $context->getCurrencyId()) {
            $headers['sw-currency-id'] = $context->getCurrencyId();
        }

        if (null !== $context->getLanguageId()) {
            $headers['sw-language-id'] = $context->getLanguageId();
        }

        if (null !== $context->getVersionId()) {
            $headers['sw-version-id'] = $context->getVersionId();
        }

        return $headers;
    }

    private function prepareCommonHeaders(): array
    {
        return [
            'Accept' => 'application/vnd.api+json',
            'Content-Type' => 'application/json',
        ];
    }
}
