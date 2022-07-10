<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\Product;

use Swaggest\ShopwareSdk\Entity\Category\CategoryCollection;
use Swaggest\ShopwareSdk\Entity\CmsPage\CmsPageEntity;
use Swaggest\ShopwareSdk\Entity\CustomerWishlistProduct\CustomerWishlistProductCollection;
use Swaggest\ShopwareSdk\Entity\CustomFieldSet\CustomFieldSetCollection;
use Swaggest\ShopwareSdk\Entity\DeliveryTime\DeliveryTimeEntity;
use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\MainCategory\MainCategoryCollection;
use Swaggest\ShopwareSdk\Entity\OrderLineItem\OrderLineItemCollection;
use Swaggest\ShopwareSdk\Entity\ProductConfiguratorSetting\ProductConfiguratorSettingCollection;
use Swaggest\ShopwareSdk\Entity\ProductCrossSelling\ProductCrossSellingCollection;
use Swaggest\ShopwareSdk\Entity\ProductCrossSellingAssignedProducts\ProductCrossSellingAssignedProductsCollection;
use Swaggest\ShopwareSdk\Entity\ProductFeatureSet\ProductFeatureSetEntity;
use Swaggest\ShopwareSdk\Entity\ProductManufacturer\ProductManufacturerEntity;
use Swaggest\ShopwareSdk\Entity\ProductMedia\ProductMediaCollection;
use Swaggest\ShopwareSdk\Entity\ProductMedia\ProductMediaEntity;
use Swaggest\ShopwareSdk\Entity\ProductPrice\ProductPriceCollection;
use Swaggest\ShopwareSdk\Entity\ProductReview\ProductReviewCollection;
use Swaggest\ShopwareSdk\Entity\ProductSearchKeyword\ProductSearchKeywordCollection;
use Swaggest\ShopwareSdk\Entity\ProductStream\ProductStreamCollection;
use Swaggest\ShopwareSdk\Entity\ProductTranslation\ProductTranslationCollection;
use Swaggest\ShopwareSdk\Entity\ProductVisibility\ProductVisibilityCollection;
use Swaggest\ShopwareSdk\Entity\PropertyGroupOption\PropertyGroupOptionCollection;
use Swaggest\ShopwareSdk\Entity\SeoUrl\SeoUrlCollection;
use Swaggest\ShopwareSdk\Entity\Tag\TagCollection;
use Swaggest\ShopwareSdk\Entity\Tax\TaxEntity;
use Swaggest\ShopwareSdk\Entity\Unit\UnitEntity;

final class ProductEntity extends Entity
{
    use EntityIdTrait;

    protected ?string $parentId;

    protected ?string $parentVersionId;

    protected ?string $manufacturerId;

    protected ?string $productManufacturerVersionId;

    protected ?string $unitId;

    protected string $taxId;

    protected ?string $coverId;

    protected ?string $productMediaVersionId;

    protected ?string $deliveryTimeId;

    protected ?string $featureSetId;

    protected ?string $canonicalProductId;

    protected ?string $cmsPageId;

    protected ?string $cmsPageVersionId;

    protected array $price;

    protected string $productNumber;

    protected int $stock;

    protected ?int $restockTime;

    protected ?int $autoIncrement;

    protected ?bool $active;

    protected ?int $availableStock;

    protected ?bool $available;

    protected ?bool $isCloseout;

    protected ?array $variation;

    protected ?string $displayGroup;

    protected ?array $configuratorGroupConfig;

    protected ?string $mainVariantId;

    protected ?array $variantRestrictions;

    protected ?string $manufacturerNumber;

    protected ?string $ean;

    protected ?int $purchaseSteps;

    protected ?int $maxPurchase;

    protected ?int $minPurchase;

    protected ?float $purchaseUnit;

    protected ?float $referenceUnit;

    protected ?bool $shippingFree;

    protected ?array $purchasePrices;

    protected ?bool $markAsTopseller;

    protected ?float $weight;

    protected ?float $width;

    protected ?float $height;

    protected ?float $length;

    protected ?\DateTimeInterface $releaseDate;

    protected ?float $ratingAverage;

    protected ?array $categoryTree;

    protected ?array $propertyIds;

    protected ?array $optionIds;

    protected ?array $streamIds;

