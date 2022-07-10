<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\Version;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\VersionCommit\VersionCommitCollection;

final class VersionEntity extends Entity
{
    protected string $name;

    protected ?VersionCommitCollection $commits;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getCommits(): ?VersionCommitCollection
    {
        return $this->commits;
    }

    public function setCommits(?VersionCommitCollection $commits): void
    {
        $this->commits = $commits;
    }
}
