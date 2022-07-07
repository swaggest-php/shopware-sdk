<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Test\Struct;

use Swaggest\ShopwareSdk\Test\Entity\Entities\ElephantEntity;
use Swaggest\ShopwareSdk\Test\Entity\Entities\HappyPersonEntity;
use Swaggest\ShopwareSdk\Test\Struct\Collections\AnotherTestCollection;
use Swaggest\ShopwareSdk\Test\Struct\Collections\TestCollection;
use PHPUnit\Framework\TestCase;

final class CollectionTest extends TestCase
{
    public function testAccess(): void
    {
        $collection = new TestCollection();

        $collection->set('elem1', 'a');
        $collection->set('elem2', 'b');

        self::assertTrue($collection->has('elem2'));
        self::assertSame('a', $collection->get('elem1'));
        self::assertSame('b', $collection->get('elem2'));
        self::assertSame(['elem1', 'elem2'], $collection->getKeys());

        $collection->remove('elem1');

        self::assertNull($collection->get('elem1'));

        $collection->clear();

        self::assertSame(0, $collection->count());
    }

    public function testAccessWithExpectedType(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        $collection = new AnotherTestCollection();

        self::assertSame(HappyPersonEntity::class, $collection->getExpectedClass());

        $collection->add(new ElephantEntity());
    }

    public function testMap(): void
    {
        $collection = new TestCollection([1, 2, 3]);

        self::assertSame([2, 4, 6], $collection->map(fn (int $n) => $n * 2));
    }

    public function testReduce(): void
    {
        $collection = new TestCollection([1, 2, 3]);

        self::assertSame(6, $collection->reduce(fn (int $acc, int $n) => $acc + $n, 0));
    }

    public function testFmap(): void
    {
        $collection = new TestCollection([1, 2, 3]);

        self::assertSame([1 => true], $collection->fmap(fn (int $n) => $n % 2 === 0));
    }

    public function testFilterInstance(): void
    {
        $collection = new TestCollection([new ElephantEntity(), new ElephantEntity(), new HappyPersonEntity()]);

        $elephants = $collection->filterInstance(ElephantEntity::class);

        self::assertEquals(2, $elephants->count());
    }

    public function testFilter(): void
    {
        $collection = new TestCollection([1, 2, 3]);

        self::assertEquals(0, $collection->filter(fn (int $n) => $n > 3)->count());
    }

    public function testSlice(): void
    {
        $collection = new TestCollection([1, 2, 3]);

        self::assertEquals(1, $collection->slice(0, 1)->count());
    }

    public function testFirst(): void
    {
        $collection = new TestCollection([1, 2, 3]);

        self::assertEquals(1, $collection->first());
    }

    public function testLast(): void
    {
        $collection = new TestCollection([1, 2, 3]);

        self::assertEquals(3, $collection->last());
    }

    public function getAt(): void
    {
        $collection = new TestCollection([1, 2, 3]);

        self::assertEquals(2, $collection->getAt(1));
    }
}
