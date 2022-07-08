<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\Language;

use Swaggest\ShopwareSdk\Entity\EntityDefinitionInterface;
use Swaggest\ShopwareSdk\Schema\Association;
use Swaggest\ShopwareSdk\Schema\Field;
use Swaggest\ShopwareSdk\Schema\Flag\CascadeDelete;
use Swaggest\ShopwareSdk\Schema\Flag\Extension;
use Swaggest\ShopwareSdk\Schema\Flag\PrimaryKey;
use Swaggest\ShopwareSdk\Schema\Flag\ProtectedFlag;
use Swaggest\ShopwareSdk\Schema\Flag\ReadProtected;
use Swaggest\ShopwareSdk\Schema\Flag\Required;
use Swaggest\ShopwareSdk\Schema\Flag\RestrictDelete;

final class LanguageDefinition implements EntityDefinitionInterface
{
    public function getEntityName(): string
    {
        return 'language';
    }

    public function getCollectionClass(): string
    {
        return LanguageCollection::class;
    }

    public function getEntityClass(): string
    {
        return LanguageEntity::class;
    }

    public function defineFields(): array
    {
        return [
            (new Field('id', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new PrimaryKey(), new Required()),
            (new Field('parentId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
            (new Field('localeId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Required()),
            (new Field('translationCodeId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
            (new Field('name', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Required()),
            (new Field('customFields', 'json_object'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
            (new Association('parent', Association::MANY_TO_ONE, 'language', 'parentId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
            (new Association('locale', Association::MANY_TO_ONE, 'locale', 'localeId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
            (new Association('translationCode', Association::MANY_TO_ONE, 'locale', 'translationCodeId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
            (new Association('children', Association::ONE_TO_MANY, 'language', 'id', 'parentId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new CascadeDelete()),
            (new Association('salesChannels', Association::MANY_TO_MANY, 'sales_channel', 'id', 'id', null, 'sales_channel_language', 'salesChannelId', 'languageId'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Association('salesChannelDefaultAssignments', Association::ONE_TO_MANY, 'sales_channel', 'id', 'languageId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Association('salesChannelDomains', Association::ONE_TO_MANY, 'sales_channel_domain', 'id', 'languageId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new RestrictDelete()),
            (new Association('customers', Association::ONE_TO_MANY, 'customer', 'id', 'languageId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new RestrictDelete()),
            (new Association('newsletterRecipients', Association::ONE_TO_MANY, 'newsletter_recipient', 'id', 'languageId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new RestrictDelete()),
            (new Association('orders', Association::ONE_TO_MANY, 'order', 'id', 'languageId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new RestrictDelete()),
            (new Association('categoryTranslations', Association::ONE_TO_MANY, 'category_translation', 'id', 'languageId', 'categoryId', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete()),
            (new Association('countryStateTranslations', Association::ONE_TO_MANY, 'country_state_translation', 'id', 'languageId', 'countryStateId', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete()),
            (new Association('countryTranslations', Association::ONE_TO_MANY, 'country_translation', 'id', 'languageId', 'countryId', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete()),
            (new Association('currencyTranslations', Association::ONE_TO_MANY, 'currency_translation', 'id', 'languageId', 'currencyId', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete()),
            (new Association('customerGroupTranslations', Association::ONE_TO_MANY, 'customer_group_translation', 'id', 'languageId', 'customerGroupId', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete()),
            (new Association('localeTranslations', Association::ONE_TO_MANY, 'locale_translation', 'id', 'languageId', 'localeId', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete()),
            (new Association('mediaTranslations', Association::ONE_TO_MANY, 'media_translation', 'id', 'languageId', 'mediaId', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete()),
            (new Association('paymentMethodTranslations', Association::ONE_TO_MANY, 'payment_method_translation', 'id', 'languageId', 'paymentMethodId', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete()),
            (new Association('productManufacturerTranslations', Association::ONE_TO_MANY, 'product_manufacturer_translation', 'id', 'languageId', 'productManufacturerId', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete()),
            (new Association('productTranslations', Association::ONE_TO_MANY, 'product_translation', 'id', 'languageId', 'productId', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete()),
            (new Association('shippingMethodTranslations', Association::ONE_TO_MANY, 'shipping_method_translation', 'id', 'languageId', 'shippingMethodId', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete()),
            (new Association('unitTranslations', Association::ONE_TO_MANY, 'unit_translation', 'id', 'languageId', 'unitId', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete()),
            (new Association('propertyGroupTranslations', Association::ONE_TO_MANY, 'property_group_translation', 'id', 'languageId', 'propertyGroupId', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete()),
            (new Association('propertyGroupOptionTranslations', Association::ONE_TO_MANY, 'property_group_option_translation', 'id', 'languageId', 'propertyGroupOptionId', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete()),
            (new Association('salesChannelTranslations', Association::ONE_TO_MANY, 'sales_channel_translation', 'id', 'languageId', 'salesChannelId', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete()),
            (new Association('salesChannelTypeTranslations', Association::ONE_TO_MANY, 'sales_channel_type_translation', 'id', 'languageId', 'salesChannelTypeId', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete()),
            (new Association('salutationTranslations', Association::ONE_TO_MANY, 'salutation_translation', 'id', 'languageId', 'salutationId', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete()),
            (new Association('pluginTranslations', Association::ONE_TO_MANY, 'plugin_translation', 'id', 'languageId', 'pluginId', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete()),
            (new Association('productStreamTranslations', Association::ONE_TO_MANY, 'product_stream_translation', 'id', 'languageId', 'productStreamId', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete()),
            (new Association('stateMachineTranslations', Association::ONE_TO_MANY, 'state_machine_translation', 'id', 'languageId', 'stateMachineId', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete()),
            (new Association('stateMachineStateTranslations', Association::ONE_TO_MANY, 'state_machine_state_translation', 'id', 'languageId', 'stateMachineStateId', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete()),
            (new Association('cmsPageTranslations', Association::ONE_TO_MANY, 'cms_page_translation', 'id', 'languageId', 'cmsPageId', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete()),
            (new Association('cmsSlotTranslations', Association::ONE_TO_MANY, 'cms_slot_translation', 'id', 'languageId', 'cmsSlotId', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete()),
            (new Association('mailTemplateTranslations', Association::ONE_TO_MANY, 'mail_template_translation', 'id', 'languageId', 'mailTemplateId', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete()),
            (new Association('mailHeaderFooterTranslations', Association::ONE_TO_MANY, 'mail_header_footer_translation', 'id', 'languageId', 'mailHeaderFooterId', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete()),
            (new Association('documentTypeTranslations', Association::ONE_TO_MANY, 'document_type_translation', 'id', 'languageId', 'documentTypeId', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete()),
            (new Association('numberRangeTypeTranslations', Association::ONE_TO_MANY, 'number_range_type_translation', 'id', 'languageId', 'numberRangeTypeId', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete()),
            (new Association('deliveryTimeTranslations', Association::ONE_TO_MANY, 'delivery_time_translation', 'id', 'languageId', 'deliveryTimeId', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete()),
            (new Association('productSearchKeywords', Association::ONE_TO_MANY, 'product_search_keyword', 'id', 'languageId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete()),
            (new Association('productKeywordDictionaries', Association::ONE_TO_MANY, 'product_keyword_dictionary', 'id', 'languageId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete()),
            (new Association('mailTemplateTypeTranslations', Association::ONE_TO_MANY, 'mail_template_type_translation', 'id', 'languageId', 'mailTemplateTypeId', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete()),
            (new Association('promotionTranslations', Association::ONE_TO_MANY, 'promotion_translation', 'id', 'languageId', 'promotionId', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete()),
            (new Association('numberRangeTranslations', Association::ONE_TO_MANY, 'number_range_translation', 'id', 'languageId', 'numberRangeId', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete()),
            (new Association('productReviews', Association::ONE_TO_MANY, 'product_review', 'id', 'languageId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete()),
            (new Association('seoUrlTranslations', Association::ONE_TO_MANY, 'seo_url', 'id', 'languageId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete()),
            (new Association('taxRuleTypeTranslations', Association::ONE_TO_MANY, 'tax_rule_type_translation', 'id', 'languageId', 'taxRuleTypeId', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete()),
            (new Association('productCrossSellingTranslations', Association::ONE_TO_MANY, 'product_cross_selling_translation', 'id', 'languageId', 'productCrossSellingId', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete()),
            (new Association('importExportProfileTranslations', Association::ONE_TO_MANY, 'import_export_profile_translation', 'id', 'languageId', 'importExportProfileId', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete()),
            (new Association('productSortingTranslations', Association::ONE_TO_MANY, 'product_sorting_translation', 'id', 'languageId', 'productSortingId', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete()),
            (new Association('productFeatureSetTranslations', Association::ONE_TO_MANY, 'product_feature_set_translation', 'id', 'languageId', 'productFeatureSetId', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete()),
            (new Association('appTranslations', Association::ONE_TO_MANY, 'app_translation', 'id', 'languageId', 'appId', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete()),
            (new Association('actionButtonTranslations', Association::ONE_TO_MANY, 'app_action_button_translation', 'id', 'languageId', 'appActionButtonId', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete()),
            (new Association('landingPageTranslations', Association::ONE_TO_MANY, 'landing_page_translation', 'id', 'languageId', 'landingPageId', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete()),
            (new Association('appCmsBlockTranslations', Association::ONE_TO_MANY, 'app_cms_block_translation', 'id', 'languageId', 'appCmsBlockId', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete()),
            (new Association('productSearchConfig', Association::ONE_TO_ONE, 'product_search_config', 'id', 'languageId', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete()),
            (new Field('createdAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Required()),
            (new Field('updatedAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
            (new Association('themeTranslations', Association::ONE_TO_MANY, 'theme_translation', 'id', 'languageId', 'themeId', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete(), new Extension()),
        ];
    }
}
