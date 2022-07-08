<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Internal;

use League\OAuth2\Client\Provider\GenericProvider;
use Swaggest\ShopwareSdk\Context;
use function rtrim;

final class ProviderFactory
{
    private const OAUTH_TOKEN_ENDPOINT = '/api/oauth/token';

    private const OAUTH_AUTHORIZE_ENDPOINT = '/api/oauth/authorize';

    private const OAUTH_RESOURCE_ENDPOINT = '/api/oauth/resource';

    public function create(Context $context): GenericProvider
    {
        $baseUrl = rtrim($context->getBaseUrl(), '/');

        return new GenericProvider([
            'clientId' => $context->getClientId(),
            'clientSecret' => $context->getClientSecret(),
            'urlAuthorize' => $baseUrl . self::OAUTH_AUTHORIZE_ENDPOINT,
            'urlAccessToken' => $baseUrl . self::OAUTH_TOKEN_ENDPOINT,
            'urlResourceOwnerDetails' => $baseUrl . self::OAUTH_RESOURCE_ENDPOINT,
        ]);
    }
}
