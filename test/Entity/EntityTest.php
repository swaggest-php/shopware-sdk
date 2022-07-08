<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Test\Entity;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use Swaggest\ShopwareSdk\Entity\Entity;
use Swaggest\ShopwareSdk\Test\Entity\Entities\ElephantEntity;
use Swaggest\ShopwareSdk\Test\Entity\Entities\HappyPersonEntity;
use Swaggest\ShopwareSdk\Test\Struct\Structs\TestStruct;

final class EntityTest extends TestCase
{
    public function testMagicAccessors(): void
    {
        $person = new HappyPersonEntity();
        $person->age = 10;
        $person->happyLevel = 'not so happy';

        self::assertSame(10, $person->age);
        self::assertSame('not so happy', $person->happyLevel);
    }

    public function testGetWithNonexistentProperty(): void
    {
        $this->expectException(InvalidArgumentException::class);

        $elephant = new ElephantEntity();

        $elephant->get('legs');
    }

    public function testGetExtension(): void
    {
        $person = new HappyPersonEntity();
        $person->addExtension('ext', new TestStruct());

        self::assertNotNull($person->get('ext'));
    }

    public function testHas(): void
    {
        $elephant = new ElephantEntity();

        self::assertTrue($elephant->has('earSize'));
    }

    /**
     * @dataProvider provideSerializedEntities
     */
    public function testJsonSerialize(array $serializedEntity, Entity $entity): void
    {
        self::assertEquals($serializedEntity, $entity->jsonSerialize());
    }

    /**
     * @dataProvider provideApiAliases
     */
    public function testGetApiAlias(string $expectedApiAlias, Entity $entity): void
    {
        self::assertSame($expectedApiAlias, $entity->getApiAlias());
    }

    public function provideApiAliases(): iterable
    {
        yield ['happy_person', new HappyPersonEntity()];
        yield ['elephant', new ElephantEntity()];
    }

    public function provideSerializedEntities(): iterable
    {
        $elephant = new ElephantEntity();
        $elephant->setEarSize(10.0);
        $elephant->setName('Buddy');

        yield [
            [
                'earSize' => 10.0,
                'name' => 'Buddy',
                'versionId' => null,
                'translated' => [],
                'createdAt' => null,
                'updatedAt' => null,
                'extensions' => [],
            ],
            $elephant,
        ];

        $person = new HappyPersonEntity();
        $person->setAge(27);
        $person->setHappyLevel('very happy');

        yield [
            [
                'age' => 27,
                'happyLevel' => 'very happy',
                'versionId' => null,
                'translated' => [],
                'createdAt' => null,
                'updatedAt' => null,
                'extensions' => [],
            ],
            $person,
        ];
    }
}
