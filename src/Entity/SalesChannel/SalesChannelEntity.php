<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\SalesChannel;

use Swaggest\ShopwareSdk\Entity\Category\CategoryEntity;
use Swaggest\ShopwareSdk\Entity\CmsPage\CmsPageEntity;
use Swaggest\ShopwareSdk\Entity\Country\CountryCollection;
use Swaggest\ShopwareSdk\Entity\Country\CountryEntity;
use Swaggest\ShopwareSdk\Entity\Currency\CurrencyCollection;
use Swaggest\ShopwareSdk\Entity\Currency\CurrencyEntity;
use Swaggest\ShopwareSdk\Entity\Customer\CustomerCollection;
use Swaggest\ShopwareSdk\Entity\CustomerGroup\CustomerGroupCollection;
use Swaggest\ShopwareSdk\Entity\CustomerGroup\CustomerGroupEntity;
use Swaggest\ShopwareSdk\Entity\CustomerWishlist\CustomerWishlistCollection;
use Swaggest\ShopwareSdk\Entity\DocumentBaseConfigSalesChannel\DocumentBaseConfigSalesChannelCollection;
use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\EventAction\EventActionCollection;
use Swaggest\ShopwareSdk\Entity\LandingPage\LandingPageCollection;
use Swaggest\ShopwareSdk\Entity\Language\LanguageCollection;
use Swaggest\ShopwareSdk\Entity\Language\LanguageEntity;
use Swaggest\ShopwareSdk\Entity\MailHeaderFooter\MailHeaderFooterEntity;
use Swaggest\ShopwareSdk\Entity\MainCategory\MainCategoryCollection;
use Swaggest\ShopwareSdk\Entity\NewsletterRecipient\NewsletterRecipientCollection;
use Swaggest\ShopwareSdk\Entity\NumberRangeSalesChannel\NumberRangeSalesChannelCollection;
use Swaggest\ShopwareSdk\Entity\Order\OrderCollection;
use Swaggest\ShopwareSdk\Entity\PaymentMethod\PaymentMethodCollection;
use Swaggest\ShopwareSdk\Entity\PaymentMethod\PaymentMethodEntity;
use Swaggest\ShopwareSdk\Entity\ProductExport\ProductExportCollection;
use Swaggest\ShopwareSdk\Entity\ProductReview\ProductReviewCollection;
use Swaggest\ShopwareSdk\Entity\ProductVisibility\ProductVisibilityCollection;
use Swaggest\ShopwareSdk\Entity\PromotionSalesChannel\PromotionSalesChannelCollection;
use Swaggest\ShopwareSdk\Entity\SalesChannelAnalytics\SalesChannelAnalyticsEntity;
use Swaggest\ShopwareSdk\Entity\SalesChannelDomain\SalesChannelDomainCollection;
use Swaggest\ShopwareSdk\Entity\SalesChannelDomain\SalesChannelDomainEntity;
use Swaggest\ShopwareSdk\Entity\SalesChannelTranslation\SalesChannelTranslationCollection;
use Swaggest\ShopwareSdk\Entity\SalesChannelType\SalesChannelTypeEntity;
use Swaggest\ShopwareSdk\Entity\SeoUrl\SeoUrlCollection;
use Swaggest\ShopwareSdk\Entity\SeoUrlTemplate\SeoUrlTemplateCollection;
use Swaggest\ShopwareSdk\Entity\ShippingMethod\ShippingMethodCollection;
use Swaggest\ShopwareSdk\Entity\ShippingMethod\ShippingMethodEntity;
use Swaggest\ShopwareSdk\Entity\SystemConfig\SystemConfigCollection;
use Swaggest\ShopwareSdk\Entity\Theme\ThemeCollection;

final class SalesChannelEntity extends Entity
{
    use EntityIdTrait;

    protected string $typeId;

    protected string $languageId;

    protected string $customerGroupId;

    protected string $currencyId;

    protected string $paymentMethodId;

    protected string $shippingMethodId;

    protected string $countryId;

    protected ?string $analyticsId;

    protected string $navigationCategoryId;

    protected ?string $navigationCategoryVersionId;

    protected ?int $navigationCategoryDepth;

    protected ?string $footerCategoryId;

