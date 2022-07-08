<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Code\EventSubscriber;

use Swaggest\ShopwareSdk\Code\Event\ClassUsedEvent;
use Swaggest\ShopwareSdk\Code\UseAwareCodeGeneratorInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

final class CodeEventSubscriber implements EventSubscriberInterface
{
    public function __construct(private UseAwareCodeGeneratorInterface $codeGenerator)
    {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            ClassUsedEvent::class => 'onClassUsed',
        ];
    }

    public function onClassUsed(ClassUsedEvent $event): void
    {
        $this->codeGenerator->addUse($event->getClass());
    }
}
