<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\Language;

use Swaggest\ShopwareSdk\Entity\AppActionButtonTranslation\AppActionButtonTranslationCollection;
use Swaggest\ShopwareSdk\Entity\AppCmsBlockTranslation\AppCmsBlockTranslationCollection;
use Swaggest\ShopwareSdk\Entity\AppTranslation\AppTranslationCollection;
use Swaggest\ShopwareSdk\Entity\CategoryTranslation\CategoryTranslationCollection;
use Swaggest\ShopwareSdk\Entity\CmsPageTranslation\CmsPageTranslationCollection;
use Swaggest\ShopwareSdk\Entity\CmsSlotTranslation\CmsSlotTranslationCollection;
use Swaggest\ShopwareSdk\Entity\CountryStateTranslation\CountryStateTranslationCollection;
use Swaggest\ShopwareSdk\Entity\CountryTranslation\CountryTranslationCollection;
use Swaggest\ShopwareSdk\Entity\CurrencyTranslation\CurrencyTranslationCollection;
use Swaggest\ShopwareSdk\Entity\Customer\CustomerCollection;
use Swaggest\ShopwareSdk\Entity\CustomerGroupTranslation\CustomerGroupTranslationCollection;
use Swaggest\ShopwareSdk\Entity\DeliveryTimeTranslation\DeliveryTimeTranslationCollection;
use Swaggest\ShopwareSdk\Entity\DocumentTypeTranslation\DocumentTypeTranslationCollection;
use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\ImportExportProfileTranslation\ImportExportProfileTranslationCollection;
use Swaggest\ShopwareSdk\Entity\LandingPageTranslation\LandingPageTranslationCollection;
use Swaggest\ShopwareSdk\Entity\Locale\LocaleEntity;
use Swaggest\ShopwareSdk\Entity\LocaleTranslation\LocaleTranslationCollection;
use Swaggest\ShopwareSdk\Entity\MailHeaderFooterTranslation\MailHeaderFooterTranslationCollection;
use Swaggest\ShopwareSdk\Entity\MailTemplateTranslation\MailTemplateTranslationCollection;
use Swaggest\ShopwareSdk\Entity\MailTemplateTypeTranslation\MailTemplateTypeTranslationCollection;
use Swaggest\ShopwareSdk\Entity\MediaTranslation\MediaTranslationCollection;
use Swaggest\ShopwareSdk\Entity\NewsletterRecipient\NewsletterRecipientCollection;
use Swaggest\ShopwareSdk\Entity\NumberRangeTranslation\NumberRangeTranslationCollection;
use Swaggest\ShopwareSdk\Entity\NumberRangeTypeTranslation\NumberRangeTypeTranslationCollection;
use Swaggest\ShopwareSdk\Entity\Order\OrderCollection;
use Swaggest\ShopwareSdk\Entity\PaymentMethodTranslation\PaymentMethodTranslationCollection;
use Swaggest\ShopwareSdk\Entity\PluginTranslation\PluginTranslationCollection;
use Swaggest\ShopwareSdk\Entity\ProductCrossSellingTranslation\ProductCrossSellingTranslationCollection;
use Swaggest\ShopwareSdk\Entity\ProductFeatureSetTranslation\ProductFeatureSetTranslationCollection;
use Swaggest\ShopwareSdk\Entity\ProductKeywordDictionary\ProductKeywordDictionaryCollection;
use Swaggest\ShopwareSdk\Entity\ProductManufacturerTranslation\ProductManufacturerTranslationCollection;
use Swaggest\ShopwareSdk\Entity\ProductReview\ProductReviewCollection;
use Swaggest\ShopwareSdk\Entity\ProductSearchConfig\ProductSearchConfigEntity;
use Swaggest\ShopwareSdk\Entity\ProductSearchKeyword\ProductSearchKeywordCollection;
use Swaggest\ShopwareSdk\Entity\ProductSortingTranslation\ProductSortingTranslationCollection;
use Swaggest\ShopwareSdk\Entity\ProductStreamTranslation\ProductStreamTranslationCollection;
use Swaggest\ShopwareSdk\Entity\ProductTranslation\ProductTranslationCollection;
use Swaggest\ShopwareSdk\Entity\PromotionTranslation\PromotionTranslationCollection;
use Swaggest\ShopwareSdk\Entity\PropertyGroupOptionTranslation\PropertyGroupOptionTranslationCollection;
use Swaggest\ShopwareSdk\Entity\PropertyGroupTranslation\PropertyGroupTranslationCollection;
use Swaggest\ShopwareSdk\Entity\SalesChannel\SalesChannelCollection;
use Swaggest\ShopwareSdk\Entity\SalesChannelDomain\SalesChannelDomainCollection;
use Swaggest\ShopwareSdk\Entity\SalesChannelTranslation\SalesChannelTranslationCollection;
use Swaggest\ShopwareSdk\Entity\SalesChannelTypeTranslation\SalesChannelTypeTranslationCollection;
use Swaggest\ShopwareSdk\Entity\SalutationTranslation\SalutationTranslationCollection;
use Swaggest\ShopwareSdk\Entity\SeoUrl\SeoUrlCollection;
use Swaggest\ShopwareSdk\Entity\ShippingMethodTranslation\ShippingMethodTranslationCollection;
use Swaggest\ShopwareSdk\Entity\StateMachineStateTranslation\StateMachineStateTranslationCollection;
use Swaggest\ShopwareSdk\Entity\StateMachineTranslation\StateMachineTranslationCollection;
use Swaggest\ShopwareSdk\Entity\TaxRuleTypeTranslation\TaxRuleTypeTranslationCollection;
use Swaggest\ShopwareSdk\Entity\ThemeTranslation\ThemeTranslationCollection;
use Swaggest\ShopwareSdk\Entity\UnitTranslation\UnitTranslationCollection;