    protected ?string $footerCategoryVersionId;

    protected ?string $serviceCategoryId;

    protected ?string $serviceCategoryVersionId;

    protected ?string $mailHeaderFooterId;

    protected ?string $hreflangDefaultDomainId;

    protected string $name;

    protected ?string $shortName;

    protected ?string $taxCalculationType;

    protected string $accessKey;

    protected ?array $configuration;

    protected ?bool $active;

    protected ?bool $hreflangActive;

    protected ?bool $maintenance;

    protected ?array $maintenanceIpWhitelist;

    protected ?array $customFields;

    protected SalesChannelTranslationCollection $translations;

    protected ?CurrencyCollection $currencies;

    protected ?LanguageCollection $languages;

    protected ?CountryCollection $countries;

    protected ?PaymentMethodCollection $paymentMethods;

    protected ?array $paymentMethodIds;

    protected ?ShippingMethodCollection $shippingMethods;

    protected ?SalesChannelTypeEntity $type;

    protected ?LanguageEntity $language;

    protected ?CustomerGroupEntity $customerGroup;

    protected ?CurrencyEntity $currency;

    protected ?PaymentMethodEntity $paymentMethod;

    protected ?ShippingMethodEntity $shippingMethod;

    protected ?CountryEntity $country;

    protected ?OrderCollection $orders;

    protected ?CustomerCollection $customers;

    protected ?string $homeCmsPageId;

    protected ?string $homeCmsPageVersionId;

    protected ?CmsPageEntity $homeCmsPage;

    protected ?array $homeSlotConfig;

    protected bool $homeEnabled;

    protected ?string $homeName;

    protected ?string $homeMetaTitle;

    protected ?string $homeMetaDescription;

    protected ?string $homeKeywords;

    protected ?SalesChannelDomainCollection $domains;

    protected ?SystemConfigCollection $systemConfigs;

    protected ?CategoryEntity $navigationCategory;

    protected ?CategoryEntity $footerCategory;

    protected ?CategoryEntity $serviceCategory;

    protected ?ProductVisibilityCollection $productVisibilities;

    protected ?SalesChannelDomainEntity $hreflangDefaultDomain;

    protected ?MailHeaderFooterEntity $mailHeaderFooter;

    protected ?NewsletterRecipientCollection $newsletterRecipients;

    protected ?NumberRangeSalesChannelCollection $numberRangeSalesChannels;

    protected ?PromotionSalesChannelCollection $promotionSalesChannels;

    protected ?DocumentBaseConfigSalesChannelCollection $documentBaseConfigSalesChannels;

    protected ?ProductReviewCollection $productReviews;

    protected ?SeoUrlCollection $seoUrls;

    protected ?SeoUrlTemplateCollection $seoUrlTemplates;

    protected ?MainCategoryCollection $mainCategories;

    protected ?ProductExportCollection $productExports;

    protected ?SalesChannelAnalyticsEntity $analytics;

    protected ?CustomerGroupCollection $customerGroupsRegistrations;

    protected ?EventActionCollection $eventActions;

    protected ?LandingPageCollection $landingPages;

    protected ?CustomerCollection $boundCustomers;

    protected ?CustomerWishlistCollection $wishlists;

    protected ?ThemeCollection $themes;

    public function getTypeId(): string
    {
        return $this->typeId;
    }

    public function setTypeId(string $typeId): void
    {
        $this->typeId = $typeId;
    }

    public function getLanguageId(): string
    {
        return $this->languageId;
    }

    public function setLanguageId(string $languageId): void
    {
        $this->languageId = $languageId;
    }

    public function getCustomerGroupId(): string
    {
        return $this->customerGroupId;
    }

    public function setCustomerGroupId(string $customerGroupId): void
    {
        $this->customerGroupId = $customerGroupId;
    }

    public function getCurrencyId(): string
    {
        return $this->currencyId;
    }

    public function setCurrencyId(string $currencyId): void
    {
        $this->currencyId = $currencyId;
    }

    public function getPaymentMethodId(): string
    {
        return $this->paymentMethodId;
    }

    public function setPaymentMethodId(string $paymentMethodId): void
    {
        $this->paymentMethodId = $paymentMethodId;
    }

