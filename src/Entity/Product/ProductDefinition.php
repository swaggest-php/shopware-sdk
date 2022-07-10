<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\Product;

use Swaggest\ShopwareSdk\Entity\AbstractEntityDefinition;
use Swaggest\ShopwareSdk\Schema\AssociationField;
use Swaggest\ShopwareSdk\Schema\Field;
use Swaggest\ShopwareSdk\Schema\Flag\AllowHtml;
use Swaggest\ShopwareSdk\Schema\Flag\CascadeDelete;
use Swaggest\ShopwareSdk\Schema\Flag\Computed;
use Swaggest\ShopwareSdk\Schema\Flag\Inherited;
use Swaggest\ShopwareSdk\Schema\Flag\PrimaryKey;
use Swaggest\ShopwareSdk\Schema\Flag\ProtectedFlag;
use Swaggest\ShopwareSdk\Schema\Flag\ReadProtected;
use Swaggest\ShopwareSdk\Schema\Flag\Required;
use Swaggest\ShopwareSdk\Schema\Flag\Runtime;
use Swaggest\ShopwareSdk\Schema\Flag\SearchRanking;
use Swaggest\ShopwareSdk\Schema\Flag\SetNullOnDelete;
use Swaggest\ShopwareSdk\Schema\Flag\Translatable;
use Swaggest\ShopwareSdk\Schema\Flag\WriteProtected;

final class ProductDefinition extends AbstractEntityDefinition
{
    public function getEntityName(): string
    {
        return 'product';
    }

    public function getCollectionClass(): string
    {
        return ProductCollection::class;
    }

    public function getEntityClass(): string
    {
        return ProductEntity::class;
    }

