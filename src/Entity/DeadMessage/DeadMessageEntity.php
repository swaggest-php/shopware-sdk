<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Entity\DeadMessage;

use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Entity\EntityIdTrait;
use Swaggest\ShopwareSdk\Entity\ScheduledTask\ScheduledTaskEntity;

final class DeadMessageEntity extends Entity
{
    use EntityIdTrait;

    protected string $originalMessageClass;

    protected string $serializedOriginalMessage;

    protected string $handlerClass;

    protected bool $encrypted;

    protected int $errorCount;

    protected \DateTimeInterface $nextExecutionTime;

    protected string $exception;

    protected string $exceptionMessage;

    protected string $exceptionFile;

    protected int $exceptionLine;

    protected ?string $scheduledTaskId;

    protected ?ScheduledTaskEntity $scheduledTask;

    public function getOriginalMessageClass(): string
    {
        return $this->originalMessageClass;
    }

    public function setOriginalMessageClass(string $originalMessageClass): void
    {
        $this->originalMessageClass = $originalMessageClass;
    }

    public function getSerializedOriginalMessage(): string
    {
        return $this->serializedOriginalMessage;
    }

    public function setSerializedOriginalMessage(string $serializedOriginalMessage): void
    {
        $this->serializedOriginalMessage = $serializedOriginalMessage;
    }

    public function getHandlerClass(): string
    {
        return $this->handlerClass;
    }

    public function setHandlerClass(string $handlerClass): void
    {
        $this->handlerClass = $handlerClass;
    }

    public function getEncrypted(): bool
    {
        return $this->encrypted;
    }

    public function setEncrypted(bool $encrypted): void
    {
        $this->encrypted = $encrypted;
    }

    public function getErrorCount(): int
    {
        return $this->errorCount;
    }

    public function setErrorCount(int $errorCount): void
    {
        $this->errorCount = $errorCount;
    }

    public function getNextExecutionTime(): \DateTimeInterface
    {
        return $this->nextExecutionTime;
    }

    public function setNextExecutionTime(\DateTimeInterface $nextExecutionTime): void
    {
        $this->nextExecutionTime = $nextExecutionTime;
    }

    public function getException(): string
    {
        return $this->exception;
    }

    public function setException(string $exception): void
    {
        $this->exception = $exception;
    }

    public function getExceptionMessage(): string
    {
        return $this->exceptionMessage;
    }

    public function setExceptionMessage(string $exceptionMessage): void
    {
        $this->exceptionMessage = $exceptionMessage;
    }

    public function getExceptionFile(): string
    {
        return $this->exceptionFile;
    }

    public function setExceptionFile(string $exceptionFile): void
    {
        $this->exceptionFile = $exceptionFile;
    }

    public function getExceptionLine(): int
    {
        return $this->exceptionLine;
    }

    public function setExceptionLine(int $exceptionLine): void
    {
        $this->exceptionLine = $exceptionLine;
    }

    public function getScheduledTaskId(): ?string
    {
        return $this->scheduledTaskId;
    }

    public function setScheduledTaskId(?string $scheduledTaskId): void
    {
        $this->scheduledTaskId = $scheduledTaskId;
    }

    public function getScheduledTask(): ?ScheduledTaskEntity
    {
        return $this->scheduledTask;
    }

    public function setScheduledTask(?ScheduledTaskEntity $scheduledTask): void
    {
        $this->scheduledTask = $scheduledTask;
    }
}