    public function getShippingMethodId(): string
    {
        return $this->shippingMethodId;
    }

    public function setShippingMethodId(string $shippingMethodId): void
    {
        $this->shippingMethodId = $shippingMethodId;
    }

    public function getCountryId(): string
    {
        return $this->countryId;
    }

    public function setCountryId(string $countryId): void
    {
        $this->countryId = $countryId;
    }

    public function getAnalyticsId(): ?string
    {
        return $this->analyticsId;
    }

    public function setAnalyticsId(?string $analyticsId): void
    {
        $this->analyticsId = $analyticsId;
    }

    public function getNavigationCategoryId(): string
    {
        return $this->navigationCategoryId;
    }

    public function setNavigationCategoryId(string $navigationCategoryId): void
    {
        $this->navigationCategoryId = $navigationCategoryId;
    }

    public function getNavigationCategoryVersionId(): ?string
    {
        return $this->navigationCategoryVersionId;
    }

    public function setNavigationCategoryVersionId(?string $navigationCategoryVersionId): void
    {
        $this->navigationCategoryVersionId = $navigationCategoryVersionId;
    }

    public function getNavigationCategoryDepth(): ?int
    {
        return $this->navigationCategoryDepth;
    }

    public function setNavigationCategoryDepth(?int $navigationCategoryDepth): void
    {
        $this->navigationCategoryDepth = $navigationCategoryDepth;
    }

    public function getFooterCategoryId(): ?string
    {
        return $this->footerCategoryId;
    }

    public function setFooterCategoryId(?string $footerCategoryId): void
    {
        $this->footerCategoryId = $footerCategoryId;
    }

    public function getFooterCategoryVersionId(): ?string
    {
        return $this->footerCategoryVersionId;
    }

    public function setFooterCategoryVersionId(?string $footerCategoryVersionId): void
    {
        $this->footerCategoryVersionId = $footerCategoryVersionId;
    }

    public function getServiceCategoryId(): ?string
    {
        return $this->serviceCategoryId;
    }

    public function setServiceCategoryId(?string $serviceCategoryId): void
    {
        $this->serviceCategoryId = $serviceCategoryId;
    }

    public function getServiceCategoryVersionId(): ?string
    {
        return $this->serviceCategoryVersionId;
    }

    public function setServiceCategoryVersionId(?string $serviceCategoryVersionId): void
    {
        $this->serviceCategoryVersionId = $serviceCategoryVersionId;
    }

    public function getMailHeaderFooterId(): ?string
    {
        return $this->mailHeaderFooterId;
    }

    public function setMailHeaderFooterId(?string $mailHeaderFooterId): void
    {
        $this->mailHeaderFooterId = $mailHeaderFooterId;
    }

    public function getHreflangDefaultDomainId(): ?string
    {
        return $this->hreflangDefaultDomainId;
    }

