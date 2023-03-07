<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\ScheduledTask;

use Swaggest\ShopwareSdk\Entity\DeadMessage\DeadMessageCollection;
use Swaggest\ShopwareSdk\Entity\Entity;

final class ScheduledTaskEntity extends Entity
{
    protected string $name;

    protected string $scheduledTaskClass;

    protected int $runInterval;

    protected string $status;

    protected ?\DateTimeInterface $lastExecutionTime;

    protected \DateTimeInterface $nextExecutionTime;

    protected ?DeadMessageCollection $deadMessages;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getScheduledTaskClass(): string
    {
        return $this->scheduledTaskClass;
    }

    public function setScheduledTaskClass(string $scheduledTaskClass): void
    {
        $this->scheduledTaskClass = $scheduledTaskClass;
    }

    public function getRunInterval(): int
    {
        return $this->runInterval;
    }

    public function setRunInterval(int $runInterval): void
    {
        $this->runInterval = $runInterval;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    public function getLastExecutionTime(): ?\DateTimeInterface
    {
        return $this->lastExecutionTime;
    }

    public function setLastExecutionTime(?\DateTimeInterface $lastExecutionTime): void
    {
        $this->lastExecutionTime = $lastExecutionTime;
    }

    public function getNextExecutionTime(): \DateTimeInterface
    {
        return $this->nextExecutionTime;
    }

    public function setNextExecutionTime(\DateTimeInterface $nextExecutionTime): void
    {
        $this->nextExecutionTime = $nextExecutionTime;
    }

    public function getDeadMessages(): ?DeadMessageCollection
    {
        return $this->deadMessages;
    }

    public function setDeadMessages(?DeadMessageCollection $deadMessages): void
    {
        $this->deadMessages = $deadMessages;
    }
}
