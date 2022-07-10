<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\SalesChannel;

use Swaggest\ShopwareSdk\Entity\AbstractEntityDefinition;
use Swaggest\ShopwareSdk\Schema\AssociationField;
use Swaggest\ShopwareSdk\Schema\Field;
use Swaggest\ShopwareSdk\Schema\Flag\CascadeDelete;
use Swaggest\ShopwareSdk\Schema\Flag\Computed;
use Swaggest\ShopwareSdk\Schema\Flag\Deprecated;
use Swaggest\ShopwareSdk\Schema\Flag\Extension;
use Swaggest\ShopwareSdk\Schema\Flag\PrimaryKey;
use Swaggest\ShopwareSdk\Schema\Flag\ProtectedFlag;
use Swaggest\ShopwareSdk\Schema\Flag\ReadProtected;
use Swaggest\ShopwareSdk\Schema\Flag\Required;
use Swaggest\ShopwareSdk\Schema\Flag\Runtime;
use Swaggest\ShopwareSdk\Schema\Flag\Translatable;
use Swaggest\ShopwareSdk\Schema\Flag\WriteProtected;

final class SalesChannelDefinition extends AbstractEntityDefinition
{
    public function getEntityName(): string
    {
        return 'sales_channel';
    }

    public function getCollectionClass(): string
    {
        return SalesChannelCollection::class;
    }

    public function getEntityClass(): string
    {
        return SalesChannelEntity::class;
    }