    public function setHreflangDefaultDomainId(?string $hreflangDefaultDomainId): void
    {
        $this->hreflangDefaultDomainId = $hreflangDefaultDomainId;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getShortName(): ?string
    {
        return $this->shortName;
    }

    public function setShortName(?string $shortName): void
    {
        $this->shortName = $shortName;
    }

    public function getTaxCalculationType(): ?string
    {
        return $this->taxCalculationType;
    }

    public function setTaxCalculationType(?string $taxCalculationType): void
    {
        $this->taxCalculationType = $taxCalculationType;
    }

    public function getAccessKey(): string
    {
        return $this->accessKey;
    }

    public function setAccessKey(string $accessKey): void
    {
        $this->accessKey = $accessKey;
    }

    public function getConfiguration(): ?array
    {
        return $this->configuration;
    }

    public function setConfiguration(?array $configuration): void
    {
        $this->configuration = $configuration;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(?bool $active): void
    {
        $this->active = $active;
    }

    public function getHreflangActive(): ?bool
    {
        return $this->hreflangActive;
    }

    public function setHreflangActive(?bool $hreflangActive): void
    {
        $this->hreflangActive = $hreflangActive;
    }

    public function getMaintenance(): ?bool
    {
        return $this->maintenance;
    }

    public function setMaintenance(?bool $maintenance): void
    {
        $this->maintenance = $maintenance;
    }

    public function getMaintenanceIpWhitelist(): ?array
    {
        return $this->maintenanceIpWhitelist;
    }

    public function setMaintenanceIpWhitelist(?array $maintenanceIpWhitelist): void
    {
        $this->maintenanceIpWhitelist = $maintenanceIpWhitelist;
    }

    public function getCustomFields(): ?array
    {
        return $this->customFields;
    }

    public function setCustomFields(?array $customFields): void
    {
        $this->customFields = $customFields;
    }

    public function getTranslations(): SalesChannelTranslationCollection
    {
        return $this->translations;
    }

    public function setTranslations(SalesChannelTranslationCollection $translations): void
    {
        $this->translations = $translations;
    }

    public function getCurrencies(): ?CurrencyCollection
    {
        return $this->currencies;
    }

    public function setCurrencies(?CurrencyCollection $currencies): void
    {
        $this->currencies = $currencies;
    }

    public function getLanguages(): ?LanguageCollection
    {
        return $this->languages;
    }

    public function setLanguages(?LanguageCollection $languages): void
    {
        $this->languages = $languages;
    }

    public function getCountries(): ?CountryCollection
    {
        return $this->countries;
    }

    public function setCountries(?CountryCollection $countries): void
    {
        $this->countries = $countries;
    }

    public function getPaymentMethods(): ?PaymentMethodCollection
    {
        return $this->paymentMethods;
    }

    public function setPaymentMethods(?PaymentMethodCollection $paymentMethods): void
    {
        $this->paymentMethods = $paymentMethods;
    }

    public function getPaymentMethodIds(): ?array
    {
        return $this->paymentMethodIds;
    }

    public function setPaymentMethodIds(?array $paymentMethodIds): void
    {
        $this->paymentMethodIds = $paymentMethodIds;
    }

    public function getShippingMethods(): ?ShippingMethodCollection
    {
        return $this->shippingMethods;
    }

    public function setShippingMethods(?ShippingMethodCollection $shippingMethods): void
    {
        $this->shippingMethods = $shippingMethods;
    }

    public function getType(): ?SalesChannelTypeEntity
    {
        return $this->type;
    }

    public function setType(?SalesChannelTypeEntity $type): void
    {
        $this->type = $type;
    }

    public function getLanguage(): ?LanguageEntity
    {
        return $this->language;
    }

    public function setLanguage(?LanguageEntity $language): void
    {
        $this->language = $language;
    }

    public function getCustomerGroup(): ?CustomerGroupEntity
    {
        return $this->customerGroup;
    }

    public function setCustomerGroup(?CustomerGroupEntity $customerGroup): void
    {
        $this->customerGroup = $customerGroup;
    }

    public function getCurrency(): ?CurrencyEntity
    {
        return $this->currency;
    }

    public function setCurrency(?CurrencyEntity $currency): void
    {
        $this->currency = $currency;
    }

    public function getPaymentMethod(): ?PaymentMethodEntity
    {
        return $this->paymentMethod;
    }

    public function setPaymentMethod(?PaymentMethodEntity $paymentMethod): void
    {
        $this->paymentMethod = $paymentMethod;
    }

    public function getShippingMethod(): ?ShippingMethodEntity
    {
        return $this->shippingMethod;
    }

    public function setShippingMethod(?ShippingMethodEntity $shippingMethod): void
    {
        $this->shippingMethod = $shippingMethod;
    }

    public function getCountry(): ?CountryEntity
    {
        return $this->country;
    }

    public function setCountry(?CountryEntity $country): void
    {
        $this->country = $country;
    }

    public function getOrders(): ?OrderCollection
    {
        return $this->orders;
    }

    public function setOrders(?OrderCollection $orders): void
    {
        $this->orders = $orders;
    }

    public function getCustomers(): ?CustomerCollection
    {
        return $this->customers;
    }

    public function setCustomers(?CustomerCollection $customers): void
    {
        $this->customers = $customers;
    }

    public function getHomeCmsPageId(): ?string
    {
        return $this->homeCmsPageId;
    }

    public function setHomeCmsPageId(?string $homeCmsPageId): void
    {
        $this->homeCmsPageId = $homeCmsPageId;
    }

    public function getHomeCmsPageVersionId(): ?string
    {
        return $this->homeCmsPageVersionId;
    }

    public function setHomeCmsPageVersionId(?string $homeCmsPageVersionId): void
    {
        $this->homeCmsPageVersionId = $homeCmsPageVersionId;
    }

    public function getHomeCmsPage(): ?CmsPageEntity
    {
        return $this->homeCmsPage;
    }

    public function setHomeCmsPage(?CmsPageEntity $homeCmsPage): void
    {
        $this->homeCmsPage = $homeCmsPage;
    }

    public function getHomeSlotConfig(): ?array
    {
        return $this->homeSlotConfig;
    }

    public function setHomeSlotConfig(?array $homeSlotConfig): void
    {
        $this->homeSlotConfig = $homeSlotConfig;
    }

    public function getHomeEnabled(): bool
    {
        return $this->homeEnabled;
    }

    public function setHomeEnabled(bool $homeEnabled): void
    {
        $this->homeEnabled = $homeEnabled;
    }

    public function getHomeName(): ?string
    {
        return $this->homeName;
    }

    public function setHomeName(?string $homeName): void
    {
        $this->homeName = $homeName;
    }

    public function getHomeMetaTitle(): ?string
    {
        return $this->homeMetaTitle;
    }

    public function setHomeMetaTitle(?string $homeMetaTitle): void
    {
        $this->homeMetaTitle = $homeMetaTitle;
    }

    public function getHomeMetaDescription(): ?string
    {
        return $this->homeMetaDescription;
    }

    public function setHomeMetaDescription(?string $homeMetaDescription): void
    {
        $this->homeMetaDescription = $homeMetaDescription;
    }

    public function getHomeKeywords(): ?string
    {
        return $this->homeKeywords;
    }

    public function setHomeKeywords(?string $homeKeywords): void
    {
        $this->homeKeywords = $homeKeywords;
    }

    public function getDomains(): ?SalesChannelDomainCollection
    {
        return $this->domains;
    }

    public function setDomains(?SalesChannelDomainCollection $domains): void
    {
        $this->domains = $domains;
    }

    public function getSystemConfigs(): ?SystemConfigCollection
    {
        return $this->systemConfigs;
    }

    public function setSystemConfigs(?SystemConfigCollection $systemConfigs): void
    {
        $this->systemConfigs = $systemConfigs;
    }

    public function getNavigationCategory(): ?CategoryEntity
    {
        return $this->navigationCategory;
    }

    public function setNavigationCategory(?CategoryEntity $navigationCategory): void
    {
        $this->navigationCategory = $navigationCategory;
    }

    public function getFooterCategory(): ?CategoryEntity
    {
        return $this->footerCategory;
    }

    public function setFooterCategory(?CategoryEntity $footerCategory): void
    {
        $this->footerCategory = $footerCategory;
    }

    public function getServiceCategory(): ?CategoryEntity
    {
        return $this->serviceCategory;
    }

    public function setServiceCategory(?CategoryEntity $serviceCategory): void
    {
        $this->serviceCategory = $serviceCategory;
    }

    public function getProductVisibilities(): ?ProductVisibilityCollection
    {
        return $this->productVisibilities;
    }

    public function setProductVisibilities(?ProductVisibilityCollection $productVisibilities): void
    {
        $this->productVisibilities = $productVisibilities;
    }

    public function getHreflangDefaultDomain(): ?SalesChannelDomainEntity
    {
        return $this->hreflangDefaultDomain;
    }

    public function setHreflangDefaultDomain(?SalesChannelDomainEntity $hreflangDefaultDomain): void
    {
        $this->hreflangDefaultDomain = $hreflangDefaultDomain;
    }

    public function getMailHeaderFooter(): ?MailHeaderFooterEntity
    {
        return $this->mailHeaderFooter;
    }

    public function setMailHeaderFooter(?MailHeaderFooterEntity $mailHeaderFooter): void
    {
        $this->mailHeaderFooter = $mailHeaderFooter;
    }

    public function getNewsletterRecipients(): ?NewsletterRecipientCollection
    {
        return $this->newsletterRecipients;
    }

    public function setNewsletterRecipients(?NewsletterRecipientCollection $newsletterRecipients): void
    {
        $this->newsletterRecipients = $newsletterRecipients;
    }

    public function getNumberRangeSalesChannels(): ?NumberRangeSalesChannelCollection
    {
        return $this->numberRangeSalesChannels;
    }

    public function setNumberRangeSalesChannels(?NumberRangeSalesChannelCollection $numberRangeSalesChannels): void
    {
        $this->numberRangeSalesChannels = $numberRangeSalesChannels;
    }

    public function getPromotionSalesChannels(): ?PromotionSalesChannelCollection
    {
        return $this->promotionSalesChannels;
    }

    public function setPromotionSalesChannels(?PromotionSalesChannelCollection $promotionSalesChannels): void
    {
        $this->promotionSalesChannels = $promotionSalesChannels;
    }

    public function getDocumentBaseConfigSalesChannels(): ?DocumentBaseConfigSalesChannelCollection
    {
        return $this->documentBaseConfigSalesChannels;
    }

    public function setDocumentBaseConfigSalesChannels(?DocumentBaseConfigSalesChannelCollection $documentBaseConfigSalesChannels): void
    {
        $this->documentBaseConfigSalesChannels = $documentBaseConfigSalesChannels;
    }

    public function getProductReviews(): ?ProductReviewCollection
    {
        return $this->productReviews;
    }

    public function setProductReviews(?ProductReviewCollection $productReviews): void
    {
        $this->productReviews = $productReviews;
    }

    public function getSeoUrls(): ?SeoUrlCollection
    {
        return $this->seoUrls;
    }

    public function setSeoUrls(?SeoUrlCollection $seoUrls): void
    {
        $this->seoUrls = $seoUrls;
    }

    public function getSeoUrlTemplates(): ?SeoUrlTemplateCollection
    {
        return $this->seoUrlTemplates;
    }

    public function setSeoUrlTemplates(?SeoUrlTemplateCollection $seoUrlTemplates): void
    {
        $this->seoUrlTemplates = $seoUrlTemplates;
    }

    public function getMainCategories(): ?MainCategoryCollection
    {
        return $this->mainCategories;
    }

    public function setMainCategories(?MainCategoryCollection $mainCategories): void
    {
        $this->mainCategories = $mainCategories;
    }

    public function getProductExports(): ?ProductExportCollection
    {
        return $this->productExports;
    }

    public function setProductExports(?ProductExportCollection $productExports): void
    {
        $this->productExports = $productExports;
    }

    public function getAnalytics(): ?SalesChannelAnalyticsEntity
    {
        return $this->analytics;
    }

    public function setAnalytics(?SalesChannelAnalyticsEntity $analytics): void
    {
        $this->analytics = $analytics;
    }

    public function getCustomerGroupsRegistrations(): ?CustomerGroupCollection
    {
        return $this->customerGroupsRegistrations;
    }

    public function setCustomerGroupsRegistrations(?CustomerGroupCollection $customerGroupsRegistrations): void
    {
        $this->customerGroupsRegistrations = $customerGroupsRegistrations;
    }

    public function getEventActions(): ?EventActionCollection
    {
        return $this->eventActions;
    }

    public function setEventActions(?EventActionCollection $eventActions): void
    {
        $this->eventActions = $eventActions;
    }

    public function getLandingPages(): ?LandingPageCollection
    {
        return $this->landingPages;
    }

    public function setLandingPages(?LandingPageCollection $landingPages): void
    {
        $this->landingPages = $landingPages;
    }

    public function getBoundCustomers(): ?CustomerCollection
    {
        return $this->boundCustomers;
    }

    public function setBoundCustomers(?CustomerCollection $boundCustomers): void
    {
        $this->boundCustomers = $boundCustomers;
    }

    public function getWishlists(): ?CustomerWishlistCollection
    {
        return $this->wishlists;
    }

    public function setWishlists(?CustomerWishlistCollection $wishlists): void
    {
        $this->wishlists = $wishlists;
    }

    public function getThemes(): ?ThemeCollection
    {
        return $this->themes;
    }

    public function setThemes(?ThemeCollection $themes): void
    {
        $this->themes = $themes;
    }
}
