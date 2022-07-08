<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\Tag;

use Swaggest\ShopwareSdk\Entity\Category\CategoryCollection;
use Swaggest\ShopwareSdk\Entity\Customer\CustomerCollection;
use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\LandingPage\LandingPageCollection;
use Swaggest\ShopwareSdk\Entity\Media\MediaCollection;
use Swaggest\ShopwareSdk\Entity\NewsletterRecipient\NewsletterRecipientCollection;
use Swaggest\ShopwareSdk\Entity\Order\OrderCollection;
use Swaggest\ShopwareSdk\Entity\Product\ProductCollection;
use Swaggest\ShopwareSdk\Entity\ShippingMethod\ShippingMethodCollection;

final class TagEntity extends Entity
{
    use EntityIdTrait;

    protected string $name;

    protected ?ProductCollection $products;

    protected ?MediaCollection $media;

    protected ?CategoryCollection $categories;

    protected ?CustomerCollection $customers;

    protected ?OrderCollection $orders;

    protected ?ShippingMethodCollection $shippingMethods;

    protected ?NewsletterRecipientCollection $newsletterRecipients;

    protected ?LandingPageCollection $landingPages;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getProducts(): ?ProductCollection
    {
        return $this->products;
    }

    public function setProducts(?ProductCollection $products): void
    {
        $this->products = $products;
    }

    public function getMedia(): ?MediaCollection
    {
        return $this->media;
    }

    public function setMedia(?MediaCollection $media): void
    {
        $this->media = $media;
    }

    public function getCategories(): ?CategoryCollection
    {
        return $this->categories;
    }

    public function setCategories(?CategoryCollection $categories): void
    {
        $this->categories = $categories;
    }

    public function getCustomers(): ?CustomerCollection
    {
        return $this->customers;
    }

    public function setCustomers(?CustomerCollection $customers): void
    {
        $this->customers = $customers;
    }

    public function getOrders(): ?OrderCollection
    {
        return $this->orders;
    }

    public function setOrders(?OrderCollection $orders): void
    {
        $this->orders = $orders;
    }

    public function getShippingMethods(): ?ShippingMethodCollection
    {
        return $this->shippingMethods;
    }

    public function setShippingMethods(?ShippingMethodCollection $shippingMethods): void
    {
        $this->shippingMethods = $shippingMethods;
    }

    public function getNewsletterRecipients(): ?NewsletterRecipientCollection
    {
        return $this->newsletterRecipients;
    }

    public function setNewsletterRecipients(?NewsletterRecipientCollection $newsletterRecipients): void
    {
        $this->newsletterRecipients = $newsletterRecipients;
    }

    public function getLandingPages(): ?LandingPageCollection
    {
        return $this->landingPages;
    }

    public function setLandingPages(?LandingPageCollection $landingPages): void
    {
        $this->landingPages = $landingPages;
    }
}
