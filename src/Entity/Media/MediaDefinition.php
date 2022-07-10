<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\Media;

use Swaggest\ShopwareSdk\Entity\AbstractEntityDefinition;
use Swaggest\ShopwareSdk\Schema\AssociationField;
use Swaggest\ShopwareSdk\Schema\Field;
use Swaggest\ShopwareSdk\Schema\Flag\CascadeDelete;
use Swaggest\ShopwareSdk\Schema\Flag\Computed;
use Swaggest\ShopwareSdk\Schema\Flag\Extension;
use Swaggest\ShopwareSdk\Schema\Flag\PrimaryKey;
use Swaggest\ShopwareSdk\Schema\Flag\ProtectedFlag;
use Swaggest\ShopwareSdk\Schema\Flag\ReadProtected;
use Swaggest\ShopwareSdk\Schema\Flag\Required;
use Swaggest\ShopwareSdk\Schema\Flag\RestrictDelete;
use Swaggest\ShopwareSdk\Schema\Flag\Runtime;
use Swaggest\ShopwareSdk\Schema\Flag\SearchRanking;
use Swaggest\ShopwareSdk\Schema\Flag\SetNullOnDelete;
use Swaggest\ShopwareSdk\Schema\Flag\Translatable;
use Swaggest\ShopwareSdk\Schema\Flag\WriteProtected;

final class MediaDefinition extends AbstractEntityDefinition
{
    public function getEntityName(): string
    {
        return 'media';
    }

    public function getCollectionClass(): string
    {
        return MediaCollection::class;
    }

    public function getEntityClass(): string
    {
        return MediaEntity::class;
    }

    public function defineFields(): array
    {
        return [
            (new Field('id', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new PrimaryKey(), new Required()),
            (new Field('userId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('mediaFolderId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('mimeType', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new WriteProtected([ProtectedFlag::SYSTEM]), new SearchRanking(80.000000)),
            (new Field('fileExtension', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new WriteProtected([ProtectedFlag::SYSTEM])),
            (new Field('uploadedAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new WriteProtected([ProtectedFlag::SYSTEM])),
            (new Field('fileName', 'text'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new WriteProtected([ProtectedFlag::SYSTEM]), new SearchRanking(500.000000)),
            (new Field('fileSize', 'int'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new WriteProtected([ProtectedFlag::SYSTEM])),
            (new Field('mediaTypeRaw', 'blob'))->addFlags(new WriteProtected([ProtectedFlag::SYSTEM])),
            (new Field('metaData', 'json_object'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new WriteProtected([ProtectedFlag::SYSTEM])),
            (new Field('mediaType', 'json_object'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new WriteProtected([]), new Runtime()),
            (new Field('alt', 'text'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new SearchRanking(250.000000), new Translatable()),
            (new Field('title', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new SearchRanking(500.000000), new Translatable()),
            (new Field('url', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Runtime()),
            (new Field('hasFile', 'boolean'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Runtime()),
            (new Field('private', 'boolean'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
            (new Field('customFields', 'json_object'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Translatable()),
            (new Field('thumbnailsRo', 'blob'))->addFlags(new Computed()),
            (new AssociationField('translations', AssociationField::ONE_TO_MANY, 'media_translation', 'id', 'mediaId', 'mediaId', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new CascadeDelete(), new Required()),
            (new AssociationField('tags', AssociationField::MANY_TO_MANY, 'tag', 'id', 'id', null, 'media_tag', 'tagId', 'mediaId'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new SearchRanking(0.250000)),
            (new AssociationField('thumbnails', AssociationField::ONE_TO_MANY, 'media_thumbnail', 'id', 'mediaId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new CascadeDelete()),
            (new AssociationField('user', AssociationField::MANY_TO_ONE, 'user', 'userId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('categories', AssociationField::ONE_TO_MANY, 'category', 'id', 'mediaId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new SetNullOnDelete()),
            (new AssociationField('productManufacturers', AssociationField::ONE_TO_MANY, 'product_manufacturer', 'id', 'mediaId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new SetNullOnDelete()),
            (new AssociationField('productMedia', AssociationField::ONE_TO_MANY, 'product_media', 'id', 'mediaId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete()),
            (new AssociationField('avatarUser', AssociationField::ONE_TO_ONE, 'user', 'id', 'avatarId', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete()),
            (new AssociationField('mediaFolder', AssociationField::MANY_TO_ONE, 'media_folder', 'mediaFolderId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new AssociationField('propertyGroupOptions', AssociationField::ONE_TO_MANY, 'property_group_option', 'id', 'mediaId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new SetNullOnDelete()),
            (new AssociationField('mailTemplateMedia', AssociationField::ONE_TO_MANY, 'mail_template_media', 'id', 'mediaId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete()),
            (new AssociationField('documentBaseConfigs', AssociationField::ONE_TO_MANY, 'document_base_config', 'id', 'logoId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new SetNullOnDelete()),
            (new AssociationField('shippingMethods', AssociationField::ONE_TO_MANY, 'shipping_method', 'id', 'mediaId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new SetNullOnDelete()),
            (new AssociationField('paymentMethods', AssociationField::ONE_TO_MANY, 'payment_method', 'id', 'mediaId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new SetNullOnDelete()),
            (new AssociationField('productConfiguratorSettings', AssociationField::ONE_TO_MANY, 'product_configurator_setting', 'id', 'mediaId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new SetNullOnDelete()),
            (new AssociationField('orderLineItems', AssociationField::ONE_TO_MANY, 'order_line_item', 'id', 'coverId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new SetNullOnDelete()),
            (new AssociationField('cmsBlocks', AssociationField::ONE_TO_MANY, 'cms_block', 'id', 'backgroundMediaId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new RestrictDelete()),
            (new AssociationField('cmsSections', AssociationField::ONE_TO_MANY, 'cms_section', 'id', 'backgroundMediaId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new RestrictDelete()),
            (new AssociationField('cmsPages', AssociationField::ONE_TO_MANY, 'cms_page', 'id', 'previewMediaId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new RestrictDelete()),
            (new AssociationField('documents', AssociationField::ONE_TO_MANY, 'document', 'id', 'documentMediaFileId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new RestrictDelete()),
            (new AssociationField('appPaymentMethods', AssociationField::ONE_TO_MANY, 'app_payment_method', 'id', 'originalMediaId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new SetNullOnDelete()),
            (new Field('createdAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Required()),
            (new Field('updatedAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
            (new AssociationField('themes', AssociationField::ONE_TO_MANY, 'theme', 'id', 'previewMediaId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Extension()),
            (new AssociationField('themeMedia', AssociationField::MANY_TO_MANY, 'theme', 'id', 'id', null, 'theme_media', 'themeId', 'mediaId'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Extension()),
            (new Field('translated', 'json_object'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Computed(), new Runtime()),
        ];
    }
}
