<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Code\EntityDefinition;

use Psr\EventDispatcher\EventDispatcherInterface;
use Swaggest\ShopwareSdk\Code\CaseConverterTrait;
use Swaggest\ShopwareSdk\Code\Event\ClassUsedEvent;
use Swaggest\ShopwareSdk\Exception\FlagGeneratorException;

final class FlagGenerator
{
    use CaseConverterTrait;

    public function __construct(private EventDispatcherInterface $eventDispatcher)
    {
    }

    public function generateFlag(string $flagName, bool|array|string|float $flagDescriptor): string
    {
        $className = $this->snakeToPascalCase($flagName);
        $class = 'Swaggest\\ShopwareSdk\\Schema\\Flag\\' . $className;

        $this->eventDispatcher->dispatch(new ClassUsedEvent($class));

        return match ($flagName) {
            'cascade_delete',
            'primary_key',
            'extension',
            'restrict_delete',
            'runtime',
            'computed',
            'translatable',
            'set_null_on_delete',
            'allow_html',
            'inherited',
            'allow_empty_string',
            'required' => \sprintf('new %s()', $className),

            'reversed_inherited',
            'since' => \sprintf("new %s('%s')", $className, $flagDescriptor),

            'deprecated' => $this->generateDeprecatedFlag($flagDescriptor),

            'search_ranking' => \sprintf('new SearchRanking(%f)', $flagDescriptor),
            'read_protected', 'write_protected' => $this->generateProtectedFlag($flagName, $flagDescriptor),
            default => throw new FlagGeneratorException('Unknown flag: ' . $flagName)
        };
    }

    private function generateDeprecatedFlag(array $flagDescriptor): string
    {
        $replacedBy = $flagDescriptor['replaced_by'];

        return \sprintf(
            "new Deprecated('%s', '%s', %s)",
            $flagDescriptor['deprecated_since'],
            $flagDescriptor['will_be_removed_in'],
            null !== $replacedBy ? "'$replacedBy'" : 'null'
        );
    }

    private function generateProtectedFlag(string $flagName, array $flagDescriptor): string
    {
        $className = match ($flagName) {
            'read_protected' => 'ReadProtected',
            'write_protected' => 'WriteProtected'
        };

        $this->eventDispatcher->dispatch(new ClassUsedEvent('Swaggest\\ShopwareSdk\\Schema\\Flag\\' . $className));
        $this->eventDispatcher->dispatch(new ClassUsedEvent('Swaggest\\ShopwareSdk\\Schema\\Flag\\ProtectedFlag'));

        $output = \sprintf('new %s(', $className);
        $scopes = array_map(fn (string $class) => match ($class) {
            'Shopware\\Core\\Framework\\Api\\Context\\AdminApiSource' => "ProtectedFlag::ADMIN_API",
            'Shopware\\Core\\Framework\\Api\\Context\\SalesChannelApiSource' => "ProtectedFlag::SALES_CHANNEL_API",
            'system' => 'ProtectedFlag::SYSTEM',
            default => throw new FlagGeneratorException('Unknown source: ' . $class)
        }, $flagDescriptor[0]);

        $output .= \sprintf("[%s])", \implode(', ', $scopes));

        return $output;
    }
}