    protected ?array $tagIds;

    protected ?array $categoryIds;

    protected ?int $childCount;

    protected ?bool $customFieldSetSelectionActive;

    protected ?int $sales;

    protected ?string $metaDescription;

    protected string $name;

    protected ?string $keywords;

    protected ?string $description;

    protected ?string $metaTitle;

    protected ?string $packUnit;

    protected ?string $packUnitPlural;

    protected ?array $customFields;

    protected ?array $slotConfig;

    protected ?array $customSearchKeywords;

    protected ?ProductEntity $parent;

    protected ?ProductCollection $children;

    protected ?DeliveryTimeEntity $deliveryTime;

    protected ?TaxEntity $tax;

    protected ?ProductManufacturerEntity $manufacturer;

    protected ?UnitEntity $unit;

    protected ?ProductMediaEntity $cover;

    protected ?ProductFeatureSetEntity $featureSet;

    protected ?CmsPageEntity $cmsPage;

    protected ?ProductEntity $canonicalProduct;

    protected ?ProductPriceCollection $prices;

    protected ?ProductMediaCollection $media;

    protected ?ProductCrossSellingCollection $crossSellings;

    protected ?ProductCrossSellingAssignedProductsCollection $crossSellingAssignedProducts;

    protected ?ProductConfiguratorSettingCollection $configuratorSettings;

    protected ?ProductVisibilityCollection $visibilities;

    protected ?ProductSearchKeywordCollection $searchKeywords;

    protected ?ProductReviewCollection $productReviews;

    protected ?MainCategoryCollection $mainCategories;

    protected ?SeoUrlCollection $seoUrls;

    protected ?OrderLineItemCollection $orderLineItems;

    protected ?CustomerWishlistProductCollection $wishlists;

    protected ?PropertyGroupOptionCollection $options;

    protected ?PropertyGroupOptionCollection $properties;

    protected ?CategoryCollection $categories;

    protected ?ProductStreamCollection $streams;

    protected ?CategoryCollection $categoriesRo;

    protected ?TagCollection $tags;

    protected ?CustomFieldSetCollection $customFieldSets;

    protected ?ProductTranslationCollection $translations;

    protected ?array $cheapestPrice;

    public function getParentId(): ?string
    {
        return $this->parentId;
    }

    public function setParentId(?string $parentId): void
    {
        $this->parentId = $parentId;
    }

    public function getParentVersionId(): ?string
    {
        return $this->parentVersionId;
    }

    public function setParentVersionId(?string $parentVersionId): void
    {
        $this->parentVersionId = $parentVersionId;
    }

    public function getManufacturerId(): ?string
    {
        return $this->manufacturerId;
    }

    public function setManufacturerId(?string $manufacturerId): void
    {
        $this->manufacturerId = $manufacturerId;
    }

    public function getProductManufacturerVersionId(): ?string
    {
        return $this->productManufacturerVersionId;
    }

    public function setProductManufacturerVersionId(?string $productManufacturerVersionId): void
    {
        $this->productManufacturerVersionId = $productManufacturerVersionId;
    }

    public function getUnitId(): ?string
    {
        return $this->unitId;
    }

    public function setUnitId(?string $unitId): void
    {
        $this->unitId = $unitId;
    }

    public function getTaxId(): string
    {
        return $this->taxId;
    }

    public function setTaxId(string $taxId): void
    {
        $this->taxId = $taxId;
    }

    public function getCoverId(): ?string
    {
        return $this->coverId;
    }

    public function setCoverId(?string $coverId): void
    {
        $this->coverId = $coverId;
    }

    public function getProductMediaVersionId(): ?string
    {
        return $this->productMediaVersionId;
    }

    public function setProductMediaVersionId(?string $productMediaVersionId): void
    {
        $this->productMediaVersionId = $productMediaVersionId;
    }

    public function getDeliveryTimeId(): ?string
    {
        return $this->deliveryTimeId;
    }

    public function setDeliveryTimeId(?string $deliveryTimeId): void
    {
        $this->deliveryTimeId = $deliveryTimeId;
    }

    public function getFeatureSetId(): ?string
    {
        return $this->featureSetId;
    }

    public function setFeatureSetId(?string $featureSetId): void
    {
        $this->featureSetId = $featureSetId;
    }

