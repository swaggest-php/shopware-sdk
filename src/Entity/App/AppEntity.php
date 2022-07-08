<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\App;

use Swaggest\ShopwareSdk\Entity\AclRole\AclRoleEntity;
use Swaggest\ShopwareSdk\Entity\AppActionButton\AppActionButtonCollection;
use Swaggest\ShopwareSdk\Entity\AppCmsBlock\AppCmsBlockCollection;
use Swaggest\ShopwareSdk\Entity\AppPaymentMethod\AppPaymentMethodCollection;
use Swaggest\ShopwareSdk\Entity\AppTemplate\AppTemplateCollection;
use Swaggest\ShopwareSdk\Entity\AppTranslation\AppTranslationCollection;
use Swaggest\ShopwareSdk\Entity\CustomFieldSet\CustomFieldSetCollection;
use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\Integration\IntegrationEntity;
use Swaggest\ShopwareSdk\Entity\Script\ScriptCollection;
use Swaggest\ShopwareSdk\Entity\Webhook\WebhookCollection;

final class AppEntity extends Entity
{
    use EntityIdTrait;

    protected string $name;

    protected string $path;

    protected ?string $author;

    protected ?string $copyright;

    protected ?string $license;

    protected bool $active;

    protected bool $configurable;

    protected ?string $privacy;

    protected string $version;

    protected ?string $iconRaw;

    protected ?string $icon;

    protected ?string $appSecret;

    protected array $modules;

    protected array $mainModule;

    protected array $cookies;

    protected AppTranslationCollection $translations;

    protected string $label;

    protected ?string $description;

    protected ?string $privacyPolicyExtensions;

    protected array $customFields;

    protected string $integrationId;

    protected ?IntegrationEntity $integration;

    protected string $aclRoleId;

    protected ?AclRoleEntity $aclRole;

    protected ?CustomFieldSetCollection $customFieldSets;

    protected ?AppActionButtonCollection $actionButtons;

    protected ?AppTemplateCollection $templates;

    protected ?ScriptCollection $scripts;

    protected ?WebhookCollection $webhooks;

    protected ?AppPaymentMethodCollection $paymentMethods;

    protected ?AppCmsBlockCollection $cmsBlocks;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getPath(): string
    {
        return $this->path;
    }

    public function setPath(string $path): void
    {
        $this->path = $path;
    }

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setAuthor(?string $author): void
    {
        $this->author = $author;
    }

    public function getCopyright(): ?string
    {
        return $this->copyright;
    }

    public function setCopyright(?string $copyright): void
    {
        $this->copyright = $copyright;
    }

    public function getLicense(): ?string
    {
        return $this->license;
    }

    public function setLicense(?string $license): void
    {
        $this->license = $license;
    }

    public function getActive(): bool
    {
        return $this->active;
    }

    public function setActive(bool $active): void
    {
        $this->active = $active;
    }

    public function getConfigurable(): bool
    {
        return $this->configurable;
    }

    public function setConfigurable(bool $configurable): void
    {
        $this->configurable = $configurable;
    }

    public function getPrivacy(): ?string
    {
        return $this->privacy;
    }

    public function setPrivacy(?string $privacy): void
    {
        $this->privacy = $privacy;
    }

    public function getVersion(): string
    {
        return $this->version;
    }

    public function setVersion(string $version): void
    {
        $this->version = $version;
    }

    public function getIconRaw(): ?string
    {
        return $this->iconRaw;
    }

    public function setIconRaw(?string $iconRaw): void
    {
        $this->iconRaw = $iconRaw;
    }

    public function getIcon(): ?string
    {
        return $this->icon;
    }

    public function setIcon(?string $icon): void
    {
        $this->icon = $icon;
    }

    public function getAppSecret(): ?string
    {
        return $this->appSecret;
    }

    public function setAppSecret(?string $appSecret): void
    {
        $this->appSecret = $appSecret;
    }

    public function getModules(): array
    {
        return $this->modules;
    }

    public function setModules(array $modules): void
    {
        $this->modules = $modules;
    }

    public function getMainModule(): array
    {
        return $this->mainModule;
    }

    public function setMainModule(array $mainModule): void
    {
        $this->mainModule = $mainModule;
    }

    public function getCookies(): array
    {
        return $this->cookies;
    }

    public function setCookies(array $cookies): void
    {
        $this->cookies = $cookies;
    }

    public function getTranslations(): AppTranslationCollection
    {
        return $this->translations;
    }

    public function setTranslations(AppTranslationCollection $translations): void
    {
        $this->translations = $translations;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function setLabel(string $label): void
    {
        $this->label = $label;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    public function getPrivacyPolicyExtensions(): ?string
    {
        return $this->privacyPolicyExtensions;
    }

    public function setPrivacyPolicyExtensions(?string $privacyPolicyExtensions): void
    {
        $this->privacyPolicyExtensions = $privacyPolicyExtensions;
    }

    public function getCustomFields(): array
    {
        return $this->customFields;
    }

    public function setCustomFields(array $customFields): void
    {
        $this->customFields = $customFields;
    }

    public function getIntegrationId(): string
    {
        return $this->integrationId;
    }

    public function setIntegrationId(string $integrationId): void
    {
        $this->integrationId = $integrationId;
    }

    public function getIntegration(): ?IntegrationEntity
    {
        return $this->integration;
    }

    public function setIntegration(?IntegrationEntity $integration): void
    {
        $this->integration = $integration;
    }

    public function getAclRoleId(): string
    {
        return $this->aclRoleId;
    }

    public function setAclRoleId(string $aclRoleId): void
    {
        $this->aclRoleId = $aclRoleId;
    }

    public function getAclRole(): ?AclRoleEntity
    {
        return $this->aclRole;
    }

    public function setAclRole(?AclRoleEntity $aclRole): void
    {
        $this->aclRole = $aclRole;
    }

    public function getCustomFieldSets(): ?CustomFieldSetCollection
    {
        return $this->customFieldSets;
    }

    public function setCustomFieldSets(?CustomFieldSetCollection $customFieldSets): void
    {
        $this->customFieldSets = $customFieldSets;
    }

    public function getActionButtons(): ?AppActionButtonCollection
    {
        return $this->actionButtons;
    }

    public function setActionButtons(?AppActionButtonCollection $actionButtons): void
    {
        $this->actionButtons = $actionButtons;
    }

    public function getTemplates(): ?AppTemplateCollection
    {
        return $this->templates;
    }

    public function setTemplates(?AppTemplateCollection $templates): void
    {
        $this->templates = $templates;
    }

    public function getScripts(): ?ScriptCollection
    {
        return $this->scripts;
    }

    public function setScripts(?ScriptCollection $scripts): void
    {
        $this->scripts = $scripts;
    }

    public function getWebhooks(): ?WebhookCollection
    {
        return $this->webhooks;
    }

    public function setWebhooks(?WebhookCollection $webhooks): void
    {
        $this->webhooks = $webhooks;
    }

    public function getPaymentMethods(): ?AppPaymentMethodCollection
    {
        return $this->paymentMethods;
    }

    public function setPaymentMethods(?AppPaymentMethodCollection $paymentMethods): void
    {
        $this->paymentMethods = $paymentMethods;
    }

    public function getCmsBlocks(): ?AppCmsBlockCollection
    {
        return $this->cmsBlocks;
    }

    public function setCmsBlocks(?AppCmsBlockCollection $cmsBlocks): void
    {
        $this->cmsBlocks = $cmsBlocks;
    }
}