final class LanguageEntity extends Entity
{
    protected ?string $parentId;

    protected string $localeId;

    protected ?string $translationCodeId;

    protected string $name;

    protected ?array $customFields;

    protected ?LanguageEntity $parent;

    protected ?LocaleEntity $locale;

    protected ?LocaleEntity $translationCode;

    protected ?LanguageCollection $children;

    protected ?SalesChannelCollection $salesChannels;

    protected ?SalesChannelCollection $salesChannelDefaultAssignments;

    protected ?SalesChannelDomainCollection $salesChannelDomains;

    protected ?CustomerCollection $customers;

    protected ?NewsletterRecipientCollection $newsletterRecipients;

    protected ?OrderCollection $orders;

    protected ?CategoryTranslationCollection $categoryTranslations;

    protected ?CountryStateTranslationCollection $countryStateTranslations;

    protected ?CountryTranslationCollection $countryTranslations;

    protected ?CurrencyTranslationCollection $currencyTranslations;

    protected ?CustomerGroupTranslationCollection $customerGroupTranslations;

    protected ?LocaleTranslationCollection $localeTranslations;

    protected ?MediaTranslationCollection $mediaTranslations;

    protected ?PaymentMethodTranslationCollection $paymentMethodTranslations;

    protected ?ProductManufacturerTranslationCollection $productManufacturerTranslations;

    protected ?ProductTranslationCollection $productTranslations;

    protected ?ShippingMethodTranslationCollection $shippingMethodTranslations;

    protected ?UnitTranslationCollection $unitTranslations;

    protected ?PropertyGroupTranslationCollection $propertyGroupTranslations;

    protected ?PropertyGroupOptionTranslationCollection $propertyGroupOptionTranslations;

    protected ?SalesChannelTranslationCollection $salesChannelTranslations;

    protected ?SalesChannelTypeTranslationCollection $salesChannelTypeTranslations;

    protected ?SalutationTranslationCollection $salutationTranslations;

    protected ?PluginTranslationCollection $pluginTranslations;

