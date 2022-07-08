<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Internal;

use League\OAuth2\Client\Provider\Exception\IdentityProviderException;
use League\OAuth2\Client\Provider\GenericProvider;
use League\OAuth2\Client\Token\AccessTokenInterface;
use Psr\Http\Message\ResponseInterface;
use Swaggest\ShopwareSdk\Context;
use Swaggest\ShopwareSdk\Exception\ShopwareClientException;
use function json_encode;
use function ltrim;
use function rtrim;

/**
 * @internal
 */
final class ShopwareClient implements ShopwareClientInterface
{
    private ?AccessTokenInterface $accessToken = null;

    public function __construct(
        private GenericProvider $provider,
        private HeaderProviderInterface $headerProvider
    ) {
    }

    public function get(string $endpoint, Context $context): ResponseInterface
    {
        return $this->sendRequest('GET', $endpoint, [], $context);
    }

    public function sendRequest(string $method, string $endpoint, array $data, Context $context): ResponseInterface
    {
        $url = rtrim($context->getBaseUrl(), '/') . '/api/' . ltrim($endpoint, '/');

        try {
            if (null === $this->accessToken || $this->accessToken->hasExpired()) {
                $this->accessToken = $this->provider->getAccessToken('client_credentials');
            }
        } catch (IdentityProviderException $e) {
            throw new ShopwareClientException($e->getMessage());
        }

        $options = [
            'headers' => $this->headerProvider->getHeaders($context),
            'body' => json_encode($data),
        ];

        $request = $this->provider->getAuthenticatedRequest($method, $url, $this->accessToken, $options);

        return $this->provider->getResponse($request);
    }
}
