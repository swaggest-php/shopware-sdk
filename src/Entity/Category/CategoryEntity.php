<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\Category;

use Swaggest\ShopwareSdk\Entity\CategoryTranslation\CategoryTranslationCollection;
use Swaggest\ShopwareSdk\Entity\CmsPage\CmsPageEntity;
use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\MainCategory\MainCategoryCollection;
use Swaggest\ShopwareSdk\Entity\Media\MediaEntity;
use Swaggest\ShopwareSdk\Entity\Product\ProductCollection;
use Swaggest\ShopwareSdk\Entity\ProductStream\ProductStreamEntity;
use Swaggest\ShopwareSdk\Entity\SalesChannel\SalesChannelCollection;
use Swaggest\ShopwareSdk\Entity\SeoUrl\SeoUrlCollection;
use Swaggest\ShopwareSdk\Entity\Tag\TagCollection;

final class CategoryEntity extends Entity
{
    protected ?string $parentId;

    protected ?string $parentVersionId;

    protected ?string $afterCategoryId;

    protected ?string $afterCategoryVersionId;

    protected ?string $mediaId;

    protected bool $displayNestedProducts;

    protected ?int $autoIncrement;

    protected ?array $breadcrumb;

    protected ?int $level;

    protected ?string $path;

    protected ?int $childCount;

    protected string $type;

    protected string $productAssignmentType;

    protected ?bool $visible;

    protected ?bool $active;

    protected string $name;

    protected ?array $customFields;

    protected ?array $slotConfig;

    protected ?string $linkType;

    protected ?string $internalLink;

    protected ?string $externalLink;

    protected ?bool $linkNewTab;

    protected ?string $description;

    protected ?string $metaTitle;

    protected ?string $metaDescription;

    protected ?string $keywords;

    protected ?CategoryEntity $parent;

    protected ?CategoryCollection $children;

    protected ?MediaEntity $media;

    protected ?CategoryTranslationCollection $translations;

    protected ?ProductCollection $products;

    protected ?ProductCollection $nestedProducts;

    protected ?TagCollection $tags;

    protected ?string $cmsPageId;

    protected ?string $cmsPageVersionId;

    protected ?CmsPageEntity $cmsPage;

    protected ?string $productStreamId;

    protected ?ProductStreamEntity $productStream;

    protected ?SalesChannelCollection $navigationSalesChannels;

    protected ?SalesChannelCollection $footerSalesChannels;

    protected ?SalesChannelCollection $serviceSalesChannels;

    protected ?MainCategoryCollection $mainCategories;

    protected ?SeoUrlCollection $seoUrls;

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

    public function getAfterCategoryId(): ?string
    {
        return $this->afterCategoryId;
    }

    public function setAfterCategoryId(?string $afterCategoryId): void
    {
        $this->afterCategoryId = $afterCategoryId;
    }

    public function getAfterCategoryVersionId(): ?string
    {
        return $this->afterCategoryVersionId;
    }

    public function setAfterCategoryVersionId(?string $afterCategoryVersionId): void
    {
        $this->afterCategoryVersionId = $afterCategoryVersionId;
    }

    public function getMediaId(): ?string
    {
        return $this->mediaId;
    }

    public function setMediaId(?string $mediaId): void
    {
        $this->mediaId = $mediaId;
    }

    public function getDisplayNestedProducts(): bool
    {
        return $this->displayNestedProducts;
    }

    public function setDisplayNestedProducts(bool $displayNestedProducts): void
    {
        $this->displayNestedProducts = $displayNestedProducts;
    }

    public function getAutoIncrement(): ?int
    {
        return $this->autoIncrement;
    }

    public function setAutoIncrement(?int $autoIncrement): void
    {
        $this->autoIncrement = $autoIncrement;
    }

    public function getBreadcrumb(): ?array
    {
        return $this->breadcrumb;
    }

    public function setBreadcrumb(?array $breadcrumb): void
    {
        $this->breadcrumb = $breadcrumb;
    }

    public function getLevel(): ?int
    {
        return $this->level;
    }

    public function setLevel(?int $level): void
    {
        $this->level = $level;
    }

    public function getPath(): ?string
    {
        return $this->path;
    }

    public function setPath(?string $path): void
    {
        $this->path = $path;
    }

    public function getChildCount(): ?int
    {
        return $this->childCount;
    }