    protected ?ProductStreamTranslationCollection $productStreamTranslations;

    protected ?StateMachineTranslationCollection $stateMachineTranslations;

    protected ?StateMachineStateTranslationCollection $stateMachineStateTranslations;

    protected ?CmsPageTranslationCollection $cmsPageTranslations;

    protected ?CmsSlotTranslationCollection $cmsSlotTranslations;

    protected ?MailTemplateTranslationCollection $mailTemplateTranslations;

    protected ?MailHeaderFooterTranslationCollection $mailHeaderFooterTranslations;

    protected ?DocumentTypeTranslationCollection $documentTypeTranslations;

    protected ?NumberRangeTypeTranslationCollection $numberRangeTypeTranslations;

    protected ?DeliveryTimeTranslationCollection $deliveryTimeTranslations;

    protected ?ProductSearchKeywordCollection $productSearchKeywords;

    protected ?ProductKeywordDictionaryCollection $productKeywordDictionaries;

    protected ?MailTemplateTypeTranslationCollection $mailTemplateTypeTranslations;

    protected ?PromotionTranslationCollection $promotionTranslations;

    protected ?NumberRangeTranslationCollection $numberRangeTranslations;

    protected ?ProductReviewCollection $productReviews;

    protected ?SeoUrlCollection $seoUrlTranslations;

    protected ?TaxRuleTypeTranslationCollection $taxRuleTypeTranslations;

    protected ?ProductCrossSellingTranslationCollection $productCrossSellingTranslations;

    protected ?ImportExportProfileTranslationCollection $importExportProfileTranslations;

    protected ?ProductSortingTranslationCollection $productSortingTranslations;

    protected ?ProductFeatureSetTranslationCollection $productFeatureSetTranslations;

    protected ?AppTranslationCollection $appTranslations;

    protected ?AppActionButtonTranslationCollection $actionButtonTranslations;

    protected ?LandingPageTranslationCollection $landingPageTranslations;

    protected ?AppCmsBlockTranslationCollection $appCmsBlockTranslations;

    protected ?ProductSearchConfigEntity $productSearchConfig;

    protected ?ThemeTranslationCollection $themeTranslations;

    public function getParentId(): ?string
    {
        return $this->parentId;
    }

    public function setParentId(?string $parentId): void
    {
        $this->parentId = $parentId;
    }

    public function getLocaleId(): string
    {
        return $this->localeId;
    }

    public function setLocaleId(string $localeId): void
    {
        $this->localeId = $localeId;
    }

    public function getTranslationCodeId(): ?string
    {
        return $this->translationCodeId;
    }