    public function defineFields(): array
    {
        return [
            (new Field('id', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new PrimaryKey(), new Required()),
            (new Field('versionId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new PrimaryKey(), new Required()),
            (new Field('parentId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
            (new Field('parentVersionId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Required()),
            (new Field('manufacturerId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Inherited()),
            (new Field('productManufacturerVersionId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Inherited(), new Required()),
            (new Field('unitId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Inherited()),
            (new Field('taxId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Inherited(), new Required()),
            (new Field('coverId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Inherited()),
            (new Field('productMediaVersionId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Inherited()),
            (new Field('deliveryTimeId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Inherited()),
            (new Field('featureSetId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Inherited()),
            (new Field('canonicalProductId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Inherited()),
            (new Field('cmsPageId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Inherited()),
            (new Field('cmsPageVersionId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Inherited(), new Required()),
            (new Field('price', 'json_object'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Inherited(), new Required()),
            (new Field('productNumber', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new SearchRanking(500.000000), new Required()),
            (new Field('stock', 'int'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Required()),
            (new Field('restockTime', 'int'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Inherited()),
            (new Field('autoIncrement', 'int'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new WriteProtected([])),
            (new Field('active', 'boolean'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Inherited()),
            (new Field('availableStock', 'int'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new WriteProtected([])),
            (new Field('available', 'boolean'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new WriteProtected([])),
            (new Field('isCloseout', 'boolean'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Inherited()),
            (new Field('variation', 'json_list'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Runtime()),
            (new Field('displayGroup', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new WriteProtected([])),
            (new Field('configuratorGroupConfig', 'json_object'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Inherited()),
            (new Field('mainVariantId', 'uuid'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Inherited()),
            (new Field('variantRestrictions', 'json_object'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API])),
            (new Field('manufacturerNumber', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Inherited(), new SearchRanking(250.000000)),
            (new Field('ean', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Inherited(), new SearchRanking(250.000000)),
            (new Field('purchaseSteps', 'int'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Inherited()),
            (new Field('maxPurchase', 'int'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Inherited()),
            (new Field('minPurchase', 'int'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Inherited()),
            (new Field('purchaseUnit', 'float'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Inherited()),
            (new Field('referenceUnit', 'float'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Inherited()),
            (new Field('shippingFree', 'boolean'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Inherited()),
            (new Field('purchasePrices', 'json_object'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Inherited()),
            (new Field('markAsTopseller', 'boolean'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Inherited()),
            (new Field('weight', 'float'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Inherited()),
            (new Field('width', 'float'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Inherited()),
            (new Field('height', 'float'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Inherited()),
            (new Field('length', 'float'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Inherited()),
            (new Field('releaseDate', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Inherited()),
            (new Field('ratingAverage', 'float'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new WriteProtected([]), new Inherited()),
            (new Field('categoryTree', 'json_list'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Inherited(), new WriteProtected([])),
            (new Field('propertyIds', 'json_list'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new WriteProtected([]), new Inherited()),
            (new Field('optionIds', 'json_list'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new WriteProtected([]), new Inherited()),
            (new Field('streamIds', 'json_list'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new WriteProtected([]), new Inherited()),
            (new Field('tagIds', 'json_list'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new WriteProtected([]), new Inherited()),
            (new Field('categoryIds', 'json_list'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new WriteProtected([]), new Inherited()),
            (new Field('childCount', 'int'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new WriteProtected([])),
            (new Field('customFieldSetSelectionActive', 'boolean'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Inherited()),
            (new Field('sales', 'int'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new WriteProtected([])),
            (new Field('metaDescription', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Inherited(), new Translatable()),
            (new Field('name', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Required(), new Inherited(), new SearchRanking(500.000000), new Translatable()),
            (new Field('keywords', 'text'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Inherited(), new Translatable()),
            (new Field('description', 'text'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new AllowHtml(), new Inherited(), new Translatable()),
            (new Field('metaTitle', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Inherited(), new Translatable()),
            (new Field('packUnit', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Inherited(), new Translatable()),
            (new Field('packUnitPlural', 'string'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Inherited(), new Translatable()),
            (new Field('customFields', 'json_object'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Inherited(), new Translatable()),
            (new Field('slotConfig', 'json_object'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Inherited(), new Translatable()),
            (new Field('customSearchKeywords', 'json_list'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Inherited(), new SearchRanking(500.000000), new Translatable()),
            (new AssociationField('parent', AssociationField::MANY_TO_ONE, 'product', 'parentId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
            (new AssociationField('children', AssociationField::ONE_TO_MANY, 'product', 'id', 'parentId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new CascadeDelete()),
            (new AssociationField('deliveryTime', AssociationField::MANY_TO_ONE, 'delivery_time', 'deliveryTimeId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Inherited()),
            (new AssociationField('tax', AssociationField::MANY_TO_ONE, 'tax', 'taxId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Inherited()),
            (new AssociationField('manufacturer', AssociationField::MANY_TO_ONE, 'product_manufacturer', 'manufacturerId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Inherited()),
            (new AssociationField('unit', AssociationField::MANY_TO_ONE, 'unit', 'unitId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Inherited()),
            (new AssociationField('cover', AssociationField::MANY_TO_ONE, 'product_media', 'coverId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Inherited()),
            (new AssociationField('featureSet', AssociationField::MANY_TO_ONE, 'product_feature_set', 'featureSetId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new Inherited()),
            (new AssociationField('cmsPage', AssociationField::MANY_TO_ONE, 'cms_page', 'cmsPageId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Inherited()),
            (new AssociationField('canonicalProduct', AssociationField::MANY_TO_ONE, 'product', 'canonicalProductId', 'id', null, null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Inherited()),
            (new AssociationField('prices', AssociationField::ONE_TO_MANY, 'product_price', 'id', 'productId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete(), new Inherited()),
            (new AssociationField('media', AssociationField::ONE_TO_MANY, 'product_media', 'id', 'productId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new CascadeDelete(), new Inherited()),
            (new AssociationField('crossSellings', AssociationField::ONE_TO_MANY, 'product_cross_selling', 'id', 'productId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new CascadeDelete(), new Inherited()),
            (new AssociationField('crossSellingAssignedProducts', AssociationField::ONE_TO_MANY, 'product_cross_selling_assigned_products', 'id', 'productId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete()),
            (new AssociationField('configuratorSettings', AssociationField::ONE_TO_MANY, 'product_configurator_setting', 'id', 'productId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new CascadeDelete()),
            (new AssociationField('visibilities', AssociationField::ONE_TO_MANY, 'product_visibility', 'id', 'productId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete(), new Inherited()),
            (new AssociationField('searchKeywords', AssociationField::ONE_TO_MANY, 'product_search_keyword', 'id', 'productId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete()),
            (new AssociationField('productReviews', AssociationField::ONE_TO_MANY, 'product_review', 'id', 'productId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new CascadeDelete()),
            (new AssociationField('mainCategories', AssociationField::ONE_TO_MANY, 'main_category', 'id', 'productId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new CascadeDelete()),
            (new AssociationField('seoUrls', AssociationField::ONE_TO_MANY, 'seo_url', 'id', 'foreignKey', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
            (new AssociationField('orderLineItems', AssociationField::ONE_TO_MANY, 'order_line_item', 'id', 'productId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new SetNullOnDelete()),
            (new AssociationField('wishlists', AssociationField::ONE_TO_MANY, 'customer_wishlist_product', 'id', 'productId', 'id', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete()),
            (new AssociationField('options', AssociationField::MANY_TO_MANY, 'property_group_option', 'id', 'id', null, 'product_option', 'optionId', 'productId'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new CascadeDelete()),
            (new AssociationField('properties', AssociationField::MANY_TO_MANY, 'property_group_option', 'id', 'id', null, 'product_property', 'optionId', 'productId'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new CascadeDelete(), new Inherited()),
            (new AssociationField('categories', AssociationField::MANY_TO_MANY, 'category', 'id', 'id', null, 'product_category', 'categoryId', 'productId'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new CascadeDelete(), new Inherited(), new SearchRanking(0.250000)),
            (new AssociationField('streams', AssociationField::MANY_TO_MANY, 'product_stream', 'id', 'id', null, 'product_stream_mapping', 'productStreamId', 'productId'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new CascadeDelete()),
            (new AssociationField('categoriesRo', AssociationField::MANY_TO_MANY, 'category', 'id', 'id', null, 'product_category_tree', 'categoryId', 'productId'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new CascadeDelete(), new WriteProtected([])),
            (new AssociationField('tags', AssociationField::MANY_TO_MANY, 'tag', 'id', 'id', null, 'product_tag', 'tagId', 'productId'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete(), new Inherited(), new SearchRanking(0.250000)),
            (new AssociationField('customFieldSets', AssociationField::MANY_TO_MANY, 'custom_field_set', 'id', 'id', null, 'product_custom_field_set', 'customFieldSetId', 'productId'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new CascadeDelete(), new Inherited()),
            (new AssociationField('translations', AssociationField::ONE_TO_MANY, 'product_translation', 'id', 'productId', 'productId', null, null, null))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new CascadeDelete(), new Inherited(), new Required()),
            (new Field('cheapestPrice', 'json_object'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API]), new WriteProtected([]), new Inherited()),
            (new Field('createdAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Required()),
            (new Field('updatedAt', 'date'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API])),
            (new Field('translated', 'json_object'))->addFlags(new ReadProtected([ProtectedFlag::ADMIN_API, ProtectedFlag::SALES_CHANNEL_API]), new Computed(), new Runtime()),
        ];
    }
}