    public function getCanonicalProductId(): ?string
    {
        return $this->canonicalProductId;
    }

    public function setCanonicalProductId(?string $canonicalProductId): void
    {
        $this->canonicalProductId = $canonicalProductId;
    }

    public function getCmsPageId(): ?string
    {
        return $this->cmsPageId;
    }

    public function setCmsPageId(?string $cmsPageId): void
    {
        $this->cmsPageId = $cmsPageId;
    }

    public function getCmsPageVersionId(): ?string
    {
        return $this->cmsPageVersionId;
    }

    public function setCmsPageVersionId(?string $cmsPageVersionId): void
    {
        $this->cmsPageVersionId = $cmsPageVersionId;
    }

    public function getPrice(): array
    {
        return $this->price;
    }

    public function setPrice(array $price): void
    {
        $this->price = $price;
    }

    public function getProductNumber(): string
    {
        return $this->productNumber;
    }

    public function setProductNumber(string $productNumber): void
    {
        $this->productNumber = $productNumber;
    }

    public function getStock(): int
    {
        return $this->stock;
    }

    public function setStock(int $stock): void
    {
        $this->stock = $stock;
    }

    public function getRestockTime(): ?int
    {
        return $this->restockTime;
    }

    public function setRestockTime(?int $restockTime): void
    {
        $this->restockTime = $restockTime;
    }

    public function getAutoIncrement(): ?int
    {
        return $this->autoIncrement;
    }