    public function setChildCount(?int $childCount): void
    {
        $this->childCount = $childCount;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function getProductAssignmentType(): string
    {
        return $this->productAssignmentType;
    }

    public function setProductAssignmentType(string $productAssignmentType): void
    {
        $this->productAssignmentType = $productAssignmentType;
    }

    public function getVisible(): ?bool
    {
        return $this->visible;
    }

    public function setVisible(?bool $visible): void
    {
        $this->visible = $visible;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(?bool $active): void
    {
        $this->active = $active;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
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

    public function getLinkType(): ?string
    {
        return $this->linkType;
    }

    public function setLinkType(?string $linkType): void
    {
        $this->linkType = $linkType;
    }

    public function getInternalLink(): ?string
    {
        return $this->internalLink;
    }

    public function setInternalLink(?string $internalLink): void
    {
        $this->internalLink = $internalLink;
    }

    public function getExternalLink(): ?string
    {
        return $this->externalLink;
    }

    public function setExternalLink(?string $externalLink): void
    {
        $this->externalLink = $externalLink;
    }

    public function getLinkNewTab(): ?bool
    {
        return $this->linkNewTab;
    }

    public function setLinkNewTab(?bool $linkNewTab): void
    {
        $this->linkNewTab = $linkNewTab;
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

    public function getMetaDescription(): ?string
    {
        return $this->metaDescription;
    }

    public function setMetaDescription(?string $metaDescription): void
    {
        $this->metaDescription = $metaDescription;
    }

    public function getKeywords(): ?string
    {
        return $this->keywords;
    }

    public function setKeywords(?string $keywords): void
    {
        $this->keywords = $keywords;
    }

    public function getParent(): ?self
    {
        return $this->parent;
    }

    public function setParent(?self $parent): void
    {
        $this->parent = $parent;
    }

    public function getChildren(): ?CategoryCollection
    {
        return $this->children;
    }

    public function setChildren(?CategoryCollection $children): void
    {
        $this->children = $children;
    }

    public function getMedia(): ?MediaEntity
    {
        return $this->media;
    }

    public function setMedia(?MediaEntity $media): void
    {
        $this->media = $media;
    }

    public function getTranslations(): ?CategoryTranslationCollection
    {
        return $this->translations;
    }

    public function setTranslations(?CategoryTranslationCollection $translations): void
    {
        $this->translations = $translations;
    }

    public function getProducts(): ?ProductCollection
    {
        return $this->products;
    }

    public function setProducts(?ProductCollection $products): void
    {
        $this->products = $products;
    }

    public function getNestedProducts(): ?ProductCollection
    {
        return $this->nestedProducts;
    }

    public function setNestedProducts(?ProductCollection $nestedProducts): void
    {
        $this->nestedProducts = $nestedProducts;
    }

    public function getTags(): ?TagCollection
    {
        return $this->tags;
    }

    public function setTags(?TagCollection $tags): void
    {
        $this->tags = $tags;
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

    public function getCmsPage(): ?CmsPageEntity
    {
        return $this->cmsPage;
    }

    public function setCmsPage(?CmsPageEntity $cmsPage): void
    {
        $this->cmsPage = $cmsPage;
    }

    public function getProductStreamId(): ?string
    {
        return $this->productStreamId;
    }

    public function setProductStreamId(?string $productStreamId): void
    {
        $this->productStreamId = $productStreamId;
    }

    public function getProductStream(): ?ProductStreamEntity
    {
        return $this->productStream;
    }

    public function setProductStream(?ProductStreamEntity $productStream): void
    {
        $this->productStream = $productStream;
    }

    public function getNavigationSalesChannels(): ?SalesChannelCollection
    {
        return $this->navigationSalesChannels;
    }

    public function setNavigationSalesChannels(?SalesChannelCollection $navigationSalesChannels): void
    {
        $this->navigationSalesChannels = $navigationSalesChannels;
    }

    public function getFooterSalesChannels(): ?SalesChannelCollection
    {
        return $this->footerSalesChannels;
    }

    public function setFooterSalesChannels(?SalesChannelCollection $footerSalesChannels): void
    {
        $this->footerSalesChannels = $footerSalesChannels;
    }

    public function getServiceSalesChannels(): ?SalesChannelCollection
    {
        return $this->serviceSalesChannels;
    }

    public function setServiceSalesChannels(?SalesChannelCollection $serviceSalesChannels): void
    {
        $this->serviceSalesChannels = $serviceSalesChannels;
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
}