    public function defineFields(): array
    {
        return [
            (new Field('id', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new PrimaryKey(), new Required()),
            (new Field('typeId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required()),
            (new Field('languageId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Required()),
            (new Field('customerGroupId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Required()),
            (new Field('currencyId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Required()),
            (new Field('paymentMethodId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Required()),
            (new Field('shippingMethodId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Required()),
            (new Field('countryId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Required()),
            (new Field('analyticsId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('navigationCategoryId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Required()),
            (new Field('navigationCategoryVersionId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Required()),
            (new Field('navigationCategoryDepth', 'int'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
            (new Field('footerCategoryId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
            (new Field('footerCategoryVersionId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Required()),
            (new Field('serviceCategoryId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
            (new Field('serviceCategoryVersionId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Required()),
            (new Field('mailHeaderFooterId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
            (new Field('hreflangDefaultDomainId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
            (new Field('name', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Required(), new Translatable()),
            (new Field('shortName', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
            (new Field('taxCalculationType', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
            (new Field('accessKey', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required()),
            (new Field('configuration', 'json_object'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
            (new Field('active', 'boolean'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
            (new Field('hreflangActive', 'boolean'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
            (new Field('maintenance', 'boolean'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
            (new Field('maintenanceIpWhitelist', 'json_list'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('customFields', 'json_object'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Translatable()),
            (new AssociationField('translations', AssociationField::ONE_TO_MANY, 'sales_channel_translation', 'id', 'salesChannelId', 'salesChannelId', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete(), new Required()),
            (new AssociationField('currencies', AssociationField::MANY_TO_MANY, 'currency', 'id', 'id', null, 'sales_channel_currency', 'currencyId', 'salesChannelId'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('languages', AssociationField::MANY_TO_MANY, 'language', 'id', 'id', null, 'sales_channel_language', 'languageId', 'salesChannelId'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('countries', AssociationField::MANY_TO_MANY, 'country', 'id', 'id', null, 'sales_channel_country', 'countryId', 'salesChannelId'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('paymentMethods', AssociationField::MANY_TO_MANY, 'payment_method', 'id', 'id', null, 'sales_channel_payment_method', 'paymentMethodId', 'salesChannelId'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('paymentMethodIds', 'json_list'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new WriteProtected([])),
            (new AssociationField('shippingMethods', AssociationField::MANY_TO_MANY, 'shipping_method', 'id', 'id', null, 'sales_channel_shipping_method', 'shippingMethodId', 'salesChannelId'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('type', AssociationField::MANY_TO_ONE, 'sales_channel_type', 'typeId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('language', AssociationField::MANY_TO_ONE, 'language', 'languageId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
            (new AssociationField('customerGroup', AssociationField::MANY_TO_ONE, 'customer_group', 'customerGroupId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('currency', AssociationField::MANY_TO_ONE, 'currency', 'currencyId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
            (new AssociationField('paymentMethod', AssociationField::MANY_TO_ONE, 'payment_method', 'paymentMethodId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
            (new AssociationField('shippingMethod', AssociationField::MANY_TO_ONE, 'shipping_method', 'shippingMethodId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
            (new AssociationField('country', AssociationField::MANY_TO_ONE, 'country', 'countryId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
            (new AssociationField('orders', AssociationField::ONE_TO_MANY, 'order', 'id', 'salesChannelId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('customers', AssociationField::ONE_TO_MANY, 'customer', 'id', 'salesChannelId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('homeCmsPageId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('homeCmsPageVersionId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required()),
            (new AssociationField('homeCmsPage', AssociationField::MANY_TO_ONE, 'cms_page', 'homeCmsPageId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('homeSlotConfig', 'json_object'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Translatable()),
            (new Field('homeEnabled', 'boolean'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Required(), new Translatable()),
            (new Field('homeName', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Translatable()),
            (new Field('homeMetaTitle', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Translatable()),
            (new Field('homeMetaDescription', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Translatable()),
            (new Field('homeKeywords', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Translatable()),
            (new AssociationField('domains', AssociationField::ONE_TO_MANY, 'sales_channel_domain', 'id', 'salesChannelId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new CascadeDelete()),
            (new AssociationField('systemConfigs', AssociationField::ONE_TO_MANY, 'system_config', 'id', 'salesChannelId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete()),
            (new AssociationField('navigationCategory', AssociationField::MANY_TO_ONE, 'category', 'navigationCategoryId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
            (new AssociationField('footerCategory', AssociationField::MANY_TO_ONE, 'category', 'footerCategoryId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
            (new AssociationField('serviceCategory', AssociationField::MANY_TO_ONE, 'category', 'serviceCategoryId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
            (new AssociationField('productVisibilities', AssociationField::ONE_TO_MANY, 'product_visibility', 'id', 'salesChannelId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete()),
            (new AssociationField('hreflangDefaultDomain', AssociationField::ONE_TO_ONE, 'sales_channel_domain', 'hreflangDefaultDomainId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
            (new AssociationField('mailHeaderFooter', AssociationField::MANY_TO_ONE, 'mail_header_footer', 'mailHeaderFooterId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('newsletterRecipients', AssociationField::ONE_TO_MANY, 'newsletter_recipient', 'id', 'salesChannelId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('numberRangeSalesChannels', AssociationField::ONE_TO_MANY, 'number_range_sales_channel', 'id', 'salesChannelId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete()),
            (new AssociationField('promotionSalesChannels', AssociationField::ONE_TO_MANY, 'promotion_sales_channel', 'id', 'salesChannelId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete()),
            (new AssociationField('documentBaseConfigSalesChannels', AssociationField::ONE_TO_MANY, 'document_base_config_sales_channel', 'id', 'salesChannelId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete()),
            (new AssociationField('productReviews', AssociationField::ONE_TO_MANY, 'product_review', 'id', 'salesChannelId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('seoUrls', AssociationField::ONE_TO_MANY, 'seo_url', 'id', 'salesChannelId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete()),
            (new AssociationField('seoUrlTemplates', AssociationField::ONE_TO_MANY, 'seo_url_template', 'id', 'salesChannelId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete()),
            (new AssociationField('mainCategories', AssociationField::ONE_TO_MANY, 'main_category', 'id', 'salesChannelId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete()),
            (new AssociationField('productExports', AssociationField::ONE_TO_MANY, 'product_export', 'id', 'salesChannelId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('analytics', AssociationField::ONE_TO_ONE, 'sales_channel_analytics', 'analyticsId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete()),
            (new AssociationField('customerGroupsRegistrations', AssociationField::MANY_TO_MANY, 'customer_group', 'id', 'id', null, 'customer_group_registration_sales_channels', 'customerGroupId', 'salesChannelId'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('eventActions', AssociationField::MANY_TO_MANY, 'event_action', 'id', 'id', null, 'event_action_sales_channel', 'eventActionId', 'salesChannelId'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete(), new Deprecated('v6.4.6', 'v6.5.0', null)),
            (new AssociationField('landingPages', AssociationField::MANY_TO_MANY, 'landing_page', 'id', 'id', null, 'landing_page_sales_channel', 'landingPageId', 'salesChannelId'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('boundCustomers', AssociationField::ONE_TO_MANY, 'customer', 'id', 'boundSalesChannelId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('wishlists', AssociationField::ONE_TO_MANY, 'customer_wishlist', 'id', 'salesChannelId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete()),
            (new Field('createdAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Required()),
            (new Field('updatedAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
            (new AssociationField('themes', AssociationField::MANY_TO_MANY, 'theme', 'id', 'id', null, 'theme_sales_channel', 'themeId', 'salesChannelId'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Extension()),
            (new Field('translated', 'json_object'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Computed(), new Runtime()),
        ];
    }
}
