<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\WebhookEventLog;

use Swaggest\ShopwareSdk\Entity\AbstractEntityDefinition;
use Swaggest\ShopwareSdk\Schema\Field;
use Swaggest\ShopwareSdk\Schema\Flag\PrimaryKey;
use Swaggest\ShopwareSdk\Schema\Flag\ProtectedFlag;
use Swaggest\ShopwareSdk\Schema\Flag\ReadProtected;
use Swaggest\ShopwareSdk\Schema\Flag\Required;
use Swaggest\ShopwareSdk\Schema\Flag\WriteProtected;

final class WebhookEventLogDefinition extends AbstractEntityDefinition
{
    public function getEntityName(): string
    {
        return 'webhook_event_log';
    }

    public function getCollectionClass(): string
    {
        return WebhookEventLogCollection::class;
    }

    public function getEntityClass(): string
    {
        return WebhookEventLogEntity::class;
    }

    public function defineFields(): array
    {
        return [
            (new Field('id', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new PrimaryKey(), new Required()),
            (new Field('appName', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('webhookName', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required()),
            (new Field('eventName', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required()),
            (new Field('deliveryStatus', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required()),
            (new Field('timestamp', 'int'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('processingTime', 'int'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('appVersion', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('requestContent', 'json_object'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('responseContent', 'json_object'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('responseStatusCode', 'int'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('responseReasonPhrase', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('url', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required()),
            (new Field('serializedWebhookMessage', 'blob'))->addFlags(new Required(), new WriteProtected([ProtectedFlag::SYSTEM])),
            (new Field('customFields', 'json_object'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('createdAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Required()),
            (new Field('updatedAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
        ];
    }
}
