<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\Media;

use Swaggest\ShopwareSdk\Entity\AppPaymentMethod\AppPaymentMethodCollection;
use Swaggest\ShopwareSdk\Entity\Category\CategoryCollection;
use Swaggest\ShopwareSdk\Entity\CmsBlock\CmsBlockCollection;
use Swaggest\ShopwareSdk\Entity\CmsPage\CmsPageCollection;
use Swaggest\ShopwareSdk\Entity\CmsSection\CmsSectionCollection;
use Swaggest\ShopwareSdk\Entity\Document\DocumentCollection;
use Swaggest\ShopwareSdk\Entity\DocumentBaseConfig\DocumentBaseConfigCollection;
use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\MailTemplateMedia\MailTemplateMediaCollection;
use Swaggest\ShopwareSdk\Entity\MediaFolder\MediaFolderEntity;
use Swaggest\ShopwareSdk\Entity\MediaThumbnail\MediaThumbnailCollection;
use Swaggest\ShopwareSdk\Entity\MediaTranslation\MediaTranslationCollection;
use Swaggest\ShopwareSdk\Entity\OrderLineItem\OrderLineItemCollection;
use Swaggest\ShopwareSdk\Entity\PaymentMethod\PaymentMethodCollection;
use Swaggest\ShopwareSdk\Entity\ProductConfiguratorSetting\ProductConfiguratorSettingCollection;
use Swaggest\ShopwareSdk\Entity\ProductManufacturer\ProductManufacturerCollection;
use Swaggest\ShopwareSdk\Entity\ProductMedia\ProductMediaCollection;
use Swaggest\ShopwareSdk\Entity\PropertyGroupOption\PropertyGroupOptionCollection;
use Swaggest\ShopwareSdk\Entity\ShippingMethod\ShippingMethodCollection;
use Swaggest\ShopwareSdk\Entity\Tag\TagCollection;
use Swaggest\ShopwareSdk\Entity\Theme\ThemeCollection;
use Swaggest\ShopwareSdk\Entity\User\UserEntity;

final class MediaEntity extends Entity
{
    protected ?string $userId;

    protected ?string $mediaFolderId;

    protected ?string $mimeType;

    protected ?string $fileExtension;

    protected ?\DateTimeInterface $uploadedAt;

    protected ?string $fileName;

    protected ?int $fileSize;

    protected ?string $mediaTypeRaw;

    protected ?array $metaData;

    protected ?array $mediaType;

    protected ?string $alt;

    protected ?string $title;

    protected ?string $url;

    protected ?bool $hasFile;

    protected ?bool $private;

    protected ?array $customFields;

    protected ?string $thumbnailsRo;

    protected ?MediaTranslationCollection $translations;

    protected ?TagCollection $tags;

    protected ?MediaThumbnailCollection $thumbnails;

    protected ?UserEntity $user;

    protected ?CategoryCollection $categories;

    protected ?ProductManufacturerCollection $productManufacturers;

    protected ?ProductMediaCollection $productMedia;

    protected ?UserEntity $avatarUser;

    protected ?MediaFolderEntity $mediaFolder;

    protected ?PropertyGroupOptionCollection $propertyGroupOptions;

    protected ?MailTemplateMediaCollection $mailTemplateMedia;

    protected ?DocumentBaseConfigCollection $documentBaseConfigs;

    protected ?ShippingMethodCollection $shippingMethods;

    protected ?PaymentMethodCollection $paymentMethods;

    protected ?ProductConfiguratorSettingCollection $productConfiguratorSettings;

    protected ?OrderLineItemCollection $orderLineItems;

    protected ?CmsBlockCollection $cmsBlocks;

    protected ?CmsSectionCollection $cmsSections;

    protected ?CmsPageCollection $cmsPages;

    protected ?DocumentCollection $documents;

    protected ?AppPaymentMethodCollection $appPaymentMethods;

    protected ?ThemeCollection $themes;

    protected ?ThemeCollection $themeMedia;

    public function getUserId(): ?string
    {
        return $this->userId;
    }

    public function setUserId(?string $userId): void
    {
        $this->userId = $userId;
    }

    public function getMediaFolderId(): ?string
    {
        return $this->mediaFolderId;
    }