    public function setTranslationCodeId(?string $translationCodeId): void
    {
        $this->translationCodeId = $translationCodeId;
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

    public function getParent(): ?self
    {
        return $this->parent;
    }

    public function setParent(?self $parent): void
    {
        $this->parent = $parent;
    }

    public function getLocale(): ?LocaleEntity
    {
        return $this->locale;
    }

    public function setLocale(?LocaleEntity $locale): void
    {
        $this->locale = $locale;
    }

    public function getTranslationCode(): ?LocaleEntity
    {
        return $this->translationCode;
    }

    public function setTranslationCode(?LocaleEntity $translationCode): void
    {
        $this->translationCode = $translationCode;
    }

    public function getChildren(): ?LanguageCollection
    {
        return $this->children;
    }

    public function setChildren(?LanguageCollection $children): void
    {
        $this->children = $children;
    }

    public function getSalesChannels(): ?SalesChannelCollection
    {
        return $this->salesChannels;
    }

    public function setSalesChannels(?SalesChannelCollection $salesChannels): void
    {
        $this->salesChannels = $salesChannels;
    }

    public function getSalesChannelDefaultAssignments(): ?SalesChannelCollection
    {
        return $this->salesChannelDefaultAssignments;
    }

    public function setSalesChannelDefaultAssignments(?SalesChannelCollection $salesChannelDefaultAssignments): void
    {
        $this->salesChannelDefaultAssignments = $salesChannelDefaultAssignments;
    }

    public function getSalesChannelDomains(): ?SalesChannelDomainCollection
    {
        return $this->salesChannelDomains;
    }

    public function setSalesChannelDomains(?SalesChannelDomainCollection $salesChannelDomains): void
    {
        $this->salesChannelDomains = $salesChannelDomains;
    }

    public function getCustomers(): ?CustomerCollection
    {
        return $this->customers;
    }

    public function setCustomers(?CustomerCollection $customers): void
    {
        $this->customers = $customers;
    }

    public function getNewsletterRecipients(): ?NewsletterRecipientCollection
    {
        return $this->newsletterRecipients;
    }

    public function setNewsletterRecipients(?NewsletterRecipientCollection $newsletterRecipients): void
    {
        $this->newsletterRecipients = $newsletterRecipients;
    }

    public function getOrders(): ?OrderCollection
    {
        return $this->orders;
    }

    public function setOrders(?OrderCollection $orders): void
    {
        $this->orders = $orders;
    }

    public function getCategoryTranslations(): ?CategoryTranslationCollection
    {
        return $this->categoryTranslations;
    }

    public function setCategoryTranslations(?CategoryTranslationCollection $categoryTranslations): void
    {
        $this->categoryTranslations = $categoryTranslations;
    }

    public function getCountryStateTranslations(): ?CountryStateTranslationCollection
    {
        return $this->countryStateTranslations;
    }

    public function setCountryStateTranslations(?CountryStateTranslationCollection $countryStateTranslations): void
    {
        $this->countryStateTranslations = $countryStateTranslations;
    }

    public function getCountryTranslations(): ?CountryTranslationCollection
    {
        return $this->countryTranslations;
    }

    public function setCountryTranslations(?CountryTranslationCollection $countryTranslations): void
    {
        $this->countryTranslations = $countryTranslations;
    }

    public function getCurrencyTranslations(): ?CurrencyTranslationCollection
    {
        return $this->currencyTranslations;
    }

    public function setCurrencyTranslations(?CurrencyTranslationCollection $currencyTranslations): void
    {
        $this->currencyTranslations = $currencyTranslations;
    }

    public function getCustomerGroupTranslations(): ?CustomerGroupTranslationCollection
    {
        return $this->customerGroupTranslations;
    }

    public function setCustomerGroupTranslations(?CustomerGroupTranslationCollection $customerGroupTranslations): void
    {
        $this->customerGroupTranslations = $customerGroupTranslations;
    }

    public function getLocaleTranslations(): ?LocaleTranslationCollection
    {
        return $this->localeTranslations;
    }

    public function setLocaleTranslations(?LocaleTranslationCollection $localeTranslations): void
    {
        $this->localeTranslations = $localeTranslations;
    }

    public function getMediaTranslations(): ?MediaTranslationCollection
    {
        return $this->mediaTranslations;
    }

    public function setMediaTranslations(?MediaTranslationCollection $mediaTranslations): void
    {
        $this->mediaTranslations = $mediaTranslations;
    }

    public function getPaymentMethodTranslations(): ?PaymentMethodTranslationCollection
    {
        return $this->paymentMethodTranslations;
    }

    public function setPaymentMethodTranslations(?PaymentMethodTranslationCollection $paymentMethodTranslations): void
    {
        $this->paymentMethodTranslations = $paymentMethodTranslations;
    }

    public function getProductManufacturerTranslations(): ?ProductManufacturerTranslationCollection
    {
        return $this->productManufacturerTranslations;
    }

    public function setProductManufacturerTranslations(?ProductManufacturerTranslationCollection $productManufacturerTranslations): void
    {
        $this->productManufacturerTranslations = $productManufacturerTranslations;
    }

    public function getProductTranslations(): ?ProductTranslationCollection
    {
        return $this->productTranslations;
    }

    public function setProductTranslations(?ProductTranslationCollection $productTranslations): void
    {
        $this->productTranslations = $productTranslations;
    }

    public function getShippingMethodTranslations(): ?ShippingMethodTranslationCollection
    {
        return $this->shippingMethodTranslations;
    }

    public function setShippingMethodTranslations(?ShippingMethodTranslationCollection $shippingMethodTranslations): void
    {
        $this->shippingMethodTranslations = $shippingMethodTranslations;
    }

    public function getUnitTranslations(): ?UnitTranslationCollection
    {
        return $this->unitTranslations;
    }

    public function setUnitTranslations(?UnitTranslationCollection $unitTranslations): void
    {
        $this->unitTranslations = $unitTranslations;
    }

    public function getPropertyGroupTranslations(): ?PropertyGroupTranslationCollection
    {
        return $this->propertyGroupTranslations;
    }

    public function setPropertyGroupTranslations(?PropertyGroupTranslationCollection $propertyGroupTranslations): void
    {
        $this->propertyGroupTranslations = $propertyGroupTranslations;
    }

    public function getPropertyGroupOptionTranslations(): ?PropertyGroupOptionTranslationCollection
    {
        return $this->propertyGroupOptionTranslations;
    }

    public function setPropertyGroupOptionTranslations(?PropertyGroupOptionTranslationCollection $propertyGroupOptionTranslations): void
    {
        $this->propertyGroupOptionTranslations = $propertyGroupOptionTranslations;
    }

    public function getSalesChannelTranslations(): ?SalesChannelTranslationCollection
    {
        return $this->salesChannelTranslations;
    }

    public function setSalesChannelTranslations(?SalesChannelTranslationCollection $salesChannelTranslations): void
    {
        $this->salesChannelTranslations = $salesChannelTranslations;
    }

    public function getSalesChannelTypeTranslations(): ?SalesChannelTypeTranslationCollection
    {
        return $this->salesChannelTypeTranslations;
    }

    public function setSalesChannelTypeTranslations(?SalesChannelTypeTranslationCollection $salesChannelTypeTranslations): void
    {
        $this->salesChannelTypeTranslations = $salesChannelTypeTranslations;
    }

    public function getSalutationTranslations(): ?SalutationTranslationCollection
    {
        return $this->salutationTranslations;
    }

    public function setSalutationTranslations(?SalutationTranslationCollection $salutationTranslations): void
    {
        $this->salutationTranslations = $salutationTranslations;
    }

    public function getPluginTranslations(): ?PluginTranslationCollection
    {
        return $this->pluginTranslations;
    }

    public function setPluginTranslations(?PluginTranslationCollection $pluginTranslations): void
    {
        $this->pluginTranslations = $pluginTranslations;
    }

    public function getProductStreamTranslations(): ?ProductStreamTranslationCollection
    {
        return $this->productStreamTranslations;
    }

    public function setProductStreamTranslations(?ProductStreamTranslationCollection $productStreamTranslations): void
    {
        $this->productStreamTranslations = $productStreamTranslations;
    }

    public function getStateMachineTranslations(): ?StateMachineTranslationCollection
    {
        return $this->stateMachineTranslations;
    }

    public function setStateMachineTranslations(?StateMachineTranslationCollection $stateMachineTranslations): void
    {
        $this->stateMachineTranslations = $stateMachineTranslations;
    }

    public function getStateMachineStateTranslations(): ?StateMachineStateTranslationCollection
    {
        return $this->stateMachineStateTranslations;
    }

    public function setStateMachineStateTranslations(?StateMachineStateTranslationCollection $stateMachineStateTranslations): void
    {
        $this->stateMachineStateTranslations = $stateMachineStateTranslations;
    }

    public function getCmsPageTranslations(): ?CmsPageTranslationCollection
    {
        return $this->cmsPageTranslations;
    }

    public function setCmsPageTranslations(?CmsPageTranslationCollection $cmsPageTranslations): void
    {
        $this->cmsPageTranslations = $cmsPageTranslations;
    }

    public function getCmsSlotTranslations(): ?CmsSlotTranslationCollection
    {
        return $this->cmsSlotTranslations;
    }

    public function setCmsSlotTranslations(?CmsSlotTranslationCollection $cmsSlotTranslations): void
    {
        $this->cmsSlotTranslations = $cmsSlotTranslations;
    }

    public function getMailTemplateTranslations(): ?MailTemplateTranslationCollection
    {
        return $this->mailTemplateTranslations;
    }

    public function setMailTemplateTranslations(?MailTemplateTranslationCollection $mailTemplateTranslations): void
    {
        $this->mailTemplateTranslations = $mailTemplateTranslations;
    }

    public function getMailHeaderFooterTranslations(): ?MailHeaderFooterTranslationCollection
    {
        return $this->mailHeaderFooterTranslations;
    }

    public function setMailHeaderFooterTranslations(?MailHeaderFooterTranslationCollection $mailHeaderFooterTranslations): void
    {
        $this->mailHeaderFooterTranslations = $mailHeaderFooterTranslations;
    }

    public function getDocumentTypeTranslations(): ?DocumentTypeTranslationCollection
    {
        return $this->documentTypeTranslations;
    }

    public function setDocumentTypeTranslations(?DocumentTypeTranslationCollection $documentTypeTranslations): void
    {
        $this->documentTypeTranslations = $documentTypeTranslations;
    }

    public function getNumberRangeTypeTranslations(): ?NumberRangeTypeTranslationCollection
    {
        return $this->numberRangeTypeTranslations;
    }

    public function setNumberRangeTypeTranslations(?NumberRangeTypeTranslationCollection $numberRangeTypeTranslations): void
    {
        $this->numberRangeTypeTranslations = $numberRangeTypeTranslations;
    }

    public function getDeliveryTimeTranslations(): ?DeliveryTimeTranslationCollection
    {
        return $this->deliveryTimeTranslations;
    }

    public function setDeliveryTimeTranslations(?DeliveryTimeTranslationCollection $deliveryTimeTranslations): void
    {
        $this->deliveryTimeTranslations = $deliveryTimeTranslations;
    }

    public function getProductSearchKeywords(): ?ProductSearchKeywordCollection
    {
        return $this->productSearchKeywords;
    }

    public function setProductSearchKeywords(?ProductSearchKeywordCollection $productSearchKeywords): void
    {
        $this->productSearchKeywords = $productSearchKeywords;
    }

    public function getProductKeywordDictionaries(): ?ProductKeywordDictionaryCollection
    {
        return $this->productKeywordDictionaries;
    }

    public function setProductKeywordDictionaries(?ProductKeywordDictionaryCollection $productKeywordDictionaries): void
    {
        $this->productKeywordDictionaries = $productKeywordDictionaries;
    }

    public function getMailTemplateTypeTranslations(): ?MailTemplateTypeTranslationCollection
    {
        return $this->mailTemplateTypeTranslations;
    }

    public function setMailTemplateTypeTranslations(?MailTemplateTypeTranslationCollection $mailTemplateTypeTranslations): void
    {
        $this->mailTemplateTypeTranslations = $mailTemplateTypeTranslations;
    }

    public function getPromotionTranslations(): ?PromotionTranslationCollection
    {
        return $this->promotionTranslations;
    }

    public function setPromotionTranslations(?PromotionTranslationCollection $promotionTranslations): void
    {
        $this->promotionTranslations = $promotionTranslations;
    }

    public function getNumberRangeTranslations(): ?NumberRangeTranslationCollection
    {
        return $this->numberRangeTranslations;
    }

    public function setNumberRangeTranslations(?NumberRangeTranslationCollection $numberRangeTranslations): void
    {
        $this->numberRangeTranslations = $numberRangeTranslations;
    }

    public function getProductReviews(): ?ProductReviewCollection
    {
        return $this->productReviews;
    }

    public function setProductReviews(?ProductReviewCollection $productReviews): void
    {
        $this->productReviews = $productReviews;
    }

    public function getSeoUrlTranslations(): ?SeoUrlCollection
    {
        return $this->seoUrlTranslations;
    }

    public function setSeoUrlTranslations(?SeoUrlCollection $seoUrlTranslations): void
    {
        $this->seoUrlTranslations = $seoUrlTranslations;
    }

    public function getTaxRuleTypeTranslations(): ?TaxRuleTypeTranslationCollection
    {
        return $this->taxRuleTypeTranslations;
    }

    public function setTaxRuleTypeTranslations(?TaxRuleTypeTranslationCollection $taxRuleTypeTranslations): void
    {
        $this->taxRuleTypeTranslations = $taxRuleTypeTranslations;
    }

    public function getProductCrossSellingTranslations(): ?ProductCrossSellingTranslationCollection
    {
        return $this->productCrossSellingTranslations;
    }

    public function setProductCrossSellingTranslations(?ProductCrossSellingTranslationCollection $productCrossSellingTranslations): void
    {
        $this->productCrossSellingTranslations = $productCrossSellingTranslations;
    }

    public function getImportExportProfileTranslations(): ?ImportExportProfileTranslationCollection
    {
        return $this->importExportProfileTranslations;
    }

    public function setImportExportProfileTranslations(?ImportExportProfileTranslationCollection $importExportProfileTranslations): void
    {
        $this->importExportProfileTranslations = $importExportProfileTranslations;
    }

    public function getProductSortingTranslations(): ?ProductSortingTranslationCollection
    {
        return $this->productSortingTranslations;
    }

    public function setProductSortingTranslations(?ProductSortingTranslationCollection $productSortingTranslations): void
    {
        $this->productSortingTranslations = $productSortingTranslations;
    }

    public function getProductFeatureSetTranslations(): ?ProductFeatureSetTranslationCollection
    {
        return $this->productFeatureSetTranslations;
    }

    public function setProductFeatureSetTranslations(?ProductFeatureSetTranslationCollection $productFeatureSetTranslations): void
    {
        $this->productFeatureSetTranslations = $productFeatureSetTranslations;
    }

    public function getAppTranslations(): ?AppTranslationCollection
    {
        return $this->appTranslations;
    }

    public function setAppTranslations(?AppTranslationCollection $appTranslations): void
    {
        $this->appTranslations = $appTranslations;
    }

    public function getActionButtonTranslations(): ?AppActionButtonTranslationCollection
    {
        return $this->actionButtonTranslations;
    }

    public function setActionButtonTranslations(?AppActionButtonTranslationCollection $actionButtonTranslations): void
    {
        $this->actionButtonTranslations = $actionButtonTranslations;
    }

    public function getLandingPageTranslations(): ?LandingPageTranslationCollection
    {
        return $this->landingPageTranslations;
    }

    public function setLandingPageTranslations(?LandingPageTranslationCollection $landingPageTranslations): void
    {
        $this->landingPageTranslations = $landingPageTranslations;
    }

    public function getAppCmsBlockTranslations(): ?AppCmsBlockTranslationCollection
    {
        return $this->appCmsBlockTranslations;
    }

    public function setAppCmsBlockTranslations(?AppCmsBlockTranslationCollection $appCmsBlockTranslations): void
    {
        $this->appCmsBlockTranslations = $appCmsBlockTranslations;
    }

    public function getProductSearchConfig(): ?ProductSearchConfigEntity
    {
        return $this->productSearchConfig;
    }

    public function setProductSearchConfig(?ProductSearchConfigEntity $productSearchConfig): void
    {
        $this->productSearchConfig = $productSearchConfig;
    }

    public function getThemeTranslations(): ?ThemeTranslationCollection
    {
        return $this->themeTranslations;
    }

    public function setThemeTranslations(?ThemeTranslationCollection $themeTranslations): void
    {
        $this->themeTranslations = $themeTranslations;
    }
}
