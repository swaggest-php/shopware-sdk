<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\NewsletterRecipientTag;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\NewsletterRecipient\NewsletterRecipientEntity;
use Swaggest\ShopwareSdk\Entity\Tag\TagEntity;

final class NewsletterRecipientTagEntity extends Entity
{
    protected string $newsletterRecipientId;

    protected string $tagId;

    protected ?NewsletterRecipientEntity $newsletterRecipient;

    protected ?TagEntity $tag;

    public function getNewsletterRecipientId(): string
    {
        return $this->newsletterRecipientId;
    }

    public function setNewsletterRecipientId(string $newsletterRecipientId): void
    {
        $this->newsletterRecipientId = $newsletterRecipientId;
    }

    public function getTagId(): string
    {
        return $this->tagId;
    }

    public function setTagId(string $tagId): void
    {
        $this->tagId = $tagId;
    }

    public function getNewsletterRecipient(): ?NewsletterRecipientEntity
    {
        return $this->newsletterRecipient;
    }

    public function setNewsletterRecipient(?NewsletterRecipientEntity $newsletterRecipient): void
    {
        $this->newsletterRecipient = $newsletterRecipient;
    }

    public function getTag(): ?TagEntity
    {
        return $this->tag;
    }

    public function setTag(?TagEntity $tag): void
    {
        $this->tag = $tag;
    }
}