    public function setMediaFolderId(?string $mediaFolderId): void
    {
        $this->mediaFolderId = $mediaFolderId;
    }

    public function getMimeType(): ?string
    {
        return $this->mimeType;
    }

    public function setMimeType(?string $mimeType): void
    {
        $this->mimeType = $mimeType;
    }

    public function getFileExtension(): ?string
    {
        return $this->fileExtension;
    }

    public function setFileExtension(?string $fileExtension): void
    {
        $this->fileExtension = $fileExtension;
    }

    public function getUploadedAt(): ?\DateTimeInterface
    {
        return $this->uploadedAt;
    }

    public function setUploadedAt(?\DateTimeInterface $uploadedAt): void
    {
        $this->uploadedAt = $uploadedAt;
    }

    public function getFileName(): ?string
    {
        return $this->fileName;
    }

    public function setFileName(?string $fileName): void
    {
        $this->fileName = $fileName;
    }

    public function getFileSize(): ?int
    {
        return $this->fileSize;
    }

    public function setFileSize(?int $fileSize): void
    {
        $this->fileSize = $fileSize;
    }

    public function getMediaTypeRaw(): ?string
    {
        return $this->mediaTypeRaw;
    }

    public function setMediaTypeRaw(?string $mediaTypeRaw): void
    {
        $this->mediaTypeRaw = $mediaTypeRaw;
    }

    public function getMetaData(): ?array
    {
        return $this->metaData;
    }

    public function setMetaData(?array $metaData): void
    {
        $this->metaData = $metaData;
    }

    public function getMediaType(): ?array
    {
        return $this->mediaType;
    }

    public function setMediaType(?array $mediaType): void
    {
        $this->mediaType = $mediaType;
    }

    public function getAlt(): ?string
    {
        return $this->alt;
    }

    public function setAlt(?string $alt): void
    {
        $this->alt = $alt;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): void
    {
        $this->url = $url;
    }

    public function getHasFile(): ?bool
    {
        return $this->hasFile;
    }

    public function setHasFile(?bool $hasFile): void
    {
        $this->hasFile = $hasFile;
    }

    public function getPrivate(): ?bool
    {
        return $this->private;
    }

    public function setPrivate(?bool $private): void
    {
        $this->private = $private;
    }

    public function getCustomFields(): ?array
    {
        return $this->customFields;
    }

    public function setCustomFields(?array $customFields): void
    {
        $this->customFields = $customFields;
    }

    public function getThumbnailsRo(): ?string
    {
        return $this->thumbnailsRo;
    }

    public function setThumbnailsRo(?string $thumbnailsRo): void
    {
        $this->thumbnailsRo = $thumbnailsRo;
    }

    public function getTranslations(): ?MediaTranslationCollection
    {
        return $this->translations;
    }

    public function setTranslations(?MediaTranslationCollection $translations): void
    {
        $this->translations = $translations;
    }

    public function getTags(): ?TagCollection
    {
        return $this->tags;
    }

    public function setTags(?TagCollection $tags): void
    {
        $this->tags = $tags;
    }

    public function getThumbnails(): ?MediaThumbnailCollection
    {
        return $this->thumbnails;
    }

    public function setThumbnails(?MediaThumbnailCollection $thumbnails): void
    {
        $this->thumbnails = $thumbnails;
    }

    public function getUser(): ?UserEntity
    {
        return $this->user;
    }

    public function setUser(?UserEntity $user): void
    {
        $this->user = $user;
    }

    public function getCategories(): ?CategoryCollection
    {
        return $this->categories;
    }

    public function setCategories(?CategoryCollection $categories): void
    {
        $this->categories = $categories;
    }

    public function getProductManufacturers(): ?ProductManufacturerCollection
    {
        return $this->productManufacturers;
    }

    public function setProductManufacturers(?ProductManufacturerCollection $productManufacturers): void
    {
        $this->productManufacturers = $productManufacturers;
    }

    public function getProductMedia(): ?ProductMediaCollection
    {
        return $this->productMedia;
    }

    public function setProductMedia(?ProductMediaCollection $productMedia): void
    {
        $this->productMedia = $productMedia;
    }

