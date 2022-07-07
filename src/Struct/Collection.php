<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Struct;

abstract class Collection extends Struct implements \Countable, \IteratorAggregate
{
    protected array $elements = [];

    public function __construct(iterable $elements = [])
    {
        foreach ($elements as $key => $element) {
            $this->set($key, $element);
        }
    }

    final public function add($element): void
    {
        $this->validateType($element);

        $this->elements[] = $element;
    }

    final public function set($key, $element): void
    {
        $this->validateType($element);

        if ($key === null) {
            $this->elements[] = $element;
        } else {
            $this->elements[$key] = $element;
        }
    }

    final public function get(mixed $key): mixed
    {
        if ($this->has($key)) {
            return $this->elements[$key];
        }

        return null;
    }

    final public function clear(): void
    {
        $this->elements = [];
    }

    final public function count(): int
    {
        return \count($this->elements);
    }

    final public function getKeys(): array
    {
        return array_keys($this->elements);
    }

    final public function has($key): bool
    {
        return \array_key_exists($key, $this->elements);
    }

    final public function map(\Closure $closure): array
    {
        return array_map($closure, $this->elements);
    }

    final public function reduce(\Closure $closure, $initial = null)
    {
        return array_reduce($this->elements, $closure, $initial);
    }

    final public function fmap(\Closure $closure): array
    {
        return array_filter($this->map($closure));
    }

    final public function sort(\Closure $closure): void
    {
        uasort($this->elements, $closure);
    }

    final public function filterInstance(string $class): static
    {
        return $this->filter(static fn ($item) => $item instanceof $class);
    }

    final public function filter(\Closure $closure): static
    {
        return $this->createNew(array_filter($this->elements, $closure));
    }

    final public function slice(int $offset, ?int $length = null): static
    {
        return $this->createNew(\array_slice($this->elements, $offset, $length, true));
    }

    final public function getElements(): array
    {
        return $this->elements;
    }

    final public function jsonSerialize(): array
    {
        return array_values($this->elements);
    }

    final public function first()
    {
        return array_values($this->elements)[0] ?? null;
    }

    final public function getAt(int $position)
    {
        return array_values($this->elements)[$position] ?? null;
    }

    final public function last()
    {
        return array_values($this->elements)[\count($this->elements) - 1] ?? null;
    }

    final public function remove(int|string $key): void
    {
        unset($this->elements[$key]);
    }

    final public function getIterator(): \Traversable
    {
        yield from $this->elements;
    }

    protected function getExpectedClass(): ?string
    {
        return null;
    }

    protected function createNew(iterable $elements = []): static
    {
        return new static($elements);
    }

    protected function validateType($element): void
    {
        $expectedClass = $this->getExpectedClass();
        if ($expectedClass === null) {
            return;
        }

        if (!$element instanceof $expectedClass) {
            $elementClass = $element::class;

            throw new \InvalidArgumentException(
                sprintf('Expected collection element of type %s got %s', $expectedClass, $elementClass)
            );
        }
    }
}