    public function setAutoIncrement(?int $autoIncrement): void
    {
        $this->autoIncrement = $autoIncrement;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(?bool $active): void
    {
        $this->active = $active;
    }

    public function getAvailableStock(): ?int
    {
        return $this->availableStock;
    }

    public function setAvailableStock(?int $availableStock): void
    {
        $this->availableStock = $availableStock;
    }

    public function getAvailable(): ?bool
    {
        return $this->available;
    }

    public function setAvailable(?bool $available): void
    {
        $this->available = $available;
    }

    public function getIsCloseout(): ?bool
    {
        return $this->isCloseout;
    }

    public function setIsCloseout(?bool $isCloseout): void
    {
        $this->isCloseout = $isCloseout;
    }

    public function getVariation(): ?array
    {
        return $this->variation;
    }

    public function setVariation(?array $variation): void
    {
        $this->variation = $variation;
    }

    public function getDisplayGroup(): ?string
    {
        return $this->displayGroup;
    }

    public function setDisplayGroup(?string $displayGroup): void
    {
        $this->displayGroup = $displayGroup;
    }

    public function getConfiguratorGroupConfig(): ?array
    {
        return $this->configuratorGroupConfig;
    }

    public function setConfiguratorGroupConfig(?array $configuratorGroupConfig): void
    {
        $this->configuratorGroupConfig = $configuratorGroupConfig;
    }

    public function getMainVariantId(): ?string
    {
        return $this->mainVariantId;
    }

    public function setMainVariantId(?string $mainVariantId): void
    {
        $this->mainVariantId = $mainVariantId;
    }

    public function getVariantRestrictions(): ?array
    {
        return $this->variantRestrictions;
    }

    public function setVariantRestrictions(?array $variantRestrictions): void
    {
        $this->variantRestrictions = $variantRestrictions;
    }

    public function getManufacturerNumber(): ?string
    {
        return $this->manufacturerNumber;
    }

    public function setManufacturerNumber(?string $manufacturerNumber): void
    {
        $this->manufacturerNumber = $manufacturerNumber;
    }

    public function getEan(): ?string
    {
        return $this->ean;
    }

    public function setEan(?string $ean): void
    {
        $this->ean = $ean;
    }

    public function getPurchaseSteps(): ?int
    {
        return $this->purchaseSteps;
    }

    public function setPurchaseSteps(?int $purchaseSteps): void
    {
        $this->purchaseSteps = $purchaseSteps;
    }

    public function getMaxPurchase(): ?int
    {
        return $this->maxPurchase;
    }

    public function setMaxPurchase(?int $maxPurchase): void
    {
        $this->maxPurchase = $maxPurchase;
    }

    public function getMinPurchase(): ?int
    {
        return $this->minPurchase;
    }

    public function setMinPurchase(?int $minPurchase): void
    {
        $this->minPurchase = $minPurchase;
    }

    public function getPurchaseUnit(): ?float
    {
        return $this->purchaseUnit;
    }

    public function setPurchaseUnit(?float $purchaseUnit): void
    {
        $this->purchaseUnit = $purchaseUnit;
    }

    public function getReferenceUnit(): ?float
    {
        return $this->referenceUnit;
    }

    public function setReferenceUnit(?float $referenceUnit): void
    {
        $this->referenceUnit = $referenceUnit;
    }

    public function getShippingFree(): ?bool
    {
        return $this->shippingFree;
    }

    public function setShippingFree(?bool $shippingFree): void
    {
        $this->shippingFree = $shippingFree;
    }

    public function getPurchasePrices(): ?array
    {
        return $this->purchasePrices;
    }

    public function setPurchasePrices(?array $purchasePrices): void
    {
        $this->purchasePrices = $purchasePrices;
    }

    public function getMarkAsTopseller(): ?bool
    {
        return $this->markAsTopseller;
    }

    public function setMarkAsTopseller(?bool $markAsTopseller): void
    {
        $this->markAsTopseller = $markAsTopseller;
    }

    public function getWeight(): ?float
    {
        return $this->weight;
    }

    public function setWeight(?float $weight): void
    {
        $this->weight = $weight;
    }

    public function getWidth(): ?float
    {
        return $this->width;
    }

    public function setWidth(?float $width): void
    {
        $this->width = $width;
    }

    public function getHeight(): ?float
    {
        return $this->height;
    }

    public function setHeight(?float $height): void
    {
        $this->height = $height;
    }

    public function getLength(): ?float
    {
        return $this->length;
    }

    public function setLength(?float $length): void
    {
        $this->length = $length;
    }

    public function getReleaseDate(): ?\DateTimeInterface
    {
        return $this->releaseDate;
    }

    public function setReleaseDate(?\DateTimeInterface $releaseDate): void
    {
        $this->releaseDate = $releaseDate;
    }

    public function getRatingAverage(): ?float
    {
        return $this->ratingAverage;
    }

    public function setRatingAverage(?float $ratingAverage): void
    {
        $this->ratingAverage = $ratingAverage;
    }

    public function getCategoryTree(): ?array
    {
        return $this->categoryTree;
    }

    public function setCategoryTree(?array $categoryTree): void
    {
        $this->categoryTree = $categoryTree;
    }

    public function getPropertyIds(): ?array
    {
        return $this->propertyIds;
    }

    public function setPropertyIds(?array $propertyIds): void
    {
        $this->propertyIds = $propertyIds;
    }

    public function getOptionIds(): ?array
    {
        return $this->optionIds;
    }

    public function setOptionIds(?array $optionIds): void
    {
        $this->optionIds = $optionIds;
    }

    public function getStreamIds(): ?array
    {
        return $this->streamIds;
    }

    public function setStreamIds(?array $streamIds): void
    {
        $this->streamIds = $streamIds;
    }

    public function getTagIds(): ?array
    {
        return $this->tagIds;
    }

    public function setTagIds(?array $tagIds): void
    {
        $this->tagIds = $tagIds;
    }

    public function getCategoryIds(): ?array
    {
        return $this->categoryIds;
    }

    public function setCategoryIds(?array $categoryIds): void
    {
        $this->categoryIds = $categoryIds;
    }

    public function getChildCount(): ?int
    {
        return $this->childCount;
    }

    public function setChildCount(?int $childCount): void
    {
        $this->childCount = $childCount;
    }

    public function getCustomFieldSetSelectionActive(): ?bool
    {
        return $this->customFieldSetSelectionActive;
    }

    public function setCustomFieldSetSelectionActive(?bool $customFieldSetSelectionActive): void
    {
        $this->customFieldSetSelectionActive = $customFieldSetSelectionActive;
    }

    public function getSales(): ?int
    {
        return $this->sales;
    }

    public function setSales(?int $sales): void
    {
        $this->sales = $sales;
    }

    public function getMetaDescription(): ?string
    {
        return $this->metaDescription;
    }

    public function setMetaDescription(?string $metaDescription): void
    {
        $this->metaDescription = $metaDescription;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getKeywords(): ?string
    {
        return $this->keywords;
    }

    public function setKeywords(?string $keywords): void
    {
        $this->keywords = $keywords;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    public function getMetaTitle(): ?string
    {
        return $this->metaTitle;
    }

    public function setMetaTitle(?string $metaTitle): void
    {
        $this->metaTitle = $metaTitle;
    }

    public function getPackUnit(): ?string
    {
        return $this->packUnit;
    }

    public function setPackUnit(?string $packUnit): void
    {
        $this->packUnit = $packUnit;
    }

    public function getPackUnitPlural(): ?string
    {
        return $this->packUnitPlural;
    }

    public function setPackUnitPlural(?string $packUnitPlural): void
    {
        $this->packUnitPlural = $packUnitPlural;
    }

    public function getCustomFields(): ?array
    {
        return $this->customFields;
    }

    public function setCustomFields(?array $customFields): void
    {
        $this->customFields = $customFields;
    }

    public function getSlotConfig(): ?array
    {
        return $this->slotConfig;
    }

    public function setSlotConfig(?array $slotConfig): void
    {
        $this->slotConfig = $slotConfig;
    }

    public function getCustomSearchKeywords(): ?array
    {
        return $this->customSearchKeywords;
    }

    public function setCustomSearchKeywords(?array $customSearchKeywords): void
    {
        $this->customSearchKeywords = $customSearchKeywords;
    }

    public function getParent(): ?self
    {
        return $this->parent;
    }

    public function setParent(?self $parent): void
    {
        $this->parent = $parent;
    }

    public function getChildren(): ?ProductCollection
    {
        return $this->children;
    }

    public function setChildren(?ProductCollection $children): void
    {
        $this->children = $children;
    }

    public function getDeliveryTime(): ?DeliveryTimeEntity
    {
        return $this->deliveryTime;
    }

    public function setDeliveryTime(?DeliveryTimeEntity $deliveryTime): void
    {
        $this->deliveryTime = $deliveryTime;
    }

    public function getTax(): ?TaxEntity
    {
        return $this->tax;
    }

    public function setTax(?TaxEntity $tax): void
    {
        $this->tax = $tax;
    }

    public function getManufacturer(): ?ProductManufacturerEntity
    {
        return $this->manufacturer;
    }

    public function setManufacturer(?ProductManufacturerEntity $manufacturer): void
    {
        $this->manufacturer = $manufacturer;
    }

    public function getUnit(): ?UnitEntity
    {
        return $this->unit;
    }

    public function setUnit(?UnitEntity $unit): void
    {
        $this->unit = $unit;
    }

    public function getCover(): ?ProductMediaEntity
    {
        return $this->cover;
    }

    public function setCover(?ProductMediaEntity $cover): void
    {
        $this->cover = $cover;
    }

    public function getFeatureSet(): ?ProductFeatureSetEntity
    {
        return $this->featureSet;
    }

    public function setFeatureSet(?ProductFeatureSetEntity $featureSet): void
    {
        $this->featureSet = $featureSet;
    }

    public function getCmsPage(): ?CmsPageEntity
    {
        return $this->cmsPage;
    }

    public function setCmsPage(?CmsPageEntity $cmsPage): void
    {
        $this->cmsPage = $cmsPage;
    }

    public function getCanonicalProduct(): ?self
    {
        return $this->canonicalProduct;
    }

    public function setCanonicalProduct(?self $canonicalProduct): void
    {
        $this->canonicalProduct = $canonicalProduct;
    }

    public function getPrices(): ?ProductPriceCollection
    {
        return $this->prices;
    }

    public function setPrices(?ProductPriceCollection $prices): void
    {
        $this->prices = $prices;
    }

    public function getMedia(): ?ProductMediaCollection
    {
        return $this->media;
    }

    public function setMedia(?ProductMediaCollection $media): void
    {
        $this->media = $media;
    }

    public function getCrossSellings(): ?ProductCrossSellingCollection
    {
        return $this->crossSellings;
    }

    public function setCrossSellings(?ProductCrossSellingCollection $crossSellings): void
    {
        $this->crossSellings = $crossSellings;
    }

    public function getCrossSellingAssignedProducts(): ?ProductCrossSellingAssignedProductsCollection
    {
        return $this->crossSellingAssignedProducts;
    }

    public function setCrossSellingAssignedProducts(?ProductCrossSellingAssignedProductsCollection $crossSellingAssignedProducts): void
    {
        $this->crossSellingAssignedProducts = $crossSellingAssignedProducts;
    }

    public function getConfiguratorSettings(): ?ProductConfiguratorSettingCollection
    {
        return $this->configuratorSettings;
    }

    public function setConfiguratorSettings(?ProductConfiguratorSettingCollection $configuratorSettings): void
    {
        $this->configuratorSettings = $configuratorSettings;
    }

    public function getVisibilities(): ?ProductVisibilityCollection
    {
        return $this->visibilities;
    }

    public function setVisibilities(?ProductVisibilityCollection $visibilities): void
    {
        $this->visibilities = $visibilities;
    }

    public function getSearchKeywords(): ?ProductSearchKeywordCollection
    {
        return $this->searchKeywords;
    }

    public function setSearchKeywords(?ProductSearchKeywordCollection $searchKeywords): void
    {
        $this->searchKeywords = $searchKeywords;
    }

    public function getProductReviews(): ?ProductReviewCollection
    {
        return $this->productReviews;
    }

    public function setProductReviews(?ProductReviewCollection $productReviews): void
    {
        $this->productReviews = $productReviews;
    }

    public function getMainCategories(): ?MainCategoryCollection
    {
        return $this->mainCategories;
    }

    public function setMainCategories(?MainCategoryCollection $mainCategories): void
    {
        $this->mainCategories = $mainCategories;
    }

    public function getSeoUrls(): ?SeoUrlCollection
    {
        return $this->seoUrls;
    }

    public function setSeoUrls(?SeoUrlCollection $seoUrls): void
    {
        $this->seoUrls = $seoUrls;
    }

    public function getOrderLineItems(): ?OrderLineItemCollection
    {
        return $this->orderLineItems;
    }

    public function setOrderLineItems(?OrderLineItemCollection $orderLineItems): void
    {
        $this->orderLineItems = $orderLineItems;
    }

    public function getWishlists(): ?CustomerWishlistProductCollection
    {
        return $this->wishlists;
    }

    public function setWishlists(?CustomerWishlistProductCollection $wishlists): void
    {
        $this->wishlists = $wishlists;
    }

    public function getOptions(): ?PropertyGroupOptionCollection
    {
        return $this->options;
    }

    public function setOptions(?PropertyGroupOptionCollection $options): void
    {
        $this->options = $options;
    }

    public function getProperties(): ?PropertyGroupOptionCollection
    {
        return $this->properties;
    }

    public function setProperties(?PropertyGroupOptionCollection $properties): void
    {
        $this->properties = $properties;
    }

    public function getCategories(): ?CategoryCollection
    {
        return $this->categories;
    }

    public function setCategories(?CategoryCollection $categories): void
    {
        $this->categories = $categories;
    }

    public function getStreams(): ?ProductStreamCollection
    {
        return $this->streams;
    }

    public function setStreams(?ProductStreamCollection $streams): void
    {
        $this->streams = $streams;
    }

    public function getCategoriesRo(): ?CategoryCollection
    {
        return $this->categoriesRo;
    }

    public function setCategoriesRo(?CategoryCollection $categoriesRo): void
    {
        $this->categoriesRo = $categoriesRo;
    }

    public function getTags(): ?TagCollection
    {
        return $this->tags;
    }

    public function setTags(?TagCollection $tags): void
    {
        $this->tags = $tags;
    }

    public function getCustomFieldSets(): ?CustomFieldSetCollection
    {
        return $this->customFieldSets;
    }

    public function setCustomFieldSets(?CustomFieldSetCollection $customFieldSets): void
    {
        $this->customFieldSets = $customFieldSets;
    }

    public function getTranslations(): ?ProductTranslationCollection
    {
        return $this->translations;
    }

    public function setTranslations(?ProductTranslationCollection $translations): void
    {
        $this->translations = $translations;
    }

    public function getCheapestPrice(): ?array
    {
        return $this->cheapestPrice;
    }

    public function setCheapestPrice(?array $cheapestPrice): void
    {
        $this->cheapestPrice = $cheapestPrice;
    }
}