    public function getAvatarUser(): ?UserEntity
    {
        return $this->avatarUser;
    }

    public function setAvatarUser(?UserEntity $avatarUser): void
    {
        $this->avatarUser = $avatarUser;
    }

    public function getMediaFolder(): ?MediaFolderEntity
    {
        return $this->mediaFolder;
    }

    public function setMediaFolder(?MediaFolderEntity $mediaFolder): void
    {
        $this->mediaFolder = $mediaFolder;
    }

    public function getPropertyGroupOptions(): ?PropertyGroupOptionCollection
    {
        return $this->propertyGroupOptions;
    }

    public function setPropertyGroupOptions(?PropertyGroupOptionCollection $propertyGroupOptions): void
    {
        $this->propertyGroupOptions = $propertyGroupOptions;
    }

    public function getMailTemplateMedia(): ?MailTemplateMediaCollection
    {
        return $this->mailTemplateMedia;
    }

    public function setMailTemplateMedia(?MailTemplateMediaCollection $mailTemplateMedia): void
    {
        $this->mailTemplateMedia = $mailTemplateMedia;
    }

    public function getDocumentBaseConfigs(): ?DocumentBaseConfigCollection
    {
        return $this->documentBaseConfigs;
    }

    public function setDocumentBaseConfigs(?DocumentBaseConfigCollection $documentBaseConfigs): void
    {
        $this->documentBaseConfigs = $documentBaseConfigs;
    }

    public function getShippingMethods(): ?ShippingMethodCollection
    {
        return $this->shippingMethods;
    }

    public function setShippingMethods(?ShippingMethodCollection $shippingMethods): void
    {
        $this->shippingMethods = $shippingMethods;
    }

    public function getPaymentMethods(): ?PaymentMethodCollection
    {
        return $this->paymentMethods;
    }

    public function setPaymentMethods(?PaymentMethodCollection $paymentMethods): void
    {
        $this->paymentMethods = $paymentMethods;
    }

    public function getProductConfiguratorSettings(): ?ProductConfiguratorSettingCollection
    {
        return $this->productConfiguratorSettings;
    }

    public function setProductConfiguratorSettings(?ProductConfiguratorSettingCollection $productConfiguratorSettings): void
    {
        $this->productConfiguratorSettings = $productConfiguratorSettings;
    }

    public function getOrderLineItems(): ?OrderLineItemCollection
    {
        return $this->orderLineItems;
    }

    public function setOrderLineItems(?OrderLineItemCollection $orderLineItems): void
    {
        $this->orderLineItems = $orderLineItems;
    }

    public function getCmsBlocks(): ?CmsBlockCollection
    {
        return $this->cmsBlocks;
    }

    public function setCmsBlocks(?CmsBlockCollection $cmsBlocks): void
    {
        $this->cmsBlocks = $cmsBlocks;
    }

    public function getCmsSections(): ?CmsSectionCollection
    {
        return $this->cmsSections;
    }

    public function setCmsSections(?CmsSectionCollection $cmsSections): void
    {
        $this->cmsSections = $cmsSections;
    }

    public function getCmsPages(): ?CmsPageCollection
    {
        return $this->cmsPages;
    }

    public function setCmsPages(?CmsPageCollection $cmsPages): void
    {
        $this->cmsPages = $cmsPages;
    }

    public function getDocuments(): ?DocumentCollection
    {
        return $this->documents;
    }

    public function setDocuments(?DocumentCollection $documents): void
    {
        $this->documents = $documents;
    }

    public function getAppPaymentMethods(): ?AppPaymentMethodCollection
    {
        return $this->appPaymentMethods;
    }

    public function setAppPaymentMethods(?AppPaymentMethodCollection $appPaymentMethods): void
    {
        $this->appPaymentMethods = $appPaymentMethods;
    }

    public function getThemes(): ?ThemeCollection
    {
        return $this->themes;
    }

    public function setThemes(?ThemeCollection $themes): void
    {
        $this->themes = $themes;
    }

    public function getThemeMedia(): ?ThemeCollection
    {
        return $this->themeMedia;
    }

    public function setThemeMedia(?ThemeCollection $themeMedia): void
    {
        $this->themeMedia = $themeMedia;
    }
}
